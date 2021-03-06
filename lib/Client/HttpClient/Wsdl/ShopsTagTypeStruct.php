<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ShopsTagTypeStruct
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $id
     * @param string $code
     * @param string $name
     */
    public function __construct($id = null, $code = null, $name = null)
    {
      $this->id = $id;
      $this->code = $code;
      $this->name = $name;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ShopsTagTypeStruct
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ShopsTagTypeStruct
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ShopsTagTypeStruct
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
