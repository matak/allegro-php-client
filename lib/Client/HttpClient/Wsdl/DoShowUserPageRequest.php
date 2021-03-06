<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoShowUserPageRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @param string $webapiKey
     * @param int $countryId
     * @param int $userId
     */
    public function __construct($webapiKey = null, $countryId = null, $userId = null)
    {
      $this->webapiKey = $webapiKey;
      $this->countryId = $countryId;
      $this->userId = $userId;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowUserPageRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowUserPageRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoShowUserPageRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
