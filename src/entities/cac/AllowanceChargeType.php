<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AllowanceChargeType
 *
 * ABIE
 *  Allowance Charge. Details
 *  A class to describe information about a charge or discount as applied to a price component.
 *  Allowance Charge
 * XSD Type: AllowanceChargeType
 */
class AllowanceChargeType
{

    /**
     * BBIE
     *  Allowance Charge. Identifier
     *  An identifier for this allowance or charge.
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
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
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
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
     *  Allowance Charge Reason_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode
     */
    private $allowanceChargeReasonCode = null;

    /**
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AllowanceChargeReason[] $allowanceChargeReason
     */
    private $allowanceChargeReason = [
        
    ];

    /**
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @var \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric $multiplierFactorNumeric
     */
    private $multiplierFactorNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
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
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @var \horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * BBIE
     *  Allowance Charge. Amount
     *  The monetary amount of this allowance or charge to be applied.
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
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
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
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
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
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
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
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
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
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     */
    private $taxTotal = null;

    /**
     * ASBIE
     *  Allowance Charge. Payment Means
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
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
     *  An identifier for this allowance or charge.
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
     *  An identifier for this allowance or charge.
     *  0..1
     *  Allowance Charge
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
     * Gets as chargeIndicator
     *
     * BBIE
     *  Allowance Charge. Charge_ Indicator. Indicator
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
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
     *  An indicator that this AllowanceCharge describes a charge (true) or a discount (false).
     *  1
     *  Allowance Charge
     *  Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $chargeIndicator
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
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
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
     *  A mutually agreed code signifying the reason for this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Allowance Charge Reason Code
     *  Code
     *  Allowance Charge Reason
     *  Allowance Charge Reason_ Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode
     * @return self
     */
    public function setAllowanceChargeReasonCode(\horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode $allowanceChargeReasonCode)
    {
        $this->allowanceChargeReasonCode = $allowanceChargeReasonCode;
        return $this;
    }

    /**
     * Adds as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\AllowanceChargeReason $allowanceChargeReason
     */
    public function addToAllowanceChargeReason(\horstoeko\ubl\entities\cbc\AllowanceChargeReason $allowanceChargeReason)
    {
        $this->allowanceChargeReason[] = $allowanceChargeReason;
        return $this;
    }

    /**
     * isset allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAllowanceChargeReason($index)
    {
        return isset($this->allowanceChargeReason[$index]);
    }

    /**
     * unset allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAllowanceChargeReason($index)
    {
        unset($this->allowanceChargeReason[$index]);
    }

    /**
     * Gets as allowanceChargeReason
     *
     * BBIE
     *  Allowance Charge. Allowance Charge_ Reason. Text
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AllowanceChargeReason[]
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
     *  The reason for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Allowance Charge
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AllowanceChargeReason[] $allowanceChargeReason
     * @return self
     */
    public function setAllowanceChargeReason(array $allowanceChargeReason)
    {
        $this->allowanceChargeReason = $allowanceChargeReason;
        return $this;
    }

    /**
     * Gets as multiplierFactorNumeric
     *
     * BBIE
     *  Allowance Charge. Multiplier_ Factor. Numeric
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @return \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric
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
     *  A number by which the base amount is multiplied to calculate the actual amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Multiplier
     *  Factor
     *  Numeric
     *  Numeric. Type
     *  0.20
     *
     * @param  \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric $multiplierFactorNumeric
     * @return self
     */
    public function setMultiplierFactorNumeric(\horstoeko\ubl\entities\cbc\MultiplierFactorNumeric $multiplierFactorNumeric)
    {
        $this->multiplierFactorNumeric = $multiplierFactorNumeric;
        return $this;
    }

    /**
     * Gets as prepaidIndicator
     *
     * BBIE
     *  Allowance Charge. Prepaid_ Indicator. Indicator
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
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
     *  An indicator that this allowance or charge is prepaid (true) or not (false).
     *  0..1
     *  Allowance Charge
     *  Prepaid
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $prepaidIndicator
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
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @return \horstoeko\ubl\entities\cbc\SequenceNumeric
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
     *  A number indicating the order of this allowance or charge in the sequence of calculations applied when there are multiple allowances or charges.
     *  0..1
     *  Allowance Charge
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *  1, 2, 3, 4, etc.
     *
     * @param  \horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Allowance Charge. Amount
     *  The monetary amount of this allowance or charge to be applied.
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
     *  The monetary amount of this allowance or charge to be applied.
     *  1
     *  Allowance Charge
     *  Amount
     *  Amount
     *  Amount. Type
     *  35,23
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
     * Gets as baseAmount
     *
     * BBIE
     *  Allowance Charge. Base_ Amount. Amount
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
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
     *  The monetary amount to which the multiplier factor is applied in calculating the amount of this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\BaseAmount $baseAmount
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
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
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
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as a code.
     *  0..1
     *  Allowance Charge
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
     *  Allowance Charge. Accounting Cost. Text
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
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
     *  The accounting cost centre used by the buyer to account for this allowance or charge, expressed as text.
     *  0..1
     *  Allowance Charge
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
     * Gets as perUnitAmount
     *
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Allowance Charge. Per Unit_ Amount. Amount
     *  The allowance or charge per item; the total allowance or charge is calculated by multiplying the per unit amount by the quantity of items, either at the level of the individual transaction line or for the total number of items in the document, depending on the context in which it appears.
     *  0..1
     *  Allowance Charge
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(\horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Adds as taxCategory
     *
     * ASBIE
     *  Allowance Charge. Tax Category
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
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
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param  int|string $index
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
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param  int|string $index
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
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
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
     *  A tax category applicable to this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param  \horstoeko\ubl\entities\cac\TaxCategory[] $taxCategory
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
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
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
     *  The total of all the taxes applicable to this allowance or charge.
     *  0..1
     *  Allowance Charge
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
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
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans
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
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param  int|string $index
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
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param  int|string $index
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
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
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
     *  A means of payment for this allowance or charge.
     *  0..n
     *  Allowance Charge
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param  \horstoeko\ubl\entities\cac\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }


}

