<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfNotsolditemstruct
{

    /**
     * @var NotSoldItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NotSoldItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param NotSoldItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfNotsolditemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
