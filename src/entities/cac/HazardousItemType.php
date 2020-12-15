<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing HazardousItemType
 *
 * ABIE
 *  Hazardous Item. Details
 *  A class to describe a hazardous item.
 *  Hazardous Item
 * XSD Type: HazardousItemType
 */
class HazardousItemType
{

    /**
     * BBIE
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @var \horstoeko\ubl\entities\cbc\PlacardNotation $placardNotation
     */
    private $placardNotation = null;

    /**
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @var \horstoeko\ubl\entities\cbc\PlacardEndorsement $placardEndorsement
     */
    private $placardEndorsement = null;

    /**
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @var \horstoeko\ubl\entities\cbc\AdditionalInformation[] $additionalInformation
     */
    private $additionalInformation = [
        
    ];

    /**
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @var \horstoeko\ubl\entities\cbc\UNDGCode $uNDGCode
     */
    private $uNDGCode = null;

    /**
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @var \horstoeko\ubl\entities\cbc\EmergencyProceduresCode $emergencyProceduresCode
     */
    private $emergencyProceduresCode = null;

    /**
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @var \horstoeko\ubl\entities\cbc\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     */
    private $medicalFirstAidGuideCode = null;

    /**
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @var \horstoeko\ubl\entities\cbc\TechnicalName $technicalName
     */
    private $technicalName = null;

    /**
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CategoryName $categoryName
     */
    private $categoryName = null;

    /**
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @var \horstoeko\ubl\entities\cbc\HazardousCategoryCode $hazardousCategoryCode
     */
    private $hazardousCategoryCode = null;

    /**
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @var \horstoeko\ubl\entities\cbc\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     */
    private $upperOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @var \horstoeko\ubl\entities\cbc\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     */
    private $lowerOrangeHazardPlacardID = null;

    /**
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @var \horstoeko\ubl\entities\cbc\MarkingID $markingID
     */
    private $markingID = null;

    /**
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @var \horstoeko\ubl\entities\cbc\HazardClassID $hazardClassID
     */
    private $hazardClassID = null;

    /**
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\ContactParty $contactParty
     */
    private $contactParty = null;

    /**
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @var \horstoeko\ubl\entities\cac\SecondaryHazard[] $secondaryHazard
     */
    private $secondaryHazard = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @var \horstoeko\ubl\entities\cac\HazardousGoodsTransit[] $hazardousGoodsTransit
     */
    private $hazardousGoodsTransit = [
        
    ];

    /**
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\EmergencyTemperature $emergencyTemperature
     */
    private $emergencyTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\FlashpointTemperature $flashpointTemperature
     */
    private $flashpointTemperature = null;

    /**
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @var \horstoeko\ubl\entities\cac\AdditionalTemperature[] $additionalTemperature
     */
    private $additionalTemperature = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
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
     *  Hazardous Item. Identifier
     *  An identifier for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Round Up
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
     * Gets as placardNotation
     *
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @return \horstoeko\ubl\entities\cbc\PlacardNotation
     */
    public function getPlacardNotation()
    {
        return $this->placardNotation;
    }

    /**
     * Sets a new placardNotation
     *
     * BBIE
     *  Hazardous Item. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this hazardous item. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @param \horstoeko\ubl\entities\cbc\PlacardNotation $placardNotation
     * @return self
     */
    public function setPlacardNotation(\horstoeko\ubl\entities\cbc\PlacardNotation $placardNotation)
    {
        $this->placardNotation = $placardNotation;
        return $this;
    }

    /**
     * Gets as placardEndorsement
     *
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @return \horstoeko\ubl\entities\cbc\PlacardEndorsement
     */
    public function getPlacardEndorsement()
    {
        return $this->placardEndorsement;
    }

    /**
     * Sets a new placardEndorsement
     *
     * BBIE
     *  Hazardous Item. Placard Endorsement. Text
     *  Text of the placard endorsement that is to be shown on the shipping papers for this hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @param \horstoeko\ubl\entities\cbc\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(\horstoeko\ubl\entities\cbc\PlacardEndorsement $placardEndorsement)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Adds as additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\AdditionalInformation $additionalInformation
     */
    public function addToAdditionalInformation(\horstoeko\ubl\entities\cbc\AdditionalInformation $additionalInformation)
    {
        $this->additionalInformation[] = $additionalInformation;
        return $this;
    }

    /**
     * isset additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInformation($index)
    {
        return isset($this->additionalInformation[$index]);
    }

    /**
     * unset additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInformation($index)
    {
        unset($this->additionalInformation[$index]);
    }

    /**
     * Gets as additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return \horstoeko\ubl\entities\cbc\AdditionalInformation[]
     */
    public function getAdditionalInformation()
    {
        return $this->additionalInformation;
    }

    /**
     * Sets a new additionalInformation
     *
     * BBIE
     *  Hazardous Item. Additional_ Information. Text
     *  Text providing further information about the hazardous substance.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Information
     *  Text
     *  Text. Type
     *  Must be stored away from flammable materials N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param \horstoeko\ubl\entities\cbc\AdditionalInformation[] $additionalInformation
     * @return self
     */
    public function setAdditionalInformation(array $additionalInformation)
    {
        $this->additionalInformation = $additionalInformation;
        return $this;
    }

    /**
     * Gets as uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @return \horstoeko\ubl\entities\cbc\UNDGCode
     */
    public function getUNDGCode()
    {
        return $this->uNDGCode;
    }

    /**
     * Sets a new uNDGCode
     *
     * BBIE
     *  Hazardous Item. UNDG Code. Code
     *  The UN code for this kind of hazardous item.
     *  0..1
     *  Hazardous Item
     *  UNDG Code
     *  Code
     *  Code. Type
     *  UN Code
     *
     * @param \horstoeko\ubl\entities\cbc\UNDGCode $uNDGCode
     * @return self
     */
    public function setUNDGCode(\horstoeko\ubl\entities\cbc\UNDGCode $uNDGCode)
    {
        $this->uNDGCode = $uNDGCode;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @return \horstoeko\ubl\entities\cbc\EmergencyProceduresCode
     */
    public function getEmergencyProceduresCode()
    {
        return $this->emergencyProceduresCode;
    }

    /**
     * Sets a new emergencyProceduresCode
     *
     * BBIE
     *  Hazardous Item. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @param \horstoeko\ubl\entities\cbc\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(\horstoeko\ubl\entities\cbc\EmergencyProceduresCode $emergencyProceduresCode)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Gets as medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @return \horstoeko\ubl\entities\cbc\MedicalFirstAidGuideCode
     */
    public function getMedicalFirstAidGuideCode()
    {
        return $this->medicalFirstAidGuideCode;
    }

    /**
     * Sets a new medicalFirstAidGuideCode
     *
     * BBIE
     *  Hazardous Item. Medical First Aid Guide Code. Code
     *  A code signifying a medical first aid guide appropriate to this hazardous item.
     *  0..1
     *  Hazardous Item
     *  Medical First Aid Guide Code
     *  Code
     *  Code. Type
     *  MFAG page number
     *
     * @param \horstoeko\ubl\entities\cbc\MedicalFirstAidGuideCode $medicalFirstAidGuideCode
     * @return self
     */
    public function setMedicalFirstAidGuideCode(\horstoeko\ubl\entities\cbc\MedicalFirstAidGuideCode $medicalFirstAidGuideCode)
    {
        $this->medicalFirstAidGuideCode = $medicalFirstAidGuideCode;
        return $this;
    }

    /**
     * Gets as technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @return \horstoeko\ubl\entities\cbc\TechnicalName
     */
    public function getTechnicalName()
    {
        return $this->technicalName;
    }

    /**
     * Sets a new technicalName
     *
     * BBIE
     *  Hazardous Item. Technical_ Name. Name
     *  The full technical name of a specific hazardous substance contained in this goods item.
     *  0..1
     *  Hazardous Item
     *  Technical
     *  Name
     *  Name
     *  Name. Type
     *  Granular Sodium Chlorate WeedKiller
     *
     * @param \horstoeko\ubl\entities\cbc\TechnicalName $technicalName
     * @return self
     */
    public function setTechnicalName(\horstoeko\ubl\entities\cbc\TechnicalName $technicalName)
    {
        $this->technicalName = $technicalName;
        return $this;
    }

    /**
     * Gets as categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CategoryName
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Sets a new categoryName
     *
     * BBIE
     *  Hazardous Item. Category. Name
     *  The name of the category of hazard that applies to the Item.
     *  0..1
     *  Hazardous Item
     *  Category
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CategoryName $categoryName
     * @return self
     */
    public function setCategoryName(\horstoeko\ubl\entities\cbc\CategoryName $categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * Gets as hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @return \horstoeko\ubl\entities\cbc\HazardousCategoryCode
     */
    public function getHazardousCategoryCode()
    {
        return $this->hazardousCategoryCode;
    }

    /**
     * Sets a new hazardousCategoryCode
     *
     * BBIE
     *  Hazardous Item. Hazardous Category Code. Code
     *  A code signifying a kind of hazard for a material.
     *  0..1
     *  Hazardous Item
     *  Hazardous Category Code
     *  Code
     *  Code. Type
     *  Hazardous material class code
     *
     * @param \horstoeko\ubl\entities\cbc\HazardousCategoryCode $hazardousCategoryCode
     * @return self
     */
    public function setHazardousCategoryCode(\horstoeko\ubl\entities\cbc\HazardousCategoryCode $hazardousCategoryCode)
    {
        $this->hazardousCategoryCode = $hazardousCategoryCode;
        return $this;
    }

    /**
     * Gets as upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @return \horstoeko\ubl\entities\cbc\UpperOrangeHazardPlacardID
     */
    public function getUpperOrangeHazardPlacardID()
    {
        return $this->upperOrangeHazardPlacardID;
    }

    /**
     * Sets a new upperOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Upper_ Orange Hazard Placard Identifier. Identifier
     *  The number for the upper part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Upper
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Hazard identification number (upper part)
     *
     * @param \horstoeko\ubl\entities\cbc\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID
     * @return self
     */
    public function setUpperOrangeHazardPlacardID(\horstoeko\ubl\entities\cbc\UpperOrangeHazardPlacardID $upperOrangeHazardPlacardID)
    {
        $this->upperOrangeHazardPlacardID = $upperOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @return \horstoeko\ubl\entities\cbc\LowerOrangeHazardPlacardID
     */
    public function getLowerOrangeHazardPlacardID()
    {
        return $this->lowerOrangeHazardPlacardID;
    }

    /**
     * Sets a new lowerOrangeHazardPlacardID
     *
     * BBIE
     *  Hazardous Item. Lower_ Orange Hazard Placard Identifier. Identifier
     *  The number for the lower part of the orange hazard placard required on the means of transport.
     *  0..1
     *  Hazardous Item
     *  Lower
     *  Orange Hazard Placard Identifier
     *  Identifier
     *  Identifier. Type
     *  Substance identification number (lower part)
     *
     * @param \horstoeko\ubl\entities\cbc\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID
     * @return self
     */
    public function setLowerOrangeHazardPlacardID(\horstoeko\ubl\entities\cbc\LowerOrangeHazardPlacardID $lowerOrangeHazardPlacardID)
    {
        $this->lowerOrangeHazardPlacardID = $lowerOrangeHazardPlacardID;
        return $this;
    }

    /**
     * Gets as markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @return \horstoeko\ubl\entities\cbc\MarkingID
     */
    public function getMarkingID()
    {
        return $this->markingID;
    }

    /**
     * Sets a new markingID
     *
     * BBIE
     *  Hazardous Item. Marking Identifier. Identifier
     *  An identifier to the marking of the Hazardous Item
     *  0..1
     *  Hazardous Item
     *  Marking Identifier
     *  Identifier
     *  Identifier. Type
     *  Dangerous goods label marking
     *
     * @param \horstoeko\ubl\entities\cbc\MarkingID $markingID
     * @return self
     */
    public function setMarkingID(\horstoeko\ubl\entities\cbc\MarkingID $markingID)
    {
        $this->markingID = $markingID;
        return $this;
    }

    /**
     * Gets as hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @return \horstoeko\ubl\entities\cbc\HazardClassID
     */
    public function getHazardClassID()
    {
        return $this->hazardClassID;
    }

    /**
     * Sets a new hazardClassID
     *
     * BBIE
     *  Hazardous Item. Hazard Class Identifier. Identifier
     *  An identifier for the hazard class applicable to this hazardous item as defined by the relevant regulation authority (e.g., the IMDG Class Number of the SOLAS Convention of IMO and the ADR/RID Class Number for the road/rail environment).
     *  0..1
     *  Hazardous Item
     *  Hazard Class Identifier
     *  Identifier
     *  Identifier. Type
     *  IMDG Class Number, ADR/RID Class Number
     *
     * @param \horstoeko\ubl\entities\cbc\HazardClassID $hazardClassID
     * @return self
     */
    public function setHazardClassID(\horstoeko\ubl\entities\cbc\HazardClassID $hazardClassID)
    {
        $this->hazardClassID = $hazardClassID;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Net_ Weight. Measure
     *  The net weight of this hazardous item, excluding packaging.
     *  0..1
     *  Hazardous Item
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
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Net_ Volume. Measure
     *  The volume of this hazardous item, excluding packaging and transport equipment.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
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
     *  Hazardous Item. Quantity
     *  The quantity of goods items in this hazardous item that are hazardous.
     *  0..1
     *  Hazardous Item
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
     * Gets as contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\ContactParty
     */
    public function getContactParty()
    {
        return $this->contactParty;
    }

    /**
     * Sets a new contactParty
     *
     * ASBIE
     *  Hazardous Item. Contact_ Party. Party
     *  The individual, group, or body to be contacted in case of a hazardous incident associated with this item.
     *  0..1
     *  Hazardous Item
     *  Contact
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\ContactParty $contactParty
     * @return self
     */
    public function setContactParty(\horstoeko\ubl\entities\cac\ContactParty $contactParty)
    {
        $this->contactParty = $contactParty;
        return $this;
    }

    /**
     * Adds as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SecondaryHazard $secondaryHazard
     */
    public function addToSecondaryHazard(\horstoeko\ubl\entities\cac\SecondaryHazard $secondaryHazard)
    {
        $this->secondaryHazard[] = $secondaryHazard;
        return $this;
    }

    /**
     * isset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecondaryHazard($index)
    {
        return isset($this->secondaryHazard[$index]);
    }

    /**
     * unset secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecondaryHazard($index)
    {
        unset($this->secondaryHazard[$index]);
    }

    /**
     * Gets as secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @return \horstoeko\ubl\entities\cac\SecondaryHazard[]
     */
    public function getSecondaryHazard()
    {
        return $this->secondaryHazard;
    }

    /**
     * Sets a new secondaryHazard
     *
     * ASBIE
     *  Hazardous Item. Secondary Hazard
     *  A secondary hazard associated with this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Secondary Hazard
     *  Secondary Hazard
     *  Secondary Hazard
     *
     * @param \horstoeko\ubl\entities\cac\SecondaryHazard[] $secondaryHazard
     * @return self
     */
    public function setSecondaryHazard(array $secondaryHazard)
    {
        $this->secondaryHazard = $secondaryHazard;
        return $this;
    }

    /**
     * Adds as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\HazardousGoodsTransit $hazardousGoodsTransit
     */
    public function addToHazardousGoodsTransit(\horstoeko\ubl\entities\cac\HazardousGoodsTransit $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit[] = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * isset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHazardousGoodsTransit($index)
    {
        return isset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * unset hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHazardousGoodsTransit($index)
    {
        unset($this->hazardousGoodsTransit[$index]);
    }

    /**
     * Gets as hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @return \horstoeko\ubl\entities\cac\HazardousGoodsTransit[]
     */
    public function getHazardousGoodsTransit()
    {
        return $this->hazardousGoodsTransit;
    }

    /**
     * Sets a new hazardousGoodsTransit
     *
     * ASBIE
     *  Hazardous Item. Hazardous Goods Transit
     *  Information related to the transit of this kind of hazardous goods.
     *  0..n
     *  Hazardous Item
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *  Hazardous Goods Transit
     *
     * @param \horstoeko\ubl\entities\cac\HazardousGoodsTransit[] $hazardousGoodsTransit
     * @return self
     */
    public function setHazardousGoodsTransit(array $hazardousGoodsTransit)
    {
        $this->hazardousGoodsTransit = $hazardousGoodsTransit;
        return $this;
    }

    /**
     * Gets as emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\EmergencyTemperature
     */
    public function getEmergencyTemperature()
    {
        return $this->emergencyTemperature;
    }

    /**
     * Sets a new emergencyTemperature
     *
     * ASBIE
     *  Hazardous Item. Emergency_ Temperature. Temperature
     *  The threshold temperature at which emergency procedures apply in the handling of temperature-controlled goods.
     *  0..1
     *  Hazardous Item
     *  Emergency
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\EmergencyTemperature $emergencyTemperature
     * @return self
     */
    public function setEmergencyTemperature(\horstoeko\ubl\entities\cac\EmergencyTemperature $emergencyTemperature)
    {
        $this->emergencyTemperature = $emergencyTemperature;
        return $this;
    }

    /**
     * Gets as flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\FlashpointTemperature
     */
    public function getFlashpointTemperature()
    {
        return $this->flashpointTemperature;
    }

    /**
     * Sets a new flashpointTemperature
     *
     * ASBIE
     *  Hazardous Item. Flashpoint_ Temperature. Temperature
     *  The flashpoint temperature of this hazardous item; i.e., the lowest temperature at which vapors above a volatile combustible substance ignite in air when exposed to flame.
     *  0..1
     *  Hazardous Item
     *  Flashpoint
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\FlashpointTemperature $flashpointTemperature
     * @return self
     */
    public function setFlashpointTemperature(\horstoeko\ubl\entities\cac\FlashpointTemperature $flashpointTemperature)
    {
        $this->flashpointTemperature = $flashpointTemperature;
        return $this;
    }

    /**
     * Adds as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AdditionalTemperature $additionalTemperature
     */
    public function addToAdditionalTemperature(\horstoeko\ubl\entities\cac\AdditionalTemperature $additionalTemperature)
    {
        $this->additionalTemperature[] = $additionalTemperature;
        return $this;
    }

    /**
     * isset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalTemperature($index)
    {
        return isset($this->additionalTemperature[$index]);
    }

    /**
     * unset additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalTemperature($index)
    {
        unset($this->additionalTemperature[$index]);
    }

    /**
     * Gets as additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @return \horstoeko\ubl\entities\cac\AdditionalTemperature[]
     */
    public function getAdditionalTemperature()
    {
        return $this->additionalTemperature;
    }

    /**
     * Sets a new additionalTemperature
     *
     * ASBIE
     *  Hazardous Item. Additional_ Temperature. Temperature
     *  Another temperature relevant to the handling of this hazardous item.
     *  0..n
     *  Hazardous Item
     *  Additional
     *  Temperature
     *  Temperature
     *  Temperature
     *
     * @param \horstoeko\ubl\entities\cac\AdditionalTemperature[] $additionalTemperature
     * @return self
     */
    public function setAdditionalTemperature(array $additionalTemperature)
    {
        $this->additionalTemperature = $additionalTemperature;
        return $this;
    }


}

