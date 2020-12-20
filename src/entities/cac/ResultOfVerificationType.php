<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ResultOfVerificationType
 *
 * ABIE
 *  Result Of Verification. Details
 *  A class to describe the result of an attempt to verify a signature.
 *  Result Of Verification
 * XSD Type: ResultOfVerificationType
 */
class ResultOfVerificationType
{

    /**
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidationResultCode $validationResultCode
     */
    private $validationResultCode = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidateProcess $validateProcess
     */
    private $validateProcess = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidateTool $validateTool
     */
    private $validateTool = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValidateToolVersion $validateToolVersion
     */
    private $validateToolVersion = null;

    /**
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * Gets as validatorID
     *
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
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
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(\horstoeko\ubl\entities\cbc\ValidatorID $validatorID)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValidationResultCode
     */
    public function getValidationResultCode()
    {
        return $this->validationResultCode;
    }

    /**
     * Sets a new validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValidationResultCode $validationResultCode
     * @return self
     */
    public function setValidationResultCode(\horstoeko\ubl\entities\cbc\ValidationResultCode $validationResultCode)
    {
        $this->validationResultCode = $validationResultCode;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
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
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $validationDate
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
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
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
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param  \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(\DateTime $validationTime)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValidateProcess
     */
    public function getValidateProcess()
    {
        return $this->validateProcess;
    }

    /**
     * Sets a new validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValidateProcess $validateProcess
     * @return self
     */
    public function setValidateProcess(\horstoeko\ubl\entities\cbc\ValidateProcess $validateProcess)
    {
        $this->validateProcess = $validateProcess;
        return $this;
    }

    /**
     * Gets as validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValidateTool
     */
    public function getValidateTool()
    {
        return $this->validateTool;
    }

    /**
     * Sets a new validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValidateTool $validateTool
     * @return self
     */
    public function setValidateTool(\horstoeko\ubl\entities\cbc\ValidateTool $validateTool)
    {
        $this->validateTool = $validateTool;
        return $this;
    }

    /**
     * Gets as validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValidateToolVersion
     */
    public function getValidateToolVersion()
    {
        return $this->validateToolVersion;
    }

    /**
     * Sets a new validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValidateToolVersion $validateToolVersion
     * @return self
     */
    public function setValidateToolVersion(\horstoeko\ubl\entities\cbc\ValidateToolVersion $validateToolVersion)
    {
        $this->validateToolVersion = $validateToolVersion;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
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
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @param  \horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(\horstoeko\ubl\entities\cac\SignatoryParty $signatoryParty)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }


}

