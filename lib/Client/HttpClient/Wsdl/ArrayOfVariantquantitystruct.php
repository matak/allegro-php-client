<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfVariantquantitystruct
{

    /**
     * @var VariantQuantityStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VariantQuantityStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param VariantQuantityStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfVariantquantitystruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
