<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SecondaryHazardType
 *
 * ABIE
 *  Secondary Hazard. Details
 *  A class to describe a secondary hazard associated with a hazardous item.
 *  Secondary Hazard
 * XSD Type: SecondaryHazardType
 */
class SecondaryHazardType
{

    /**
     * BBIE
     *  Secondary Hazard. Identifier
     *  An identifier for this secondary hazard.
     *  0..1
     *  Secondary Hazard
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Secondary Hazard. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this secondary hazard. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Placard Endorsement. Text
     *  Text of the placard endorsement for this secondary hazard that is to be shown on the shipping papers for a hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this secondary hazard.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @var \horstoeko\ubl\entities\cbc\Extension[] $extension
     */
    private $extension = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Secondary Hazard. Identifier
     *  An identifier for this secondary hazard.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Identifier
     *  An identifier for this secondary hazard.
     *  0..1
     *  Secondary Hazard
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
     * Gets as placardNotation
     *
     * BBIE
     *  Secondary Hazard. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this secondary hazard. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Placard Notation. Text
     *  Text of the placard notation corresponding to the hazard class of this secondary hazard. Can also be the hazard identification number of the orange placard (upper part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Notation
     *  Text
     *  Text. Type
     *  5.1
     *
     * @param  \horstoeko\ubl\entities\cbc\PlacardNotation $placardNotation
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
     *  Secondary Hazard. Placard Endorsement. Text
     *  Text of the placard endorsement for this secondary hazard that is to be shown on the shipping papers for a hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Placard Endorsement. Text
     *  Text of the placard endorsement for this secondary hazard that is to be shown on the shipping papers for a hazardous item. Can also be used for the number of the orange placard (lower part) required on the means of transport.
     *  0..1
     *  Secondary Hazard
     *  Placard Endorsement
     *  Text
     *  Text. Type
     *  2
     *
     * @param  \horstoeko\ubl\entities\cbc\PlacardEndorsement $placardEndorsement
     * @return self
     */
    public function setPlacardEndorsement(\horstoeko\ubl\entities\cbc\PlacardEndorsement $placardEndorsement)
    {
        $this->placardEndorsement = $placardEndorsement;
        return $this;
    }

    /**
     * Gets as emergencyProceduresCode
     *
     * BBIE
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this secondary hazard.
     *  0..1
     *  Secondary Hazard
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
     *  Secondary Hazard. Emergency Procedures Code. Code
     *  A code signifying the emergency procedures for this secondary hazard.
     *  0..1
     *  Secondary Hazard
     *  Emergency Procedures Code
     *  Code
     *  Code. Type
     *  EMG code, EMS Page Number
     *
     * @param  \horstoeko\ubl\entities\cbc\EmergencyProceduresCode $emergencyProceduresCode
     * @return self
     */
    public function setEmergencyProceduresCode(\horstoeko\ubl\entities\cbc\EmergencyProceduresCode $emergencyProceduresCode)
    {
        $this->emergencyProceduresCode = $emergencyProceduresCode;
        return $this;
    }

    /**
     * Adds as extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Extension $extension
     */
    public function addToExtension(\horstoeko\ubl\entities\cbc\Extension $extension)
    {
        $this->extension[] = $extension;
        return $this;
    }

    /**
     * isset extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetExtension($index)
    {
        return isset($this->extension[$index]);
    }

    /**
     * unset extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetExtension($index)
    {
        unset($this->extension[$index]);
    }

    /**
     * Gets as extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @return \horstoeko\ubl\entities\cbc\Extension[]
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * BBIE
     *  Secondary Hazard. Extension. Text
     *  Additional information about the hazardous substance, which can be used (for example) to specify the type of regulatory requirements that apply to this secondary hazard.
     *  0..n
     *  Secondary Hazard
     *  Extension
     *  Text
     *  Text. Type
     *  N.O.S. or a Waste Characteristics Code in conjunction with an EPA Waste Stream code
     *
     * @param  \horstoeko\ubl\entities\cbc\Extension[] $extension
     * @return self
     */
    public function setExtension(array $extension)
    {
        $this->extension = $extension;
        return $this;
    }


}

