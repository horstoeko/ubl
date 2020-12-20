<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PromotionalEventType
 *
 * ABIE
 *  Promotional Event. Details
 *  Agree can be renamed as PromotionalEvents
 *  Promotional Event
 * XSD Type: PromotionalEventType
 */
class PromotionalEventType
{

    /**
     * BBIE
     *  Promotional Event. Promotional Event Type Code. Code
     *  A code signifying the type of this promotional event. Examples can be: Holiday, Seasonal Event, Store Closing, Trade Item Introduction
     *  1
     *  Promotional Event
     *  Promotional Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PromotionalEventTypeCode $promotionalEventTypeCode
     */
    private $promotionalEventTypeCode = null;

    /**
     * BBIE
     *  Promotional Event. Submission. Date
     *  The date on which a proposal for this promotional event was submitted.
     *  0..1
     *  Promotional Event
     *  Submission
     *  Date
     *  Date. Type
     *
     * @var \DateTime $submissionDate
     */
    private $submissionDate = null;

    /**
     * BBIE
     *  Promotional Event. First Shipment Availibility Date. Date
     *  The first day that products will be available to ship from buyer to seller if the proposal for this promotional event is accepted.
     *  0..1
     *  Promotional Event
     *  First Shipment Availibility Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $firstShipmentAvailibilityDate
     */
    private $firstShipmentAvailibilityDate = null;

    /**
     * BBIE
     *  Promotional Event. Latest_ Proposal Acceptance Date. Date
     *  The deadline for acceptance of this promotional event.
     *  0..1
     *  Promotional Event
     *  Latest
     *  Proposal Acceptance Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestProposalAcceptanceDate
     */
    private $latestProposalAcceptanceDate = null;

    /**
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @var \horstoeko\ubl\entities\cac\PromotionalSpecification[] $promotionalSpecification
     */
    private $promotionalSpecification = [
        
    ];

    /**
     * Gets as promotionalEventTypeCode
     *
     * BBIE
     *  Promotional Event. Promotional Event Type Code. Code
     *  A code signifying the type of this promotional event. Examples can be: Holiday, Seasonal Event, Store Closing, Trade Item Introduction
     *  1
     *  Promotional Event
     *  Promotional Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PromotionalEventTypeCode
     */
    public function getPromotionalEventTypeCode()
    {
        return $this->promotionalEventTypeCode;
    }

    /**
     * Sets a new promotionalEventTypeCode
     *
     * BBIE
     *  Promotional Event. Promotional Event Type Code. Code
     *  A code signifying the type of this promotional event. Examples can be: Holiday, Seasonal Event, Store Closing, Trade Item Introduction
     *  1
     *  Promotional Event
     *  Promotional Event Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PromotionalEventTypeCode $promotionalEventTypeCode
     * @return self
     */
    public function setPromotionalEventTypeCode(\horstoeko\ubl\entities\cbc\PromotionalEventTypeCode $promotionalEventTypeCode)
    {
        $this->promotionalEventTypeCode = $promotionalEventTypeCode;
        return $this;
    }

    /**
     * Gets as submissionDate
     *
     * BBIE
     *  Promotional Event. Submission. Date
     *  The date on which a proposal for this promotional event was submitted.
     *  0..1
     *  Promotional Event
     *  Submission
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getSubmissionDate()
    {
        return $this->submissionDate;
    }

    /**
     * Sets a new submissionDate
     *
     * BBIE
     *  Promotional Event. Submission. Date
     *  The date on which a proposal for this promotional event was submitted.
     *  0..1
     *  Promotional Event
     *  Submission
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $submissionDate
     * @return self
     */
    public function setSubmissionDate(\DateTime $submissionDate)
    {
        $this->submissionDate = $submissionDate;
        return $this;
    }

    /**
     * Gets as firstShipmentAvailibilityDate
     *
     * BBIE
     *  Promotional Event. First Shipment Availibility Date. Date
     *  The first day that products will be available to ship from buyer to seller if the proposal for this promotional event is accepted.
     *  0..1
     *  Promotional Event
     *  First Shipment Availibility Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getFirstShipmentAvailibilityDate()
    {
        return $this->firstShipmentAvailibilityDate;
    }

    /**
     * Sets a new firstShipmentAvailibilityDate
     *
     * BBIE
     *  Promotional Event. First Shipment Availibility Date. Date
     *  The first day that products will be available to ship from buyer to seller if the proposal for this promotional event is accepted.
     *  0..1
     *  Promotional Event
     *  First Shipment Availibility Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $firstShipmentAvailibilityDate
     * @return self
     */
    public function setFirstShipmentAvailibilityDate(\DateTime $firstShipmentAvailibilityDate)
    {
        $this->firstShipmentAvailibilityDate = $firstShipmentAvailibilityDate;
        return $this;
    }

    /**
     * Gets as latestProposalAcceptanceDate
     *
     * BBIE
     *  Promotional Event. Latest_ Proposal Acceptance Date. Date
     *  The deadline for acceptance of this promotional event.
     *  0..1
     *  Promotional Event
     *  Latest
     *  Proposal Acceptance Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestProposalAcceptanceDate()
    {
        return $this->latestProposalAcceptanceDate;
    }

    /**
     * Sets a new latestProposalAcceptanceDate
     *
     * BBIE
     *  Promotional Event. Latest_ Proposal Acceptance Date. Date
     *  The deadline for acceptance of this promotional event.
     *  0..1
     *  Promotional Event
     *  Latest
     *  Proposal Acceptance Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $latestProposalAcceptanceDate
     * @return self
     */
    public function setLatestProposalAcceptanceDate(\DateTime $latestProposalAcceptanceDate)
    {
        $this->latestProposalAcceptanceDate = $latestProposalAcceptanceDate;
        return $this;
    }

    /**
     * Adds as promotionalSpecification
     *
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\PromotionalSpecification $promotionalSpecification
     */
    public function addToPromotionalSpecification(\horstoeko\ubl\entities\cac\PromotionalSpecification $promotionalSpecification)
    {
        $this->promotionalSpecification[] = $promotionalSpecification;
        return $this;
    }

    /**
     * isset promotionalSpecification
     *
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetPromotionalSpecification($index)
    {
        return isset($this->promotionalSpecification[$index]);
    }

    /**
     * unset promotionalSpecification
     *
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetPromotionalSpecification($index)
    {
        unset($this->promotionalSpecification[$index]);
    }

    /**
     * Gets as promotionalSpecification
     *
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @return \horstoeko\ubl\entities\cac\PromotionalSpecification[]
     */
    public function getPromotionalSpecification()
    {
        return $this->promotionalSpecification;
    }

    /**
     * Sets a new promotionalSpecification
     *
     * ASBIE
     *  Promotional Event. Promotional Specification
     *  A specification for a promotional event.
     *  1..n
     *  Promotional Event
     *  Promotional Specification
     *  Promotional Specification
     *  Promotional Specification
     *
     * @param  \horstoeko\ubl\entities\cac\PromotionalSpecification[] $promotionalSpecification
     * @return self
     */
    public function setPromotionalSpecification(array $promotionalSpecification)
    {
        $this->promotionalSpecification = $promotionalSpecification;
        return $this;
    }


}

