<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellratingstatsstruct
{

    /**
     * @var SellRatingStatsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellRatingStatsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellRatingStatsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellratingstatsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
