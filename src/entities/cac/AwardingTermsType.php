<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AwardingTermsType
 *
 * ABIE
 *  Awarding Terms. Details
 *  A class to define the terms for awarding a contract.
 *  Awarding Terms
 * XSD Type: AwardingTermsType
 */
class AwardingTermsType
{

    /**
     * BBIE
     *  Awarding Terms. Weighting Algorithm Code. Code
     *  A code signifying the weighting algorithm for awarding criteria. When multiple awarding criteria is used, different weighting and choices management algorithms based upon scores and weights of all award criteria can be used. An algorithm for weighting criteria shall be reported in the call for tenders document. It is used to determine how to perform the final management of tenders based on the results in each of the established award criteria
     *  0..1
     *  Awarding Terms
     *  Weighting Algorithm Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\WeightingAlgorithmCode $weightingAlgorithmCode
     */
    private $weightingAlgorithmCode = null;

    /**
     * BBIE
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TechnicalCommitteeDescription[] $technicalCommitteeDescription
     */
    private $technicalCommitteeDescription = [
        
    ];

    /**
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LowTendersDescription[] $lowTendersDescription
     */
    private $lowTendersDescription = [
        
    ];

    /**
     * BBIE
     *  Awarding Terms. Prize Indicator. Indicator
     *  Indicates whether a prize will be awarded (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Prize Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $prizeIndicator
     */
    private $prizeIndicator = null;

    /**
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PrizeDescription[] $prizeDescription
     */
    private $prizeDescription = [
        
    ];

    /**
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentDescription[] $paymentDescription
     */
    private $paymentDescription = [
        
    ];

    /**
     * BBIE
     *  Awarding Terms. Followup Contract Indicator. Indicator
     *  Indicates if any service contract following the contest will be awarded to the winner or one of the winners of the contest (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Followup Contract Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $followupContractIndicator
     */
    private $followupContractIndicator = null;

    /**
     * BBIE
     *  Awarding Terms. Binding On Buyer Indicator. Indicator
     *  Indicates if the decision is binding on the buyer (true) or not (false). 
     *  0..1
     *  Awarding Terms
     *  Binding On Buyer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $bindingOnBuyerIndicator
     */
    private $bindingOnBuyerIndicator = null;

    /**
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @var \horstoeko\ubl\entities\cac\AwardingCriterion[] $awardingCriterion
     */
    private $awardingCriterion = [
        
    ];

    /**
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\TechnicalCommitteePerson[] $technicalCommitteePerson
     */
    private $technicalCommitteePerson = [
        
    ];

    /**
     * Gets as weightingAlgorithmCode
     *
     * BBIE
     *  Awarding Terms. Weighting Algorithm Code. Code
     *  A code signifying the weighting algorithm for awarding criteria. When multiple awarding criteria is used, different weighting and choices management algorithms based upon scores and weights of all award criteria can be used. An algorithm for weighting criteria shall be reported in the call for tenders document. It is used to determine how to perform the final management of tenders based on the results in each of the established award criteria
     *  0..1
     *  Awarding Terms
     *  Weighting Algorithm Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\WeightingAlgorithmCode
     */
    public function getWeightingAlgorithmCode()
    {
        return $this->weightingAlgorithmCode;
    }

    /**
     * Sets a new weightingAlgorithmCode
     *
     * BBIE
     *  Awarding Terms. Weighting Algorithm Code. Code
     *  A code signifying the weighting algorithm for awarding criteria. When multiple awarding criteria is used, different weighting and choices management algorithms based upon scores and weights of all award criteria can be used. An algorithm for weighting criteria shall be reported in the call for tenders document. It is used to determine how to perform the final management of tenders based on the results in each of the established award criteria
     *  0..1
     *  Awarding Terms
     *  Weighting Algorithm Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\WeightingAlgorithmCode $weightingAlgorithmCode
     * @return self
     */
    public function setWeightingAlgorithmCode(\horstoeko\ubl\entities\cbc\WeightingAlgorithmCode $weightingAlgorithmCode)
    {
        $this->weightingAlgorithmCode = $weightingAlgorithmCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     *  Awarding Terms. Description. Text
     *  Text describing terms under which the contract is to be awarded.
     *  0..n
     *  Awarding Terms
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
     * Adds as technicalCommitteeDescription
     *
     * BBIE
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\TechnicalCommitteeDescription $technicalCommitteeDescription
     */
    public function addToTechnicalCommitteeDescription(\horstoeko\ubl\entities\cbc\TechnicalCommitteeDescription $technicalCommitteeDescription)
    {
        $this->technicalCommitteeDescription[] = $technicalCommitteeDescription;
        return $this;
    }

    /**
     * isset technicalCommitteeDescription
     *
     * BBIE
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCommitteeDescription($index)
    {
        return isset($this->technicalCommitteeDescription[$index]);
    }

    /**
     * unset technicalCommitteeDescription
     *
     * BBIE
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCommitteeDescription($index)
    {
        unset($this->technicalCommitteeDescription[$index]);
    }

    /**
     * Gets as technicalCommitteeDescription
     *
     * BBIE
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TechnicalCommitteeDescription[]
     */
    public function getTechnicalCommitteeDescription()
    {
        return $this->technicalCommitteeDescription;
    }

    /**
     * Sets a new technicalCommitteeDescription
     *
     * BBIE
     *  Awarding Terms. Technical Committee_ Description. Text
     *  Text describing the committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TechnicalCommitteeDescription[] $technicalCommitteeDescription
     * @return self
     */
    public function setTechnicalCommitteeDescription(array $technicalCommitteeDescription)
    {
        $this->technicalCommitteeDescription = $technicalCommitteeDescription;
        return $this;
    }

    /**
     * Adds as lowTendersDescription
     *
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\LowTendersDescription $lowTendersDescription
     */
    public function addToLowTendersDescription(\horstoeko\ubl\entities\cbc\LowTendersDescription $lowTendersDescription)
    {
        $this->lowTendersDescription[] = $lowTendersDescription;
        return $this;
    }

    /**
     * isset lowTendersDescription
     *
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLowTendersDescription($index)
    {
        return isset($this->lowTendersDescription[$index]);
    }

    /**
     * unset lowTendersDescription
     *
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLowTendersDescription($index)
    {
        unset($this->lowTendersDescription[$index]);
    }

    /**
     * Gets as lowTendersDescription
     *
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LowTendersDescription[]
     */
    public function getLowTendersDescription()
    {
        return $this->lowTendersDescription;
    }

    /**
     * Sets a new lowTendersDescription
     *
     * BBIE
     *  Awarding Terms. Low Tenders_ Description. Text
     *  Text describing the exclusion criterion for abnormally low tenders.
     *  0..n
     *  Awarding Terms
     *  Low Tenders
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LowTendersDescription[] $lowTendersDescription
     * @return self
     */
    public function setLowTendersDescription(array $lowTendersDescription)
    {
        $this->lowTendersDescription = $lowTendersDescription;
        return $this;
    }

    /**
     * Gets as prizeIndicator
     *
     * BBIE
     *  Awarding Terms. Prize Indicator. Indicator
     *  Indicates whether a prize will be awarded (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Prize Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getPrizeIndicator()
    {
        return $this->prizeIndicator;
    }

    /**
     * Sets a new prizeIndicator
     *
     * BBIE
     *  Awarding Terms. Prize Indicator. Indicator
     *  Indicates whether a prize will be awarded (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Prize Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $prizeIndicator
     * @return self
     */
    public function setPrizeIndicator($prizeIndicator)
    {
        $this->prizeIndicator = $prizeIndicator;
        return $this;
    }

    /**
     * Adds as prizeDescription
     *
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PrizeDescription $prizeDescription
     */
    public function addToPrizeDescription(\horstoeko\ubl\entities\cbc\PrizeDescription $prizeDescription)
    {
        $this->prizeDescription[] = $prizeDescription;
        return $this;
    }

    /**
     * isset prizeDescription
     *
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrizeDescription($index)
    {
        return isset($this->prizeDescription[$index]);
    }

    /**
     * unset prizeDescription
     *
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrizeDescription($index)
    {
        unset($this->prizeDescription[$index]);
    }

    /**
     * Gets as prizeDescription
     *
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PrizeDescription[]
     */
    public function getPrizeDescription()
    {
        return $this->prizeDescription;
    }

    /**
     * Sets a new prizeDescription
     *
     * BBIE
     *  Awarding Terms. Prize Description. Text
     *  Number and value of the prizes to be awarded.
     *  0..n
     *  Awarding Terms
     *  Prize Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PrizeDescription[] $prizeDescription
     * @return self
     */
    public function setPrizeDescription(array $prizeDescription)
    {
        $this->prizeDescription = $prizeDescription;
        return $this;
    }

    /**
     * Adds as paymentDescription
     *
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PaymentDescription $paymentDescription
     */
    public function addToPaymentDescription(\horstoeko\ubl\entities\cbc\PaymentDescription $paymentDescription)
    {
        $this->paymentDescription[] = $paymentDescription;
        return $this;
    }

    /**
     * isset paymentDescription
     *
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDescription($index)
    {
        return isset($this->paymentDescription[$index]);
    }

    /**
     * unset paymentDescription
     *
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDescription($index)
    {
        unset($this->paymentDescription[$index]);
    }

    /**
     * Gets as paymentDescription
     *
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaymentDescription[]
     */
    public function getPaymentDescription()
    {
        return $this->paymentDescription;
    }

    /**
     * Sets a new paymentDescription
     *
     * BBIE
     *  Awarding Terms. Payment Description. Text
     *  Details of payments to all participants.
     *  0..n
     *  Awarding Terms
     *  Payment Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PaymentDescription[] $paymentDescription
     * @return self
     */
    public function setPaymentDescription(array $paymentDescription)
    {
        $this->paymentDescription = $paymentDescription;
        return $this;
    }

    /**
     * Gets as followupContractIndicator
     *
     * BBIE
     *  Awarding Terms. Followup Contract Indicator. Indicator
     *  Indicates if any service contract following the contest will be awarded to the winner or one of the winners of the contest (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Followup Contract Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFollowupContractIndicator()
    {
        return $this->followupContractIndicator;
    }

    /**
     * Sets a new followupContractIndicator
     *
     * BBIE
     *  Awarding Terms. Followup Contract Indicator. Indicator
     *  Indicates if any service contract following the contest will be awarded to the winner or one of the winners of the contest (true) or not (false).
     *  0..1
     *  Awarding Terms
     *  Followup Contract Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $followupContractIndicator
     * @return self
     */
    public function setFollowupContractIndicator($followupContractIndicator)
    {
        $this->followupContractIndicator = $followupContractIndicator;
        return $this;
    }

    /**
     * Gets as bindingOnBuyerIndicator
     *
     * BBIE
     *  Awarding Terms. Binding On Buyer Indicator. Indicator
     *  Indicates if the decision is binding on the buyer (true) or not (false). 
     *  0..1
     *  Awarding Terms
     *  Binding On Buyer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBindingOnBuyerIndicator()
    {
        return $this->bindingOnBuyerIndicator;
    }

    /**
     * Sets a new bindingOnBuyerIndicator
     *
     * BBIE
     *  Awarding Terms. Binding On Buyer Indicator. Indicator
     *  Indicates if the decision is binding on the buyer (true) or not (false). 
     *  0..1
     *  Awarding Terms
     *  Binding On Buyer Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $bindingOnBuyerIndicator
     * @return self
     */
    public function setBindingOnBuyerIndicator($bindingOnBuyerIndicator)
    {
        $this->bindingOnBuyerIndicator = $bindingOnBuyerIndicator;
        return $this;
    }

    /**
     * Adds as awardingCriterion
     *
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AwardingCriterion $awardingCriterion
     */
    public function addToAwardingCriterion(\horstoeko\ubl\entities\cac\AwardingCriterion $awardingCriterion)
    {
        $this->awardingCriterion[] = $awardingCriterion;
        return $this;
    }

    /**
     * isset awardingCriterion
     *
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterion($index)
    {
        return isset($this->awardingCriterion[$index]);
    }

    /**
     * unset awardingCriterion
     *
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterion($index)
    {
        unset($this->awardingCriterion[$index]);
    }

    /**
     * Gets as awardingCriterion
     *
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @return \horstoeko\ubl\entities\cac\AwardingCriterion[]
     */
    public function getAwardingCriterion()
    {
        return $this->awardingCriterion;
    }

    /**
     * Sets a new awardingCriterion
     *
     * ASBIE
     *  Awarding Terms. Awarding Criterion
     *  Defines a criterion for awarding this tender.
     *  0..n
     *  Awarding Terms
     *  Awarding Criterion
     *  Awarding Criterion
     *  Awarding Criterion
     *
     * @param \horstoeko\ubl\entities\cac\AwardingCriterion[] $awardingCriterion
     * @return self
     */
    public function setAwardingCriterion(array $awardingCriterion)
    {
        $this->awardingCriterion = $awardingCriterion;
        return $this;
    }

    /**
     * Adds as technicalCommitteePerson
     *
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TechnicalCommitteePerson $technicalCommitteePerson
     */
    public function addToTechnicalCommitteePerson(\horstoeko\ubl\entities\cac\TechnicalCommitteePerson $technicalCommitteePerson)
    {
        $this->technicalCommitteePerson[] = $technicalCommitteePerson;
        return $this;
    }

    /**
     * isset technicalCommitteePerson
     *
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalCommitteePerson($index)
    {
        return isset($this->technicalCommitteePerson[$index]);
    }

    /**
     * unset technicalCommitteePerson
     *
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalCommitteePerson($index)
    {
        unset($this->technicalCommitteePerson[$index]);
    }

    /**
     * Gets as technicalCommitteePerson
     *
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\TechnicalCommitteePerson[]
     */
    public function getTechnicalCommitteePerson()
    {
        return $this->technicalCommitteePerson;
    }

    /**
     * Sets a new technicalCommitteePerson
     *
     * ASBIE
     *  Awarding Terms. Technical Committee_ Person. Person
     *  A member of a committee of experts evaluating the subjective criteria for awarding the contract.
     *  0..n
     *  Awarding Terms
     *  Technical Committee
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\TechnicalCommitteePerson[] $technicalCommitteePerson
     * @return self
     */
    public function setTechnicalCommitteePerson(array $technicalCommitteePerson)
    {
        $this->technicalCommitteePerson = $technicalCommitteePerson;
        return $this;
    }


}

