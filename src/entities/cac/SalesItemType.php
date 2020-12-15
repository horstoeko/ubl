<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SalesItemType
 *
 * ABIE
 *  Sales Item. Details
 *  A class to describe information related to an item in a sales context
 *  Sales Item
 * XSD Type: SalesItemType
 */
class SalesItemType
{

    /**
     * BBIE
     *  Sales Item. Quantity
     *  The quantity the given information are related to
     *  1
     *  Sales Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @var \horstoeko\ubl\entities\cac\ActivityProperty[] $activityProperty
     */
    private $activityProperty = [
        
    ];

    /**
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\TaxExclusivePrice[] $taxExclusivePrice
     */
    private $taxExclusivePrice = [
        
    ];

    /**
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\TaxInclusivePrice[] $taxInclusivePrice
     */
    private $taxInclusivePrice = [
        
    ];

    /**
     * ASBIE
     *  Sales Item. Item
     *  The sales item itself.
     *  1
     *  Sales Item
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * Gets as quantity
     *
     * BBIE
     *  Sales Item. Quantity
     *  The quantity the given information are related to
     *  1
     *  Sales Item
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
     *  Sales Item. Quantity
     *  The quantity the given information are related to
     *  1
     *  Sales Item
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
     * Adds as activityProperty
     *
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ActivityProperty $activityProperty
     */
    public function addToActivityProperty(\horstoeko\ubl\entities\cac\ActivityProperty $activityProperty)
    {
        $this->activityProperty[] = $activityProperty;
        return $this;
    }

    /**
     * isset activityProperty
     *
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetActivityProperty($index)
    {
        return isset($this->activityProperty[$index]);
    }

    /**
     * unset activityProperty
     *
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetActivityProperty($index)
    {
        unset($this->activityProperty[$index]);
    }

    /**
     * Gets as activityProperty
     *
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @return \horstoeko\ubl\entities\cac\ActivityProperty[]
     */
    public function getActivityProperty()
    {
        return $this->activityProperty;
    }

    /**
     * Sets a new activityProperty
     *
     * ASBIE
     *  Sales Item. Activity Property
     *  A class to describe the activity (for example "sales", "movement", ...) related to the item.
     *  0..n
     *  Sales Item
     *  Activity Property
     *  Activity Property
     *  Activity Property
     *
     * @param \horstoeko\ubl\entities\cac\ActivityProperty[] $activityProperty
     * @return self
     */
    public function setActivityProperty(array $activityProperty)
    {
        $this->activityProperty = $activityProperty;
        return $this;
    }

    /**
     * Adds as taxExclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TaxExclusivePrice $taxExclusivePrice
     */
    public function addToTaxExclusivePrice(\horstoeko\ubl\entities\cac\TaxExclusivePrice $taxExclusivePrice)
    {
        $this->taxExclusivePrice[] = $taxExclusivePrice;
        return $this;
    }

    /**
     * isset taxExclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxExclusivePrice($index)
    {
        return isset($this->taxExclusivePrice[$index]);
    }

    /**
     * unset taxExclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxExclusivePrice($index)
    {
        unset($this->taxExclusivePrice[$index]);
    }

    /**
     * Gets as taxExclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @return \horstoeko\ubl\entities\cac\TaxExclusivePrice[]
     */
    public function getTaxExclusivePrice()
    {
        return $this->taxExclusivePrice;
    }

    /**
     * Sets a new taxExclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Exclusive_ Price. Price
     *  A price for this sales item, exclusive of tax.
     *  0..n
     *  Sales Item
     *  Tax Exclusive
     *  Price
     *  Price
     *  Price
     *
     * @param \horstoeko\ubl\entities\cac\TaxExclusivePrice[] $taxExclusivePrice
     * @return self
     */
    public function setTaxExclusivePrice(array $taxExclusivePrice)
    {
        $this->taxExclusivePrice = $taxExclusivePrice;
        return $this;
    }

    /**
     * Adds as taxInclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TaxInclusivePrice $taxInclusivePrice
     */
    public function addToTaxInclusivePrice(\horstoeko\ubl\entities\cac\TaxInclusivePrice $taxInclusivePrice)
    {
        $this->taxInclusivePrice[] = $taxInclusivePrice;
        return $this;
    }

    /**
     * isset taxInclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxInclusivePrice($index)
    {
        return isset($this->taxInclusivePrice[$index]);
    }

    /**
     * unset taxInclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxInclusivePrice($index)
    {
        unset($this->taxInclusivePrice[$index]);
    }

    /**
     * Gets as taxInclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @return \horstoeko\ubl\entities\cac\TaxInclusivePrice[]
     */
    public function getTaxInclusivePrice()
    {
        return $this->taxInclusivePrice;
    }

    /**
     * Sets a new taxInclusivePrice
     *
     * ASBIE
     *  Sales Item. Tax Inclusive_ Price. Price
     *  A price for this sales item, including tax.
     *  0..n
     *  Sales Item
     *  Tax Inclusive
     *  Price
     *  Price
     *  Price
     *
     * @param \horstoeko\ubl\entities\cac\TaxInclusivePrice[] $taxInclusivePrice
     * @return self
     */
    public function setTaxInclusivePrice(array $taxInclusivePrice)
    {
        $this->taxInclusivePrice = $taxInclusivePrice;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Sales Item. Item
     *  The sales item itself.
     *  1
     *  Sales Item
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
     *  Sales Item. Item
     *  The sales item itself.
     *  1
     *  Sales Item
     *  Item
     *  Item
     *  Item
     *
     * @param \horstoeko\ubl\entities\cac\Item $item
     * @return self
     */
    public function setItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item = $item;
        return $this;
    }


}

