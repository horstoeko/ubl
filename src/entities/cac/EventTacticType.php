<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EventTacticType
 *
 * ABIE
 *  Event Tactic. Details
 *  A class defining a specific type of action or situation arranged by the Buyer or the Seller to promote the product or products.
 *  Event Tactic
 * XSD Type: EventTacticType
 */
class EventTacticType
{

    /**
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Comment $comment
     */
    private $comment = null;

    /**
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @var \horstoeko\ubl\entities\cac\EventTacticEnumeration $eventTacticEnumeration
     */
    private $eventTacticEnumeration = null;

    /**
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\Period $period
     */
    private $period = null;

    /**
     * Gets as comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Comment $comment
     * @return self
     */
    public function setComment(\horstoeko\ubl\entities\cbc\Comment $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @return \horstoeko\ubl\entities\cac\EventTacticEnumeration
     */
    public function getEventTacticEnumeration()
    {
        return $this->eventTacticEnumeration;
    }

    /**
     * Sets a new eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @param \horstoeko\ubl\entities\cac\EventTacticEnumeration $eventTacticEnumeration
     * @return self
     */
    public function setEventTacticEnumeration(\horstoeko\ubl\entities\cac\EventTacticEnumeration $eventTacticEnumeration)
    {
        $this->eventTacticEnumeration = $eventTacticEnumeration;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\Period $period
     * @return self
     */
    public function setPeriod(\horstoeko\ubl\entities\cac\Period $period)
    {
        $this->period = $period;
        return $this;
    }


}

