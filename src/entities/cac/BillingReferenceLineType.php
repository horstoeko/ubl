<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing BillingReferenceLineType
 *
 * ABIE
 *  Billing Reference Line. Details
 *  Information about a Billing Line.
 *  Billing Reference Line
 * XSD Type: BillingReferenceLineType
 */
class BillingReferenceLineType
{

    /**
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
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
     *  Billing Reference Line. Identifier
     *  An identifier for the Billing Line.
     *  1
     *  Billing Reference Line
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
     * Gets as amount
     *
     * BBIE
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
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
     *  Billing Reference Line. Amount
     *  The amount of the Billing Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Billing Reference Line
     *  Amount
     *  Amount
     *  Amount. Type
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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
     *  Billing Reference Line. Allowance Charge
     *  An association to Allowance Charge.
     *  0..n
     *  Billing Reference Line
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


}

