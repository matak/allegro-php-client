<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfShipmentpricetypestruct
{

    /**
     * @var ShipmentPriceTypeStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentPriceTypeStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipmentPriceTypeStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfShipmentpricetypestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
