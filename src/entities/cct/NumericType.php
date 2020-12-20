<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing NumericType
 *
 * UNDT000014
 *  CCT
 *  Numeric. Type
 *  1.0
 *  Numeric information that is assigned or is determined by calculation, counting, or sequencing. It does not require a unit of quantity or unit of measure.
 *  Numeric
 *  string
 * XSD Type: NumericType
 */
class NumericType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UNDT000014-SC2
     *  SC
     *  Numeric. Format. Text
     *  Whether the number is an integer, decimal, real number or percentage.
     *  Numeric
     *  Format
     *  Text
     *  string
     *
     * @var string $format
     */
    private $format = null;

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
     * Gets as format
     *
     * UNDT000014-SC2
     *  SC
     *  Numeric. Format. Text
     *  Whether the number is an integer, decimal, real number or percentage.
     *  Numeric
     *  Format
     *  Text
     *  string
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * UNDT000014-SC2
     *  SC
     *  Numeric. Format. Text
     *  Whether the number is an integer, decimal, real number or percentage.
     *  Numeric
     *  Format
     *  Text
     *  string
     *
     * @param  string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }


}

