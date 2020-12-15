<?php

namespace horstoeko\ubl\entities\sac;

/**
 * Class representing SignatureInformationType
 *
 * ABIE
 *  Signature Information. Details
 *  This class captures a single signature and optionally associates to a signature in the document with the corresponding identifier.
 *  Signature Information
 * XSD Type: SignatureInformationType
 */
class SignatureInformationType
{

    /**
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\sbc\ReferencedSignatureID $referencedSignatureID
     */
    private $referencedSignatureID = null;

    /**
     * This is a single digital signature as defined by the W3C specification.
     *
     * @var \horstoeko\ubl\entities\ds\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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

    /**
     * Gets as referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\sbc\ReferencedSignatureID
     */
    public function getReferencedSignatureID()
    {
        return $this->referencedSignatureID;
    }

    /**
     * Sets a new referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\sbc\ReferencedSignatureID $referencedSignatureID
     * @return self
     */
    public function setReferencedSignatureID(\horstoeko\ubl\entities\sbc\ReferencedSignatureID $referencedSignatureID)
    {
        $this->referencedSignatureID = $referencedSignatureID;
        return $this;
    }

    /**
     * Gets as signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @return \horstoeko\ubl\entities\ds\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @param \horstoeko\ubl\entities\ds\Signature $signature
     * @return self
     */
    public function setSignature(\horstoeko\ubl\entities\ds\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

