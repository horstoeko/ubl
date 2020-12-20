<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EmissionCalculationMethodType
 *
 * ABIE
 *  Emission Calculation Method. Details
 *  A class to define how an environmental emission is calculated.
 *  Emission Calculation Method
 * XSD Type: EmissionCalculationMethodType
 */
class EmissionCalculationMethodType
{

    /**
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CalculationMethodCode $calculationMethodCode
     */
    private $calculationMethodCode = null;

    /**
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\FullnessIndicationCode $fullnessIndicationCode
     */
    private $fullnessIndicationCode = null;

    /**
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\MeasurementFromLocation $measurementFromLocation
     */
    private $measurementFromLocation = null;

    /**
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\MeasurementToLocation $measurementToLocation
     */
    private $measurementToLocation = null;

    /**
     * Gets as calculationMethodCode
     *
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CalculationMethodCode
     */
    public function getCalculationMethodCode()
    {
        return $this->calculationMethodCode;
    }

    /**
     * Sets a new calculationMethodCode
     *
     * BBIE
     *  Emission Calculation Method. Calculation Method Code. Code
     *  A code signifying the method used to calculate the emission.
     *  0..1
     *  Emission Calculation Method
     *  Calculation Method Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CalculationMethodCode $calculationMethodCode
     * @return self
     */
    public function setCalculationMethodCode(\horstoeko\ubl\entities\cbc\CalculationMethodCode $calculationMethodCode)
    {
        $this->calculationMethodCode = $calculationMethodCode;
        return $this;
    }

    /**
     * Gets as fullnessIndicationCode
     *
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\FullnessIndicationCode
     */
    public function getFullnessIndicationCode()
    {
        return $this->fullnessIndicationCode;
    }

    /**
     * Sets a new fullnessIndicationCode
     *
     * BBIE
     *  Emission Calculation Method. Fullness Indication Code. Code
     *  A code signifying whether a piece of transport equipment is full, partially full, or empty. This indication is used as a parameter when calculating the environmental emission.
     *  0..1
     *  Emission Calculation Method
     *  Fullness Indication Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\FullnessIndicationCode $fullnessIndicationCode
     * @return self
     */
    public function setFullnessIndicationCode(\horstoeko\ubl\entities\cbc\FullnessIndicationCode $fullnessIndicationCode)
    {
        $this->fullnessIndicationCode = $fullnessIndicationCode;
        return $this;
    }

    /**
     * Gets as measurementFromLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\MeasurementFromLocation
     */
    public function getMeasurementFromLocation()
    {
        return $this->measurementFromLocation;
    }

    /**
     * Sets a new measurementFromLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement From_ Location. Location
     *  A start location from which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement From
     *  Location
     *  Location
     *  Location
     *
     * @param  \horstoeko\ubl\entities\cac\MeasurementFromLocation $measurementFromLocation
     * @return self
     */
    public function setMeasurementFromLocation(\horstoeko\ubl\entities\cac\MeasurementFromLocation $measurementFromLocation)
    {
        $this->measurementFromLocation = $measurementFromLocation;
        return $this;
    }

    /**
     * Gets as measurementToLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\MeasurementToLocation
     */
    public function getMeasurementToLocation()
    {
        return $this->measurementToLocation;
    }

    /**
     * Sets a new measurementToLocation
     *
     * ASBIE
     *  Emission Calculation Method. Measurement To_ Location. Location
     *  An end location to which an environmental emission is calculated.
     *  0..1
     *  Emission Calculation Method
     *  Measurement To
     *  Location
     *  Location
     *  Location
     *
     * @param  \horstoeko\ubl\entities\cac\MeasurementToLocation $measurementToLocation
     * @return self
     */
    public function setMeasurementToLocation(\horstoeko\ubl\entities\cac\MeasurementToLocation $measurementToLocation)
    {
        $this->measurementToLocation = $measurementToLocation;
        return $this;
    }


}

