<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformitemdealsstruct
{

    /**
     * @var PostBuyFormItemDealsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormItemDealsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormItemDealsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformitemdealsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
