<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfBidliststruct2
{

    /**
     * @var BidListStruct2[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BidListStruct2[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BidListStruct2[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfBidliststruct2
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
