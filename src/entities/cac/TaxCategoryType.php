<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TaxCategoryType
 *
 * ABIE
 *  Tax Category. Details
 *  A class to describe one of the tax categories within a taxation scheme (e.g., High Rate VAT, Low Rate VAT).
 *  Tax Category
 * XSD Type: TaxCategoryType
 */
class TaxCategoryType
{

    /**
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Percent $percent
     */
    private $percent = null;

    /**
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BaseUnitMeasure $baseUnitMeasure
     */
    private $baseUnitMeasure = null;

    /**
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount
     */
    private $perUnitAmount = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @var \horstoeko\ubl\entities\cbc\TaxExemptionReasonCode $taxExemptionReasonCode
     */
    private $taxExemptionReasonCode = null;

    /**
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TaxExemptionReason[] $taxExemptionReason
     */
    private $taxExemptionReason = [
        
    ];

    /**
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TierRange $tierRange
     */
    private $tierRange = null;

    /**
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TierRatePercent $tierRatePercent
     */
    private $tierRatePercent = null;

    /**
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \horstoeko\ubl\entities\cac\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
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
     *  Tax Category. Identifier
     *  An identifier for this tax category.
     *  0..1
     *  Tax Category
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyorTaxorFeeCategoryCode_D09B.xsd
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
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
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
     *  Tax Category. Name
     *  The name of this tax category.
     *  0..1
     *  Tax Category
     *  Name
     *  Name
     *  Name. Type
     *  Luxury Goods , Wine Equalization , Exempt
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
     * Gets as percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Tax Category. Percent
     *  The tax rate for this category, expressed as a percentage.
     *  0..1
     *  Tax Category
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Percent $percent
     * @return self
     */
    public function setPercent(\horstoeko\ubl\entities\cbc\Percent $percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as baseUnitMeasure
     *
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BaseUnitMeasure
     */
    public function getBaseUnitMeasure()
    {
        return $this->baseUnitMeasure;
    }

    /**
     * Sets a new baseUnitMeasure
     *
     * BBIE
     *  Tax Category. Base Unit Measure. Measure
     *  A Unit of Measures used as the basic for the tax calculation applied at a certain rate per unit.
     *  0..1
     *  Tax Category
     *  Base Unit Measure
     *  Measure
     *  Measure. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\BaseUnitMeasure $baseUnitMeasure
     * @return self
     */
    public function setBaseUnitMeasure(\horstoeko\ubl\entities\cbc\BaseUnitMeasure $baseUnitMeasure)
    {
        $this->baseUnitMeasure = $baseUnitMeasure;
        return $this;
    }

    /**
     * Gets as perUnitAmount
     *
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PerUnitAmount
     */
    public function getPerUnitAmount()
    {
        return $this->perUnitAmount;
    }

    /**
     * Sets a new perUnitAmount
     *
     * BBIE
     *  Tax Category. Per Unit_ Amount. Amount
     *  Where a tax is applied at a certain rate per unit, the rate per unit applied.
     *  0..1
     *  Tax Category
     *  Per Unit
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount
     * @return self
     */
    public function setPerUnitAmount(\horstoeko\ubl\entities\cbc\PerUnitAmount $perUnitAmount)
    {
        $this->perUnitAmount = $perUnitAmount;
        return $this;
    }

    /**
     * Gets as taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @return \horstoeko\ubl\entities\cbc\TaxExemptionReasonCode
     */
    public function getTaxExemptionReasonCode()
    {
        return $this->taxExemptionReasonCode;
    }

    /**
     * Sets a new taxExemptionReasonCode
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason Code. Code
     *  The reason for tax being exempted, expressed as a code.
     *  0..1
     *  Tax Category
     *  Tax Exemption Reason Code
     *  Code
     *  Code. Type
     *  http://www.unece.org/uncefact/codelist/standard/UNECE_DutyTaxFeeTypeCode_D09B.xsd
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxExemptionReasonCode $taxExemptionReasonCode
     * @return self
     */
    public function setTaxExemptionReasonCode(\horstoeko\ubl\entities\cbc\TaxExemptionReasonCode $taxExemptionReasonCode)
    {
        $this->taxExemptionReasonCode = $taxExemptionReasonCode;
        return $this;
    }

    /**
     * Adds as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\TaxExemptionReason $taxExemptionReason
     */
    public function addToTaxExemptionReason(\horstoeko\ubl\entities\cbc\TaxExemptionReason $taxExemptionReason)
    {
        $this->taxExemptionReason[] = $taxExemptionReason;
        return $this;
    }

    /**
     * isset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTaxExemptionReason($index)
    {
        return isset($this->taxExemptionReason[$index]);
    }

    /**
     * unset taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTaxExemptionReason($index)
    {
        unset($this->taxExemptionReason[$index]);
    }

    /**
     * Gets as taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TaxExemptionReason[]
     */
    public function getTaxExemptionReason()
    {
        return $this->taxExemptionReason;
    }

    /**
     * Sets a new taxExemptionReason
     *
     * BBIE
     *  Tax Category. Tax Exemption Reason. Text
     *  The reason for tax being exempted, expressed as text.
     *  0..n
     *  Tax Category
     *  Tax Exemption Reason
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxExemptionReason[] $taxExemptionReason
     * @return self
     */
    public function setTaxExemptionReason(array $taxExemptionReason)
    {
        $this->taxExemptionReason = $taxExemptionReason;
        return $this;
    }

    /**
     * Gets as tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TierRange
     */
    public function getTierRange()
    {
        return $this->tierRange;
    }

    /**
     * Sets a new tierRange
     *
     * BBIE
     *  Tax Category. Tier Range. Text
     *  Where a tax is tiered, the range of taxable amounts that determines the rate of tax applicable to this tax category.
     *  0..1
     *  Tax Category
     *  Tier Range
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TierRange $tierRange
     * @return self
     */
    public function setTierRange(\horstoeko\ubl\entities\cbc\TierRange $tierRange)
    {
        $this->tierRange = $tierRange;
        return $this;
    }

    /**
     * Gets as tierRatePercent
     *
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TierRatePercent
     */
    public function getTierRatePercent()
    {
        return $this->tierRatePercent;
    }

    /**
     * Sets a new tierRatePercent
     *
     * BBIE
     *  Tax Category. Tier Rate. Percent
     *  Where a tax is tiered, the tax rate that applies within the specified range of taxable amounts for this tax category.
     *  0..1
     *  Tax Category
     *  Tier Rate
     *  Percent
     *  Percent. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TierRatePercent $tierRatePercent
     * @return self
     */
    public function setTierRatePercent(\horstoeko\ubl\entities\cbc\TierRatePercent $tierRatePercent)
    {
        $this->tierRatePercent = $tierRatePercent;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
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
     *  Tax Category. Tax Scheme
     *  The taxation scheme within which this tax category is defined.
     *  1
     *  Tax Category
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param  \horstoeko\ubl\entities\cac\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\horstoeko\ubl\entities\cac\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }


}

