<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSitejournaldealsstruct
{

    /**
     * @var SiteJournalDealsStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SiteJournalDealsStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SiteJournalDealsStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSitejournaldealsstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
