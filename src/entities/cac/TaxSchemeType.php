<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TaxSchemeType
 *
 * ABIE
 *  Tax Scheme. Details
 *  A class to describe a taxation scheme (e.g., VAT, State tax, County tax).
 *  Tax Scheme
 * XSD Type: TaxSchemeType
 */
class TaxSchemeType
{

    /**
     * BBIE
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @var \horstoeko\ubl\entities\cbc\TaxTypeCode $taxTypeCode
     */
    private $taxTypeCode = null;

    /**
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode
     */
    private $currencyCode = null;

    /**
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
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
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
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
     *  Tax Scheme. Identifier
     *  An identifier for this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/EDIFICASEU_TaxExemptionReason_D09B.xsd
     *
     * @param  \horstoeko\ubl\entities\cbc\ID $iD
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
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
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
     *  Tax Scheme. Name
     *  The name of this taxation scheme.
     *  0..1
     *  Tax Scheme
     *  Name
     *  Name
     *  Name. Type
     *  Value Added Tax , Wholesale Tax , Sales Tax , State Tax
     *
     * @param  \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @return \horstoeko\ubl\entities\cbc\TaxTypeCode
     */
    public function getTaxTypeCode()
    {
        return $this->taxTypeCode;
    }

    /**
     * Sets a new taxTypeCode
     *
     * BBIE
     *  Tax Scheme. Tax Type Code. Code
     *  A code signifying the type of tax.
     *  0..1
     *  Tax Scheme
     *  Tax Type Code
     *  Code
     *  Code. Type
     *  Consumption , Sales
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxTypeCode $taxTypeCode
     * @return self
     */
    public function setTaxTypeCode(\horstoeko\ubl\entities\cbc\TaxTypeCode $taxTypeCode)
    {
        $this->taxTypeCode = $taxTypeCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CurrencyCode
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * BBIE
     *  Tax Scheme. Currency Code. Code
     *  A code signifying the currency in which the tax is collected and reported.
     *  0..1
     *  Tax Scheme
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode
     * @return self
     */
    public function setCurrencyCode(\horstoeko\ubl\entities\cbc\CurrencyCode $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as jurisdictionRegionAddress
     *
     * ASBIE
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\JurisdictionRegionAddress $jurisdictionRegionAddress
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
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param  int|string $index
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
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param  int|string $index
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
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
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
     *  Tax Scheme. Jurisdiction Region_ Address. Address
     *  A geographic area in which this taxation scheme applies.
     *  0..n
     *  Tax Scheme
     *  Jurisdiction Region
     *  Address
     *  Address
     *  Address
     *
     * @param  \horstoeko\ubl\entities\cac\JurisdictionRegionAddress[] $jurisdictionRegionAddress
     * @return self
     */
    public function setJurisdictionRegionAddress(array $jurisdictionRegionAddress)
    {
        $this->jurisdictionRegionAddress = $jurisdictionRegionAddress;
        return $this;
    }


}

