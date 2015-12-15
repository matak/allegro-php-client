<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellratingreasonsumstruct
{

    /**
     * @var SellRatingReasonSumStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellRatingReasonSumStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellRatingReasonSumStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellratingreasonsumstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
