<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFeedbackmanystruct
{

    /**
     * @var FeedbackManyStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeedbackManyStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FeedbackManyStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFeedbackmanystruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
