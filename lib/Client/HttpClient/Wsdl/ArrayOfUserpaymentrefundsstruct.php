<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserpaymentrefundsstruct
{

    /**
     * @var UserPaymentRefundsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserPaymentRefundsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserPaymentRefundsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserpaymentrefundsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
