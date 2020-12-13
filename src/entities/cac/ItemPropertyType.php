<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemPropertyType
 *
 * ABIE
 *  Item Property. Details
 *  Information about specific Item Properties.
 *  Item Property
 * XSD Type: ItemPropertyType
 */
class ItemPropertyType
{

    /**
     * BBIE
     *  Item Property. Name
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property. Value. Text
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
     *
     * @var \horstoeko\ubl\entities\cbc\Value $value
     */
    private $value = null;

    /**
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\UsabilityPeriod $usabilityPeriod
     */
    private $usabilityPeriod = null;

    /**
     * ASBIE
     *  Item Property. Item Property Group
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @var \horstoeko\ubl\entities\cac\ItemPropertyGroup[] $itemPropertyGroup
     */
    private $itemPropertyGroup = [
        
    ];

    /**
     * Gets as name
     *
     * BBIE
     *  Item Property. Name
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
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
     *  The name of the Item Property.
     *  1
     *  Item Property
     *  Name
     *  Name
     *  Name. Type
     *  "Energy Rating", "Collar Size", "Fat Content"
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Item Property. Value. Text
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
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
     *  The Item Property value.
     *  1
     *  Item Property
     *  Value
     *  Text
     *  Text. Type
     *  "100 watts", "15 European", "20% +/- 5%"
     *
     * @param \horstoeko\ubl\entities\cbc\Value $value
     * @return self
     */
    public function setValue(\horstoeko\ubl\entities\cbc\Value $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as usabilityPeriod
     *
     * ASBIE
     *  Item Property. Usability_ Period. Period
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
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
     *  The period for which the Item Property is valid.
     *  0..1
     *  Item Property
     *  Usability
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\UsabilityPeriod $usabilityPeriod
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
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ItemPropertyGroup $itemPropertyGroup
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
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
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
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param int|string $index
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
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
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
     *  An association to Item Property Group.
     *  0..n
     *  Item Property
     *  Item Property Group
     *  Item Property Group
     *
     * @param \horstoeko\ubl\entities\cac\ItemPropertyGroup[] $itemPropertyGroup
     * @return self
     */
    public function setItemPropertyGroup(array $itemPropertyGroup)
    {
        $this->itemPropertyGroup = $itemPropertyGroup;
        return $this;
    }


}

