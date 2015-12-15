<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFiltervaluetype
{

    /**
     * @var FilterValueType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FilterValueType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FilterValueType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFiltervaluetype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
