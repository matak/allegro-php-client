<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfMyaccountstruct2
{

    /**
     * @var MyAccountStruct2[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MyAccountStruct2[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param MyAccountStruct2[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfMyaccountstruct2
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
