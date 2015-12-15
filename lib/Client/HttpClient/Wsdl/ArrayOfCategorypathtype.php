<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfCategorypathtype
{

    /**
     * @var CategoryPathType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CategoryPathType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CategoryPathType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfCategorypathtype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
