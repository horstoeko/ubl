<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EventTacticEnumerationType
 *
 * ABIE
 *  Event Tactic Enumeration. Details
 *  A class to define a set of codes that describes a retail tactic.
 *  Event Tactic Enumeration
 * XSD Type: EventTacticEnumerationType
 */
class EventTacticEnumerationType
{

    /**
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     */
    private $consumerIncentiveTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DisplayTacticTypeCode $displayTacticTypeCode
     */
    private $displayTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\FeatureTacticTypeCode $featureTacticTypeCode
     */
    private $featureTacticTypeCode = null;

    /**
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     */
    private $tradeItemPackingLabelingTypeCode = null;

    /**
     * Gets as consumerIncentiveTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ConsumerIncentiveTacticTypeCode
     */
    public function getConsumerIncentiveTacticTypeCode()
    {
        return $this->consumerIncentiveTacticTypeCode;
    }

    /**
     * Sets a new consumerIncentiveTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Consumer Incentive Tactic Type Code. Code
     *  A code signifying the type of consumer incentive. Examples include:Free Item, Temporary Price reduction
     *  0..1
     *  Event Tactic Enumeration
     *  Consumer Incentive Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode
     * @return self
     */
    public function setConsumerIncentiveTacticTypeCode(\horstoeko\ubl\entities\cbc\ConsumerIncentiveTacticTypeCode $consumerIncentiveTacticTypeCode)
    {
        $this->consumerIncentiveTacticTypeCode = $consumerIncentiveTacticTypeCode;
        return $this;
    }

    /**
     * Gets as displayTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DisplayTacticTypeCode
     */
    public function getDisplayTacticTypeCode()
    {
        return $this->displayTacticTypeCode;
    }

    /**
     * Sets a new displayTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Display Tactic Type Code. Code
     *  A code signifying the type of display. Examples Include: ON_COUNTER_DISPLAY, FLOOR_GRAPHICS FLOOR_STACK_DISPLAY
     *  0..1
     *  Event Tactic Enumeration
     *  Display Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DisplayTacticTypeCode $displayTacticTypeCode
     * @return self
     */
    public function setDisplayTacticTypeCode(\horstoeko\ubl\entities\cbc\DisplayTacticTypeCode $displayTacticTypeCode)
    {
        $this->displayTacticTypeCode = $displayTacticTypeCode;
        return $this;
    }

    /**
     * Gets as featureTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\FeatureTacticTypeCode
     */
    public function getFeatureTacticTypeCode()
    {
        return $this->featureTacticTypeCode;
    }

    /**
     * Sets a new featureTacticTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Feature Tactic Type Code. Code
     *  A code signifying a special feature. Examples Include: BILLBOARD DIRECT_MAIL_AD, FLYER
     *  0..1
     *  Event Tactic Enumeration
     *  Feature Tactic Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\FeatureTacticTypeCode $featureTacticTypeCode
     * @return self
     */
    public function setFeatureTacticTypeCode(\horstoeko\ubl\entities\cbc\FeatureTacticTypeCode $featureTacticTypeCode)
    {
        $this->featureTacticTypeCode = $featureTacticTypeCode;
        return $this;
    }

    /**
     * Gets as tradeItemPackingLabelingTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TradeItemPackingLabelingTypeCode
     */
    public function getTradeItemPackingLabelingTypeCode()
    {
        return $this->tradeItemPackingLabelingTypeCode;
    }

    /**
     * Sets a new tradeItemPackingLabelingTypeCode
     *
     * BBIE
     *  Event Tactic Enumeration. Trade Item Packing Labeling Type Code. Code
     *  A code signifying the type of trade item packing and labeling. Examples Include: BONUS_SIZE CO_BRANDED_TRADE_ITEM
     *  0..1
     *  Event Tactic Enumeration
     *  Trade Item Packing Labeling Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode
     * @return self
     */
    public function setTradeItemPackingLabelingTypeCode(\horstoeko\ubl\entities\cbc\TradeItemPackingLabelingTypeCode $tradeItemPackingLabelingTypeCode)
    {
        $this->tradeItemPackingLabelingTypeCode = $tradeItemPackingLabelingTypeCode;
        return $this;
    }


}

