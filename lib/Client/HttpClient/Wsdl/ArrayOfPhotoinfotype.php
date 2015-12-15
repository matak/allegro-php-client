<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPhotoinfotype
{

    /**
     * @var PhotoInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PhotoInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PhotoInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPhotoinfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
