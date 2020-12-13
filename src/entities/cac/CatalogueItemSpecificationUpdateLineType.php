<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CatalogueItemSpecificationUpdateLineType
 *
 * ABIE
 *  Catalogue Item Specification Update Line. Details
 *  Details of Catalogue Line Item Specification.
 *  Catalogue Item Specification Update Line
 * XSD Type: CatalogueItemSpecificationUpdateLineType
 */
class CatalogueItemSpecificationUpdateLineType
{

    /**
     * BBIE
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
     *  Contractor
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\ContractorCustomerParty $contractorCustomerParty
     */
    private $contractorCustomerParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Identifier
     *  A unique instance identifier for the line in this Catalogue document.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Contractor_ Customer Party. Customer Party
     *  The Customer Party responsible for the contract to which the Catalogue relates.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Seller_ Supplier Party. Supplier Party
     *  An association to the Seller of the item.
     *  0..1
     *  Catalogue Item Specification Update Line
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
     * Gets as item
     *
     * ASBIE
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
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
     *  Catalogue Item Specification Update Line. Item
     *  An association to Item itself.
     *  1
     *  Catalogue Item Specification Update Line
     *  Item
     *  Item
     *
     * @param \horstoeko\ubl\entities\cac\Item $item
     * @return self
     */
    public function setItem(\horstoeko\ubl\entities\cac\Item $item)
    {
        $this->item = $item;
        return $this;
    }


}

