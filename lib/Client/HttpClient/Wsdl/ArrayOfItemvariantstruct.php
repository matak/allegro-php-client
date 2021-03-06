<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemvariantstruct
{

    /**
     * @var ItemVariantStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemVariantStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemVariantStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemvariantstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
