<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPostagestruct
{

    /**
     * @var PostageStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PostageStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PostageStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPostagestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
