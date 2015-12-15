<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfWatchitemstruct
{

    /**
     * @var WatchItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WatchItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param WatchItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfWatchitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
