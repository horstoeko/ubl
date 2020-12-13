<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PartyLegalEntityType
 *
 * ABIE
 *  Party Legal Entity. Details
 *  Information directly relating to the legal registration that is applicable to a party.
 *  Party Legal Entity
 * XSD Type: PartyLegalEntityType
 */
class PartyLegalEntityType
{

    /**
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  "3556625"
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @var \horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme
     */
    private $corporateRegistrationScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of a party as registered with the legal authority.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     *  Party Legal Entity. Company Identifier. Identifier
     *  Identifies a company as registered with the company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
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
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
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
     *  Party Legal Entity. Registration_ Address. Address
     *  Associates with the registered address of the party within a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
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
     * Gets as corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @return \horstoeko\ubl\entities\cac\CorporateRegistrationScheme
     */
    public function getCorporateRegistrationScheme()
    {
        return $this->corporateRegistrationScheme;
    }

    /**
     * Sets a new corporateRegistrationScheme
     *
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  Associates the party with a Corporate Registration Scheme.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @param \horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(\horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme)
    {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;
        return $this;
    }


}

