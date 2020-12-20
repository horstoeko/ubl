<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AirTransportType
 *
 * ABIE
 *  Air Transport. Details
 *  A class to identify a specific aircraft used for transportation.
 *  Air Transport
 * XSD Type: AirTransportType
 */
class AirTransportType
{

    /**
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AircraftID $aircraftID
     */
    private $aircraftID = null;

    /**
     * Gets as aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AircraftID
     */
    public function getAircraftID()
    {
        return $this->aircraftID;
    }

    /**
     * Sets a new aircraftID
     *
     * BBIE
     *  Air Transport. Aircraft Identifier. Identifier
     *  An identifer for a specific aircraft.
     *  1
     *  Air Transport
     *  Aircraft Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AircraftID $aircraftID
     * @return self
     */
    public function setAircraftID(\horstoeko\ubl\entities\cbc\AircraftID $aircraftID)
    {
        $this->aircraftID = $aircraftID;
        return $this;
    }


}

