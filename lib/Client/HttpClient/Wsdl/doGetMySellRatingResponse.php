<?php

namespace Rindeal\Allegro\Client\HttpClient\Wsdl;

class doGetMySellRatingResponse
{

    /**
     * @var int $sellRatingTotalCount
     */
    protected $sellRatingTotalCount = null;

    /**
     * @var ArrayOfSellratingaveragestruct $sellRatingAverage
     */
    protected $sellRatingAverage = null;

    /**
     * @var ArrayOfSellratingdetailstruct $sellRatingDetails
     */
    protected $sellRatingDetails = null;

    /**
     * @var ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     */
    protected $sellRatingStatsPerMonth = null;

    /**
     * @param int $sellRatingTotalCount
     * @param ArrayOfSellratingaveragestruct $sellRatingAverage
     * @param ArrayOfSellratingdetailstruct $sellRatingDetails
     * @param ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     */
    public function __construct($sellRatingTotalCount = null, $sellRatingAverage = null, $sellRatingDetails = null, $sellRatingStatsPerMonth = null)
    {
      $this->sellRatingTotalCount = $sellRatingTotalCount;
      $this->sellRatingAverage = $sellRatingAverage;
      $this->sellRatingDetails = $sellRatingDetails;
      $this->sellRatingStatsPerMonth = $sellRatingStatsPerMonth;
    }

    /**
     * @return int
     */
    public function getSellRatingTotalCount()
    {
      return $this->sellRatingTotalCount;
    }

    /**
     * @param int $sellRatingTotalCount
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMySellRatingResponse
     */
    public function setSellRatingTotalCount($sellRatingTotalCount)
    {
      $this->sellRatingTotalCount = $sellRatingTotalCount;
      return $this;
    }

    /**
     * @return ArrayOfSellratingaveragestruct
     */
    public function getSellRatingAverage()
    {
      return $this->sellRatingAverage;
    }

    /**
     * @param ArrayOfSellratingaveragestruct $sellRatingAverage
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMySellRatingResponse
     */
    public function setSellRatingAverage($sellRatingAverage)
    {
      $this->sellRatingAverage = $sellRatingAverage;
      return $this;
    }

    /**
     * @return ArrayOfSellratingdetailstruct
     */
    public function getSellRatingDetails()
    {
      return $this->sellRatingDetails;
    }

    /**
     * @param ArrayOfSellratingdetailstruct $sellRatingDetails
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMySellRatingResponse
     */
    public function setSellRatingDetails($sellRatingDetails)
    {
      $this->sellRatingDetails = $sellRatingDetails;
      return $this;
    }

    /**
     * @return ArrayOfSellratingaveragepermonthstruct
     */
    public function getSellRatingStatsPerMonth()
    {
      return $this->sellRatingStatsPerMonth;
    }

    /**
     * @param ArrayOfSellratingaveragepermonthstruct $sellRatingStatsPerMonth
     * @return \Rindeal\Allegro\Client\HttpClient\Wsdl\doGetMySellRatingResponse
     */
    public function setSellRatingStatsPerMonth($sellRatingStatsPerMonth)
    {
      $this->sellRatingStatsPerMonth = $sellRatingStatsPerMonth;
      return $this;
    }

}
