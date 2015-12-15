<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellershipmentdatastruct
{

    /**
     * @var SellerShipmentDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellerShipmentDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellerShipmentDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellershipmentdatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
