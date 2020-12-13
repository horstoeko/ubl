<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PackageType
 *
 * ABIE
 *  Package. Details
 *  Information about a package.
 *  Package
 * XSD Type: PackageType
 */
class PackageType
{

    /**
     * BBIE
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $returnableMaterialIndicator
     */
    private $returnableMaterialIndicator = null;

    /**
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PackageLevelCode $packageLevelCode
     */
    private $packageLevelCode = null;

    /**
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @var \horstoeko\ubl\entities\cbc\PackagingTypeCode $packagingTypeCode
     */
    private $packagingTypeCode = null;

    /**
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PackingMaterial[] $packingMaterial
     */
    private $packingMaterial = [
        
    ];

    /**
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @var \horstoeko\ubl\entities\cac\ContainedPackage[] $containedPackage
     */
    private $containedPackage = [
        
    ];

    /**
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @var \horstoeko\ubl\entities\cac\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @var \horstoeko\ubl\entities\cac\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryUnit[] $deliveryUnit
     */
    private $deliveryUnit = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Package. Identifier
     *  Identifies the package.
     *  0..1
     *  Package
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as quantity
     *
     * BBIE
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Package. Quantity
     *  The quantity (of items) contained in the package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReturnableMaterialIndicator()
    {
        return $this->returnableMaterialIndicator;
    }

    /**
     * Sets a new returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  Indicates whether the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $returnableMaterialIndicator
     * @return self
     */
    public function setReturnableMaterialIndicator($returnableMaterialIndicator)
    {
        $this->returnableMaterialIndicator = $returnableMaterialIndicator;
        return $this;
    }

    /**
     * Gets as packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PackageLevelCode
     */
    public function getPackageLevelCode()
    {
        return $this->packageLevelCode;
    }

    /**
     * Sets a new packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  Code specifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PackageLevelCode $packageLevelCode
     * @return self
     */
    public function setPackageLevelCode(\horstoeko\ubl\entities\cbc\PackageLevelCode $packageLevelCode)
    {
        $this->packageLevelCode = $packageLevelCode;
        return $this;
    }

    /**
     * Gets as packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @return \horstoeko\ubl\entities\cbc\PackagingTypeCode
     */
    public function getPackagingTypeCode()
    {
        return $this->packagingTypeCode;
    }

    /**
     * Sets a new packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  Code specifying the type of packaging of an item.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @param \horstoeko\ubl\entities\cbc\PackagingTypeCode $packagingTypeCode
     * @return self
     */
    public function setPackagingTypeCode(\horstoeko\ubl\entities\cbc\PackagingTypeCode $packagingTypeCode)
    {
        $this->packagingTypeCode = $packagingTypeCode;
        return $this;
    }

    /**
     * Adds as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\PackingMaterial $packingMaterial
     */
    public function addToPackingMaterial(\horstoeko\ubl\entities\cbc\PackingMaterial $packingMaterial)
    {
        $this->packingMaterial[] = $packingMaterial;
        return $this;
    }

    /**
     * isset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackingMaterial($index)
    {
        return isset($this->packingMaterial[$index]);
    }

    /**
     * unset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackingMaterial($index)
    {
        unset($this->packingMaterial[$index]);
    }

    /**
     * Gets as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PackingMaterial[]
     */
    public function getPackingMaterial()
    {
        return $this->packingMaterial;
    }

    /**
     * Sets a new packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Description of the type of packaging of an item.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PackingMaterial[] $packingMaterial
     * @return self
     */
    public function setPackingMaterial(array $packingMaterial)
    {
        $this->packingMaterial = $packingMaterial;
        return $this;
    }

    /**
     * Adds as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ContainedPackage $containedPackage
     */
    public function addToContainedPackage(\horstoeko\ubl\entities\cac\ContainedPackage $containedPackage)
    {
        $this->containedPackage[] = $containedPackage;
        return $this;
    }

    /**
     * isset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedPackage($index)
    {
        return isset($this->containedPackage[$index]);
    }

    /**
     * unset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedPackage($index)
    {
        unset($this->containedPackage[$index]);
    }

    /**
     * Gets as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @return \horstoeko\ubl\entities\cac\ContainedPackage[]
     */
    public function getContainedPackage()
    {
        return $this->containedPackage;
    }

    /**
     * Sets a new containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  An association to Contained Package; used to describe a package within a package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *
     * @param \horstoeko\ubl\entities\cac\ContainedPackage[] $containedPackage
     * @return self
     */
    public function setContainedPackage(array $containedPackage)
    {
        $this->containedPackage = $containedPackage;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\horstoeko\ubl\entities\cac\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @return \horstoeko\ubl\entities\cac\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  An association to Goods Item.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *
     * @param \horstoeko\ubl\entities\cac\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\horstoeko\ubl\entities\cac\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @return \horstoeko\ubl\entities\cac\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  An association to describe the measurement dimensions of the package.
     *  0..n
     *  Package
     *  Measurement
     *  Dimension
     *  Dimension
     *
     * @param \horstoeko\ubl\entities\cac\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }

    /**
     * Adds as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DeliveryUnit $deliveryUnit
     */
    public function addToDeliveryUnit(\horstoeko\ubl\entities\cac\DeliveryUnit $deliveryUnit)
    {
        $this->deliveryUnit[] = $deliveryUnit;
        return $this;
    }

    /**
     * isset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryUnit($index)
    {
        return isset($this->deliveryUnit[$index]);
    }

    /**
     * unset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryUnit($index)
    {
        unset($this->deliveryUnit[$index]);
    }

    /**
     * Gets as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryUnit[]
     */
    public function getDeliveryUnit()
    {
        return $this->deliveryUnit;
    }

    /**
     * Sets a new deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  An association to Delivery Units in the package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \horstoeko\ubl\entities\cac\DeliveryUnit[] $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(array $deliveryUnit)
    {
        $this->deliveryUnit = $deliveryUnit;
        return $this;
    }


}

