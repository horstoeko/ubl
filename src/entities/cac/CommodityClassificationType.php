<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CommodityClassificationType
 *
 * ABIE
 *  Commodity Classification. Details
 *  Information about Commodity Classification.
 *  Commodity Classification
 * XSD Type: CommodityClassificationType
 */
class CommodityClassificationType
{

    /**
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @var \horstoeko\ubl\entities\cbc\NatureCode $natureCode
     */
    private $natureCode = null;

    /**
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @var \horstoeko\ubl\entities\cbc\CargoTypeCode $cargoTypeCode
     */
    private $cargoTypeCode = null;

    /**
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @var \horstoeko\ubl\entities\cbc\CommodityCode $commodityCode
     */
    private $commodityCode = null;

    /**
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @var \horstoeko\ubl\entities\cbc\ItemClassificationCode $itemClassificationCode
     */
    private $itemClassificationCode = null;

    /**
     * Gets as natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @return \horstoeko\ubl\entities\cbc\NatureCode
     */
    public function getNatureCode()
    {
        return $this->natureCode;
    }

    /**
     * Sets a new natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  The high-level nature of the Classification issued by a specific maintenance agency, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  "wooden products"
     *
     * @param \horstoeko\ubl\entities\cbc\NatureCode $natureCode
     * @return self
     */
    public function setNatureCode(\horstoeko\ubl\entities\cbc\NatureCode $natureCode)
    {
        $this->natureCode = $natureCode;
        return $this;
    }

    /**
     * Gets as cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @return \horstoeko\ubl\entities\cbc\CargoTypeCode
     */
    public function getCargoTypeCode()
    {
        return $this->cargoTypeCode;
    }

    /**
     * Sets a new cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  The type of cargo, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  "Refrigerated"
     *
     * @param \horstoeko\ubl\entities\cbc\CargoTypeCode $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(\horstoeko\ubl\entities\cbc\CargoTypeCode $cargoTypeCode)
    {
        $this->cargoTypeCode = $cargoTypeCode;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @return \horstoeko\ubl\entities\cbc\CommodityCode
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  "1102222883"
     *
     * @param \horstoeko\ubl\entities\cbc\CommodityCode $commodityCode
     * @return self
     */
    public function setCommodityCode(\horstoeko\ubl\entities\cbc\CommodityCode $commodityCode)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @return \horstoeko\ubl\entities\cbc\ItemClassificationCode
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * Sets a new itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  The trade commodity classification, expressed as a code.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  "3440234"
     *
     * @param \horstoeko\ubl\entities\cbc\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(\horstoeko\ubl\entities\cbc\ItemClassificationCode $itemClassificationCode)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        return $this;
    }


}

