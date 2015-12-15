<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfShipmentpaymentinfostruct
{

    /**
     * @var ShipmentPaymentInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipmentPaymentInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShipmentPaymentInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfShipmentpaymentinfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
