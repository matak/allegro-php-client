<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfSysstatustype
{

    /**
     * @var SysStatusType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SysStatusType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param SysStatusType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfSysstatustype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
