<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemInformationRequestLineType
 *
 * ABIE
 *  Item Information Request Line. Details
 *  A class to define a line in an Item Information Request asking a trading partner for item information.
 *  Item Information Request Line
 * XSD Type: ItemInformationRequestLineType
 */
class ItemInformationRequestLineType
{

    /**
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TimeFrequencyCode $timeFrequencyCode
     */
    private $timeFrequencyCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\Period[] $period
     */
    private $period = [
        
    ];

    /**
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \horstoeko\ubl\entities\cac\SalesItem[] $salesItem
     */
    private $salesItem = [
        
    ];

    /**
     * Gets as timeFrequencyCode
     *
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TimeFrequencyCode
     */
    public function getTimeFrequencyCode()
    {
        return $this->timeFrequencyCode;
    }

    /**
     * Sets a new timeFrequencyCode
     *
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TimeFrequencyCode $timeFrequencyCode
     * @return self
     */
    public function setTimeFrequencyCode(\horstoeko\ubl\entities\cbc\TimeFrequencyCode $timeFrequencyCode)
    {
        $this->timeFrequencyCode = $timeFrequencyCode;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * BBIE
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as performanceMetricTypeCode
     *
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCode()
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * Sets a new performanceMetricTypeCode
     *
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(\horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode)
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;
        return $this;
    }

    /**
     * Adds as period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Period $period
     */
    public function addToPeriod(\horstoeko\ubl\entities\cac\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\Period[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SalesItem $salesItem
     */
    public function addToSalesItem(\horstoeko\ubl\entities\cac\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \horstoeko\ubl\entities\cac\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \horstoeko\ubl\entities\cac\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }


}

