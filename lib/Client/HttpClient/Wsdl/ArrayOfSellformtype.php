<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellformtype
{

    /**
     * @var SellFormType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellFormType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellFormType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellformtype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
