<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfVariantstruct
{

    /**
     * @var VariantStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VariantStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param VariantStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfVariantstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
