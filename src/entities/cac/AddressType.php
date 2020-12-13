<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AddressType
 *
 * ABIE
 *  Address. Details
 *  Information about a structured address.
 *  Address
 * XSD Type: AddressType
 */
class AddressType
{

    /**
     * BBIE
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AddressTypeCode $addressTypeCode
     */
    private $addressTypeCode = null;

    /**
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AddressFormatCode $addressFormatCode
     */
    private $addressFormatCode = null;

    /**
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @var \horstoeko\ubl\entities\cbc\Postbox $postbox
     */
    private $postbox = null;

    /**
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @var \horstoeko\ubl\entities\cbc\Floor $floor
     */
    private $floor = null;

    /**
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @var \horstoeko\ubl\entities\cbc\Room $room
     */
    private $room = null;

    /**
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @var \horstoeko\ubl\entities\cbc\StreetName $streetName
     */
    private $streetName = null;

    /**
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @var \horstoeko\ubl\entities\cbc\AdditionalStreetName $additionalStreetName
     */
    private $additionalStreetName = null;

    /**
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @var \horstoeko\ubl\entities\cbc\BlockName $blockName
     */
    private $blockName = null;

    /**
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @var \horstoeko\ubl\entities\cbc\BuildingName $buildingName
     */
    private $buildingName = null;

    /**
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @var \horstoeko\ubl\entities\cbc\BuildingNumber $buildingNumber
     */
    private $buildingNumber = null;

    /**
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @var \horstoeko\ubl\entities\cbc\InhouseMail $inhouseMail
     */
    private $inhouseMail = null;

    /**
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @var \horstoeko\ubl\entities\cbc\Department $department
     */
    private $department = null;

    /**
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MarkAttention $markAttention
     */
    private $markAttention = null;

    /**
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MarkCare $markCare
     */
    private $markCare = null;

    /**
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PlotIdentification $plotIdentification
     */
    private $plotIdentification = null;

    /**
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CitySubdivisionName $citySubdivisionName
     */
    private $citySubdivisionName = null;

    /**
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @var \horstoeko\ubl\entities\cbc\CityName $cityName
     */
    private $cityName = null;

    /**
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @var \horstoeko\ubl\entities\cbc\PostalZone $postalZone
     */
    private $postalZone = null;

    /**
     * BBIE
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
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
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @var \horstoeko\ubl\entities\cbc\Region $region
     */
    private $region = null;

    /**
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @var \horstoeko\ubl\entities\cbc\District $district
     */
    private $district = null;

    /**
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @var \horstoeko\ubl\entities\cbc\TimezoneOffset $timezoneOffset
     */
    private $timezoneOffset = null;

    /**
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @var \horstoeko\ubl\entities\cac\AddressLine[] $addressLine
     */
    private $addressLine = [
        
    ];

    /**
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @var \horstoeko\ubl\entities\cac\Country $country
     */
    private $country = null;

    /**
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @var \horstoeko\ubl\entities\cac\LocationCoordinate $locationCoordinate
     */
    private $locationCoordinate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     *  Address. Identifier
     *  An identifier for a specific address within a scheme of registered addresses.
     *  0..1
     *  Address
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  DetailsKey
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
     * Gets as addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AddressTypeCode
     */
    public function getAddressTypeCode()
    {
        return $this->addressTypeCode;
    }

    /**
     * Sets a new addressTypeCode
     *
     * BBIE
     *  Address. Address Type Code. Code
     *  A code specifying the type of this address, such as business address or home address.
     *  0..1
     *  Address
     *  Address Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AddressTypeCode $addressTypeCode
     * @return self
     */
    public function setAddressTypeCode(\horstoeko\ubl\entities\cbc\AddressTypeCode $addressTypeCode)
    {
        $this->addressTypeCode = $addressTypeCode;
        return $this;
    }

    /**
     * Gets as addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AddressFormatCode
     */
    public function getAddressFormatCode()
    {
        return $this->addressFormatCode;
    }

    /**
     * Sets a new addressFormatCode
     *
     * BBIE
     *  Address. Address Format Code. Code
     *  A code specifying the format of this address.
     *  0..1
     *  Address
     *  Address Format Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AddressFormatCode $addressFormatCode
     * @return self
     */
    public function setAddressFormatCode(\horstoeko\ubl\entities\cbc\AddressFormatCode $addressFormatCode)
    {
        $this->addressFormatCode = $addressFormatCode;
        return $this;
    }

    /**
     * Gets as postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @return \horstoeko\ubl\entities\cbc\Postbox
     */
    public function getPostbox()
    {
        return $this->postbox;
    }

    /**
     * Sets a new postbox
     *
     * BBIE
     *  Address. Postbox. Text
     *  A post office box number.
     *  0..1
     *  Address
     *  Postbox
     *  Text
     *  Text. Type
     *  PostBox, PO Box
     *  "123"
     *
     * @param \horstoeko\ubl\entities\cbc\Postbox $postbox
     * @return self
     */
    public function setPostbox(\horstoeko\ubl\entities\cbc\Postbox $postbox)
    {
        $this->postbox = $postbox;
        return $this;
    }

    /**
     * Gets as floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @return \horstoeko\ubl\entities\cbc\Floor
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * BBIE
     *  Address. Floor. Text
     *  An addressable floor of a building.
     *  0..1
     *  Address
     *  Floor
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "30"
     *
     * @param \horstoeko\ubl\entities\cbc\Floor $floor
     * @return self
     */
    public function setFloor(\horstoeko\ubl\entities\cbc\Floor $floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as room
     *
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @return \horstoeko\ubl\entities\cbc\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * BBIE
     *  Address. Room. Text
     *  A room, suite, or apartment of a building.
     *  0..1
     *  Address
     *  Room
     *  Text
     *  Text. Type
     *  SubPremiseNumber
     *  "Reception"
     *
     * @param \horstoeko\ubl\entities\cbc\Room $room
     * @return self
     */
    public function setRoom(\horstoeko\ubl\entities\cbc\Room $room)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Gets as streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @return \horstoeko\ubl\entities\cbc\StreetName
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * Sets a new streetName
     *
     * BBIE
     *  Address. Street Name. Name
     *  The name of a street.
     *  0..1
     *  Address
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Kwun Tong Road"
     *
     * @param \horstoeko\ubl\entities\cbc\StreetName $streetName
     * @return self
     */
    public function setStreetName(\horstoeko\ubl\entities\cbc\StreetName $streetName)
    {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * Gets as additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @return \horstoeko\ubl\entities\cbc\AdditionalStreetName
     */
    public function getAdditionalStreetName()
    {
        return $this->additionalStreetName;
    }

    /**
     * Sets a new additionalStreetName
     *
     * BBIE
     *  Address. Additional_ Street Name. Name
     *  An additional name of a street used to further specify the street name.
     *  0..1
     *  Address
     *  Additional
     *  Street Name
     *  Name
     *  Name. Type
     *  Thoroughfare
     *  "Cnr Aberdeen Road"
     *
     * @param \horstoeko\ubl\entities\cbc\AdditionalStreetName $additionalStreetName
     * @return self
     */
    public function setAdditionalStreetName(\horstoeko\ubl\entities\cbc\AdditionalStreetName $additionalStreetName)
    {
        $this->additionalStreetName = $additionalStreetName;
        return $this;
    }

    /**
     * Gets as blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @return \horstoeko\ubl\entities\cbc\BlockName
     */
    public function getBlockName()
    {
        return $this->blockName;
    }

    /**
     * Sets a new blockName
     *
     * BBIE
     *  Address. Block Name. Name
     *  The block name, expressed as text, for an area surrounded by streets and usually containing several buildings for this address.
     *  0..1
     *  Address
     *  Block Name
     *  Name
     *  Name. Type
     *  Seabird
     *
     * @param \horstoeko\ubl\entities\cbc\BlockName $blockName
     * @return self
     */
    public function setBlockName(\horstoeko\ubl\entities\cbc\BlockName $blockName)
    {
        $this->blockName = $blockName;
        return $this;
    }

    /**
     * Gets as buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @return \horstoeko\ubl\entities\cbc\BuildingName
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Sets a new buildingName
     *
     * BBIE
     *  Address. Building Name. Name
     *  The name of a building.
     *  0..1
     *  Address
     *  Building Name
     *  Name
     *  Name. Type
     *  BuildingName
     *  "Plot 421"
     *
     * @param \horstoeko\ubl\entities\cbc\BuildingName $buildingName
     * @return self
     */
    public function setBuildingName(\horstoeko\ubl\entities\cbc\BuildingName $buildingName)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * Gets as buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @return \horstoeko\ubl\entities\cbc\BuildingNumber
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Sets a new buildingNumber
     *
     * BBIE
     *  Address. Building Number. Text
     *  The number of a building.
     *  0..1
     *  Address
     *  Building Number
     *  Text
     *  Text. Type
     *  PremiseNumber
     *  "388"
     *
     * @param \horstoeko\ubl\entities\cbc\BuildingNumber $buildingNumber
     * @return self
     */
    public function setBuildingNumber(\horstoeko\ubl\entities\cbc\BuildingNumber $buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * Gets as inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @return \horstoeko\ubl\entities\cbc\InhouseMail
     */
    public function getInhouseMail()
    {
        return $this->inhouseMail;
    }

    /**
     * Sets a new inhouseMail
     *
     * BBIE
     *  Address. Inhouse_ Mail. Text
     *  A specific location within a building.
     *  0..1
     *  Address
     *  Inhouse
     *  Mail
     *  Text
     *  Text. Type
     *  MailStop
     *
     * @param \horstoeko\ubl\entities\cbc\InhouseMail $inhouseMail
     * @return self
     */
    public function setInhouseMail(\horstoeko\ubl\entities\cbc\InhouseMail $inhouseMail)
    {
        $this->inhouseMail = $inhouseMail;
        return $this;
    }

    /**
     * Gets as department
     *
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @return \horstoeko\ubl\entities\cbc\Department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets a new department
     *
     * BBIE
     *  Address. Department. Text
     *  An addressable department of an organization.
     *  0..1
     *  Address
     *  Department
     *  Text
     *  Text. Type
     *  Department
     *  "Accounts Payable"
     *
     * @param \horstoeko\ubl\entities\cbc\Department $department
     * @return self
     */
    public function setDepartment(\horstoeko\ubl\entities\cbc\Department $department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Gets as markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MarkAttention
     */
    public function getMarkAttention()
    {
        return $this->markAttention;
    }

    /**
     * Sets a new markAttention
     *
     * BBIE
     *  Address. Mark Attention. Text
     *  The name, expressed as text, of a person or department in the organization to whom incoming mail is marked with words such as 'for the attention of' or 'FAO' or 'ATTN' for this address.
     *  0..1
     *  Address
     *  Mark Attention
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MarkAttention $markAttention
     * @return self
     */
    public function setMarkAttention(\horstoeko\ubl\entities\cbc\MarkAttention $markAttention)
    {
        $this->markAttention = $markAttention;
        return $this;
    }

    /**
     * Gets as markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MarkCare
     */
    public function getMarkCare()
    {
        return $this->markCare;
    }

    /**
     * Sets a new markCare
     *
     * BBIE
     *  Address. Mark Care. Text
     *  The name, expressed as text, of a person or organization at this address to whom incoming mail is marked with words such as 'care of' or 'C/O'.
     *  0..1
     *  Address
     *  Mark Care
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MarkCare $markCare
     * @return self
     */
    public function setMarkCare(\horstoeko\ubl\entities\cbc\MarkCare $markCare)
    {
        $this->markCare = $markCare;
        return $this;
    }

    /**
     * Gets as plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PlotIdentification
     */
    public function getPlotIdentification()
    {
        return $this->plotIdentification;
    }

    /**
     * Sets a new plotIdentification
     *
     * BBIE
     *  Address. Plot Identification. Text
     *  The textual expression of the unique identifier for the piece of land on which this address is located such as a plot number.
     *  0..1
     *  Address
     *  Plot Identification
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PlotIdentification $plotIdentification
     * @return self
     */
    public function setPlotIdentification(\horstoeko\ubl\entities\cbc\PlotIdentification $plotIdentification)
    {
        $this->plotIdentification = $plotIdentification;
        return $this;
    }

    /**
     * Gets as citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CitySubdivisionName
     */
    public function getCitySubdivisionName()
    {
        return $this->citySubdivisionName;
    }

    /**
     * Sets a new citySubdivisionName
     *
     * BBIE
     *  Address. City Subdivision Name. Name
     *  A name, expressed as text, of a subdivision of a city for this address, for example, a district or borough.
     *  0..1
     *  Address
     *  City Subdivision Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CitySubdivisionName $citySubdivisionName
     * @return self
     */
    public function setCitySubdivisionName(\horstoeko\ubl\entities\cbc\CitySubdivisionName $citySubdivisionName)
    {
        $this->citySubdivisionName = $citySubdivisionName;
        return $this;
    }

    /**
     * Gets as cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @return \horstoeko\ubl\entities\cbc\CityName
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * BBIE
     *  Address. City Name. Name
     *  The name of a city, town, or village.
     *  0..1
     *  Address
     *  City Name
     *  Name
     *  Name. Type
     *  LocalityName
     *  "Hong Kong"
     *
     * @param \horstoeko\ubl\entities\cbc\CityName $cityName
     * @return self
     */
    public function setCityName(\horstoeko\ubl\entities\cbc\CityName $cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * Gets as postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @return \horstoeko\ubl\entities\cbc\PostalZone
     */
    public function getPostalZone()
    {
        return $this->postalZone;
    }

    /**
     * Sets a new postalZone
     *
     * BBIE
     *  Address. Postal_ Zone. Text
     *  The identifier for an addressable group of properties according to the relevant national postal service, such as a ZIP code or Post Code.
     *  0..1
     *  Address
     *  Postal
     *  Zone
     *  Text
     *  Text. Type
     *  PostalCodeNumber
     *  "SW11 4EW" "2500 GG"
     *
     * @param \horstoeko\ubl\entities\cbc\PostalZone $postalZone
     * @return self
     */
    public function setPostalZone(\horstoeko\ubl\entities\cbc\PostalZone $postalZone)
    {
        $this->postalZone = $postalZone;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
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
     *  Address. Country Subentity. Text
     *  A territorial division of a country, such as a county or state.
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
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
     *  Address. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Address
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
     * Gets as region
     *
     * BBIE
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @return \horstoeko\ubl\entities\cbc\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * BBIE
     *  Address. Region. Text
     *  An addressable region or group of countries.
     *  0..1
     *  Address
     *  Region
     *  Text
     *  Text. Type
     *  LocalityName, Economic Zone
     *  "European Union"
     *
     * @param \horstoeko\ubl\entities\cbc\Region $region
     * @return self
     */
    public function setRegion(\horstoeko\ubl\entities\cbc\Region $region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as district
     *
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @return \horstoeko\ubl\entities\cbc\District
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * BBIE
     *  Address. District. Text
     *  A geographical division of a country.
     *  0..1
     *  Address
     *  District
     *  Text
     *  Text. Type
     *  LocalityName, Area
     *  "East Coast"
     *
     * @param \horstoeko\ubl\entities\cbc\District $district
     * @return self
     */
    public function setDistrict(\horstoeko\ubl\entities\cbc\District $district)
    {
        $this->district = $district;
        return $this;
    }

    /**
     * Gets as timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @return \horstoeko\ubl\entities\cbc\TimezoneOffset
     */
    public function getTimezoneOffset()
    {
        return $this->timezoneOffset;
    }

    /**
     * Sets a new timezoneOffset
     *
     * BBIE
     *  Address. Timezone Offset. Text
     *  For the time zone in which the address is situated, the measure of time offset from Universal Coordinated Time (UTC).
     *  0..1
     *  Address
     *  Timezone Offset
     *  Text
     *  Text. Type
     *  "+8:00" "-3:00"
     *
     * @param \horstoeko\ubl\entities\cbc\TimezoneOffset $timezoneOffset
     * @return self
     */
    public function setTimezoneOffset(\horstoeko\ubl\entities\cbc\TimezoneOffset $timezoneOffset)
    {
        $this->timezoneOffset = $timezoneOffset;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AddressLine $addressLine
     */
    public function addToAddressLine(\horstoeko\ubl\entities\cac\AddressLine $addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @return \horstoeko\ubl\entities\cac\AddressLine[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * ASBIE
     *  Address. Address Line
     *  An association to Address Line.
     *  0..n
     *  Address
     *  Address Line
     *  Address Line
     *
     * @param \horstoeko\ubl\entities\cac\AddressLine[] $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @return \horstoeko\ubl\entities\cac\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Address. Country
     *  An association to Country.
     *  0..1
     *  Address
     *  Country
     *  Country
     *
     * @param \horstoeko\ubl\entities\cac\Country $country
     * @return self
     */
    public function setCountry(\horstoeko\ubl\entities\cac\Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as locationCoordinate
     *
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return \horstoeko\ubl\entities\cac\LocationCoordinate
     */
    public function getLocationCoordinate()
    {
        return $this->locationCoordinate;
    }

    /**
     * Sets a new locationCoordinate
     *
     * ASBIE
     *  Address. Location Coordinate
     *  An association to Location Coordinate.
     *  0..1
     *  Address
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param \horstoeko\ubl\entities\cac\LocationCoordinate $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(\horstoeko\ubl\entities\cac\LocationCoordinate $locationCoordinate)
    {
        $this->locationCoordinate = $locationCoordinate;
        return $this;
    }


}

