<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing DateTimeType
 *
 * UNDT000008
 *  CCT
 *  Date Time. Type
 *  1.0
 *  A particular point in the progression of time together with the relevant supplementary information.
 *  Date Time
 *  string
 *  Can be used for a date and/or time.
 * XSD Type: DateTimeType
 */
class DateTimeType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000008-SC1
     *  SC
     *  Date Time. Format. Text
     *  The format of the date time content
     *  Date Time
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
     * @param  string $value
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
     * UNDT000008-SC1
     *  SC
     *  Date Time. Format. Text
     *  The format of the date time content
     *  Date Time
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
     * UNDT000008-SC1
     *  SC
     *  Date Time. Format. Text
     *  The format of the date time content
     *  Date Time
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

