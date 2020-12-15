<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LineItemType
 *
 * ABIE
 *  Line Item. Details
 *  A class to describe a line item.
 *  Line Item
 * XSD Type: LineItemType
 */
class LineItemType
{

    /**
     * BBIE
     *  Line Item. Identifier
     *  An identifier for this line item, assigned by the buyer.
     *  1
     *  Line Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Line Item. Sales_ Order Identifier. Identifier
     *  An identifier for this line item, assigned by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for this line item.
     *  0..1
     *  Line Item
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Line Item. Line Status Code. Code
     *  A code signifying the status of this line item with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * BBIE
     *  Line Item. Quantity
     *  The quantity of items associated with this line item.
     *  0..1
     *  Line Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for this line item, including allowance charges but net of taxes.
     *  0..1
     *  Line Item
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for this line item.
     *  0..1
     *  Line Item
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MinimumQuantity $minimumQuantity
     */
    private $minimumQuantity = null;

    /**
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MaximumQuantity $maximumQuantity
     */
    private $maximumQuantity = null;

    /**
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MinimumBackorderQuantity $minimumBackorderQuantity
     */
    private $minimumBackorderQuantity = null;

    /**
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MaximumBackorderQuantity $maximumBackorderQuantity
     */
    private $maximumBackorderQuantity = null;

    /**
     * BBIE
     *  Line Item. Inspection Method Code. Code
     *  A code signifying the inspection requirements for the item associated with this line item.
     *  0..1
     *  Line Item
     *  Inspection Method Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InspectionMethodCode $inspectionMethodCode
     */
    private $inspectionMethodCode = null;

    /**
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  An indicator that a partial delivery is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $partialDeliveryIndicator
     */
    private $partialDeliveryIndicator = null;

    /**
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  An indicator that back order is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $backOrderAllowedIndicator
     */
    private $backOrderAllowedIndicator = null;

    /**
     * BBIE
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this line item, expressed as a code.
     *  0..1
     *  Line Item
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting cost centre for this line item, expressed as text.
     *  0..1
     *  Line Item
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @var \horstoeko\ubl\entities\cbc\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery Terms
     *  Terms and conditions of the delivery associated with this line item.
     *  0..1
     *  Line Item
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated the Order associated with this line item.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @var \horstoeko\ubl\entities\cac\OrderedShipment[] $orderedShipment
     */
    private $orderedShipment = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Pricing Reference
     *  A reference to pricing and item location information associated with this line item.
     *  0..1
     *  Line Item
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \horstoeko\ubl\entities\cac\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Price
     *  The price of the item of trade associated with this line item.
     *  0..1
     *  Line Item
     *  Price
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Line Item. Item
     *  The item of trade associated with this line item.
     *  1
     *  Line Item
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \horstoeko\ubl\entities\cac\SubLineItem[] $subLineItem
     */
    private $subLineItem = [
        
    ];

    /**
     * ASBIE
     *  Line Item. Warranty Validity_ Period. Period
     *  The period during which the warranty associated with this line item is valid.
     *  0..1
     *  Line Item
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Line Item. Warranty_ Party. Party
     *  The party responsible for any warranty associated with this line item.
     *  0..1
     *  Line Item
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     *  Line Item. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items.
     *  0..1
     *  Line Item
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @var \horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\LineReference[] $lineReference
     */
    private $lineReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Line Item. Identifier
     *  An identifier for this line item, assigned by the buyer.
     *  1
     *  Line Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Line Item. Identifier
     *  An identifier for this line item, assigned by the buyer.
     *  1
     *  Line Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Line Item. Sales_ Order Identifier. Identifier
     *  An identifier for this line item, assigned by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Line Item. Sales_ Order Identifier. Identifier
     *  An identifier for this line item, assigned by the seller.
     *  0..1
     *  Line Item
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(\horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for this line item.
     *  0..1
     *  Line Item
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Line Item. UUID. Identifier
     *  A universally unique identifier for this line item.
     *  0..1
     *  Line Item
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\UUID $uUID
     * @return self
     */
    public function setUUID(\horstoeko\ubl\entities\cbc\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Line Item. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Line Item
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * BBIE
     *  Line Item. Line Status Code. Code
     *  A code signifying the status of this line item with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Line Item. Line Status Code. Code
     *  A code signifying the status of this line item with respect to its original state.
     *  0..1
     *  Line Item
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Line Item. Quantity
     *  The quantity of items associated with this line item.
     *  0..1
     *  Line Item
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
     *  Line Item. Quantity
     *  The quantity of items associated with this line item.
     *  0..1
     *  Line Item
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
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for this line item, including allowance charges but net of taxes.
     *  0..1
     *  Line Item
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
     *  Line Item. Line Extension Amount. Amount
     *  The total amount for this line item, including allowance charges but net of taxes.
     *  0..1
     *  Line Item
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
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for this line item.
     *  0..1
     *  Line Item
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Line Item. Total_ Tax Amount. Amount
     *  The total tax amount for this line item.
     *  0..1
     *  Line Item
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as minimumQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MinimumQuantity
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Sets a new minimumQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Quantity. Quantity
     *  The minimum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Minimum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MinimumQuantity $minimumQuantity
     * @return self
     */
    public function setMinimumQuantity(\horstoeko\ubl\entities\cbc\MinimumQuantity $minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;
        return $this;
    }

    /**
     * Gets as maximumQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MaximumQuantity
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Sets a new maximumQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Quantity. Quantity
     *  The maximum quantity of the item associated with this line.
     *  0..1
     *  Line Item
     *  Maximum
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MaximumQuantity $maximumQuantity
     * @return self
     */
    public function setMaximumQuantity(\horstoeko\ubl\entities\cbc\MaximumQuantity $maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;
        return $this;
    }

    /**
     * Gets as minimumBackorderQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MinimumBackorderQuantity
     */
    public function getMinimumBackorderQuantity()
    {
        return $this->minimumBackorderQuantity;
    }

    /**
     * Sets a new minimumBackorderQuantity
     *
     * BBIE
     *  Line Item. Minimum_ Backorder. Quantity
     *  The minimum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Minimum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MinimumBackorderQuantity $minimumBackorderQuantity
     * @return self
     */
    public function setMinimumBackorderQuantity(\horstoeko\ubl\entities\cbc\MinimumBackorderQuantity $minimumBackorderQuantity)
    {
        $this->minimumBackorderQuantity = $minimumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as maximumBackorderQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MaximumBackorderQuantity
     */
    public function getMaximumBackorderQuantity()
    {
        return $this->maximumBackorderQuantity;
    }

    /**
     * Sets a new maximumBackorderQuantity
     *
     * BBIE
     *  Line Item. Maximum_ Backorder. Quantity
     *  The maximum back order quantity of the item associated with this line (where back order is allowed).
     *  0..1
     *  Line Item
     *  Maximum
     *  Backorder
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MaximumBackorderQuantity $maximumBackorderQuantity
     * @return self
     */
    public function setMaximumBackorderQuantity(\horstoeko\ubl\entities\cbc\MaximumBackorderQuantity $maximumBackorderQuantity)
    {
        $this->maximumBackorderQuantity = $maximumBackorderQuantity;
        return $this;
    }

    /**
     * Gets as inspectionMethodCode
     *
     * BBIE
     *  Line Item. Inspection Method Code. Code
     *  A code signifying the inspection requirements for the item associated with this line item.
     *  0..1
     *  Line Item
     *  Inspection Method Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InspectionMethodCode
     */
    public function getInspectionMethodCode()
    {
        return $this->inspectionMethodCode;
    }

    /**
     * Sets a new inspectionMethodCode
     *
     * BBIE
     *  Line Item. Inspection Method Code. Code
     *  A code signifying the inspection requirements for the item associated with this line item.
     *  0..1
     *  Line Item
     *  Inspection Method Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\InspectionMethodCode $inspectionMethodCode
     * @return self
     */
    public function setInspectionMethodCode(\horstoeko\ubl\entities\cbc\InspectionMethodCode $inspectionMethodCode)
    {
        $this->inspectionMethodCode = $inspectionMethodCode;
        return $this;
    }

    /**
     * Gets as partialDeliveryIndicator
     *
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  An indicator that a partial delivery is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPartialDeliveryIndicator()
    {
        return $this->partialDeliveryIndicator;
    }

    /**
     * Sets a new partialDeliveryIndicator
     *
     * BBIE
     *  Line Item. Partial Delivery Indicator. Indicator
     *  An indicator that a partial delivery is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Partial Delivery Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $partialDeliveryIndicator
     * @return self
     */
    public function setPartialDeliveryIndicator($partialDeliveryIndicator)
    {
        $this->partialDeliveryIndicator = $partialDeliveryIndicator;
        return $this;
    }

    /**
     * Gets as backOrderAllowedIndicator
     *
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  An indicator that back order is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBackOrderAllowedIndicator()
    {
        return $this->backOrderAllowedIndicator;
    }

    /**
     * Sets a new backOrderAllowedIndicator
     *
     * BBIE
     *  Line Item. Back Order Allowed Indicator. Indicator
     *  An indicator that back order is allowed (true) or not (false).
     *  0..1
     *  Line Item
     *  Back Order Allowed Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $backOrderAllowedIndicator
     * @return self
     */
    public function setBackOrderAllowedIndicator($backOrderAllowedIndicator)
    {
        $this->backOrderAllowedIndicator = $backOrderAllowedIndicator;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this line item, expressed as a code.
     *  0..1
     *  Line Item
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Line Item. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this line item, expressed as a code.
     *  0..1
     *  Line Item
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting cost centre for this line item, expressed as text.
     *  0..1
     *  Line Item
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Line Item. Accounting Cost. Text
     *  The buyer's accounting cost centre for this line item, expressed as text.
     *  0..1
     *  Line Item
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\horstoeko\ubl\entities\cbc\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\horstoeko\ubl\entities\cbc\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return \horstoeko\ubl\entities\cbc\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Line Item. Warranty_ Information. Text
     *  Text describing a warranty (provided by WarrantyParty) for the good or service described in this line item.
     *  0..n
     *  Line Item
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param \horstoeko\ubl\entities\cbc\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Delivery
     *  A delivery associated with this line item.
     *  0..n
     *  Line Item
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
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Line Item. Delivery Terms
     *  Terms and conditions of the delivery associated with this line item.
     *  0..1
     *  Line Item
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Line Item. Delivery Terms
     *  Terms and conditions of the delivery associated with this line item.
     *  0..1
     *  Line Item
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated the Order associated with this line item.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * ASBIE
     *  Line Item. Originator_ Party. Party
     *  The party who originated the Order associated with this line item.
     *  0..1
     *  Line Item
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(\horstoeko\ubl\entities\cac\OriginatorParty $originatorParty)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\OrderedShipment $orderedShipment
     */
    public function addToOrderedShipment(\horstoeko\ubl\entities\cac\OrderedShipment $orderedShipment)
    {
        $this->orderedShipment[] = $orderedShipment;
        return $this;
    }

    /**
     * isset orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderedShipment($index)
    {
        return isset($this->orderedShipment[$index]);
    }

    /**
     * unset orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderedShipment($index)
    {
        unset($this->orderedShipment[$index]);
    }

    /**
     * Gets as orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @return \horstoeko\ubl\entities\cac\OrderedShipment[]
     */
    public function getOrderedShipment()
    {
        return $this->orderedShipment;
    }

    /**
     * Sets a new orderedShipment
     *
     * ASBIE
     *  Line Item. Ordered Shipment
     *  An ordered shipment associated with this line item.
     *  0..n
     *  Line Item
     *  Ordered Shipment
     *  Ordered Shipment
     *  Ordered Shipment
     *
     * @param \horstoeko\ubl\entities\cac\OrderedShipment[] $orderedShipment
     * @return self
     */
    public function setOrderedShipment(array $orderedShipment)
    {
        $this->orderedShipment = $orderedShipment;
        return $this;
    }

    /**
     * Gets as pricingReference
     *
     * ASBIE
     *  Line Item. Pricing Reference
     *  A reference to pricing and item location information associated with this line item.
     *  0..1
     *  Line Item
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \horstoeko\ubl\entities\cac\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Line Item. Pricing Reference
     *  A reference to pricing and item location information associated with this line item.
     *  0..1
     *  Line Item
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \horstoeko\ubl\entities\cac\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(\horstoeko\ubl\entities\cac\PricingReference $pricingReference)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     *  Line Item. Allowance Charge
     *  An allowance or charge associated with this line item.
     *  0..n
     *  Line Item
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
     * Gets as price
     *
     * ASBIE
     *  Line Item. Price
     *  The price of the item of trade associated with this line item.
     *  0..1
     *  Line Item
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
     *  Line Item. Price
     *  The price of the item of trade associated with this line item.
     *  0..1
     *  Line Item
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
     * Gets as item
     *
     * ASBIE
     *  Line Item. Item
     *  The item of trade associated with this line item.
     *  1
     *  Line Item
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
     *  Line Item. Item
     *  The item of trade associated with this line item.
     *  1
     *  Line Item
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

    /**
     * Adds as subLineItem
     *
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SubLineItem $subLineItem
     */
    public function addToSubLineItem(\horstoeko\ubl\entities\cac\SubLineItem $subLineItem)
    {
        $this->subLineItem[] = $subLineItem;
        return $this;
    }

    /**
     * isset subLineItem
     *
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubLineItem($index)
    {
        return isset($this->subLineItem[$index]);
    }

    /**
     * unset subLineItem
     *
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubLineItem($index)
    {
        unset($this->subLineItem[$index]);
    }

    /**
     * Gets as subLineItem
     *
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \horstoeko\ubl\entities\cac\SubLineItem[]
     */
    public function getSubLineItem()
    {
        return $this->subLineItem;
    }

    /**
     * Sets a new subLineItem
     *
     * ASBIE
     *  Line Item. Sub_ Line Item. Line Item
     *  The subsidiary line items that constitute the main line item, such as in a bill of materials.
     *  0..n
     *  Line Item
     *  Sub
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \horstoeko\ubl\entities\cac\SubLineItem[] $subLineItem
     * @return self
     */
    public function setSubLineItem(array $subLineItem)
    {
        $this->subLineItem = $subLineItem;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Line Item. Warranty Validity_ Period. Period
     *  The period during which the warranty associated with this line item is valid.
     *  0..1
     *  Line Item
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Line Item. Warranty Validity_ Period. Period
     *  The period during which the warranty associated with this line item is valid.
     *  0..1
     *  Line Item
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(\horstoeko\ubl\entities\cac\WarrantyValidityPeriod $warrantyValidityPeriod)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * ASBIE
     *  Line Item. Warranty_ Party. Party
     *  The party responsible for any warranty associated with this line item.
     *  0..1
     *  Line Item
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Line Item. Warranty_ Party. Party
     *  The party responsible for any warranty associated with this line item.
     *  0..1
     *  Line Item
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(\horstoeko\ubl\entities\cac\WarrantyParty $warrantyParty)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     *  Line Item. Tax Total
     *  A total amount of taxes of a particular kind applicable to this item.
     *  0..n
     *  Line Item
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
     * Gets as itemPriceExtension
     *
     * ASBIE
     *  Line Item. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items.
     *  0..1
     *  Line Item
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @return \horstoeko\ubl\entities\cac\ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->itemPriceExtension;
    }

    /**
     * Sets a new itemPriceExtension
     *
     * ASBIE
     *  Line Item. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items.
     *  0..1
     *  Line Item
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @param \horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(\horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }

    /**
     * Adds as lineReference
     *
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\LineReference $lineReference
     */
    public function addToLineReference(\horstoeko\ubl\entities\cac\LineReference $lineReference)
    {
        $this->lineReference[] = $lineReference;
        return $this;
    }

    /**
     * isset lineReference
     *
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLineReference($index)
    {
        return isset($this->lineReference[$index]);
    }

    /**
     * unset lineReference
     *
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLineReference($index)
    {
        unset($this->lineReference[$index]);
    }

    /**
     * Gets as lineReference
     *
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\LineReference[]
     */
    public function getLineReference()
    {
        return $this->lineReference;
    }

    /**
     * Sets a new lineReference
     *
     * ASBIE
     *  Line Item. Line Reference
     *  A reference to a line in a document associated with this line item.
     *  0..n
     *  Line Item
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \horstoeko\ubl\entities\cac\LineReference[] $lineReference
     * @return self
     */
    public function setLineReference(array $lineReference)
    {
        $this->lineReference = $lineReference;
        return $this;
    }


}

