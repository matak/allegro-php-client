<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformshipmenttrackingstruct
{

    /**
     * @var PostBuyFormShipmentTrackingStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormShipmentTrackingStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormShipmentTrackingStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformshipmenttrackingstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
