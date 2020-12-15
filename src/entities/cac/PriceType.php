<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PriceType
 *
 * ABIE
 *  Price. Details
 *  A class to describe a price, expressed in a data structure containing multiple properties (compare with UnstructuredPrice).
 *  Price
 * XSD Type: PriceType
 */
class PriceType
{

    /**
     * BBIE
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
     *  23.45
     *
     * @var \horstoeko\ubl\entities\cbc\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BaseQuantity $baseQuantity
     */
    private $baseQuantity = null;

    /**
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @var \horstoeko\ubl\entities\cbc\PriceChangeReason[] $priceChangeReason
     */
    private $priceChangeReason = [
        
    ];

    /**
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PriceTypeCode $priceTypeCode
     */
    private $priceTypeCode = null;

    /**
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @var \horstoeko\ubl\entities\cbc\PriceType $priceType
     */
    private $priceType = null;

    /**
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @var \horstoeko\ubl\entities\cbc\OrderableUnitFactorRate $orderableUnitFactorRate
     */
    private $orderableUnitFactorRate = null;

    /**
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @var \horstoeko\ubl\entities\cac\PriceList $priceList
     */
    private $priceList = null;

    /**
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
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
     *  Price. Price Amount. Amount
     *  The amount of the price.
     *  1
     *  Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  unit price
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
     * Gets as baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BaseQuantity
     */
    public function getBaseQuantity()
    {
        return $this->baseQuantity;
    }

    /**
     * Sets a new baseQuantity
     *
     * BBIE
     *  Price. Base_ Quantity. Quantity
     *  The quantity at which this price applies.
     *  0..1
     *  Price
     *  Base
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BaseQuantity $baseQuantity
     * @return self
     */
    public function setBaseQuantity(\horstoeko\ubl\entities\cbc\BaseQuantity $baseQuantity)
    {
        $this->baseQuantity = $baseQuantity;
        return $this;
    }

    /**
     * Adds as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PriceChangeReason $priceChangeReason
     */
    public function addToPriceChangeReason(\horstoeko\ubl\entities\cbc\PriceChangeReason $priceChangeReason)
    {
        $this->priceChangeReason[] = $priceChangeReason;
        return $this;
    }

    /**
     * isset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceChangeReason($index)
    {
        return isset($this->priceChangeReason[$index]);
    }

    /**
     * unset priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceChangeReason($index)
    {
        unset($this->priceChangeReason[$index]);
    }

    /**
     * Gets as priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @return \horstoeko\ubl\entities\cbc\PriceChangeReason[]
     */
    public function getPriceChangeReason()
    {
        return $this->priceChangeReason;
    }

    /**
     * Sets a new priceChangeReason
     *
     * BBIE
     *  Price. Price Change_ Reason. Text
     *  A reason for a price change.
     *  0..n
     *  Price
     *  Price Change
     *  Reason
     *  Text
     *  Text. Type
     *  Clearance of old stock , New contract applies
     *
     * @param \horstoeko\ubl\entities\cbc\PriceChangeReason[] $priceChangeReason
     * @return self
     */
    public function setPriceChangeReason(array $priceChangeReason)
    {
        $this->priceChangeReason = $priceChangeReason;
        return $this;
    }

    /**
     * Gets as priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PriceTypeCode
     */
    public function getPriceTypeCode()
    {
        return $this->priceTypeCode;
    }

    /**
     * Sets a new priceTypeCode
     *
     * BBIE
     *  Price. Price Type Code. Code
     *  The type of price, expressed as a code.
     *  0..1
     *  Price
     *  Price Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PriceTypeCode $priceTypeCode
     * @return self
     */
    public function setPriceTypeCode(\horstoeko\ubl\entities\cbc\PriceTypeCode $priceTypeCode)
    {
        $this->priceTypeCode = $priceTypeCode;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @return \horstoeko\ubl\entities\cbc\PriceType
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * BBIE
     *  Price. Price Type. Text
     *  The type of price, expressed as text.
     *  0..1
     *  Price
     *  Price Type
     *  Text
     *  Text. Type
     *  retail, wholesale, discount, contract
     *
     * @param \horstoeko\ubl\entities\cbc\PriceType $priceType
     * @return self
     */
    public function setPriceType(\horstoeko\ubl\entities\cbc\PriceType $priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @return \horstoeko\ubl\entities\cbc\OrderableUnitFactorRate
     */
    public function getOrderableUnitFactorRate()
    {
        return $this->orderableUnitFactorRate;
    }

    /**
     * Sets a new orderableUnitFactorRate
     *
     * BBIE
     *  Price. Orderable Unit Factor. Rate
     *  The factor by which the base price unit can be converted to the orderable unit.
     *  0..1
     *  Price
     *  Orderable Unit Factor
     *  Rate
     *  Rate. Type
     *  Nails are priced by weight but ordered by quantity. So this would say how many nails per kilo
     *
     * @param \horstoeko\ubl\entities\cbc\OrderableUnitFactorRate $orderableUnitFactorRate
     * @return self
     */
    public function setOrderableUnitFactorRate(\horstoeko\ubl\entities\cbc\OrderableUnitFactorRate $orderableUnitFactorRate)
    {
        $this->orderableUnitFactorRate = $orderableUnitFactorRate;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price. Validity_ Period. Period
     *  A period during which this price is valid.
     *  0..n
     *  Price
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as priceList
     *
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @return \horstoeko\ubl\entities\cac\PriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     * Sets a new priceList
     *
     * ASBIE
     *  Price. Price List
     *  Information about a price list applicable to this price.
     *  0..1
     *  Price
     *  Price List
     *  Price List
     *  Price List
     *
     * @param \horstoeko\ubl\entities\cac\PriceList $priceList
     * @return self
     */
    public function setPriceList(\horstoeko\ubl\entities\cac\PriceList $priceList)
    {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \horstoeko\ubl\entities\cac\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Price. Allowance Charge
     *  An allowance or charge associated with this price.
     *  0..n
     *  Price
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Price. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate applicable to this price, if it differs from the exchange rate applicable to the document as a whole.
     *  0..1
     *  Price
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(\horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }


}

