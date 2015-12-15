<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfDealsstruct
{

    /**
     * @var DealsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DealsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param DealsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfDealsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
