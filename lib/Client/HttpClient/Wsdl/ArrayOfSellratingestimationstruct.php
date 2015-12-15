<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSellratingestimationstruct
{

    /**
     * @var SellRatingEstimationStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SellRatingEstimationStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SellRatingEstimationStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSellratingestimationstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
