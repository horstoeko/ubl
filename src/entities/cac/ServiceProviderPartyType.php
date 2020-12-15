<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ServiceProviderPartyType
 *
 * ABIE
 *  Service Provider Party. Details
 *  A class to describe a party contracting to provide services, such as transportation, finance, etc.
 *  Service Provider Party
 * XSD Type: ServiceProviderPartyType
 */
class ServiceProviderPartyType
{

    /**
     * BBIE
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ServiceTypeCode $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ServiceType[] $serviceType
     */
    private $serviceType = [
        
    ];

    /**
     * ASBIE
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\SellerContact $sellerContact
     */
    private $sellerContact = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
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
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
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
     * Gets as serviceTypeCode
     *
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ServiceTypeCode
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ServiceTypeCode $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode(\horstoeko\ubl\entities\cbc\ServiceTypeCode $serviceTypeCode)
    {
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\ServiceType $serviceType
     */
    public function addToServiceType(\horstoeko\ubl\entities\cbc\ServiceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ServiceType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\Party $party
     * @return self
     */
    public function setParty(\horstoeko\ubl\entities\cac\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as sellerContact
     *
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\SellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets a new sellerContact
     *
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\SellerContact $sellerContact
     * @return self
     */
    public function setSellerContact(\horstoeko\ubl\entities\cac\SellerContact $sellerContact)
    {
        $this->sellerContact = $sellerContact;
        return $this;
    }


}

