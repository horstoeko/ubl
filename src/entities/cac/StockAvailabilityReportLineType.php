<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing StockAvailabilityReportLineType
 *
 * ABIE
 *  Stock Availability Report Line. Details
 *  A class to define a line in a Stock Availability Report describing the availability of an item of sale.
 *  Stock Availability Report Line
 * XSD Type: StockAvailabilityReportLineType
 */
class StockAvailabilityReportLineType
{

    /**
     * BBIE
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $availabilityDate
     */
    private $availabilityDate = null;

    /**
     * BBIE
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AvailabilityStatusCode $availabilityStatusCode
     */
    private $availabilityStatusCode = null;

    /**
     * ASBIE
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
     *  Item
     *  Item
     *  Item
     *
     * @var \horstoeko\ubl\entities\cac\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Identifier
     *  An identifier for this stock availability line.
     *  1
     *  Stock Availability Report Line
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
     * Adds as note
     *
     * BBIE
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Note $note
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Stock Availability Report Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Quantity
     *  The quantity of the item currently in stock.
     *  1
     *  Stock Availability Report Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as valueAmount
     *
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Stock Availability Report Line. Value. Amount
     *  The monetary value of the quantity of the item currently in stock.
     *  0..1
     *  Stock Availability Report Line
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(\horstoeko\ubl\entities\cbc\ValueAmount $valueAmount)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as availabilityDate
     *
     * BBIE
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * Sets a new availabilityDate
     *
     * BBIE
     *  Stock Availability Report Line. Availability Date. Date
     *  The date from which the item will be available. A date identical to or earlier than the IssueDate of the Stock Availability Report means that the item is available now
     *  0..1
     *  Stock Availability Report Line
     *  Availability Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $availabilityDate
     * @return self
     */
    public function setAvailabilityDate(\DateTime $availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;
        return $this;
    }

    /**
     * Gets as availabilityStatusCode
     *
     * BBIE
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AvailabilityStatusCode
     */
    public function getAvailabilityStatusCode()
    {
        return $this->availabilityStatusCode;
    }

    /**
     * Sets a new availabilityStatusCode
     *
     * BBIE
     *  Stock Availability Report Line. Availability Status Code. Code
     *  A code signifying the level of availability of the item.
     *  0..1
     *  Stock Availability Report Line
     *  Availability Status Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AvailabilityStatusCode $availabilityStatusCode
     * @return self
     */
    public function setAvailabilityStatusCode(\horstoeko\ubl\entities\cbc\AvailabilityStatusCode $availabilityStatusCode)
    {
        $this->availabilityStatusCode = $availabilityStatusCode;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
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
     *  Stock Availability Report Line. Item
     *  The item associated with this stock availability report line.
     *  1
     *  Stock Availability Report Line
     *  Item
     *  Item
     *  Item
     *
     * @param  \horstoeko\ubl\entities\cac\Item $item
     * @return self
     */
    public function setItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item = $item;
        return $this;
    }


}

