<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing OCSPRefType
 *
 *
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{

    /**
     * @var \horstoeko\ubl\entities\xades\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \horstoeko\ubl\entities\xades\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \horstoeko\ubl\entities\xades\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\horstoeko\ubl\entities\xades\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

    /**
     * Gets as digestAlgAndValue
     *
     * @return \horstoeko\ubl\entities\xades\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }


}

