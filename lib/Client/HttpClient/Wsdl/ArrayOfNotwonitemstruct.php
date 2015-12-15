<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfNotwonitemstruct
{

    /**
     * @var NotWonItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return NotWonItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param NotWonItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfNotwonitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
