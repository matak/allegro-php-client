<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfWatcheditemstruct
{

    /**
     * @var WatchedItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WatchedItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param WatchedItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfWatcheditemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
