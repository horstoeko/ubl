<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LocationType
 *
 * ABIE
 *  Location. Details
 *  A class to describe a location.
 *  Location
 * XSD Type: LocationType
 */
class LocationType
{

    /**
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
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
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Conditions[] $conditions
     */
    private $conditions = [
        
    ];

    /**
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @var \horstoeko\ubl\entities\cbc\CountrySubentity $countrySubentity
     */
    private $countrySubentity = null;

    /**
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
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
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LocationTypeCode $locationTypeCode
     */
    private $locationTypeCode = null;

    /**
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InformationURI $informationURI
     */
    private $informationURI = null;

    /**
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\SubsidiaryLocation[] $subsidiaryLocation
     */
    private $subsidiaryLocation = [
        
    ];

    /**
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @var \horstoeko\ubl\entities\cac\LocationCoordinate[] $locationCoordinate
     */
    private $locationCoordinate = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
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
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
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
     * Adds as description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
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
     *  Text describing this location.
     *  0..n
     *  Location
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Conditions $conditions
     */
    public function addToConditions(\horstoeko\ubl\entities\cbc\Conditions $conditions)
    {
        $this->conditions[] = $conditions;
        return $this;
    }

    /**
     * isset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditions($index)
    {
        return isset($this->conditions[$index]);
    }

    /**
     * unset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditions($index)
    {
        unset($this->conditions[$index]);
    }

    /**
     * Gets as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Conditions[]
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
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Conditions[] $conditions
     * @return self
     */
    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
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
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
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
     *  A territorial division of a country, such as a county or state, expressed as a code.
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
     *  A territorial division of a country, such as a county or state, expressed as a code.
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
     * Gets as locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LocationTypeCode
     */
    public function getLocationTypeCode()
    {
        return $this->locationTypeCode;
    }

    /**
     * Sets a new locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LocationTypeCode $locationTypeCode
     * @return self
     */
    public function setLocationTypeCode(\horstoeko\ubl\entities\cbc\LocationTypeCode $locationTypeCode)
    {
        $this->locationTypeCode = $locationTypeCode;
        return $this;
    }

    /**
     * Gets as informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InformationURI
     */
    public function getInformationURI()
    {
        return $this->informationURI;
    }

    /**
     * Sets a new informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\InformationURI $informationURI
     * @return self
     */
    public function setInformationURI(\horstoeko\ubl\entities\cbc\InformationURI $informationURI)
    {
        $this->informationURI = $informationURI;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
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
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
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
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
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
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
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

    /**
     * Adds as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SubsidiaryLocation $subsidiaryLocation
     */
    public function addToSubsidiaryLocation(\horstoeko\ubl\entities\cac\SubsidiaryLocation $subsidiaryLocation)
    {
        $this->subsidiaryLocation[] = $subsidiaryLocation;
        return $this;
    }

    /**
     * isset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsidiaryLocation($index)
    {
        return isset($this->subsidiaryLocation[$index]);
    }

    /**
     * unset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsidiaryLocation($index)
    {
        unset($this->subsidiaryLocation[$index]);
    }

    /**
     * Gets as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\SubsidiaryLocation[]
     */
    public function getSubsidiaryLocation()
    {
        return $this->subsidiaryLocation;
    }

    /**
     * Sets a new subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\SubsidiaryLocation[] $subsidiaryLocation
     * @return self
     */
    public function setSubsidiaryLocation(array $subsidiaryLocation)
    {
        $this->subsidiaryLocation = $subsidiaryLocation;
        return $this;
    }

    /**
     * Adds as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\LocationCoordinate $locationCoordinate
     */
    public function addToLocationCoordinate(\horstoeko\ubl\entities\cac\LocationCoordinate $locationCoordinate)
    {
        $this->locationCoordinate[] = $locationCoordinate;
        return $this;
    }

    /**
     * isset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCoordinate($index)
    {
        return isset($this->locationCoordinate[$index]);
    }

    /**
     * unset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCoordinate($index)
    {
        unset($this->locationCoordinate[$index]);
    }

    /**
     * Gets as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return \horstoeko\ubl\entities\cac\LocationCoordinate[]
     */
    public function getLocationCoordinate()
    {
        return $this->locationCoordinate;
    }

    /**
     * Sets a new locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param \horstoeko\ubl\entities\cac\LocationCoordinate[] $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(array $locationCoordinate)
    {
        $this->locationCoordinate = $locationCoordinate;
        return $this;
    }


}

