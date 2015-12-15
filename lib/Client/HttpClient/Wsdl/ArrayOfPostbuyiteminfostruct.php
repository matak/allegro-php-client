<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostbuyiteminfostruct
{

    /**
     * @var PostBuyItemInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostBuyItemInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostBuyItemInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostbuyiteminfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
