<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing DebitNoteLineType
 *
 * ABIE
 *  Debit Note Line. Details
 *  Information about a Debit Note Line.
 *  Debit Note Line
 * XSD Type: DebitNoteLineType
 */
class DebitNoteLineType
{

    /**
     * BBIE
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DebitedQuantity $debitedQuantity
     */
    private $debitedQuantity = null;

    /**
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @var \horstoeko\ubl\entities\cac\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @var \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \horstoeko\ubl\entities\cac\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
     *  Delivery
     *  Delivery
     *
     * @var \horstoeko\ubl\entities\cac\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\Price $price
     */
    private $price = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
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
     *  Debit Note Line. Identifier
     *  Identifies the Debit Note Line.
     *  1
     *  Debit Note Line
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
     * Gets as uUID
     *
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Debit Note Line
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
     * Gets as note
     *
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text applying to the Debit Note Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Debit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note $note
     * @return self
     */
    public function setNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DebitedQuantity
     */
    public function getDebitedQuantity()
    {
        return $this->debitedQuantity;
    }

    /**
     * Sets a new debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DebitedQuantity $debitedQuantity
     * @return self
     */
    public function setDebitedQuantity(\horstoeko\ubl\entities\cbc\DebitedQuantity $debitedQuantity)
    {
        $this->debitedQuantity = $debitedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
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
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for the Debit Note Line, including Allowance Charges but net of taxes.
     *  1
     *  Debit Note Line
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
     * Gets as taxPointDate
     *
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Tax Point Date. Date
     *  The date of the Debit Note Line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
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
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting code applied to the Debit Note Line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting code applied to the Debit Note Line, expressed as text.
     *  0..1
     *  Debit Note Line
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
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DiscrepancyResponse $discrepancyResponse
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
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param int|string $index
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
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param int|string $index
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
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
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
     *  Debit Note Line. Discrepancy_ Response. Response
     *  An association to Discrepancy Response; the reason for the Debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *
     * @param \horstoeko\ubl\entities\cac\DiscrepancyResponse[] $discrepancyResponse
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
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DespatchLineReference $despatchLineReference
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
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
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
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  An associative reference to Despatch Line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *
     * @param \horstoeko\ubl\entities\cac\DespatchLineReference[] $despatchLineReference
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
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ReceiptLineReference $receiptLineReference
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
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
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
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  An associative reference to Receipt Line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *
     * @param \horstoeko\ubl\entities\cac\ReceiptLineReference[] $receiptLineReference
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\BillingReference $billingReference
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Billing Reference
     *  An association to Billing Reference.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *
     * @param \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DocumentReference $documentReference
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Debit Note Line
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
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
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Pricing Reference
     *  An association to Pricing Reference.
     *  0..1
     *  Debit Note Line
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
     * Adds as delivery
     *
     * ASBIE
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  An association to Delivery.
     *  0..n
     *  Debit Note Line
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  An association to Tax Total.
     *  0..n
     *  Debit Note Line
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
     * Gets as item
     *
     * ASBIE
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Item
     *  An association to Item
     *  0..1
     *  Debit Note Line
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
     * Gets as price
     *
     * ASBIE
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Price
     *  An association to Price.
     *  0..1
     *  Debit Note Line
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


}

