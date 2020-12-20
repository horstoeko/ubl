<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing RailTransportType
 *
 * ABIE
 *  Rail Transport. Details
 *  A class defining details about a train wagon used as a means of transport.
 *  Rail Transport
 * XSD Type: RailTransportType
 */
class RailTransportType
{

    /**
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @var \horstoeko\ubl\entities\cbc\TrainID $trainID
     */
    private $trainID = null;

    /**
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\RailCarID $railCarID
     */
    private $railCarID = null;

    /**
     * Gets as trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @return \horstoeko\ubl\entities\cbc\TrainID
     */
    public function getTrainID()
    {
        return $this->trainID;
    }

    /**
     * Sets a new trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @param  \horstoeko\ubl\entities\cbc\TrainID $trainID
     * @return self
     */
    public function setTrainID(\horstoeko\ubl\entities\cbc\TrainID $trainID)
    {
        $this->trainID = $trainID;
        return $this;
    }

    /**
     * Gets as railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\RailCarID
     */
    public function getRailCarID()
    {
        return $this->railCarID;
    }

    /**
     * Sets a new railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\RailCarID $railCarID
     * @return self
     */
    public function setRailCarID(\horstoeko\ubl\entities\cbc\RailCarID $railCarID)
    {
        $this->railCarID = $railCarID;
        return $this;
    }


}

