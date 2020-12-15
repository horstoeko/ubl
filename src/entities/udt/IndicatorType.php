<?php

namespace horstoeko\ubl\entities\udt;

/**
 * Class representing IndicatorType
 *
 * UBLUDT0000012
 *  UDT
 *  Indicator. Type
 *  1.0
 *  A list of two mutually exclusive Boolean values that express the only possible states of a property.
 *  Indicator
 *  string
 * XSD Type: IndicatorType
 */
class IndicatorType
{

    /**
     * @var bool $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param bool $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param bool $value
     * @return bool
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


}

