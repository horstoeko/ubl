<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ContractType
 *
 * ABIE
 *  Contract. Details
 *  A class to describe a contract.
 *  Contract
 * XSD Type: ContractType
 */
class ContractType
{

    /**
     * BBIE
     *  Contract. Identifier
     *  An identifier for this contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CC23
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Contract. Nomination Date. Date
     *  In a transportation contract, the deadline date by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Contract
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $nominationDate
     */
    private $nominationDate = null;

    /**
     * BBIE
     *  Contract. Nomination Time. Time
     *  In a transportation contract, the deadline time by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Contract
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $nominationTime
     */
    private $nominationTime = null;

    /**
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of this contract, expressed as a code, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ContractTypeCode $contractTypeCode
     */
    private $contractTypeCode = null;

    /**
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of this contract, expressed as text, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ContractType $contractType
     */
    private $contractType = null;

    /**
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Contract. Version. Identifier
     *  An identifier for the current version of this contract.
     *  0..1
     *  Contract
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     *  Contract. Validity_ Period. Period
     *  The period during which this contract is valid.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Contract. Nomination_ Period. Period
     *  In a transportation contract, the period required to book the services specified in the contract before the services can begin.
     *  0..1
     *  Contract
     *  Nomination
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\NominationPeriod $nominationPeriod
     */
    private $nominationPeriod = null;

    /**
     * ASBIE
     *  Contract. Contractual_ Delivery. Delivery
     *  In a transportation contract, the delivery of the services required to book the services specified in the contract.
     *  0..1
     *  Contract
     *  Contractual
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \horstoeko\ubl\entities\cac\ContractualDelivery $contractualDelivery
     */
    private $contractualDelivery = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Contract. Identifier
     *  An identifier for this contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CC23
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
     *  Contract. Identifier
     *  An identifier for this contract.
     *  0..1
     *  Contract
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CC23
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
     * Gets as issueDate
     *
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Contract. Issue Date. Date
     *  The date on which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Contract. Issue Time. Time
     *  The time at which this contract was issued.
     *  0..1
     *  Contract
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as nominationDate
     *
     * BBIE
     *  Contract. Nomination Date. Date
     *  In a transportation contract, the deadline date by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Contract
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getNominationDate()
    {
        return $this->nominationDate;
    }

    /**
     * Sets a new nominationDate
     *
     * BBIE
     *  Contract. Nomination Date. Date
     *  In a transportation contract, the deadline date by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Contract
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $nominationDate
     * @return self
     */
    public function setNominationDate(\DateTime $nominationDate)
    {
        $this->nominationDate = $nominationDate;
        return $this;
    }

    /**
     * Gets as nominationTime
     *
     * BBIE
     *  Contract. Nomination Time. Time
     *  In a transportation contract, the deadline time by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Contract
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getNominationTime()
    {
        return $this->nominationTime;
    }

    /**
     * Sets a new nominationTime
     *
     * BBIE
     *  Contract. Nomination Time. Time
     *  In a transportation contract, the deadline time by which the services referred to in the transport execution plan have to be booked. For example, if this service is a carrier service scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Contract
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $nominationTime
     * @return self
     */
    public function setNominationTime(\DateTime $nominationTime)
    {
        $this->nominationTime = $nominationTime;
        return $this;
    }

    /**
     * Gets as contractTypeCode
     *
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of this contract, expressed as a code, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ContractTypeCode
     */
    public function getContractTypeCode()
    {
        return $this->contractTypeCode;
    }

    /**
     * Sets a new contractTypeCode
     *
     * BBIE
     *  Contract. Contract Type Code. Code
     *  The type of this contract, expressed as a code, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ContractTypeCode $contractTypeCode
     * @return self
     */
    public function setContractTypeCode(\horstoeko\ubl\entities\cbc\ContractTypeCode $contractTypeCode)
    {
        $this->contractTypeCode = $contractTypeCode;
        return $this;
    }

    /**
     * Gets as contractType
     *
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of this contract, expressed as text, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ContractType
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Sets a new contractType
     *
     * BBIE
     *  Contract. Contract Type. Text
     *  The type of this contract, expressed as text, such as "Cost plus award fee" and "Cost plus fixed fee" from UNCEFACT Contract Type code list.
     *  0..1
     *  Contract
     *  Contract Type
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ContractType $contractType
     * @return self
     */
    public function setContractType(\horstoeko\ubl\entities\cbc\ContractType $contractType)
    {
        $this->contractType = $contractType;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Contract. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Contract
     *  Note
     *  Text
     *  Text. Type
     *  Remarks
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Contract. Version. Identifier
     *  An identifier for the current version of this contract.
     *  0..1
     *  Contract
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Contract. Version. Identifier
     *  An identifier for the current version of this contract.
     *  0..1
     *  Contract
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\VersionID $versionID
     * @return self
     */
    public function setVersionID(\horstoeko\ubl\entities\cbc\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     *  Contract. Description. Text
     *  Text describing this contract.
     *  0..n
     *  Contract
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
     * Gets as validityPeriod
     *
     * ASBIE
     *  Contract. Validity_ Period. Period
     *  The period during which this contract is valid.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Contract. Validity_ Period. Period
     *  The period during which this contract is valid.
     *  0..1
     *  Contract
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Contract. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..n
     *  Contract
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Gets as nominationPeriod
     *
     * ASBIE
     *  Contract. Nomination_ Period. Period
     *  In a transportation contract, the period required to book the services specified in the contract before the services can begin.
     *  0..1
     *  Contract
     *  Nomination
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\NominationPeriod
     */
    public function getNominationPeriod()
    {
        return $this->nominationPeriod;
    }

    /**
     * Sets a new nominationPeriod
     *
     * ASBIE
     *  Contract. Nomination_ Period. Period
     *  In a transportation contract, the period required to book the services specified in the contract before the services can begin.
     *  0..1
     *  Contract
     *  Nomination
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\NominationPeriod $nominationPeriod
     * @return self
     */
    public function setNominationPeriod(\horstoeko\ubl\entities\cac\NominationPeriod $nominationPeriod)
    {
        $this->nominationPeriod = $nominationPeriod;
        return $this;
    }

    /**
     * Gets as contractualDelivery
     *
     * ASBIE
     *  Contract. Contractual_ Delivery. Delivery
     *  In a transportation contract, the delivery of the services required to book the services specified in the contract.
     *  0..1
     *  Contract
     *  Contractual
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \horstoeko\ubl\entities\cac\ContractualDelivery
     */
    public function getContractualDelivery()
    {
        return $this->contractualDelivery;
    }

    /**
     * Sets a new contractualDelivery
     *
     * ASBIE
     *  Contract. Contractual_ Delivery. Delivery
     *  In a transportation contract, the delivery of the services required to book the services specified in the contract.
     *  0..1
     *  Contract
     *  Contractual
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \horstoeko\ubl\entities\cac\ContractualDelivery $contractualDelivery
     * @return self
     */
    public function setContractualDelivery(\horstoeko\ubl\entities\cac\ContractualDelivery $contractualDelivery)
    {
        $this->contractualDelivery = $contractualDelivery;
        return $this;
    }


}

