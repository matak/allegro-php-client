<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFutureitemstruct
{

    /**
     * @var FutureItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FutureItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FutureItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFutureitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
