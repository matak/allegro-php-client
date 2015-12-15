<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserincomingpaymentstruct
{

    /**
     * @var UserIncomingPaymentStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserIncomingPaymentStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserIncomingPaymentStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserincomingpaymentstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
