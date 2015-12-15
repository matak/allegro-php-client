<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPriceinfotype
{

    /**
     * @var PriceInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PriceInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPriceinfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
