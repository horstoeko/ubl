<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PriceExtensionType
 *
 * ABIE
 *  Price Extension. Details
 *  A class to describe a price extension, calculated by multiplying the price per unit by the quantity of items.
 *  Price Extension
 * XSD Type: PriceExtensionType
 */
class PriceExtensionType
{

    /**
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * Gets as amount
     *
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Price Extension. Amount
     *  The amount of this price extension.
     *  1
     *  Price Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Amount $amount
     * @return self
     */
    public function setAmount(\horstoeko\ubl\entities\cbc\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\horstoeko\ubl\entities\cac\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \horstoeko\ubl\entities\cac\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Price Extension. Tax Total
     *  A total amount of taxes of a particular kind applicable to this price extension.
     *  0..n
     *  Price Extension
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }


}

