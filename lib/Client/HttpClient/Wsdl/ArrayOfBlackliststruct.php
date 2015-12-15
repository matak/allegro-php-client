<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfBlackliststruct
{

    /**
     * @var BlackListStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BlackListStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BlackListStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfBlackliststruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
