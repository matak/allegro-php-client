<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class ItemInfo
{

    /**
     * @var int $itId
     */
    protected $itId = null;

    /**
     * @var int $itCountry
     */
    protected $itCountry = null;

    /**
     * @var string $itName
     */
    protected $itName = null;

    /**
     * @var float $itPrice
     */
    protected $itPrice = null;

    /**
     * @var int $itBidCount
     */
    protected $itBidCount = null;

    /**
     * @var int $itEndingTime
     */
    protected $itEndingTime = null;

    /**
     * @var int $itSellerId
     */
    protected $itSellerId = null;

    /**
     * @var string $itSellerLogin
     */
    protected $itSellerLogin = null;

    /**
     * @var int $itSellerRating
     */
    protected $itSellerRating = null;

    /**
     * @var int $itStartingTime
     */
    protected $itStartingTime = null;

    /**
     * @var float $itStartingPrice
     */
    protected $itStartingPrice = null;

    /**
     * @var int $itQuantity
     */
    protected $itQuantity = null;

    /**
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @var float $itReservePrice
     */
    protected $itReservePrice = null;

    /**
     * @var string $itLocation
     */
    protected $itLocation = null;

    /**
     * @var float $itBuyNowPrice
     */
    protected $itBuyNowPrice = null;

    /**
     * @var int $itBuyNowActive
     */
    protected $itBuyNowActive = null;

    /**
     * @var int $itHighBidder
     */
    protected $itHighBidder = null;

    /**
     * @var string $itHighBidderLogin
     */
    protected $itHighBidderLogin = null;

    /**
     * @var string $itDescription
     */
    protected $itDescription = null;

    /**
     * @var int $itOptions
     */
    protected $itOptions = null;

    /**
     * @var int $itState
     */
    protected $itState = null;

    /**
     * @var int $itIsEco
     */
    protected $itIsEco = null;

    /**
     * @var int $itHitCount
     */
    protected $itHitCount = null;

    /**
     * @var string $itPostcode
     */
    protected $itPostcode = null;

    /**
     * @var int $itVatInvoice
     */
    protected $itVatInvoice = null;

    /**
     * @var string $itBankAccount1
     */
    protected $itBankAccount1 = null;

    /**
     * @var string $itBankAccount2
     */
    protected $itBankAccount2 = null;

    /**
     * @var int $itStartingQuantity
     */
    protected $itStartingQuantity = null;

    /**
     * @var int $itIsForGuests
     */
    protected $itIsForGuests = null;

    /**
     * @var int $itHasProduct
     */
    protected $itHasProduct = null;

    /**
     * @var int $itOrderFulfillmentTime
     */
    protected $itOrderFulfillmentTime = null;

    /**
     * @var int $itEndingInfo
     */
    protected $itEndingInfo = null;

    /**
     * @var int $itIsAllegroStandard
     */
    protected $itIsAllegroStandard = null;

    /**
     * @var int $itIsNewUsed
     */
    protected $itIsNewUsed = null;

    /**
     * @var int $itIsBrandZone
     */
    protected $itIsBrandZone = null;

    /**
     * @var DurationInfoStruct $itDurationInfo
     */
    protected $itDurationInfo = null;

    /**
     * @var int $itIsFulfillmentTimeActive
     */
    protected $itIsFulfillmentTimeActive = null;

    /**
     * @param int $itId
     * @param int $itCountry
     * @param string $itName
     * @param float $itPrice
     * @param int $itBidCount
     * @param int $itEndingTime
     * @param int $itSellerId
     * @param string $itSellerLogin
     * @param int $itSellerRating
     * @param int $itStartingTime
     * @param float $itStartingPrice
     * @param int $itQuantity
     * @param int $itFotoCount
     * @param float $itReservePrice
     * @param string $itLocation
     * @param float $itBuyNowPrice
     * @param int $itBuyNowActive
     * @param int $itHighBidder
     * @param string $itHighBidderLogin
     * @param string $itDescription
     * @param int $itOptions
     * @param int $itState
     * @param int $itIsEco
     * @param int $itHitCount
     * @param string $itPostcode
     * @param int $itVatInvoice
     * @param string $itBankAccount1
     * @param string $itBankAccount2
     * @param int $itStartingQuantity
     * @param int $itIsForGuests
     * @param int $itHasProduct
     * @param int $itOrderFulfillmentTime
     * @param int $itEndingInfo
     * @param int $itIsAllegroStandard
     * @param int $itIsNewUsed
     */
    public function __construct($itId = null, $itCountry = null, $itName = null, $itPrice = null, $itBidCount = null, $itEndingTime = null, $itSellerId = null, $itSellerLogin = null, $itSellerRating = null, $itStartingTime = null, $itStartingPrice = null, $itQuantity = null, $itFotoCount = null, $itReservePrice = null, $itLocation = null, $itBuyNowPrice = null, $itBuyNowActive = null, $itHighBidder = null, $itHighBidderLogin = null, $itDescription = null, $itOptions = null, $itState = null, $itIsEco = null, $itHitCount = null, $itPostcode = null, $itVatInvoice = null, $itBankAccount1 = null, $itBankAccount2 = null, $itStartingQuantity = null, $itIsForGuests = null, $itHasProduct = null, $itOrderFulfillmentTime = null, $itEndingInfo = null, $itIsAllegroStandard = null, $itIsNewUsed = null)
    {
      $this->itId = $itId;
      $this->itCountry = $itCountry;
      $this->itName = $itName;
      $this->itPrice = $itPrice;
      $this->itBidCount = $itBidCount;
      $this->itEndingTime = $itEndingTime;
      $this->itSellerId = $itSellerId;
      $this->itSellerLogin = $itSellerLogin;
      $this->itSellerRating = $itSellerRating;
      $this->itStartingTime = $itStartingTime;
      $this->itStartingPrice = $itStartingPrice;
      $this->itQuantity = $itQuantity;
      $this->itFotoCount = $itFotoCount;
      $this->itReservePrice = $itReservePrice;
      $this->itLocation = $itLocation;
      $this->itBuyNowPrice = $itBuyNowPrice;
      $this->itBuyNowActive = $itBuyNowActive;
      $this->itHighBidder = $itHighBidder;
      $this->itHighBidderLogin = $itHighBidderLogin;
      $this->itDescription = $itDescription;
      $this->itOptions = $itOptions;
      $this->itState = $itState;
      $this->itIsEco = $itIsEco;
      $this->itHitCount = $itHitCount;
      $this->itPostcode = $itPostcode;
      $this->itVatInvoice = $itVatInvoice;
      $this->itBankAccount1 = $itBankAccount1;
      $this->itBankAccount2 = $itBankAccount2;
      $this->itStartingQuantity = $itStartingQuantity;
      $this->itIsForGuests = $itIsForGuests;
      $this->itHasProduct = $itHasProduct;
      $this->itOrderFulfillmentTime = $itOrderFulfillmentTime;
      $this->itEndingInfo = $itEndingInfo;
      $this->itIsAllegroStandard = $itIsAllegroStandard;
      $this->itIsNewUsed = $itIsNewUsed;
    }

    /**
     * @return int
     */
    public function getItId()
    {
      return $this->itId;
    }

    /**
     * @param int $itId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItId($itId)
    {
      $this->itId = $itId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItCountry()
    {
      return $this->itCountry;
    }

    /**
     * @param int $itCountry
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItCountry($itCountry)
    {
      $this->itCountry = $itCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getItName()
    {
      return $this->itName;
    }

    /**
     * @param string $itName
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItName($itName)
    {
      $this->itName = $itName;
      return $this;
    }

    /**
     * @return float
     */
    public function getItPrice()
    {
      return $this->itPrice;
    }

    /**
     * @param float $itPrice
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItPrice($itPrice)
    {
      $this->itPrice = $itPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItBidCount()
    {
      return $this->itBidCount;
    }

    /**
     * @param int $itBidCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItBidCount($itBidCount)
    {
      $this->itBidCount = $itBidCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItEndingTime()
    {
      return $this->itEndingTime;
    }

    /**
     * @param int $itEndingTime
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItEndingTime($itEndingTime)
    {
      $this->itEndingTime = $itEndingTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getItSellerId()
    {
      return $this->itSellerId;
    }

    /**
     * @param int $itSellerId
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItSellerId($itSellerId)
    {
      $this->itSellerId = $itSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItSellerLogin()
    {
      return $this->itSellerLogin;
    }

    /**
     * @param string $itSellerLogin
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItSellerLogin($itSellerLogin)
    {
      $this->itSellerLogin = $itSellerLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getItSellerRating()
    {
      return $this->itSellerRating;
    }

    /**
     * @param int $itSellerRating
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItSellerRating($itSellerRating)
    {
      $this->itSellerRating = $itSellerRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getItStartingTime()
    {
      return $this->itStartingTime;
    }

    /**
     * @param int $itStartingTime
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItStartingTime($itStartingTime)
    {
      $this->itStartingTime = $itStartingTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getItStartingPrice()
    {
      return $this->itStartingPrice;
    }

    /**
     * @param float $itStartingPrice
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItStartingPrice($itStartingPrice)
    {
      $this->itStartingPrice = $itStartingPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItQuantity()
    {
      return $this->itQuantity;
    }

    /**
     * @param int $itQuantity
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItQuantity($itQuantity)
    {
      $this->itQuantity = $itQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItFotoCount()
    {
      return $this->itFotoCount;
    }

    /**
     * @param int $itFotoCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItFotoCount($itFotoCount)
    {
      $this->itFotoCount = $itFotoCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getItReservePrice()
    {
      return $this->itReservePrice;
    }

    /**
     * @param float $itReservePrice
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItReservePrice($itReservePrice)
    {
      $this->itReservePrice = $itReservePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getItLocation()
    {
      return $this->itLocation;
    }

    /**
     * @param string $itLocation
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItLocation($itLocation)
    {
      $this->itLocation = $itLocation;
      return $this;
    }

    /**
     * @return float
     */
    public function getItBuyNowPrice()
    {
      return $this->itBuyNowPrice;
    }

    /**
     * @param float $itBuyNowPrice
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItBuyNowPrice($itBuyNowPrice)
    {
      $this->itBuyNowPrice = $itBuyNowPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItBuyNowActive()
    {
      return $this->itBuyNowActive;
    }

    /**
     * @param int $itBuyNowActive
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItBuyNowActive($itBuyNowActive)
    {
      $this->itBuyNowActive = $itBuyNowActive;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHighBidder()
    {
      return $this->itHighBidder;
    }

    /**
     * @param int $itHighBidder
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItHighBidder($itHighBidder)
    {
      $this->itHighBidder = $itHighBidder;
      return $this;
    }

    /**
     * @return string
     */
    public function getItHighBidderLogin()
    {
      return $this->itHighBidderLogin;
    }

    /**
     * @param string $itHighBidderLogin
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItHighBidderLogin($itHighBidderLogin)
    {
      $this->itHighBidderLogin = $itHighBidderLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getItDescription()
    {
      return $this->itDescription;
    }

    /**
     * @param string $itDescription
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItDescription($itDescription)
    {
      $this->itDescription = $itDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getItOptions()
    {
      return $this->itOptions;
    }

    /**
     * @param int $itOptions
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItOptions($itOptions)
    {
      $this->itOptions = $itOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getItState()
    {
      return $this->itState;
    }

    /**
     * @param int $itState
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItState($itState)
    {
      $this->itState = $itState;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsEco()
    {
      return $this->itIsEco;
    }

    /**
     * @param int $itIsEco
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsEco($itIsEco)
    {
      $this->itIsEco = $itIsEco;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHitCount()
    {
      return $this->itHitCount;
    }

    /**
     * @param int $itHitCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItHitCount($itHitCount)
    {
      $this->itHitCount = $itHitCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getItPostcode()
    {
      return $this->itPostcode;
    }

    /**
     * @param string $itPostcode
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItPostcode($itPostcode)
    {
      $this->itPostcode = $itPostcode;
      return $this;
    }

    /**
     * @return int
     */
    public function getItVatInvoice()
    {
      return $this->itVatInvoice;
    }

    /**
     * @param int $itVatInvoice
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItVatInvoice($itVatInvoice)
    {
      $this->itVatInvoice = $itVatInvoice;
      return $this;
    }

    /**
     * @return string
     */
    public function getItBankAccount1()
    {
      return $this->itBankAccount1;
    }

    /**
     * @param string $itBankAccount1
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItBankAccount1($itBankAccount1)
    {
      $this->itBankAccount1 = $itBankAccount1;
      return $this;
    }

    /**
     * @return string
     */
    public function getItBankAccount2()
    {
      return $this->itBankAccount2;
    }

    /**
     * @param string $itBankAccount2
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItBankAccount2($itBankAccount2)
    {
      $this->itBankAccount2 = $itBankAccount2;
      return $this;
    }

    /**
     * @return int
     */
    public function getItStartingQuantity()
    {
      return $this->itStartingQuantity;
    }

    /**
     * @param int $itStartingQuantity
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItStartingQuantity($itStartingQuantity)
    {
      $this->itStartingQuantity = $itStartingQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsForGuests()
    {
      return $this->itIsForGuests;
    }

    /**
     * @param int $itIsForGuests
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsForGuests($itIsForGuests)
    {
      $this->itIsForGuests = $itIsForGuests;
      return $this;
    }

    /**
     * @return int
     */
    public function getItHasProduct()
    {
      return $this->itHasProduct;
    }

    /**
     * @param int $itHasProduct
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItHasProduct($itHasProduct)
    {
      $this->itHasProduct = $itHasProduct;
      return $this;
    }

    /**
     * @return int
     */
    public function getItOrderFulfillmentTime()
    {
      return $this->itOrderFulfillmentTime;
    }

    /**
     * @param int $itOrderFulfillmentTime
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItOrderFulfillmentTime($itOrderFulfillmentTime)
    {
      $this->itOrderFulfillmentTime = $itOrderFulfillmentTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getItEndingInfo()
    {
      return $this->itEndingInfo;
    }

    /**
     * @param int $itEndingInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItEndingInfo($itEndingInfo)
    {
      $this->itEndingInfo = $itEndingInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsAllegroStandard()
    {
      return $this->itIsAllegroStandard;
    }

    /**
     * @param int $itIsAllegroStandard
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsAllegroStandard($itIsAllegroStandard)
    {
      $this->itIsAllegroStandard = $itIsAllegroStandard;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsNewUsed()
    {
      return $this->itIsNewUsed;
    }

    /**
     * @param int $itIsNewUsed
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsNewUsed($itIsNewUsed)
    {
      $this->itIsNewUsed = $itIsNewUsed;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsBrandZone()
    {
      return $this->itIsBrandZone;
    }

    /**
     * @param int $itIsBrandZone
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsBrandZone($itIsBrandZone)
    {
      $this->itIsBrandZone = $itIsBrandZone;
      return $this;
    }

    /**
     * @return DurationInfoStruct
     */
    public function getItDurationInfo()
    {
      return $this->itDurationInfo;
    }

    /**
     * @param DurationInfoStruct $itDurationInfo
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItDurationInfo($itDurationInfo)
    {
      $this->itDurationInfo = $itDurationInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItIsFulfillmentTimeActive()
    {
      return $this->itIsFulfillmentTimeActive;
    }

    /**
     * @param int $itIsFulfillmentTimeActive
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\ItemInfo
     */
    public function setItIsFulfillmentTimeActive($itIsFulfillmentTimeActive)
    {
      $this->itIsFulfillmentTimeActive = $itIsFulfillmentTimeActive;
      return $this;
    }

}
