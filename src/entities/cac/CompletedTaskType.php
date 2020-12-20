<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CompletedTaskType
 *
 * ABIE
 *  Completed Task. Details
 *  A class to describe the completion of a specific task in the tendering process.
 *  Completed Task
 * XSD Type: CompletedTaskType
 */
class CompletedTaskType
{

    /**
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AnnualAverageAmount $annualAverageAmount
     */
    private $annualAverageAmount = null;

    /**
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TotalTaskAmount $totalTaskAmount
     */
    private $totalTaskAmount = null;

    /**
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PartyCapacityAmount $partyCapacityAmount
     */
    private $partyCapacityAmount = null;

    /**
     * BBIE
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \horstoeko\ubl\entities\cac\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * ASBIE
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\RecipientCustomerParty $recipientCustomerParty
     */
    private $recipientCustomerParty = null;

    /**
     * Gets as annualAverageAmount
     *
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AnnualAverageAmount
     */
    public function getAnnualAverageAmount()
    {
        return $this->annualAverageAmount;
    }

    /**
     * Sets a new annualAverageAmount
     *
     * BBIE
     *  Completed Task. Annual_ Average. Amount
     *  The average monetary amount of a task such as this completed task.
     *  0..1
     *  Completed Task
     *  Annual
     *  Average
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AnnualAverageAmount $annualAverageAmount
     * @return self
     */
    public function setAnnualAverageAmount(\horstoeko\ubl\entities\cbc\AnnualAverageAmount $annualAverageAmount)
    {
        $this->annualAverageAmount = $annualAverageAmount;
        return $this;
    }

    /**
     * Gets as totalTaskAmount
     *
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TotalTaskAmount
     */
    public function getTotalTaskAmount()
    {
        return $this->totalTaskAmount;
    }

    /**
     * Sets a new totalTaskAmount
     *
     * BBIE
     *  Completed Task. Total Task. Amount
     *  The actual total monetary amount of this completed task.
     *  0..1
     *  Completed Task
     *  Total Task
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TotalTaskAmount $totalTaskAmount
     * @return self
     */
    public function setTotalTaskAmount(\horstoeko\ubl\entities\cbc\TotalTaskAmount $totalTaskAmount)
    {
        $this->totalTaskAmount = $totalTaskAmount;
        return $this;
    }

    /**
     * Gets as partyCapacityAmount
     *
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PartyCapacityAmount
     */
    public function getPartyCapacityAmount()
    {
        return $this->partyCapacityAmount;
    }

    /**
     * Sets a new partyCapacityAmount
     *
     * BBIE
     *  Completed Task. Party Capacity. Amount
     *  A monetary amount corresponding to the financial capacity of the party that carried out this completed task.
     *  0..1
     *  Completed Task
     *  Party Capacity
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PartyCapacityAmount $partyCapacityAmount
     * @return self
     */
    public function setPartyCapacityAmount(\horstoeko\ubl\entities\cbc\PartyCapacityAmount $partyCapacityAmount)
    {
        $this->partyCapacityAmount = $partyCapacityAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Description $description
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
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
     *  Completed Task. Description. Text
     *  Text describing this completed task.
     *  0..n
     *  Completed Task
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\horstoeko\ubl\entities\cac\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \horstoeko\ubl\entities\cac\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Completed Task. Evidence Supplied
     *  The evidence justifying a designation of "complete" for this task.
     *  0..n
     *  Completed Task
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param  \horstoeko\ubl\entities\cac\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
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
     *  Completed Task. Period
     *  The period in which this completed task was performed.
     *  0..1
     *  Completed Task
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

    /**
     * Gets as recipientCustomerParty
     *
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\RecipientCustomerParty
     */
    public function getRecipientCustomerParty()
    {
        return $this->recipientCustomerParty;
    }

    /**
     * Sets a new recipientCustomerParty
     *
     * ASBIE
     *  Completed Task. Recipient_ Customer Party. Customer Party
     *  The original customer for this completed task.
     *  0..1
     *  Completed Task
     *  Recipient
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param  \horstoeko\ubl\entities\cac\RecipientCustomerParty $recipientCustomerParty
     * @return self
     */
    public function setRecipientCustomerParty(\horstoeko\ubl\entities\cac\RecipientCustomerParty $recipientCustomerParty)
    {
        $this->recipientCustomerParty = $recipientCustomerParty;
        return $this;
    }


}

