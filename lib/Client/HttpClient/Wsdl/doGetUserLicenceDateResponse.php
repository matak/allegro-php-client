<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetUserLicenceDateResponse
{

    /**
     * @var float $getDateValue
     */
    protected $getDateValue = null;

    /**
     * @param float $getDateValue
     */
    public function __construct($getDateValue = null)
    {
      $this->getDateValue = $getDateValue;
    }

    /**
     * @return float
     */
    public function getGetDateValue()
    {
      return $this->getDateValue;
    }

    /**
     * @param float $getDateValue
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetUserLicenceDateResponse
     */
    public function setGetDateValue($getDateValue)
    {
      $this->getDateValue = $getDateValue;
      return $this;
    }

}
