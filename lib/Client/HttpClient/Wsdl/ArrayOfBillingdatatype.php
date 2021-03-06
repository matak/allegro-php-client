<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfBillingdatatype
{

    /**
     * @var BillingDataType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BillingDataType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BillingDataType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfBillingdatatype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
