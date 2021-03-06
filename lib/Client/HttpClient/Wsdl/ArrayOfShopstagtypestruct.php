<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfShopstagtypestruct
{

    /**
     * @var ShopsTagTypeStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShopsTagTypeStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ShopsTagTypeStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfShopstagtypestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
