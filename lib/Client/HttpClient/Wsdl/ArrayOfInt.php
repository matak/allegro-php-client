<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfInt
{

    /**
     * @var int[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param int[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfInt
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
