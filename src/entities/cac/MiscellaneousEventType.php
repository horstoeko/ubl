<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing MiscellaneousEventType
 *
 * ABIE
 *  Miscellaneous Event. Details
 *  A class to describe a miscellaneous event associated with a retail event.
 *  Miscellaneous Event
 * XSD Type: MiscellaneousEventType
 */
class MiscellaneousEventType
{

    /**
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     */
    private $miscellaneousEventTypeCode = null;

    /**
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @var \horstoeko\ubl\entities\cac\EventLineItem[] $eventLineItem
     */
    private $eventLineItem = [
        
    ];

    /**
     * Gets as miscellaneousEventTypeCode
     *
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MiscellaneousEventTypeCode
     */
    public function getMiscellaneousEventTypeCode()
    {
        return $this->miscellaneousEventTypeCode;
    }

    /**
     * Sets a new miscellaneousEventTypeCode
     *
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     * @return self
     */
    public function setMiscellaneousEventTypeCode(\horstoeko\ubl\entities\cbc\MiscellaneousEventTypeCode $miscellaneousEventTypeCode)
    {
        $this->miscellaneousEventTypeCode = $miscellaneousEventTypeCode;
        return $this;
    }

    /**
     * Adds as eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\EventLineItem $eventLineItem
     */
    public function addToEventLineItem(\horstoeko\ubl\entities\cac\EventLineItem $eventLineItem)
    {
        $this->eventLineItem[] = $eventLineItem;
        return $this;
    }

    /**
     * isset eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventLineItem($index)
    {
        return isset($this->eventLineItem[$index]);
    }

    /**
     * unset eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventLineItem($index)
    {
        unset($this->eventLineItem[$index]);
    }

    /**
     * Gets as eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return \horstoeko\ubl\entities\cac\EventLineItem[]
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param \horstoeko\ubl\entities\cac\EventLineItem[] $eventLineItem
     * @return self
     */
    public function setEventLineItem(array $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }


}

