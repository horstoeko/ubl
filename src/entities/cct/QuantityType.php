<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing QuantityType
 *
 * UNDT000018
 *  CCT
 *  Quantity. Type
 *  1.0
 *  A counted number of non-monetary units possibly including fractions.
 *  Quantity
 *  decimal
 * XSD Type: QuantityType
 */
class QuantityType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UNDT000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *
     * @var string $unitCode
     */
    private $unitCode = null;

    /**
     * UNDT000018-SC3
     *  SC
     *  Quantity Unit. Code List. Identifier
     *  The quantity unit code list.
     *  Quantity Unit
     *  Code List
     *  Identifier
     *  string
     *
     * @var string $unitCodeListID
     */
    private $unitCodeListID = null;

    /**
     * UNDT000018-SC4
     *  SC
     *  Quantity Unit. Code List Agency. Identifier
     *  The identification of the agency that maintains the quantity unit code list
     *  Quantity Unit
     *  Code List Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var string $unitCodeListAgencyID
     */
    private $unitCodeListAgencyID = null;

    /**
     * UNDT000018-SC5
     *  SC
     *  Quantity Unit. Code List Agency Name. Text
     *  The name of the agency which maintains the quantity unit code list.
     *  Quantity Unit
     *  Code List Agency Name
     *  Text
     *  string
     *
     * @var string $unitCodeListAgencyName
     */
    private $unitCodeListAgencyName = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param  float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as unitCode
     *
     * UNDT000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * Sets a new unitCode
     *
     * UNDT000018-SC2
     *  SC
     *  Quantity. Unit. Code
     *  The unit of the quantity
     *  Quantity
     *  Unit Code
     *  Code
     *  string
     *
     * @param  string $unitCode
     * @return self
     */
    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
        return $this;
    }

    /**
     * Gets as unitCodeListID
     *
     * UNDT000018-SC3
     *  SC
     *  Quantity Unit. Code List. Identifier
     *  The quantity unit code list.
     *  Quantity Unit
     *  Code List
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getUnitCodeListID()
    {
        return $this->unitCodeListID;
    }

    /**
     * Sets a new unitCodeListID
     *
     * UNDT000018-SC3
     *  SC
     *  Quantity Unit. Code List. Identifier
     *  The quantity unit code list.
     *  Quantity Unit
     *  Code List
     *  Identifier
     *  string
     *
     * @param  string $unitCodeListID
     * @return self
     */
    public function setUnitCodeListID($unitCodeListID)
    {
        $this->unitCodeListID = $unitCodeListID;
        return $this;
    }

    /**
     * Gets as unitCodeListAgencyID
     *
     * UNDT000018-SC4
     *  SC
     *  Quantity Unit. Code List Agency. Identifier
     *  The identification of the agency that maintains the quantity unit code list
     *  Quantity Unit
     *  Code List Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return string
     */
    public function getUnitCodeListAgencyID()
    {
        return $this->unitCodeListAgencyID;
    }

    /**
     * Sets a new unitCodeListAgencyID
     *
     * UNDT000018-SC4
     *  SC
     *  Quantity Unit. Code List Agency. Identifier
     *  The identification of the agency that maintains the quantity unit code list
     *  Quantity Unit
     *  Code List Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param  string $unitCodeListAgencyID
     * @return self
     */
    public function setUnitCodeListAgencyID($unitCodeListAgencyID)
    {
        $this->unitCodeListAgencyID = $unitCodeListAgencyID;
        return $this;
    }

    /**
     * Gets as unitCodeListAgencyName
     *
     * UNDT000018-SC5
     *  SC
     *  Quantity Unit. Code List Agency Name. Text
     *  The name of the agency which maintains the quantity unit code list.
     *  Quantity Unit
     *  Code List Agency Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getUnitCodeListAgencyName()
    {
        return $this->unitCodeListAgencyName;
    }

    /**
     * Sets a new unitCodeListAgencyName
     *
     * UNDT000018-SC5
     *  SC
     *  Quantity Unit. Code List Agency Name. Text
     *  The name of the agency which maintains the quantity unit code list.
     *  Quantity Unit
     *  Code List Agency Name
     *  Text
     *  string
     *
     * @param  string $unitCodeListAgencyName
     * @return self
     */
    public function setUnitCodeListAgencyName($unitCodeListAgencyName)
    {
        $this->unitCodeListAgencyName = $unitCodeListAgencyName;
        return $this;
    }


}

