<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfItemreminderstruct
{

    /**
     * @var ItemReminderStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ItemReminderStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param ItemReminderStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfItemreminderstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
