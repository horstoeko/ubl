<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PriceListType
 *
 * ABIE
 *  Price List. Details
 *  A class to describe a price list.
 *  Price List
 * XSD Type: PriceListType
 */
class PriceListType
{

    /**
     * BBIE
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @var \horstoeko\ubl\entities\cbc\StatusCode $statusCode
     */
    private $statusCode = null;

    /**
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @var \horstoeko\ubl\entities\cac\PreviousPriceList $previousPriceList
     */
    private $previousPriceList = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
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
     *  Price List. Identifier
     *  An identifier for this price list.
     *  0..1
     *  Price List
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
     * Gets as statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @return \horstoeko\ubl\entities\cbc\StatusCode
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * BBIE
     *  Price List. Status Code. Code
     *  A code signifying whether this price list is an original, copy, revision, or cancellation.
     *  0..1
     *  Price List
     *  Status Code
     *  Code
     *  Code. Type
     *  new - announcement only , new and available , deleted - announcement only
     *
     * @param  \horstoeko\ubl\entities\cbc\StatusCode $statusCode
     * @return self
     */
    public function setStatusCode(\horstoeko\ubl\entities\cbc\StatusCode $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Adds as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\horstoeko\ubl\entities\cac\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Price List. Validity_ Period. Period
     *  A period during which this price list is valid.
     *  0..n
     *  Price List
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param  \horstoeko\ubl\entities\cac\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @return \horstoeko\ubl\entities\cac\PreviousPriceList
     */
    public function getPreviousPriceList()
    {
        return $this->previousPriceList;
    }

    /**
     * Sets a new previousPriceList
     *
     * ASBIE
     *  Price List. Previous_ Price List. Price List
     *  The previous price list.
     *  0..1
     *  Price List
     *  Previous
     *  Price List
     *  Price List
     *  Price List
     *
     * @param  \horstoeko\ubl\entities\cac\PreviousPriceList $previousPriceList
     * @return self
     */
    public function setPreviousPriceList(\horstoeko\ubl\entities\cac\PreviousPriceList $previousPriceList)
    {
        $this->previousPriceList = $previousPriceList;
        return $this;
    }


}

