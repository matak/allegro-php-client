<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSitejournal
{

    /**
     * @var SiteJournal[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SiteJournal[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SiteJournal[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSitejournal
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
