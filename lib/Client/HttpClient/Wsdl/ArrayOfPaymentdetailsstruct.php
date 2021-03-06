<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPaymentdetailsstruct
{

    /**
     * @var PaymentDetailsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PaymentDetailsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PaymentDetailsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPaymentdetailsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
