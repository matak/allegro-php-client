<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemvariantattributestruct
{

    /**
     * @var ItemVariantAttributeStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemVariantAttributeStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemVariantAttributeStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemvariantattributestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
