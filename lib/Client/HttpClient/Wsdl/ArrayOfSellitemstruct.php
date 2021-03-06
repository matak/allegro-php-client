<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellitemstruct
{

    /**
     * @var SellItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
