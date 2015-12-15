<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfLong
{

    /**
     * @var long[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return long[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param long[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfLong
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
