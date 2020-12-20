<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PartyLegalEntityType
 *
 * ABIE
 *  Party Legal Entity. Details
 *  A class to describe a party as a legal entity.
 *  Party Legal Entity
 * XSD Type: PartyLegalEntityType
 */
class PartyLegalEntityType
{

    /**
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @var \horstoeko\ubl\entities\cbc\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Identifier. Identifier
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  3556625
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $registrationDate
     */
    private $registrationDate = null;

    /**
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $registrationExpirationDate
     */
    private $registrationExpirationDate = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyLegalFormCode $companyLegalFormCode
     */
    private $companyLegalFormCode = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyLegalForm $companyLegalForm
     */
    private $companyLegalForm = null;

    /**
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $soleProprietorshipIndicator
     */
    private $soleProprietorshipIndicator = null;

    /**
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CompanyLiquidationStatusCode $companyLiquidationStatusCode
     */
    private $companyLiquidationStatusCode = null;

    /**
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CorporateStockAmount $corporateStockAmount
     */
    private $corporateStockAmount = null;

    /**
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $fullyPaidSharesIndicator
     */
    private $fullyPaidSharesIndicator = null;

    /**
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Legal Entity. Corporate Registration Scheme
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @var \horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme
     */
    private $corporateRegistrationScheme = null;

    /**
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\HeadOfficeParty $headOfficeParty
     */
    private $headOfficeParty = null;

    /**
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @var \horstoeko\ubl\entities\cac\ShareholderParty[] $shareholderParty
     */
    private $shareholderParty = [
        
    ];

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Legal Entity. Registration_ Name. Name
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
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
     *  The name of the party as registered with the relevant legal authority.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @param  \horstoeko\ubl\entities\cbc\RegistrationName $registrationName
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
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  3556625
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
     *  An identifier for the party as registered within a company registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  Business Registration Number, Company Number
     *  3556625
     *
     * @param  \horstoeko\ubl\entities\cbc\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(\horstoeko\ubl\entities\cbc\CompanyID $companyID)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as registrationDate
     *
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Sets a new registrationDate
     *
     * BBIE
     *  Party Legal Entity. Registration_ Date. Date
     *  The registration date of the CompanyID.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $registrationDate
     * @return self
     */
    public function setRegistrationDate(\DateTime $registrationDate)
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    /**
     * Gets as registrationExpirationDate
     *
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRegistrationExpirationDate()
    {
        return $this->registrationExpirationDate;
    }

    /**
     * Sets a new registrationExpirationDate
     *
     * BBIE
     *  Party Legal Entity. Registration Expiration_ Date. Date
     *  The date upon which a registration expires (e.g., registration for an import/export license).
     *  0..1
     *  Party Legal Entity
     *  Registration Expiration
     *  Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $registrationExpirationDate
     * @return self
     */
    public function setRegistrationExpirationDate(\DateTime $registrationExpirationDate)
    {
        $this->registrationExpirationDate = $registrationExpirationDate;
        return $this;
    }

    /**
     * Gets as companyLegalFormCode
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @return \horstoeko\ubl\entities\cbc\CompanyLegalFormCode
     */
    public function getCompanyLegalFormCode()
    {
        return $this->companyLegalFormCode;
    }

    /**
     * Sets a new companyLegalFormCode
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form Code. Code
     *  A code signifying the party's legal status.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form Code
     *  Code
     *  Code. Type
     *  Legal Status
     *
     * @param  \horstoeko\ubl\entities\cbc\CompanyLegalFormCode $companyLegalFormCode
     * @return self
     */
    public function setCompanyLegalFormCode(\horstoeko\ubl\entities\cbc\CompanyLegalFormCode $companyLegalFormCode)
    {
        $this->companyLegalFormCode = $companyLegalFormCode;
        return $this;
    }

    /**
     * Gets as companyLegalForm
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CompanyLegalForm
     */
    public function getCompanyLegalForm()
    {
        return $this->companyLegalForm;
    }

    /**
     * Sets a new companyLegalForm
     *
     * BBIE
     *  Party Legal Entity. Company Legal Form. Text
     *  The company legal status, expressed as a text.
     *  0..1
     *  Party Legal Entity
     *  Company Legal Form
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CompanyLegalForm $companyLegalForm
     * @return self
     */
    public function setCompanyLegalForm(\horstoeko\ubl\entities\cbc\CompanyLegalForm $companyLegalForm)
    {
        $this->companyLegalForm = $companyLegalForm;
        return $this;
    }

    /**
     * Gets as soleProprietorshipIndicator
     *
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSoleProprietorshipIndicator()
    {
        return $this->soleProprietorshipIndicator;
    }

    /**
     * Sets a new soleProprietorshipIndicator
     *
     * BBIE
     *  Party Legal Entity. Sole Proprietorship Indicator. Indicator
     *  An indicator that the company is owned and controlled by one person (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Sole Proprietorship Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $soleProprietorshipIndicator
     * @return self
     */
    public function setSoleProprietorshipIndicator($soleProprietorshipIndicator)
    {
        $this->soleProprietorshipIndicator = $soleProprietorshipIndicator;
        return $this;
    }

    /**
     * Gets as companyLiquidationStatusCode
     *
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CompanyLiquidationStatusCode
     */
    public function getCompanyLiquidationStatusCode()
    {
        return $this->companyLiquidationStatusCode;
    }

    /**
     * Sets a new companyLiquidationStatusCode
     *
     * BBIE
     *  Party Legal Entity. Company Liquidation Status Code. Code
     *  A code signifying the party's liquidation status.
     *  0..1
     *  Party Legal Entity
     *  Company Liquidation Status Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CompanyLiquidationStatusCode $companyLiquidationStatusCode
     * @return self
     */
    public function setCompanyLiquidationStatusCode(\horstoeko\ubl\entities\cbc\CompanyLiquidationStatusCode $companyLiquidationStatusCode)
    {
        $this->companyLiquidationStatusCode = $companyLiquidationStatusCode;
        return $this;
    }

    /**
     * Gets as corporateStockAmount
     *
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CorporateStockAmount
     */
    public function getCorporateStockAmount()
    {
        return $this->corporateStockAmount;
    }

    /**
     * Sets a new corporateStockAmount
     *
     * BBIE
     *  Party Legal Entity. Corporate Stock_ Amount. Amount
     *  The number of shares in the capital stock of a corporation.
     *  0..1
     *  Party Legal Entity
     *  Corporate Stock
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CorporateStockAmount $corporateStockAmount
     * @return self
     */
    public function setCorporateStockAmount(\horstoeko\ubl\entities\cbc\CorporateStockAmount $corporateStockAmount)
    {
        $this->corporateStockAmount = $corporateStockAmount;
        return $this;
    }

    /**
     * Gets as fullyPaidSharesIndicator
     *
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFullyPaidSharesIndicator()
    {
        return $this->fullyPaidSharesIndicator;
    }

    /**
     * Sets a new fullyPaidSharesIndicator
     *
     * BBIE
     *  Party Legal Entity. Fully Paid Shares Indicator. Indicator
     *  An indicator that all shares of corporate stock have been paid by shareholders (true) or not (false).
     *  0..1
     *  Party Legal Entity
     *  Fully Paid Shares Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param  bool $fullyPaidSharesIndicator
     * @return self
     */
    public function setFullyPaidSharesIndicator($fullyPaidSharesIndicator)
    {
        $this->fullyPaidSharesIndicator = $fullyPaidSharesIndicator;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Legal Entity. Registration_ Address. Address
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Address
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
     *  The registered address of the party within a corporate registration scheme.
     *  0..1
     *  Party Legal Entity
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @param  \horstoeko\ubl\entities\cac\RegistrationAddress $registrationAddress
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
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
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
     *  The corporate registration scheme used to register the party.
     *  0..1
     *  Party Legal Entity
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *  Corporate Registration Scheme
     *
     * @param  \horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme
     * @return self
     */
    public function setCorporateRegistrationScheme(\horstoeko\ubl\entities\cac\CorporateRegistrationScheme $corporateRegistrationScheme)
    {
        $this->corporateRegistrationScheme = $corporateRegistrationScheme;
        return $this;
    }

    /**
     * Gets as headOfficeParty
     *
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\HeadOfficeParty
     */
    public function getHeadOfficeParty()
    {
        return $this->headOfficeParty;
    }

    /**
     * Sets a new headOfficeParty
     *
     * ASBIE
     *  Party Legal Entity. Head Office_ Party. Party
     *  The head office of the legal entity
     *  0..1
     *  Party Legal Entity
     *  Head Office
     *  Party
     *  Party
     *  Party
     *
     * @param  \horstoeko\ubl\entities\cac\HeadOfficeParty $headOfficeParty
     * @return self
     */
    public function setHeadOfficeParty(\horstoeko\ubl\entities\cac\HeadOfficeParty $headOfficeParty)
    {
        $this->headOfficeParty = $headOfficeParty;
        return $this;
    }

    /**
     * Adds as shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ShareholderParty $shareholderParty
     */
    public function addToShareholderParty(\horstoeko\ubl\entities\cac\ShareholderParty $shareholderParty)
    {
        $this->shareholderParty[] = $shareholderParty;
        return $this;
    }

    /**
     * isset shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetShareholderParty($index)
    {
        return isset($this->shareholderParty[$index]);
    }

    /**
     * unset shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetShareholderParty($index)
    {
        unset($this->shareholderParty[$index]);
    }

    /**
     * Gets as shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @return \horstoeko\ubl\entities\cac\ShareholderParty[]
     */
    public function getShareholderParty()
    {
        return $this->shareholderParty;
    }

    /**
     * Sets a new shareholderParty
     *
     * ASBIE
     *  Party Legal Entity. Shareholder Party
     *  A party owning shares in this legal entity.
     *  0..n
     *  Party Legal Entity
     *  Shareholder Party
     *  Shareholder Party
     *  Shareholder Party
     *
     * @param  \horstoeko\ubl\entities\cac\ShareholderParty[] $shareholderParty
     * @return self
     */
    public function setShareholderParty(array $shareholderParty)
    {
        $this->shareholderParty = $shareholderParty;
        return $this;
    }


}

