<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing MeterReadingType
 *
 * ABIE
 *  Meter Reading. Details
 *  A class to describe a meter reading.
 *  Meter Reading
 * XSD Type: MeterReadingType
 */
class MeterReadingType
{

    /**
     * BBIE
     *  Meter Reading. Identifier
     *  An identifier for this meter reading.
     *  0..1
     *  Meter Reading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Meter Reading. Meter Reading Type. Text
     *  The type of this meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type
     *  Text
     *  Text. Type
     *  Electricity
     *
     * @var \horstoeko\ubl\entities\cbc\MeterReadingType $meterReadingType
     */
    private $meterReadingType = null;

    /**
     * BBIE
     *  Meter Reading. Meter Reading Type Code. Code
     *  The type of this meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @var \horstoeko\ubl\entities\cbc\MeterReadingTypeCode $meterReadingTypeCode
     */
    private $meterReadingTypeCode = null;

    /**
     * BBIE
     *  Meter Reading. Previous_ Meter Reading Date. Date
     *  The date of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @var \DateTime $previousMeterReadingDate
     */
    private $previousMeterReadingDate = null;

    /**
     * BBIE
     *  Meter Reading. Previous_ Meter Quantity. Quantity
     *  The quantity of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  122604.00
     *
     * @var \horstoeko\ubl\entities\cbc\PreviousMeterQuantity $previousMeterQuantity
     */
    private $previousMeterQuantity = null;

    /**
     * BBIE
     *  Meter Reading. Latest_ Meter Reading Date. Date
     *  The date of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @var \DateTime $latestMeterReadingDate
     */
    private $latestMeterReadingDate = null;

    /**
     * BBIE
     *  Meter Reading. Latest_ Meter Quantity. Quantity
     *  The quantity of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  128365.00
     *
     * @var \horstoeko\ubl\entities\cbc\LatestMeterQuantity $latestMeterQuantity
     */
    private $latestMeterQuantity = null;

    /**
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method. Text
     *  The method used for the previous meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @var \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethod $previousMeterReadingMethod
     */
    private $previousMeterReadingMethod = null;

    /**
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method Code. Code
     *  The method used for the previous meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @var \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode
     */
    private $previousMeterReadingMethodCode = null;

    /**
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method. Text
     *  The method used for the latest meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @var \horstoeko\ubl\entities\cbc\LatestMeterReadingMethod $latestMeterReadingMethod
     */
    private $latestMeterReadingMethod = null;

    /**
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method Code. Code
     *  The method used for the latest meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @var \horstoeko\ubl\entities\cbc\LatestMeterReadingMethodCode $latestMeterReadingMethodCode
     */
    private $latestMeterReadingMethodCode = null;

    /**
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @var \horstoeko\ubl\entities\cbc\MeterReadingComments[] $meterReadingComments
     */
    private $meterReadingComments = [
        
    ];

    /**
     * BBIE
     *  Meter Reading. Delivered_ Quantity. Quantity
     *  Consumption in the period from PreviousMeterReadingDate to LatestMeterReadingDate.
     *  1
     *  Meter Reading
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity
     */
    private $deliveredQuantity = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Meter Reading. Identifier
     *  An identifier for this meter reading.
     *  0..1
     *  Meter Reading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Meter Reading. Identifier
     *  An identifier for this meter reading.
     *  0..1
     *  Meter Reading
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     * Gets as meterReadingType
     *
     * BBIE
     *  Meter Reading. Meter Reading Type. Text
     *  The type of this meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type
     *  Text
     *  Text. Type
     *  Electricity
     *
     * @return \horstoeko\ubl\entities\cbc\MeterReadingType
     */
    public function getMeterReadingType()
    {
        return $this->meterReadingType;
    }

    /**
     * Sets a new meterReadingType
     *
     * BBIE
     *  Meter Reading. Meter Reading Type. Text
     *  The type of this meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type
     *  Text
     *  Text. Type
     *  Electricity
     *
     * @param  \horstoeko\ubl\entities\cbc\MeterReadingType $meterReadingType
     * @return self
     */
    public function setMeterReadingType(\horstoeko\ubl\entities\cbc\MeterReadingType $meterReadingType)
    {
        $this->meterReadingType = $meterReadingType;
        return $this;
    }

    /**
     * Gets as meterReadingTypeCode
     *
     * BBIE
     *  Meter Reading. Meter Reading Type Code. Code
     *  The type of this meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @return \horstoeko\ubl\entities\cbc\MeterReadingTypeCode
     */
    public function getMeterReadingTypeCode()
    {
        return $this->meterReadingTypeCode;
    }

    /**
     * Sets a new meterReadingTypeCode
     *
     * BBIE
     *  Meter Reading. Meter Reading Type Code. Code
     *  The type of this meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Meter Reading Type Code
     *  Code
     *  Code. Type
     *  Electricity
     *
     * @param  \horstoeko\ubl\entities\cbc\MeterReadingTypeCode $meterReadingTypeCode
     * @return self
     */
    public function setMeterReadingTypeCode(\horstoeko\ubl\entities\cbc\MeterReadingTypeCode $meterReadingTypeCode)
    {
        $this->meterReadingTypeCode = $meterReadingTypeCode;
        return $this;
    }

    /**
     * Gets as previousMeterReadingDate
     *
     * BBIE
     *  Meter Reading. Previous_ Meter Reading Date. Date
     *  The date of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @return \DateTime
     */
    public function getPreviousMeterReadingDate()
    {
        return $this->previousMeterReadingDate;
    }

    /**
     * Sets a new previousMeterReadingDate
     *
     * BBIE
     *  Meter Reading. Previous_ Meter Reading Date. Date
     *  The date of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @param  \DateTime $previousMeterReadingDate
     * @return self
     */
    public function setPreviousMeterReadingDate(\DateTime $previousMeterReadingDate)
    {
        $this->previousMeterReadingDate = $previousMeterReadingDate;
        return $this;
    }

    /**
     * Gets as previousMeterQuantity
     *
     * BBIE
     *  Meter Reading. Previous_ Meter Quantity. Quantity
     *  The quantity of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  122604.00
     *
     * @return \horstoeko\ubl\entities\cbc\PreviousMeterQuantity
     */
    public function getPreviousMeterQuantity()
    {
        return $this->previousMeterQuantity;
    }

    /**
     * Sets a new previousMeterQuantity
     *
     * BBIE
     *  Meter Reading. Previous_ Meter Quantity. Quantity
     *  The quantity of the previous meter reading.
     *  1
     *  Meter Reading
     *  Previous
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  122604.00
     *
     * @param  \horstoeko\ubl\entities\cbc\PreviousMeterQuantity $previousMeterQuantity
     * @return self
     */
    public function setPreviousMeterQuantity(\horstoeko\ubl\entities\cbc\PreviousMeterQuantity $previousMeterQuantity)
    {
        $this->previousMeterQuantity = $previousMeterQuantity;
        return $this;
    }

    /**
     * Gets as latestMeterReadingDate
     *
     * BBIE
     *  Meter Reading. Latest_ Meter Reading Date. Date
     *  The date of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @return \DateTime
     */
    public function getLatestMeterReadingDate()
    {
        return $this->latestMeterReadingDate;
    }

    /**
     * Sets a new latestMeterReadingDate
     *
     * BBIE
     *  Meter Reading. Latest_ Meter Reading Date. Date
     *  The date of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Reading Date
     *  Date
     *  Date. Type
     *  2006-09-01
     *
     * @param  \DateTime $latestMeterReadingDate
     * @return self
     */
    public function setLatestMeterReadingDate(\DateTime $latestMeterReadingDate)
    {
        $this->latestMeterReadingDate = $latestMeterReadingDate;
        return $this;
    }

    /**
     * Gets as latestMeterQuantity
     *
     * BBIE
     *  Meter Reading. Latest_ Meter Quantity. Quantity
     *  The quantity of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  128365.00
     *
     * @return \horstoeko\ubl\entities\cbc\LatestMeterQuantity
     */
    public function getLatestMeterQuantity()
    {
        return $this->latestMeterQuantity;
    }

    /**
     * Sets a new latestMeterQuantity
     *
     * BBIE
     *  Meter Reading. Latest_ Meter Quantity. Quantity
     *  The quantity of the latest meter reading.
     *  1
     *  Meter Reading
     *  Latest
     *  Meter Quantity
     *  Quantity
     *  Quantity. Type
     *  128365.00
     *
     * @param  \horstoeko\ubl\entities\cbc\LatestMeterQuantity $latestMeterQuantity
     * @return self
     */
    public function setLatestMeterQuantity(\horstoeko\ubl\entities\cbc\LatestMeterQuantity $latestMeterQuantity)
    {
        $this->latestMeterQuantity = $latestMeterQuantity;
        return $this;
    }

    /**
     * Gets as previousMeterReadingMethod
     *
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method. Text
     *  The method used for the previous meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @return \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethod
     */
    public function getPreviousMeterReadingMethod()
    {
        return $this->previousMeterReadingMethod;
    }

    /**
     * Sets a new previousMeterReadingMethod
     *
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method. Text
     *  The method used for the previous meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @param  \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethod $previousMeterReadingMethod
     * @return self
     */
    public function setPreviousMeterReadingMethod(\horstoeko\ubl\entities\cbc\PreviousMeterReadingMethod $previousMeterReadingMethod)
    {
        $this->previousMeterReadingMethod = $previousMeterReadingMethod;
        return $this;
    }

    /**
     * Gets as previousMeterReadingMethodCode
     *
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method Code. Code
     *  The method used for the previous meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @return \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethodCode
     */
    public function getPreviousMeterReadingMethodCode()
    {
        return $this->previousMeterReadingMethodCode;
    }

    /**
     * Sets a new previousMeterReadingMethodCode
     *
     * BBIE
     *  Meter Reading. Previous Meter Reading_ Method Code. Code
     *  The method used for the previous meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Previous Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @param  \horstoeko\ubl\entities\cbc\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode
     * @return self
     */
    public function setPreviousMeterReadingMethodCode(\horstoeko\ubl\entities\cbc\PreviousMeterReadingMethodCode $previousMeterReadingMethodCode)
    {
        $this->previousMeterReadingMethodCode = $previousMeterReadingMethodCode;
        return $this;
    }

    /**
     * Gets as latestMeterReadingMethod
     *
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method. Text
     *  The method used for the latest meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @return \horstoeko\ubl\entities\cbc\LatestMeterReadingMethod
     */
    public function getLatestMeterReadingMethod()
    {
        return $this->latestMeterReadingMethod;
    }

    /**
     * Sets a new latestMeterReadingMethod
     *
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method. Text
     *  The method used for the latest meter reading, expressed as text.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method
     *  Text
     *  Text. Type
     *  Manuel
     *
     * @param  \horstoeko\ubl\entities\cbc\LatestMeterReadingMethod $latestMeterReadingMethod
     * @return self
     */
    public function setLatestMeterReadingMethod(\horstoeko\ubl\entities\cbc\LatestMeterReadingMethod $latestMeterReadingMethod)
    {
        $this->latestMeterReadingMethod = $latestMeterReadingMethod;
        return $this;
    }

    /**
     * Gets as latestMeterReadingMethodCode
     *
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method Code. Code
     *  The method used for the latest meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @return \horstoeko\ubl\entities\cbc\LatestMeterReadingMethodCode
     */
    public function getLatestMeterReadingMethodCode()
    {
        return $this->latestMeterReadingMethodCode;
    }

    /**
     * Sets a new latestMeterReadingMethodCode
     *
     * BBIE
     *  Meter Reading. Latest Meter Reading_ Method Code. Code
     *  The method used for the latest meter reading, expressed as a code.
     *  0..1
     *  Meter Reading
     *  Latest Meter Reading
     *  Method Code
     *  Code
     *  Code. Type
     *  Estimated
     *
     * @param  \horstoeko\ubl\entities\cbc\LatestMeterReadingMethodCode $latestMeterReadingMethodCode
     * @return self
     */
    public function setLatestMeterReadingMethodCode(\horstoeko\ubl\entities\cbc\LatestMeterReadingMethodCode $latestMeterReadingMethodCode)
    {
        $this->latestMeterReadingMethodCode = $latestMeterReadingMethodCode;
        return $this;
    }

    /**
     * Adds as meterReadingComments
     *
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\MeterReadingComments $meterReadingComments
     */
    public function addToMeterReadingComments(\horstoeko\ubl\entities\cbc\MeterReadingComments $meterReadingComments)
    {
        $this->meterReadingComments[] = $meterReadingComments;
        return $this;
    }

    /**
     * isset meterReadingComments
     *
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetMeterReadingComments($index)
    {
        return isset($this->meterReadingComments[$index]);
    }

    /**
     * unset meterReadingComments
     *
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetMeterReadingComments($index)
    {
        unset($this->meterReadingComments[$index]);
    }

    /**
     * Gets as meterReadingComments
     *
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @return \horstoeko\ubl\entities\cbc\MeterReadingComments[]
     */
    public function getMeterReadingComments()
    {
        return $this->meterReadingComments;
    }

    /**
     * Sets a new meterReadingComments
     *
     * BBIE
     *  Meter Reading. Meter Reading_ Comments. Text
     *  Text containing comments on this meter reading.
     *  0..n
     *  Meter Reading
     *  Meter Reading
     *  Comments
     *  Text
     *  Text. Type
     *  The last stated meterstand is estimated
     *
     * @param  \horstoeko\ubl\entities\cbc\MeterReadingComments[] $meterReadingComments
     * @return self
     */
    public function setMeterReadingComments(array $meterReadingComments)
    {
        $this->meterReadingComments = $meterReadingComments;
        return $this;
    }

    /**
     * Gets as deliveredQuantity
     *
     * BBIE
     *  Meter Reading. Delivered_ Quantity. Quantity
     *  Consumption in the period from PreviousMeterReadingDate to LatestMeterReadingDate.
     *  1
     *  Meter Reading
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DeliveredQuantity
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * BBIE
     *  Meter Reading. Delivered_ Quantity. Quantity
     *  Consumption in the period from PreviousMeterReadingDate to LatestMeterReadingDate.
     *  1
     *  Meter Reading
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(\horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }


}

