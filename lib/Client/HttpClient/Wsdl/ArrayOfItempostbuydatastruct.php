<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItempostbuydatastruct
{

    /**
     * @var ItemPostBuyDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemPostBuyDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemPostBuyDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItempostbuydatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
