<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doShowUserPageResponse
{

    /**
     * @var string $userPageContent
     */
    protected $userPageContent = null;

    /**
     * @var string $userPagePharmacyPermit
     */
    protected $userPagePharmacyPermit = null;

    /**
     * @var string $userPageAlcoholPermit
     */
    protected $userPageAlcoholPermit = null;

    /**
     * @param string $userPageContent
     * @param string $userPagePharmacyPermit
     * @param string $userPageAlcoholPermit
     */
    public function __construct($userPageContent = null, $userPagePharmacyPermit = null, $userPageAlcoholPermit = null)
    {
      $this->userPageContent = $userPageContent;
      $this->userPagePharmacyPermit = $userPagePharmacyPermit;
      $this->userPageAlcoholPermit = $userPageAlcoholPermit;
    }

    /**
     * @return string
     */
    public function getUserPageContent()
    {
      return $this->userPageContent;
    }

    /**
     * @param string $userPageContent
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doShowUserPageResponse
     */
    public function setUserPageContent($userPageContent)
    {
      $this->userPageContent = $userPageContent;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPagePharmacyPermit()
    {
      return $this->userPagePharmacyPermit;
    }

    /**
     * @param string $userPagePharmacyPermit
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doShowUserPageResponse
     */
    public function setUserPagePharmacyPermit($userPagePharmacyPermit)
    {
      $this->userPagePharmacyPermit = $userPagePharmacyPermit;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPageAlcoholPermit()
    {
      return $this->userPageAlcoholPermit;
    }

    /**
     * @param string $userPageAlcoholPermit
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doShowUserPageResponse
     */
    public function setUserPageAlcoholPermit($userPageAlcoholPermit)
    {
      $this->userPageAlcoholPermit = $userPageAlcoholPermit;
      return $this;
    }

}
