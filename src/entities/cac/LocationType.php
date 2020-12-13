<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LocationType
 *
 * ABIE
 *  Location. Details
 *  Information about a location.
 *  Location
 * XSD Type: LocationType
 */
class LocationType
{

    /**
     * BBIE
     *  Location. Identifier
     *  The unique identifier for the location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Location. Description. Text
     *  The description or name of the location.
     *  0..1
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description $description
     */
    private $description = null;

    /**
     * BBIE
     *  Location. Conditions. Text
     *  Conditions describing the location.
     *  0..1
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Conditions $conditions
     */
    private $conditions = null;

    /**
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @var \horstoeko\ubl\entities\cbc\CountrySubentity $countrySubentity
     */
    private $countrySubentity = null;

    /**
     * BBIE
     *  Location. Country Subentity Code. Code
     *  The territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @var \horstoeko\ubl\entities\cbc\CountrySubentityCode $countrySubentityCode
     */
    private $countrySubentityCode = null;

    /**
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Location. Address
     *  Association to the address of the location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Location. Identifier
     *  The unique identifier for the location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Location. Identifier
     *  The unique identifier for the location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Location. Description. Text
     *  The description or name of the location.
     *  0..1
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Location. Description. Text
     *  The description or name of the location.
     *  0..1
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description $description
     * @return self
     */
    public function setDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Conditions describing the location.
     *  0..1
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Conditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Conditions describing the location.
     *  0..1
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Conditions $conditions
     * @return self
     */
    public function setConditions(\horstoeko\ubl\entities\cbc\Conditions $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @return \horstoeko\ubl\entities\cbc\CountrySubentity
     */
    public function getCountrySubentity()
    {
        return $this->countrySubentity;
    }

    /**
     * Sets a new countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  "Florida","Tamilnadu"
     *
     * @param \horstoeko\ubl\entities\cbc\CountrySubentity $countrySubentity
     * @return self
     */
    public function setCountrySubentity(\horstoeko\ubl\entities\cbc\CountrySubentity $countrySubentity)
    {
        $this->countrySubentity = $countrySubentity;
        return $this;
    }

    /**
     * Gets as countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  The territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @return \horstoeko\ubl\entities\cbc\CountrySubentityCode
     */
    public function getCountrySubentityCode()
    {
        return $this->countrySubentityCode;
    }

    /**
     * Sets a new countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  The territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @param \horstoeko\ubl\entities\cbc\CountrySubentityCode $countrySubentityCode
     * @return self
     */
    public function setCountrySubentityCode(\horstoeko\ubl\entities\cbc\CountrySubentityCode $countrySubentityCode)
    {
        $this->countrySubentityCode = $countrySubentityCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  Period(s) in which the location can be used, e.g., for delivery.
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Location. Address
     *  Association to the address of the location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Location. Address
     *  Association to the address of the location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\Address $address
     * @return self
     */
    public function setAddress(\horstoeko\ubl\entities\cac\Address $address)
    {
        $this->address = $address;
        return $this;
    }


}

