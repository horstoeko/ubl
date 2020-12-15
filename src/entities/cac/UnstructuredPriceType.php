<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing UnstructuredPriceType
 *
 * ABIE
 *  Unstructured Price. Details
 *  A simplified version of the Price class intended for applications such as telephone billing.
 *  Unstructured Price
 * XSD Type: UnstructuredPriceType
 */
class UnstructuredPriceType
{

    /**
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @var \horstoeko\ubl\entities\cbc\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TimeAmount $timeAmount
     */
    private $timeAmount = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
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
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
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
     * Gets as timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TimeAmount
     */
    public function getTimeAmount()
    {
        return $this->timeAmount;
    }

    /**
     * Sets a new timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TimeAmount $timeAmount
     * @return self
     */
    public function setTimeAmount(\horstoeko\ubl\entities\cbc\TimeAmount $timeAmount)
    {
        $this->timeAmount = $timeAmount;
        return $this;
    }


}

