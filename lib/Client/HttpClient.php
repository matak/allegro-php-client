<?php
/**
 * HttpClient.php
 *
 * @author     Jan Chren (dev.rindeal AT outlook.com)
 * @copyright  Jan Chren (dev.rindeal AT outlook.com) (c) 2014
 * @license    For the full copyright and license information, please view the LICENSE
 *             file that was distributed with this source code.
 */

namespace Rindeal\Allegro\Client;


use Rindeal\Allegro\Client;
use Rindeal\Allegro\Client\Exceptions\HttpClientException;
use Rindeal\Allegro\Client\HttpClient\HttpClientParameters;
use Rindeal\Allegro\Client\HttpClient\SoapClient;
use Rindeal\Allegro\Client\HttpClient\Wsdl\DoLoginEncRequest;
use Rindeal\Allegro\Client\HttpClient\Wsdl\DoQueryAllSysStatusRequest;
use Rindeal\Allegro\Client\HttpClient\Wsdl\SysStatusType;
use Rindeal\Allegro\Client\Structure\Period;


/**
 * HttpClient provides "low-level" communication with Allegro servers
 *
 * Currently it communicates via SOAP protocol based on XML
 */
class HttpClient
{
    /**
     * @var Client upstream
     */
    private $client;

    /**
     * @var SoapClient downstream
     * @internal
     */
    private $soapClient;

    /**
     * @var \Psr\Cache\CacheItemPoolInterface
     */
    private $cache;

    /**
     * @param Client $client
     * @param HttpClientParameters $params
     *
     * @see  SoapClient::SoapClient()
     */
    public function __construct(Client $client, HttpClientParameters $params = null)
    {
        $this->client = $client;
        if (is_null($params))
            $params = new HttpClientParameters();
        $this->cache = $client->getCache();

        $session = $client->getSession();

        if(empty($params->baseUrl)) {
            $base_urls = $client->inDevMode() ? HttpClientParameters::$DEV_BASE_URLS : HttpClientParameters::$BASE_URLS;
            if(!isset($base_urls[$session->country->id])) {
                throw new \LogicException(
                    "I don't know baseUrl for country '$session->country', you have to supply one manually "
                    ."into HttpClientParameters object found in ClientParameters"
                );
            }

            $params->baseUrl = $base_urls[$session->country->id];
        }

        // this may throw
        $soapClient = new SoapClient(
            [
                'encoding' => 'UTF-8',
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'cache_wsdl' => WSDL_CACHE_DISK,
                'trace' => true, // enables __getLastResponse()/__getLastRequest() functions
                'user_agent' => $params->userAgent,
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'connection_timeout' => $params->connectionTimeout,
            ],
            $params->baseUrl,
            $this->client
        );

        $this->soapClient = $soapClient;
    }

    /**
     * @param string $login
     * @param string $hashedPassword
     */
    public function authenticate($login = '', $hashedPassword = '')
    {
        $session = $this->client->getSession();
        $credentials = $session->credentials;
        $cacheItem = $this->cache->getItem($session);

        if(!empty($login))
            $credentials->userLogin = $login;
        if(!empty($hashedPassword))
            $credentials->hashedPassword = $hashedPassword;

        if (!$cacheItem->isHit()) {
            $req = new DoLoginEncRequest();
            $req->setUserLogin($credentials->userLogin)
                ->setUserHashPassword($credentials->hashedPassword)
                ->setWebapiKey($credentials->webapiKey)
                ->setCountryCode($session->country->id)
                ->setLocalVersion($this->getWebApiVersion()->getVerKey());

            try {
                $ret = $this->soapClient->doLoginEnc($req);
            } catch(HttpClientException $e){
                echo($this->getLastRequest()."\n"); // DEBUG
                throw $e;
            }

            $cacheItem->set($ret, Period::SECONDS_PER_HOUR);
            $this->cache->save($cacheItem);
        } else {
            $ret = $cacheItem->get();
            // TODO: check if the $session->sessionId from cache is still valid, not because of time,
            //  but because of the max number of concurrently active sessions
        }

        $session->userId = $ret->getUserId();
        $session->sessionId = $ret->getSessionHandlePart();

        $this->client->injectionParameters->setMulti([
            'sessionHandle' => $session->sessionId,
            'sessionId' => $session->sessionId,
        ]);
    }

    /**
     * @return SysStatusType
     */
    public function getWebApiVersion()
    {
        /**
         * @var $apiVersion SysStatusType
         */
        static $apiVersion = null;

        if (is_null($apiVersion)) {
            $cacheItem = $this->cache->getItem(__CLASS__.'\\'.__METHOD__);

            if (!$cacheItem->isHit()) {
                $session = $this->client->getSession();
                $countryId = $session->country->id;

                $req = new DoQueryAllSysStatusRequest();
                $req->setCountryId($countryId)
                    ->setWebapiKey($session->credentials->webapiKey);

                $ret = $this->soapClient->doQueryAllSysStatus($req);

                foreach ($ret->getSysCountryStatus()->getItem() as $i => $sysStatus) {
                    if ($sysStatus->getCountryId() == $countryId) {
                        $apiVersion = $sysStatus;
                        break;
                    }
                }

                $cacheItem->set($apiVersion, Period::SECONDS_PER_DAY);
                $this->cache->save($cacheItem);
            } else {
                $apiVersion = $cacheItem->get();
            }
        }

        return $apiVersion;
    }

    /**
     * @return SoapClient
     */
    public function getSoapClient()
    {
        return $this->soapClient;
    }

    /**
     * Get raw request dump
     *
     * @details Useful for debugging purposes
     *
     * @return string
     */
    public function getLastRequest()
    {
        return $this->formatXml($this->soapClient->__getLastRequest());
    }

    /**
     * Get raw response dump
     *
     * @details Useful for debugging purposes
     *
     * @return string
     */
    public function getLastResponse()
    {
        return $this->formatXml($this->soapClient->__getLastResponse());
    }

    private function formatXml($xmlString)
    {
        $simpleXml = new \SimpleXMLElement($xmlString);
        $dom = dom_import_simplexml($simpleXml)->ownerDocument;
        $dom->formatOutput = true;

        return $dom->saveXML();
    }
}
