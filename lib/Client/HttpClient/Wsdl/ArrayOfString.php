<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfString
{

    /**
     * @var string[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param string[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfString
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
