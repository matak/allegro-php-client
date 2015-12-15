<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItempricestruct
{

    /**
     * @var ItemPriceStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemPriceStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemPriceStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItempricestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
