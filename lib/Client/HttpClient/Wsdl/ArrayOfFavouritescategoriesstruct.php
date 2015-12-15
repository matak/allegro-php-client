<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFavouritescategoriesstruct
{

    /**
     * @var FavouritesCategoriesStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FavouritesCategoriesStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FavouritesCategoriesStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFavouritescategoriesstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
