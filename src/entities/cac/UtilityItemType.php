<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing UtilityItemType
 *
 * ABIE
 *  Utility Item. Details
 *  A class to describe the consumption of a utility product.
 *  Utility Item
 * XSD Type: UtilityItemType
 */
class UtilityItemType
{

    /**
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \horstoeko\ubl\entities\cbc\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @var \horstoeko\ubl\entities\cbc\PackQuantity $packQuantity
     */
    private $packQuantity = null;

    /**
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PackSizeNumeric $packSizeNumeric
     */
    private $packSizeNumeric = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \horstoeko\ubl\entities\cbc\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \horstoeko\ubl\entities\cbc\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CurrentChargeType $currentChargeType
     */
    private $currentChargeType = null;

    /**
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CurrentChargeTypeCode $currentChargeTypeCode
     */
    private $currentChargeTypeCode = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OneTimeChargeType $oneTimeChargeType
     */
    private $oneTimeChargeType = null;

    /**
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     */
    private $oneTimeChargeTypeCode = null;

    /**
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @var \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
     */
    private $taxCategory = null;

    /**
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \horstoeko\ubl\entities\cac\Contract $contract
     */
    private $contract = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     *  Utility Item. Identifier
     *  An identifier for this utility item.
     *  1
     *  Utility Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
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
     * Gets as subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \horstoeko\ubl\entities\cbc\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Utility Item. Subscriber Identifier. Identifier
     *  An identifier for the subscriber to the utility.
     *  0..1
     *  Utility Item
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param  \horstoeko\ubl\entities\cbc\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(\horstoeko\ubl\entities\cbc\SubscriberID $subscriberID)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Utility Item. Subscriber Type. Text
     *  Identification of the subscriber type, expressed as text..
     *  0..1
     *  Utility Item
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(\horstoeko\ubl\entities\cbc\SubscriberType $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Utility Item. Subscriber Type Code. Code
     *  The code identifying for the service type.
     *  0..1
     *  Utility Item
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(\horstoeko\ubl\entities\cbc\SubscriberTypeCode $subscriberTypeCode)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     *  Utility Item. Description. Text
     *  Text describing the consumption product.
     *  0..n
     *  Utility Item
     *  Description
     *  Text
     *  Text. Type
     *  Basis price quarter (5.761 kWh per 35,58 cents), Transport of electricity, etc.
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
     * Gets as packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @return \horstoeko\ubl\entities\cbc\PackQuantity
     */
    public function getPackQuantity()
    {
        return $this->packQuantity;
    }

    /**
     * Sets a new packQuantity
     *
     * BBIE
     *  Utility Item. Pack Quantity. Quantity
     *  The unit packaging quantity.
     *  0..1
     *  Utility Item
     *  Pack Quantity
     *  Quantity
     *  Quantity. Type
     *  1
     *
     * @param  \horstoeko\ubl\entities\cbc\PackQuantity $packQuantity
     * @return self
     */
    public function setPackQuantity(\horstoeko\ubl\entities\cbc\PackQuantity $packQuantity)
    {
        $this->packQuantity = $packQuantity;
        return $this;
    }

    /**
     * Gets as packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PackSizeNumeric
     */
    public function getPackSizeNumeric()
    {
        return $this->packSizeNumeric;
    }

    /**
     * Sets a new packSizeNumeric
     *
     * BBIE
     *  Utility Item. Pack Size. Numeric
     *  The number of items in a pack.
     *  0..1
     *  Utility Item
     *  Pack Size
     *  Numeric
     *  Numeric. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PackSizeNumeric $packSizeNumeric
     * @return self
     */
    public function setPackSizeNumeric(\horstoeko\ubl\entities\cbc\PackSizeNumeric $packSizeNumeric)
    {
        $this->packSizeNumeric = $packSizeNumeric;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \horstoeko\ubl\entities\cbc\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Utility Item. Consumption Type. Text
     *  The type of product consumed, expressed as text.
     *  0..1
     *  Utility Item
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param  \horstoeko\ubl\entities\cbc\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(\horstoeko\ubl\entities\cbc\ConsumptionType $consumptionType)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \horstoeko\ubl\entities\cbc\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Utility Item. Consumption Type Code. Code
     *  The type of product consumed, expressed as a code.
     *  0..1
     *  Utility Item
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param  \horstoeko\ubl\entities\cbc\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(\horstoeko\ubl\entities\cbc\ConsumptionTypeCode $consumptionTypeCode)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CurrentChargeType
     */
    public function getCurrentChargeType()
    {
        return $this->currentChargeType;
    }

    /**
     * Sets a new currentChargeType
     *
     * BBIE
     *  Utility Item. Current_ Charge Type. Text
     *  Information of the actual payments type for the utility Item
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CurrentChargeType $currentChargeType
     * @return self
     */
    public function setCurrentChargeType(\horstoeko\ubl\entities\cbc\CurrentChargeType $currentChargeType)
    {
        $this->currentChargeType = $currentChargeType;
        return $this;
    }

    /**
     * Gets as currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CurrentChargeTypeCode
     */
    public function getCurrentChargeTypeCode()
    {
        return $this->currentChargeTypeCode;
    }

    /**
     * Sets a new currentChargeTypeCode
     *
     * BBIE
     *  Utility Item. Current_ Charge Type Code. Code
     *  Information of the actual payments type code expressed as a code
     *  0..1
     *  Utility Item
     *  Current
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CurrentChargeTypeCode $currentChargeTypeCode
     * @return self
     */
    public function setCurrentChargeTypeCode(\horstoeko\ubl\entities\cbc\CurrentChargeTypeCode $currentChargeTypeCode)
    {
        $this->currentChargeTypeCode = $currentChargeTypeCode;
        return $this;
    }

    /**
     * Gets as oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OneTimeChargeType
     */
    public function getOneTimeChargeType()
    {
        return $this->oneTimeChargeType;
    }

    /**
     * Sets a new oneTimeChargeType
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type. Text
     *  Information about the one-time payment type in case everything is paid One time
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\OneTimeChargeType $oneTimeChargeType
     * @return self
     */
    public function setOneTimeChargeType(\horstoeko\ubl\entities\cbc\OneTimeChargeType $oneTimeChargeType)
    {
        $this->oneTimeChargeType = $oneTimeChargeType;
        return $this;
    }

    /**
     * Gets as oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OneTimeChargeTypeCode
     */
    public function getOneTimeChargeTypeCode()
    {
        return $this->oneTimeChargeTypeCode;
    }

    /**
     * Sets a new oneTimeChargeTypeCode
     *
     * BBIE
     *  Utility Item. One Time_ Charge Type Code. Code
     *  Information about the one-time payment type code
     *  0..1
     *  Utility Item
     *  One Time
     *  Charge Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\OneTimeChargeTypeCode $oneTimeChargeTypeCode
     * @return self
     */
    public function setOneTimeChargeTypeCode(\horstoeko\ubl\entities\cbc\OneTimeChargeTypeCode $oneTimeChargeTypeCode)
    {
        $this->oneTimeChargeTypeCode = $oneTimeChargeTypeCode;
        return $this;
    }

    /**
     * Gets as taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @return \horstoeko\ubl\entities\cac\TaxCategory
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * Sets a new taxCategory
     *
     * ASBIE
     *  Utility Item. Tax Category
     *  The tax category applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Tax Category
     *  Tax Category
     *  Tax Category
     *
     * @param  \horstoeko\ubl\entities\cac\TaxCategory $taxCategory
     * @return self
     */
    public function setTaxCategory(\horstoeko\ubl\entities\cac\TaxCategory $taxCategory)
    {
        $this->taxCategory = $taxCategory;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \horstoeko\ubl\entities\cac\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Utility Item. Contract
     *  A contract setting forth conditions applicable to this utility item.
     *  0..1
     *  Utility Item
     *  Contract
     *  Contract
     *  Contract
     *
     * @param  \horstoeko\ubl\entities\cac\Contract $contract
     * @return self
     */
    public function setContract(\horstoeko\ubl\entities\cac\Contract $contract)
    {
        $this->contract = $contract;
        return $this;
    }


}

