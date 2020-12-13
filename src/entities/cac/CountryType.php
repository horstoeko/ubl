<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CountryType
 *
 * ABIE
 *  Country. Details
 *  Information about a geopolitical country.
 *  Country
 * XSD Type: CountryType
 */
class CountryType
{

    /**
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\IdentificationCode $identificationCode
     */
    private $identificationCode = null;

    /**
     * BBIE
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * Gets as identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\IdentificationCode
     */
    public function getIdentificationCode()
    {
        return $this->identificationCode;
    }

    /**
     * Sets a new identificationCode
     *
     * BBIE
     *  Country. Identification Code. Code
     *  An identifier for the Country.
     *  0..1
     *  Country
     *  Identification Code
     *  Code
     *  Country Identification_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\IdentificationCode $identificationCode
     * @return self
     */
    public function setIdentificationCode(\horstoeko\ubl\entities\cbc\IdentificationCode $identificationCode)
    {
        $this->identificationCode = $identificationCode;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
     *
     * @return \horstoeko\ubl\entities\cbc\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Country. Name
     *  The name of the Country.
     *  0..1
     *  Country
     *  Name
     *  Name
     *  Name. Type
     *  “SOUTH AFRICA”
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }


}

