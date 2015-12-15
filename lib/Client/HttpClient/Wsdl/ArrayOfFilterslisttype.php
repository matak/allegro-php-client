<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFilterslisttype
{

    /**
     * @var FiltersListType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FiltersListType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FiltersListType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFilterslisttype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
