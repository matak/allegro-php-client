<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellratingaveragepermonthstruct
{

    /**
     * @var SellRatingAveragePerMonthStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellRatingAveragePerMonthStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellRatingAveragePerMonthStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellratingaveragepermonthstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
