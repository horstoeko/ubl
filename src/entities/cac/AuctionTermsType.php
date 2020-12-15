<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AuctionTermsType
 *
 * ABIE
 *  Auction Terms. Details
 *  A class to describe the terms to be fulfilled by tenderers if an auction is to be executed before the awarding of a tender.
 *  Auction Terms
 * XSD Type: AuctionTermsType
 */
class AuctionTermsType
{

    /**
     * BBIE
     *  Auction Terms. Auction_ Constraint. Indicator
     *  Indicates whether an electronic auction will be used before the awarding of a contract (true) or not (false).
     *  0..1
     *  Auction Terms
     *  Auction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $auctionConstraintIndicator
     */
    private $auctionConstraintIndicator = null;

    /**
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\JustificationDescription[] $justificationDescription
     */
    private $justificationDescription = [
        
    ];

    /**
     * BBIE
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
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
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ProcessDescription[] $processDescription
     */
    private $processDescription = [
        
    ];

    /**
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ConditionsDescription[] $conditionsDescription
     */
    private $conditionsDescription = [
        
    ];

    /**
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ElectronicDeviceDescription[] $electronicDeviceDescription
     */
    private $electronicDeviceDescription = [
        
    ];

    /**
     * BBIE
     *  Auction Terms. Auction_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of the electronic device used for the auction.
     *  0..1
     *  Auction Terms
     *  Auction
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AuctionURI $auctionURI
     */
    private $auctionURI = null;

    /**
     * Gets as auctionConstraintIndicator
     *
     * BBIE
     *  Auction Terms. Auction_ Constraint. Indicator
     *  Indicates whether an electronic auction will be used before the awarding of a contract (true) or not (false).
     *  0..1
     *  Auction Terms
     *  Auction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getAuctionConstraintIndicator()
    {
        return $this->auctionConstraintIndicator;
    }

    /**
     * Sets a new auctionConstraintIndicator
     *
     * BBIE
     *  Auction Terms. Auction_ Constraint. Indicator
     *  Indicates whether an electronic auction will be used before the awarding of a contract (true) or not (false).
     *  0..1
     *  Auction Terms
     *  Auction
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $auctionConstraintIndicator
     * @return self
     */
    public function setAuctionConstraintIndicator($auctionConstraintIndicator)
    {
        $this->auctionConstraintIndicator = $auctionConstraintIndicator;
        return $this;
    }

    /**
     * Adds as justificationDescription
     *
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\JustificationDescription $justificationDescription
     */
    public function addToJustificationDescription(\horstoeko\ubl\entities\cbc\JustificationDescription $justificationDescription)
    {
        $this->justificationDescription[] = $justificationDescription;
        return $this;
    }

    /**
     * isset justificationDescription
     *
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJustificationDescription($index)
    {
        return isset($this->justificationDescription[$index]);
    }

    /**
     * unset justificationDescription
     *
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJustificationDescription($index)
    {
        unset($this->justificationDescription[$index]);
    }

    /**
     * Gets as justificationDescription
     *
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\JustificationDescription[]
     */
    public function getJustificationDescription()
    {
        return $this->justificationDescription;
    }

    /**
     * Sets a new justificationDescription
     *
     * BBIE
     *  Auction Terms. Justification_ Description. Text
     *  Text describing a justification for the use of an auction in awarding the tender.
     *  0..n
     *  Auction Terms
     *  Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\JustificationDescription[] $justificationDescription
     * @return self
     */
    public function setJustificationDescription(array $justificationDescription)
    {
        $this->justificationDescription = $justificationDescription;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
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
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
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
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
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
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
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
     *  Auction Terms. Description. Text
     *  Text for tenderers describing terms governing the auction.
     *  0..n
     *  Auction Terms
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as processDescription
     *
     * BBIE
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\ProcessDescription $processDescription
     */
    public function addToProcessDescription(\horstoeko\ubl\entities\cbc\ProcessDescription $processDescription)
    {
        $this->processDescription[] = $processDescription;
        return $this;
    }

    /**
     * isset processDescription
     *
     * BBIE
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessDescription($index)
    {
        return isset($this->processDescription[$index]);
    }

    /**
     * unset processDescription
     *
     * BBIE
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessDescription($index)
    {
        unset($this->processDescription[$index]);
    }

    /**
     * Gets as processDescription
     *
     * BBIE
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ProcessDescription[]
     */
    public function getProcessDescription()
    {
        return $this->processDescription;
    }

    /**
     * Sets a new processDescription
     *
     * BBIE
     *  Auction Terms. Process_ Description. Text
     *  Text describing the auction process.
     *  0..n
     *  Auction Terms
     *  Process
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ProcessDescription[] $processDescription
     * @return self
     */
    public function setProcessDescription(array $processDescription)
    {
        $this->processDescription = $processDescription;
        return $this;
    }

    /**
     * Adds as conditionsDescription
     *
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\ConditionsDescription $conditionsDescription
     */
    public function addToConditionsDescription(\horstoeko\ubl\entities\cbc\ConditionsDescription $conditionsDescription)
    {
        $this->conditionsDescription[] = $conditionsDescription;
        return $this;
    }

    /**
     * isset conditionsDescription
     *
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditionsDescription($index)
    {
        return isset($this->conditionsDescription[$index]);
    }

    /**
     * unset conditionsDescription
     *
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditionsDescription($index)
    {
        unset($this->conditionsDescription[$index]);
    }

    /**
     * Gets as conditionsDescription
     *
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ConditionsDescription[]
     */
    public function getConditionsDescription()
    {
        return $this->conditionsDescription;
    }

    /**
     * Sets a new conditionsDescription
     *
     * BBIE
     *  Auction Terms. Conditions_ Description. Text
     *  Text describing the conditions under which the tenderers will be able to bid as part of the auction.
     *  0..n
     *  Auction Terms
     *  Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ConditionsDescription[] $conditionsDescription
     * @return self
     */
    public function setConditionsDescription(array $conditionsDescription)
    {
        $this->conditionsDescription = $conditionsDescription;
        return $this;
    }

    /**
     * Adds as electronicDeviceDescription
     *
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\ElectronicDeviceDescription $electronicDeviceDescription
     */
    public function addToElectronicDeviceDescription(\horstoeko\ubl\entities\cbc\ElectronicDeviceDescription $electronicDeviceDescription)
    {
        $this->electronicDeviceDescription[] = $electronicDeviceDescription;
        return $this;
    }

    /**
     * isset electronicDeviceDescription
     *
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetElectronicDeviceDescription($index)
    {
        return isset($this->electronicDeviceDescription[$index]);
    }

    /**
     * unset electronicDeviceDescription
     *
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetElectronicDeviceDescription($index)
    {
        unset($this->electronicDeviceDescription[$index]);
    }

    /**
     * Gets as electronicDeviceDescription
     *
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ElectronicDeviceDescription[]
     */
    public function getElectronicDeviceDescription()
    {
        return $this->electronicDeviceDescription;
    }

    /**
     * Sets a new electronicDeviceDescription
     *
     * BBIE
     *  Auction Terms. Electronic Device_ Description. Text
     *  Text describing an electronic device used for the auction, including associated connectivity specifications.
     *  0..n
     *  Auction Terms
     *  Electronic Device
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ElectronicDeviceDescription[] $electronicDeviceDescription
     * @return self
     */
    public function setElectronicDeviceDescription(array $electronicDeviceDescription)
    {
        $this->electronicDeviceDescription = $electronicDeviceDescription;
        return $this;
    }

    /**
     * Gets as auctionURI
     *
     * BBIE
     *  Auction Terms. Auction_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of the electronic device used for the auction.
     *  0..1
     *  Auction Terms
     *  Auction
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AuctionURI
     */
    public function getAuctionURI()
    {
        return $this->auctionURI;
    }

    /**
     * Sets a new auctionURI
     *
     * BBIE
     *  Auction Terms. Auction_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of the electronic device used for the auction.
     *  0..1
     *  Auction Terms
     *  Auction
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AuctionURI $auctionURI
     * @return self
     */
    public function setAuctionURI(\horstoeko\ubl\entities\cbc\AuctionURI $auctionURI)
    {
        $this->auctionURI = $auctionURI;
        return $this;
    }


}

