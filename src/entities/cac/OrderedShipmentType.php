<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  Information about an Ordered Shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{

    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @var \horstoeko\ubl\entities\cac\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @var \horstoeko\ubl\entities\cac\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @return \horstoeko\ubl\entities\cac\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  An association to Shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *
     * @param \horstoeko\ubl\entities\cac\Shipment $shipment
     * @return self
     */
    public function setShipment(\horstoeko\ubl\entities\cac\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Package $package
     */
    public function addToPackage(\horstoeko\ubl\entities\cac\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @return \horstoeko\ubl\entities\cac\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  An association to Package.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *
     * @param \horstoeko\ubl\entities\cac\Package[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }


}

