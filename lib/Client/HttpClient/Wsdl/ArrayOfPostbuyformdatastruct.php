<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyformdatastruct
{

    /**
     * @var PostBuyFormDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyFormDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyFormDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyformdatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
