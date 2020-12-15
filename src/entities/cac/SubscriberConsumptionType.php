<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SubscriberConsumptionType
 *
 * ABIE
 *  Subscriber Consumption. Details
 *  The consumption for a specific party for given consumption point provided by a numbers of suppliers. An enterprise can have one utility statement for several parties (e.g. a ministry of defence receiving a telephone bill). In this way each subscriber consumption represent a sub utility statement.
 *  Subscriber Consumption
 * XSD Type: SubscriberConsumptionType
 */
class SubscriberConsumptionType
{

    /**
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ConsumptionID $consumptionID
     */
    private $consumptionID = null;

    /**
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SpecificationTypeCode $specificationTypeCode
     */
    private $specificationTypeCode = null;

    /**
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @var \horstoeko\ubl\entities\cbc\TotalMeteredQuantity $totalMeteredQuantity
     */
    private $totalMeteredQuantity = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\SubscriberParty $subscriberParty
     */
    private $subscriberParty = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @var \horstoeko\ubl\entities\cac\UtilityConsumptionPoint $utilityConsumptionPoint
     */
    private $utilityConsumptionPoint = null;

    /**
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @var \horstoeko\ubl\entities\cac\OnAccountPayment[] $onAccountPayment
     */
    private $onAccountPayment = [
        
    ];

    /**
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @var \horstoeko\ubl\entities\cac\Consumption $consumption
     */
    private $consumption = null;

    /**
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @var \horstoeko\ubl\entities\cac\SupplierConsumption[] $supplierConsumption
     */
    private $supplierConsumption = [
        
    ];

    /**
     * Gets as consumptionID
     *
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ConsumptionID
     */
    public function getConsumptionID()
    {
        return $this->consumptionID;
    }

    /**
     * Sets a new consumptionID
     *
     * BBIE
     *  Subscriber Consumption. Consumption Identifier. Identifier
     *  The identifier tor this specification.
     *  0..1
     *  Subscriber Consumption
     *  Consumption Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ConsumptionID $consumptionID
     * @return self
     */
    public function setConsumptionID(\horstoeko\ubl\entities\cbc\ConsumptionID $consumptionID)
    {
        $this->consumptionID = $consumptionID;
        return $this;
    }

    /**
     * Gets as specificationTypeCode
     *
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SpecificationTypeCode
     */
    public function getSpecificationTypeCode()
    {
        return $this->specificationTypeCode;
    }

    /**
     * Sets a new specificationTypeCode
     *
     * BBIE
     *  Subscriber Consumption. Specification Type Code. Code
     *  The code which specifies the type of this specification, e.g. an on account specification or the yearly specification.
     *  0..1
     *  Subscriber Consumption
     *  Specification Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SpecificationTypeCode $specificationTypeCode
     * @return self
     */
    public function setSpecificationTypeCode(\horstoeko\ubl\entities\cbc\SpecificationTypeCode $specificationTypeCode)
    {
        $this->specificationTypeCode = $specificationTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
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
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
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
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
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
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
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
     *  Subscriber Consumption. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Subscriber Consumption
     *  Note
     *  Text
     *  Text. Type
     *  This is how we have calculating your yearly statement
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
     * Gets as totalMeteredQuantity
     *
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @return \horstoeko\ubl\entities\cbc\TotalMeteredQuantity
     */
    public function getTotalMeteredQuantity()
    {
        return $this->totalMeteredQuantity;
    }

    /**
     * Sets a new totalMeteredQuantity
     *
     * BBIE
     *  Subscriber Consumption. Total Metered Quantity. Quantity
     *  The total quantity consumed, as calculated from meter readings.
     *  0..1
     *  Subscriber Consumption
     *  Total Metered Quantity
     *  Quantity
     *  Quantity. Type
     *  2000.0
     *
     * @param \horstoeko\ubl\entities\cbc\TotalMeteredQuantity $totalMeteredQuantity
     * @return self
     */
    public function setTotalMeteredQuantity(\horstoeko\ubl\entities\cbc\TotalMeteredQuantity $totalMeteredQuantity)
    {
        $this->totalMeteredQuantity = $totalMeteredQuantity;
        return $this;
    }

    /**
     * Gets as subscriberParty
     *
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\SubscriberParty
     */
    public function getSubscriberParty()
    {
        return $this->subscriberParty;
    }

    /**
     * Sets a new subscriberParty
     *
     * ASBIE
     *  Subscriber Consumption. Subscriber_ Party. Party
     *  The party subscribing to the utility.
     *  0..1
     *  Subscriber Consumption
     *  Subscriber
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\SubscriberParty $subscriberParty
     * @return self
     */
    public function setSubscriberParty(\horstoeko\ubl\entities\cac\SubscriberParty $subscriberParty)
    {
        $this->subscriberParty = $subscriberParty;
        return $this;
    }

    /**
     * Gets as utilityConsumptionPoint
     *
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @return \horstoeko\ubl\entities\cac\UtilityConsumptionPoint
     */
    public function getUtilityConsumptionPoint()
    {
        return $this->utilityConsumptionPoint;
    }

    /**
     * Sets a new utilityConsumptionPoint
     *
     * ASBIE
     *  Subscriber Consumption. Utility_ Consumption Point. Consumption Point
     *  The point at which the utility is consumed.
     *  1
     *  Subscriber Consumption
     *  Utility
     *  Consumption Point
     *  Consumption Point
     *  Consumption Point
     *
     * @param \horstoeko\ubl\entities\cac\UtilityConsumptionPoint $utilityConsumptionPoint
     * @return self
     */
    public function setUtilityConsumptionPoint(\horstoeko\ubl\entities\cac\UtilityConsumptionPoint $utilityConsumptionPoint)
    {
        $this->utilityConsumptionPoint = $utilityConsumptionPoint;
        return $this;
    }

    /**
     * Adds as onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\OnAccountPayment $onAccountPayment
     */
    public function addToOnAccountPayment(\horstoeko\ubl\entities\cac\OnAccountPayment $onAccountPayment)
    {
        $this->onAccountPayment[] = $onAccountPayment;
        return $this;
    }

    /**
     * isset onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnAccountPayment($index)
    {
        return isset($this->onAccountPayment[$index]);
    }

    /**
     * unset onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnAccountPayment($index)
    {
        unset($this->onAccountPayment[$index]);
    }

    /**
     * Gets as onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @return \horstoeko\ubl\entities\cac\OnAccountPayment[]
     */
    public function getOnAccountPayment()
    {
        return $this->onAccountPayment;
    }

    /**
     * Sets a new onAccountPayment
     *
     * ASBIE
     *  Subscriber Consumption. On Account Payment
     *  The planned prepayments (on account) regarding this subscription.
     *  0..n
     *  Subscriber Consumption
     *  On Account Payment
     *  On Account Payment
     *  On Account Payment
     *
     * @param \horstoeko\ubl\entities\cac\OnAccountPayment[] $onAccountPayment
     * @return self
     */
    public function setOnAccountPayment(array $onAccountPayment)
    {
        $this->onAccountPayment = $onAccountPayment;
        return $this;
    }

    /**
     * Gets as consumption
     *
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @return \horstoeko\ubl\entities\cac\Consumption
     */
    public function getConsumption()
    {
        return $this->consumption;
    }

    /**
     * Sets a new consumption
     *
     * ASBIE
     *  Subscriber Consumption. Consumption
     *  The consumption in case the consumption is from one and only one supplier.
     *  0..1
     *  Subscriber Consumption
     *  Consumption
     *  Consumption
     *  Consumption
     *
     * @param \horstoeko\ubl\entities\cac\Consumption $consumption
     * @return self
     */
    public function setConsumption(\horstoeko\ubl\entities\cac\Consumption $consumption)
    {
        $this->consumption = $consumption;
        return $this;
    }

    /**
     * Adds as supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SupplierConsumption $supplierConsumption
     */
    public function addToSupplierConsumption(\horstoeko\ubl\entities\cac\SupplierConsumption $supplierConsumption)
    {
        $this->supplierConsumption[] = $supplierConsumption;
        return $this;
    }

    /**
     * isset supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplierConsumption($index)
    {
        return isset($this->supplierConsumption[$index]);
    }

    /**
     * unset supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplierConsumption($index)
    {
        unset($this->supplierConsumption[$index]);
    }

    /**
     * Gets as supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @return \horstoeko\ubl\entities\cac\SupplierConsumption[]
     */
    public function getSupplierConsumption()
    {
        return $this->supplierConsumption;
    }

    /**
     * Sets a new supplierConsumption
     *
     * ASBIE
     *  Subscriber Consumption. Supplier Consumption
     *  The consumption in case the consumption is from more than one supplier.
     *  0..n
     *  Subscriber Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *  Supplier Consumption
     *
     * @param \horstoeko\ubl\entities\cac\SupplierConsumption[] $supplierConsumption
     * @return self
     */
    public function setSupplierConsumption(array $supplierConsumption)
    {
        $this->supplierConsumption = $supplierConsumption;
        return $this;
    }


}

