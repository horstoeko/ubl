<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use horstoeko\ubl\entities\cac\Party;
use horstoeko\ubl\UblDocumentBuilder;
use horstoeko\ubl\entities\cac\Address;
use horstoeko\ubl\entities\cac\Contact;
use horstoeko\ubl\entities\cac\Delivery;
use horstoeko\ubl\entities\main\Invoice;
use horstoeko\ubl\entities\cac\PayeeParty;
use horstoeko\stringmanagement\StringUtils;
use horstoeko\ubl\entities\cac\DeliveryParty;
use horstoeko\ubl\entities\cac\InvoicePeriod;
use horstoeko\ubl\entities\cac\PostalAddress;
use horstoeko\ubl\entities\cac\OrderReference;
use horstoeko\ubl\entities\cac\DeliveryLocation;
use horstoeko\ubl\entities\cac\PartyLegalEntity;
use horstoeko\ubl\entities\cac\ProjectReference;
use horstoeko\ubl\entities\cac\TaxRepresentativeParty;
use horstoeko\ubl\entities\cac\AccountingCustomerParty;
use horstoeko\ubl\entities\cac\AccountingSupplierParty;
use horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use horstoeko\ubl\entities\cac\ContractDocumentReference;
use horstoeko\ubl\entities\cac\DespatchDocumentReference;

/**
 * Class representing helper methods for the ubl invoice builder
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentBuilderHelper
{
    /**
     * Internal reference to the builder
     *
     * @var horstoeko\ubl\UblDocumentBuilder
     */
    protected $ublBuilder = null;

    /**
     * Constructor
     *
     * @param UblDocumentBuilder $ublBuilder
     */
    public function __construct(UblDocumentBuilder $ublBuilder)
    {
        $this->ublBuilder = $ublBuilder;
    }

    /**
     * Returns the internal invoice object of the builder
     *
     * @return Invoice
     */
    protected function getInvoiceObject(): Invoice
    {
        return $this->ublBuilder->getInvoiceObject();
    }

    /**
     * Checks if $variable is a string and it is not empty or null
     * Checks if $variable is a DateTime object and it is not null
     *
     * @param mixed $variable
     * @param string $exceotionMessage
     * @return void
     */
    public function assertNotEmptyAndNotNull($variable, string $exceotionMessage)
    {
        if (gettype($variable) == "string") {
            if (StringUtils::stringIsNullOrEmpty($variable)) {
                throw new \Exception($exceotionMessage);
            }
        }
        if (gettype($variable) == "float") {
            if ($variable === null) {
                throw new \Exception($exceotionMessage);
            }
        }
        if (gettype($variable) == "object") {
            if (is_a($variable, DateTime::class)) {
                if ($variable === null) {
                    throw new \Exception($exceotionMessage);
                }
            }
        }
    }

    /**
     * Make sure that there is an accounting supplier (seller)
     *
     * @return AccountingSupplierParty
     */
    public function ensureAccountingSupplier(): AccountingSupplierParty
    {
        return $this->getInvoiceObject()->getAccountingSupplierParty() ?? $this->getInvoiceObject()->setAccountingSupplierParty((new AccountingSupplierParty()))->getAccountingSupplierParty();
    }

    /**
     * Make sure that there is an accounting supplier with party object
     *
     * @return Party
     */
    public function ensureAccountingSupplierParty(): Party
    {
        $accountingSupplierParty = $this->ensureAccountingSupplier();
        return $accountingSupplierParty->getParty() ?? $accountingSupplierParty->setParty(new Party())->getParty();
    }

    /**
     * Make sure that there is an accounting supplier with party object and the
     * party object has an address object
     *
     * @return Party
     */
    public function ensureAccountingSupplierPartyPostalAddress(): PostalAddress
    {
        $party = $this->ensureAccountingSupplierParty();
        return $party->getPostalAddress() ?? $party->setPostalAddress(new PostalAddress())->getPostalAddress();
    }

    /**
     * Make sure that there is an accounting supplier with party object and the
     * party object has an legalentity object
     *
     * @return PartyLegalEntity
     */
    public function ensureAccountingSupplierPartyLegalEntity(): PartyLegalEntity
    {
        $party = $this->ensureAccountingSupplierParty();
        return isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : $party->setPartyLegalEntity([new PartyLegalEntity()])->getPartyLegalEntity()[0];
    }

    /**
     * Make sure that there is an accounting supplier with party object and the
     * party object has an contact object
     *
     * @return Contact
     */
    public function ensureAccountingSupplierPartyContact(): Contact
    {
        $party = $this->ensureAccountingSupplierParty();
        return $party->getContact() ?? $party->setContact(new Contact())->getContact();
    }

    /**
     * Make sure that there is an accounting customer (buyer)
     *
     * @return AccountingCustomerParty
     */
    public function ensureAccountingCustomer(): AccountingCustomerParty
    {
        return $this->getInvoiceObject()->getAccountingCustomerParty() ?? $this->getInvoiceObject()->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();
    }

    /**
     * Make sure that there is an accounting customer with party object
     *
     * @return Party
     */
    public function ensureAccountingCustomerParty(): Party
    {
        $accountingCustomerParty = $this->ensureAccountingCustomer();
        return $accountingCustomerParty->getParty() ?? $accountingCustomerParty->setParty(new Party())->getParty();
    }

    /**
     * Make sure that there is an accounting customer with party object and
     * the party element contains a postal address object
     *
     * @return PostalAddress
     */
    public function ensureAccountingCustomerPostalAddress(): PostalAddress
    {
        $party = $this->ensureAccountingCustomerParty();
        return $party->getPostalAddress() ?? $party->setPostalAddress(new PostalAddress())->getPostalAddress();
    }

    /**
     * Make sure that there is an accounting customer with party object and
     * the party element contains a legal entity object
     *
     * @return PostalAddress
     */
    public function ensureAccountingCustomerLegalEntity(): PartyLegalEntity
    {
        $party = $this->ensureAccountingCustomerParty();
        return isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : $party->setPartyLegalEntity([new PartyLegalEntity()])->getPartyLegalEntity()[0];
    }

    /**
     * Make sure that there is an accounting customer with party object and
     * the party element contains a contact object
     *
     * @return Contact
     */
    public function ensureAccountingCustomerContact(): Contact
    {
        $party = $this->ensureAccountingCustomerParty();
        return $party->getContact() ?? $party->setContact(new Contact())->getContact();
    }

    /**
     * Make sure that there is a tax representative trade party
     *
     * @return TaxRepresentativeParty
     */
    public function ensureTaxRepresentativeTradeParty(): TaxRepresentativeParty
    {
        return $this->getInvoiceObject()->getTaxRepresentativeParty() ?? $this->getInvoiceObject()->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();
    }

    /**
     * Make sure that there is a tax representative trade party and the
     * party has an address object
     *
     * @return TaxRepresentativeParty
     */
    public function ensureTaxRepresentativeTradePartyPostalAddress(): PostalAddress
    {
        $party = $this->ensureTaxRepresentativeTradeParty();
        return $party->getPostalAddress() ?? $party->setPostalAddress(new PostalAddress())->getPostalAddress();
    }

    /**
     * Make sure that there is a tax representative trade party and the
     * party has an legal entity object
     *
     * @return TaxRepresentativeParty
     */
    public function ensureTaxRepresentativeTradePartyLegalEntity(): PartyLegalEntity
    {
        $party = $this->ensureTaxRepresentativeTradeParty();
        return isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : $party->setPartyLegalEntity([new PartyLegalEntity()])->getPartyLegalEntity()[0];
    }

    /**
     * Make sure that there is a tax representative trade party and the
     * party has an contact object
     *
     * @return TaxRepresentativeParty
     */
    public function ensureTaxRepresentativeTradePartyContact(): Contact
    {
        $party = $this->ensureTaxRepresentativeTradeParty();
        return $party->getContact() ?? $party->setContact(new Contact())->getContact();
    }

    /**
     * Make sure that there is a delivery object in the invoice
     *
     * @return Delivery
     */
    public function ensureDelivery(): Delivery
    {
        return isset($this->getInvoiceObject()->getDelivery()[0]) ? $this->getInvoiceObject()->getDelivery()[0] : $this->getInvoiceObject()->addToDelivery((new Delivery())->setDeliveryParty(new DeliveryParty()))->getDelivery()[0];
    }

    /**
     * Make sure that there is a party object in the delivery object
     *
     * @return DeliveryParty
     */
    public function ensureDeliveryParty(): DeliveryParty
    {
        $delivery = $this->ensureDelivery();
        return $delivery->getDeliveryParty() ?? $delivery->setDeliveryParty(new DeliveryParty())->getDeliveryParty();
    }

    /**
     * Make sure that there is a location object in the delivery object
     *
     * @return DeliveryLocation
     */
    public function ensureDeliveryLocation(): DeliveryLocation
    {
        $delivery = $this->ensureDelivery();
        return $delivery->getDeliveryLocation() ?? $delivery->setDeliveryLocation(new DeliveryLocation())->getDeliveryLocation();
    }

    /**
     * Make sure that the delivery location has an address object
     *
     * @return Address
     */
    public function ensureDeliveryLocationAddress(): Address
    {
        $deliveryLocation = $this->ensureDeliveryLocation();
        return $deliveryLocation->getAddress() ?? $deliveryLocation->setAddress(new Address())->getAddress();
    }

    /**
     * Make sure that there is a legal entity object in the delivery party object
     *
     * @return Contact
     */
    public function ensureDeliveryPartyLegalEntity(): PartyLegalEntity
    {
        $party = $this->ensureDeliveryParty();
        return isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : $party->setPartyLegalEntity([new PartyLegalEntity()])->getPartyLegalEntity()[0];
    }

    /**
     * Make sure that there is a contact object in the delivery party object
     *
     * @return Contact
     */
    public function ensureDeliveryPartyContact(): Contact
    {
        $party = $this->ensureDeliveryParty();
        return $party->getContact() ?? $party->setContact(new Contact())->getContact();
    }

    /**
     * Make sure that there is a payee party object in the invoice
     *
     * @return PayeeParty
     */
    public function ensurePayeeParty(): PayeeParty
    {
        return $this->getInvoiceObject()->getPayeeParty() ?? $this->getInvoiceObject()->setPayeeParty((new PayeeParty()))->getPayeeParty();
    }

    /**
     * Make sure that there is a payee party object in the invoice and
     * the payee party has an address object
     *
     * @return PayeeParty
     */
    public function ensurePayeePartyPostalAddress(): PostalAddress
    {
        $party = $this->ensurePayeeParty();
        return $party->getPostalAddress() ?? $party->setPostalAddress(new PostalAddress())->getPostalAddress();
    }

    /**
     * Make sure that there is a payee party object in the invoice and
     * the payee party has an legal entity object
     *
     * @return PayeeParty
     */
    public function ensurePayeePartyLegalEntity(): PartyLegalEntity
    {
        $party = $this->ensurePayeeParty();
        return isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : $party->setPartyLegalEntity([new PartyLegalEntity()])->getPartyLegalEntity()[0];
    }

    /**
     * Make sure that there is a payee party object in the invoice and
     * the payee party has an contact object
     *
     * @return PayeeParty
     */
    public function ensurePayeePartyPostalContact(): Contact
    {
        $party = $this->ensurePayeeParty();
        return $party->getContact() ?? $party->setContact(new Contact())->getContact();
    }

    /**
     * Make sure thet the invoice has an order reference object
     *
     * @return OrderReference
     */
    public function ensureOrderReference(): OrderReference
    {
        return $this->getInvoiceObject()->getOrderReference() ?? $this->getInvoiceObject()->setOrderReference(new OrderReference())->getOrderReference();
    }

    /**
     * Make sure thet the invoice has an contract reference object
     *
     * @return ContractDocumentReference
     */
    public function ensureContractReference(): ContractDocumentReference
    {
        return isset($this->getInvoiceObject()->getContractDocumentReference()[0]) ?
            $this->getInvoiceObject()->getContractDocumentReference()[0] :
            $this->getInvoiceObject()->addToContractDocumentReference(new ContractDocumentReference())->getContractDocumentReference()[0];
    }

    /**
     * Make sure thet the invoice has an project reference object
     *
     * @return ProjectReference
     */
    public function ensureProjectReference(): ProjectReference
    {
        return isset($this->getInvoiceObject()->getProjectReference()[0]) ?
            $this->getInvoiceObject()->getProjectReference()[0] :
            $this->getInvoiceObject()->addToProjectReference(new ProjectReference())->getProjectReference()[0];
    }

    /**
     * Make sure thet the invoice has an despatch document reference object
     *
     * @return DespatchDocumentReference
     */
    public function ensureDespatchDocumentReference(): DespatchDocumentReference
    {
        return isset($this->getInvoiceObject()->getDespatchDocumentReference()[0]) ?
            $this->getInvoiceObject()->getDespatchDocumentReference()[0] :
            $this->getInvoiceObject()->addToDespatchDocumentReference(new DespatchDocumentReference())->getDespatchDocumentReference()[0];
    }

    /**
     * Make sure thet the invoice has an receipt document reference object
     *
     * @return ReceiptDocumentReference
     */
    public function ensureReceiptDocumentReference(): ReceiptDocumentReference
    {
        return isset($this->getInvoiceObject()->getReceiptDocumentReference()[0]) ?
            $this->getInvoiceObject()->getReceiptDocumentReference()[0] :
            $this->getInvoiceObject()->addToReceiptDocumentReference(new ReceiptDocumentReference())->getReceiptDocumentReference()[0];
    }

    /**
     * Make sure thet the invoice has an invoice period object
     *
     * @return InvoicePeriod
     */
    public function ensureBillingPeriod(): InvoicePeriod
    {
        return isset($this->getInvoiceObject()->getInvoicePeriod()[0]) ?
            $this->getInvoiceObject()->getInvoicePeriod()[0] :
            $this->getInvoiceObject()->addToInvoicePeriod(new InvoicePeriod())->getInvoicePeriod()[0];
    }
}
