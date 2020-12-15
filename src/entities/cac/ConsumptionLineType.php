<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ConsumptionLineType
 *
 * ABIE
 *  Consumption Line. Details
 *  A class to describe a line item for utility consumption. To specify more than one utility item, use separate consumption lines.
 *  Consumption Line
 * XSD Type: ConsumptionLineType
 */
class ConsumptionLineType
{

    /**
     * BBIE
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @var \horstoeko\ubl\entities\cbc\ParentDocumentLineReferenceID $parentDocumentLineReferenceID
     */
    private $parentDocumentLineReferenceID = null;

    /**
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InvoicedQuantity $invoicedQuantity
     */
    private $invoicedQuantity = null;

    /**
     * BBIE
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * ASBIE
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \horstoeko\ubl\entities\cac\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @var \horstoeko\ubl\entities\cac\UtilityItem $utilityItem
     */
    private $utilityItem = null;

    /**
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @var \horstoeko\ubl\entities\cac\UnstructuredPrice $unstructuredPrice
     */
    private $unstructuredPrice = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as parentDocumentLineReferenceID
     *
     * BBIE
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @return \horstoeko\ubl\entities\cbc\ParentDocumentLineReferenceID
     */
    public function getParentDocumentLineReferenceID()
    {
        return $this->parentDocumentLineReferenceID;
    }

    /**
     * Sets a new parentDocumentLineReferenceID
     *
     * BBIE
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @param \horstoeko\ubl\entities\cbc\ParentDocumentLineReferenceID $parentDocumentLineReferenceID
     * @return self
     */
    public function setParentDocumentLineReferenceID(\horstoeko\ubl\entities\cbc\ParentDocumentLineReferenceID $parentDocumentLineReferenceID)
    {
        $this->parentDocumentLineReferenceID = $parentDocumentLineReferenceID;
        return $this;
    }

    /**
     * Gets as invoicedQuantity
     *
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InvoicedQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * Sets a new invoicedQuantity
     *
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\InvoicedQuantity $invoicedQuantity
     * @return self
     */
    public function setInvoicedQuantity(\horstoeko\ubl\entities\cbc\InvoicedQuantity $invoicedQuantity)
    {
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
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
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
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

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Delivery $delivery
     */
    public function addToDelivery(\horstoeko\ubl\entities\cac\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \horstoeko\ubl\entities\cac\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \horstoeko\ubl\entities\cac\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
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
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
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
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
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
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
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
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as utilityItem
     *
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @return \horstoeko\ubl\entities\cac\UtilityItem
     */
    public function getUtilityItem()
    {
        return $this->utilityItem;
    }

    /**
     * Sets a new utilityItem
     *
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @param \horstoeko\ubl\entities\cac\UtilityItem $utilityItem
     * @return self
     */
    public function setUtilityItem(\horstoeko\ubl\entities\cac\UtilityItem $utilityItem)
    {
        $this->utilityItem = $utilityItem;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @return \horstoeko\ubl\entities\cac\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @param \horstoeko\ubl\entities\cac\Price $price
     * @return self
     */
    public function setPrice(\horstoeko\ubl\entities\cac\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as unstructuredPrice
     *
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @return \horstoeko\ubl\entities\cac\UnstructuredPrice
     */
    public function getUnstructuredPrice()
    {
        return $this->unstructuredPrice;
    }

    /**
     * Sets a new unstructuredPrice
     *
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @param \horstoeko\ubl\entities\cac\UnstructuredPrice $unstructuredPrice
     * @return self
     */
    public function setUnstructuredPrice(\horstoeko\ubl\entities\cac\UnstructuredPrice $unstructuredPrice)
    {
        $this->unstructuredPrice = $unstructuredPrice;
        return $this;
    }


}

