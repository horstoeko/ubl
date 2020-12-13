<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PartyTaxSchemeType
 *
 * ABIE
 *  Party Tax Scheme. Details
 *  Information about a party's Tax Scheme.
 *  Party Tax Scheme
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
{

    /**
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @var \horstoeko\ubl\entities\cbc\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TaxLevelCode $taxLevelCode
     */
    private $taxLevelCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExemptionReasonCode $exemptionReasonCode
     */
    private $exemptionReasonCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExemptionReason $exemptionReason
     */
    private $exemptionReason = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \horstoeko\ubl\entities\cac\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @return \horstoeko\ubl\entities\cbc\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The official name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  "Microsoft Corporation"
     *
     * @param \horstoeko\ubl\entities\cbc\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(\horstoeko\ubl\entities\cbc\RegistrationName $registrationName)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @return \horstoeko\ubl\entities\cbc\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  The identifier assigned for tax purposes to a party by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  "3556625"
     *
     * @param \horstoeko\ubl\entities\cbc\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(\horstoeko\ubl\entities\cbc\CompanyID $companyID)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TaxLevelCode
     */
    public function getTaxLevelCode()
    {
        return $this->taxLevelCode;
    }

    /**
     * Sets a new taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  The section or role within the tax scheme that applies to the party.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TaxLevelCode $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(\horstoeko\ubl\entities\cbc\TaxLevelCode $taxLevelCode)
    {
        $this->taxLevelCode = $taxLevelCode;
        return $this;
    }

    /**
     * Gets as exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExemptionReasonCode
     */
    public function getExemptionReasonCode()
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets a new exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for a party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ExemptionReasonCode $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(\horstoeko\ubl\entities\cbc\ExemptionReasonCode $exemptionReasonCode)
    {
        $this->exemptionReasonCode = $exemptionReasonCode;
        return $this;
    }

    /**
     * Gets as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExemptionReason
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * Sets a new exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for a party's exemption from tax, expressed as text.
     *  0..1
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ExemptionReason $exemptionReason
     * @return self
     */
    public function setExemptionReason(\horstoeko\ubl\entities\cbc\ExemptionReason $exemptionReason)
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\RegistrationAddress
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  An association to Registered Address (for tax purposes).
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(\horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \horstoeko\ubl\entities\cac\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  An association to Tax Scheme.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \horstoeko\ubl\entities\cac\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\horstoeko\ubl\entities\cac\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }


}

