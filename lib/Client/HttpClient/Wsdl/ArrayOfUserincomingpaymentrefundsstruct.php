<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserincomingpaymentrefundsstruct
{

    /**
     * @var UserIncomingPaymentRefundsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserIncomingPaymentRefundsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserIncomingPaymentRefundsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserincomingpaymentrefundsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
