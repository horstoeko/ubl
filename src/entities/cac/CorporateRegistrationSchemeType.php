<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CorporateRegistrationSchemeType
 *
 * ABIE
 *  Corporate Registration Scheme. Details
 *  Information directly relating a scheme for corporate registration of businesses.
 *  Corporate Registration Scheme
 * XSD Type: CorporateRegistrationSchemeType
 */
class CorporateRegistrationSchemeType
{

    /**
     * BBIE
     *  Corporate Registration Scheme. Identifier
     *  Identifies the scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ASIC" in Australia
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Name
     *  Identifies the scheme by name.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Australian Securities and Investment Commission" in Australia
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  Identifies the type of scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  "ACN"
     *
     * @var \horstoeko\ubl\entities\cbc\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     */
    private $corporateRegistrationTypeCode = null;

    /**
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     */
    private $jurisdictionRegionAddress = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Corporate Registration Scheme. Identifier
     *  Identifies the scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ASIC" in Australia
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
     *  Corporate Registration Scheme. Identifier
     *  Identifies the scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "ASIC" in Australia
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
     * Gets as name
     *
     * BBIE
     *  Corporate Registration Scheme. Name
     *  Identifies the scheme by name.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Australian Securities and Investment Commission" in Australia
     *
     * @return \horstoeko\ubl\entities\cbc\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Corporate Registration Scheme. Name
     *  Identifies the scheme by name.
     *  0..1
     *  Corporate Registration Scheme
     *  Name
     *  Name
     *  Name. Type
     *  "Australian Securities and Investment Commission" in Australia
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  Identifies the type of scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  "ACN"
     *
     * @return \horstoeko\ubl\entities\cbc\CorporateRegistrationTypeCode
     */
    public function getCorporateRegistrationTypeCode()
    {
        return $this->corporateRegistrationTypeCode;
    }

    /**
     * Sets a new corporateRegistrationTypeCode
     *
     * BBIE
     *  Corporate Registration Scheme. Corporate Registration Type Code. Code
     *  Identifies the type of scheme.
     *  0..1
     *  Corporate Registration Scheme
     *  Corporate Registration Type Code
     *  Code
     *  Code. Type
     *  "ACN"
     *
     * @param \horstoeko\ubl\entities\cbc\CorporateRegistrationTypeCode $corporateRegistrationTypeCode
     * @return self
     */
    public function setCorporateRegistrationTypeCode(\horstoeko\ubl\entities\cbc\CorporateRegistrationTypeCode $corporateRegistrationTypeCode)
    {
        $this->corporateRegistrationTypeCode = $corporateRegistrationTypeCode;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\JurisdictionRegionAddress $jurisdictionRegionAddress
     */
    public function addToJurisdictionRegionAddress(\horstoeko\ubl\entities\cac\JurisdictionRegionAddress $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress[] = $jurisdictionRegionAddress;
        return $this;
    }

    /**
     * isset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJurisdictionRegionAddress($index)
    {
        return isset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * unset jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJurisdictionRegionAddress($index)
    {
        unset($this->jurisdictionRegionAddress[$index]);
    }

    /**
     * Gets as jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\JurisdictionRegionAddress[]
     */
    public function getJurisdictionRegionAddress()
    {
        return $this->jurisdictionRegionAddress;
    }

    /**
     * Sets a new jurisdictionRegionAddress
     *
     * ASBIE
     *  Corporate Registration Scheme. Jurisdiction Region_ Address. Address
     *  Associates the registration scheme with particulars that identify and locate the geographic area to which the scheme applies.
     *  0..n
     *  Corporate Registration Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }


}

