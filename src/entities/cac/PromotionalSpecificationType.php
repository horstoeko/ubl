<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PromotionalSpecificationType
 *
 * ABIE
 *  Promotional Specification. Details
 *  A class to describe a promotional event as a set of item locations that share a set of promotional tactics.
 *  Promotional Specification
 * XSD Type: PromotionalSpecificationType
 */
class PromotionalSpecificationType
{

    /**
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SpecificationID $specificationID
     */
    private $specificationID = null;

    /**
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @var \horstoeko\ubl\entities\cac\PromotionalEventLineItem[] $promotionalEventLineItem
     */
    private $promotionalEventLineItem = [
        
    ];

    /**
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @var \horstoeko\ubl\entities\cac\EventTactic[] $eventTactic
     */
    private $eventTactic = [
        
    ];

    /**
     * Gets as specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SpecificationID
     */
    public function getSpecificationID()
    {
        return $this->specificationID;
    }

    /**
     * Sets a new specificationID
     *
     * BBIE
     *  Promotional Specification. Specification Identifier. Identifier
     *  An identifier for this promotional specification.
     *  0..1
     *  Promotional Specification
     *  Specification Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SpecificationID $specificationID
     * @return self
     */
    public function setSpecificationID(\horstoeko\ubl\entities\cbc\SpecificationID $specificationID)
    {
        $this->specificationID = $specificationID;
        return $this;
    }

    /**
     * Adds as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PromotionalEventLineItem $promotionalEventLineItem
     */
    public function addToPromotionalEventLineItem(\horstoeko\ubl\entities\cac\PromotionalEventLineItem $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem[] = $promotionalEventLineItem;
        return $this;
    }

    /**
     * isset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionalEventLineItem($index)
    {
        return isset($this->promotionalEventLineItem[$index]);
    }

    /**
     * unset promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionalEventLineItem($index)
    {
        unset($this->promotionalEventLineItem[$index]);
    }

    /**
     * Gets as promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @return \horstoeko\ubl\entities\cac\PromotionalEventLineItem[]
     */
    public function getPromotionalEventLineItem()
    {
        return $this->promotionalEventLineItem;
    }

    /**
     * Sets a new promotionalEventLineItem
     *
     * ASBIE
     *  Promotional Specification. Promotional Event Line Item
     *  A line item for a promotional event involving a specific product at a specific location; it describes the expected impacts associated with the event and specifies the promotional price of the item."
     *  1..n
     *  Promotional Specification
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *  Promotional Event Line Item
     *
     * @param \horstoeko\ubl\entities\cac\PromotionalEventLineItem[] $promotionalEventLineItem
     * @return self
     */
    public function setPromotionalEventLineItem(array $promotionalEventLineItem)
    {
        $this->promotionalEventLineItem = $promotionalEventLineItem;
        return $this;
    }

    /**
     * Adds as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\EventTactic $eventTactic
     */
    public function addToEventTactic(\horstoeko\ubl\entities\cac\EventTactic $eventTactic)
    {
        $this->eventTactic[] = $eventTactic;
        return $this;
    }

    /**
     * isset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventTactic($index)
    {
        return isset($this->eventTactic[$index]);
    }

    /**
     * unset eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventTactic($index)
    {
        unset($this->eventTactic[$index]);
    }

    /**
     * Gets as eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @return \horstoeko\ubl\entities\cac\EventTactic[]
     */
    public function getEventTactic()
    {
        return $this->eventTactic;
    }

    /**
     * Sets a new eventTactic
     *
     * ASBIE
     *  Promotional Specification. Event Tactic
     *  An event tactic associated with this promotion.
     *  0..n
     *  Promotional Specification
     *  Event Tactic
     *  Event Tactic
     *  Event Tactic
     *
     * @param \horstoeko\ubl\entities\cac\EventTactic[] $eventTactic
     * @return self
     */
    public function setEventTactic(array $eventTactic)
    {
        $this->eventTactic = $eventTactic;
        return $this;
    }


}

