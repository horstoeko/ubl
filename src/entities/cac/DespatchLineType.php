<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing DespatchLineType
 *
 * ABIE
 *  Despatch Line. Details
 *  A class to define a line in a Despatch Advice.
 *  Despatch Line
 * XSD Type: DespatchLineType
 */
class DespatchLineType
{

    /**
     * BBIE
     *  Despatch Line. Identifier
     *  An identifier for this despatch line.
     *  1
     *  Despatch Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for this despatch line.
     *  0..1
     *  Despatch Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  A code signifying the status of this despatch line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched (picked up).
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity
     */
    private $deliveredQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on back order at the supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BackorderQuantity $backorderQuantity
     */
    private $backorderQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BackorderReason[] $backorderReason
     */
    private $backorderReason = [
        
    ];

    /**
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OutstandingQuantity $outstandingQuantity
     */
    private $outstandingQuantity = null;

    /**
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OutstandingReason[] $outstandingReason
     */
    private $outstandingReason = [
        
    ];

    /**
     * BBIE
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above that ordered.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \horstoeko\ubl\entities\cac\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Despatch Line. Item
     *  The item associated with this despatch line.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \horstoeko\ubl\entities\cac\Shipment[] $shipment
     */
    private $shipment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Despatch Line. Identifier
     *  An identifier for this despatch line.
     *  1
     *  Despatch Line
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
     *  Despatch Line. Identifier
     *  An identifier for this despatch line.
     *  1
     *  Despatch Line
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
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for this despatch line.
     *  0..1
     *  Despatch Line
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
     *  Despatch Line. UUID. Identifier
     *  A universally unique identifier for this despatch line.
     *  0..1
     *  Despatch Line
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
     * Adds as note
     *
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Despatch Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Despatch Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  A code signifying the status of this despatch line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Despatch Line. Line Status Code. Code
     *  A code signifying the status of this despatch line with respect to its original state.
     *  0..1
     *  Despatch Line
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\horstoeko\ubl\entities\cbc\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as deliveredQuantity
     *
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched (picked up).
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DeliveredQuantity
     */
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     * Sets a new deliveredQuantity
     *
     * BBIE
     *  Despatch Line. Delivered_ Quantity. Quantity
     *  The quantity despatched (picked up).
     *  0..1
     *  Despatch Line
     *  Delivered
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity(\horstoeko\ubl\entities\cbc\DeliveredQuantity $deliveredQuantity)
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }

    /**
     * Gets as backorderQuantity
     *
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on back order at the supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BackorderQuantity
     */
    public function getBackorderQuantity()
    {
        return $this->backorderQuantity;
    }

    /**
     * Sets a new backorderQuantity
     *
     * BBIE
     *  Despatch Line. Backorder_ Quantity. Quantity
     *  The quantity on back order at the supplier.
     *  0..1
     *  Despatch Line
     *  Backorder
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BackorderQuantity $backorderQuantity
     * @return self
     */
    public function setBackorderQuantity(\horstoeko\ubl\entities\cbc\BackorderQuantity $backorderQuantity)
    {
        $this->backorderQuantity = $backorderQuantity;
        return $this;
    }

    /**
     * Adds as backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\BackorderReason $backorderReason
     */
    public function addToBackorderReason(\horstoeko\ubl\entities\cbc\BackorderReason $backorderReason)
    {
        $this->backorderReason[] = $backorderReason;
        return $this;
    }

    /**
     * isset backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBackorderReason($index)
    {
        return isset($this->backorderReason[$index]);
    }

    /**
     * unset backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBackorderReason($index)
    {
        unset($this->backorderReason[$index]);
    }

    /**
     * Gets as backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BackorderReason[]
     */
    public function getBackorderReason()
    {
        return $this->backorderReason;
    }

    /**
     * Sets a new backorderReason
     *
     * BBIE
     *  Despatch Line. Backorder_ Reason. Text
     *  The reason for the back order.
     *  0..n
     *  Despatch Line
     *  Backorder
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BackorderReason[] $backorderReason
     * @return self
     */
    public function setBackorderReason(array $backorderReason)
    {
        $this->backorderReason = $backorderReason;
        return $this;
    }

    /**
     * Gets as outstandingQuantity
     *
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OutstandingQuantity
     */
    public function getOutstandingQuantity()
    {
        return $this->outstandingQuantity;
    }

    /**
     * Sets a new outstandingQuantity
     *
     * BBIE
     *  Despatch Line. Outstanding_ Quantity. Quantity
     *  The quantity outstanding (which will follow in a later despatch).
     *  0..1
     *  Despatch Line
     *  Outstanding
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OutstandingQuantity $outstandingQuantity
     * @return self
     */
    public function setOutstandingQuantity(\horstoeko\ubl\entities\cbc\OutstandingQuantity $outstandingQuantity)
    {
        $this->outstandingQuantity = $outstandingQuantity;
        return $this;
    }

    /**
     * Adds as outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\OutstandingReason $outstandingReason
     */
    public function addToOutstandingReason(\horstoeko\ubl\entities\cbc\OutstandingReason $outstandingReason)
    {
        $this->outstandingReason[] = $outstandingReason;
        return $this;
    }

    /**
     * isset outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOutstandingReason($index)
    {
        return isset($this->outstandingReason[$index]);
    }

    /**
     * unset outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOutstandingReason($index)
    {
        unset($this->outstandingReason[$index]);
    }

    /**
     * Gets as outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OutstandingReason[]
     */
    public function getOutstandingReason()
    {
        return $this->outstandingReason;
    }

    /**
     * Sets a new outstandingReason
     *
     * BBIE
     *  Despatch Line. Outstanding_ Reason. Text
     *  The reason for the outstanding quantity.
     *  0..n
     *  Despatch Line
     *  Outstanding
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OutstandingReason[] $outstandingReason
     * @return self
     */
    public function setOutstandingReason(array $outstandingReason)
    {
        $this->outstandingReason = $outstandingReason;
        return $this;
    }

    /**
     * Gets as oversupplyQuantity
     *
     * BBIE
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above that ordered.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OversupplyQuantity
     */
    public function getOversupplyQuantity()
    {
        return $this->oversupplyQuantity;
    }

    /**
     * Sets a new oversupplyQuantity
     *
     * BBIE
     *  Despatch Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above that ordered.
     *  0..1
     *  Despatch Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OversupplyQuantity $oversupplyQuantity
     * @return self
     */
    public function setOversupplyQuantity(\horstoeko\ubl\entities\cbc\OversupplyQuantity $oversupplyQuantity)
    {
        $this->oversupplyQuantity = $oversupplyQuantity;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\horstoeko\ubl\entities\cac\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \horstoeko\ubl\entities\cac\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Despatch Line. Order Line Reference
     *  A reference to an order line associated with this despatch line.
     *  1..n
     *  Despatch Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \horstoeko\ubl\entities\cac\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(array $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Document Reference
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
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Document Reference
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
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Document Reference
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
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
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
     *  Despatch Line. Document Reference
     *  A reference to a document associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Document Reference
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
     * Gets as item
     *
     * ASBIE
     *  Despatch Line. Item
     *  The item associated with this despatch line.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *  Item
     *
     * @return \horstoeko\ubl\entities\cac\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Despatch Line. Item
     *  The item associated with this despatch line.
     *  1
     *  Despatch Line
     *  Item
     *  Item
     *  Item
     *
     * @param \horstoeko\ubl\entities\cac\Item $item
     * @return self
     */
    public function setItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Shipment $shipment
     */
    public function addToShipment(\horstoeko\ubl\entities\cac\Shipment $shipment)
    {
        $this->shipment[] = $shipment;
        return $this;
    }

    /**
     * isset shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipment($index)
    {
        return isset($this->shipment[$index]);
    }

    /**
     * unset shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipment($index)
    {
        unset($this->shipment[$index]);
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \horstoeko\ubl\entities\cac\Shipment[]
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Despatch Line. Shipment
     *  A shipment associated with this despatch line.
     *  0..n
     *  Despatch Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \horstoeko\ubl\entities\cac\Shipment[] $shipment
     * @return self
     */
    public function setShipment(array $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }


}

