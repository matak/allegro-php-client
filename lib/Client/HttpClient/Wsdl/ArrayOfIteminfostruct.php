<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfIteminfostruct
{

    /**
     * @var ItemInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfIteminfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
