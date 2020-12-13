<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing GoodsItemType
 *
 * ABIE
 *  Goods Item. Details
 *  A separately identifiable quantity of products of a single product type.
 *  Goods Item
 * XSD Type: GoodsItemType
 */
class GoodsItemType
{

    /**
     * BBIE
     *  Goods Item. Identifier
     *  An identifier for the goods item.
     *  1
     *  Goods Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  Sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *  Customs item number (WCO ID 021), Sequence Position
     *
     * @var \horstoeko\ubl\entities\cbc\SequenceNumberID $sequenceNumberID
     */
    private $sequenceNumberID = null;

    /**
     * BBIE
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the goods item includes hazardous items (dangerous goods).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  Amount declared for Customs purposes of those goods in a consignment which are subject to the same Customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @var \horstoeko\ubl\entities\cbc\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @var \horstoeko\ubl\entities\cbc\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @var \horstoeko\ubl\entities\cbc\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @var \horstoeko\ubl\entities\cbc\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by an insurance for a particular goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @var \horstoeko\ubl\entities\cbc\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * BBIE
     *  Goods Item. Value. Amount
     *  Specifies the amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *  Duty/tax/fee assessment basis in value (WCO ID 116)
     *
     * @var \horstoeko\ubl\entities\cbc\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  Weight (mass) of goods, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @var \horstoeko\ubl\entities\cbc\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  Weight (mass) of goods item, excluding all packing but including any packaging that normally goes with the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  Weight (mass) of goods without any packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @var \horstoeko\ubl\entities\cbc\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ChargeableWeightMeasure $chargeableWeightMeasure
     */
    private $chargeableWeightMeasure = null;

    /**
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  Measurement normally arrived at by multiplying the maximum length, width, and height of the goods item.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @var \horstoeko\ubl\entities\cbc\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Goods Item. Quantity
     *  Number of goods items.
     *  0..1
     *  Goods Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Goods Item. Preference Criterion. Code
     *  Specifies the treatment preference for this good according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion
     *  Code
     *  Code. Type
     *  "Preference Criterion" is used in the following manner in the paper CO of another country (e.g.):
     * "A" - The good is "wholly obtained or produced entirely" in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it "wholly obtained or produced". If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415).
     * "B" - ...
     * "C" - ...
     * "D" - ...
     * "E" - ...
     * "F" - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because....
     * Thus, the column "Preference Criterion" will indicate either A, B, C,...
     *
     * @var \horstoeko\ubl\entities\cbc\PreferenceCriterionCode $preferenceCriterionCode
     */
    private $preferenceCriterionCode = null;

    /**
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  Additional tariff codes required to specify a type of goods for Customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @var \horstoeko\ubl\entities\cbc\RequiredCustomsID $requiredCustomsID
     */
    private $requiredCustomsID = null;

    /**
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  Status of goods as identified by customs for regulation purposes.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @var \horstoeko\ubl\entities\cbc\CustomsStatusCode $customsStatusCode
     */
    private $customsStatusCode = null;

    /**
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the goods in the unit as required by Customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CustomsTariffQuantity $customsTariffQuantity
     */
    private $customsTariffQuantity = null;

    /**
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  Indicates whether the goods have been customs classified for import.
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $customsImportClassifiedIndicator
     */
    private $customsImportClassifiedIndicator = null;

    /**
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item[] $item
     */
    private $item = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @var \horstoeko\ubl\entities\cac\GoodsItemContainer[] $goodsItemContainer
     */
    private $goodsItemContainer = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @var \horstoeko\ubl\entities\cac\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\Temperature[] $temperature
     */
    private $temperature = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @var \horstoeko\ubl\entities\cac\ContainedGoodsItem[] $containedGoodsItem
     */
    private $containedGoodsItem = [
        
    ];

    /**
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  Region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\OriginAddress $originAddress
     */
    private $originAddress = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Goods Item. Identifier
     *  An identifier for the goods item.
     *  1
     *  Goods Item
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
     *  Goods Item. Identifier
     *  An identifier for the goods item.
     *  1
     *  Goods Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as sequenceNumberID
     *
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  Sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *  Customs item number (WCO ID 021), Sequence Position
     *
     * @return \horstoeko\ubl\entities\cbc\SequenceNumberID
     */
    public function getSequenceNumberID()
    {
        return $this->sequenceNumberID;
    }

    /**
     * Sets a new sequenceNumberID
     *
     * BBIE
     *  Goods Item. Sequence Number. Identifier
     *  Sequence number differentiating a specific goods item within a consignment.
     *  0..1
     *  Goods Item
     *  Sequence Number
     *  Identifier
     *  Identifier. Type
     *  Customs item number (WCO ID 021), Sequence Position
     *
     * @param \horstoeko\ubl\entities\cbc\SequenceNumberID $sequenceNumberID
     * @return self
     */
    public function setSequenceNumberID(\horstoeko\ubl\entities\cbc\SequenceNumberID $sequenceNumberID)
    {
        $this->sequenceNumberID = $sequenceNumberID;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     *  Goods Item. Description. Text
     *  Plain language description of a goods item sufficient to identify it for customs, statistical, or transport purposes.
     *  0..n
     *  Goods Item
     *  Description
     *  Text
     *  Text. Type
     *  Description of goods (WCO ID 137)
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
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the goods item includes hazardous items (dangerous goods).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Goods Item. Hazardous Risk_ Indicator. Indicator
     *  Indicates whether the goods item includes hazardous items (dangerous goods).
     *  0..1
     *  Goods Item
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  Amount declared for Customs purposes of those goods in a consignment which are subject to the same Customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @return \horstoeko\ubl\entities\cbc\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Customs_ Value. Amount
     *  Amount declared for Customs purposes of those goods in a consignment which are subject to the same Customs procedure and have the same tariff/statistical heading, country information, and duty regime.
     *  0..1
     *  Goods Item
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *  For Customs Value (WCO ID 108)
     *
     * @param \horstoeko\ubl\entities\cbc\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(\horstoeko\ubl\entities\cbc\DeclaredCustomsValueAmount $declaredCustomsValueAmount)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @return \horstoeko\ubl\entities\cbc\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * BBIE
     *  Goods Item. Declared For Carriage_ Value. Amount
     *  Value declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Goods Item
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Interest in delivery, declared value for carriage
     *
     * @param \horstoeko\ubl\entities\cbc\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(\horstoeko\ubl\entities\cbc\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @return \horstoeko\ubl\entities\cbc\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * BBIE
     *  Goods Item. Declared Statistics_ Value. Amount
     *  Value declared for statistical purposes of those goods in a consignment which have the same statistical heading.
     *  0..1
     *  Goods Item
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value (WCO ID 114)
     *
     * @param \horstoeko\ubl\entities\cbc\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(\horstoeko\ubl\entities\cbc\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @return \horstoeko\ubl\entities\cbc\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * BBIE
     *  Goods Item. Free On Board_ Value. Amount
     *  Monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Goods Item
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @param \horstoeko\ubl\entities\cbc\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(\horstoeko\ubl\entities\cbc\FreeOnBoardValueAmount $freeOnBoardValueAmount)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by an insurance for a particular goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @return \horstoeko\ubl\entities\cbc\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * BBIE
     *  Goods Item. Insurance_ Value. Amount
     *  The amount covered by an insurance for a particular goods item.
     *  0..1
     *  Goods Item
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @param \horstoeko\ubl\entities\cbc\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(\horstoeko\ubl\entities\cbc\InsuranceValueAmount $insuranceValueAmount)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as valueAmount
     *
     * BBIE
     *  Goods Item. Value. Amount
     *  Specifies the amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *  Duty/tax/fee assessment basis in value (WCO ID 116)
     *
     * @return \horstoeko\ubl\entities\cbc\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Goods Item. Value. Amount
     *  Specifies the amount on which a duty, tax, or fee will be assessed.
     *  0..1
     *  Goods Item
     *  Value
     *  Amount
     *  Amount. Type
     *  Duty/tax/fee assessment basis in value (WCO ID 116)
     *
     * @param \horstoeko\ubl\entities\cbc\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(\horstoeko\ubl\entities\cbc\ValueAmount $valueAmount)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  Weight (mass) of goods, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @return \horstoeko\ubl\entities\cbc\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Weight. Measure
     *  Weight (mass) of goods, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Goods Item
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Actual Gross Weight
     *
     * @param \horstoeko\ubl\entities\cbc\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\horstoeko\ubl\entities\cbc\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  Weight (mass) of goods item, excluding all packing but including any packaging that normally goes with the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Goods Item. Net_ Weight. Measure
     *  Weight (mass) of goods item, excluding all packing but including any packaging that normally goes with the goods.
     *  0..1
     *  Goods Item
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\horstoeko\ubl\entities\cbc\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  Weight (mass) of goods without any packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @return \horstoeko\ubl\entities\cbc\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Goods Item. Net Net_ Weight. Measure
     *  Weight (mass) of goods without any packaging.
     *  0..1
     *  Goods Item
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *  Customs Weight (WCO ID 128)
     *
     * @param \horstoeko\ubl\entities\cbc\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\horstoeko\ubl\entities\cbc\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as chargeableWeightMeasure
     *
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasure()
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * Sets a new chargeableWeightMeasure
     *
     * BBIE
     *  Goods Item. Chargeable_ Weight. Measure
     *  Gross weight (mass) on which a charge is to be based.
     *  0..1
     *  Goods Item
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ChargeableWeightMeasure $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(\horstoeko\ubl\entities\cbc\ChargeableWeightMeasure $chargeableWeightMeasure)
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  Measurement normally arrived at by multiplying the maximum length, width, and height of the goods item.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @return \horstoeko\ubl\entities\cbc\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Goods Item. Gross_ Volume. Measure
     *  Measurement normally arrived at by multiplying the maximum length, width, and height of the goods item.
     *  0..1
     *  Goods Item
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Volume, Gross Measurement Cube (GMC), Cube (WCO ID 134)
     *
     * @param \horstoeko\ubl\entities\cbc\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\horstoeko\ubl\entities\cbc\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Goods Item. Net_ Volume. Measure
     *  The volume contained by a goods item, excluding the volume of any packaging material.
     *  0..1
     *  Goods Item
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\horstoeko\ubl\entities\cbc\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Goods Item. Quantity
     *  Number of goods items.
     *  0..1
     *  Goods Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Goods Item. Quantity
     *  Number of goods items.
     *  0..1
     *  Goods Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as preferenceCriterionCode
     *
     * BBIE
     *  Goods Item. Preference Criterion. Code
     *  Specifies the treatment preference for this good according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion
     *  Code
     *  Code. Type
     *  "Preference Criterion" is used in the following manner in the paper CO of another country (e.g.):
     * "A" - The good is "wholly obtained or produced entirely" in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it "wholly obtained or produced". If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415).
     * "B" - ...
     * "C" - ...
     * "D" - ...
     * "E" - ...
     * "F" - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because....
     * Thus, the column "Preference Criterion" will indicate either A, B, C,...
     *
     * @return \horstoeko\ubl\entities\cbc\PreferenceCriterionCode
     */
    public function getPreferenceCriterionCode()
    {
        return $this->preferenceCriterionCode;
    }

    /**
     * Sets a new preferenceCriterionCode
     *
     * BBIE
     *  Goods Item. Preference Criterion. Code
     *  Specifies the treatment preference for this good according to international trading agreements.
     *  0..1
     *  Goods Item
     *  Preference Criterion
     *  Code
     *  Code. Type
     *  "Preference Criterion" is used in the following manner in the paper CO of another country (e.g.):
     * "A" - The good is "wholly obtained or produced entirely" in the territory of one or more of the NAFTA countries as reference in Article 415. Note: The purchase of a good in the territory does not necessarily render it "wholly obtained or produced". If the good is an agricultural good, see also criterion F and Annex 703.2. (Reference: Article 401(a), 415).
     * "B" - ...
     * "C" - ...
     * "D" - ...
     * "E" - ...
     * "F" - The good is an originating agricultural good under preference criterion A,B, or C above and is not subjected to quantitative restriction in the importing NAFTA country because....
     * Thus, the column "Preference Criterion" will indicate either A, B, C,...
     *
     * @param \horstoeko\ubl\entities\cbc\PreferenceCriterionCode $preferenceCriterionCode
     * @return self
     */
    public function setPreferenceCriterionCode(\horstoeko\ubl\entities\cbc\PreferenceCriterionCode $preferenceCriterionCode)
    {
        $this->preferenceCriterionCode = $preferenceCriterionCode;
        return $this;
    }

    /**
     * Gets as requiredCustomsID
     *
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  Additional tariff codes required to specify a type of goods for Customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @return \horstoeko\ubl\entities\cbc\RequiredCustomsID
     */
    public function getRequiredCustomsID()
    {
        return $this->requiredCustomsID;
    }

    /**
     * Sets a new requiredCustomsID
     *
     * BBIE
     *  Goods Item. Required_ Customs Identifier. Identifier
     *  Additional tariff codes required to specify a type of goods for Customs, transport, statistical, or other regulatory purposes.
     *  0..1
     *  Goods Item
     *  Required
     *  Customs Identifier
     *  Identifier
     *  Identifier. Type
     *  Tariff code extensions (WCO ID 255)
     *
     * @param \horstoeko\ubl\entities\cbc\RequiredCustomsID $requiredCustomsID
     * @return self
     */
    public function setRequiredCustomsID(\horstoeko\ubl\entities\cbc\RequiredCustomsID $requiredCustomsID)
    {
        $this->requiredCustomsID = $requiredCustomsID;
        return $this;
    }

    /**
     * Gets as customsStatusCode
     *
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  Status of goods as identified by customs for regulation purposes.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @return \horstoeko\ubl\entities\cbc\CustomsStatusCode
     */
    public function getCustomsStatusCode()
    {
        return $this->customsStatusCode;
    }

    /**
     * Sets a new customsStatusCode
     *
     * BBIE
     *  Goods Item. Customs Status Code. Code
     *  Status of goods as identified by customs for regulation purposes.
     *  0..1
     *  Goods Item
     *  Customs Status Code
     *  Code
     *  Code. Type
     *  Customs status of goods (WCO ID 094)
     *
     * @param \horstoeko\ubl\entities\cbc\CustomsStatusCode $customsStatusCode
     * @return self
     */
    public function setCustomsStatusCode(\horstoeko\ubl\entities\cbc\CustomsStatusCode $customsStatusCode)
    {
        $this->customsStatusCode = $customsStatusCode;
        return $this;
    }

    /**
     * Gets as customsTariffQuantity
     *
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the goods in the unit as required by Customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CustomsTariffQuantity
     */
    public function getCustomsTariffQuantity()
    {
        return $this->customsTariffQuantity;
    }

    /**
     * Sets a new customsTariffQuantity
     *
     * BBIE
     *  Goods Item. Customs Tariff Quantity. Quantity
     *  Quantity of the goods in the unit as required by Customs for tariff, statistical, or fiscal purposes.
     *  0..1
     *  Goods Item
     *  Customs Tariff Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CustomsTariffQuantity $customsTariffQuantity
     * @return self
     */
    public function setCustomsTariffQuantity(\horstoeko\ubl\entities\cbc\CustomsTariffQuantity $customsTariffQuantity)
    {
        $this->customsTariffQuantity = $customsTariffQuantity;
        return $this;
    }

    /**
     * Gets as customsImportClassifiedIndicator
     *
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  Indicates whether the goods have been customs classified for import.
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCustomsImportClassifiedIndicator()
    {
        return $this->customsImportClassifiedIndicator;
    }

    /**
     * Sets a new customsImportClassifiedIndicator
     *
     * BBIE
     *  Goods Item. Customs Import_ Classified Indicator. Indicator
     *  Indicates whether the goods have been customs classified for import.
     *  0..1
     *  Goods Item
     *  Customs Import
     *  Classified Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $customsImportClassifiedIndicator
     * @return self
     */
    public function setCustomsImportClassifiedIndicator($customsImportClassifiedIndicator)
    {
        $this->customsImportClassifiedIndicator = $customsImportClassifiedIndicator;
        return $this;
    }

    /**
     * Adds as item
     *
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Item $item
     */
    public function addToItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @return \horstoeko\ubl\entities\cac\Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Goods Item. Item
     *  Association to a description of the good or service.
     *  0..n
     *  Goods Item
     *  Item
     *  Item
     *
     * @param \horstoeko\ubl\entities\cac\Item[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\GoodsItemContainer $goodsItemContainer
     */
    public function addToGoodsItemContainer(\horstoeko\ubl\entities\cac\GoodsItemContainer $goodsItemContainer)
    {
        $this->goodsItemContainer[] = $goodsItemContainer;
        return $this;
    }

    /**
     * isset goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItemContainer($index)
    {
        return isset($this->goodsItemContainer[$index]);
    }

    /**
     * unset goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItemContainer($index)
    {
        unset($this->goodsItemContainer[$index]);
    }

    /**
     * Gets as goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @return \horstoeko\ubl\entities\cac\GoodsItemContainer[]
     */
    public function getGoodsItemContainer()
    {
        return $this->goodsItemContainer;
    }

    /**
     * Sets a new goodsItemContainer
     *
     * ASBIE
     *  Goods Item. Goods Item Container
     *  Association to describe the transporting of a goods item in a unit of transport equipment (e.g., container).
     *  0..n
     *  Goods Item
     *  Goods Item Container
     *  Goods Item Container
     *
     * @param \horstoeko\ubl\entities\cac\GoodsItemContainer[] $goodsItemContainer
     * @return self
     */
    public function setGoodsItemContainer(array $goodsItemContainer)
    {
        $this->goodsItemContainer = $goodsItemContainer;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\horstoeko\ubl\entities\cac\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \horstoeko\ubl\entities\cac\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Goods Item. Freight_ Allowance Charge. Allowance Charge
     *  Costs incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance (to the extent that they relate to the freight costs).
     *  0..n
     *  Goods Item
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \horstoeko\ubl\entities\cac\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Adds as invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\horstoeko\ubl\entities\cac\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @return \horstoeko\ubl\entities\cac\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * ASBIE
     *  Goods Item. Invoice Line
     *  Association to information directly relating to a line item of an invoice.
     *  0..n
     *  Goods Item
     *  Invoice Line
     *  Invoice Line
     *
     * @param \horstoeko\ubl\entities\cac\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(array $invoiceLine)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }

    /**
     * Adds as temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Temperature $temperature
     */
    public function addToTemperature(\horstoeko\ubl\entities\cac\Temperature $temperature)
    {
        $this->temperature[] = $temperature;
        return $this;
    }

    /**
     * isset temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTemperature($index)
    {
        return isset($this->temperature[$index]);
    }

    /**
     * unset temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTemperature($index)
    {
        unset($this->temperature[$index]);
    }

    /**
     * Gets as temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\Temperature[]
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Sets a new temperature
     *
     * ASBIE
     *  Goods Item. Temperature
     *  Any temperatures associated with the goods.
     *  0..n
     *  Goods Item
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\Temperature[] $temperature
     * @return self
     */
    public function setTemperature(array $temperature)
    {
        $this->temperature = $temperature;
        return $this;
    }

    /**
     * Adds as containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ContainedGoodsItem $containedGoodsItem
     */
    public function addToContainedGoodsItem(\horstoeko\ubl\entities\cac\ContainedGoodsItem $containedGoodsItem)
    {
        $this->containedGoodsItem[] = $containedGoodsItem;
        return $this;
    }

    /**
     * isset containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedGoodsItem($index)
    {
        return isset($this->containedGoodsItem[$index]);
    }

    /**
     * unset containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedGoodsItem($index)
    {
        unset($this->containedGoodsItem[$index]);
    }

    /**
     * Gets as containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @return \horstoeko\ubl\entities\cac\ContainedGoodsItem[]
     */
    public function getContainedGoodsItem()
    {
        return $this->containedGoodsItem;
    }

    /**
     * Sets a new containedGoodsItem
     *
     * ASBIE
     *  Goods Item. Contained_ Goods Item. Goods Item
     *  Associates with any other goods items contained in this goods item.
     *  0..n
     *  Goods Item
     *  Contained
     *  Goods Item
     *  Goods Item
     *
     * @param \horstoeko\ubl\entities\cac\ContainedGoodsItem[] $containedGoodsItem
     * @return self
     */
    public function setContainedGoodsItem(array $containedGoodsItem)
    {
        $this->containedGoodsItem = $containedGoodsItem;
        return $this;
    }

    /**
     * Gets as originAddress
     *
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  Region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\OriginAddress
     */
    public function getOriginAddress()
    {
        return $this->originAddress;
    }

    /**
     * Sets a new originAddress
     *
     * ASBIE
     *  Goods Item. Origin_ Address. Address
     *  Region in which the goods have been produced or manufactured, according to criteria laid down for the purposes of application of the Customs tariff, or quantitative restrictions, or any other measure related to trade.
     *  0..1
     *  Goods Item
     *  Origin
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\OriginAddress $originAddress
     * @return self
     */
    public function setOriginAddress(\horstoeko\ubl\entities\cac\OriginAddress $originAddress)
    {
        $this->originAddress = $originAddress;
        return $this;
    }


}

