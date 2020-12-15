<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing MaritimeTransportType
 *
 * ABIE
 *  Maritime Transport. Details
 *  A class to describe a vessel used for transport by water (including sea, river, and canal).
 *  Maritime Transport
 * XSD Type: MaritimeTransportType
 */
class MaritimeTransportType
{

    /**
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @var \horstoeko\ubl\entities\cbc\VesselID $vesselID
     */
    private $vesselID = null;

    /**
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @var \horstoeko\ubl\entities\cbc\VesselName $vesselName
     */
    private $vesselName = null;

    /**
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \horstoeko\ubl\entities\cbc\RadioCallSignID $radioCallSignID
     */
    private $radioCallSignID = null;

    /**
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ShipsRequirements[] $shipsRequirements
     */
    private $shipsRequirements = [
        
    ];

    /**
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\GrossTonnageMeasure $grossTonnageMeasure
     */
    private $grossTonnageMeasure = null;

    /**
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NetTonnageMeasure $netTonnageMeasure
     */
    private $netTonnageMeasure = null;

    /**
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     */
    private $registryCertificateDocumentReference = null;

    /**
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\RegistryPortLocation $registryPortLocation
     */
    private $registryPortLocation = null;

    /**
     * Gets as vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @return \horstoeko\ubl\entities\cbc\VesselID
     */
    public function getVesselID()
    {
        return $this->vesselID;
    }

    /**
     * Sets a new vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @param \horstoeko\ubl\entities\cbc\VesselID $vesselID
     * @return self
     */
    public function setVesselID(\horstoeko\ubl\entities\cbc\VesselID $vesselID)
    {
        $this->vesselID = $vesselID;
        return $this;
    }

    /**
     * Gets as vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @return \horstoeko\ubl\entities\cbc\VesselName
     */
    public function getVesselName()
    {
        return $this->vesselName;
    }

    /**
     * Sets a new vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @param \horstoeko\ubl\entities\cbc\VesselName $vesselName
     * @return self
     */
    public function setVesselName(\horstoeko\ubl\entities\cbc\VesselName $vesselName)
    {
        $this->vesselName = $vesselName;
        return $this;
    }

    /**
     * Gets as radioCallSignID
     *
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \horstoeko\ubl\entities\cbc\RadioCallSignID
     */
    public function getRadioCallSignID()
    {
        return $this->radioCallSignID;
    }

    /**
     * Sets a new radioCallSignID
     *
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \horstoeko\ubl\entities\cbc\RadioCallSignID $radioCallSignID
     * @return self
     */
    public function setRadioCallSignID(\horstoeko\ubl\entities\cbc\RadioCallSignID $radioCallSignID)
    {
        $this->radioCallSignID = $radioCallSignID;
        return $this;
    }

    /**
     * Adds as shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\ShipsRequirements $shipsRequirements
     */
    public function addToShipsRequirements(\horstoeko\ubl\entities\cbc\ShipsRequirements $shipsRequirements)
    {
        $this->shipsRequirements[] = $shipsRequirements;
        return $this;
    }

    /**
     * isset shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipsRequirements($index)
    {
        return isset($this->shipsRequirements[$index]);
    }

    /**
     * unset shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipsRequirements($index)
    {
        unset($this->shipsRequirements[$index]);
    }

    /**
     * Gets as shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ShipsRequirements[]
     */
    public function getShipsRequirements()
    {
        return $this->shipsRequirements;
    }

    /**
     * Sets a new shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ShipsRequirements[] $shipsRequirements
     * @return self
     */
    public function setShipsRequirements(array $shipsRequirements)
    {
        $this->shipsRequirements = $shipsRequirements;
        return $this;
    }

    /**
     * Gets as grossTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\GrossTonnageMeasure
     */
    public function getGrossTonnageMeasure()
    {
        return $this->grossTonnageMeasure;
    }

    /**
     * Sets a new grossTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\GrossTonnageMeasure $grossTonnageMeasure
     * @return self
     */
    public function setGrossTonnageMeasure(\horstoeko\ubl\entities\cbc\GrossTonnageMeasure $grossTonnageMeasure)
    {
        $this->grossTonnageMeasure = $grossTonnageMeasure;
        return $this;
    }

    /**
     * Gets as netTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NetTonnageMeasure
     */
    public function getNetTonnageMeasure()
    {
        return $this->netTonnageMeasure;
    }

    /**
     * Sets a new netTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\NetTonnageMeasure $netTonnageMeasure
     * @return self
     */
    public function setNetTonnageMeasure(\horstoeko\ubl\entities\cbc\NetTonnageMeasure $netTonnageMeasure)
    {
        $this->netTonnageMeasure = $netTonnageMeasure;
        return $this;
    }

    /**
     * Gets as registryCertificateDocumentReference
     *
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\RegistryCertificateDocumentReference
     */
    public function getRegistryCertificateDocumentReference()
    {
        return $this->registryCertificateDocumentReference;
    }

    /**
     * Sets a new registryCertificateDocumentReference
     *
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     * @return self
     */
    public function setRegistryCertificateDocumentReference(\horstoeko\ubl\entities\cac\RegistryCertificateDocumentReference $registryCertificateDocumentReference)
    {
        $this->registryCertificateDocumentReference = $registryCertificateDocumentReference;
        return $this;
    }

    /**
     * Gets as registryPortLocation
     *
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\RegistryPortLocation
     */
    public function getRegistryPortLocation()
    {
        return $this->registryPortLocation;
    }

    /**
     * Sets a new registryPortLocation
     *
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\RegistryPortLocation $registryPortLocation
     * @return self
     */
    public function setRegistryPortLocation(\horstoeko\ubl\entities\cac\RegistryPortLocation $registryPortLocation)
    {
        $this->registryPortLocation = $registryPortLocation;
        return $this;
    }


}

