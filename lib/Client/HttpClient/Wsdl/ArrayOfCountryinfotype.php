<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfCountryinfotype
{

    /**
     * @var CountryInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CountryInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CountryInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfCountryinfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
