<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoInternalIStoreChangeRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $istoreId
     */
    protected $istoreId = null;

    /**
     * @var string $actionType
     */
    protected $actionType = null;

    /**
     * @var int $actionDate
     */
    protected $actionDate = null;

    /**
     * @var int $validDate
     */
    protected $validDate = null;

    /**
     * @param string $webapiKey
     * @param int $userId
     * @param int $istoreId
     * @param string $actionType
     * @param int $actionDate
     * @param int $validDate
     */
    public function __construct($webapiKey = null, $userId = null, $istoreId = null, $actionType = null, $actionDate = null, $validDate = null)
    {
      $this->webapiKey = $webapiKey;
      $this->userId = $userId;
      $this->istoreId = $istoreId;
      $this->actionType = $actionType;
      $this->actionDate = $actionDate;
      $this->validDate = $validDate;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getIstoreId()
    {
      return $this->istoreId;
    }

    /**
     * @param int $istoreId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setIstoreId($istoreId)
    {
      $this->istoreId = $istoreId;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionType()
    {
      return $this->actionType;
    }

    /**
     * @param string $actionType
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setActionType($actionType)
    {
      $this->actionType = $actionType;
      return $this;
    }

    /**
     * @return int
     */
    public function getActionDate()
    {
      return $this->actionDate;
    }

    /**
     * @param int $actionDate
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setActionDate($actionDate)
    {
      $this->actionDate = $actionDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidDate()
    {
      return $this->validDate;
    }

    /**
     * @param int $validDate
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoInternalIStoreChangeRequest
     */
    public function setValidDate($validDate)
    {
      $this->validDate = $validDate;
      return $this;
    }

}
