<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfWonitemstruct
{

    /**
     * @var WonItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WonItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param WonItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfWonitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
