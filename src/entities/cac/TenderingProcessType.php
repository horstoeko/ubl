<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TenderingProcessType
 *
 * ABIE
 *  Tendering Process. Details
 *  A class to describe the process of a formal offer and response to execute work or supply goods at a stated price.
 *  Tendering Process
 * XSD Type: TenderingProcessType
 */
class TenderingProcessType
{

    /**
     * BBIE
     *  Tendering Process. Identifier
     *  An identifier for this tendering process.
     *  0..1
     *  Tendering Process
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tendering Process. Original_ Contracting System. Identifier
     *  When reopening a tendering process, the identifier of the original framework agreement or dynamic purchasing system.
     *  0..1
     *  Tendering Process
     *  Original
     *  Contracting System
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OriginalContractingSystemID $originalContractingSystemID
     */
    private $originalContractingSystemID = null;

    /**
     * BBIE
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NegotiationDescription[] $negotiationDescription
     */
    private $negotiationDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Process. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Tendering Process
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
     *
     * @var \horstoeko\ubl\entities\cbc\ProcedureCode $procedureCode
     */
    private $procedureCode = null;

    /**
     * BBIE
     *  Tendering Process. Urgency Code. Code
     *  A code signifying the urgency of this tendering process.
     *  0..1
     *  Tendering Process
     *  Urgency Code
     *  Code
     *  Code. Type
     *  Urgent, Normal, Emergency
     *
     * @var \horstoeko\ubl\entities\cbc\UrgencyCode $urgencyCode
     */
    private $urgencyCode = null;

    /**
     * BBIE
     *  Tendering Process. Expense Code. Code
     *  A code signifying the type of expense for this tendering process.
     *  0..1
     *  Tendering Process
     *  Expense Code
     *  Code
     *  Code. Type
     *  Normal, Anticipated
     *
     * @var \horstoeko\ubl\entities\cbc\ExpenseCode $expenseCode
     */
    private $expenseCode = null;

    /**
     * BBIE
     *  Tendering Process. Part Presentation Code. Code
     *  A code signifying the type of presentation of tenders required (e.g., one lot, multiple lots, or all the lots).
     *  0..1
     *  Tendering Process
     *  Part Presentation Code
     *  Code
     *  Code. Type
     *  One Lot, Multiple Lots, All Lots
     *
     * @var \horstoeko\ubl\entities\cbc\PartPresentationCode $partPresentationCode
     */
    private $partPresentationCode = null;

    /**
     * BBIE
     *  Tendering Process. Contracting System Code. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). If the procedure is individual (nonrepetitive), this code should be omitted.
     *  0..1
     *  Tendering Process
     *  Contracting System Code
     *  Code
     *  Code. Type
     *  Framework Agreement, Dynamic Purchasing System
     *
     * @var \horstoeko\ubl\entities\cbc\ContractingSystemCode $contractingSystemCode
     */
    private $contractingSystemCode = null;

    /**
     * BBIE
     *  Tendering Process. Submission Method Code. Code
     *  A code signifying the method to be followed in submitting tenders.
     *  0..1
     *  Tendering Process
     *  Submission Method Code
     *  Code
     *  Code. Type
     *  Manual, Electronically, etc.
     *
     * @var \horstoeko\ubl\entities\cbc\SubmissionMethodCode $submissionMethodCode
     */
    private $submissionMethodCode = null;

    /**
     * BBIE
     *  Tendering Process. Candidate Reduction_ Constraint. Indicator
     *  An indicator that the number of candidates participating in this process has been reduced (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Candidate Reduction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $candidateReductionConstraintIndicator
     */
    private $candidateReductionConstraintIndicator = null;

    /**
     * BBIE
     *  Tendering Process. Government Agreement_ Constraint. Indicator
     *  An indicator that the project associated with this tendering process is constrained by a government procurement agreement (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Government Agreement
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $governmentAgreementConstraintIndicator
     */
    private $governmentAgreementConstraintIndicator = null;

    /**
     * ASBIE
     *  Tendering Process. Document Availability_ Period. Period
     *  The period during which documents relating to this tendering process must be completed.
     *  0..1
     *  Tendering Process
     *  Document Availability
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\DocumentAvailabilityPeriod $documentAvailabilityPeriod
     */
    private $documentAvailabilityPeriod = null;

    /**
     * ASBIE
     *  Tendering Process. Tender Submission Deadline_ Period. Period
     *  The period during which tenders must be delivered.
     *  0..1
     *  Tendering Process
     *  Tender Submission Deadline
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod
     */
    private $tenderSubmissionDeadlinePeriod = null;

    /**
     * ASBIE
     *  Tendering Process. Invitation Submission_ Period. Period
     *  The period during which invitations to tender must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Invitation Submission
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\InvitationSubmissionPeriod $invitationSubmissionPeriod
     */
    private $invitationSubmissionPeriod = null;

    /**
     * ASBIE
     *  Tendering Process. Participation Request Reception_ Period. Period
     *  The period during which requests for participation must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Participation Request Reception
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod
     */
    private $participationRequestReceptionPeriod = null;

    /**
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\NoticeDocumentReference[] $noticeDocumentReference
     */
    private $noticeDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @var \horstoeko\ubl\entities\cac\ProcessJustification[] $processJustification
     */
    private $processJustification = [
        
    ];

    /**
     * ASBIE
     *  Tendering Process. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Process
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @var \horstoeko\ubl\entities\cac\EconomicOperatorShortList $economicOperatorShortList
     */
    private $economicOperatorShortList = null;

    /**
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @var \horstoeko\ubl\entities\cac\OpenTenderEvent[] $openTenderEvent
     */
    private $openTenderEvent = [
        
    ];

    /**
     * ASBIE
     *  Tendering Process. Auction Terms
     *  The terms to be fulfilled by tenderers if an auction is to be executed before the awarding of a tender.
     *  0..1
     *  Tendering Process
     *  Auction Terms
     *  Auction Terms
     *  Auction Terms
     *
     * @var \horstoeko\ubl\entities\cac\AuctionTerms $auctionTerms
     */
    private $auctionTerms = null;

    /**
     * ASBIE
     *  Tendering Process. Framework Agreement
     *  A tendering framework agreement.
     *  0..1
     *  Tendering Process
     *  Framework Agreement
     *  Framework Agreement
     *  Framework Agreement
     *
     * @var \horstoeko\ubl\entities\cac\FrameworkAgreement $frameworkAgreement
     */
    private $frameworkAgreement = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tendering Process. Identifier
     *  An identifier for this tendering process.
     *  0..1
     *  Tendering Process
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
     *  Tendering Process. Identifier
     *  An identifier for this tendering process.
     *  0..1
     *  Tendering Process
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
     * Gets as originalContractingSystemID
     *
     * BBIE
     *  Tendering Process. Original_ Contracting System. Identifier
     *  When reopening a tendering process, the identifier of the original framework agreement or dynamic purchasing system.
     *  0..1
     *  Tendering Process
     *  Original
     *  Contracting System
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OriginalContractingSystemID
     */
    public function getOriginalContractingSystemID()
    {
        return $this->originalContractingSystemID;
    }

    /**
     * Sets a new originalContractingSystemID
     *
     * BBIE
     *  Tendering Process. Original_ Contracting System. Identifier
     *  When reopening a tendering process, the identifier of the original framework agreement or dynamic purchasing system.
     *  0..1
     *  Tendering Process
     *  Original
     *  Contracting System
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\OriginalContractingSystemID $originalContractingSystemID
     * @return self
     */
    public function setOriginalContractingSystemID(\horstoeko\ubl\entities\cbc\OriginalContractingSystemID $originalContractingSystemID)
    {
        $this->originalContractingSystemID = $originalContractingSystemID;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     *  Tendering Process. Description. Text
     *  Text describing the tendering process.
     *  0..n
     *  Tendering Process
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
     * Adds as negotiationDescription
     *
     * BBIE
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\NegotiationDescription $negotiationDescription
     */
    public function addToNegotiationDescription(\horstoeko\ubl\entities\cbc\NegotiationDescription $negotiationDescription)
    {
        $this->negotiationDescription[] = $negotiationDescription;
        return $this;
    }

    /**
     * isset negotiationDescription
     *
     * BBIE
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetNegotiationDescription($index)
    {
        return isset($this->negotiationDescription[$index]);
    }

    /**
     * unset negotiationDescription
     *
     * BBIE
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetNegotiationDescription($index)
    {
        unset($this->negotiationDescription[$index]);
    }

    /**
     * Gets as negotiationDescription
     *
     * BBIE
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NegotiationDescription[]
     */
    public function getNegotiationDescription()
    {
        return $this->negotiationDescription;
    }

    /**
     * Sets a new negotiationDescription
     *
     * BBIE
     *  Tendering Process. Negotiation_ Description. Text
     *  Text describing the negotiation to be followed during the tendering process.
     *  0..n
     *  Tendering Process
     *  Negotiation
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\NegotiationDescription[] $negotiationDescription
     * @return self
     */
    public function setNegotiationDescription(array $negotiationDescription)
    {
        $this->negotiationDescription = $negotiationDescription;
        return $this;
    }

    /**
     * Gets as procedureCode
     *
     * BBIE
     *  Tendering Process. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Tendering Process
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
     *
     * @return \horstoeko\ubl\entities\cbc\ProcedureCode
     */
    public function getProcedureCode()
    {
        return $this->procedureCode;
    }

    /**
     * Sets a new procedureCode
     *
     * BBIE
     *  Tendering Process. Procedure Code. Code
     *  A code signifying the type of this tendering procedure.
     *  0..1
     *  Tendering Process
     *  Procedure Code
     *  Code
     *  Code. Type
     *  Open, Restricted, Negotiated
     *
     * @param  \horstoeko\ubl\entities\cbc\ProcedureCode $procedureCode
     * @return self
     */
    public function setProcedureCode(\horstoeko\ubl\entities\cbc\ProcedureCode $procedureCode)
    {
        $this->procedureCode = $procedureCode;
        return $this;
    }

    /**
     * Gets as urgencyCode
     *
     * BBIE
     *  Tendering Process. Urgency Code. Code
     *  A code signifying the urgency of this tendering process.
     *  0..1
     *  Tendering Process
     *  Urgency Code
     *  Code
     *  Code. Type
     *  Urgent, Normal, Emergency
     *
     * @return \horstoeko\ubl\entities\cbc\UrgencyCode
     */
    public function getUrgencyCode()
    {
        return $this->urgencyCode;
    }

    /**
     * Sets a new urgencyCode
     *
     * BBIE
     *  Tendering Process. Urgency Code. Code
     *  A code signifying the urgency of this tendering process.
     *  0..1
     *  Tendering Process
     *  Urgency Code
     *  Code
     *  Code. Type
     *  Urgent, Normal, Emergency
     *
     * @param  \horstoeko\ubl\entities\cbc\UrgencyCode $urgencyCode
     * @return self
     */
    public function setUrgencyCode(\horstoeko\ubl\entities\cbc\UrgencyCode $urgencyCode)
    {
        $this->urgencyCode = $urgencyCode;
        return $this;
    }

    /**
     * Gets as expenseCode
     *
     * BBIE
     *  Tendering Process. Expense Code. Code
     *  A code signifying the type of expense for this tendering process.
     *  0..1
     *  Tendering Process
     *  Expense Code
     *  Code
     *  Code. Type
     *  Normal, Anticipated
     *
     * @return \horstoeko\ubl\entities\cbc\ExpenseCode
     */
    public function getExpenseCode()
    {
        return $this->expenseCode;
    }

    /**
     * Sets a new expenseCode
     *
     * BBIE
     *  Tendering Process. Expense Code. Code
     *  A code signifying the type of expense for this tendering process.
     *  0..1
     *  Tendering Process
     *  Expense Code
     *  Code
     *  Code. Type
     *  Normal, Anticipated
     *
     * @param  \horstoeko\ubl\entities\cbc\ExpenseCode $expenseCode
     * @return self
     */
    public function setExpenseCode(\horstoeko\ubl\entities\cbc\ExpenseCode $expenseCode)
    {
        $this->expenseCode = $expenseCode;
        return $this;
    }

    /**
     * Gets as partPresentationCode
     *
     * BBIE
     *  Tendering Process. Part Presentation Code. Code
     *  A code signifying the type of presentation of tenders required (e.g., one lot, multiple lots, or all the lots).
     *  0..1
     *  Tendering Process
     *  Part Presentation Code
     *  Code
     *  Code. Type
     *  One Lot, Multiple Lots, All Lots
     *
     * @return \horstoeko\ubl\entities\cbc\PartPresentationCode
     */
    public function getPartPresentationCode()
    {
        return $this->partPresentationCode;
    }

    /**
     * Sets a new partPresentationCode
     *
     * BBIE
     *  Tendering Process. Part Presentation Code. Code
     *  A code signifying the type of presentation of tenders required (e.g., one lot, multiple lots, or all the lots).
     *  0..1
     *  Tendering Process
     *  Part Presentation Code
     *  Code
     *  Code. Type
     *  One Lot, Multiple Lots, All Lots
     *
     * @param  \horstoeko\ubl\entities\cbc\PartPresentationCode $partPresentationCode
     * @return self
     */
    public function setPartPresentationCode(\horstoeko\ubl\entities\cbc\PartPresentationCode $partPresentationCode)
    {
        $this->partPresentationCode = $partPresentationCode;
        return $this;
    }

    /**
     * Gets as contractingSystemCode
     *
     * BBIE
     *  Tendering Process. Contracting System Code. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). If the procedure is individual (nonrepetitive), this code should be omitted.
     *  0..1
     *  Tendering Process
     *  Contracting System Code
     *  Code
     *  Code. Type
     *  Framework Agreement, Dynamic Purchasing System
     *
     * @return \horstoeko\ubl\entities\cbc\ContractingSystemCode
     */
    public function getContractingSystemCode()
    {
        return $this->contractingSystemCode;
    }

    /**
     * Sets a new contractingSystemCode
     *
     * BBIE
     *  Tendering Process. Contracting System Code. Code
     *  A code signifying the type of contracting system (e.g., framework agreement, dynamic purchasing system). If the procedure is individual (nonrepetitive), this code should be omitted.
     *  0..1
     *  Tendering Process
     *  Contracting System Code
     *  Code
     *  Code. Type
     *  Framework Agreement, Dynamic Purchasing System
     *
     * @param  \horstoeko\ubl\entities\cbc\ContractingSystemCode $contractingSystemCode
     * @return self
     */
    public function setContractingSystemCode(\horstoeko\ubl\entities\cbc\ContractingSystemCode $contractingSystemCode)
    {
        $this->contractingSystemCode = $contractingSystemCode;
        return $this;
    }

    /**
     * Gets as submissionMethodCode
     *
     * BBIE
     *  Tendering Process. Submission Method Code. Code
     *  A code signifying the method to be followed in submitting tenders.
     *  0..1
     *  Tendering Process
     *  Submission Method Code
     *  Code
     *  Code. Type
     *  Manual, Electronically, etc.
     *
     * @return \horstoeko\ubl\entities\cbc\SubmissionMethodCode
     */
    public function getSubmissionMethodCode()
    {
        return $this->submissionMethodCode;
    }

    /**
     * Sets a new submissionMethodCode
     *
     * BBIE
     *  Tendering Process. Submission Method Code. Code
     *  A code signifying the method to be followed in submitting tenders.
     *  0..1
     *  Tendering Process
     *  Submission Method Code
     *  Code
     *  Code. Type
     *  Manual, Electronically, etc.
     *
     * @param  \horstoeko\ubl\entities\cbc\SubmissionMethodCode $submissionMethodCode
     * @return self
     */
    public function setSubmissionMethodCode(\horstoeko\ubl\entities\cbc\SubmissionMethodCode $submissionMethodCode)
    {
        $this->submissionMethodCode = $submissionMethodCode;
        return $this;
    }

    /**
     * Gets as candidateReductionConstraintIndicator
     *
     * BBIE
     *  Tendering Process. Candidate Reduction_ Constraint. Indicator
     *  An indicator that the number of candidates participating in this process has been reduced (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Candidate Reduction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCandidateReductionConstraintIndicator()
    {
        return $this->candidateReductionConstraintIndicator;
    }

    /**
     * Sets a new candidateReductionConstraintIndicator
     *
     * BBIE
     *  Tendering Process. Candidate Reduction_ Constraint. Indicator
     *  An indicator that the number of candidates participating in this process has been reduced (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Candidate Reduction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $candidateReductionConstraintIndicator
     * @return self
     */
    public function setCandidateReductionConstraintIndicator($candidateReductionConstraintIndicator)
    {
        $this->candidateReductionConstraintIndicator = $candidateReductionConstraintIndicator;
        return $this;
    }

    /**
     * Gets as governmentAgreementConstraintIndicator
     *
     * BBIE
     *  Tendering Process. Government Agreement_ Constraint. Indicator
     *  An indicator that the project associated with this tendering process is constrained by a government procurement agreement (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Government Agreement
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getGovernmentAgreementConstraintIndicator()
    {
        return $this->governmentAgreementConstraintIndicator;
    }

    /**
     * Sets a new governmentAgreementConstraintIndicator
     *
     * BBIE
     *  Tendering Process. Government Agreement_ Constraint. Indicator
     *  An indicator that the project associated with this tendering process is constrained by a government procurement agreement (true) or not (false).
     *  0..1
     *  Tendering Process
     *  Government Agreement
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $governmentAgreementConstraintIndicator
     * @return self
     */
    public function setGovernmentAgreementConstraintIndicator($governmentAgreementConstraintIndicator)
    {
        $this->governmentAgreementConstraintIndicator = $governmentAgreementConstraintIndicator;
        return $this;
    }

    /**
     * Gets as documentAvailabilityPeriod
     *
     * ASBIE
     *  Tendering Process. Document Availability_ Period. Period
     *  The period during which documents relating to this tendering process must be completed.
     *  0..1
     *  Tendering Process
     *  Document Availability
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\DocumentAvailabilityPeriod
     */
    public function getDocumentAvailabilityPeriod()
    {
        return $this->documentAvailabilityPeriod;
    }

    /**
     * Sets a new documentAvailabilityPeriod
     *
     * ASBIE
     *  Tendering Process. Document Availability_ Period. Period
     *  The period during which documents relating to this tendering process must be completed.
     *  0..1
     *  Tendering Process
     *  Document Availability
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\DocumentAvailabilityPeriod $documentAvailabilityPeriod
     * @return self
     */
    public function setDocumentAvailabilityPeriod(\horstoeko\ubl\entities\cac\DocumentAvailabilityPeriod $documentAvailabilityPeriod)
    {
        $this->documentAvailabilityPeriod = $documentAvailabilityPeriod;
        return $this;
    }

    /**
     * Gets as tenderSubmissionDeadlinePeriod
     *
     * ASBIE
     *  Tendering Process. Tender Submission Deadline_ Period. Period
     *  The period during which tenders must be delivered.
     *  0..1
     *  Tendering Process
     *  Tender Submission Deadline
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\TenderSubmissionDeadlinePeriod
     */
    public function getTenderSubmissionDeadlinePeriod()
    {
        return $this->tenderSubmissionDeadlinePeriod;
    }

    /**
     * Sets a new tenderSubmissionDeadlinePeriod
     *
     * ASBIE
     *  Tendering Process. Tender Submission Deadline_ Period. Period
     *  The period during which tenders must be delivered.
     *  0..1
     *  Tendering Process
     *  Tender Submission Deadline
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod
     * @return self
     */
    public function setTenderSubmissionDeadlinePeriod(\horstoeko\ubl\entities\cac\TenderSubmissionDeadlinePeriod $tenderSubmissionDeadlinePeriod)
    {
        $this->tenderSubmissionDeadlinePeriod = $tenderSubmissionDeadlinePeriod;
        return $this;
    }

    /**
     * Gets as invitationSubmissionPeriod
     *
     * ASBIE
     *  Tendering Process. Invitation Submission_ Period. Period
     *  The period during which invitations to tender must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Invitation Submission
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\InvitationSubmissionPeriod
     */
    public function getInvitationSubmissionPeriod()
    {
        return $this->invitationSubmissionPeriod;
    }

    /**
     * Sets a new invitationSubmissionPeriod
     *
     * ASBIE
     *  Tendering Process. Invitation Submission_ Period. Period
     *  The period during which invitations to tender must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Invitation Submission
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\InvitationSubmissionPeriod $invitationSubmissionPeriod
     * @return self
     */
    public function setInvitationSubmissionPeriod(\horstoeko\ubl\entities\cac\InvitationSubmissionPeriod $invitationSubmissionPeriod)
    {
        $this->invitationSubmissionPeriod = $invitationSubmissionPeriod;
        return $this;
    }

    /**
     * Gets as participationRequestReceptionPeriod
     *
     * ASBIE
     *  Tendering Process. Participation Request Reception_ Period. Period
     *  The period during which requests for participation must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Participation Request Reception
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ParticipationRequestReceptionPeriod
     */
    public function getParticipationRequestReceptionPeriod()
    {
        return $this->participationRequestReceptionPeriod;
    }

    /**
     * Sets a new participationRequestReceptionPeriod
     *
     * ASBIE
     *  Tendering Process. Participation Request Reception_ Period. Period
     *  The period during which requests for participation must be completed and delivered.
     *  0..1
     *  Tendering Process
     *  Participation Request Reception
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod
     * @return self
     */
    public function setParticipationRequestReceptionPeriod(\horstoeko\ubl\entities\cac\ParticipationRequestReceptionPeriod $participationRequestReceptionPeriod)
    {
        $this->participationRequestReceptionPeriod = $participationRequestReceptionPeriod;
        return $this;
    }

    /**
     * Adds as noticeDocumentReference
     *
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\NoticeDocumentReference $noticeDocumentReference
     */
    public function addToNoticeDocumentReference(\horstoeko\ubl\entities\cac\NoticeDocumentReference $noticeDocumentReference)
    {
        $this->noticeDocumentReference[] = $noticeDocumentReference;
        return $this;
    }

    /**
     * isset noticeDocumentReference
     *
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetNoticeDocumentReference($index)
    {
        return isset($this->noticeDocumentReference[$index]);
    }

    /**
     * unset noticeDocumentReference
     *
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetNoticeDocumentReference($index)
    {
        unset($this->noticeDocumentReference[$index]);
    }

    /**
     * Gets as noticeDocumentReference
     *
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\NoticeDocumentReference[]
     */
    public function getNoticeDocumentReference()
    {
        return $this->noticeDocumentReference;
    }

    /**
     * Sets a new noticeDocumentReference
     *
     * ASBIE
     *  Tendering Process. Notice_ Document Reference. Document Reference
     *  A reference to a notice pertaining to this tendering process.
     *  0..n
     *  Tendering Process
     *  Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\NoticeDocumentReference[] $noticeDocumentReference
     * @return self
     */
    public function setNoticeDocumentReference(array $noticeDocumentReference)
    {
        $this->noticeDocumentReference = $noticeDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Tendering Process. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..n
     *  Tendering Process
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(array $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as processJustification
     *
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ProcessJustification $processJustification
     */
    public function addToProcessJustification(\horstoeko\ubl\entities\cac\ProcessJustification $processJustification)
    {
        $this->processJustification[] = $processJustification;
        return $this;
    }

    /**
     * isset processJustification
     *
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetProcessJustification($index)
    {
        return isset($this->processJustification[$index]);
    }

    /**
     * unset processJustification
     *
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetProcessJustification($index)
    {
        unset($this->processJustification[$index]);
    }

    /**
     * Gets as processJustification
     *
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @return \horstoeko\ubl\entities\cac\ProcessJustification[]
     */
    public function getProcessJustification()
    {
        return $this->processJustification;
    }

    /**
     * Sets a new processJustification
     *
     * ASBIE
     *  Tendering Process. Process Justification
     *  A justification for the selection of this tendering process.
     *  0..n
     *  Tendering Process
     *  Process Justification
     *  Process Justification
     *  Process Justification
     *
     * @param  \horstoeko\ubl\entities\cac\ProcessJustification[] $processJustification
     * @return self
     */
    public function setProcessJustification(array $processJustification)
    {
        $this->processJustification = $processJustification;
        return $this;
    }

    /**
     * Gets as economicOperatorShortList
     *
     * ASBIE
     *  Tendering Process. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Process
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @return \horstoeko\ubl\entities\cac\EconomicOperatorShortList
     */
    public function getEconomicOperatorShortList()
    {
        return $this->economicOperatorShortList;
    }

    /**
     * Sets a new economicOperatorShortList
     *
     * ASBIE
     *  Tendering Process. Economic Operator Short List
     *  A set of criteria used to create a short list of candidates.
     *  0..1
     *  Tendering Process
     *  Economic Operator Short List
     *  Economic Operator Short List
     *  Economic Operator Short List
     *
     * @param  \horstoeko\ubl\entities\cac\EconomicOperatorShortList $economicOperatorShortList
     * @return self
     */
    public function setEconomicOperatorShortList(\horstoeko\ubl\entities\cac\EconomicOperatorShortList $economicOperatorShortList)
    {
        $this->economicOperatorShortList = $economicOperatorShortList;
        return $this;
    }

    /**
     * Adds as openTenderEvent
     *
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\OpenTenderEvent $openTenderEvent
     */
    public function addToOpenTenderEvent(\horstoeko\ubl\entities\cac\OpenTenderEvent $openTenderEvent)
    {
        $this->openTenderEvent[] = $openTenderEvent;
        return $this;
    }

    /**
     * isset openTenderEvent
     *
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOpenTenderEvent($index)
    {
        return isset($this->openTenderEvent[$index]);
    }

    /**
     * unset openTenderEvent
     *
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOpenTenderEvent($index)
    {
        unset($this->openTenderEvent[$index]);
    }

    /**
     * Gets as openTenderEvent
     *
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @return \horstoeko\ubl\entities\cac\OpenTenderEvent[]
     */
    public function getOpenTenderEvent()
    {
        return $this->openTenderEvent;
    }

    /**
     * Sets a new openTenderEvent
     *
     * ASBIE
     *  Tendering Process. Open Tender_ Event. Event
     *  Textual description of the legal form required for potential tenderers.
     *  0..n
     *  Tendering Process
     *  Open Tender
     *  Event
     *  Event
     *  Event
     *
     * @param  \horstoeko\ubl\entities\cac\OpenTenderEvent[] $openTenderEvent
     * @return self
     */
    public function setOpenTenderEvent(array $openTenderEvent)
    {
        $this->openTenderEvent = $openTenderEvent;
        return $this;
    }

    /**
     * Gets as auctionTerms
     *
     * ASBIE
     *  Tendering Process. Auction Terms
     *  The terms to be fulfilled by tenderers if an auction is to be executed before the awarding of a tender.
     *  0..1
     *  Tendering Process
     *  Auction Terms
     *  Auction Terms
     *  Auction Terms
     *
     * @return \horstoeko\ubl\entities\cac\AuctionTerms
     */
    public function getAuctionTerms()
    {
        return $this->auctionTerms;
    }

    /**
     * Sets a new auctionTerms
     *
     * ASBIE
     *  Tendering Process. Auction Terms
     *  The terms to be fulfilled by tenderers if an auction is to be executed before the awarding of a tender.
     *  0..1
     *  Tendering Process
     *  Auction Terms
     *  Auction Terms
     *  Auction Terms
     *
     * @param  \horstoeko\ubl\entities\cac\AuctionTerms $auctionTerms
     * @return self
     */
    public function setAuctionTerms(\horstoeko\ubl\entities\cac\AuctionTerms $auctionTerms)
    {
        $this->auctionTerms = $auctionTerms;
        return $this;
    }

    /**
     * Gets as frameworkAgreement
     *
     * ASBIE
     *  Tendering Process. Framework Agreement
     *  A tendering framework agreement.
     *  0..1
     *  Tendering Process
     *  Framework Agreement
     *  Framework Agreement
     *  Framework Agreement
     *
     * @return \horstoeko\ubl\entities\cac\FrameworkAgreement
     */
    public function getFrameworkAgreement()
    {
        return $this->frameworkAgreement;
    }

    /**
     * Sets a new frameworkAgreement
     *
     * ASBIE
     *  Tendering Process. Framework Agreement
     *  A tendering framework agreement.
     *  0..1
     *  Tendering Process
     *  Framework Agreement
     *  Framework Agreement
     *  Framework Agreement
     *
     * @param  \horstoeko\ubl\entities\cac\FrameworkAgreement $frameworkAgreement
     * @return self
     */
    public function setFrameworkAgreement(\horstoeko\ubl\entities\cac\FrameworkAgreement $frameworkAgreement)
    {
        $this->frameworkAgreement = $frameworkAgreement;
        return $this;
    }


}

