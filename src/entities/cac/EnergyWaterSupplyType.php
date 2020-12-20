<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EnergyWaterSupplyType
 *
 * ABIE
 *  Energy Water Supply. Details
 *  A class to describe the supply (and therefore consumption) of an amount of energy or water.
 *  Energy Water Supply
 * XSD Type: EnergyWaterSupplyType
 */
class EnergyWaterSupplyType
{

    /**
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @var \horstoeko\ubl\entities\cac\ConsumptionReport[] $consumptionReport
     */
    private $consumptionReport = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @var \horstoeko\ubl\entities\cac\EnergyTaxReport[] $energyTaxReport
     */
    private $energyTaxReport = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @var \horstoeko\ubl\entities\cac\ConsumptionAverage[] $consumptionAverage
     */
    private $consumptionAverage = [
        
    ];

    /**
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @var \horstoeko\ubl\entities\cac\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     */
    private $energyWaterConsumptionCorrection = [
        
    ];

    /**
     * Adds as consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ConsumptionReport $consumptionReport
     */
    public function addToConsumptionReport(\horstoeko\ubl\entities\cac\ConsumptionReport $consumptionReport)
    {
        $this->consumptionReport[] = $consumptionReport;
        return $this;
    }

    /**
     * isset consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetConsumptionReport($index)
    {
        return isset($this->consumptionReport[$index]);
    }

    /**
     * unset consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetConsumptionReport($index)
    {
        unset($this->consumptionReport[$index]);
    }

    /**
     * Gets as consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @return \horstoeko\ubl\entities\cac\ConsumptionReport[]
     */
    public function getConsumptionReport()
    {
        return $this->consumptionReport;
    }

    /**
     * Sets a new consumptionReport
     *
     * ASBIE
     *  Energy Water Supply. Consumption Report
     *  An amount of energy or water consumed.
     *  0..n
     *  Energy Water Supply
     *  Consumption Report
     *  Consumption Report
     *  Consumption Report
     *
     * @param  \horstoeko\ubl\entities\cac\ConsumptionReport[] $consumptionReport
     * @return self
     */
    public function setConsumptionReport(array $consumptionReport)
    {
        $this->consumptionReport = $consumptionReport;
        return $this;
    }

    /**
     * Adds as energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\EnergyTaxReport $energyTaxReport
     */
    public function addToEnergyTaxReport(\horstoeko\ubl\entities\cac\EnergyTaxReport $energyTaxReport)
    {
        $this->energyTaxReport[] = $energyTaxReport;
        return $this;
    }

    /**
     * isset energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetEnergyTaxReport($index)
    {
        return isset($this->energyTaxReport[$index]);
    }

    /**
     * unset energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetEnergyTaxReport($index)
    {
        unset($this->energyTaxReport[$index]);
    }

    /**
     * Gets as energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @return \horstoeko\ubl\entities\cac\EnergyTaxReport[]
     */
    public function getEnergyTaxReport()
    {
        return $this->energyTaxReport;
    }

    /**
     * Sets a new energyTaxReport
     *
     * ASBIE
     *  Energy Water Supply. Energy Tax Report
     *  A tax on the consumption of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Tax Report
     *  Energy Tax Report
     *  Energy Tax Report
     *
     * @param  \horstoeko\ubl\entities\cac\EnergyTaxReport[] $energyTaxReport
     * @return self
     */
    public function setEnergyTaxReport(array $energyTaxReport)
    {
        $this->energyTaxReport = $energyTaxReport;
        return $this;
    }

    /**
     * Adds as consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ConsumptionAverage $consumptionAverage
     */
    public function addToConsumptionAverage(\horstoeko\ubl\entities\cac\ConsumptionAverage $consumptionAverage)
    {
        $this->consumptionAverage[] = $consumptionAverage;
        return $this;
    }

    /**
     * isset consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetConsumptionAverage($index)
    {
        return isset($this->consumptionAverage[$index]);
    }

    /**
     * unset consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetConsumptionAverage($index)
    {
        unset($this->consumptionAverage[$index]);
    }

    /**
     * Gets as consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @return \horstoeko\ubl\entities\cac\ConsumptionAverage[]
     */
    public function getConsumptionAverage()
    {
        return $this->consumptionAverage;
    }

    /**
     * Sets a new consumptionAverage
     *
     * ASBIE
     *  Energy Water Supply. Consumption Average
     *  A consumption average.
     *  0..n
     *  Energy Water Supply
     *  Consumption Average
     *  Consumption Average
     *  Consumption Average
     *
     * @param  \horstoeko\ubl\entities\cac\ConsumptionAverage[] $consumptionAverage
     * @return self
     */
    public function setConsumptionAverage(array $consumptionAverage)
    {
        $this->consumptionAverage = $consumptionAverage;
        return $this;
    }

    /**
     * Adds as energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection
     */
    public function addToEnergyWaterConsumptionCorrection(\horstoeko\ubl\entities\cac\EnergyWaterConsumptionCorrection $energyWaterConsumptionCorrection)
    {
        $this->energyWaterConsumptionCorrection[] = $energyWaterConsumptionCorrection;
        return $this;
    }

    /**
     * isset energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetEnergyWaterConsumptionCorrection($index)
    {
        return isset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * unset energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetEnergyWaterConsumptionCorrection($index)
    {
        unset($this->energyWaterConsumptionCorrection[$index]);
    }

    /**
     * Gets as energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @return \horstoeko\ubl\entities\cac\EnergyWaterConsumptionCorrection[]
     */
    public function getEnergyWaterConsumptionCorrection()
    {
        return $this->energyWaterConsumptionCorrection;
    }

    /**
     * Sets a new energyWaterConsumptionCorrection
     *
     * ASBIE
     *  Energy Water Supply. Energy Water_ Consumption Correction. Consumption Correction
     *  Describes any corrections or adjustments to the supply of energy or water.
     *  0..n
     *  Energy Water Supply
     *  Energy Water
     *  Consumption Correction
     *  Consumption Correction
     *  Consumption Correction
     *
     * @param  \horstoeko\ubl\entities\cac\EnergyWaterConsumptionCorrection[] $energyWaterConsumptionCorrection
     * @return self
     */
    public function setEnergyWaterConsumptionCorrection(array $energyWaterConsumptionCorrection)
    {
        $this->energyWaterConsumptionCorrection = $energyWaterConsumptionCorrection;
        return $this;
    }


}

