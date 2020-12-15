<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing DependentPriceReferenceType
 *
 * ABIE
 *  Dependent Price Reference. Details
 *  A class to define the price of an item as a percentage of the price of a different item.
 *  Dependent Price Reference
 * XSD Type: DependentPriceReferenceType
 */
class DependentPriceReferenceType
{

    /**
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Percent $percent
     */
    private $percent = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\LocationAddress $locationAddress
     */
    private $locationAddress = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\DependentLineReference $dependentLineReference
     */
    private $dependentLineReference = null;

    /**
     * Gets as percent
     *
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
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
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Percent $percent
     * @return self
     */
    public function setPercent(\horstoeko\ubl\entities\cbc\Percent $percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\LocationAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\LocationAddress $locationAddress
     * @return self
     */
    public function setLocationAddress(\horstoeko\ubl\entities\cac\LocationAddress $locationAddress)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\DependentLineReference
     */
    public function getDependentLineReference()
    {
        return $this->dependentLineReference;
    }

    /**
     * Sets a new dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \horstoeko\ubl\entities\cac\DependentLineReference $dependentLineReference
     * @return self
     */
    public function setDependentLineReference(\horstoeko\ubl\entities\cac\DependentLineReference $dependentLineReference)
    {
        $this->dependentLineReference = $dependentLineReference;
        return $this;
    }


}

