<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CataloguePricingUpdateLineType
 *
 * ABIE
 *  Catalogue Pricing Update Line. Details
 *  Details of Catalogue Line Pricing.
 *  Catalogue Pricing Update Line
 * XSD Type: CataloguePricingUpdateLineType
 */
class CataloguePricingUpdateLineType
{

    /**
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \horstoeko\ubl\entities\cac\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     *  Catalogue Pricing Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Pricing Update Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  "1"
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
     * Gets as contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\ContractorCustomerParty
     */
    public function getContractorCustomerParty()
    {
        return $this->contractorCustomerParty;
    }

    /**
     * Sets a new contractorCustomerParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\ContractorCustomerParty $contractorCustomerParty
     * @return self
     */
    public function setContractorCustomerParty(\horstoeko\ubl\entities\cac\ContractorCustomerParty $contractorCustomerParty)
    {
        $this->contractorCustomerParty = $contractorCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @return \horstoeko\ubl\entities\cac\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the Item.
     *  0..1
     *  Catalogue Pricing Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @param \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\horstoeko\ubl\entities\cac\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \horstoeko\ubl\entities\cac\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Pricing Update Line. Required_ Item Location Quantity. Item Location Quantity
     *  An association to the description of properties related to locations and quantities of the item.
     *  0..n
     *  Catalogue Pricing Update Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \horstoeko\ubl\entities\cac\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }


}

