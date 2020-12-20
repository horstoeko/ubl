<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CRLRefType
 *
 * XSD Type: CRLRefType
 */
class CRLRefType
{

    /**
     * @var \horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \horstoeko\ubl\entities\xades\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

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
     * @param  \horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\horstoeko\ubl\entities\xades\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \horstoeko\ubl\entities\xades\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param  \horstoeko\ubl\entities\xades\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(\horstoeko\ubl\entities\xades\CRLIdentifierType $cRLIdentifier)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }


}

