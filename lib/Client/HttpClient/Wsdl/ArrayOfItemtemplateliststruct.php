<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemtemplateliststruct
{

    /**
     * @var ItemTemplateListStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemTemplateListStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemTemplateListStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemtemplateliststruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
