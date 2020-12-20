<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TransactionConditionsType
 *
 * ABIE
 *  Transaction Conditions. Details
 *  A class to describe purchasing, sales, or payment conditions.
 *  Transaction Conditions
 *  Payment Conditions, Sales Conditions
 * XSD Type: TransactionConditionsType
 */
class TransactionConditionsType
{

    /**
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
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
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
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
     * Gets as actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(\horstoeko\ubl\entities\cbc\ActionCode $actionCode)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Description $description
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    public function addToDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

