<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfBiditemstruct
{

    /**
     * @var BidItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BidItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BidItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfBiditemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
