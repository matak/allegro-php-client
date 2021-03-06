<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfRefundlisttype
{

    /**
     * @var RefundListType[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RefundListType[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param RefundListType[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfRefundlisttype
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
