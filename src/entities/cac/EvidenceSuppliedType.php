<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EvidenceSuppliedType
 *
 * ABIE
 *  Evidence Supplied. Details
 *  A reference to evidence.
 *  Evidence Supplied
 * XSD Type: EvidenceSuppliedType
 */
class EvidenceSuppliedType
{

    /**
     * BBIE
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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
     *  Evidence Supplied. Identifier
     *  The identifier of the referenced evidence.
     *  1
     *  Evidence Supplied
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

