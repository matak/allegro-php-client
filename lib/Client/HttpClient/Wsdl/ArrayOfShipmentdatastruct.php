<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfShipmentdatastruct
{

    /**
     * @var ShipmentDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipmentDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfShipmentdatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
