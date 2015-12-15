<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformforbuyersdatastruct
{

    /**
     * @var PostBuyFormForBuyersDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormForBuyersDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormForBuyersDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformforbuyersdatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
