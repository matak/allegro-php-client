<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfRefundsdealslisttype
{

    /**
     * @var RefundsDealsListType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RefundsDealsListType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RefundsDealsListType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfRefundsdealslisttype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
