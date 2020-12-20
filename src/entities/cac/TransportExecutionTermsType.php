<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TransportExecutionTermsType
 *
 * ABIE
 *  Transport Execution Terms. Details
 *  A class to describe terms applying to a transport execution plan.
 *  Transport Execution Terms
 * XSD Type: TransportExecutionTermsType
 */
class TransportExecutionTermsType
{

    /**
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportUserSpecialTerms[] $transportUserSpecialTerms
     */
    private $transportUserSpecialTerms = [
        
    ];

    /**
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     */
    private $transportServiceProviderSpecialTerms = [
        
    ];

    /**
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ChangeConditions[] $changeConditions
     */
    private $changeConditions = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\BonusPaymentTerms $bonusPaymentTerms
     */
    private $bonusPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\CommissionPaymentTerms $commissionPaymentTerms
     */
    private $commissionPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\PenaltyPaymentTerms $penaltyPaymentTerms
     */
    private $penaltyPaymentTerms = null;

    /**
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @var \horstoeko\ubl\entities\cac\EnvironmentalEmission[] $environmentalEmission
     */
    private $environmentalEmission = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @var \horstoeko\ubl\entities\cac\NotificationRequirement[] $notificationRequirement
     */
    private $notificationRequirement = [
        
    ];

    /**
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\ServiceChargePaymentTerms $serviceChargePaymentTerms
     */
    private $serviceChargePaymentTerms = null;

    /**
     * Adds as transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\TransportUserSpecialTerms $transportUserSpecialTerms
     */
    public function addToTransportUserSpecialTerms(\horstoeko\ubl\entities\cbc\TransportUserSpecialTerms $transportUserSpecialTerms)
    {
        $this->transportUserSpecialTerms[] = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * isset transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTransportUserSpecialTerms($index)
    {
        return isset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * unset transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTransportUserSpecialTerms($index)
    {
        unset($this->transportUserSpecialTerms[$index]);
    }

    /**
     * Gets as transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportUserSpecialTerms[]
     */
    public function getTransportUserSpecialTerms()
    {
        return $this->transportUserSpecialTerms;
    }

    /**
     * Sets a new transportUserSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport User_ Special Terms. Text
     *  Text describing special terms specified by the transport user.
     *  0..n
     *  Transport Execution Terms
     *  Transport User
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TransportUserSpecialTerms[] $transportUserSpecialTerms
     * @return self
     */
    public function setTransportUserSpecialTerms(array $transportUserSpecialTerms)
    {
        $this->transportUserSpecialTerms = $transportUserSpecialTerms;
        return $this;
    }

    /**
     * Adds as transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms
     */
    public function addToTransportServiceProviderSpecialTerms(\horstoeko\ubl\entities\cbc\TransportServiceProviderSpecialTerms $transportServiceProviderSpecialTerms)
    {
        $this->transportServiceProviderSpecialTerms[] = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * isset transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTransportServiceProviderSpecialTerms($index)
    {
        return isset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * unset transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTransportServiceProviderSpecialTerms($index)
    {
        unset($this->transportServiceProviderSpecialTerms[$index]);
    }

    /**
     * Gets as transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportServiceProviderSpecialTerms[]
     */
    public function getTransportServiceProviderSpecialTerms()
    {
        return $this->transportServiceProviderSpecialTerms;
    }

    /**
     * Sets a new transportServiceProviderSpecialTerms
     *
     * BBIE
     *  Transport Execution Terms. Transport Service Provider_ Special Terms. Text
     *  Text describing special terms specified by the transport service provider.
     *  0..n
     *  Transport Execution Terms
     *  Transport Service Provider
     *  Special Terms
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TransportServiceProviderSpecialTerms[] $transportServiceProviderSpecialTerms
     * @return self
     */
    public function setTransportServiceProviderSpecialTerms(array $transportServiceProviderSpecialTerms)
    {
        $this->transportServiceProviderSpecialTerms = $transportServiceProviderSpecialTerms;
        return $this;
    }

    /**
     * Adds as changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\ChangeConditions $changeConditions
     */
    public function addToChangeConditions(\horstoeko\ubl\entities\cbc\ChangeConditions $changeConditions)
    {
        $this->changeConditions[] = $changeConditions;
        return $this;
    }

    /**
     * isset changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetChangeConditions($index)
    {
        return isset($this->changeConditions[$index]);
    }

    /**
     * unset changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetChangeConditions($index)
    {
        unset($this->changeConditions[$index]);
    }

    /**
     * Gets as changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ChangeConditions[]
     */
    public function getChangeConditions()
    {
        return $this->changeConditions;
    }

    /**
     * Sets a new changeConditions
     *
     * BBIE
     *  Transport Execution Terms. Change Conditions. Text
     *  Text describing conditions applying to a change of these transport execution terms.
     *  0..n
     *  Transport Execution Terms
     *  Change Conditions
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ChangeConditions[] $changeConditions
     * @return self
     */
    public function setChangeConditions(array $changeConditions)
    {
        $this->changeConditions = $changeConditions;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Payment Terms
     *  Payment terms associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Transport Execution Terms. Delivery Terms
     *  Delivery terms (e.g., Incoterms) associated with the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param  \horstoeko\ubl\entities\cac\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(array $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as bonusPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\BonusPaymentTerms
     */
    public function getBonusPaymentTerms()
    {
        return $this->bonusPaymentTerms;
    }

    /**
     * Sets a new bonusPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Bonus_ Payment Terms. Payment Terms
     *  Terms relating to payment of applicable bonuses associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Bonus
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\BonusPaymentTerms $bonusPaymentTerms
     * @return self
     */
    public function setBonusPaymentTerms(\horstoeko\ubl\entities\cac\BonusPaymentTerms $bonusPaymentTerms)
    {
        $this->bonusPaymentTerms = $bonusPaymentTerms;
        return $this;
    }

    /**
     * Gets as commissionPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\CommissionPaymentTerms
     */
    public function getCommissionPaymentTerms()
    {
        return $this->commissionPaymentTerms;
    }

    /**
     * Sets a new commissionPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Commission_ Payment Terms. Payment Terms
     *  Terms of payment applying to a commission specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Commission
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\CommissionPaymentTerms $commissionPaymentTerms
     * @return self
     */
    public function setCommissionPaymentTerms(\horstoeko\ubl\entities\cac\CommissionPaymentTerms $commissionPaymentTerms)
    {
        $this->commissionPaymentTerms = $commissionPaymentTerms;
        return $this;
    }

    /**
     * Gets as penaltyPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\PenaltyPaymentTerms
     */
    public function getPenaltyPaymentTerms()
    {
        return $this->penaltyPaymentTerms;
    }

    /**
     * Sets a new penaltyPaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Penalty_ Payment Terms. Payment Terms
     *  Terms of payment applying to a penalty specified in the transport execution plan.
     *  0..1
     *  Transport Execution Terms
     *  Penalty
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\PenaltyPaymentTerms $penaltyPaymentTerms
     * @return self
     */
    public function setPenaltyPaymentTerms(\horstoeko\ubl\entities\cac\PenaltyPaymentTerms $penaltyPaymentTerms)
    {
        $this->penaltyPaymentTerms = $penaltyPaymentTerms;
        return $this;
    }

    /**
     * Adds as environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\EnvironmentalEmission $environmentalEmission
     */
    public function addToEnvironmentalEmission(\horstoeko\ubl\entities\cac\EnvironmentalEmission $environmentalEmission)
    {
        $this->environmentalEmission[] = $environmentalEmission;
        return $this;
    }

    /**
     * isset environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetEnvironmentalEmission($index)
    {
        return isset($this->environmentalEmission[$index]);
    }

    /**
     * unset environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetEnvironmentalEmission($index)
    {
        unset($this->environmentalEmission[$index]);
    }

    /**
     * Gets as environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return \horstoeko\ubl\entities\cac\EnvironmentalEmission[]
     */
    public function getEnvironmentalEmission()
    {
        return $this->environmentalEmission;
    }

    /**
     * Sets a new environmentalEmission
     *
     * ASBIE
     *  Transport Execution Terms. Environmental Emission
     *  An environmental emission resulting from the transportation service.
     *  0..n
     *  Transport Execution Terms
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param  \horstoeko\ubl\entities\cac\EnvironmentalEmission[] $environmentalEmission
     * @return self
     */
    public function setEnvironmentalEmission(array $environmentalEmission)
    {
        $this->environmentalEmission = $environmentalEmission;
        return $this;
    }

    /**
     * Adds as notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\NotificationRequirement $notificationRequirement
     */
    public function addToNotificationRequirement(\horstoeko\ubl\entities\cac\NotificationRequirement $notificationRequirement)
    {
        $this->notificationRequirement[] = $notificationRequirement;
        return $this;
    }

    /**
     * isset notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetNotificationRequirement($index)
    {
        return isset($this->notificationRequirement[$index]);
    }

    /**
     * unset notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetNotificationRequirement($index)
    {
        unset($this->notificationRequirement[$index]);
    }

    /**
     * Gets as notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @return \horstoeko\ubl\entities\cac\NotificationRequirement[]
     */
    public function getNotificationRequirement()
    {
        return $this->notificationRequirement;
    }

    /**
     * Sets a new notificationRequirement
     *
     * ASBIE
     *  Transport Execution Terms. Notification Requirement
     *  A notification requirement related to the transportation service; e.g., a requirement that the transport user should be notified when goods are ready for pickup.
     *  0..n
     *  Transport Execution Terms
     *  Notification Requirement
     *  Notification Requirement
     *  Notification Requirement
     *
     * @param  \horstoeko\ubl\entities\cac\NotificationRequirement[] $notificationRequirement
     * @return self
     */
    public function setNotificationRequirement(array $notificationRequirement)
    {
        $this->notificationRequirement = $notificationRequirement;
        return $this;
    }

    /**
     * Gets as serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\ServiceChargePaymentTerms
     */
    public function getServiceChargePaymentTerms()
    {
        return $this->serviceChargePaymentTerms;
    }

    /**
     * Sets a new serviceChargePaymentTerms
     *
     * ASBIE
     *  Transport Execution Terms. Service Charge_ Payment Terms. Payment Terms
     *  Payment terms for the service charge associated with the transport service.
     *  0..1
     *  Transport Execution Terms
     *  Service Charge
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param  \horstoeko\ubl\entities\cac\ServiceChargePaymentTerms $serviceChargePaymentTerms
     * @return self
     */
    public function setServiceChargePaymentTerms(\horstoeko\ubl\entities\cac\ServiceChargePaymentTerms $serviceChargePaymentTerms)
    {
        $this->serviceChargePaymentTerms = $serviceChargePaymentTerms;
        return $this;
    }


}

