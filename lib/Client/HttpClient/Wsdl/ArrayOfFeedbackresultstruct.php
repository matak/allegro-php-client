<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFeedbackresultstruct
{

    /**
     * @var FeedbackResultStruct[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeedbackResultStruct[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FeedbackResultStruct[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFeedbackresultstruct
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
