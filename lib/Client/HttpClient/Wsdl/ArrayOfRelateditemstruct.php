<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfRelateditemstruct
{

    /**
     * @var RelatedItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RelatedItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RelatedItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfRelateditemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
