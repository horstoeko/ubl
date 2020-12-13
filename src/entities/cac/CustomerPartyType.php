<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CustomerPartyType
 *
 * ABIE
 *  Customer Party. Details
 *  Information about the Customer Party.
 *  Customer Party
 * XSD Type: CustomerPartyType
 */
class CustomerPartyType
{

    /**
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
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
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SupplierAssignedAccountID $supplierAssignedAccountID
     */
    private $supplierAssignedAccountID = null;

    /**
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     * ASBIE
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryContact $deliveryContact
     */
    private $deliveryContact = null;

    /**
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @var \horstoeko\ubl\entities\cac\BuyerContact $buyerContact
     */
    private $buyerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
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
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Customer itself.
     *  0..1
     *  Customer Party
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
     * Gets as supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SupplierAssignedAccountID
     */
    public function getSupplierAssignedAccountID()
    {
        return $this->supplierAssignedAccountID;
    }

    /**
     * Sets a new supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by the Supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SupplierAssignedAccountID $supplierAssignedAccountID
     * @return self
     */
    public function setSupplierAssignedAccountID(\horstoeko\ubl\entities\cbc\SupplierAssignedAccountID $supplierAssignedAccountID)
    {
        $this->supplierAssignedAccountID = $supplierAssignedAccountID;
        return $this;
    }

    /**
     * Adds as additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the Customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
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
     * Gets as party
     *
     * ASBIE
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
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
     *  Customer Party. Party
     *  An association to Party.
     *  0..1
     *  Customer Party
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
     * Gets as deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryContact
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Sets a new deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  An association to Delivery Contact.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\DeliveryContact $deliveryContact
     * @return self
     */
    public function setDeliveryContact(\horstoeko\ubl\entities\cac\DeliveryContact $deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
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
     *  Customer Party. Accounting_ Contact. Contact
     *  An association to Accounting Contact (Customer).
     *  0..1
     *  Customer Party
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
     * Gets as buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @return \horstoeko\ubl\entities\cac\BuyerContact
     */
    public function getBuyerContact()
    {
        return $this->buyerContact;
    }

    /**
     * Sets a new buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  An association to Buyer Contact.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *
     * @param \horstoeko\ubl\entities\cac\BuyerContact $buyerContact
     * @return self
     */
    public function setBuyerContact(\horstoeko\ubl\entities\cac\BuyerContact $buyerContact)
    {
        $this->buyerContact = $buyerContact;
        return $this;
    }


}

