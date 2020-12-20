<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EnergyTaxReportType
 *
 * ABIE
 *  Energy Tax Report. Details
 *  A class to describe energy taxes.
 *  Energy Tax Report
 * XSD Type: EnergyTaxReportType
 */
class EnergyTaxReportType
{

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @var \horstoeko\ubl\entities\cbc\TaxEnergyAmount $taxEnergyAmount
     */
    private $taxEnergyAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @var \horstoeko\ubl\entities\cbc\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     */
    private $taxEnergyOnAccountAmount = null;

    /**
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @var \horstoeko\ubl\entities\cbc\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     */
    private $taxEnergyBalanceAmount = null;

    /**
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \horstoeko\ubl\entities\cac\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @return \horstoeko\ubl\entities\cbc\TaxEnergyAmount
     */
    public function getTaxEnergyAmount()
    {
        return $this->taxEnergyAmount;
    }

    /**
     * Sets a new taxEnergyAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Amount. Amount
     *  The monetary amount of taxes (and duties).
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Amount
     *  Amount
     *  Amount. Type
     *  3087.90
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxEnergyAmount $taxEnergyAmount
     * @return self
     */
    public function setTaxEnergyAmount(\horstoeko\ubl\entities\cbc\TaxEnergyAmount $taxEnergyAmount)
    {
        $this->taxEnergyAmount = $taxEnergyAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @return \horstoeko\ubl\entities\cbc\TaxEnergyOnAccountAmount
     */
    public function getTaxEnergyOnAccountAmount()
    {
        return $this->taxEnergyOnAccountAmount;
    }

    /**
     * Sets a new taxEnergyOnAccountAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy_ On Account Amount. Amount
     *  The monetary amount of taxes (and duties) paid on account.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy
     *  On Account Amount
     *  Amount
     *  Amount. Type
     *  2855.40
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount
     * @return self
     */
    public function setTaxEnergyOnAccountAmount(\horstoeko\ubl\entities\cbc\TaxEnergyOnAccountAmount $taxEnergyOnAccountAmount)
    {
        $this->taxEnergyOnAccountAmount = $taxEnergyOnAccountAmount;
        return $this;
    }

    /**
     * Gets as taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @return \horstoeko\ubl\entities\cbc\TaxEnergyBalanceAmount
     */
    public function getTaxEnergyBalanceAmount()
    {
        return $this->taxEnergyBalanceAmount;
    }

    /**
     * Sets a new taxEnergyBalanceAmount
     *
     * BBIE
     *  Energy Tax Report. Tax Energy Balance. Amount
     *  The monetary amount of the balance of taxes owing.
     *  0..1
     *  Energy Tax Report
     *  Tax Energy Balance
     *  Amount
     *  Amount. Type
     *  232.49
     *
     * @param  \horstoeko\ubl\entities\cbc\TaxEnergyBalanceAmount $taxEnergyBalanceAmount
     * @return self
     */
    public function setTaxEnergyBalanceAmount(\horstoeko\ubl\entities\cbc\TaxEnergyBalanceAmount $taxEnergyBalanceAmount)
    {
        $this->taxEnergyBalanceAmount = $taxEnergyBalanceAmount;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
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
     *  Energy Tax Report. Tax Scheme
     *  The relevant taxation scheme.
     *  1
     *  Energy Tax Report
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

