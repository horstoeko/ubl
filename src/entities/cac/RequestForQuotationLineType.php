<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing RequestForQuotationLineType
 *
 * ABIE
 *  Request For Quotation Line. Details
 *  Information about a Line on a Request For Quotation.
 *  Request For Quotation Line
 * XSD Type: RequestForQuotationLineType
 */
class RequestForQuotationLineType
{

    /**
     * BBIE
     *  Request For Quotation Line. Identifier
     *  Identifies the Request For Quotation Line.
     *  0..1
     *  Request For Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Request For Quotation Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Request For Quotation Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Request For Quotation Line. Note. Text
     *  Free-form text applying to the Request For Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Request For Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note $note
     */
    private $note = null;

    /**
     * ASBIE
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Request For Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Request For Quotation Line
     *  Line Item
     *  Line Item
     *
     * @var \horstoeko\ubl\entities\cac\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Request For Quotation Line. Identifier
     *  Identifies the Request For Quotation Line.
     *  0..1
     *  Request For Quotation Line
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
     *  Request For Quotation Line. Identifier
     *  Identifies the Request For Quotation Line.
     *  0..1
     *  Request For Quotation Line
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
     * Gets as uUID
     *
     * BBIE
     *  Request For Quotation Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Request For Quotation Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Request For Quotation Line. UUID. Identifier
     *  A universally unique identifier for an instance of this ABIE.
     *  0..1
     *  Request For Quotation Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\UUID $uUID
     * @return self
     */
    public function setUUID(\horstoeko\ubl\entities\cbc\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Request For Quotation Line. Note. Text
     *  Free-form text applying to the Request For Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Request For Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Request For Quotation Line. Note. Text
     *  Free-form text applying to the Request For Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Request For Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note $note
     * @return self
     */
    public function setNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DocumentReference $documentReference
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
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
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
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
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
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
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
     *  Request For Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Request For Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as lineItem
     *
     * ASBIE
     *  Request For Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Request For Quotation Line
     *  Line Item
     *  Line Item
     *
     * @return \horstoeko\ubl\entities\cac\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * ASBIE
     *  Request For Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Request For Quotation Line
     *  Line Item
     *  Line Item
     *
     * @param \horstoeko\ubl\entities\cac\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\horstoeko\ubl\entities\cac\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }


}

