<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SubcontractTermsType
 *
 * ABIE
 *  Subcontract Terms. Details
 *  A class to describe subcontract terms for a tendering process.
 *  Subcontract Terms
 * XSD Type: SubcontractTermsType
 */
class SubcontractTermsType
{

    /**
     * BBIE
     *  Subcontract Terms. Rate
     *  MF: I agree with the query. Rate?
     *  0..1
     *  Subcontract Terms
     *  Rate
     *  Rate
     *  Rate. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Rate $rate
     */
    private $rate = null;

    /**
     * BBIE
     *  Subcontract Terms. Unknown_ Price. Indicator
     *  An indicator that the subcontract price is known (true) or not (false).
     *  0..1
     *  Subcontract Terms
     *  Unknown
     *  Price
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $unknownPriceIndicator
     */
    private $unknownPriceIndicator = null;

    /**
     * BBIE
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     *  Subcontract Terms. Amount
     *  The monetary amount assigned to the subcontracted task.
     *  0..1
     *  Subcontract Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Subcontract Terms. Subcontracting Conditions Code. Code
     *  A code specifying the conditions for subcontracting.
     *  0..1
     *  Subcontract Terms
     *  Subcontracting Conditions Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SubcontractingConditionsCode $subcontractingConditionsCode
     */
    private $subcontractingConditionsCode = null;

    /**
     * BBIE
     *  Subcontract Terms. Maximum_ Percent. Percent
     *  The maximum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Maximum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MaximumPercent $maximumPercent
     */
    private $maximumPercent = null;

    /**
     * BBIE
     *  Subcontract Terms. Minimum_ Percent. Percent
     *  The minimum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Minimum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MinimumPercent $minimumPercent
     */
    private $minimumPercent = null;

    /**
     * Gets as rate
     *
     * BBIE
     *  Subcontract Terms. Rate
     *  MF: I agree with the query. Rate?
     *  0..1
     *  Subcontract Terms
     *  Rate
     *  Rate
     *  Rate. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Rate
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * BBIE
     *  Subcontract Terms. Rate
     *  MF: I agree with the query. Rate?
     *  0..1
     *  Subcontract Terms
     *  Rate
     *  Rate
     *  Rate. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Rate $rate
     * @return self
     */
    public function setRate(\horstoeko\ubl\entities\cbc\Rate $rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Gets as unknownPriceIndicator
     *
     * BBIE
     *  Subcontract Terms. Unknown_ Price. Indicator
     *  An indicator that the subcontract price is known (true) or not (false).
     *  0..1
     *  Subcontract Terms
     *  Unknown
     *  Price
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getUnknownPriceIndicator()
    {
        return $this->unknownPriceIndicator;
    }

    /**
     * Sets a new unknownPriceIndicator
     *
     * BBIE
     *  Subcontract Terms. Unknown_ Price. Indicator
     *  An indicator that the subcontract price is known (true) or not (false).
     *  0..1
     *  Subcontract Terms
     *  Unknown
     *  Price
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $unknownPriceIndicator
     * @return self
     */
    public function setUnknownPriceIndicator($unknownPriceIndicator)
    {
        $this->unknownPriceIndicator = $unknownPriceIndicator;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     *  Subcontract Terms. Description. Text
     *  Text describing the subcontract terms.
     *  0..n
     *  Subcontract Terms
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
     * Gets as amount
     *
     * BBIE
     *  Subcontract Terms. Amount
     *  The monetary amount assigned to the subcontracted task.
     *  0..1
     *  Subcontract Terms
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
     *  Subcontract Terms. Amount
     *  The monetary amount assigned to the subcontracted task.
     *  0..1
     *  Subcontract Terms
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
     * Gets as subcontractingConditionsCode
     *
     * BBIE
     *  Subcontract Terms. Subcontracting Conditions Code. Code
     *  A code specifying the conditions for subcontracting.
     *  0..1
     *  Subcontract Terms
     *  Subcontracting Conditions Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SubcontractingConditionsCode
     */
    public function getSubcontractingConditionsCode()
    {
        return $this->subcontractingConditionsCode;
    }

    /**
     * Sets a new subcontractingConditionsCode
     *
     * BBIE
     *  Subcontract Terms. Subcontracting Conditions Code. Code
     *  A code specifying the conditions for subcontracting.
     *  0..1
     *  Subcontract Terms
     *  Subcontracting Conditions Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SubcontractingConditionsCode $subcontractingConditionsCode
     * @return self
     */
    public function setSubcontractingConditionsCode(\horstoeko\ubl\entities\cbc\SubcontractingConditionsCode $subcontractingConditionsCode)
    {
        $this->subcontractingConditionsCode = $subcontractingConditionsCode;
        return $this;
    }

    /**
     * Gets as maximumPercent
     *
     * BBIE
     *  Subcontract Terms. Maximum_ Percent. Percent
     *  The maximum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Maximum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MaximumPercent
     */
    public function getMaximumPercent()
    {
        return $this->maximumPercent;
    }

    /**
     * Sets a new maximumPercent
     *
     * BBIE
     *  Subcontract Terms. Maximum_ Percent. Percent
     *  The maximum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Maximum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MaximumPercent $maximumPercent
     * @return self
     */
    public function setMaximumPercent(\horstoeko\ubl\entities\cbc\MaximumPercent $maximumPercent)
    {
        $this->maximumPercent = $maximumPercent;
        return $this;
    }

    /**
     * Gets as minimumPercent
     *
     * BBIE
     *  Subcontract Terms. Minimum_ Percent. Percent
     *  The minimum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Minimum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MinimumPercent
     */
    public function getMinimumPercent()
    {
        return $this->minimumPercent;
    }

    /**
     * Sets a new minimumPercent
     *
     * BBIE
     *  Subcontract Terms. Minimum_ Percent. Percent
     *  The minimum percentage allowed to be subcontracted.
     *  0..1
     *  Subcontract Terms
     *  Minimum
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MinimumPercent $minimumPercent
     * @return self
     */
    public function setMinimumPercent(\horstoeko\ubl\entities\cbc\MinimumPercent $minimumPercent)
    {
        $this->minimumPercent = $minimumPercent;
        return $this;
    }


}

