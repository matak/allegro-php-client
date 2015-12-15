<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfArchiverefundslisttypestruct
{

    /**
     * @var ArchiveRefundsListTypeStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArchiveRefundsListTypeStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ArchiveRefundsListTypeStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfArchiverefundslisttypestruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
