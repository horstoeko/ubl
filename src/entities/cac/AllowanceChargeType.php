<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AllowanceChargeType
 *
 * ABIE
 *  Allowance Charge. Details
 *  Information about a charge or discount price component.
 *  Allowance Charge
 * XSD Type: AllowanceChargeType
 */
class AllowanceChargeType
{

    /**
     * BBIE
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $chargeIndicator
     */
    private $chargeIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode
     */
    private $allowanceChargeReasonCode = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AllowanceChargeReason $allowanceChargeReason
     */
    private $allowanceChargeReason = null;

    /**
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @var float $multiplierFactorNumeric
     */
    private $multiplierFactorNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $prepaidIndicator
     */
    private $prepaidIndicator = null;

    /**
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @var float $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BaseAmount $baseAmount
     */
    private $baseAmount = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @var \horstoeko\ubl\entities\cac\TaxCategory[] $taxCategory
     */
    private $taxCategory = [
        
    ];

    /**
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     */
    private $taxTotal = null;

    /**
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @var \horstoeko\ubl\entities\cac\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Identifier
     *  Identifies an Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     * Gets as chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getChargeIndicator()
    {
        return $this->chargeIndicator;
    }

    /**
     * Sets a new chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $chargeIndicator
     * @return self
     */
    public function setChargeIndicator($chargeIndicator)
    {
        $this->chargeIndicator = $chargeIndicator;
        return $this;
    }

    /**
     * Gets as allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode
     */
    public function getAllowanceChargeReasonCode()
    {
        return $this->allowanceChargeReasonCode;
    }

    /**
     * Sets a new allowanceChargeReasonCode
     *
     * BBIE
     *  Allowance Charge. Allowance Charge Reason Code. Code
     *  The reason for the Allowance Charge, expressed as a code.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode
     * @return self
     */
    public function setAllowanceChargeReasonCode(\horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode)
    {
        $this->allowanceChargeReasonCode = $allowanceChargeReasonCode;
        return $this;
    }

    /**
     * Gets as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AllowanceChargeReason
     */
    public function getAllowanceChargeReason()
    {
        return $this->allowanceChargeReason;
    }

    /**
     * Sets a new allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for the Allowance Charge, expressed as text.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AllowanceChargeReason $allowanceChargeReason
     * @return self
     */
    public function setAllowanceChargeReason(\horstoeko\ubl\entities\cbc\AllowanceChargeReason $allowanceChargeReason)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * Gets as multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @return float
     */
    public function getMultiplierFactorNumeric()
    {
        return $this->multiplierFactorNumeric;
    }

    /**
     * Sets a new multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  The factor applied to the Base Amount to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @param float $multiplierFactorNumeric
     * @return self
     */
    public function setMultiplierFactorNumeric($multiplierFactorNumeric)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * Gets as prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrepaidIndicator()
    {
        return $this->prepaidIndicator;
    }

    /**
     * Sets a new prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  Indicates whether the Allowance Charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $prepaidIndicator
     * @return self
     */
    public function setPrepaidIndicator($prepaidIndicator)
    {
        $this->prepaidIndicator = $prepaidIndicator;
        return $this;
    }

    /**
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @return float
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Allowance Charge. Sequence. Numeric
     *  Identifies the numerical order sequence in which Allowance Charges are calculated when multiple Allowance Charges apply. If all Allowance Charges apply to the same Base Amount, SequenceNumeric will be '1' for all Allowance Charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @param float $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric($sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
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
     *  Allowance Charge. Amount
     *  The Allowance Charge amount.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
     *
     * @param \horstoeko\ubl\entities\cbc\Amount $amount
     * @return self
     */
    public function setAmount(\horstoeko\ubl\entities\cbc\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BaseAmount
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The amount to which the MultiplierFactorNumeric is applied to calculate the Allowance Charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BaseAmount $baseAmount
     * @return self
     */
    public function setBaseAmount(\horstoeko\ubl\entities\cbc\BaseAmount $baseAmount)
    {
        $this->baseAmount = $baseAmount;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost Code. Code
     *  The buyer's accounting code as applied to the Allowance Charge.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost. Text
     *  The buyer's accounting code as applied to the Allowance Charge expressed as text.
     *  0..1
     *  Allowance Charge
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
     * Adds as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
     */
    public function addToTaxCategory(\horstoeko\ubl\entities\cac\TaxCategory $taxCategory)
    {
        $this->taxCategory[] = $taxCategory;
        return $this;
    }

    /**
     * isset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxCategory($index)
    {
        return isset($this->taxCategory[$index]);
    }

    /**
     * unset taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxCategory($index)
    {
        unset($this->taxCategory[$index]);
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @return \horstoeko\ubl\entities\cac\TaxCategory[]
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  An association to Tax Category.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *
     * @param \horstoeko\ubl\entities\cac\TaxCategory[] $taxCategory
     * @return self
     */
    public function setTaxCategory(array $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @return \horstoeko\ubl\entities\cac\TaxTotal
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Allowance Charge. Tax Total
     *  An association to Tax Total.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *
     * @param \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     * @return self
     */
    public function setTaxTotal(\horstoeko\ubl\entities\cac\TaxTotal $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @return \horstoeko\ubl\entities\cac\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Allowance Charge. Payment Means
     *  An association to Payment Means.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *
     * @param \horstoeko\ubl\entities\cac\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }


}

