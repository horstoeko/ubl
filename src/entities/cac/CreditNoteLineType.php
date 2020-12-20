<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CreditNoteLineType
 *
 * ABIE
 *  Credit Note Line. Details
 *  A class to define a line in a Credit Note or Self Billed Credit Note.
 *  Credit Note Line
 * XSD Type: CreditNoteLineType
 */
class CreditNoteLineType
{

    /**
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CreditedQuantity $creditedQuantity
     */
    private $creditedQuantity = null;

    /**
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $freeOfChargeIndicator
     */
    private $freeOfChargeIndicator = null;

    /**
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @var \horstoeko\ubl\entities\cac\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \horstoeko\ubl\entities\cac\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @var \horstoeko\ubl\entities\cac\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @var \horstoeko\ubl\entities\cac\SubCreditNoteLine[] $subCreditNoteLine
     */
    private $subCreditNoteLine = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @var \horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\UUID $uUID
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Note $note
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CreditedQuantity
     */
    public function getCreditedQuantity()
    {
        return $this->creditedQuantity;
    }

    /**
     * Sets a new creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CreditedQuantity $creditedQuantity
     * @return self
     */
    public function setCreditedQuantity(\horstoeko\ubl\entities\cbc\CreditedQuantity $creditedQuantity)
    {
        $this->creditedQuantity = $creditedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
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
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\horstoeko\ubl\entities\cbc\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(\horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFreeOfChargeIndicator()
    {
        return $this->freeOfChargeIndicator;
    }

    /**
     * Sets a new freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $freeOfChargeIndicator
     * @return self
     */
    public function setFreeOfChargeIndicator($freeOfChargeIndicator)
    {
        $this->freeOfChargeIndicator = $freeOfChargeIndicator;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\horstoeko\ubl\entities\cac\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\horstoeko\ubl\entities\cac\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param  \horstoeko\ubl\entities\cac\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(array $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\horstoeko\ubl\entities\cac\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return \horstoeko\ubl\entities\cac\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param  \horstoeko\ubl\entities\cac\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(array $discrepancyResponse)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\horstoeko\ubl\entities\cac\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  \horstoeko\ubl\entities\cac\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\horstoeko\ubl\entities\cac\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param  \horstoeko\ubl\entities\cac\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(array $receiptLineReference)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\BillingReference $billingReference
     */
    public function addToBillingReference(\horstoeko\ubl\entities\cac\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \horstoeko\ubl\entities\cac\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param  \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    public function addToDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as pricingReference
     *
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param  \horstoeko\ubl\entities\cac\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(\horstoeko\ubl\entities\cac\PricingReference $pricingReference)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @param  \horstoeko\ubl\entities\cac\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(\horstoeko\ubl\entities\cac\OriginatorParty $originatorParty)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\Delivery $delivery
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
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param  int|string $index
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
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param  int|string $index
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
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param  \horstoeko\ubl\entities\cac\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
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

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge
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
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  int|string $index
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
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  int|string $index
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
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
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
     * Gets as price
     *
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
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
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @param  \horstoeko\ubl\entities\cac\Price $price
     * @return self
     */
    public function setPrice(\horstoeko\ubl\entities\cac\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  \horstoeko\ubl\entities\cac\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(array $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\SubCreditNoteLine $subCreditNoteLine
     */
    public function addToSubCreditNoteLine(\horstoeko\ubl\entities\cac\SubCreditNoteLine $subCreditNoteLine)
    {
        $this->subCreditNoteLine[] = $subCreditNoteLine;
        return $this;
    }

    /**
     * isset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSubCreditNoteLine($index)
    {
        return isset($this->subCreditNoteLine[$index]);
    }

    /**
     * unset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSubCreditNoteLine($index)
    {
        unset($this->subCreditNoteLine[$index]);
    }

    /**
     * Gets as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return \horstoeko\ubl\entities\cac\SubCreditNoteLine[]
     */
    public function getSubCreditNoteLine()
    {
        return $this->subCreditNoteLine;
    }

    /**
     * Sets a new subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param  \horstoeko\ubl\entities\cac\SubCreditNoteLine[] $subCreditNoteLine
     * @return self
     */
    public function setSubCreditNoteLine(array $subCreditNoteLine)
    {
        $this->subCreditNoteLine = $subCreditNoteLine;
        return $this;
    }

    /**
     * Gets as itemPriceExtension
     *
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @param  \horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(\horstoeko\ubl\entities\cac\ItemPriceExtension $itemPriceExtension)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }


}

