<?php

namespace horstoeko\ubl\entities\udt;

/**
 * Class representing DateType
 *
 * UBLUDT000009
 *  UDT
 *  Date. Type
 *  1.0
 *  One calendar day according the Gregorian calendar.
 *  Date
 *  string
 * XSD Type: DateType
 */
class DateType
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
     * @param  \DateTime $value
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

