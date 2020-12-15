<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing QualifyingPartyType
 *
 * ABIE
 *  Qualifying Party. Details
 *  A class to describe the distinctive features or characteristics qualifying an economic operator to be a party in a tendering process (e.g., number of employees, number of operating units, type of business, technical and financial capabilities, completed projects).
 *  Qualifying Party
 * XSD Type: QualifyingPartyType
 */
class QualifyingPartyType
{

    /**
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ParticipationPercent $participationPercent
     */
    private $participationPercent = null;

    /**
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PersonalSituation[] $personalSituation
     */
    private $personalSituation = [
        
    ];

    /**
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OperatingYearsQuantity $operatingYearsQuantity
     */
    private $operatingYearsQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\EmployeeQuantity $employeeQuantity
     */
    private $employeeQuantity = null;

    /**
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     */
    private $businessClassificationEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     */
    private $businessIdentityEvidenceID = null;

    /**
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TendererRoleCode $tendererRoleCode
     */
    private $tendererRoleCode = null;

    /**
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @var \horstoeko\ubl\entities\cac\BusinessClassificationScheme $businessClassificationScheme
     */
    private $businessClassificationScheme = null;

    /**
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \horstoeko\ubl\entities\cac\TechnicalCapability[] $technicalCapability
     */
    private $technicalCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @var \horstoeko\ubl\entities\cac\FinancialCapability[] $financialCapability
     */
    private $financialCapability = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @var \horstoeko\ubl\entities\cac\CompletedTask[] $completedTask
     */
    private $completedTask = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @var \horstoeko\ubl\entities\cac\Declaration[] $declaration
     */
    private $declaration = [
        
    ];

    /**
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @var \horstoeko\ubl\entities\cac\EconomicOperatorRole $economicOperatorRole
     */
    private $economicOperatorRole = null;

    /**
     * Gets as participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ParticipationPercent
     */
    public function getParticipationPercent()
    {
        return $this->participationPercent;
    }

    /**
     * Sets a new participationPercent
     *
     * BBIE
     *  Qualifying Party. Participation. Percent
     *  The extent to which this party is expected to participate in the tendering process, expressed as a percentage.
     *  0..1
     *  Qualifying Party
     *  Participation
     *  Percent
     *  Percent. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ParticipationPercent $participationPercent
     * @return self
     */
    public function setParticipationPercent(\horstoeko\ubl\entities\cbc\ParticipationPercent $participationPercent)
    {
        $this->participationPercent = $participationPercent;
        return $this;
    }

    /**
     * Adds as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PersonalSituation $personalSituation
     */
    public function addToPersonalSituation(\horstoeko\ubl\entities\cbc\PersonalSituation $personalSituation)
    {
        $this->personalSituation[] = $personalSituation;
        return $this;
    }

    /**
     * isset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSituation($index)
    {
        return isset($this->personalSituation[$index]);
    }

    /**
     * unset personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSituation($index)
    {
        unset($this->personalSituation[$index]);
    }

    /**
     * Gets as personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PersonalSituation[]
     */
    public function getPersonalSituation()
    {
        return $this->personalSituation;
    }

    /**
     * Sets a new personalSituation
     *
     * BBIE
     *  Qualifying Party. Personal Situation. Text
     *  Text describing the personal situation of the qualifying party.
     *  0..n
     *  Qualifying Party
     *  Personal Situation
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PersonalSituation[] $personalSituation
     * @return self
     */
    public function setPersonalSituation(array $personalSituation)
    {
        $this->personalSituation = $personalSituation;
        return $this;
    }

    /**
     * Gets as operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OperatingYearsQuantity
     */
    public function getOperatingYearsQuantity()
    {
        return $this->operatingYearsQuantity;
    }

    /**
     * Sets a new operatingYearsQuantity
     *
     * BBIE
     *  Qualifying Party. Operating Years. Quantity
     *  The number of years that this qualifying party has been in operation.
     *  0..1
     *  Qualifying Party
     *  Operating Years
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OperatingYearsQuantity $operatingYearsQuantity
     * @return self
     */
    public function setOperatingYearsQuantity(\horstoeko\ubl\entities\cbc\OperatingYearsQuantity $operatingYearsQuantity)
    {
        $this->operatingYearsQuantity = $operatingYearsQuantity;
        return $this;
    }

    /**
     * Gets as employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\EmployeeQuantity
     */
    public function getEmployeeQuantity()
    {
        return $this->employeeQuantity;
    }

    /**
     * Sets a new employeeQuantity
     *
     * BBIE
     *  Qualifying Party. Employee. Quantity
     *  The number of people employed by this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Employee
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\EmployeeQuantity $employeeQuantity
     * @return self
     */
    public function setEmployeeQuantity(\horstoeko\ubl\entities\cbc\EmployeeQuantity $employeeQuantity)
    {
        $this->employeeQuantity = $employeeQuantity;
        return $this;
    }

    /**
     * Gets as businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BusinessClassificationEvidenceID
     */
    public function getBusinessClassificationEvidenceID()
    {
        return $this->businessClassificationEvidenceID;
    }

    /**
     * Sets a new businessClassificationEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Classification Evidence. Identifier
     *  An identifier for an item of evidence to support the classification of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Classification Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BusinessClassificationEvidenceID $businessClassificationEvidenceID
     * @return self
     */
    public function setBusinessClassificationEvidenceID(\horstoeko\ubl\entities\cbc\BusinessClassificationEvidenceID $businessClassificationEvidenceID)
    {
        $this->businessClassificationEvidenceID = $businessClassificationEvidenceID;
        return $this;
    }

    /**
     * Gets as businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BusinessIdentityEvidenceID
     */
    public function getBusinessIdentityEvidenceID()
    {
        return $this->businessIdentityEvidenceID;
    }

    /**
     * Sets a new businessIdentityEvidenceID
     *
     * BBIE
     *  Qualifying Party. Business Identity Evidence. Identifier
     *  An identifier for an item of evidence to support the business identity of this qualifying party.
     *  0..1
     *  Qualifying Party
     *  Business Identity Evidence
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BusinessIdentityEvidenceID $businessIdentityEvidenceID
     * @return self
     */
    public function setBusinessIdentityEvidenceID(\horstoeko\ubl\entities\cbc\BusinessIdentityEvidenceID $businessIdentityEvidenceID)
    {
        $this->businessIdentityEvidenceID = $businessIdentityEvidenceID;
        return $this;
    }

    /**
     * Gets as tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TendererRoleCode
     */
    public function getTendererRoleCode()
    {
        return $this->tendererRoleCode;
    }

    /**
     * Sets a new tendererRoleCode
     *
     * BBIE
     *  Qualifying Party. Tenderer Role Code. Code
     *  A code stating the Tenderer Role.
     *  0..1
     *  Qualifying Party
     *  Tenderer Role Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TendererRoleCode $tendererRoleCode
     * @return self
     */
    public function setTendererRoleCode(\horstoeko\ubl\entities\cbc\TendererRoleCode $tendererRoleCode)
    {
        $this->tendererRoleCode = $tendererRoleCode;
        return $this;
    }

    /**
     * Gets as businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @return \horstoeko\ubl\entities\cac\BusinessClassificationScheme
     */
    public function getBusinessClassificationScheme()
    {
        return $this->businessClassificationScheme;
    }

    /**
     * Sets a new businessClassificationScheme
     *
     * ASBIE
     *  Qualifying Party. Business_ Classification Scheme. Classification Scheme
     *  The classification scheme used for the business profile.
     *  0..1
     *  Qualifying Party
     *  Business
     *  Classification Scheme
     *  Classification Scheme
     *  Classification Scheme
     *
     * @param \horstoeko\ubl\entities\cac\BusinessClassificationScheme $businessClassificationScheme
     * @return self
     */
    public function setBusinessClassificationScheme(\horstoeko\ubl\entities\cac\BusinessClassificationScheme $businessClassificationScheme)
    {
        $this->businessClassificationScheme = $businessClassificationScheme;
        return $this;
    }

    /**
     * Adds as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TechnicalCapability $technicalCapability
     */
    public function addToTechnicalCapability(\horstoeko\ubl\entities\cac\TechnicalCapability $technicalCapability)
    {
        $this->technicalCapability[] = $technicalCapability;
        return $this;
    }

    /**
     * isset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCapability($index)
    {
        return isset($this->technicalCapability[$index]);
    }

    /**
     * unset technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCapability($index)
    {
        unset($this->technicalCapability[$index]);
    }

    /**
     * Gets as technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \horstoeko\ubl\entities\cac\TechnicalCapability[]
     */
    public function getTechnicalCapability()
    {
        return $this->technicalCapability;
    }

    /**
     * Sets a new technicalCapability
     *
     * ASBIE
     *  Qualifying Party. Technical_ Capability. Capability
     *  A technical capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Technical
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \horstoeko\ubl\entities\cac\TechnicalCapability[] $technicalCapability
     * @return self
     */
    public function setTechnicalCapability(array $technicalCapability)
    {
        $this->technicalCapability = $technicalCapability;
        return $this;
    }

    /**
     * Adds as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\FinancialCapability $financialCapability
     */
    public function addToFinancialCapability(\horstoeko\ubl\entities\cac\FinancialCapability $financialCapability)
    {
        $this->financialCapability[] = $financialCapability;
        return $this;
    }

    /**
     * isset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFinancialCapability($index)
    {
        return isset($this->financialCapability[$index]);
    }

    /**
     * unset financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFinancialCapability($index)
    {
        unset($this->financialCapability[$index]);
    }

    /**
     * Gets as financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @return \horstoeko\ubl\entities\cac\FinancialCapability[]
     */
    public function getFinancialCapability()
    {
        return $this->financialCapability;
    }

    /**
     * Sets a new financialCapability
     *
     * ASBIE
     *  Qualifying Party. Financial_ Capability. Capability
     *  A financial capability of this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Financial
     *  Capability
     *  Capability
     *  Capability
     *
     * @param \horstoeko\ubl\entities\cac\FinancialCapability[] $financialCapability
     * @return self
     */
    public function setFinancialCapability(array $financialCapability)
    {
        $this->financialCapability = $financialCapability;
        return $this;
    }

    /**
     * Adds as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CompletedTask $completedTask
     */
    public function addToCompletedTask(\horstoeko\ubl\entities\cac\CompletedTask $completedTask)
    {
        $this->completedTask[] = $completedTask;
        return $this;
    }

    /**
     * isset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompletedTask($index)
    {
        return isset($this->completedTask[$index]);
    }

    /**
     * unset completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompletedTask($index)
    {
        unset($this->completedTask[$index]);
    }

    /**
     * Gets as completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @return \horstoeko\ubl\entities\cac\CompletedTask[]
     */
    public function getCompletedTask()
    {
        return $this->completedTask;
    }

    /**
     * Sets a new completedTask
     *
     * ASBIE
     *  Qualifying Party. Completed Task
     *  A former task completed by this qualifying party.
     *  0..n
     *  Qualifying Party
     *  Completed Task
     *  Completed Task
     *  Completed Task
     *
     * @param \horstoeko\ubl\entities\cac\CompletedTask[] $completedTask
     * @return self
     */
    public function setCompletedTask(array $completedTask)
    {
        $this->completedTask = $completedTask;
        return $this;
    }

    /**
     * Adds as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Declaration $declaration
     */
    public function addToDeclaration(\horstoeko\ubl\entities\cac\Declaration $declaration)
    {
        $this->declaration[] = $declaration;
        return $this;
    }

    /**
     * isset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeclaration($index)
    {
        return isset($this->declaration[$index]);
    }

    /**
     * unset declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeclaration($index)
    {
        unset($this->declaration[$index]);
    }

    /**
     * Gets as declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @return \horstoeko\ubl\entities\cac\Declaration[]
     */
    public function getDeclaration()
    {
        return $this->declaration;
    }

    /**
     * Sets a new declaration
     *
     * ASBIE
     *  Qualifying Party. Declaration
     *  A declaration by this qualifying party. of certain characteristics or capabilities in fulfilment of requirements specified in a call for tenders.
     *  0..n
     *  Qualifying Party
     *  Declaration
     *  Declaration
     *  Declaration
     *
     * @param \horstoeko\ubl\entities\cac\Declaration[] $declaration
     * @return self
     */
    public function setDeclaration(array $declaration)
    {
        $this->declaration = $declaration;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Qualifying Party. Party
     *  The qualifying party itself.
     *  0..1
     *  Qualifying Party
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\Party $party
     * @return self
     */
    public function setParty(\horstoeko\ubl\entities\cac\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @return \horstoeko\ubl\entities\cac\EconomicOperatorRole
     */
    public function getEconomicOperatorRole()
    {
        return $this->economicOperatorRole;
    }

    /**
     * Sets a new economicOperatorRole
     *
     * ASBIE
     *  Qualifying Party. Economic Operator Role
     *  A class to describe the tenderer contracting role.
     *  0..1
     *  Qualifying Party
     *  Economic Operator Role
     *  Economic Operator Role
     *  Economic Operator Role
     *
     * @param \horstoeko\ubl\entities\cac\EconomicOperatorRole $economicOperatorRole
     * @return self
     */
    public function setEconomicOperatorRole(\horstoeko\ubl\entities\cac\EconomicOperatorRole $economicOperatorRole)
    {
        $this->economicOperatorRole = $economicOperatorRole;
        return $this;
    }


}

