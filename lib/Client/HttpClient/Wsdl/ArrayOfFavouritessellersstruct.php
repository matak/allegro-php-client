<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFavouritessellersstruct
{

    /**
     * @var FavouritesSellersStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FavouritesSellersStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FavouritesSellersStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFavouritessellersstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
