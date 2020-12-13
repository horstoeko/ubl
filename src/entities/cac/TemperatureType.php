<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TemperatureType
 *
 * ABIE
 *  Temperature. Details
 *  Information about temperature.
 *  Temperature
 * XSD Type: TemperatureType
 */
class TemperatureType
{

    /**
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for temperature.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\horstoeko\ubl\entities\cbc\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Temperature. Measure
     *  The temperature measurement value.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Measure $measure
     * @return self
     */
    public function setMeasure(\horstoeko\ubl\entities\cbc\Measure $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Temperature. Description. Text
     *  A description of the temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  "at sea level"
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

