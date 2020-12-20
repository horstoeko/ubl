<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing WorkPhaseReferenceType
 *
 * ABIE
 *  Work Phase Reference. Details
 *  A class that refers to a phase of work. Used for instance to specify what part of the contract the billing is referring to.
 *  Work Phase Reference
 * XSD Type: WorkPhaseReferenceType
 */
class WorkPhaseReferenceType
{

    /**
     * BBIE
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\WorkPhaseCode $workPhaseCode
     */
    private $workPhaseCode = null;

    /**
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\WorkPhase[] $workPhase
     */
    private $workPhase = [
        
    ];

    /**
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ProgressPercent $progressPercent
     */
    private $progressPercent = null;

    /**
     * BBIE
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\WorkOrderDocumentReference[] $workOrderDocumentReference
     */
    private $workOrderDocumentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
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
     *  Work Phase Reference. Identifier
     *  An identifier for this phase of work.
     *  0..1
     *  Work Phase Reference
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
     * Gets as workPhaseCode
     *
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\WorkPhaseCode
     */
    public function getWorkPhaseCode()
    {
        return $this->workPhaseCode;
    }

    /**
     * Sets a new workPhaseCode
     *
     * BBIE
     *  Work Phase Reference. Work Phase Code. Code
     *  A code signifying this phase of work.
     *  0..1
     *  Work Phase Reference
     *  Work Phase Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\WorkPhaseCode $workPhaseCode
     * @return self
     */
    public function setWorkPhaseCode(\horstoeko\ubl\entities\cbc\WorkPhaseCode $workPhaseCode)
    {
        $this->workPhaseCode = $workPhaseCode;
        return $this;
    }

    /**
     * Adds as workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\WorkPhase $workPhase
     */
    public function addToWorkPhase(\horstoeko\ubl\entities\cbc\WorkPhase $workPhase)
    {
        $this->workPhase[] = $workPhase;
        return $this;
    }

    /**
     * isset workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetWorkPhase($index)
    {
        return isset($this->workPhase[$index]);
    }

    /**
     * unset workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetWorkPhase($index)
    {
        unset($this->workPhase[$index]);
    }

    /**
     * Gets as workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\WorkPhase[]
     */
    public function getWorkPhase()
    {
        return $this->workPhase;
    }

    /**
     * Sets a new workPhase
     *
     * BBIE
     *  Work Phase Reference. Work Phase. Text
     *  Text describing this phase of work.
     *  0..n
     *  Work Phase Reference
     *  Work Phase
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\WorkPhase[] $workPhase
     * @return self
     */
    public function setWorkPhase(array $workPhase)
    {
        $this->workPhase = $workPhase;
        return $this;
    }

    /**
     * Gets as progressPercent
     *
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ProgressPercent
     */
    public function getProgressPercent()
    {
        return $this->progressPercent;
    }

    /**
     * Sets a new progressPercent
     *
     * BBIE
     *  Work Phase Reference. Progress Percent. Percent
     *  The progress percentage of the work phase.
     *  0..1
     *  Work Phase Reference
     *  Progress Percent
     *  Percent
     *  Percent. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ProgressPercent $progressPercent
     * @return self
     */
    public function setProgressPercent(\horstoeko\ubl\entities\cbc\ProgressPercent $progressPercent)
    {
        $this->progressPercent = $progressPercent;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * BBIE
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * BBIE
     *  Work Phase Reference. Start Date. Date
     *  The date on which this phase of work begins.
     *  0..1
     *  Work Phase Reference
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * BBIE
     *  Work Phase Reference. End Date. Date
     *  The date on which this phase of work ends.
     *  0..1
     *  Work Phase Reference
     *  End Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Adds as workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\WorkOrderDocumentReference $workOrderDocumentReference
     */
    public function addToWorkOrderDocumentReference(\horstoeko\ubl\entities\cac\WorkOrderDocumentReference $workOrderDocumentReference)
    {
        $this->workOrderDocumentReference[] = $workOrderDocumentReference;
        return $this;
    }

    /**
     * isset workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetWorkOrderDocumentReference($index)
    {
        return isset($this->workOrderDocumentReference[$index]);
    }

    /**
     * unset workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetWorkOrderDocumentReference($index)
    {
        unset($this->workOrderDocumentReference[$index]);
    }

    /**
     * Gets as workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\WorkOrderDocumentReference[]
     */
    public function getWorkOrderDocumentReference()
    {
        return $this->workOrderDocumentReference;
    }

    /**
     * Sets a new workOrderDocumentReference
     *
     * ASBIE
     *  Work Phase Reference. Work Order_ Document Reference. Document Reference
     *  A reference to a document regarding the work order for the project in which this phase of work takes place.
     *  0..n
     *  Work Phase Reference
     *  Work Order
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\WorkOrderDocumentReference[] $workOrderDocumentReference
     * @return self
     */
    public function setWorkOrderDocumentReference(array $workOrderDocumentReference)
    {
        $this->workOrderDocumentReference = $workOrderDocumentReference;
        return $this;
    }


}

