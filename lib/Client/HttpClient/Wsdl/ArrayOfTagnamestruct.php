<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfTagnamestruct
{

    /**
     * @var TagNameStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TagNameStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param TagNameStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfTagnamestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
