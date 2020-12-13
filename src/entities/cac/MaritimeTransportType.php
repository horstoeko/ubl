<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing MaritimeTransportType
 *
 * ABIE
 *  Maritime Transport. Details
 *  Describes a water (including sea, river, and canal) transport vessel.
 *  Maritime Transport
 * XSD Type: MaritimeTransportType
 */
class MaritimeTransportType
{

    /**
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  Identifies a specific vessel.
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
     * Gets as vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  Identifies a specific vessel.
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
     *  Identifies a specific vessel.
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


}

