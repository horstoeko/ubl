<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LotIdentificationType
 *
 * ABIE
 *  Lot Identification. Details
 *  A class for defining a lot identifier (the identifier of a set of item instances that would be used in case of a recall of that item).
 *  Lot Identification
 * XSD Type: LotIdentificationType
 */
class LotIdentificationType
{

    /**
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LotNumberID $lotNumberID
     */
    private $lotNumberID = null;

    /**
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @var \horstoeko\ubl\entities\cac\AdditionalItemProperty[] $additionalItemProperty
     */
    private $additionalItemProperty = [
        
    ];

    /**
     * Gets as lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LotNumberID
     */
    public function getLotNumberID()
    {
        return $this->lotNumberID;
    }

    /**
     * Sets a new lotNumberID
     *
     * BBIE
     *  Lot Identification. Lot Number. Identifier
     *  An identifier for the lot.
     *  0..1
     *  Lot Identification
     *  Lot Number
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\LotNumberID $lotNumberID
     * @return self
     */
    public function setLotNumberID(\horstoeko\ubl\entities\cbc\LotNumberID $lotNumberID)
    {
        $this->lotNumberID = $lotNumberID;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  Lot Identification. Expiry Date. Date
     *  The expiry date of the lot.
     *  0..1
     *  Lot Identification
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Adds as additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\AdditionalItemProperty $additionalItemProperty
     */
    public function addToAdditionalItemProperty(\horstoeko\ubl\entities\cac\AdditionalItemProperty $additionalItemProperty)
    {
        $this->additionalItemProperty[] = $additionalItemProperty;
        return $this;
    }

    /**
     * isset additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAdditionalItemProperty($index)
    {
        return isset($this->additionalItemProperty[$index]);
    }

    /**
     * unset additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAdditionalItemProperty($index)
    {
        unset($this->additionalItemProperty[$index]);
    }

    /**
     * Gets as additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @return \horstoeko\ubl\entities\cac\AdditionalItemProperty[]
     */
    public function getAdditionalItemProperty()
    {
        return $this->additionalItemProperty;
    }

    /**
     * Sets a new additionalItemProperty
     *
     * ASBIE
     *  Lot Identification. Additional_ Item Property. Item Property
     *  An additional property of the lot.
     *  0..n
     *  Lot Identification
     *  Additional
     *  Item Property
     *  Item Property
     *  Item Property
     *
     * @param  \horstoeko\ubl\entities\cac\AdditionalItemProperty[] $additionalItemProperty
     * @return self
     */
    public function setAdditionalItemProperty(array $additionalItemProperty)
    {
        $this->additionalItemProperty = $additionalItemProperty;
        return $this;
    }


}

