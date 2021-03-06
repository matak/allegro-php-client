<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoCancelTransactionRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @param string $sessionId
     * @param int $transactionId
     */
    public function __construct($sessionId = null, $transactionId = null)
    {
      $this->sessionId = $sessionId;
      $this->transactionId = $transactionId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCancelTransactionRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoCancelTransactionRequest
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

}
