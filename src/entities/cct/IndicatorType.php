<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing IndicatorType
 *
 * UNDT000012
 *  CCT
 *  Indicator. Type
 *  1.0
 *  A list of two mutually exclusive Boolean values that express the only possible states of a Property.
 *  Indicator
 *  string
 * XSD Type: IndicatorType
 */
class IndicatorType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000012-SC2
     *  SC
     *  Indicator. Format. Text
     *  Whether the indicator is numeric, textual or binary.
     *  Indicator
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
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
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
     * UNDT000012-SC2
     *  SC
     *  Indicator. Format. Text
     *  Whether the indicator is numeric, textual or binary.
     *  Indicator
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
     * UNDT000012-SC2
     *  SC
     *  Indicator. Format. Text
     *  Whether the indicator is numeric, textual or binary.
     *  Indicator
     *  Format
     *  Text
     *  string
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }


}

