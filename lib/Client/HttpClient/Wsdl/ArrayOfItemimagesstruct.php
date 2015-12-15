<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemimagesstruct
{

    /**
     * @var ItemImagesStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemImagesStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemImagesStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemimagesstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
