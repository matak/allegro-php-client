<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ArrayOfFeedbacklist
{

    /**
     * @var FeedbackList[] $item
     */
    protected $item = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FeedbackList[]
     */
    public function getItem()
    {
      return $this->item;
    }

    /**
     * @param FeedbackList[] $item
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ArrayOfFeedbacklist
     */
    public function setItem(array $item = null)
    {
      $this->item = $item;
      return $this;
    }

}
