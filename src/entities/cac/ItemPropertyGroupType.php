<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ItemPropertyGroupType
 *
 * ABIE
 *  Item Property Group. Details
 *  A class to describe a property group or classification.
 *  Item Property Group
 * XSD Type: ItemPropertyGroupType
 */
class ItemPropertyGroupType
{

    /**
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
     *  Importance Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ImportanceCode $importanceCode
     */
    private $importanceCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
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
     *  Item Property Group. Identifier
     *  An identifier for this group of item properties.
     *  1
     *  Item Property Group
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  233-004
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
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
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
     *  Item Property Group. Name
     *  The name of this item property group.
     *  0..1
     *  Item Property Group
     *  Name
     *  Name
     *  Name. Type
     *  Electrical Specifications , Dietary Content
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
     * Gets as importanceCode
     *
     * BBIE
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
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
     *  Item Property Group. Importance Code. Code
     *  A code signifying the importance of this property group in using it to describe a required Item.
     *  0..1
     *  Item Property Group
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


}

