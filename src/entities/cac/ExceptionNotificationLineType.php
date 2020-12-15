<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ExceptionNotificationLineType
 *
 * ABIE
 *  Exception Notification Line. Details
 *  A class to define a line in an Exception Notification.
 *  Exception Notification Line
 * XSD Type: ExceptionNotificationLineType
 */
class ExceptionNotificationLineType
{

    /**
     * BBIE
     *  Exception Notification Line. Identifier
     *  An identifier for this exception notification line.
     *  1
     *  Exception Notification Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Exception Notification Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Notification Line
     *  Exception Status Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExceptionStatusCode $exceptionStatusCode
     */
    private $exceptionStatusCode = null;

    /**
     * BBIE
     *  Exception Notification Line. Collaboration_ Priority Code. Code
     *  Priority of Exception.
     *  0..1
     *  Exception Notification Line
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
     *  Exception Notification Line. Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Notification Line
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ResolutionCode $resolutionCode
     */
    private $resolutionCode = null;

    /**
     * BBIE
     *  Exception Notification Line. Compared Value. Measure
     *  The value that was compared with the source value that resulted in the exception
     *  1
     *  Exception Notification Line
     *  Compared Value
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ComparedValueMeasure $comparedValueMeasure
     */
    private $comparedValueMeasure = null;

    /**
     * BBIE
     *  Exception Notification Line. Source Value. Measure
     *  The value used as the basis of comparison
     *  1
     *  Exception Notification Line
     *  Source Value
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SourceValueMeasure $sourceValueMeasure
     */
    private $sourceValueMeasure = null;

    /**
     * BBIE
     *  Exception Notification Line. Variance. Quantity
     *  The variance of a data item from an expected value during a particular time interval.
     *  0..1
     *  Exception Notification Line
     *  Variance
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\VarianceQuantity $varianceQuantity
     */
    private $varianceQuantity = null;

    /**
     * BBIE
     *  Exception Notification Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions: Operational, performance metric and forecast. This reports an exception notification about an operational exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Notification Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * BBIE
     *  Exception Notification Line. Performance Metric Type Code. Code
     *  A code used to identify a measure of performance. It defines the type of the Performance Metric on which an exception criteria is being defined
     *  0..1
     *  Exception Notification Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * ASBIE
     *  Exception Notification Line. Exception Observation_ Period. Period
     *  The period (start-end date) when this exception is observed
     *  0..1
     *  Exception Notification Line
     *  Exception Observation
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ExceptionObservationPeriod $exceptionObservationPeriod
     */
    private $exceptionObservationPeriod = null;

    /**
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Exception Notification Line. Forecast Exception
     *  A forecast accuracy or comparison exception.
     *  0..1
     *  Exception Notification Line
     *  Forecast Exception
     *  Forecast Exception
     *  Forecast Exception
     *
     * @var \horstoeko\ubl\entities\cac\ForecastException $forecastException
     */
    private $forecastException = null;

    /**
     * ASBIE
     *  Exception Notification Line. Supply_ Item. Item
     *  The product associated with this exception notification line.
     *  1
     *  Exception Notification Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\SupplyItem $supplyItem
     */
    private $supplyItem = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Exception Notification Line. Identifier
     *  An identifier for this exception notification line.
     *  1
     *  Exception Notification Line
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
     *  Exception Notification Line. Identifier
     *  An identifier for this exception notification line.
     *  1
     *  Exception Notification Line
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
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     *  Exception Notification Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Exception Notification Line
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
     * Adds as description
     *
     * BBIE
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Exception Notification Line. Description. Text
     *  Text describing the exception.
     *  0..n
     *  Exception Notification Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as exceptionStatusCode
     *
     * BBIE
     *  Exception Notification Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Notification Line
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
     *  Exception Notification Line. Exception Status Code. Code
     *  A code signifying status specific to a shipment exception.
     *  0..1
     *  Exception Notification Line
     *  Exception Status Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ExceptionStatusCode $exceptionStatusCode
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
     *  Exception Notification Line. Collaboration_ Priority Code. Code
     *  Priority of Exception.
     *  0..1
     *  Exception Notification Line
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
     *  Exception Notification Line. Collaboration_ Priority Code. Code
     *  Priority of Exception.
     *  0..1
     *  Exception Notification Line
     *  Collaboration
     *  Priority Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CollaborationPriorityCode $collaborationPriorityCode
     * @return self
     */
    public function setCollaborationPriorityCode(\horstoeko\ubl\entities\cbc\CollaborationPriorityCode $collaborationPriorityCode)
    {
        $this->collaborationPriorityCode = $collaborationPriorityCode;
        return $this;
    }

    /**
     * Gets as resolutionCode
     *
     * BBIE
     *  Exception Notification Line. Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Notification Line
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ResolutionCode
     */
    public function getResolutionCode()
    {
        return $this->resolutionCode;
    }

    /**
     * Sets a new resolutionCode
     *
     * BBIE
     *  Exception Notification Line. Resolution Code. Code
     *  Coded representation of possible resolution methods". Possible values are: DEFAULT_TO_AVERAGE_OF_COMPARED_VALUES DEFAULT_TO_BUYERS_VALUE DEFAULT_TO_HIGH_VALUE DEFAULT_TO_LOW_VALUE DEFAULT_TO_SELLERS_VALUE MANUAL_RESOLUTION MUTUALLY_DEFINED
     *  0..1
     *  Exception Notification Line
     *  Resolution Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ResolutionCode $resolutionCode
     * @return self
     */
    public function setResolutionCode(\horstoeko\ubl\entities\cbc\ResolutionCode $resolutionCode)
    {
        $this->resolutionCode = $resolutionCode;
        return $this;
    }

    /**
     * Gets as comparedValueMeasure
     *
     * BBIE
     *  Exception Notification Line. Compared Value. Measure
     *  The value that was compared with the source value that resulted in the exception
     *  1
     *  Exception Notification Line
     *  Compared Value
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ComparedValueMeasure
     */
    public function getComparedValueMeasure()
    {
        return $this->comparedValueMeasure;
    }

    /**
     * Sets a new comparedValueMeasure
     *
     * BBIE
     *  Exception Notification Line. Compared Value. Measure
     *  The value that was compared with the source value that resulted in the exception
     *  1
     *  Exception Notification Line
     *  Compared Value
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ComparedValueMeasure $comparedValueMeasure
     * @return self
     */
    public function setComparedValueMeasure(\horstoeko\ubl\entities\cbc\ComparedValueMeasure $comparedValueMeasure)
    {
        $this->comparedValueMeasure = $comparedValueMeasure;
        return $this;
    }

    /**
     * Gets as sourceValueMeasure
     *
     * BBIE
     *  Exception Notification Line. Source Value. Measure
     *  The value used as the basis of comparison
     *  1
     *  Exception Notification Line
     *  Source Value
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SourceValueMeasure
     */
    public function getSourceValueMeasure()
    {
        return $this->sourceValueMeasure;
    }

    /**
     * Sets a new sourceValueMeasure
     *
     * BBIE
     *  Exception Notification Line. Source Value. Measure
     *  The value used as the basis of comparison
     *  1
     *  Exception Notification Line
     *  Source Value
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SourceValueMeasure $sourceValueMeasure
     * @return self
     */
    public function setSourceValueMeasure(\horstoeko\ubl\entities\cbc\SourceValueMeasure $sourceValueMeasure)
    {
        $this->sourceValueMeasure = $sourceValueMeasure;
        return $this;
    }

    /**
     * Gets as varianceQuantity
     *
     * BBIE
     *  Exception Notification Line. Variance. Quantity
     *  The variance of a data item from an expected value during a particular time interval.
     *  0..1
     *  Exception Notification Line
     *  Variance
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\VarianceQuantity
     */
    public function getVarianceQuantity()
    {
        return $this->varianceQuantity;
    }

    /**
     * Sets a new varianceQuantity
     *
     * BBIE
     *  Exception Notification Line. Variance. Quantity
     *  The variance of a data item from an expected value during a particular time interval.
     *  0..1
     *  Exception Notification Line
     *  Variance
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\VarianceQuantity $varianceQuantity
     * @return self
     */
    public function setVarianceQuantity(\horstoeko\ubl\entities\cbc\VarianceQuantity $varianceQuantity)
    {
        $this->varianceQuantity = $varianceQuantity;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Exception Notification Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions: Operational, performance metric and forecast. This reports an exception notification about an operational exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Notification Line
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
     *  Exception Notification Line. Supply Chain Activity Type Code. Code
     *  Establishes the criterion for one of the three types of exceptions: Operational, performance metric and forecast. This reports an exception notification about an operational exception. Description could be: A code used to identify an operational exception. Possible values are: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS RECEIPTS SALES SHIPMENTS
     *  0..1
     *  Exception Notification Line
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
     * Gets as performanceMetricTypeCode
     *
     * BBIE
     *  Exception Notification Line. Performance Metric Type Code. Code
     *  A code used to identify a measure of performance. It defines the type of the Performance Metric on which an exception criteria is being defined
     *  0..1
     *  Exception Notification Line
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
     *  Exception Notification Line. Performance Metric Type Code. Code
     *  A code used to identify a measure of performance. It defines the type of the Performance Metric on which an exception criteria is being defined
     *  0..1
     *  Exception Notification Line
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
     * Gets as exceptionObservationPeriod
     *
     * ASBIE
     *  Exception Notification Line. Exception Observation_ Period. Period
     *  The period (start-end date) when this exception is observed
     *  0..1
     *  Exception Notification Line
     *  Exception Observation
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ExceptionObservationPeriod
     */
    public function getExceptionObservationPeriod()
    {
        return $this->exceptionObservationPeriod;
    }

    /**
     * Sets a new exceptionObservationPeriod
     *
     * ASBIE
     *  Exception Notification Line. Exception Observation_ Period. Period
     *  The period (start-end date) when this exception is observed
     *  0..1
     *  Exception Notification Line
     *  Exception Observation
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ExceptionObservationPeriod $exceptionObservationPeriod
     * @return self
     */
    public function setExceptionObservationPeriod(\horstoeko\ubl\entities\cac\ExceptionObservationPeriod $exceptionObservationPeriod)
    {
        $this->exceptionObservationPeriod = $exceptionObservationPeriod;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    public function addToDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Exception Notification Line. Document Reference
     *  A reference to Exception Criteria document can be provided.
     *  0..n
     *  Exception Notification Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as forecastException
     *
     * ASBIE
     *  Exception Notification Line. Forecast Exception
     *  A forecast accuracy or comparison exception.
     *  0..1
     *  Exception Notification Line
     *  Forecast Exception
     *  Forecast Exception
     *  Forecast Exception
     *
     * @return \horstoeko\ubl\entities\cac\ForecastException
     */
    public function getForecastException()
    {
        return $this->forecastException;
    }

    /**
     * Sets a new forecastException
     *
     * ASBIE
     *  Exception Notification Line. Forecast Exception
     *  A forecast accuracy or comparison exception.
     *  0..1
     *  Exception Notification Line
     *  Forecast Exception
     *  Forecast Exception
     *  Forecast Exception
     *
     * @param \horstoeko\ubl\entities\cac\ForecastException $forecastException
     * @return self
     */
    public function setForecastException(\horstoeko\ubl\entities\cac\ForecastException $forecastException)
    {
        $this->forecastException = $forecastException;
        return $this;
    }

    /**
     * Gets as supplyItem
     *
     * ASBIE
     *  Exception Notification Line. Supply_ Item. Item
     *  The product associated with this exception notification line.
     *  1
     *  Exception Notification Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @return \horstoeko\ubl\entities\cac\SupplyItem
     */
    public function getSupplyItem()
    {
        return $this->supplyItem;
    }

    /**
     * Sets a new supplyItem
     *
     * ASBIE
     *  Exception Notification Line. Supply_ Item. Item
     *  The product associated with this exception notification line.
     *  1
     *  Exception Notification Line
     *  Supply
     *  Item
     *  Item
     *  Item
     *
     * @param \horstoeko\ubl\entities\cac\SupplyItem $supplyItem
     * @return self
     */
    public function setSupplyItem(\horstoeko\ubl\entities\cac\SupplyItem $supplyItem)
    {
        $this->supplyItem = $supplyItem;
        return $this;
    }


}

