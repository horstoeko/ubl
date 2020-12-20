<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AwardingCriterionResponseType
 *
 * ABIE
 *  Awarding Criterion Response. Details
 *  Defines the response for an awarding criterion from the tendering party.
 *  Awarding Criterion Response
 * XSD Type: AwardingCriterionResponseType
 */
class AwardingCriterionResponseType
{

    /**
     * BBIE
     *  Awarding Criterion Response. Identifier
     *  An identification of this awarding criterion response.
     *  0..1
     *  Awarding Criterion Response
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion Identifier. Identifier
     *  An identifer of the awarding criterion being referred to.
     *  0..1
     *  Awarding Criterion Response
     *  Awarding Criterion Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AwardingCriterionID $awardingCriterionID
     */
    private $awardingCriterionID = null;

    /**
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AwardingCriterionDescription[] $awardingCriterionDescription
     */
    private $awardingCriterionDescription = [
        
    ];

    /**
     * BBIE
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Awarding Criterion Response. Quantity
     *  Specifies the quantity tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Awarding Criterion Response. Amount
     *  Specifies the monetary amount tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @var \horstoeko\ubl\entities\cac\SubordinateAwardingCriterionResponse[] $subordinateAwardingCriterionResponse
     */
    private $subordinateAwardingCriterionResponse = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Awarding Criterion Response. Identifier
     *  An identification of this awarding criterion response.
     *  0..1
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Identifier
     *  An identification of this awarding criterion response.
     *  0..1
     *  Awarding Criterion Response
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
     * Gets as awardingCriterionID
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion Identifier. Identifier
     *  An identifer of the awarding criterion being referred to.
     *  0..1
     *  Awarding Criterion Response
     *  Awarding Criterion Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AwardingCriterionID
     */
    public function getAwardingCriterionID()
    {
        return $this->awardingCriterionID;
    }

    /**
     * Sets a new awardingCriterionID
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion Identifier. Identifier
     *  An identifer of the awarding criterion being referred to.
     *  0..1
     *  Awarding Criterion Response
     *  Awarding Criterion Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AwardingCriterionID $awardingCriterionID
     * @return self
     */
    public function setAwardingCriterionID(\horstoeko\ubl\entities\cbc\AwardingCriterionID $awardingCriterionID)
    {
        $this->awardingCriterionID = $awardingCriterionID;
        return $this;
    }

    /**
     * Adds as awardingCriterionDescription
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\AwardingCriterionDescription $awardingCriterionDescription
     */
    public function addToAwardingCriterionDescription(\horstoeko\ubl\entities\cbc\AwardingCriterionDescription $awardingCriterionDescription)
    {
        $this->awardingCriterionDescription[] = $awardingCriterionDescription;
        return $this;
    }

    /**
     * isset awardingCriterionDescription
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAwardingCriterionDescription($index)
    {
        return isset($this->awardingCriterionDescription[$index]);
    }

    /**
     * unset awardingCriterionDescription
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAwardingCriterionDescription($index)
    {
        unset($this->awardingCriterionDescription[$index]);
    }

    /**
     * Gets as awardingCriterionDescription
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AwardingCriterionDescription[]
     */
    public function getAwardingCriterionDescription()
    {
        return $this->awardingCriterionDescription;
    }

    /**
     * Sets a new awardingCriterionDescription
     *
     * BBIE
     *  Awarding Criterion Response. Awarding Criterion_ Description. Text
     *  Describes the awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Awarding Criterion
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\AwardingCriterionDescription[] $awardingCriterionDescription
     * @return self
     */
    public function setAwardingCriterionDescription(array $awardingCriterionDescription)
    {
        $this->awardingCriterionDescription = $awardingCriterionDescription;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Description. Text
     *  Describes the awarding criterion response.
     *  0..n
     *  Awarding Criterion Response
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
     * Gets as quantity
     *
     * BBIE
     *  Awarding Criterion Response. Quantity
     *  Specifies the quantity tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
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
     *  Awarding Criterion Response. Quantity
     *  Specifies the quantity tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
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
     * Gets as amount
     *
     * BBIE
     *  Awarding Criterion Response. Amount
     *  Specifies the monetary amount tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Awarding Criterion Response. Amount
     *  Specifies the monetary amount tendered for this awarding criterion.
     *  0..1
     *  Awarding Criterion Response
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Amount $amount
     * @return self
     */
    public function setAmount(\horstoeko\ubl\entities\cbc\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Adds as subordinateAwardingCriterionResponse
     *
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse
     */
    public function addToSubordinateAwardingCriterionResponse(\horstoeko\ubl\entities\cac\SubordinateAwardingCriterionResponse $subordinateAwardingCriterionResponse)
    {
        $this->subordinateAwardingCriterionResponse[] = $subordinateAwardingCriterionResponse;
        return $this;
    }

    /**
     * isset subordinateAwardingCriterionResponse
     *
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSubordinateAwardingCriterionResponse($index)
    {
        return isset($this->subordinateAwardingCriterionResponse[$index]);
    }

    /**
     * unset subordinateAwardingCriterionResponse
     *
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSubordinateAwardingCriterionResponse($index)
    {
        unset($this->subordinateAwardingCriterionResponse[$index]);
    }

    /**
     * Gets as subordinateAwardingCriterionResponse
     *
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return \horstoeko\ubl\entities\cac\SubordinateAwardingCriterionResponse[]
     */
    public function getSubordinateAwardingCriterionResponse()
    {
        return $this->subordinateAwardingCriterionResponse;
    }

    /**
     * Sets a new subordinateAwardingCriterionResponse
     *
     * ASBIE
     *  Awarding Criterion Response. Subordinate_ Awarding Criterion Response. Awarding Criterion Response
     *  Defines responses to any subsidiary awarding criterion.
     *  0..n
     *  Awarding Criterion Response
     *  Subordinate
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param  \horstoeko\ubl\entities\cac\SubordinateAwardingCriterionResponse[] $subordinateAwardingCriterionResponse
     * @return self
     */
    public function setSubordinateAwardingCriterionResponse(array $subordinateAwardingCriterionResponse)
    {
        $this->subordinateAwardingCriterionResponse = $subordinateAwardingCriterionResponse;
        return $this;
    }


}

