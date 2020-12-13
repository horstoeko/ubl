<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing QuotationLineType
 *
 * ABIE
 *  Quotation Line. Details
 *  Information about a Quotation Line.
 *  Quotation Line
 * XSD Type: QuotationLineType
 */
class QuotationLineType
{

    /**
     * BBIE
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note $note
     */
    private $note = null;

    /**
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * ASBIE
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *
     * @var \horstoeko\ubl\entities\cac\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @var \horstoeko\ubl\entities\cac\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Identifier
     *  Identifies the Quotation Line Item.
     *  0..1
     *  Quotation Line
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
     * Gets as note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Note. Text
     *  Free-form text applying to the Quotation Line. This element may contain notes or any other similar information that is not contained explicitly in another structure.
     *  0..1
     *  Quotation Line
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
     * Gets as quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
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
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
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
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for the Quotation Line, including Allowance Charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\horstoeko\ubl\entities\cbc\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for the Quotation Line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\horstoeko\ubl\entities\cbc\TotalTaxAmount $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  An association to Document Reference.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
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
     *  Quotation Line. Line Item
     *  An association to Line Item.
     *  1
     *  Quotation Line
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

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\horstoeko\ubl\entities\cac\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProposedSubstituteLineItem($index)
    {
        return isset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProposedSubstituteLineItem($index)
    {
        unset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @return \horstoeko\ubl\entities\cac\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An association to a proposed substitute Line Item.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *
     * @param \horstoeko\ubl\entities\cac\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(array $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }


}

