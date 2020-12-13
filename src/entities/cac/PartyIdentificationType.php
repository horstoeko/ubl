<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PartyIdentificationType
 *
 * ABIE
 *  Party Identification. Details
 *  Information about a party's identification.
 *  Party Identification
 * XSD Type: PartyIdentificationType
 */
class PartyIdentificationType
{

    /**
     * BBIE
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
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
     *  Party Identification. Identifier
     *  Identifies a party.
     *  1
     *  Party Identification
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


}

