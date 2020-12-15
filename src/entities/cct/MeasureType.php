<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing MeasureType
 *
 * UNDT000013
 *  CCT
 *  Measure. Type
 *  1.0
 *  A numeric value determined by measuring an object along with the specified unit of measure.
 *  Measure
 *  decimal
 * XSD Type: MeasureType
 */
class MeasureType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UNDT000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  Reference UNECE Rec. 20 and X12 355
     *
     * @var string $unitCode
     */
    private $unitCode = null;

    /**
     * UNDT000013-SC3
     *  SC
     *  Measure Unit. Code List Version. Identifier
     *  The version of the measure unit code list.
     *  Measure Unit
     *  Code List Version
     *  Identifier
     *  string
     *
     * @var string $unitCodeListVersionID
     */
    private $unitCodeListVersionID = null;

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
     * @param float $value
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
     * UNDT000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  Reference UNECE Rec. 20 and X12 355
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
     * UNDT000013-SC2
     *  SC
     *  Measure Unit. Code
     *  The type of unit of measure.
     *  Measure Unit
     *  Code
     *  Code
     *  string
     *  Reference UNECE Rec. 20 and X12 355
     *
     * @param string $unitCode
     * @return self
     */
    public function setUnitCode($unitCode)
    {
        $this->unitCode = $unitCode;
        return $this;
    }

    /**
     * Gets as unitCodeListVersionID
     *
     * UNDT000013-SC3
     *  SC
     *  Measure Unit. Code List Version. Identifier
     *  The version of the measure unit code list.
     *  Measure Unit
     *  Code List Version
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getUnitCodeListVersionID()
    {
        return $this->unitCodeListVersionID;
    }

    /**
     * Sets a new unitCodeListVersionID
     *
     * UNDT000013-SC3
     *  SC
     *  Measure Unit. Code List Version. Identifier
     *  The version of the measure unit code list.
     *  Measure Unit
     *  Code List Version
     *  Identifier
     *  string
     *
     * @param string $unitCodeListVersionID
     * @return self
     */
    public function setUnitCodeListVersionID($unitCodeListVersionID)
    {
        $this->unitCodeListVersionID = $unitCodeListVersionID;
        return $this;
    }


}

