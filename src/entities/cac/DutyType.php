<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing DutyType
 *
 * ABIE
 *  Duty. Details
 *  The charging rate used for both call charging and time dependent charging
 *  Duty
 * XSD Type: DutyType
 */
class DutyType
{

    /**
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @var \horstoeko\ubl\entities\cbc\Duty $duty
     */
    private $duty = null;

    /**
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @var \horstoeko\ubl\entities\cbc\DutyCode $dutyCode
     */
    private $dutyCode = null;

    /**
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
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
     *  Duty. Amount
     *  The amount of this duty.
     *  1
     *  Duty
     *  Amount
     *  Amount
     *  Amount. Type
     *  88.23
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
     * Gets as duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @return \horstoeko\ubl\entities\cbc\Duty
     */
    public function getDuty()
    {
        return $this->duty;
    }

    /**
     * Sets a new duty
     *
     * BBIE
     *  Duty. Duty. Text
     *  Text describing this duty.
     *  0..1
     *  Duty
     *  Duty
     *  Text
     *  Text. Type
     *  ConnectionFee
     *
     * @param  \horstoeko\ubl\entities\cbc\Duty $duty
     * @return self
     */
    public function setDuty(\horstoeko\ubl\entities\cbc\Duty $duty)
    {
        $this->duty = $duty;
        return $this;
    }

    /**
     * Gets as dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @return \horstoeko\ubl\entities\cbc\DutyCode
     */
    public function getDutyCode()
    {
        return $this->dutyCode;
    }

    /**
     * Sets a new dutyCode
     *
     * BBIE
     *  Duty. Duty Code. Code
     *  The type of this charge rate, expressed as a code.
     *  0..1
     *  Duty
     *  Duty Code
     *  Code
     *  Code. Type
     *  ConnectionFee
     *
     * @param  \horstoeko\ubl\entities\cbc\DutyCode $dutyCode
     * @return self
     */
    public function setDutyCode(\horstoeko\ubl\entities\cbc\DutyCode $dutyCode)
    {
        $this->dutyCode = $dutyCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \horstoeko\ubl\entities\cac\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Duty. Tax Category
     *  The tax category applicable to this duty.
     *  0..1
     *  Duty
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param  \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\horstoeko\ubl\entities\cac\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }


}

