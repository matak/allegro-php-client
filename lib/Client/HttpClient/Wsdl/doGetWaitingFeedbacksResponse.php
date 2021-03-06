<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetWaitingFeedbacksResponse
{

    /**
     * @var ArrayOfWaitfeedbackstruct $feWaitList
     */
    protected $feWaitList = null;

    /**
     * @param ArrayOfWaitfeedbackstruct $feWaitList
     */
    public function __construct($feWaitList = null)
    {
      $this->feWaitList = $feWaitList;
    }

    /**
     * @return ArrayOfWaitfeedbackstruct
     */
    public function getFeWaitList()
    {
      return $this->feWaitList;
    }

    /**
     * @param ArrayOfWaitfeedbackstruct $feWaitList
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetWaitingFeedbacksResponse
     */
    public function setFeWaitList($feWaitList)
    {
      $this->feWaitList = $feWaitList;
      return $this;
    }

}
