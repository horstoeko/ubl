<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing FinancialGuaranteeType
 *
 * ABIE
 *  Financial Guarantee. Details
 *  A class to describe the bond guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
 *  Financial Guarantee
 * XSD Type: FinancialGuaranteeType
 */
class FinancialGuaranteeType
{

    /**
     * BBIE
     *  Financial Guarantee. Guarantee Type Code. Code
     *  A code signifying the type of financial guarantee. For instance "Provisional Guarantee" or "Final Guarantee"
     *  1
     *  Financial Guarantee
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\GuaranteeTypeCode $guaranteeTypeCode
     */
    private $guaranteeTypeCode = null;

    /**
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Financial Guarantee. Liability. Amount
     *  The amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LiabilityAmount $liabilityAmount
     */
    private $liabilityAmount = null;

    /**
     * BBIE
     *  Financial Guarantee. Amount. Rate
     *  The rate used to calculate the amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Amount
     *  Rate
     *  Rate. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AmountRate $amountRate
     */
    private $amountRate = null;

    /**
     * ASBIE
     *  Financial Guarantee. Constitution_ Period. Period
     *  The period during the tendering process to which this financial guarantee has to be settled.
     *  0..1
     *  Financial Guarantee
     *  Constitution
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ConstitutionPeriod $constitutionPeriod
     */
    private $constitutionPeriod = null;

    /**
     * Gets as guaranteeTypeCode
     *
     * BBIE
     *  Financial Guarantee. Guarantee Type Code. Code
     *  A code signifying the type of financial guarantee. For instance "Provisional Guarantee" or "Final Guarantee"
     *  1
     *  Financial Guarantee
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\GuaranteeTypeCode
     */
    public function getGuaranteeTypeCode()
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * Sets a new guaranteeTypeCode
     *
     * BBIE
     *  Financial Guarantee. Guarantee Type Code. Code
     *  A code signifying the type of financial guarantee. For instance "Provisional Guarantee" or "Final Guarantee"
     *  1
     *  Financial Guarantee
     *  Guarantee Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\GuaranteeTypeCode $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode(\horstoeko\ubl\entities\cbc\GuaranteeTypeCode $guaranteeTypeCode)
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Financial Guarantee. Description. Text
     *  Text describing this financial guarantee.
     *  0..n
     *  Financial Guarantee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as liabilityAmount
     *
     * BBIE
     *  Financial Guarantee. Liability. Amount
     *  The amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LiabilityAmount
     */
    public function getLiabilityAmount()
    {
        return $this->liabilityAmount;
    }

    /**
     * Sets a new liabilityAmount
     *
     * BBIE
     *  Financial Guarantee. Liability. Amount
     *  The amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Liability
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LiabilityAmount $liabilityAmount
     * @return self
     */
    public function setLiabilityAmount(\horstoeko\ubl\entities\cbc\LiabilityAmount $liabilityAmount)
    {
        $this->liabilityAmount = $liabilityAmount;
        return $this;
    }

    /**
     * Gets as amountRate
     *
     * BBIE
     *  Financial Guarantee. Amount. Rate
     *  The rate used to calculate the amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Amount
     *  Rate
     *  Rate. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AmountRate
     */
    public function getAmountRate()
    {
        return $this->amountRate;
    }

    /**
     * Sets a new amountRate
     *
     * BBIE
     *  Financial Guarantee. Amount. Rate
     *  The rate used to calculate the amount of liability in this financial guarantee.
     *  0..1
     *  Financial Guarantee
     *  Amount
     *  Rate
     *  Rate. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AmountRate $amountRate
     * @return self
     */
    public function setAmountRate(\horstoeko\ubl\entities\cbc\AmountRate $amountRate)
    {
        $this->amountRate = $amountRate;
        return $this;
    }

    /**
     * Gets as constitutionPeriod
     *
     * ASBIE
     *  Financial Guarantee. Constitution_ Period. Period
     *  The period during the tendering process to which this financial guarantee has to be settled.
     *  0..1
     *  Financial Guarantee
     *  Constitution
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ConstitutionPeriod
     */
    public function getConstitutionPeriod()
    {
        return $this->constitutionPeriod;
    }

    /**
     * Sets a new constitutionPeriod
     *
     * ASBIE
     *  Financial Guarantee. Constitution_ Period. Period
     *  The period during the tendering process to which this financial guarantee has to be settled.
     *  0..1
     *  Financial Guarantee
     *  Constitution
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ConstitutionPeriod $constitutionPeriod
     * @return self
     */
    public function setConstitutionPeriod(\horstoeko\ubl\entities\cac\ConstitutionPeriod $constitutionPeriod)
    {
        $this->constitutionPeriod = $constitutionPeriod;
        return $this;
    }


}

