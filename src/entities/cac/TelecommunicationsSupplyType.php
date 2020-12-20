<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TelecommunicationsSupplyType
 *
 * ABIE
 *  Telecommunications Supply. Details
 *  A class describing the supply of a telecommunication service, e.g., providing telephone calls.
 *  Telecommunications Supply
 * XSD Type: TelecommunicationsSupplyType
 */
class TelecommunicationsSupplyType
{

    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyType $telecommunicationsSupplyType
     */
    private $telecommunicationsSupplyType = null;

    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     */
    private $telecommunicationsSupplyTypeCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @var \horstoeko\ubl\entities\cbc\PrivacyCode $privacyCode
     */
    private $privacyCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @var \horstoeko\ubl\entities\cac\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     */
    private $telecommunicationsSupplyLine = [
        
    ];

    /**
     * Gets as telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyType
     */
    public function getTelecommunicationsSupplyType()
    {
        return $this->telecommunicationsSupplyType;
    }

    /**
     * Sets a new telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyType $telecommunicationsSupplyType
     * @return self
     */
    public function setTelecommunicationsSupplyType(\horstoeko\ubl\entities\cbc\TelecommunicationsSupplyType $telecommunicationsSupplyType)
    {
        $this->telecommunicationsSupplyType = $telecommunicationsSupplyType;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyTypeCode
     */
    public function getTelecommunicationsSupplyTypeCode()
    {
        return $this->telecommunicationsSupplyTypeCode;
    }

    /**
     * Sets a new telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     * @return self
     */
    public function setTelecommunicationsSupplyTypeCode(\horstoeko\ubl\entities\cbc\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode)
    {
        $this->telecommunicationsSupplyTypeCode = $telecommunicationsSupplyTypeCode;
        return $this;
    }

    /**
     * Gets as privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @return \horstoeko\ubl\entities\cbc\PrivacyCode
     */
    public function getPrivacyCode()
    {
        return $this->privacyCode;
    }

    /**
     * Sets a new privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @param  \horstoeko\ubl\entities\cbc\PrivacyCode $privacyCode
     * @return self
     */
    public function setPrivacyCode(\horstoeko\ubl\entities\cbc\PrivacyCode $privacyCode)
    {
        $this->privacyCode = $privacyCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
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
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
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
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
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
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
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
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
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
     * Gets as totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(\horstoeko\ubl\entities\cbc\TotalAmount $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\TelecommunicationsSupplyLine $telecommunicationsSupplyLine
     */
    public function addToTelecommunicationsSupplyLine(\horstoeko\ubl\entities\cac\TelecommunicationsSupplyLine $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine[] = $telecommunicationsSupplyLine;
        return $this;
    }

    /**
     * isset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTelecommunicationsSupplyLine($index)
    {
        return isset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * unset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTelecommunicationsSupplyLine($index)
    {
        unset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * Gets as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return \horstoeko\ubl\entities\cac\TelecommunicationsSupplyLine[]
     */
    public function getTelecommunicationsSupplyLine()
    {
        return $this->telecommunicationsSupplyLine;
    }

    /**
     * Sets a new telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param  \horstoeko\ubl\entities\cac\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     * @return self
     */
    public function setTelecommunicationsSupplyLine(array $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine = $telecommunicationsSupplyLine;
        return $this;
    }


}

