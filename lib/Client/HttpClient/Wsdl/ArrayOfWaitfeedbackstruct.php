<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfWaitfeedbackstruct
{

    /**
     * @var WaitFeedbackStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WaitFeedbackStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param WaitFeedbackStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfWaitfeedbackstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
