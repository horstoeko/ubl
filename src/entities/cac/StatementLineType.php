<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing StatementLineType
 *
 * ABIE
 *  Statement Line. Details
 *  A class to define a line in a Statement of account.
 *  Statement Line
 * XSD Type: StatementLineType
 */
class StatementLineType
{

    /**
     * BBIE
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $balanceBroughtForwardIndicator
     */
    private $balanceBroughtForwardIndicator = null;

    /**
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * BBIE
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * ASBIE
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @var \horstoeko\ubl\entities\cac\CollectedPayment[] $collectedPayment
     */
    private $collectedPayment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
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
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
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
     * Adds as note
     *
     * BBIE
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     * Gets as uUID
     *
     * BBIE
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
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
     * Gets as balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBalanceBroughtForwardIndicator()
    {
        return $this->balanceBroughtForwardIndicator;
    }

    /**
     * Sets a new balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $balanceBroughtForwardIndicator
     * @return self
     */
    public function setBalanceBroughtForwardIndicator($balanceBroughtForwardIndicator)
    {
        $this->balanceBroughtForwardIndicator = $balanceBroughtForwardIndicator;
        return $this;
    }

    /**
     * Gets as debitLineAmount
     *
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(\horstoeko\ubl\entities\cbc\DebitLineAmount $debitLineAmount)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * BBIE
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(\horstoeko\ubl\entities\cbc\CreditLineAmount $creditLineAmount)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as balanceAmount
     *
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BalanceAmount
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Sets a new balanceAmount
     *
     * BBIE
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BalanceAmount $balanceAmount
     * @return self
     */
    public function setBalanceAmount(\horstoeko\ubl\entities\cbc\BalanceAmount $balanceAmount)
    {
        $this->balanceAmount = $balanceAmount;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(\horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \horstoeko\ubl\entities\cac\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans
     * @return self
     */
    public function setPaymentMeans(\horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms
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
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
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
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
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
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \horstoeko\ubl\entities\cac\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(\horstoeko\ubl\entities\cac\OriginatorCustomerParty $originatorCustomerParty)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \horstoeko\ubl\entities\cac\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(\horstoeko\ubl\entities\cac\PayeeParty $payeeParty)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\InvoicePeriod $invoicePeriod
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Billing Reference
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Billing Reference
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Billing Reference
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Billing Reference
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Document Reference
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Document Reference
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Document Reference
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
     *  Document Reference
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
     * Gets as exchangeRate
     *
     * ASBIE
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(\horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     * Adds as collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CollectedPayment $collectedPayment
     */
    public function addToCollectedPayment(\horstoeko\ubl\entities\cac\CollectedPayment $collectedPayment)
    {
        $this->collectedPayment[] = $collectedPayment;
        return $this;
    }

    /**
     * isset collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectedPayment($index)
    {
        return isset($this->collectedPayment[$index]);
    }

    /**
     * unset collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectedPayment($index)
    {
        unset($this->collectedPayment[$index]);
    }

    /**
     * Gets as collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @return \horstoeko\ubl\entities\cac\CollectedPayment[]
     */
    public function getCollectedPayment()
    {
        return $this->collectedPayment;
    }

    /**
     * Sets a new collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param \horstoeko\ubl\entities\cac\CollectedPayment[] $collectedPayment
     * @return self
     */
    public function setCollectedPayment(array $collectedPayment)
    {
        $this->collectedPayment = $collectedPayment;
        return $this;
    }


}

