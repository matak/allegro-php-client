<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfPackageinfostruct
{

    /**
     * @var PackageInfoStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PackageInfoStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param PackageInfoStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfPackageinfostruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
