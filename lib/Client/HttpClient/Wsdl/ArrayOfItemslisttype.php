<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemslisttype
{

    /**
     * @var ItemsListType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemsListType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemsListType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemslisttype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
