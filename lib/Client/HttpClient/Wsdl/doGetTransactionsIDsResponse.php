<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetTransactionsIDsResponse
{

    /**
     * @var ArrayOfLong $transactionsIdsArray
     */
    protected $transactionsIdsArray = null;

    /**
     * @param ArrayOfLong $transactionsIdsArray
     */
    public function __construct($transactionsIdsArray = null)
    {
      $this->transactionsIdsArray = $transactionsIdsArray;
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionsIdsArray()
    {
      return $this->transactionsIdsArray;
    }

    /**
     * @param ArrayOfLong $transactionsIdsArray
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetTransactionsIDsResponse
     */
    public function setTransactionsIdsArray($transactionsIdsArray)
    {
      $this->transactionsIdsArray = $transactionsIdsArray;
      return $this;
    }

}
