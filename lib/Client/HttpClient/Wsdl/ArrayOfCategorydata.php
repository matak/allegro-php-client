<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfCategorydata
{

    /**
     * @var CategoryData[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CategoryData[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param CategoryData[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfCategorydata
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
