<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TransportMeansType
 *
 * ABIE
 *  Transport Means. Details
 *  The particular vehicle used for the transport of goods or persons.
 *  Transport Means
 *  Conveyance
 * XSD Type: TransportMeansType
 */
class TransportMeansType
{

    /**
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier assigned to a regularly scheduled service of a means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @var \horstoeko\ubl\entities\cbc\JourneyID $journeyID
     */
    private $journeyID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  Formal identification of the country in which a means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  "LIB"
     *
     * @var \horstoeko\ubl\entities\cbc\RegistrationNationalityID $registrationNationalityID
     */
    private $registrationNationalityID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @var \horstoeko\ubl\entities\cbc\RegistrationNationality[] $registrationNationality
     */
    private $registrationNationality = [
        
    ];

    /**
     * BBIE
     *  Transport Means. Direction Code. Code
     *  The direction of the transport means.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  "North","East"
     *
     * @var \horstoeko\ubl\entities\cbc\DirectionCode $directionCode
     */
    private $directionCode = null;

    /**
     * ASBIE
     *  Transport Means. Stowage
     *  Association to a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *
     * @var \horstoeko\ubl\entities\cac\Stowage $stowage
     */
    private $stowage = null;

    /**
     * ASBIE
     *  Transport Means. Air Transport
     *  Association to identify an aircraft.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *
     * @var \horstoeko\ubl\entities\cac\AirTransport $airTransport
     */
    private $airTransport = null;

    /**
     * ASBIE
     *  Transport Means. Road Transport
     *  Association to identify a road vehicle.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *
     * @var \horstoeko\ubl\entities\cac\RoadTransport $roadTransport
     */
    private $roadTransport = null;

    /**
     * ASBIE
     *  Transport Means. Rail Transport
     *  Association to identify a train.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *
     * @var \horstoeko\ubl\entities\cac\RailTransport $railTransport
     */
    private $railTransport = null;

    /**
     * ASBIE
     *  Transport Means. Maritime Transport
     *  Association to identify a ship.
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *
     * @var \horstoeko\ubl\entities\cac\MaritimeTransport $maritimeTransport
     */
    private $maritimeTransport = null;

    /**
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  Association to the party owning the means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\OwnerParty $ownerParty
     */
    private $ownerParty = null;

    /**
     * Gets as journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier assigned to a regularly scheduled service of a means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @return \horstoeko\ubl\entities\cbc\JourneyID
     */
    public function getJourneyID()
    {
        return $this->journeyID;
    }

    /**
     * Sets a new journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier assigned to a regularly scheduled service of a means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @param \horstoeko\ubl\entities\cbc\JourneyID $journeyID
     * @return self
     */
    public function setJourneyID(\horstoeko\ubl\entities\cbc\JourneyID $journeyID)
    {
        $this->journeyID = $journeyID;
        return $this;
    }

    /**
     * Gets as registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  Formal identification of the country in which a means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  "LIB"
     *
     * @return \horstoeko\ubl\entities\cbc\RegistrationNationalityID
     */
    public function getRegistrationNationalityID()
    {
        return $this->registrationNationalityID;
    }

    /**
     * Sets a new registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  Formal identification of the country in which a means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  "LIB"
     *
     * @param \horstoeko\ubl\entities\cbc\RegistrationNationalityID $registrationNationalityID
     * @return self
     */
    public function setRegistrationNationalityID(\horstoeko\ubl\entities\cbc\RegistrationNationalityID $registrationNationalityID)
    {
        $this->registrationNationalityID = $registrationNationalityID;
        return $this;
    }

    /**
     * Adds as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\RegistrationNationality $registrationNationality
     */
    public function addToRegistrationNationality(\horstoeko\ubl\entities\cbc\RegistrationNationality $registrationNationality)
    {
        $this->registrationNationality[] = $registrationNationality;
        return $this;
    }

    /**
     * isset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationNationality($index)
    {
        return isset($this->registrationNationality[$index]);
    }

    /**
     * unset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationNationality($index)
    {
        unset($this->registrationNationality[$index]);
    }

    /**
     * Gets as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return \horstoeko\ubl\entities\cbc\RegistrationNationality[]
     */
    public function getRegistrationNationality()
    {
        return $this->registrationNationality;
    }

    /**
     * Sets a new registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Name of the country in which a means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param \horstoeko\ubl\entities\cbc\RegistrationNationality[] $registrationNationality
     * @return self
     */
    public function setRegistrationNationality(array $registrationNationality)
    {
        $this->registrationNationality = $registrationNationality;
        return $this;
    }

    /**
     * Gets as directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  The direction of the transport means.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  "North","East"
     *
     * @return \horstoeko\ubl\entities\cbc\DirectionCode
     */
    public function getDirectionCode()
    {
        return $this->directionCode;
    }

    /**
     * Sets a new directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  The direction of the transport means.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  "North","East"
     *
     * @param \horstoeko\ubl\entities\cbc\DirectionCode $directionCode
     * @return self
     */
    public function setDirectionCode(\horstoeko\ubl\entities\cbc\DirectionCode $directionCode)
    {
        $this->directionCode = $directionCode;
        return $this;
    }

    /**
     * Gets as stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  Association to a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *
     * @return \horstoeko\ubl\entities\cac\Stowage
     */
    public function getStowage()
    {
        return $this->stowage;
    }

    /**
     * Sets a new stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  Association to a location on board a means of transport where specified goods or transport equipment have been or are to be stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *
     * @param \horstoeko\ubl\entities\cac\Stowage $stowage
     * @return self
     */
    public function setStowage(\horstoeko\ubl\entities\cac\Stowage $stowage)
    {
        $this->stowage = $stowage;
        return $this;
    }

    /**
     * Gets as airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  Association to identify an aircraft.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *
     * @return \horstoeko\ubl\entities\cac\AirTransport
     */
    public function getAirTransport()
    {
        return $this->airTransport;
    }

    /**
     * Sets a new airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  Association to identify an aircraft.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *
     * @param \horstoeko\ubl\entities\cac\AirTransport $airTransport
     * @return self
     */
    public function setAirTransport(\horstoeko\ubl\entities\cac\AirTransport $airTransport)
    {
        $this->airTransport = $airTransport;
        return $this;
    }

    /**
     * Gets as roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  Association to identify a road vehicle.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *
     * @return \horstoeko\ubl\entities\cac\RoadTransport
     */
    public function getRoadTransport()
    {
        return $this->roadTransport;
    }

    /**
     * Sets a new roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  Association to identify a road vehicle.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *
     * @param \horstoeko\ubl\entities\cac\RoadTransport $roadTransport
     * @return self
     */
    public function setRoadTransport(\horstoeko\ubl\entities\cac\RoadTransport $roadTransport)
    {
        $this->roadTransport = $roadTransport;
        return $this;
    }

    /**
     * Gets as railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Association to identify a train.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *
     * @return \horstoeko\ubl\entities\cac\RailTransport
     */
    public function getRailTransport()
    {
        return $this->railTransport;
    }

    /**
     * Sets a new railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Association to identify a train.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *
     * @param \horstoeko\ubl\entities\cac\RailTransport $railTransport
     * @return self
     */
    public function setRailTransport(\horstoeko\ubl\entities\cac\RailTransport $railTransport)
    {
        $this->railTransport = $railTransport;
        return $this;
    }

    /**
     * Gets as maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  Association to identify a ship.
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *
     * @return \horstoeko\ubl\entities\cac\MaritimeTransport
     */
    public function getMaritimeTransport()
    {
        return $this->maritimeTransport;
    }

    /**
     * Sets a new maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  Association to identify a ship.
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *
     * @param \horstoeko\ubl\entities\cac\MaritimeTransport $maritimeTransport
     * @return self
     */
    public function setMaritimeTransport(\horstoeko\ubl\entities\cac\MaritimeTransport $maritimeTransport)
    {
        $this->maritimeTransport = $maritimeTransport;
        return $this;
    }

    /**
     * Gets as ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  Association to the party owning the means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\OwnerParty
     */
    public function getOwnerParty()
    {
        return $this->ownerParty;
    }

    /**
     * Sets a new ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  Association to the party owning the means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\OwnerParty $ownerParty
     * @return self
     */
    public function setOwnerParty(\horstoeko\ubl\entities\cac\OwnerParty $ownerParty)
    {
        $this->ownerParty = $ownerParty;
        return $this;
    }


}

