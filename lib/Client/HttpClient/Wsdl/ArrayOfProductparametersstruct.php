<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfProductparametersstruct
{

    /**
     * @var ProductParametersStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductParametersStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ProductParametersStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfProductparametersstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
