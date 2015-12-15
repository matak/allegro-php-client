<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemremovewatchstruct
{

    /**
     * @var ItemRemoveWatchStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemRemoveWatchStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemRemoveWatchStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemremovewatchstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
