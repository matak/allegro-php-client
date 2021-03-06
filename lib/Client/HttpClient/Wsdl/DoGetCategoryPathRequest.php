<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class DoGetCategoryPathRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @param string $sessionId
     * @param int $categoryId
     */
    public function __construct($sessionId = null, $categoryId = null)
    {
      $this->sessionId = $sessionId;
      $this->categoryId = $categoryId;
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
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCategoryPathRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\DoGetCategoryPathRequest
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

}
