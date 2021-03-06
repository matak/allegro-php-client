<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doInternalIStoreChangeResponse
{

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $result
     */
    public function __construct($result = null)
    {
      $this->result = $result;
    }

    /**
     * @return int
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param int $result
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doInternalIStoreChangeResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
