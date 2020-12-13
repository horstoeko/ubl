<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing HazardousGoodsTransitType
 *
 * ABIE
 *  Hazardous Goods Transit. Details
 *  Information about Hazardous Goods Transit.
 *  Hazardous Goods Transit
 * XSD Type: HazardousGoodsTransitType
 */
class HazardousGoodsTransitType
{

    /**
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  The identifier for a transport emergency card, describing the actions to be taken in an emergency in transporting the Hazardous Goods. May be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @var \horstoeko\ubl\entities\cbc\TransportEmergencyCardCode $transportEmergencyCardCode
     */
    private $transportEmergencyCardCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code identifying the packaging requirement for the transportation of the Hazardous Goods as assigned by IATA/IMDB/ADR/RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @var \horstoeko\ubl\entities\cbc\PackingCriteriaCode $packingCriteriaCode
     */
    private $packingCriteriaCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  The identifier for a set of legal regulations that govern the transportation of the Hazardous Goods, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\HazardousRegulationCode $hazardousRegulationCode
     */
    private $hazardousRegulationCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  An identifier for the Inhalation Toxicity Hazard Zone for the Hazardous Goods, as defined by the US Department of Transportation, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     */
    private $inhalationToxicityZoneCode = null;

    /**
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  Code specifying the authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @var \horstoeko\ubl\entities\cbc\TransportAuthorizationCode $transportAuthorizationCode
     */
    private $transportAuthorizationCode = null;

    /**
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  An association to Maximum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\MaximumTemperature $maximumTemperature
     */
    private $maximumTemperature = null;

    /**
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  An association to Minimum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\MinimumTemperature $minimumTemperature
     */
    private $minimumTemperature = null;

    /**
     * Gets as transportEmergencyCardCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  The identifier for a transport emergency card, describing the actions to be taken in an emergency in transporting the Hazardous Goods. May be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @return \horstoeko\ubl\entities\cbc\TransportEmergencyCardCode
     */
    public function getTransportEmergencyCardCode()
    {
        return $this->transportEmergencyCardCode;
    }

    /**
     * Sets a new transportEmergencyCardCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Emergency Card Code. Code
     *  The identifier for a transport emergency card, describing the actions to be taken in an emergency in transporting the Hazardous Goods. May be the identity number of a hazardous emergency response plan assigned by the appropriate authority.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Emergency Card Code
     *  Code
     *  Code. Type
     *  TREM card
     *
     * @param \horstoeko\ubl\entities\cbc\TransportEmergencyCardCode $transportEmergencyCardCode
     * @return self
     */
    public function setTransportEmergencyCardCode(\horstoeko\ubl\entities\cbc\TransportEmergencyCardCode $transportEmergencyCardCode)
    {
        $this->transportEmergencyCardCode = $transportEmergencyCardCode;
        return $this;
    }

    /**
     * Gets as packingCriteriaCode
     *
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code identifying the packaging requirement for the transportation of the Hazardous Goods as assigned by IATA/IMDB/ADR/RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @return \horstoeko\ubl\entities\cbc\PackingCriteriaCode
     */
    public function getPackingCriteriaCode()
    {
        return $this->packingCriteriaCode;
    }

    /**
     * Sets a new packingCriteriaCode
     *
     * BBIE
     *  Hazardous Goods Transit. Packing Criteria Code. Code
     *  A code identifying the packaging requirement for the transportation of the Hazardous Goods as assigned by IATA/IMDB/ADR/RID etc.
     *  0..1
     *  Hazardous Goods Transit
     *  Packing Criteria Code
     *  Code
     *  Code. Type
     *  Packing Group
     *
     * @param \horstoeko\ubl\entities\cbc\PackingCriteriaCode $packingCriteriaCode
     * @return self
     */
    public function setPackingCriteriaCode(\horstoeko\ubl\entities\cbc\PackingCriteriaCode $packingCriteriaCode)
    {
        $this->packingCriteriaCode = $packingCriteriaCode;
        return $this;
    }

    /**
     * Gets as hazardousRegulationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  The identifier for a set of legal regulations that govern the transportation of the Hazardous Goods, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\HazardousRegulationCode
     */
    public function getHazardousRegulationCode()
    {
        return $this->hazardousRegulationCode;
    }

    /**
     * Sets a new hazardousRegulationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Hazardous Regulation Code. Code
     *  The identifier for a set of legal regulations that govern the transportation of the Hazardous Goods, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Hazardous Regulation Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\HazardousRegulationCode $hazardousRegulationCode
     * @return self
     */
    public function setHazardousRegulationCode(\horstoeko\ubl\entities\cbc\HazardousRegulationCode $hazardousRegulationCode)
    {
        $this->hazardousRegulationCode = $hazardousRegulationCode;
        return $this;
    }

    /**
     * Gets as inhalationToxicityZoneCode
     *
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  An identifier for the Inhalation Toxicity Hazard Zone for the Hazardous Goods, as defined by the US Department of Transportation, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InhalationToxicityZoneCode
     */
    public function getInhalationToxicityZoneCode()
    {
        return $this->inhalationToxicityZoneCode;
    }

    /**
     * Sets a new inhalationToxicityZoneCode
     *
     * BBIE
     *  Hazardous Goods Transit. Inhalation Toxicity Zone Code. Code
     *  An identifier for the Inhalation Toxicity Hazard Zone for the Hazardous Goods, as defined by the US Department of Transportation, expressed as a code.
     *  0..1
     *  Hazardous Goods Transit
     *  Inhalation Toxicity Zone Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\InhalationToxicityZoneCode $inhalationToxicityZoneCode
     * @return self
     */
    public function setInhalationToxicityZoneCode(\horstoeko\ubl\entities\cbc\InhalationToxicityZoneCode $inhalationToxicityZoneCode)
    {
        $this->inhalationToxicityZoneCode = $inhalationToxicityZoneCode;
        return $this;
    }

    /**
     * Gets as transportAuthorizationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  Code specifying the authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @return \horstoeko\ubl\entities\cbc\TransportAuthorizationCode
     */
    public function getTransportAuthorizationCode()
    {
        return $this->transportAuthorizationCode;
    }

    /**
     * Sets a new transportAuthorizationCode
     *
     * BBIE
     *  Hazardous Goods Transit. Transport Authorization Code. Code
     *  Code specifying the authorization for the transportation of hazardous cargo.
     *  0..1
     *  Hazardous Goods Transit
     *  Transport Authorization Code
     *  Code
     *  Code. Type
     *  Permission for Transport
     *
     * @param \horstoeko\ubl\entities\cbc\TransportAuthorizationCode $transportAuthorizationCode
     * @return self
     */
    public function setTransportAuthorizationCode(\horstoeko\ubl\entities\cbc\TransportAuthorizationCode $transportAuthorizationCode)
    {
        $this->transportAuthorizationCode = $transportAuthorizationCode;
        return $this;
    }

    /**
     * Gets as maximumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  An association to Maximum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\MaximumTemperature
     */
    public function getMaximumTemperature()
    {
        return $this->maximumTemperature;
    }

    /**
     * Sets a new maximumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Maximum_ Temperature. Temperature
     *  An association to Maximum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Maximum
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\MaximumTemperature $maximumTemperature
     * @return self
     */
    public function setMaximumTemperature(\horstoeko\ubl\entities\cac\MaximumTemperature $maximumTemperature)
    {
        $this->maximumTemperature = $maximumTemperature;
        return $this;
    }

    /**
     * Gets as minimumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  An association to Minimum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\MinimumTemperature
     */
    public function getMinimumTemperature()
    {
        return $this->minimumTemperature;
    }

    /**
     * Sets a new minimumTemperature
     *
     * ASBIE
     *  Hazardous Goods Transit. Minimum_ Temperature. Temperature
     *  An association to Minimum Temperature (at which the Hazardous Goods can be safely transported).
     *  0..1
     *  Hazardous Goods Transit
     *  Minimum
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\MinimumTemperature $minimumTemperature
     * @return self
     */
    public function setMinimumTemperature(\horstoeko\ubl\entities\cac\MinimumTemperature $minimumTemperature)
    {
        $this->minimumTemperature = $minimumTemperature;
        return $this;
    }


}

