<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ExceptionCriteriaLineType
 *
 * ABIE
 *  Exception Criteria Line. Details
 *  A class to define a line in an ExceptionCriteria document that specifies a threshold for forecast variance, product activity, or performance history, the exceeding of which should trigger an exception message.
 *  Exception Criteria Line
 * XSD Type: ExceptionCriteriaLineType
 */
class ExceptionCriteriaLineType
{

    /**
     * BBIE
     *  Exception Criteria Line. Identifier
     *  An identifier for this exception criteria line.
     *  1
     *  Exception Criteria Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
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
     *  Exception Criteria Line. Threshold Value Comparison Code. Code
     *  Type of comparison to be carried out in reference to the set threshold." Allowed values are: EXCEEDS_EXCEPTION_VALUE FALLS_BELOW_EXCEPTION_VALUE
     *  1
     *  Exception Criteria Line
     *  Threshold Value Comparison Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ThresholdValueComparisonCode $thresholdValueComparisonCode
     */
    private $thresholdValueComparisonCode = null;

    /**
     * BBIE
     *  Exception Criteria Line. Threshold_ Quantity. Quantity
     *  A quantity beyond which an exception will be triggered.
     *  1
     *  Exception Criteria Line
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ThresholdQuantity $thresholdQuantity
     */
    private $thresholdQuantity = null;

    /**
     * BBIE
     *  Exception Criteria Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Criteria Line
     *  Exception Status Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExceptionStatusCode $exceptionStatusCode
     */
    private $exceptionStatusCode = null;

    /**
     * BBIE
     *  Exception Criteria Line. Collaboration_ Priority Code. Code
     *  A collaboratively assigned code signifying priority of the Exception. Possible values are: HIGH, LOW, MEDIUM
     *  0..1
     *  Exception Criteria Line
     *  Collaboration
     *  Priority Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CollaborationPriorityCode $collaborationPriorityCode
     */
    private $collaborationPriorityCode = null;

    /**
     * BBIE
     *  Exception Criteria Line. Exception_ Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Criteria Line
     *  Exception
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExceptionResolutionCode $exceptionResolutionCode
     */
    private $exceptionResolutionCode = null;

    /**
     * BBIE
     *  Exception Criteria Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions. There can be three types of exception criteria: Operational, Metric and Forecast Exceptions. This will be set if this Exception is about an Operational Exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Criteria Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * BBIE
     *  Exception Criteria Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Exception Criteria Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * ASBIE
     *  Exception Criteria Line. Effective_ Period. Period
     *  The period during which this exception criteria line is in effect.
     *  0..1
     *  Exception Criteria Line
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\SupplyItem[] $supplyItem
     */
    private $supplyItem = [
        
    ];

    /**
     * ASBIE
     *  Exception Criteria Line. Forecast Exception Criterion Line
     *  Establishes the criterion for one of the three types of exceptions. This class provides the criterion for the kind of forecast exception, the identification of the purpose of the forecast, the source of data and the time basis criterion for the exception.
     *  0..1
     *  Exception Criteria Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *
     * @var \horstoeko\ubl\entities\cac\ForecastExceptionCriterionLine $forecastExceptionCriterionLine
     */
    private $forecastExceptionCriterionLine = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Exception Criteria Line. Identifier
     *  An identifier for this exception criteria line.
     *  1
     *  Exception Criteria Line
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
     *  Exception Criteria Line. Identifier
     *  An identifier for this exception criteria line.
     *  1
     *  Exception Criteria Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ID $iD
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
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Note $note
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
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
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
     *  Exception Criteria Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Criteria Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as thresholdValueComparisonCode
     *
     * BBIE
     *  Exception Criteria Line. Threshold Value Comparison Code. Code
     *  Type of comparison to be carried out in reference to the set threshold." Allowed values are: EXCEEDS_EXCEPTION_VALUE FALLS_BELOW_EXCEPTION_VALUE
     *  1
     *  Exception Criteria Line
     *  Threshold Value Comparison Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ThresholdValueComparisonCode
     */
    public function getThresholdValueComparisonCode()
    {
        return $this->thresholdValueComparisonCode;
    }

    /**
     * Sets a new thresholdValueComparisonCode
     *
     * BBIE
     *  Exception Criteria Line. Threshold Value Comparison Code. Code
     *  Type of comparison to be carried out in reference to the set threshold." Allowed values are: EXCEEDS_EXCEPTION_VALUE FALLS_BELOW_EXCEPTION_VALUE
     *  1
     *  Exception Criteria Line
     *  Threshold Value Comparison Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ThresholdValueComparisonCode $thresholdValueComparisonCode
     * @return self
     */
    public function setThresholdValueComparisonCode(\horstoeko\ubl\entities\cbc\ThresholdValueComparisonCode $thresholdValueComparisonCode)
    {
        $this->thresholdValueComparisonCode = $thresholdValueComparisonCode;
        return $this;
    }

    /**
     * Gets as thresholdQuantity
     *
     * BBIE
     *  Exception Criteria Line. Threshold_ Quantity. Quantity
     *  A quantity beyond which an exception will be triggered.
     *  1
     *  Exception Criteria Line
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ThresholdQuantity
     */
    public function getThresholdQuantity()
    {
        return $this->thresholdQuantity;
    }

    /**
     * Sets a new thresholdQuantity
     *
     * BBIE
     *  Exception Criteria Line. Threshold_ Quantity. Quantity
     *  A quantity beyond which an exception will be triggered.
     *  1
     *  Exception Criteria Line
     *  Threshold
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ThresholdQuantity $thresholdQuantity
     * @return self
     */
    public function setThresholdQuantity(\horstoeko\ubl\entities\cbc\ThresholdQuantity $thresholdQuantity)
    {
        $this->thresholdQuantity = $thresholdQuantity;
        return $this;
    }

    /**
     * Gets as exceptionStatusCode
     *
     * BBIE
     *  Exception Criteria Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Criteria Line
     *  Exception Status Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExceptionStatusCode
     */
    public function getExceptionStatusCode()
    {
        return $this->exceptionStatusCode;
    }

    /**
     * Sets a new exceptionStatusCode
     *
     * BBIE
     *  Exception Criteria Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Criteria Line
     *  Exception Status Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ExceptionStatusCode $exceptionStatusCode
     * @return self
     */
    public function setExceptionStatusCode(\horstoeko\ubl\entities\cbc\ExceptionStatusCode $exceptionStatusCode)
    {
        $this->exceptionStatusCode = $exceptionStatusCode;
        return $this;
    }

    /**
     * Gets as collaborationPriorityCode
     *
     * BBIE
     *  Exception Criteria Line. Collaboration_ Priority Code. Code
     *  A collaboratively assigned code signifying priority of the Exception. Possible values are: HIGH, LOW, MEDIUM
     *  0..1
     *  Exception Criteria Line
     *  Collaboration
     *  Priority Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CollaborationPriorityCode
     */
    public function getCollaborationPriorityCode()
    {
        return $this->collaborationPriorityCode;
    }

    /**
     * Sets a new collaborationPriorityCode
     *
     * BBIE
     *  Exception Criteria Line. Collaboration_ Priority Code. Code
     *  A collaboratively assigned code signifying priority of the Exception. Possible values are: HIGH, LOW, MEDIUM
     *  0..1
     *  Exception Criteria Line
     *  Collaboration
     *  Priority Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CollaborationPriorityCode $collaborationPriorityCode
     * @return self
     */
    public function setCollaborationPriorityCode(\horstoeko\ubl\entities\cbc\CollaborationPriorityCode $collaborationPriorityCode)
    {
        $this->collaborationPriorityCode = $collaborationPriorityCode;
        return $this;
    }

    /**
     * Gets as exceptionResolutionCode
     *
     * BBIE
     *  Exception Criteria Line. Exception_ Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Criteria Line
     *  Exception
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExceptionResolutionCode
     */
    public function getExceptionResolutionCode()
    {
        return $this->exceptionResolutionCode;
    }

    /**
     * Sets a new exceptionResolutionCode
     *
     * BBIE
     *  Exception Criteria Line. Exception_ Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Criteria Line
     *  Exception
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ExceptionResolutionCode $exceptionResolutionCode
     * @return self
     */
    public function setExceptionResolutionCode(\horstoeko\ubl\entities\cbc\ExceptionResolutionCode $exceptionResolutionCode)
    {
        $this->exceptionResolutionCode = $exceptionResolutionCode;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Exception Criteria Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions. There can be three types of exception criteria: Operational, Metric and Forecast Exceptions. This will be set if this Exception is about an Operational Exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Criteria Line
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
     *  Exception Criteria Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions. There can be three types of exception criteria: Operational, Metric and Forecast Exceptions. This will be set if this Exception is about an Operational Exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Criteria Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as performanceMetricTypeCode
     *
     * BBIE
     *  Exception Criteria Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Exception Criteria Line
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
     *  Exception Criteria Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Exception Criteria Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(\horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode)
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * ASBIE
     *  Exception Criteria Line. Effective_ Period. Period
     *  The period during which this exception criteria line is in effect.
     *  0..1
     *  Exception Criteria Line
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * ASBIE
     *  Exception Criteria Line. Effective_ Period. Period
     *  The period during which this exception criteria line is in effect.
     *  0..1
     *  Exception Criteria Line
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Adds as supplyItem
     *
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\SupplyItem $supplyItem
     */
    public function addToSupplyItem(\horstoeko\ubl\entities\cac\SupplyItem $supplyItem)
    {
        $this->supplyItem[] = $supplyItem;
        return $this;
    }

    /**
     * isset supplyItem
     *
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSupplyItem($index)
    {
        return isset($this->supplyItem[$index]);
    }

    /**
     * unset supplyItem
     *
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSupplyItem($index)
    {
        unset($this->supplyItem[$index]);
    }

    /**
     * Gets as supplyItem
     *
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return \horstoeko\ubl\entities\cac\SupplyItem[]
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * ASBIE
     *  Exception Criteria Line. Supply_ Item. Item
     *  The Trade Item that is the subject of the Exception Criterion.
     *  1..n
     *  Exception Criteria Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param  \horstoeko\ubl\entities\cac\SupplyItem[] $supplyItem
     * @return self
     */
    public function setSupplyItem(array $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }

    /**
     * Gets as forecastExceptionCriterionLine
     *
     * ASBIE
     *  Exception Criteria Line. Forecast Exception Criterion Line
     *  Establishes the criterion for one of the three types of exceptions. This class provides the criterion for the kind of forecast exception, the identification of the purpose of the forecast, the source of data and the time basis criterion for the exception.
     *  0..1
     *  Exception Criteria Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *
     * @return \horstoeko\ubl\entities\cac\ForecastExceptionCriterionLine
     */
    public function getForecastExceptionCriterionLine()
    {
        return $this->forecastExceptionCriterionLine;
    }

    /**
     * Sets a new forecastExceptionCriterionLine
     *
     * ASBIE
     *  Exception Criteria Line. Forecast Exception Criterion Line
     *  Establishes the criterion for one of the three types of exceptions. This class provides the criterion for the kind of forecast exception, the identification of the purpose of the forecast, the source of data and the time basis criterion for the exception.
     *  0..1
     *  Exception Criteria Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *  Forecast Exception Criterion Line
     *
     * @param  \horstoeko\ubl\entities\cac\ForecastExceptionCriterionLine $forecastExceptionCriterionLine
     * @return self
     */
    public function setForecastExceptionCriterionLine(\horstoeko\ubl\entities\cac\ForecastExceptionCriterionLine $forecastExceptionCriterionLine)
    {
        $this->forecastExceptionCriterionLine = $forecastExceptionCriterionLine;
        return $this;
    }


}

