<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfAttribstruct
{

    /**
     * @var AttribStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AttribStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param AttribStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfAttribstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
