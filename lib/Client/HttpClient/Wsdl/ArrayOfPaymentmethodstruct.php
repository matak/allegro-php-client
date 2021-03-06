<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPaymentmethodstruct
{

    /**
     * @var PaymentMethodStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentMethodStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PaymentMethodStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPaymentmethodstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
