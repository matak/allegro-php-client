<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemInfoStruct
{

    /**
     * @var ItemInfo $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var ArrayOfItemcatlist $itemCats
     */
    protected $itemCats = null;

    /**
     * @var ArrayOfItemimagelist $itemImages
     */
    protected $itemImages = null;

    /**
     * @var ArrayOfAttribstruct $itemAttribs
     */
    protected $itemAttribs = null;

    /**
     * @var ArrayOfPostagestruct $itemPostageOptions
     */
    protected $itemPostageOptions = null;

    /**
     * @var ItemPaymentOptions $itemPaymentOptions
     */
    protected $itemPaymentOptions = null;

    /**
     * @var CompanyInfoStruct $itemCompanyInfo
     */
    protected $itemCompanyInfo = null;

    /**
     * @var ProductStruct $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @param ItemInfo $itemInfo
     * @param ItemPaymentOptions $itemPaymentOptions
     * @param CompanyInfoStruct $itemCompanyInfo
     * @param ProductStruct $itemProductInfo
     */
    public function __construct($itemInfo = null, $itemPaymentOptions = null, $itemCompanyInfo = null, $itemProductInfo = null)
    {
      $this->itemInfo = $itemInfo;
      $this->itemPaymentOptions = $itemPaymentOptions;
      $this->itemCompanyInfo = $itemCompanyInfo;
      $this->itemProductInfo = $itemProductInfo;
    }

    /**
     * @return ItemInfo
     */
    public function getItemInfo()
    {
      return $this->itemInfo;
    }

    /**
     * @param ItemInfo $itemInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemInfo($itemInfo)
    {
      $this->itemInfo = $itemInfo;
      return $this;
    }

    /**
     * @return ArrayOfItemcatlist
     */
    public function getItemCats()
    {
      return $this->itemCats;
    }

    /**
     * @param ArrayOfItemcatlist $itemCats
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemCats($itemCats)
    {
      $this->itemCats = $itemCats;
      return $this;
    }

    /**
     * @return ArrayOfItemimagelist
     */
    public function getItemImages()
    {
      return $this->itemImages;
    }

    /**
     * @param ArrayOfItemimagelist $itemImages
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemImages($itemImages)
    {
      $this->itemImages = $itemImages;
      return $this;
    }

    /**
     * @return ArrayOfAttribstruct
     */
    public function getItemAttribs()
    {
      return $this->itemAttribs;
    }

    /**
     * @param ArrayOfAttribstruct $itemAttribs
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemAttribs($itemAttribs)
    {
      $this->itemAttribs = $itemAttribs;
      return $this;
    }

    /**
     * @return ArrayOfPostagestruct
     */
    public function getItemPostageOptions()
    {
      return $this->itemPostageOptions;
    }

    /**
     * @param ArrayOfPostagestruct $itemPostageOptions
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemPostageOptions($itemPostageOptions)
    {
      $this->itemPostageOptions = $itemPostageOptions;
      return $this;
    }

    /**
     * @return ItemPaymentOptions
     */
    public function getItemPaymentOptions()
    {
      return $this->itemPaymentOptions;
    }

    /**
     * @param ItemPaymentOptions $itemPaymentOptions
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemPaymentOptions($itemPaymentOptions)
    {
      $this->itemPaymentOptions = $itemPaymentOptions;
      return $this;
    }

    /**
     * @return CompanyInfoStruct
     */
    public function getItemCompanyInfo()
    {
      return $this->itemCompanyInfo;
    }

    /**
     * @param CompanyInfoStruct $itemCompanyInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemCompanyInfo($itemCompanyInfo)
    {
      $this->itemCompanyInfo = $itemCompanyInfo;
      return $this;
    }

    /**
     * @return ProductStruct
     */
    public function getItemProductInfo()
    {
      return $this->itemProductInfo;
    }

    /**
     * @param ProductStruct $itemProductInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfoStruct
     */
    public function setItemProductInfo($itemProductInfo)
    {
      $this->itemProductInfo = $itemProductInfo;
      return $this;
    }

}
