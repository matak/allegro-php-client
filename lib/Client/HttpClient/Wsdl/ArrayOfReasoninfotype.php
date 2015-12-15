<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfReasoninfotype
{

    /**
     * @var ReasonInfoType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReasonInfoType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ReasonInfoType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfReasoninfotype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
