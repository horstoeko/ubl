<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemIdentificationType
 *
 * ABIE
 *  Item Identification. Details
 *  Information about item identification.
 *  Item Identification
 * XSD Type: ItemIdentificationType
 */
class ItemIdentificationType
{

    /**
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ExtendedID $extendedID
     */
    private $extendedID = null;

    /**
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @var \horstoeko\ubl\entities\cac\PhysicalAttribute[] $physicalAttribute
     */
    private $physicalAttribute = [
        
    ];

    /**
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
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
     *  Item Identification. Identifier
     *  An identifier for an item.
     *  1
     *  Item Identification
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "CUST001" "3333-44-123"
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
     * Gets as extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ExtendedID
     */
    public function getExtendedID()
    {
        return $this->extendedID;
    }

    /**
     * Sets a new extendedID
     *
     * BBIE
     *  Item Identification. Extended_ Identifier. Identifier
     *  An extended identifier for the item that identifies the item with specific properties, e.g., Item 123 = Chair / Item 123 Ext 45 = brown chair.
     *  0..1
     *  Item Identification
     *  Extended
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ExtendedID $extendedID
     * @return self
     */
    public function setExtendedID(\horstoeko\ubl\entities\cbc\ExtendedID $extendedID)
    {
        $this->extendedID = $extendedID;
        return $this;
    }

    /**
     * Adds as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PhysicalAttribute $physicalAttribute
     */
    public function addToPhysicalAttribute(\horstoeko\ubl\entities\cac\PhysicalAttribute $physicalAttribute)
    {
        $this->physicalAttribute[] = $physicalAttribute;
        return $this;
    }

    /**
     * isset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysicalAttribute($index)
    {
        return isset($this->physicalAttribute[$index]);
    }

    /**
     * unset physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysicalAttribute($index)
    {
        unset($this->physicalAttribute[$index]);
    }

    /**
     * Gets as physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @return \horstoeko\ubl\entities\cac\PhysicalAttribute[]
     */
    public function getPhysicalAttribute()
    {
        return $this->physicalAttribute;
    }

    /**
     * Sets a new physicalAttribute
     *
     * ASBIE
     *  Item Identification. Physical Attribute
     *  An association to Physical Attribute.
     *  0..n
     *  Item Identification
     *  Physical Attribute
     *  Physical Attribute
     *
     * @param \horstoeko\ubl\entities\cac\PhysicalAttribute[] $physicalAttribute
     * @return self
     */
    public function setPhysicalAttribute(array $physicalAttribute)
    {
        $this->physicalAttribute = $physicalAttribute;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     *  Item Identification. Measurement_ Dimension. Dimension
     *  An association to Measurement Dimension.
     *  0..n
     *  Item Identification
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
     * Gets as issuerParty
     *
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Item Identification. Issuer_ Party. Party
     *  An association to Issuer Party i.e. the Party that issued the Item Identification.
     *  0..1
     *  Item Identification
     *  Issuer
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\horstoeko\ubl\entities\cac\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }


}

