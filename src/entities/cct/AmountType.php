<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing AmountType
 *
 * UNDT000001
 *  CCT
 *  Amount. Type
 *  1.0
 *  A number of monetary units specified in a currency where the unit of the currency is explicit or implied.
 *  Amount
 *  decimal
 * XSD Type: AmountType
 */
class AmountType
{

    /**
     * @var float $__value
     */
    private $__value = null;

    /**
     * UNDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  Reference UNECE Rec 9, using 3-letter alphabetic codes.
     *
     * @var string $currencyID
     */
    private $currencyID = null;

    /**
     * UNDT000001-SC3
     *  SC
     *  Amount Currency. Code List Version. Identifier
     *  The VersionID of the UN/ECE Rec9 code list.
     *  Amount Currency
     *  Code List Version
     *  Identifier
     *  string
     *
     * @var string $currencyCodeListVersionID
     */
    private $currencyCodeListVersionID = null;

    /**
     * Construct
     *
     * @param float $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param  float $value
     * @return float
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as currencyID
     *
     * UNDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  Reference UNECE Rec 9, using 3-letter alphabetic codes.
     *
     * @return string
     */
    public function getCurrencyID()
    {
        return $this->currencyID;
    }

    /**
     * Sets a new currencyID
     *
     * UNDT000001-SC2
     *  SC
     *  Amount Currency. Identifier
     *  The currency of the amount.
     *  Amount Currency
     *  Identification
     *  Identifier
     *  string
     *  Reference UNECE Rec 9, using 3-letter alphabetic codes.
     *
     * @param  string $currencyID
     * @return self
     */
    public function setCurrencyID($currencyID)
    {
        $this->currencyID = $currencyID;
        return $this;
    }

    /**
     * Gets as currencyCodeListVersionID
     *
     * UNDT000001-SC3
     *  SC
     *  Amount Currency. Code List Version. Identifier
     *  The VersionID of the UN/ECE Rec9 code list.
     *  Amount Currency
     *  Code List Version
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getCurrencyCodeListVersionID()
    {
        return $this->currencyCodeListVersionID;
    }

    /**
     * Sets a new currencyCodeListVersionID
     *
     * UNDT000001-SC3
     *  SC
     *  Amount Currency. Code List Version. Identifier
     *  The VersionID of the UN/ECE Rec9 code list.
     *  Amount Currency
     *  Code List Version
     *  Identifier
     *  string
     *
     * @param  string $currencyCodeListVersionID
     * @return self
     */
    public function setCurrencyCodeListVersionID($currencyCodeListVersionID)
    {
        $this->currencyCodeListVersionID = $currencyCodeListVersionID;
        return $this;
    }


}

