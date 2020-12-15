<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EventType
 *
 * ABIE
 *  Event. Details
 *  A class to describe a significant occurrence relating to an object, process, or person.
 *  Event
 * XSD Type: EventType
 */
class EventType
{

    /**
     * BBIE
     *  Event. Identification. Identifier
     *  An identifier for this event within an agreed event identification scheme.
     *  0..1
     *  Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\IdentificationID $identificationID
     */
    private $identificationID = null;

    /**
     * BBIE
     *  Event. Occurrence Date. Date
     *  The date of this event.
     *  0..1
     *  Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $occurrenceDate
     */
    private $occurrenceDate = null;

    /**
     * BBIE
     *  Event. Occurrence Time. Time
     *  The time of this event.
     *  0..1
     *  Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $occurrenceTime
     */
    private $occurrenceTime = null;

    /**
     * BBIE
     *  Event. Type Code. Code
     *  A code signifying the type of this event.
     *  0..1
     *  Event
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TypeCode $typeCode
     */
    private $typeCode = null;

    /**
     * BBIE
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     *  Event. Completion_ Indicator. Indicator
     *  An indicator that this event has been completed (true) or not (false).
     *  0..1
     *  Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $completionIndicator
     */
    private $completionIndicator = null;

    /**
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @var \horstoeko\ubl\entities\cac\CurrentStatus[] $currentStatus
     */
    private $currentStatus = [
        
    ];

    /**
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\Contact[] $contact
     */
    private $contact = [
        
    ];

    /**
     * ASBIE
     *  Event. Occurence_ Location. Location
     *  The location of this event.
     *  0..1
     *  Event
     *  Occurence
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\OccurenceLocation $occurenceLocation
     */
    private $occurenceLocation = null;

    /**
     * Gets as identificationID
     *
     * BBIE
     *  Event. Identification. Identifier
     *  An identifier for this event within an agreed event identification scheme.
     *  0..1
     *  Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\IdentificationID
     */
    public function getIdentificationID()
    {
        return $this->identificationID;
    }

    /**
     * Sets a new identificationID
     *
     * BBIE
     *  Event. Identification. Identifier
     *  An identifier for this event within an agreed event identification scheme.
     *  0..1
     *  Event
     *  Identification
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\IdentificationID $identificationID
     * @return self
     */
    public function setIdentificationID(\horstoeko\ubl\entities\cbc\IdentificationID $identificationID)
    {
        $this->identificationID = $identificationID;
        return $this;
    }

    /**
     * Gets as occurrenceDate
     *
     * BBIE
     *  Event. Occurrence Date. Date
     *  The date of this event.
     *  0..1
     *  Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceDate()
    {
        return $this->occurrenceDate;
    }

    /**
     * Sets a new occurrenceDate
     *
     * BBIE
     *  Event. Occurrence Date. Date
     *  The date of this event.
     *  0..1
     *  Event
     *  Occurrence Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $occurrenceDate
     * @return self
     */
    public function setOccurrenceDate(\DateTime $occurrenceDate)
    {
        $this->occurrenceDate = $occurrenceDate;
        return $this;
    }

    /**
     * Gets as occurrenceTime
     *
     * BBIE
     *  Event. Occurrence Time. Time
     *  The time of this event.
     *  0..1
     *  Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getOccurrenceTime()
    {
        return $this->occurrenceTime;
    }

    /**
     * Sets a new occurrenceTime
     *
     * BBIE
     *  Event. Occurrence Time. Time
     *  The time of this event.
     *  0..1
     *  Event
     *  Occurrence Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $occurrenceTime
     * @return self
     */
    public function setOccurrenceTime(\DateTime $occurrenceTime)
    {
        $this->occurrenceTime = $occurrenceTime;
        return $this;
    }

    /**
     * Gets as typeCode
     *
     * BBIE
     *  Event. Type Code. Code
     *  A code signifying the type of this event.
     *  0..1
     *  Event
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TypeCode
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * Sets a new typeCode
     *
     * BBIE
     *  Event. Type Code. Code
     *  A code signifying the type of this event.
     *  0..1
     *  Event
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TypeCode $typeCode
     * @return self
     */
    public function setTypeCode(\horstoeko\ubl\entities\cbc\TypeCode $typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     *  Event. Description. Text
     *  Text describing this event.
     *  0..n
     *  Event
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
     * Gets as completionIndicator
     *
     * BBIE
     *  Event. Completion_ Indicator. Indicator
     *  An indicator that this event has been completed (true) or not (false).
     *  0..1
     *  Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCompletionIndicator()
    {
        return $this->completionIndicator;
    }

    /**
     * Sets a new completionIndicator
     *
     * BBIE
     *  Event. Completion_ Indicator. Indicator
     *  An indicator that this event has been completed (true) or not (false).
     *  0..1
     *  Event
     *  Completion
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $completionIndicator
     * @return self
     */
    public function setCompletionIndicator($completionIndicator)
    {
        $this->completionIndicator = $completionIndicator;
        return $this;
    }

    /**
     * Adds as currentStatus
     *
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CurrentStatus $currentStatus
     */
    public function addToCurrentStatus(\horstoeko\ubl\entities\cac\CurrentStatus $currentStatus)
    {
        $this->currentStatus[] = $currentStatus;
        return $this;
    }

    /**
     * isset currentStatus
     *
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrentStatus($index)
    {
        return isset($this->currentStatus[$index]);
    }

    /**
     * unset currentStatus
     *
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrentStatus($index)
    {
        unset($this->currentStatus[$index]);
    }

    /**
     * Gets as currentStatus
     *
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @return \horstoeko\ubl\entities\cac\CurrentStatus[]
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Sets a new currentStatus
     *
     * ASBIE
     *  Event. Current_ Status. Status
     *  The current status of this event.
     *  0..n
     *  Event
     *  Current
     *  Status
     *  Status
     *  Status
     *
     * @param \horstoeko\ubl\entities\cac\CurrentStatus[] $currentStatus
     * @return self
     */
    public function setCurrentStatus(array $currentStatus)
    {
        $this->currentStatus = $currentStatus;
        return $this;
    }

    /**
     * Adds as contact
     *
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Contact $contact
     */
    public function addToContact(\horstoeko\ubl\entities\cac\Contact $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\Contact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Event. Contact
     *  Contacts associated with this event.
     *  0..n
     *  Event
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\Contact[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as occurenceLocation
     *
     * ASBIE
     *  Event. Occurence_ Location. Location
     *  The location of this event.
     *  0..1
     *  Event
     *  Occurence
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\OccurenceLocation
     */
    public function getOccurenceLocation()
    {
        return $this->occurenceLocation;
    }

    /**
     * Sets a new occurenceLocation
     *
     * ASBIE
     *  Event. Occurence_ Location. Location
     *  The location of this event.
     *  0..1
     *  Event
     *  Occurence
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\OccurenceLocation $occurenceLocation
     * @return self
     */
    public function setOccurenceLocation(\horstoeko\ubl\entities\cac\OccurenceLocation $occurenceLocation)
    {
        $this->occurenceLocation = $occurenceLocation;
        return $this;
    }


}

