<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfStructsellfailed
{

    /**
     * @var StructSellFailed[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StructSellFailed[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param StructSellFailed[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfStructsellfailed
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
