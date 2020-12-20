<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PaymentType
 *
 * ABIE
 *  Payment. Details
 *  A class to describe a payment.
 *  Payment
 * XSD Type: PaymentType
 */
class PaymentType
{

    /**
     * BBIE
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaidAmount $paidAmount
     */
    private $paidAmount = null;

    /**
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $paidDate
     */
    private $paidDate = null;

    /**
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $paidTime
     */
    private $paidTime = null;

    /**
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InstructionID $instructionID
     */
    private $instructionID = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
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
     *  Payment. Identifier
     *  An identifier for this payment.
     *  0..1
     *  Payment
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
     * Gets as paidAmount
     *
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaidAmount
     */
    public function getPaidAmount()
    {
        return $this->paidAmount;
    }

    /**
     * Sets a new paidAmount
     *
     * BBIE
     *  Payment. Paid_ Amount. Amount
     *  The amount of this payment.
     *  0..1
     *  Payment
     *  Paid
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PaidAmount $paidAmount
     * @return self
     */
    public function setPaidAmount(\horstoeko\ubl\entities\cbc\PaidAmount $paidAmount)
    {
        $this->paidAmount = $paidAmount;
        return $this;
    }

    /**
     * Gets as receivedDate
     *
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Sets a new receivedDate
     *
     * BBIE
     *  Payment. Received_ Date. Date
     *  The date on which this payment was received.
     *  0..1
     *  Payment
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $receivedDate
     * @return self
     */
    public function setReceivedDate(\DateTime $receivedDate)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * Gets as paidDate
     *
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getPaidDate()
    {
        return $this->paidDate;
    }

    /**
     * Sets a new paidDate
     *
     * BBIE
     *  Payment. Paid_ Date. Date
     *  The date on which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $paidDate
     * @return self
     */
    public function setPaidDate(\DateTime $paidDate)
    {
        $this->paidDate = $paidDate;
        return $this;
    }

    /**
     * Gets as paidTime
     *
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getPaidTime()
    {
        return $this->paidTime;
    }

    /**
     * Sets a new paidTime
     *
     * BBIE
     *  Payment. Paid_ Time. Time
     *  The time at which this payment was made.
     *  0..1
     *  Payment
     *  Paid
     *  Time
     *  Time
     *  Time. Type
     *
     * @param  \DateTime $paidTime
     * @return self
     */
    public function setPaidTime(\DateTime $paidTime)
    {
        $this->paidTime = $paidTime;
        return $this;
    }

    /**
     * Gets as instructionID
     *
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InstructionID
     */
    public function getInstructionID()
    {
        return $this->instructionID;
    }

    /**
     * Sets a new instructionID
     *
     * BBIE
     *  Payment. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(\horstoeko\ubl\entities\cbc\InstructionID $instructionID)
    {
        $this->instructionID = $instructionID;
        return $this;
    }


}

