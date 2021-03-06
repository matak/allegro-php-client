<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItembilling
{

    /**
     * @var ItemBilling[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemBilling[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemBilling[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItembilling
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
