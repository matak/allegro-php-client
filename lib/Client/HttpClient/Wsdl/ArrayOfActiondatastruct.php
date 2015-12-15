<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfActiondatastruct
{

    /**
     * @var ActionDataStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActionDataStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ActionDataStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfActiondatastruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
