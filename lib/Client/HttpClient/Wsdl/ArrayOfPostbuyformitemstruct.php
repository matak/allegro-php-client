<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformitemstruct
{

    /**
     * @var PostBuyFormItemStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormItemStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormItemStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformitemstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
