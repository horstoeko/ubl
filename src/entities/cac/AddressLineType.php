<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AddressLineType
 *
 * ABIE
 *  Address Line. Details
 *  Information about a line of address expressed as unstructured text.
 *  Address Line
 * XSD Type: AddressLineType
 */
class AddressLineType
{

    /**
     * BBIE
     *  Address Line. Line. Text
     *  A line of address expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  "123 Standard Chartered Tower"
     *
     * @var \horstoeko\ubl\entities\cbc\Line $line
     */
    private $line = null;

    /**
     * Gets as line
     *
     * BBIE
     *  Address Line. Line. Text
     *  A line of address expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  "123 Standard Chartered Tower"
     *
     * @return \horstoeko\ubl\entities\cbc\Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * BBIE
     *  Address Line. Line. Text
     *  A line of address expressed as unstructured text.
     *  1
     *  Address Line
     *  Line
     *  Text
     *  Text. Type
     *  "123 Standard Chartered Tower"
     *
     * @param \horstoeko\ubl\entities\cbc\Line $line
     * @return self
     */
    public function setLine(\horstoeko\ubl\entities\cbc\Line $line)
    {
        $this->line = $line;
        return $this;
    }


}

