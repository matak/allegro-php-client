<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemsnotaddedstruct
{

    /**
     * @var ItemsNotAddedStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemsNotAddedStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemsNotAddedStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemsnotaddedstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
