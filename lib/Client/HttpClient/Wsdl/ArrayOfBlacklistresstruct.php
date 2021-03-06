<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfBlacklistresstruct
{

    /**
     * @var BlackListResStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BlackListResStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param BlackListResStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfBlacklistresstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
