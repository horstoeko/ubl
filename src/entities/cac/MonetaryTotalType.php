<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing MonetaryTotalType
 *
 * ABIE
 *  Monetary Total. Details
 *  A class to define a monetary total.
 *  Monetary Total
 * XSD Type: MonetaryTotalType
 */
class MonetaryTotalType
{

    /**
     * BBIE
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TaxExclusiveAmount $taxExclusiveAmount
     */
    private $taxExclusiveAmount = null;

    /**
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TaxInclusiveAmount $taxInclusiveAmount
     */
    private $taxInclusiveAmount = null;

    /**
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AllowanceTotalAmount $allowanceTotalAmount
     */
    private $allowanceTotalAmount = null;

    /**
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ChargeTotalAmount $chargeTotalAmount
     */
    private $chargeTotalAmount = null;

    /**
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PrepaidAmount $prepaidAmount
     */
    private $prepaidAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PayableRoundingAmount $payableRoundingAmount
     */
    private $payableRoundingAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PayableAmount $payableAmount
     */
    private $payableAmount = null;

    /**
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PayableAlternativeAmount $payableAlternativeAmount
     */
    private $payableAlternativeAmount = null;

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
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
     *  Monetary Total. Line Extension Amount. Amount
     *  The monetary amount of an extended transaction line, net of tax and settlement discounts, but inclusive of any applicable rounding amount.
     *  0..1
     *  Monetary Total
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
     * Gets as taxExclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TaxExclusiveAmount
     */
    public function getTaxExclusiveAmount()
    {
        return $this->taxExclusiveAmount;
    }

    /**
     * Sets a new taxExclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Exclusive Amount. Amount
     *  The monetary amount of an extended transaction line, exclusive of taxes.
     *  0..1
     *  Monetary Total
     *  Tax Exclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxExclusiveAmount $taxExclusiveAmount
     * @return self
     */
    public function setTaxExclusiveAmount(\horstoeko\ubl\entities\cbc\TaxExclusiveAmount $taxExclusiveAmount)
    {
        $this->taxExclusiveAmount = $taxExclusiveAmount;
        return $this;
    }

    /**
     * Gets as taxInclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TaxInclusiveAmount
     */
    public function getTaxInclusiveAmount()
    {
        return $this->taxInclusiveAmount;
    }

    /**
     * Sets a new taxInclusiveAmount
     *
     * BBIE
     *  Monetary Total. Tax Inclusive Amount. Amount
     *  The monetary amount including taxes; the sum of payable amount and prepaid amount.
     *  0..1
     *  Monetary Total
     *  Tax Inclusive Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxInclusiveAmount $taxInclusiveAmount
     * @return self
     */
    public function setTaxInclusiveAmount(\horstoeko\ubl\entities\cbc\TaxInclusiveAmount $taxInclusiveAmount)
    {
        $this->taxInclusiveAmount = $taxInclusiveAmount;
        return $this;
    }

    /**
     * Gets as allowanceTotalAmount
     *
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AllowanceTotalAmount
     */
    public function getAllowanceTotalAmount()
    {
        return $this->allowanceTotalAmount;
    }

    /**
     * Sets a new allowanceTotalAmount
     *
     * BBIE
     *  Monetary Total. Allowance_ Total Amount. Amount
     *  The total monetary amount of all allowances.
     *  0..1
     *  Monetary Total
     *  Allowance
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AllowanceTotalAmount $allowanceTotalAmount
     * @return self
     */
    public function setAllowanceTotalAmount(\horstoeko\ubl\entities\cbc\AllowanceTotalAmount $allowanceTotalAmount)
    {
        $this->allowanceTotalAmount = $allowanceTotalAmount;
        return $this;
    }

    /**
     * Gets as chargeTotalAmount
     *
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ChargeTotalAmount
     */
    public function getChargeTotalAmount()
    {
        return $this->chargeTotalAmount;
    }

    /**
     * Sets a new chargeTotalAmount
     *
     * BBIE
     *  Monetary Total. Charge_ Total Amount. Amount
     *  The total monetary amount of all charges.
     *  0..1
     *  Monetary Total
     *  Charge
     *  Total Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ChargeTotalAmount $chargeTotalAmount
     * @return self
     */
    public function setChargeTotalAmount(\horstoeko\ubl\entities\cbc\ChargeTotalAmount $chargeTotalAmount)
    {
        $this->chargeTotalAmount = $chargeTotalAmount;
        return $this;
    }

    /**
     * Gets as prepaidAmount
     *
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PrepaidAmount
     */
    public function getPrepaidAmount()
    {
        return $this->prepaidAmount;
    }

    /**
     * Sets a new prepaidAmount
     *
     * BBIE
     *  Monetary Total. Prepaid Amount. Amount
     *  The total prepaid monetary amount.
     *  0..1
     *  Monetary Total
     *  Prepaid Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PrepaidAmount $prepaidAmount
     * @return self
     */
    public function setPrepaidAmount(\horstoeko\ubl\entities\cbc\PrepaidAmount $prepaidAmount)
    {
        $this->prepaidAmount = $prepaidAmount;
        return $this;
    }

    /**
     * Gets as payableRoundingAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PayableRoundingAmount
     */
    public function getPayableRoundingAmount()
    {
        return $this->payableRoundingAmount;
    }

    /**
     * Sets a new payableRoundingAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Rounding Amount. Amount
     *  The rounding amount (positive or negative) added to produce the line extension amount.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Rounding Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PayableRoundingAmount $payableRoundingAmount
     * @return self
     */
    public function setPayableRoundingAmount(\horstoeko\ubl\entities\cbc\PayableRoundingAmount $payableRoundingAmount)
    {
        $this->payableRoundingAmount = $payableRoundingAmount;
        return $this;
    }

    /**
     * Gets as payableAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PayableAmount
     */
    public function getPayableAmount()
    {
        return $this->payableAmount;
    }

    /**
     * Sets a new payableAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Amount. Amount
     *  The amount of the monetary total to be paid.
     *  1
     *  Monetary Total
     *  Payable
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PayableAmount $payableAmount
     * @return self
     */
    public function setPayableAmount(\horstoeko\ubl\entities\cbc\PayableAmount $payableAmount)
    {
        $this->payableAmount = $payableAmount;
        return $this;
    }

    /**
     * Gets as payableAlternativeAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PayableAlternativeAmount
     */
    public function getPayableAlternativeAmount()
    {
        return $this->payableAlternativeAmount;
    }

    /**
     * Sets a new payableAlternativeAmount
     *
     * BBIE
     *  Monetary Total. Payable_ Alternative Amount. Amount
     *  The amount of the monetary total to be paid, expressed in an alternative currency.
     *  0..1
     *  Monetary Total
     *  Payable
     *  Alternative Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PayableAlternativeAmount $payableAlternativeAmount
     * @return self
     */
    public function setPayableAlternativeAmount(\horstoeko\ubl\entities\cbc\PayableAlternativeAmount $payableAlternativeAmount)
    {
        $this->payableAlternativeAmount = $payableAlternativeAmount;
        return $this;
    }


}

