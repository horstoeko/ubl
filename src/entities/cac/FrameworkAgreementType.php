<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing FrameworkAgreementType
 *
 * ABIE
 *  Framework Agreement. Details
 *  A class to describe a tendering framework agreement.
 *  Framework Agreement
 * XSD Type: FrameworkAgreementType
 */
class FrameworkAgreementType
{

    /**
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExpectedOperatorQuantity $expectedOperatorQuantity
     */
    private $expectedOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MaximumOperatorQuantity $maximumOperatorQuantity
     */
    private $maximumOperatorQuantity = null;

    /**
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Justification[] $justification
     */
    private $justification = [
        
    ];

    /**
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Frequency[] $frequency
     */
    private $frequency = [
        
    ];

    /**
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\DurationPeriod $durationPeriod
     */
    private $durationPeriod = null;

    /**
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @var \horstoeko\ubl\entities\cac\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     */
    private $subsequentProcessTenderRequirement = [
        
    ];

    /**
     * Gets as expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExpectedOperatorQuantity
     */
    public function getExpectedOperatorQuantity()
    {
        return $this->expectedOperatorQuantity;
    }

    /**
     * Sets a new expectedOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Expected_ Operator. Quantity
     *  The number of economic operators expected to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Expected
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ExpectedOperatorQuantity $expectedOperatorQuantity
     * @return self
     */
    public function setExpectedOperatorQuantity(\horstoeko\ubl\entities\cbc\ExpectedOperatorQuantity $expectedOperatorQuantity)
    {
        $this->expectedOperatorQuantity = $expectedOperatorQuantity;
        return $this;
    }

    /**
     * Gets as maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MaximumOperatorQuantity
     */
    public function getMaximumOperatorQuantity()
    {
        return $this->maximumOperatorQuantity;
    }

    /**
     * Sets a new maximumOperatorQuantity
     *
     * BBIE
     *  Framework Agreement. Maximum_ Operator. Quantity
     *  The maximum number of economic operators allowed to participate in this framework agreement.
     *  0..1
     *  Framework Agreement
     *  Maximum
     *  Operator
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\MaximumOperatorQuantity $maximumOperatorQuantity
     * @return self
     */
    public function setMaximumOperatorQuantity(\horstoeko\ubl\entities\cbc\MaximumOperatorQuantity $maximumOperatorQuantity)
    {
        $this->maximumOperatorQuantity = $maximumOperatorQuantity;
        return $this;
    }

    /**
     * Adds as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Justification $justification
     */
    public function addToJustification(\horstoeko\ubl\entities\cbc\Justification $justification)
    {
        $this->justification[] = $justification;
        return $this;
    }

    /**
     * isset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetJustification($index)
    {
        return isset($this->justification[$index]);
    }

    /**
     * unset justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetJustification($index)
    {
        unset($this->justification[$index]);
    }

    /**
     * Gets as justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Justification[]
     */
    public function getJustification()
    {
        return $this->justification;
    }

    /**
     * Sets a new justification
     *
     * BBIE
     *  Framework Agreement. Justification. Text
     *  Text describing the justification for this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Justification
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Justification[] $justification
     * @return self
     */
    public function setJustification(array $justification)
    {
        $this->justification = $justification;
        return $this;
    }

    /**
     * Adds as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Frequency $frequency
     */
    public function addToFrequency(\horstoeko\ubl\entities\cbc\Frequency $frequency)
    {
        $this->frequency[] = $frequency;
        return $this;
    }

    /**
     * isset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetFrequency($index)
    {
        return isset($this->frequency[$index]);
    }

    /**
     * unset frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetFrequency($index)
    {
        unset($this->frequency[$index]);
    }

    /**
     * Gets as frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Frequency[]
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * BBIE
     *  Framework Agreement. Frequency. Text
     *  Text describing the frequency with which subsequent contracts will be awarded.
     *  0..n
     *  Framework Agreement
     *  Frequency
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Frequency[] $frequency
     * @return self
     */
    public function setFrequency(array $frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\DurationPeriod
     */
    public function getDurationPeriod()
    {
        return $this->durationPeriod;
    }

    /**
     * Sets a new durationPeriod
     *
     * ASBIE
     *  Framework Agreement. Duration_ Period. Period
     *  The period during which this framework agreement applies.
     *  0..1
     *  Framework Agreement
     *  Duration
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\DurationPeriod $durationPeriod
     * @return self
     */
    public function setDurationPeriod(\horstoeko\ubl\entities\cac\DurationPeriod $durationPeriod)
    {
        $this->durationPeriod = $durationPeriod;
        return $this;
    }

    /**
     * Adds as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement
     */
    public function addToSubsequentProcessTenderRequirement(\horstoeko\ubl\entities\cac\SubsequentProcessTenderRequirement $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement[] = $subsequentProcessTenderRequirement;
        return $this;
    }

    /**
     * isset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSubsequentProcessTenderRequirement($index)
    {
        return isset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * unset subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSubsequentProcessTenderRequirement($index)
    {
        unset($this->subsequentProcessTenderRequirement[$index]);
    }

    /**
     * Gets as subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @return \horstoeko\ubl\entities\cac\SubsequentProcessTenderRequirement[]
     */
    public function getSubsequentProcessTenderRequirement()
    {
        return $this->subsequentProcessTenderRequirement;
    }

    /**
     * Sets a new subsequentProcessTenderRequirement
     *
     * ASBIE
     *  Framework Agreement. Subsequent Process_ Tender Requirement. Tender Requirement
     *  A tender requirement intended for consumption by downstream tendering processes derived from the establishment of this framework agreement.
     *  0..n
     *  Framework Agreement
     *  Subsequent Process
     *  Tender Requirement
     *  Tender Requirement
     *  Tender Requirement
     *  Curricula required
     *
     * @param  \horstoeko\ubl\entities\cac\SubsequentProcessTenderRequirement[] $subsequentProcessTenderRequirement
     * @return self
     */
    public function setSubsequentProcessTenderRequirement(array $subsequentProcessTenderRequirement)
    {
        $this->subsequentProcessTenderRequirement = $subsequentProcessTenderRequirement;
        return $this;
    }


}

