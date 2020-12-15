<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing OrderReferenceType
 *
 * ABIE
 *  Order Reference. Details
 *  A class to define a reference to an Order.
 *  Order Reference
 * XSD Type: OrderReferenceType
 */
class OrderReferenceType
{

    /**
     * BBIE
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OrderTypeCode $orderTypeCode
     */
    private $orderTypeCode = null;

    /**
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(\horstoeko\ubl\entities\cbc\SalesOrderID $salesOrderID)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
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
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
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
     * Gets as issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CustomerReference
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CustomerReference $customerReference
     * @return self
     */
    public function setCustomerReference(\horstoeko\ubl\entities\cbc\CustomerReference $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as orderTypeCode
     *
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OrderTypeCode
     */
    public function getOrderTypeCode()
    {
        return $this->orderTypeCode;
    }

    /**
     * Sets a new orderTypeCode
     *
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OrderTypeCode $orderTypeCode
     * @return self
     */
    public function setOrderTypeCode(\horstoeko\ubl\entities\cbc\OrderTypeCode $orderTypeCode)
    {
        $this->orderTypeCode = $orderTypeCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }


}

