<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing SupplierPartyType
 *
 * ABIE
 *  Supplier Party. Details
 *  Information about the Supplier Party.
 *  Supplier Party
 * XSD Type: SupplierPartyType
 */
class SupplierPartyType
{

    /**
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CustomerAssignedAccountID $customerAssignedAccountID
     */
    private $customerAssignedAccountID = null;

    /**
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AdditionalAccountID[] $additionalAccountID
     */
    private $additionalAccountID = [
        
    ];

    /**
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @var \horstoeko\ubl\entities\cbc\DataSendingCapability $dataSendingCapability
     */
    private $dataSendingCapability = null;

    /**
     * ASBIE
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\DespatchContact $despatchContact
     */
    private $despatchContact = null;

    /**
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\SellerContact $sellerContact
     */
    private $sellerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CustomerAssignedAccountID
     */
    public function getCustomerAssignedAccountID()
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * Sets a new customerAssignedAccountID
     *
     * BBIE
     *  Supplier Party. Customer Assigned_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..1
     *  Supplier Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CustomerAssignedAccountID $customerAssignedAccountID
     * @return self
     */
    public function setCustomerAssignedAccountID(\horstoeko\ubl\entities\cbc\CustomerAssignedAccountID $customerAssignedAccountID)
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;
        return $this;
    }

    /**
     * Adds as additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\AdditionalAccountID $additionalAccountID
     */
    public function addToAdditionalAccountID(\horstoeko\ubl\entities\cbc\AdditionalAccountID $additionalAccountID)
    {
        $this->additionalAccountID[] = $additionalAccountID;
        return $this;
    }

    /**
     * isset additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalAccountID($index)
    {
        return isset($this->additionalAccountID[$index]);
    }

    /**
     * unset additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalAccountID($index)
    {
        unset($this->additionalAccountID[$index]);
    }

    /**
     * Gets as additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AdditionalAccountID[]
     */
    public function getAdditionalAccountID()
    {
        return $this->additionalAccountID;
    }

    /**
     * Sets a new additionalAccountID
     *
     * BBIE
     *  Supplier Party. Additional_ Account Identifier. Identifier
     *  The customer's internal identifier for the supplier.
     *  0..n
     *  Supplier Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AdditionalAccountID[] $additionalAccountID
     * @return self
     */
    public function setAdditionalAccountID(array $additionalAccountID)
    {
        $this->additionalAccountID = $additionalAccountID;
        return $this;
    }

    /**
     * Gets as dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @return \horstoeko\ubl\entities\cbc\DataSendingCapability
     */
    public function getDataSendingCapability()
    {
        return $this->dataSendingCapability;
    }

    /**
     * Sets a new dataSendingCapability
     *
     * BBIE
     *  Supplier Party. Data Sending Capability. Text
     *  Capability to send invoice data via the purchase card provider (VISA/MasterCard/American Express).
     *  0..1
     *  Supplier Party
     *  Data Sending Capability
     *  Text
     *  Text. Type
     *  The customer's internal identifier for the supplier.
     *
     * @param \horstoeko\ubl\entities\cbc\DataSendingCapability $dataSendingCapability
     * @return self
     */
    public function setDataSendingCapability(\horstoeko\ubl\entities\cbc\DataSendingCapability $dataSendingCapability)
    {
        $this->dataSendingCapability = $dataSendingCapability;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
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
     *  Supplier Party. Party
     *  An association to Party.
     *  0..1
     *  Supplier Party
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
     * Gets as despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\DespatchContact
     */
    public function getDespatchContact()
    {
        return $this->despatchContact;
    }

    /**
     * Sets a new despatchContact
     *
     * ASBIE
     *  Supplier Party. Despatch_ Contact. Contact
     *  An association to Despatch Contact.
     *  0..1
     *  Supplier Party
     *  Despatch
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\DespatchContact $despatchContact
     * @return self
     */
    public function setDespatchContact(\horstoeko\ubl\entities\cac\DespatchContact $despatchContact)
    {
        $this->despatchContact = $despatchContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\AccountingContact
     */
    public function getAccountingContact()
    {
        return $this->accountingContact;
    }

    /**
     * Sets a new accountingContact
     *
     * ASBIE
     *  Supplier Party. Accounting_ Contact. Contact
     *  An association to Supplier Accounting Contact.
     *  0..1
     *  Supplier Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\AccountingContact $accountingContact
     * @return self
     */
    public function setAccountingContact(\horstoeko\ubl\entities\cac\AccountingContact $accountingContact)
    {
        $this->accountingContact = $accountingContact;
        return $this;
    }

    /**
     * Gets as sellerContact
     *
     * ASBIE
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
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
     *  Supplier Party. Seller_ Contact. Contact
     *  An association to Seller.
     *  0..1
     *  Supplier Party
     *  Seller
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

