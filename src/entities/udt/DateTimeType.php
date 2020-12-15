<?php

namespace horstoeko\ubl\entities\udt;

/**
 * Class representing DateTimeType
 *
 * UBLUDT000008
 *  UDT
 *  Date Time. Type
 *  1.0
 *  A particular point in the progression of time, together with relevant supplementary information.
 *  Date Time
 *  string
 *  Can be used for a date and/or time.
 * XSD Type: DateTimeType
 */
class DateTimeType
{

    /**
     * @var \DateTime $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
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

