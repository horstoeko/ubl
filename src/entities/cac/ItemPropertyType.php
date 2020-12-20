<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemPropertyType
 *
 * ABIE
 *  Item Property. Details
 *  A class to describe a specific property of an item.
 *  Item Property
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{

    /**
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NameCode $nameCode
     */
    private $nameCode = null;

    /**
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \horstoeko\ubl\entities\cbc\TestMethod $testMethod
     */
    private $testMethod = null;

    /**
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @var \horstoeko\ubl\entities\cbc\Value $value
     */
    private $value = null;

    /**
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValueQualifier[] $valueQualifier
     */
    private $valueQualifier = [
        
    ];

    /**
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ListValue[] $listValue
     */
    private $listValue = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @var \horstoeko\ubl\entities\cac\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \horstoeko\ubl\entities\cac\RangeDimension $rangeDimension
     */
    private $rangeDimension = null;

    /**
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @var \horstoeko\ubl\entities\cac\ItemPropertyRange $itemPropertyRange
     */
    private $itemPropertyRange = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
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
     *  Item Property. Identifier
     *  An identifier for this property of an item.
     *  0..1
     *  Item Property
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     *  Item Property. Name
     *  The name of this item property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  Energy Rating , Collar Size , Fat Content
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
     * Gets as nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NameCode
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Sets a new nameCode
     *
     * BBIE
     *  Item Property. Name Code. Code
     *  The name of this item property, expressed as a code.
     *  0..1
     *  Item Property
     *  Name Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\NameCode $nameCode
     * @return self
     */
    public function setNameCode(\horstoeko\ubl\entities\cbc\NameCode $nameCode)
    {
        $this->nameCode = $nameCode;
        return $this;
    }

    /**
     * Gets as testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \horstoeko\ubl\entities\cbc\TestMethod
     */
    public function getTestMethod()
    {
        return $this->testMethod;
    }

    /**
     * Sets a new testMethod
     *
     * BBIE
     *  Item Property. Test Method. Text
     *  The method of testing the value of this item property.
     *  0..1
     *  Item Property
     *  Test Method
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param  \horstoeko\ubl\entities\cbc\TestMethod $testMethod
     * @return self
     */
    public function setTestMethod(\horstoeko\ubl\entities\cbc\TestMethod $testMethod)
    {
        $this->testMethod = $testMethod;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @return \horstoeko\ubl\entities\cbc\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The value of this item property, expressed as text.
     *  0..1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  100 watts , 15 European , 20% +/- 5%
     *
     * @param  \horstoeko\ubl\entities\cbc\Value $value
     * @return self
     */
    public function setValue(\horstoeko\ubl\entities\cbc\Value $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Item Property. Value_ Quantity. Quantity
     *  The value of this item property, expressed as a quantity.
     *  0..1
     *  Item Property
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(\horstoeko\ubl\entities\cbc\ValueQuantity $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\ValueQualifier $valueQualifier
     */
    public function addToValueQualifier(\horstoeko\ubl\entities\cbc\ValueQualifier $valueQualifier)
    {
        $this->valueQualifier[] = $valueQualifier;
        return $this;
    }

    /**
     * isset valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetValueQualifier($index)
    {
        return isset($this->valueQualifier[$index]);
    }

    /**
     * unset valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetValueQualifier($index)
    {
        unset($this->valueQualifier[$index]);
    }

    /**
     * Gets as valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValueQualifier[]
     */
    public function getValueQualifier()
    {
        return $this->valueQualifier;
    }

    /**
     * Sets a new valueQualifier
     *
     * BBIE
     *  Item Property. Value Qualifier. Text
     *  Text qualifying the value of the property.
     *  0..n
     *  Item Property
     *  Value Qualifier
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValueQualifier[] $valueQualifier
     * @return self
     */
    public function setValueQualifier(array $valueQualifier)
    {
        $this->valueQualifier = $valueQualifier;
        return $this;
    }

    /**
     * Gets as importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ImportanceCode
     */
    public function getImportanceCode()
    {
        return $this->importanceCode;
    }

    /**
     * Sets a new importanceCode
     *
     * BBIE
     *  Item Property. Importance Code. Code
     *  A code signifying the importance of this property in using it to describe a related Item.
     *  0..1
     *  Item Property
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ImportanceCode $importanceCode
     * @return self
     */
    public function setImportanceCode(\horstoeko\ubl\entities\cbc\ImportanceCode $importanceCode)
    {
        $this->importanceCode = $importanceCode;
        return $this;
    }

    /**
     * Adds as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\ListValue $listValue
     */
    public function addToListValue(\horstoeko\ubl\entities\cbc\ListValue $listValue)
    {
        $this->listValue[] = $listValue;
        return $this;
    }

    /**
     * isset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetListValue($index)
    {
        return isset($this->listValue[$index]);
    }

    /**
     * unset listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetListValue($index)
    {
        unset($this->listValue[$index]);
    }

    /**
     * Gets as listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ListValue[]
     */
    public function getListValue()
    {
        return $this->listValue;
    }

    /**
     * Sets a new listValue
     *
     * BBIE
     *  Item Property. List Value. Text
     *  The value expressed as a text in case the property is a value in a list. For example, a colour.
     *  0..n
     *  Item Property
     *  List Value
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ListValue[] $listValue
     * @return self
     */
    public function setListValue(array $listValue)
    {
        $this->listValue = $listValue;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\UsabilityPeriod
     */
    public function getUsabilityPeriod()
    {
        return $this->usabilityPeriod;
    }

    /**
     * Sets a new usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period during which this item property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\UsabilityPeriod $usabilityPeriod
     * @return self
     */
    public function setUsabilityPeriod(\horstoeko\ubl\entities\cac\UsabilityPeriod $usabilityPeriod)
    {
        $this->usabilityPeriod = $usabilityPeriod;
        return $this;
    }

    /**
     * Adds as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ItemPropertyGroup $itemPropertyGroup
     */
    public function addToItemPropertyGroup(\horstoeko\ubl\entities\cac\ItemPropertyGroup $itemPropertyGroup)
    {
        $this->itemPropertyGroup[] = $itemPropertyGroup;
        return $this;
    }

    /**
     * isset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetItemPropertyGroup($index)
    {
        return isset($this->itemPropertyGroup[$index]);
    }

    /**
     * unset itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetItemPropertyGroup($index)
    {
        unset($this->itemPropertyGroup[$index]);
    }

    /**
     * Gets as itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @return \horstoeko\ubl\entities\cac\ItemPropertyGroup[]
     */
    public function getItemPropertyGroup()
    {
        return $this->itemPropertyGroup;
    }

    /**
     * Sets a new itemPropertyGroup
     *
     * ASBIE
     *  Item Property. Item Property Group
     *  A description of the property group to which this item property belongs.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *  Item Property Group
     *
     * @param  \horstoeko\ubl\entities\cac\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(array $itemPropertyGroup)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }

    /**
     * Gets as rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \horstoeko\ubl\entities\cac\RangeDimension
     */
    public function getRangeDimension()
    {
        return $this->rangeDimension;
    }

    /**
     * Sets a new rangeDimension
     *
     * ASBIE
     *  Item Property. Range_ Dimension. Dimension
     *  The range of values for the dimensions of this property.
     *  0..1
     *  Item Property
     *  Range
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param  \horstoeko\ubl\entities\cac\RangeDimension $rangeDimension
     * @return self
     */
    public function setRangeDimension(\horstoeko\ubl\entities\cac\RangeDimension $rangeDimension)
    {
        $this->rangeDimension = $rangeDimension;
        return $this;
    }

    /**
     * Gets as itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @return \horstoeko\ubl\entities\cac\ItemPropertyRange
     */
    public function getItemPropertyRange()
    {
        return $this->itemPropertyRange;
    }

    /**
     * Sets a new itemPropertyRange
     *
     * ASBIE
     *  Item Property. Item Property Range
     *  A range of values for this item property.
     *  0..1
     *  Item Property
     *  Item Property Range
     *  Item Property Range
     *  Item Property Range
     *
     * @param  \horstoeko\ubl\entities\cac\ItemPropertyRange $itemPropertyRange
     * @return self
     */
    public function setItemPropertyRange(\horstoeko\ubl\entities\cac\ItemPropertyRange $itemPropertyRange)
    {
        $this->itemPropertyRange = $itemPropertyRange;
        return $this;
    }


}

