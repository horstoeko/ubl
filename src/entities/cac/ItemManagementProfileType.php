<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemManagementProfileType
 *
 * ABIE
 *  Item Management Profile. Details
 *  A class to define a management profile for an item.
 *  Item Management Profile
 * XSD Type: ItemManagementProfileType
 */
class ItemManagementProfileType
{

    /**
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \horstoeko\ubl\entities\cbc\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     */
    private $frozenPeriodDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MinimumInventoryQuantity $minimumInventoryQuantity
     */
    private $minimumInventoryQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MultipleOrderQuantity $multipleOrderQuantity
     */
    private $multipleOrderQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     */
    private $orderIntervalDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     */
    private $replenishmentOwnerDescription = [
        
    ];

    /**
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TargetServicePercent $targetServicePercent
     */
    private $targetServicePercent = null;

    /**
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TargetInventoryQuantity $targetInventoryQuantity
     */
    private $targetInventoryQuantity = null;

    /**
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \horstoeko\ubl\entities\cac\ItemLocationQuantity $itemLocationQuantity
     */
    private $itemLocationQuantity = null;

    /**
     * Gets as frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \horstoeko\ubl\entities\cbc\FrozenPeriodDaysNumeric
     */
    public function getFrozenPeriodDaysNumeric()
    {
        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * Sets a new frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     * @return self
     */
    public function setFrozenPeriodDaysNumeric(\horstoeko\ubl\entities\cbc\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric)
    {
        $this->frozenPeriodDaysNumeric = $frozenPeriodDaysNumeric;
        return $this;
    }

    /**
     * Gets as minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MinimumInventoryQuantity
     */
    public function getMinimumInventoryQuantity()
    {
        return $this->minimumInventoryQuantity;
    }

    /**
     * Sets a new minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\MinimumInventoryQuantity $minimumInventoryQuantity
     * @return self
     */
    public function setMinimumInventoryQuantity(\horstoeko\ubl\entities\cbc\MinimumInventoryQuantity $minimumInventoryQuantity)
    {
        $this->minimumInventoryQuantity = $minimumInventoryQuantity;
        return $this;
    }

    /**
     * Gets as multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MultipleOrderQuantity
     */
    public function getMultipleOrderQuantity()
    {
        return $this->multipleOrderQuantity;
    }

    /**
     * Sets a new multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\MultipleOrderQuantity $multipleOrderQuantity
     * @return self
     */
    public function setMultipleOrderQuantity(\horstoeko\ubl\entities\cbc\MultipleOrderQuantity $multipleOrderQuantity)
    {
        $this->multipleOrderQuantity = $multipleOrderQuantity;
        return $this;
    }

    /**
     * Gets as orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OrderIntervalDaysNumeric
     */
    public function getOrderIntervalDaysNumeric()
    {
        return $this->orderIntervalDaysNumeric;
    }

    /**
     * Sets a new orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     * @return self
     */
    public function setOrderIntervalDaysNumeric(\horstoeko\ubl\entities\cbc\OrderIntervalDaysNumeric $orderIntervalDaysNumeric)
    {
        $this->orderIntervalDaysNumeric = $orderIntervalDaysNumeric;
        return $this;
    }

    /**
     * Adds as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\ReplenishmentOwnerDescription $replenishmentOwnerDescription
     */
    public function addToReplenishmentOwnerDescription(\horstoeko\ubl\entities\cbc\ReplenishmentOwnerDescription $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription[] = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * isset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetReplenishmentOwnerDescription($index)
    {
        return isset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * unset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetReplenishmentOwnerDescription($index)
    {
        unset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * Gets as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ReplenishmentOwnerDescription[]
     */
    public function getReplenishmentOwnerDescription()
    {
        return $this->replenishmentOwnerDescription;
    }

    /**
     * Sets a new replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     * @return self
     */
    public function setReplenishmentOwnerDescription(array $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * Gets as targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TargetServicePercent
     */
    public function getTargetServicePercent()
    {
        return $this->targetServicePercent;
    }

    /**
     * Sets a new targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TargetServicePercent $targetServicePercent
     * @return self
     */
    public function setTargetServicePercent(\horstoeko\ubl\entities\cbc\TargetServicePercent $targetServicePercent)
    {
        $this->targetServicePercent = $targetServicePercent;
        return $this;
    }

    /**
     * Gets as targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TargetInventoryQuantity
     */
    public function getTargetInventoryQuantity()
    {
        return $this->targetInventoryQuantity;
    }

    /**
     * Sets a new targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TargetInventoryQuantity $targetInventoryQuantity
     * @return self
     */
    public function setTargetInventoryQuantity(\horstoeko\ubl\entities\cbc\TargetInventoryQuantity $targetInventoryQuantity)
    {
        $this->targetInventoryQuantity = $targetInventoryQuantity;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\horstoeko\ubl\entities\cac\EffectivePeriod $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @return \horstoeko\ubl\entities\cac\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @param  \horstoeko\ubl\entities\cac\Item $item
     * @return self
     */
    public function setItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \horstoeko\ubl\entities\cac\ItemLocationQuantity
     */
    public function getItemLocationQuantity()
    {
        return $this->itemLocationQuantity;
    }

    /**
     * Sets a new itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param  \horstoeko\ubl\entities\cac\ItemLocationQuantity $itemLocationQuantity
     * @return self
     */
    public function setItemLocationQuantity(\horstoeko\ubl\entities\cac\ItemLocationQuantity $itemLocationQuantity)
    {
        $this->itemLocationQuantity = $itemLocationQuantity;
        return $this;
    }


}

