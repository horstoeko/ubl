<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ForecastLineType
 *
 * ABIE
 *  Forecast Line. Details
 *  Detailed information about a particular Forecast Line within a Forecast Document
 *  Forecast Line
 * XSD Type: ForecastLineType
 */
class ForecastLineType
{

    /**
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $frozenDocumentIndicator
     */
    private $frozenDocumentIndicator = null;

    /**
     * BBIE
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
     *
     * @var \horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ForecastPeriod $forecastPeriod
     */
    private $forecastPeriod = null;

    /**
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \horstoeko\ubl\entities\cac\SalesItem $salesItem
     */
    private $salesItem = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Forecast Line. Identifier
     *  An identifier for this forecast line.
     *  1
     *  Forecast Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Forecast Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as frozenDocumentIndicator
     *
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFrozenDocumentIndicator()
    {
        return $this->frozenDocumentIndicator;
    }

    /**
     * Sets a new frozenDocumentIndicator
     *
     * BBIE
     *  Forecast Line. Frozen Document Indicator. Indicator
     *  An indicator that the status of the forecast is modifiable (true) or not (false).
     *  0..1
     *  Forecast Line
     *  Frozen Document Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $frozenDocumentIndicator
     * @return self
     */
    public function setFrozenDocumentIndicator($frozenDocumentIndicator)
    {
        $this->frozenDocumentIndicator = $frozenDocumentIndicator;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
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
     *  Forecast Line. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *  seasonal, total
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
     * Gets as forecastPeriod
     *
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ForecastPeriod
     */
    public function getForecastPeriod()
    {
        return $this->forecastPeriod;
    }

    /**
     * Sets a new forecastPeriod
     *
     * ASBIE
     *  Forecast Line. Forecast_ Period. Period
     *  The period to which the forecast applies.
     *  0..1
     *  Forecast Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(\horstoeko\ubl\entities\cac\ForecastPeriod $forecastPeriod)
    {
        $this->forecastPeriod = $forecastPeriod;
        return $this;
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \horstoeko\ubl\entities\cac\SalesItem
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Forecast Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \horstoeko\ubl\entities\cac\SalesItem $salesItem
     * @return self
     */
    public function setSalesItem(\horstoeko\ubl\entities\cac\SalesItem $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }


}

