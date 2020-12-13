<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemComparisonType
 *
 * ABIE
 *  Item Comparison. Details
 *  Used to compare different items based on cost, quantity, or measurements.
 *  Item Comparison
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{

    /**
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Item Comparison. Price. Amount
     *  The price for the comparison quantity of the item.
     *  0..1
     *  Item Comparison
     *  Price
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(\horstoeko\ubl\entities\cbc\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
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
     *  Item Comparison. Quantity
     *  The quantity used for price comparison with other items.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  "per unit"
     *
     * @param \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

