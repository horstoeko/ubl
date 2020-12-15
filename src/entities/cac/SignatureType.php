<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SignatureType
 *
 * ABIE
 *  Signature. Details
 *  A class to define a signature.
 *  Signature
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * BBIE
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \horstoeko\ubl\entities\cac\DigitalSignatureAttachment $digitalSignatureAttachment
     */
    private $digitalSignatureAttachment = null;

    /**
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\OriginalDocumentReference $originalDocumentReference
     */
    private $originalDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
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
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
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
     * Adds as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(\DateTime $validationDate)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(\DateTime $validationTime)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validatorID
     *
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(\horstoeko\ubl\entities\cbc\ValidatorID $validatorID)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\horstoeko\ubl\entities\cbc\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\horstoeko\ubl\entities\cbc\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(\horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }

    /**
     * Gets as digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \horstoeko\ubl\entities\cac\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachment()
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * Sets a new digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \horstoeko\ubl\entities\cac\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(\horstoeko\ubl\entities\cac\DigitalSignatureAttachment $digitalSignatureAttachment)
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;
        return $this;
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\OriginalDocumentReference
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(\horstoeko\ubl\entities\cac\OriginalDocumentReference $originalDocumentReference)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }


}

