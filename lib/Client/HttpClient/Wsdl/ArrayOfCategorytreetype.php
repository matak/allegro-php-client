<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfCategorytreetype
{

    /**
     * @var CategoryTreeType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CategoryTreeType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CategoryTreeType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfCategorytreetype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
