<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ReminderLineType
 *
 * ABIE
 *  Reminder Line. Details
 *  A class to define a line in a Reminder document.
 *  Reminder Line
 * XSD Type: ReminderLineType
 */
class ReminderLineType
{

    /**
     * BBIE
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PenaltySurchargePercent $penaltySurchargePercent
     */
    private $penaltySurchargePercent = null;

    /**
     * BBIE
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ReminderPeriod[] $reminderPeriod
     */
    private $reminderPeriod = [
        
    ];

    /**
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
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
     *  Reminder Line. Identifier
     *  An identifier for this reminder line.
     *  1
     *  Reminder Line
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
     * Adds as note
     *
     * BBIE
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Reminder Line
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
     * Gets as uUID
     *
     * BBIE
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. UUID. Identifier
     *  A universally unique identifier for this reminder line.
     *  0..1
     *  Reminder Line
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
     * Gets as balanceBroughtForwardIndicator
     *
     * BBIE
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this reminder line contains a balance brought forward (true) or does not (false).
     *  0..1
     *  Reminder Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $balanceBroughtForwardIndicator
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Debit_ Line Amount. Amount
     *  The amount debited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\DebitLineAmount $debitLineAmount
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Credit_ Line Amount. Amount
     *  The amount credited on this reminder line.
     *  0..1
     *  Reminder Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(\horstoeko\ubl\entities\cbc\CreditLineAmount $creditLineAmount)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this reminder line, expressed as a code.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this reminder line, expressed as text.
     *  0..1
     *  Reminder Line
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
     * Gets as penaltySurchargePercent
     *
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PenaltySurchargePercent
     */
    public function getPenaltySurchargePercent()
    {
        return $this->penaltySurchargePercent;
    }

    /**
     * Sets a new penaltySurchargePercent
     *
     * BBIE
     *  Reminder Line. Penalty_ Surcharge Percent. Percent
     *  The penalty for late payment, expressed as a percentage.
     *  0..1
     *  Reminder Line
     *  Penalty
     *  Surcharge Percent
     *  Percent
     *  Percent. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PenaltySurchargePercent $penaltySurchargePercent
     * @return self
     */
    public function setPenaltySurchargePercent(\horstoeko\ubl\entities\cbc\PenaltySurchargePercent $penaltySurchargePercent)
    {
        $this->penaltySurchargePercent = $penaltySurchargePercent;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Amount
     *  The amount on this reminder line.
     *  0..1
     *  Reminder Line
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
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Reminder Line
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
     * Adds as reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ReminderPeriod $reminderPeriod
     */
    public function addToReminderPeriod(\horstoeko\ubl\entities\cac\ReminderPeriod $reminderPeriod)
    {
        $this->reminderPeriod[] = $reminderPeriod;
        return $this;
    }

    /**
     * isset reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetReminderPeriod($index)
    {
        return isset($this->reminderPeriod[$index]);
    }

    /**
     * unset reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetReminderPeriod($index)
    {
        unset($this->reminderPeriod[$index]);
    }

    /**
     * Gets as reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ReminderPeriod[]
     */
    public function getReminderPeriod()
    {
        return $this->reminderPeriod;
    }

    /**
     * Sets a new reminderPeriod
     *
     * ASBIE
     *  Reminder Line. Reminder_ Period. Period
     *  A period to which this reminder line applies.
     *  0..n
     *  Reminder Line
     *  Reminder
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\ReminderPeriod[] $reminderPeriod
     * @return self
     */
    public function setReminderPeriod(array $reminderPeriod)
    {
        $this->reminderPeriod = $reminderPeriod;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     *  Reminder Line. Billing Reference
     *  A reference to a billing document associated with this reminder line.
     *  0..n
     *  Reminder Line
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
     * Gets as exchangeRate
     *
     * ASBIE
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
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
     *  Reminder Line. Exchange Rate
     *  The rate of exchange between the currency of the Reminder and the currency of the document described in the BillingReference.
     *  0..1
     *  Reminder Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param  \horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(\horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }


}

