<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemimagelist
{

    /**
     * @var ItemImageList[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemImageList[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemImageList[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemimagelist
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
