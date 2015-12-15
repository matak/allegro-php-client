<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformsellersstruct
{

    /**
     * @var PostBuyFormSellersStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormSellersStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormSellersStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformsellersstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
