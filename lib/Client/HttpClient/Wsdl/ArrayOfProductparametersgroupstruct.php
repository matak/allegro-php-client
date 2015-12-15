<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfProductparametersgroupstruct
{

    /**
     * @var ProductParametersGroupStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProductParametersGroupStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ProductParametersGroupStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfProductparametersgroupstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
