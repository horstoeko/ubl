<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing RenewalType
 *
 * ABIE
 *  Renewal. Details
 *  A class to describe the renewal of a commercial arrangement, such as a contract or licence fee.
 *  Renewal
 * XSD Type: RenewalType
 */
class RenewalType
{

    /**
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\Period $period
     */
    private $period = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
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
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
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
     * Gets as period
     *
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\Period $period
     * @return self
     */
    public function setPeriod(\horstoeko\ubl\entities\cac\Period $period)
    {
        $this->period = $period;
        return $this;
    }


}

