<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfUserpaymentstruct
{

    /**
     * @var UserPaymentStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UserPaymentStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param UserPaymentStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfUserpaymentstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
