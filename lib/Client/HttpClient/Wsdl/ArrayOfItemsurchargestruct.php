<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemsurchargestruct
{

    /**
     * @var ItemSurchargeStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemSurchargeStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemSurchargeStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemsurchargestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
