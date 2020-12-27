<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use DateTime;
use horstoeko\ubl\entities\cbc\ID;
use horstoeko\ubl\entities\cbc\URI;
use horstoeko\ubl\entities\cbc\Line;
use horstoeko\ubl\entities\cbc\Name;
use horstoeko\ubl\entities\cbc\Note;
use horstoeko\ubl\entities\cac\Party;
use horstoeko\ubl\entities\cbc\Amount;
use horstoeko\ubl\entities\cac\Address;
use horstoeko\ubl\entities\cac\Contact;
use horstoeko\ubl\entities\cac\Country;
use horstoeko\ubl\entities\cbc\Percent;
use horstoeko\ubl\entities\cac\Delivery;
use horstoeko\ubl\entities\cac\TaxTotal;
use horstoeko\ubl\entities\cbc\CityName;
use horstoeko\stringmanagement\FileUtils;
use horstoeko\ubl\entities\cac\PartyName;
use horstoeko\ubl\entities\cac\TaxScheme;
use horstoeko\ubl\entities\cbc\CompanyID;
use horstoeko\ubl\entities\cbc\NetworkID;
use horstoeko\ubl\entities\cbc\PaymentID;
use horstoeko\ubl\entities\cbc\TaxAmount;
use horstoeko\ubl\entities\cbc\Telephone;
use horstoeko\ubl\entities\cac\Attachment;
use horstoeko\ubl\entities\cac\PayeeParty;
use horstoeko\ubl\entities\cbc\BaseAmount;
use horstoeko\ubl\entities\cbc\EndpointID;
use horstoeko\ubl\entities\cbc\HolderName;
use horstoeko\ubl\entities\cbc\PostalZone;
use horstoeko\ubl\entities\cbc\StreetName;
use MimeTyper\Repository\MimeDbRepository;
use horstoeko\stringmanagement\StringUtils;
use horstoeko\ubl\entities\cac\AddressLine;
use horstoeko\ubl\entities\cac\CardAccount;
use horstoeko\ubl\entities\cac\InvoiceLine;
use horstoeko\ubl\entities\cac\TaxCategory;
use horstoeko\ubl\entities\cac\TaxSubtotal;
use horstoeko\ubl\entities\cac\PaymentMeans;
use horstoeko\ubl\entities\cac\PaymentTerms;
use horstoeko\ubl\entities\cbc\SalesOrderID;
use horstoeko\ubl\entities\cac\DeliveryParty;
use horstoeko\ubl\entities\cac\InvoicePeriod;
use horstoeko\ubl\entities\cac\PostalAddress;
use horstoeko\ubl\entities\cbc\PayableAmount;
use horstoeko\ubl\entities\cbc\PrepaidAmount;
use horstoeko\ubl\entities\cbc\TaxableAmount;
use horstoeko\ubl\entities\cac\OrderReference;
use horstoeko\ubl\entities\cac\PartyTaxScheme;
use horstoeko\ubl\entities\cac\PaymentMandate;
use horstoeko\ubl\entities\cbc\AccountingCost;
use horstoeko\ubl\entities\cbc\BuyerReference;
use horstoeko\ubl\entities\cbc\ElectronicMail;
use horstoeko\ubl\entities\cac\AllowanceCharge;
use horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use horstoeko\ubl\entities\cbc\TaxCurrencyCode;
use horstoeko\ubl\entities\cac\BillingReference;
use horstoeko\ubl\entities\cac\DeliveryLocation;
use horstoeko\ubl\entities\cac\PartyLegalEntity;
use horstoeko\ubl\entities\cac\ProjectReference;
use horstoeko\ubl\entities\cbc\CountrySubentity;
use horstoeko\ubl\entities\cbc\DocumentTypeCode;
use horstoeko\ubl\entities\cbc\InvoicedQuantity;
use horstoeko\ubl\entities\cbc\PaymentMeansCode;
use horstoeko\ubl\entities\cbc\RegistrationName;
use horstoeko\ubl\entities\cac\ExternalReference;
use horstoeko\ubl\entities\cbc\ChargeTotalAmount;
use horstoeko\ubl\entities\cac\LegalMonetaryTotal;
use horstoeko\ubl\entities\cac\OrderLineReference;
use horstoeko\ubl\entities\cbc\IdentificationCode;
use horstoeko\ubl\entities\cbc\TaxExclusiveAmount;
use horstoeko\ubl\entities\cbc\TaxInclusiveAmount;
use horstoeko\ubl\entities\cac\PartyIdentification;
use horstoeko\ubl\entities\cbc\DocumentDescription;
use horstoeko\ubl\entities\cbc\LineExtensionAmount;
use horstoeko\ubl\entities\cbc\AdditionalStreetName;
use horstoeko\ubl\entities\cbc\AllowanceTotalAmount;
use horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use horstoeko\ubl\entities\cac\PayerFinancialAccount;
use horstoeko\ubl\entities\cbc\AllowanceChargeReason;
use horstoeko\ubl\entities\cac\TaxRepresentativeParty;
use horstoeko\ubl\entities\cbc\PrimaryAccountNumberID;
use horstoeko\ubl\entities\cac\AccountingCustomerParty;
use horstoeko\ubl\entities\cac\AccountingSupplierParty;
use horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use horstoeko\ubl\entities\cac\ContractDocumentReference;
use horstoeko\ubl\entities\cac\DespatchDocumentReference;
use horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode;
use horstoeko\ubl\entities\cac\FinancialInstitutionBranch;
use horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use horstoeko\ubl\entities\cac\OriginatorDocumentReference;
use horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;
use horstoeko\ubl\entities\cbc\LineID;

/**
 * Class representing the ubl invoice builder for XRechnung
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentBuilderXRechnung extends UblDocumentBuilderBase
{
    /**
     * This method can be overwritten in derived classes, e.g. for setting
     * up the customization and the profile of the ubl document
     *
     * @return             UblDocumentBuilderBase
     * @codeCoverageIgnore
     */
    protected function onInitInvoiceObject(): UblDocumentBuilderBase
    {
        $this->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
        $this->setDocumentProfile("urn:fdc:peppol.eu:2017:poacc:billing:01:1.0");
        return $this;
    }

    /**
     * Sets the invoice type code
     *
     * @param  string $documentTypeCode
     * A code specifying the functional type of the Invoice. The default value is __380__.
     * @return UblDocumentBuilderBase
     */
    public function setDocumentType(string $documentTypeCode): UblDocumentBuilderBase
    {
        $this->invoiceObject->setInvoiceTypeCode(new InvoiceTypeCode($documentTypeCode));
        return $this;
    }

    /**
     * Sets the invoice number
     *
     * @param  string $documentNo
     * A unique identification of the Invoice. The sequential number required in Article 226(2)
     * of the directive 2006/112/EC [2], to uniquely identify the Invoice within the business
     * context, time-frame, operating systems and records of the Seller. No identification scheme
     * is to be used.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentNumber(string $documentNo): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setID(new ID($documentNo));
        return $this;
    }

    /**
     * Sets the invoice issue date
     *
     * @param  DateTime $documentDate
     * The date when the Invoice was issued
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDate(DateTime $documentDate): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setIssueDate($documentDate);
        return $this;
    }

    /**
     * Sets the payment due date
     *
     * @param  DateTime $documentDueDate
     * The date when the payment is due. In case the Amount due for payment (BT-115)
     * is positive, either the Payment due date (BT-9) or the Payment terms (BT-20) shall be present
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDueDate(DateTime $documentDueDate): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setDueDate($documentDueDate);
        return $this;
    }

    /**
     * Sets the Value added tax point date
     *
     * @param  DateTime $taxPointDate
     * The date when the VAT becomes accountable for the Seller and for the Buyer in so far as that date
     * can be determined and differs from the date of issue of the invoice, according to the VAT directive.
     * This element is required if the Value added tax point date is different from the Invoice issue date.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxPointDate(DateTime $taxPointDate): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setTaxPointDate($taxPointDate);
        return $this;
    }

    /**
     * Sets the invoice note
     *
     * @param  string $documentNote
     * A textual note that gives unstructured information that is relevant to the Invoice as a whole.
     * Such as the reason for any correction or assignment note in case the invoice has been factored.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentNote(string $documentNote): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setNote([new Note($documentNote)]);
        return $this;
    }

    /**
     * Sets the document currencies
     *
     * @param  string      $documentCurrency
     * The currency in which all Invoice amounts are given, except for the Total VAT amount in accounting
     * currency. Only one currency shall be used in the Invoice, except for the VAT accounting currency
     * code (BT-6) and the invoice total VAT amount in accounting currency (BT-111)
     * @param  string|null $taxCurrency
     * The currency used for VAT accounting and reporting purposes as accepted or required in the country
     * of the Seller. Shall be used in combination with the Invoice total VAT amount in accounting currency
     * (BT-111), when the VAT accounting currency code differs from the Invoice currency code.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentCurrencies(string $documentCurrency, ?string $taxCurrency = null): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setDocumentCurrencyCode(new DocumentCurrencyCode($documentCurrency));
        $this->invoiceObject->setTaxCurrencyCode(!StringUtils::stringIsNullOrEmpty($taxCurrency) ? new TaxCurrencyCode($taxCurrency) : new TaxCurrencyCode($documentCurrency));

        return $this;
    }

    /**
     * Sets the buyers accounting reference
     *
     * @param  string $accountingCost
     * A textual value that specifies where to book the relevant data into the Buyer's financial accounts.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentAccountingCost(string $accountingCost): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setAccountingCost(new AccountingCost($accountingCost));
        return $this;
    }

    /**
     * Sets the buyer reference
     *
     * @param  string $buyerReference
     * An identifier assigned by the Buyer used for internal routing purposes. An invoice must have buyer
     * reference or purchase order reference (BT-13)
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerReference(string $buyerReference): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setBuyerReference(new BuyerReference($buyerReference));
        return $this;
    }

    /**
     * Sets the delivery or invoice period
     *
     * @param  DateTime|null $startDate
     * The date when the Invoice period starts
     * @param  DateTime|null $endDate
     * The date when the Invoice period ends
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentInvoicePeriod(?DateTime $startDate = null, ?DateTime $endDate = null): UblDocumentBuilderXRechnung
    {
        if (is_null($startDate) && is_null($endDate)) {
            return $this;
        }

        $invoicePeriod = $this->invoiceObject->setInvoicePeriod([new InvoicePeriod])->getInvoicePeriod()[0];

        if (!is_null($startDate)) {
            $invoicePeriod->setStartDate($startDate);
        }
        if (!is_null($endDate)) {
            $invoicePeriod->setEndDate($endDate);
        }

        return $this;
    }

    /**
     * Sets the buyer order reference number
     *
     * @param  string $buyerOrderNo
     * An identifier of a referenced purchase order, issued by the Buyer.
     * An invoice must have buyer reference (BT-10) or purchase order reference.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerOrderNo(string $buyerOrderNo): UblDocumentBuilderXRechnung
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();
        $orderReference->setID(new ID($buyerOrderNo));

        return $this;
    }

    /**
     * Sets the seller order reference number
     *
     * @param  string $sellerOrderNo
     * An identifier of a referenced sales order, issued by the Seller.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerOrderNo(string $sellerOrderNo): UblDocumentBuilderXRechnung
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();
        $orderReference->setSalesOrderID(new SalesOrderID($sellerOrderNo));

        return $this;
    }

    /**
     * Sets an invoice document reference number and optionally ab issue date for this
     *
     * @param  string        $referenceNo
     * The identification of an Invoice that was previously sent by the Seller.
     * @param  DateTime|null $issueDate
     * The date when the Preceding Invoice was issued.
     * Shall be provided in case the Preceding Invoice identifier is not unique
     * @return UblDocumentBuilderXRechnung
     */
    public function addDocumentBillingReference(string $referenceNo, ?DateTime $issueDate = null): UblDocumentBuilderXRechnung
    {
        $invoiceReference = new InvoiceDocumentReference();
        $invoiceReference->setID(new ID($referenceNo));

        if (!is_null($issueDate)) {
            $invoiceReference->setIssueDate($issueDate);
        }

        $billingReference = new BillingReference();
        $billingReference->setInvoiceDocumentReference($invoiceReference);

        $this->invoiceObject->addToBillingReference($billingReference);

        return $this;
    }

    /**
     * Sets a despatch advice reference
     *
     * @param  string $referenceNo
     * An identifier of a referenced despatch advice.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDespatchReference(string $referenceNo): UblDocumentBuilderXRechnung
    {
        $despatchReference = new DespatchDocumentReference();
        $despatchReference->setID(new ID($referenceNo));

        $this->invoiceObject->setDespatchDocumentReference([$despatchReference]);

        return $this;
    }

    /**
     * Sets a receiving advice reference
     *
     * @param  string $referenceNo
     * An identifier of a referenced receiving advice.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentReceiptReference(string $referenceNo): UblDocumentBuilderXRechnung
    {
        $receiptReference = new ReceiptDocumentReference();
        $receiptReference->setID(new ID($referenceNo));

        $this->invoiceObject->setReceiptDocumentReference([$receiptReference]);

        return $this;
    }

    /**
     * Sets a tender or lot reference
     *
     * @param  string $referenceNo
     * The identification of the call for tender or lot the invoice relates to.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentOriginatorReference(string $referenceNo): UblDocumentBuilderXRechnung
    {
        $originatorReference = new OriginatorDocumentReference();
        $originatorReference->setID(new ID($referenceNo));

        $this->invoiceObject->setOriginatorDocumentReference([$originatorReference]);

        return $this;
    }

    /**
     * Sets the contract reference
     *
     * @param  string $referenceNo
     * The identification of a contract.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentContractReference(string $referenceNo): UblDocumentBuilderXRechnung
    {
        $contractReference = new ContractDocumentReference();
        $contractReference->setID(new ID($referenceNo));

        $this->invoiceObject->setContractDocumentReference([$contractReference]);

        return $this;
    }

    /**
     * Removes all additional supporting documents
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function clearDocumentAdditionalReference(): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setAdditionalDocumentReference([]);

        return $this;
    }

    /**
     * Add an additional supporting document
     *
     * @param  string $referenceNo
     * An identifier for an object on which the invoice is based, given by the Seller, or the
     * identifier for the supporting document.
     * @param  string $referenceScheme
     * The identification scheme identifier of the Invoiced object identifier.
     * @param  string $documentTypeCode
     * Code "130" MUST be used to indicate an invoice object reference. Not used for other additional documents
     * @param  string $documentDescription
     * A description of the supporting document, such as: timesheet, usage report etc.
     * @return UblDocumentBuilderXRechnung
     */
    public function addDocumentAdditionalReference(string $referenceNo, string $referenceScheme = "", string $documentTypeCode = "", string $documentDescription = ""): UblDocumentBuilderXRechnung
    {
        $additionalReference = new AdditionalDocumentReference();
        $additionalReference->setID(new ID($referenceNo));

        if (!StringUtils::stringIsNullOrEmpty($referenceScheme)) {
            $additionalReference->getID()->setSchemeID($referenceScheme);
        }
        if (!StringUtils::stringIsNullOrEmpty($documentTypeCode)) {
            $additionalReference->setDocumentTypeCode(new DocumentTypeCode($documentTypeCode));
        }
        if (!StringUtils::stringIsNullOrEmpty($documentDescription)) {
            $additionalReference->setDocumentDescription([new DocumentDescription($documentDescription)]);
        }

        $this->invoiceObject->addToAdditionalDocumentReference($additionalReference);

        return $this;
    }

    /**
     * Adds an attachment to the last added additional document reference. You have
     * to call addDocumentAdditionalReference before using this method
     *
     * @param  string $filenameToAttach
     * File containing binary data. The file MUST exist.
     * @return UblDocumentBuilderXRechnung
     */
    public function setFileAttachmentToAdditionalReference(string $filenameToAttach): UblDocumentBuilderXRechnung
    {
        if (count($this->invoiceObject->getAdditionalDocumentReference()) <= 0) {
            return $this;
        }

        if (!FileUtils::fileExists($filenameToAttach)) {
            return $this;
        }

        $mimetyper = new MimeDbRepository();
        $mimeType = $mimetyper->findType(FileUtils::getFileExtension($filenameToAttach));

        if (!in_array($mimeType, self::SUPPORTEDTMIMETYPES)) {
            return $this;
        }

        $binaryObject = new EmbeddedDocumentBinaryObject(FileUtils::fileToBase64($filenameToAttach));
        $binaryObject->setMimeCode($mimeType);
        $binaryObject->setFilename(FileUtils::getFilenameWithExtension($filenameToAttach));

        $attachment = new Attachment();
        $attachment->setEmbeddedDocumentBinaryObject($binaryObject);

        $additionalReferenceCount = count($this->invoiceObject->getAdditionalDocumentReference());
        $additionalReference = $this->invoiceObject->getAdditionalDocumentReference()[$additionalReferenceCount - 1];
        $additionalReference->setAttachment($attachment);

        return $this;
    }

    /**
     * Sets a Project reference
     *
     * @param  string $referenceNo
     * The identification of the project the invoice refers to.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentProjectReference(string $referenceNo): UblDocumentBuilderXRechnung
    {
        $projectReference = new ProjectReference();
        $projectReference->setID(new ID($referenceNo));

        $this->invoiceObject->setProjectReference([$projectReference]);

        return $this;
    }

    /**
     * Adds an attachment with an external uri to the last added additional document reference. You have
     * to call addDocumentAdditionalReference before using this method
     *
     * @param  string $uriId
     * The URL (Uniform Resource Locator) that identifies where the external document is located. A means
     * of locating the resource, including its primary access mechanism, e.g. http:// or ftp://.
     * Example value: http://www.example.com/index.html
     * @return UblDocumentBuilderXRechnung
     */
    public function setExternalAttachmentToAdditionalReference(string $uriId): UblDocumentBuilderXRechnung
    {
        if (count($this->invoiceObject->getAdditionalDocumentReference()) <= 0) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($uriId)) {
            return $this;
        }

        $externalReference = new ExternalReference();
        $externalReference->setURI(new URI($uriId));

        $attachment = new Attachment();
        $attachment->setExternalReference($externalReference);

        $additionalReferenceCount = count($this->invoiceObject->getAdditionalDocumentReference());
        $additionalReference = $this->invoiceObject->getAdditionalDocumentReference()[$additionalReferenceCount - 1];
        $additionalReference->setAttachment($attachment);

        return $this;
    }

    /**
     * Initialize the seller party of the invoice document
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentSeller(): UblDocumentBuilderXRechnung
    {
        $party = new Party();

        $accountingSupplierParty = new AccountingSupplierParty();
        $accountingSupplierParty->setParty($party);

        $this->invoiceObject->setAccountingSupplierParty($accountingSupplierParty);

        return $this;
    }

    /**
     * Sets the seller electronic address
     *
     * @param  string $endpointId
     * Identifies the Seller's electronic address to which the application level response to the
     * invoice may be delivered.
     * @param  string $endpointSchemeId
     * The identification scheme identifier of the Buyer electronic address.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerEndpointId(string $endpointId, string $endpointSchemeId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($endpointId) || StringUtils::stringIsNullOrEmpty($endpointSchemeId)) {
            return $this;
        }

        $endpoint = new EndpointID($endpointId);
        $endpoint->setSchemeID($endpointSchemeId);

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setEndpointID($endpoint);

        return $this;
    }

    /**
     * Sets seller identifier or bank assigned creditor identifier
     *
     * @param  string $id
     * This element is used for both the identification of the Seller, or the unique banking reference identifier
     * of Seller (assigned by the Seller bank.). For seller identification use ICD code list, for SEPA bank assigned
     * creditor reference, use SEPA. In order for the buyer to automatically identify a supplier, the Seller
     * identifier (BT-29), the Seller legal registration identifier (BT-30) and/or the Seller VAT identifier (BT-31)
     * shall be present
     * @param  string $idSchemeid
     * The identification scheme identifier of the Seller identifier. For bank assigned creditor identifier (BT-90),
     * value MUST be "SEPA"
     * @return UblDocumentBuilderXRechnung
     */
    public function addDocumentSellerIdentification(string $id, string $idSchemeid = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($id)) {
            return $this;
        }

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setID(new ID($id));

        if (!StringUtils::stringIsNullOrEmpty($idSchemeid)) {
            $partyIdentification->getID()->setSchemeID($idSchemeid);
        }

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->addToPartyIdentification($partyIdentification);

        return $this;
    }

    /**
     * Sets the seller trading name
     *
     * @param  string $name
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerName(string $name): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($name)) {
            return $this;
        }

        $partyName = new PartyName();
        $partyName->setName(new Name($name));

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setPartyName([$partyName]);

        return $this;
    }

    /**
     * Sets the postal address of the seller
     *
     * @param  string $streetName1
     * The main address line in an address.
     * __Example value__: Main Street 1
     * @param  string $streetName2
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Po Box 351
     * @param  string $streetName3
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Building 23
     * @param  string $cityName
     * The common name of the city, town or village, where the Seller address is located.
     * __Example value__: London
     * @param  string $cityPostCode
     * The identifier for an addressable group of properties according to the relevant postal service.
     * __Example value__: W1G 8LZ
     * @param  string $countyName
     * The subdivision of a country.
     * __Example value__: Region A
     * @param  string $countryId
     * A code that identifies the country.
     * __Example value__: GB
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerPostalAddress(string $streetName1, string $streetName2, string $streetName3, string $cityName, string $cityPostCode, string $countyName, string $countryId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        $postalAddress = new PostalAddress();

        if (!StringUtils::stringIsNullOrEmpty($streetName1)) {
            $postalAddress->setStreetName(new StreetName($streetName1));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName2)) {
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($streetName2));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName3)) {
            $addressLine = new AddressLine();
            $addressLine->setLine(new Line($streetName3));
            $postalAddress->addToAddressLine($addressLine);
        }
        if (!StringUtils::stringIsNullOrEmpty($cityName)) {
            $postalAddress->setCityName(new CityName($cityName));
        }
        if (!StringUtils::stringIsNullOrEmpty($cityPostCode)) {
            $postalAddress->setPostalZone(new PostalZone($cityPostCode));
        }
        if (!StringUtils::stringIsNullOrEmpty($countyName)) {
            $postalAddress->setCountrySubentity(new CountrySubentity($countyName));
        }
        if (!StringUtils::stringIsNullOrEmpty($countryId)) {
            $country = new Country();
            $country->setIdentificationCode(new IdentificationCode($countryId));
            $postalAddress->setCountry($country);
        }

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setPostalAddress($postalAddress);

        return $this;
    }

    /**
     * Sets the sellers VAT identifier
     *
     * @param  string $vatIdentifier
     * The Seller's VAT identifier (also known as Seller VAT identification number)
     * __Example value__: NO999888777
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerVATIdentifier(string $vatIdentifier): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($vatIdentifier)) {
            return $this;
        }

        $partyTaxScheme = $this->invoiceObject->getAccountingSupplierParty()->getParty()->getPartyTaxScheme();

        if (!isset($partyTaxScheme[0])) {
            $partyTaxScheme[0] = new PartyTaxScheme();
        }

        $taxScheme = new TaxScheme();
        $taxScheme->setId(new ID("VAT"));

        $partyTaxScheme[0]->setCompanyID(new CompanyID($vatIdentifier));
        $partyTaxScheme[0]->setTaxScheme($taxScheme);

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setPartyTaxScheme($partyTaxScheme);

        return $this;
    }

    /**
     * Sets the sellers tax registration number
     *
     * @param  string $taxRegistration
     * the local identification (defined by the Seller’s address) of the Seller for tax purposes or a reference
     * that enables the Seller to state his registered tax status. In order for the buyer to automatically identify
     * a supplier
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerTaxRegistration(string $taxRegistration): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($taxRegistration)) {
            return $this;
        }

        $partyTaxScheme = $this->invoiceObject->getAccountingSupplierParty()->getParty()->getPartyTaxScheme();

        if (!isset($partyTaxScheme[1])) {
            $partyTaxScheme[1] = new PartyTaxScheme();
        }

        $taxScheme = new TaxScheme();
        $taxScheme->setId(new ID("FC"));

        $partyTaxScheme[1]->setCompanyID(new CompanyID($taxRegistration));
        $partyTaxScheme[1]->setTaxScheme($taxScheme);

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setPartyTaxScheme($partyTaxScheme);

        return $this;
    }

    /**
     * Sets the sellers legal entity
     *
     * @param  string $registrationName
     * The full formal name by which the Seller is registered in the national registry of legal entities or as a Taxable
     * person or otherwise trades as a person or persons.
     * __Example value__: Full Formal Seller Name LTD.
     * @param  string $companyId
     * An identifier issued by an official registrar that identifies the Seller as a legal entity or person. In order for
     * the buyer to automatically identify a supplier, the Seller identifier (BT-29), the Seller legal registration
     * identifier (BT-30) and/or the Seller VAT identifier (BT-31) shall be present
     * __Example value__: HRB 123
     * @param  string $companyIdSchemeId
     * The identification scheme identifier of the Seller legal registration identifier.
     * __Example value__: 0002
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerLegalEntity(string $registrationName, string $companyId = "", string $companyIdSchemeId = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($registrationName)) {
            return $this;
        }

        $partyLegalEntity = new PartyLegalEntity();
        $partyLegalEntity->setRegistrationName(new RegistrationName($registrationName));

        if (!StringUtils::stringIsNullOrEmpty($companyId)) {
            $partyLegalEntity->setCompanyID(new CompanyID($companyId));
            if (!StringUtils::stringIsNullOrEmpty($companyIdSchemeId)) {
                $partyLegalEntity->getCompanyID()->setSchemeID($companyIdSchemeId);
            }
        }

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setPartyLegalEntity([$partyLegalEntity]);

        return $this;
    }

    /**
     * Sets the sellers contact
     *
     * @param  string $contactName
     * A contact point for a legal entity or person.
     * __Example value__: xyz123
     * @param  string $contactPhone
     * A phone number for the contact point.
     * __Example value__: 887 654 321
     * @param  string $contactElectronicMail
     * An e-mail address for the contact point.
     * __Example value__: test.name@foo.bar
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSellerContact(string $contactName, string $contactPhone, string $contactElectronicMail): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingSupplierParty() == null) {
            return $this;
        }

        $contact = new Contact();
        $contact->setName(new Name($contactName));
        $contact->setTelephone(new Telephone($contactPhone));
        $contact->setElectronicMail(new ElectronicMail($contactElectronicMail));

        $this->invoiceObject->getAccountingSupplierParty()->getParty()->setContact($contact);

        return $this;
    }

    /**
     * Initialize the buyer party of the invoice document
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentBuyer(): UblDocumentBuilderXRechnung
    {
        $party = new Party();

        $accountingCustomerParty = new AccountingCustomerParty();
        $accountingCustomerParty->setParty($party);

        $this->invoiceObject->setAccountingCustomerParty($accountingCustomerParty);

        return $this;
    }

    /**
     * Sets the buyer electronic address
     *
     * @param  string $endpointId
     * Identifies the Buyer's electronic address to which the invoice is delivered.
     * @param  string $endpointSchemeId
     * The identification scheme identifier of the Buyer electronic address.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerEndpointId(string $endpointId, string $endpointSchemeId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($endpointId) || StringUtils::stringIsNullOrEmpty($endpointSchemeId)) {
            return $this;
        }

        $endpoint = new EndpointID($endpointId);
        $endpoint->setSchemeID($endpointSchemeId);

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setEndpointID($endpoint);

        return $this;
    }

    /**
     * Sets buyer identifier
     *
     * @param  string $id
     * An identifier of the Buyer.
     * __Example value__: SE8765456787
     * @param  string $idSchemeid
     * The identification scheme identifier of the Buyer identifier.
     * __Example value__: 0088
     * @return UblDocumentBuilderXRechnung
     */
    public function addDocumentBuyerIdentification(string $id, string $idSchemeid = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($id)) {
            return $this;
        }

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setID(new ID($id));

        if (!StringUtils::stringIsNullOrEmpty($idSchemeid)) {
            $partyIdentification->getID()->setSchemeID($idSchemeid);
        }

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->addToPartyIdentification($partyIdentification);

        return $this;
    }

    /**
     * Sets the buyer trading name
     *
     * @param  string $name
     * A name by which the Buyer is known, other than Buyer name (also known as Business name).
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerName(string $name): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($name)) {
            return $this;
        }

        $partyName = new PartyName();
        $partyName->setName(new Name($name));

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setPartyName([$partyName]);

        return $this;
    }

    /**
     * Sets the postal address of the buyer
     *
     * @param  string $streetName1
     * The main address line in an address.
     * __Example value__: Main Street 1
     * @param  string $streetName2
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Po Box 351
     * @param  string $streetName3
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Building 23
     * @param  string $cityName
     * The common name of the city, town or village, where the Buyer address is located.
     * __Example value__: London
     * @param  string $cityPostCode
     * The identifier for an addressable group of properties according to the relevant postal service.
     * __Example value__: W1G 8LZ
     * @param  string $countyName
     * The subdivision of a country.
     * __Example value__: Region A
     * @param  string $countryId
     * A code that identifies the country.
     * __Example value__: GB
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerPostalAddress(string $streetName1, string $streetName2, string $streetName3, string $cityName, string $cityPostCode, string $countyName, string $countryId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        $postalAddress = new PostalAddress();

        if (!StringUtils::stringIsNullOrEmpty($streetName1)) {
            $postalAddress->setStreetName(new StreetName($streetName1));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName2)) {
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($streetName2));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName3)) {
            $addressLine = new AddressLine();
            $addressLine->setLine(new Line($streetName3));
            $postalAddress->addToAddressLine($addressLine);
        }
        if (!StringUtils::stringIsNullOrEmpty($cityName)) {
            $postalAddress->setCityName(new CityName($cityName));
        }
        if (!StringUtils::stringIsNullOrEmpty($cityPostCode)) {
            $postalAddress->setPostalZone(new PostalZone($cityPostCode));
        }
        if (!StringUtils::stringIsNullOrEmpty($countyName)) {
            $postalAddress->setCountrySubentity(new CountrySubentity($countyName));
        }
        if (!StringUtils::stringIsNullOrEmpty($countryId)) {
            $country = new Country();
            $country->setIdentificationCode(new IdentificationCode($countryId));
            $postalAddress->setCountry($country);
        }

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setPostalAddress($postalAddress);

        return $this;
    }

    /**
     * Sets the buyers VAT identifier
     *
     * @param  string $vatIdentifier
     * The Buyer's VAT identifier (also known as Buyer VAT identification number).
     * __Example value__: NO999888777
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerVATIdentifier(string $vatIdentifier): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($vatIdentifier)) {
            return $this;
        }

        $partyTaxScheme = $this->invoiceObject->getAccountingCustomerParty()->getParty()->getPartyTaxScheme();

        if (!isset($partyTaxScheme[0])) {
            $partyTaxScheme[0] = new PartyTaxScheme();
        }

        $taxScheme = new TaxScheme();
        $taxScheme->setId(new ID("VAT"));

        $partyTaxScheme[0]->setCompanyID(new CompanyID($vatIdentifier));
        $partyTaxScheme[0]->setTaxScheme($taxScheme);

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setPartyTaxScheme($partyTaxScheme);

        return $this;
    }

    /**
     * Sets the buyers legal entity
     *
     * @param  string $registrationName
     * The full name of the Buyer.
     * __Example value__: Buyer Full Name AS
     * @param  string $companyId
     * An identifier issued by an official registrar that identifies the Buyer as a legal entity or person.
     * __Example value__: 7300010000001
     * @param  string $companyIdSchemeId
     * The identification scheme identifier of the Buyer legal registration identifier.
     * __Example value__: 0088
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerLegalEntity(string $registrationName, string $companyId = "", string $companyIdSchemeId = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($registrationName)) {
            return $this;
        }

        $partyLegalEntity = new PartyLegalEntity();
        $partyLegalEntity->setRegistrationName(new RegistrationName($registrationName));

        if (!StringUtils::stringIsNullOrEmpty($companyId)) {
            $partyLegalEntity->setCompanyID(new CompanyID($companyId));
            if (!StringUtils::stringIsNullOrEmpty($companyIdSchemeId)) {
                $partyLegalEntity->getCompanyID()->setSchemeID($companyIdSchemeId);
            }
        }

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setPartyLegalEntity([$partyLegalEntity]);

        return $this;
    }

    /**
     * Sets the buyers contact
     *
     * @param  string $contactName
     * A contact point for a legal entity or person.
     * __Example value__: Jens Jensen
     * @param  string $contactPhone
     * A phone number for the contact point.
     * __Example value__: 876 654 321
     * @param  string $contactElectronicMail
     * An e-mail address for the contact point.
     * __Example value__: jens.j@buyer.se
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentBuyerContact(string $contactName, string $contactPhone, string $contactElectronicMail): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getAccountingCustomerParty() == null) {
            return $this;
        }

        $contact = new Contact();
        $contact->setName(new Name($contactName));
        $contact->setTelephone(new Telephone($contactPhone));
        $contact->setElectronicMail(new ElectronicMail($contactElectronicMail));

        $this->invoiceObject->getAccountingCustomerParty()->getParty()->setContact($contact);

        return $this;
    }

    /**
     * Initialize the payee party of the invoice document
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentPayee(): UblDocumentBuilderXRechnung
    {
        $payeeParty = new PayeeParty();

        $this->invoiceObject->setPayeeParty($payeeParty);

        return $this;
    }

    /**
     * Sets payee identifier
     *
     * @param  string $id
     * This element is used for both the identification of the Payee, or the unique banking reference identifier
     * of Payee (assigned by the Payee bank.) For payee identification use ICD code list, for SEPA bank assigned
     * creditor reference, use SEPA.
     * __Example value__: FR932874294
     * @param  string $idSchemeid
     * The identification scheme identifier of the payee identifier. For bank assigned creditor identifier (BT-90),
     * value MUST be "SEPA"
     * __Example value__: SEPA
     * @return UblDocumentBuilderXRechnung
     */
    public function addDocumentPayeeIdentification(string $id, string $idSchemeid = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getPayeeParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($id)) {
            return $this;
        }

        $partyIdentification = new PartyIdentification();
        $partyIdentification->setID(new ID($id));

        if (!StringUtils::stringIsNullOrEmpty($idSchemeid)) {
            $partyIdentification->getID()->setSchemeID($idSchemeid);
        }

        $this->invoiceObject->getPayeeParty()->addToPartyIdentification($partyIdentification);

        return $this;
    }

    /**
     * Sets the payee name
     *
     * @param  string $name
     * The name of the Payee.
     * __Example value__: Payee Name Ltd
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPayeeName(string $name): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getPayeeParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($name)) {
            return $this;
        }

        $partyName = new PartyName();
        $partyName->setName(new Name($name));

        $this->invoiceObject->getPayeeParty()->setPartyName([$partyName]);

        return $this;
    }

    /**
     * Sets the payees legal entity
     *
     * @param  string $registrationName
     * The full name of the payee.
     * __Example value__: payee Full Name AS
     * @param  string $companyId
     * An identifier issued by an official registrar that identifies the payee as a legal entity or person.
     * __Example value__: FR932874294
     * @param  string $companyIdSchemeId
     * The identification scheme identifier of the payee legal registration identifier.
     * __Example value__: 0002
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPayeeLegalEntity(string $registrationName, string $companyId = "", string $companyIdSchemeId = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getPayeeParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($registrationName)) {
            return $this;
        }

        $partyLegalEntity = new PartyLegalEntity();
        $partyLegalEntity->setRegistrationName(new RegistrationName($registrationName));

        if (!StringUtils::stringIsNullOrEmpty($companyId)) {
            $partyLegalEntity->setCompanyID(new CompanyID($companyId));
            if (!StringUtils::stringIsNullOrEmpty($companyIdSchemeId)) {
                $partyLegalEntity->getCompanyID()->setSchemeID($companyIdSchemeId);
            }
        }

        $this->invoiceObject->getPayeeParty()->setPartyLegalEntity([$partyLegalEntity]);

        return $this;
    }

    /**
     * Initialize the payee party of the invoice document
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentTaxRepresentative(): UblDocumentBuilderXRechnung
    {
        $taxRepresentativeParty = new TaxRepresentativeParty();

        $this->invoiceObject->setTaxRepresentativeParty($taxRepresentativeParty);

        return $this;
    }

    /**
     * Sets the seller tax representative name
     *
     * @param  string $name
     * The full name of the Seller's tax representative party.
     * __Example value__: Tax Representative Name AS
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxRepresentativeName(string $name): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getTaxRepresentativeParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($name)) {
            return $this;
        }

        $partyName = new PartyName();
        $partyName->setName(new Name($name));

        $this->invoiceObject->getTaxRepresentativeParty()->setPartyName([$partyName]);

        return $this;
    }
    /**
     * Sets the postal address for the tax representative party
     *
     * @param  string $streetName1
     * The main address line in an address.
     * __Example value__: Lille gatan 545
     * @param  string $streetName2
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Po Box 987
     * @param  string $streetName3
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Building 23
     * @param  string $cityName
     * The common name of the city, town or village, where the tax representative address is located.
     * __Example value__: Göteborg
     * @param  string $cityPostCode
     * The identifier for an addressable group of properties according to the relevant postal service.
     * __Example value__: 12345
     * @param  string $countyName
     * The subdivision of a country.
     * __Example value__: Region Vest
     * @param  string $countryId
     * A code that identifies the country.
     * __Example value__: SE
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxRepresentativePostalAddress(string $streetName1, string $streetName2, string $streetName3, string $cityName, string $cityPostCode, string $countyName, string $countryId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getTaxRepresentativeParty() == null) {
            return $this;
        }

        $postalAddress = new PostalAddress();

        if (!StringUtils::stringIsNullOrEmpty($streetName1)) {
            $postalAddress->setStreetName(new StreetName($streetName1));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName2)) {
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($streetName2));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName3)) {
            $addressLine = new AddressLine();
            $addressLine->setLine(new Line($streetName3));
            $postalAddress->addToAddressLine($addressLine);
        }
        if (!StringUtils::stringIsNullOrEmpty($cityName)) {
            $postalAddress->setCityName(new CityName($cityName));
        }
        if (!StringUtils::stringIsNullOrEmpty($cityPostCode)) {
            $postalAddress->setPostalZone(new PostalZone($cityPostCode));
        }
        if (!StringUtils::stringIsNullOrEmpty($countyName)) {
            $postalAddress->setCountrySubentity(new CountrySubentity($countyName));
        }
        if (!StringUtils::stringIsNullOrEmpty($countryId)) {
            $country = new Country();
            $country->setIdentificationCode(new IdentificationCode($countryId));
            $postalAddress->setCountry($country);
        }

        $this->invoiceObject->getTaxRepresentativeParty()->setPostalAddress($postalAddress);

        return $this;
    }

    /**
     * Sets the tax representative VAT identifier
     *
     * @param  string $vatIdentifier
     * The VAT identifier of the Seller's tax representative party.
     * __Example value__: FR932874294
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxRepresentativeVATIdentifier(string $vatIdentifier): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getTaxRepresentativeParty() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($vatIdentifier)) {
            return $this;
        }

        $partyTaxScheme = $this->invoiceObject->getTaxRepresentativeParty()->getPartyTaxScheme();

        if (!isset($partyTaxScheme[0])) {
            $partyTaxScheme[0] = new PartyTaxScheme();
        }

        $taxScheme = new TaxScheme();
        $taxScheme->setId(new ID("VAT"));

        $partyTaxScheme[0]->setCompanyID(new CompanyID($vatIdentifier));
        $partyTaxScheme[0]->setTaxScheme($taxScheme);

        $this->invoiceObject->getTaxRepresentativeParty()->setPartyTaxScheme($partyTaxScheme);

        return $this;
    }

    /**
     * Initialize the delivery party and delivery location of the invoice document
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDelivery(): UblDocumentBuilderXRechnung
    {
        $deliveryLocation = new DeliveryLocation();
        $deliveryParty = new DeliveryParty();

        $delivery = new Delivery();
        $delivery->setDeliveryLocation($deliveryLocation);
        $delivery->setDeliveryParty($deliveryParty);

        $this->invoiceObject->setDelivery([$delivery]);

        return $this;
    }

    /**
     * Sets the date on which the supply of goods or services was made or completed.
     *
     * @param DateTime $deliveryDate
     * The date on which the supply of goods or services was made or completed.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDeliveryDate(DateTime $deliveryDate): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getDelivery() == null) {
            return $this;
        }

        $this->invoiceObject->getDelivery()[0]->setActualDeliveryDate($deliveryDate);

        return $this;
    }

    /**
     * Sets the deliver to location identifier
     *
     * @param string $id
     * An identifier for the location at which the goods and services are delivered.
     * __Example value__: 83745498753497
     * @param string $idSchemeid
     * The identification scheme identifier of the Deliver to location identifier.
     * __Example value__: 0088
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDeliveryIdentification(string $id, string $idSchemeid = ""): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getDelivery() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($id)) {
            return $this;
        }

        $deliveryLocation = $this->invoiceObject->getDelivery()[0]->getDeliveryLocation();
        $deliveryLocationId = new ID($id);

        if (!StringUtils::stringIsNullOrEmpty($idSchemeid)) {
            $deliveryLocationId->setSchemeID($idSchemeid);
        }

        $deliveryLocation->setID($deliveryLocationId);

        return $this;
    }

    /**
     * Sets the deliver-to address
     *
     * @param  string $streetName1
     * The main address line in an address.
     * __Example value__: Delivery Street 1
     * @param  string $streetName2
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Delivery Street 2
     * @param  string $streetName3
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: C54
     * @param  string $cityName
     * The common name of the city, town or village, where the deliver to address is located.
     * __Example value__: Malmö
     * @param  string $cityPostCode
     * The identifier for an addressable group of properties according to the relevant postal service.
     * __Example value__: 86756
     * @param  string $countyName
     * The subdivision of a country.
     * __Example value__: South Region
     * @param  string $countryId
     * A code that identifies the country.
     * __Example value__: GB
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDeliveryPostalAddress(string $streetName1, string $streetName2, string $streetName3, string $cityName, string $cityPostCode, string $countyName, string $countryId): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getDelivery() == null) {
            return $this;
        }

        $postalAddress = new Address();

        if (!StringUtils::stringIsNullOrEmpty($streetName1)) {
            $postalAddress->setStreetName(new StreetName($streetName1));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName2)) {
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($streetName2));
        }
        if (!StringUtils::stringIsNullOrEmpty($streetName3)) {
            $addressLine = new AddressLine();
            $addressLine->setLine(new Line($streetName3));
            $postalAddress->addToAddressLine($addressLine);
        }
        if (!StringUtils::stringIsNullOrEmpty($cityName)) {
            $postalAddress->setCityName(new CityName($cityName));
        }
        if (!StringUtils::stringIsNullOrEmpty($cityPostCode)) {
            $postalAddress->setPostalZone(new PostalZone($cityPostCode));
        }
        if (!StringUtils::stringIsNullOrEmpty($countyName)) {
            $postalAddress->setCountrySubentity(new CountrySubentity($countyName));
        }
        if (!StringUtils::stringIsNullOrEmpty($countryId)) {
            $country = new Country();
            $country->setIdentificationCode(new IdentificationCode($countryId));
            $postalAddress->setCountry($country);
        }

        $this->invoiceObject->getDelivery()[0]->getDeliveryLocation()->setAddress($postalAddress);

        return $this;
    }

    /**
     * Sets the information about the deliver party
     *
     * @param string $name
     * The name of the party to which the goods and services are delivered.
     * __Example value__: Deliver name
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentDeliveryName(string $name): UblDocumentBuilderXRechnung
    {
        if ($this->invoiceObject->getDelivery() == null) {
            return $this;
        }

        if (StringUtils::stringIsNullOrEmpty($name)) {
            return $this;
        }

        $partyName = new PartyName();
        $partyName->setName(new Name($name));

        $this->invoiceObject->getDelivery()[0]->getDeliveryParty()->setPartyName([$partyName]);

        return $this;
    }

    /**
     * Sets the document payment means to _SEPA Credit Transfer_
     *
     * @param string $payeeAccountId
     * A unique identifier of the financial payment account, at a payment service provider, to which payment
     * should be made. Such as IBAN or BBAN.
     * __Example value__: NO99991122222
     * @param string $paymentId
     * A textual value used to establish a link between the payment and the Invoice, issued by the Seller.
     * Used for creditor's critical reconciliation information. This information element helps the Seller
     * to assign an incoming payment to the relevant payment process.
     * __Example value__: 432948234234234
     * @param string $payeeAccountName
     * The name of the payment account, at a payment service provider, to which payment should be made.
     * __Example value__: Payment Account
     * @param string $payeeAccountBranch
     * An identifier for the payment service provider where a payment account is located. Such as a BIC or a
     * national clearing code where required. No identification scheme Identifier to be used.
     * __Example value__: 9999
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPaymentMeansToCreditTransfer(string $payeeAccountId, string $paymentId = "", string $payeeAccountName = "", string $payeeAccountBranch = ""): UblDocumentBuilderXRechnung
    {
        if (StringUtils::stringIsNullOrEmpty($payeeAccountId)) {
            return $this;
        }

        $paymentMean = new PaymentMeans;

        $payeeFinancialAccount = new PayeeFinancialAccount();
        $payeeFinancialAccount->setID(new ID($payeeAccountId));

        if (!StringUtils::stringIsNullOrEmpty($payeeAccountName)) {
            $payeeFinancialAccount->setName(new Name($payeeAccountName));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeAccountBranch)) {
            $financialInstitutionBranch = new FinancialInstitutionBranch();
            $financialInstitutionBranch->setID(new ID($payeeAccountBranch));
            $payeeFinancialAccount->setFinancialInstitutionBranch($financialInstitutionBranch);
        }

        $paymentMean->setPaymentMeansCode(new PaymentMeansCode("58"));
        $paymentMean->setPayeeFinancialAccount($payeeFinancialAccount);

        if (!StringUtils::stringIsNullOrEmpty($paymentId)) {
            $paymentMean->setPaymentID([new PaymentID($paymentId)]);
        }

        $this->invoiceObject->setPaymentMeans([$paymentMean]);

        return $this;
    }

    /**
     * Sets the document payment means to _SEPA Direct Debit_
     *
     * @param string $mandateReference
     * Unique identifier assigned by the Payee for referencing the direct debit mandate. Used in order
     * to pre-notify the Buyer of a SEPA direct debit.
     * __Example value__: 123456
     * @param string $payerAccountId
     * The account to be debited by the direct debit.
     * __Example value__: 12345676543
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPaymentMeansToDirectDebit(string $mandateReference, string $payerAccountId): UblDocumentBuilderXRechnung
    {
        if (StringUtils::stringIsNullOrEmpty($mandateReference) || StringUtils::stringIsNullOrEmpty($payerAccountId)) {
            return $this;
        }

        $payerFinancialAccount = new PayerFinancialAccount();
        $payerFinancialAccount->setID(new ID($payerAccountId));

        $paymentMandate = new PaymentMandate();
        $paymentMandate->setID(new ID($mandateReference));
        $paymentMandate->setPayerFinancialAccount($payerFinancialAccount);

        $paymentMean = new PaymentMeans;
        $paymentMean->setPaymentMandate($paymentMandate);

        $this->invoiceObject->setPaymentMeans([$paymentMean]);

        return $this;
    }

    /**
     * Sets the document payment means to _Payment card_
     *
     * @param string $cardId
     * The Primary Account Number (PAN) of the card used for payment.In accordance with card payments security
     * standards, an invoice should never include a full card primary account number.
     * __Example value__: 1234
     * @param string $networkId
     * Card Network identifier, such as VISA, American Express, Master Card.
     * __Example value__: VISA
     * @param string $cardHolderName
     * The name of the payment card holder.
     * __Example value__: John Doe
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPaymentMeansToPaymentCard(string $cardId, string $networkId, string $cardHolderName = ""): UblDocumentBuilderXRechnung
    {
        if (StringUtils::stringIsNullOrEmpty($cardId) || StringUtils::stringIsNullOrEmpty($networkId)) {
            return $this;
        }

        $cardId = substr($cardId, -4);

        $cardAccount = new CardAccount();
        $cardAccount->setPrimaryAccountNumberID(new PrimaryAccountNumberID($cardId));
        $cardAccount->setNetworkID(new NetworkID($networkId));

        if (!StringUtils::stringIsNullOrEmpty($cardHolderName)) {
            $cardAccount->setHolderName(new HolderName($cardHolderName));
        }

        $paymentMean = new PaymentMeans;
        $paymentMean->setCardAccount($cardAccount);

        $this->invoiceObject->setPaymentMeans([$paymentMean]);

        return $this;
    }

    /**
     * Set the document payment terms as textual description
     *
     * @param string $note
     * A textual description of the payment terms that apply to the amount due for payment (Including description
     * of possible penalties). In case the Amount due for payment (BT-115) is positive, either the Payment due
     * date (BT-9) or the Payment terms (BT-20) shall be present.
     * __Example value__: Net within 30 days
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPaymentTerms(string $note): UblDocumentBuilderXRechnung
    {
        if (StringUtils::stringIsNullOrEmpty($note)) {
            return $this;
        }

        $paymentTerms = new PaymentTerms();
        $paymentTerms->setNote([new Note($note)]);

        $this->invoiceObject->setPaymentTerms([$paymentTerms]);

        return $this;
    }

    /**
     * Set the document payment terms as described in https://projekte.kosit.org/xrechnung/xrechnung/-/issues/6
     *
     * @param float $paymentDiscountBaseAmount
     * @param integer $paymentDiscountDays
     * @param float $paymentDiscountPercent
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPaymentTermsExt(float $paymentDiscountBaseAmount, int $paymentDiscountDays, float $paymentDiscountPercent): UblDocumentBuilderXRechnung
    {
        if ($paymentDiscountBaseAmount <= 0 || $paymentDiscountDays <= 0 || $paymentDiscountPercent <= 0) {
            return $this;
        }

        $note = sprintf(
            "#SKONTO#TAGE=%s#PROZENT=%s#BASISBETRAG=%s#",
            number_format($paymentDiscountDays, 0, "", ""),
            number_format($paymentDiscountPercent, 2, ".", ""),
            number_format($paymentDiscountBaseAmount, 2, ".", "")
        );

        $paymentTerms = new PaymentTerms();
        $paymentTerms->setNote([new Note($note)]);

        $this->invoiceObject->setPaymentTerms([$paymentTerms]);

        return $this;
    }

    /**
     * Initializes a new Allowance/Charge information on document level
     *
     * @param boolean $isCharge
     * Use “true” when informing about Charges and “false” when informing about Allowances.
     * __Example value__: false
     * @param string $reason
     * The reason for the document level allowance or charge, expressed as text. The Document
     * level allowance reason code and the Document level allowance reason shall indicate the
     * same allowance reason
     * __Example value__: Discount
     * @param string $reasonCode
     * The reason for the document level allowance or charge, expressed as a code. For allowances
     * a subset of codelist UNCL5189 is to be used, and for charges codelist UNCL7161 applies.
     * The Document level allowance reason code and the Document level allowance reason shall
     * indicate the same allowance reason
     * __Example value__: 95
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentAllowanceCharge(bool $isCharge, string $reason, string $reasonCode): UblDocumentBuilderXRechnung
    {
        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setChargeIndicator($isCharge);

        if (!StringUtils::stringIsNullOrEmpty($reason)) {
            $allowanceCharge->setAllowanceChargeReason([new AllowanceChargeReason($reason)]);
        }

        if (!StringUtils::stringIsNullOrEmpty($reasonCode)) {
            $allowanceCharge->setAllowanceChargeReasonCode(new AllowanceChargeReasonCode($reasonCode));
        }

        $this->invoiceObject->addToAllowanceCharge($allowanceCharge);

        return $this;
    }

    /**
     * Removes all allowcance/charge information on document level
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function clearDocumentAllowanceCharge(): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setAllowanceCharge([]);

        return $this;
    }

    /**
     * Sets the document level allowance or charge amounts
     * Before calling this method you need to call initDocumentAllowanceCharge method
     *
     * @param float $amount
     * The amount of an allowance or a charge, without VAT. Must be rounded to maximum 2 decimals
     * __Example value__: 200
     * @param float|null $baseAmount
     * The base amount that may be used, in conjunction with the document level allowance or charge
     * percentage, to calculate the document level allowance or charge amount. Must be rounded to
     * maximum 2 decimals
     * __Example value__: 1000
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentAllowanceChargeAmounts(float $amount, ?float $baseAmount = null): UblDocumentBuilderXRechnung
    {
        if (count($this->invoiceObject->getAllowanceCharge()) <= 0) {
            return $this;
        }

        $allowanceChargeCount = count($this->invoiceObject->getAllowanceCharge());
        $allowanceCharge = $this->invoiceObject->getAllowanceCharge()[$allowanceChargeCount - 1];

        $allowanceCharge->setAmount(new Amount($amount))->getAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        if ($baseAmount != null) {
            $allowanceCharge->setBaseAmount(new BaseAmount($baseAmount))->getBaseAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        }

        return $this;
    }

    /**
     * Sets the document level allowance or charge tax information
     *
     * @param string $taxCategoryCode
     * A coded identification of what VAT category applies to the document level allowance or charge.
     * __Example value__: S
     * @param string $taxSchemeCode
     * Mandatory element. Use “VAT”
     * __Default value__: VAT
     * @param float|null $percent
     * The VAT rate, represented as percentage that applies to the document level allowance or charge
     * __Example value__: 25
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentAllowanceChargeTax(string $taxCategoryCode, string $taxSchemeCode = "", ?float $percent = null): UblDocumentBuilderXRechnung
    {
        if (count($this->invoiceObject->getAllowanceCharge()) <= 0) {
            return $this;
        }

        $taxScheme = new TaxScheme();
        $taxScheme->setID(new ID(StringUtils::stringIsNullOrEmpty($taxSchemeCode) ? "VAT" : $taxSchemeCode));

        $taxCategory = new TaxCategory();
        $taxCategory->setTaxScheme($taxScheme);
        $taxCategory->setID(new ID($taxCategoryCode));

        if ($percent != null) {
            $taxCategory->setPercent(new Percent($percent));
        }

        $allowanceChargeCount = count($this->invoiceObject->getAllowanceCharge());
        $allowanceCharge = $this->invoiceObject->getAllowanceCharge()[$allowanceChargeCount - 1];

        $allowanceCharge->setTaxCategory([$taxCategory]);

        return $this;
    }

    /**
     * Initializes a new tax information on document level
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentTaxTotal(): UblDocumentBuilderXRechnung
    {
        $taxTotal = new TaxTotal();
        $taxTotal->setTaxAmount(new TaxAmount(0.0));

        $this->invoiceObject->setTaxTotal([$taxTotal]);

        return $this;
    }

    /**
     * Initializes a new vat breakdown by different categories, rates and exemption reasons
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function initDocumentTaxSubTotal(): UblDocumentBuilderXRechnung
    {
        if (!isset($this->invoiceObject->getTaxTotal()[0])) {
            return $this;
        }

        $taxSubTotal = new TaxSubtotal();
        $this->invoiceObject->getTaxTotal()[0]->addToTaxSubtotal($taxSubTotal);

        return $this;
    }

    /**
     * Removes the tax information from document completly
     *
     * @return UblDocumentBuilderXRechnung
     */
    public function clearDocumentTaxTotal(): UblDocumentBuilderXRechnung
    {
        $this->invoiceObject->setTaxTotal([]);

        return $this;
    }

    /**
     * Sets tax amounts on document level.
     * Before calling this method you need to call initDocumentTaxTotal and initDocumentTaxSubTotal
     *
     * @param float $taxableAmount
     * Sum of all taxable amounts subject to a specific VAT category code and VAT category rate (if
     * the VAT category rate is applicable). Must be rounded to maximum 2 decimals.
     * __Example value__: 1945.00
     * @param float $taxAmount
     * The total VAT amount for a given VAT category. Must be rounded to maximum 2 decimals.
     * __Example value__: 486.25
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxAmounts(float $taxableAmount, float $taxAmount): UblDocumentBuilderXRechnung
    {
        if (!isset($this->invoiceObject->getTaxTotal()[0])) {
            return $this;
        }

        $taxSubTotalCount = count($this->invoiceObject->getTaxTotal()[0]->getTaxSubtotal());

        if ($taxSubTotalCount <= 0) {
            return $this;
        }

        $taxSubTotal = $this->invoiceObject->getTaxTotal()[0]->getTaxSubtotal()[$taxSubTotalCount - 1];
        $taxSubTotal->setTaxableAmount(new TaxableAmount($taxableAmount))->getTaxableAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $taxSubTotal->setTaxAmount(new TaxAmount($taxAmount))->getTaxAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        $taxAmountSum = $this->invoiceObject->getTaxTotal()[0]->getTaxAmount()->value();
        $taxAmountSum += $taxAmount;
        $this->invoiceObject->getTaxTotal()[0]->setTaxAmount(new TaxAmount($taxAmountSum))->getTaxAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        return $this;
    }

    /**
     * Sets tax category and scheme on document level.
     * Before calling this method you need to call initDocumentTaxTotal and initDocumentTaxSubTotal
     *
     * @param string $taxCategoryCode
     * @param string $taxSchemeCode
     * @param float|null $percent
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentTaxScheme(string $taxCategoryCode, string $taxSchemeCode = "", ?float $percent = null): UblDocumentBuilderXRechnung
    {
        if (!isset($this->invoiceObject->getTaxTotal()[0])) {
            return $this;
        }

        $taxSubTotalCount = count($this->invoiceObject->getTaxTotal()[0]->getTaxSubtotal());

        if ($taxSubTotalCount <= 0) {
            return $this;
        }

        $taxSubTotal = $this->invoiceObject->getTaxTotal()[0]->getTaxSubtotal()[$taxSubTotalCount - 1];

        $taxScheme = new TaxScheme();
        $taxScheme->setID(new ID(StringUtils::stringIsNullOrEmpty($taxSchemeCode) ? "VAT" : $taxSchemeCode));

        $taxCategory = new TaxCategory();
        $taxCategory->setTaxScheme($taxScheme);
        $taxCategory->setID(new ID($taxCategoryCode));

        if ($percent != null) {
            $taxCategory->setPercent(new Percent($percent));
        }

        $taxSubTotal->setTaxCategory($taxCategory);

        return $this;
    }

    /**
     * Set the document summation basic/required information
     *
     * @param float $lineExtensionAmount
     * Sum of all Invoice line net amounts in the Invoice. Must be rounded to maximum 2 decimals.
     * __Example value__: 3800.0
     * @param float $taxExclusiveAmount
     * The total amount of the Invoice without VAT. Must be rounded to maximum 2 decimals.
     * __Example value__: 3600.0
     * @param float $taxInclusiveAmount
     * The total amount of the Invoice with VAT. Must be rounded to maximum 2 decimals.
     * __Example value__: 4500.0
     * @param float $payableAmount
     * The outstanding amount that is requested to be paid. Must be rounded to maximum 2 decimals.
     * __Example value__: 3500.0
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSummation(float $lineExtensionAmount, float $taxExclusiveAmount, float $taxInclusiveAmount, float $payableAmount): UblDocumentBuilderXRechnung
    {
        $legalMonetaryTotal = new LegalMonetaryTotal();

        $legalMonetaryTotal->setLineExtensionAmount(new LineExtensionAmount($lineExtensionAmount))->getLineExtensionAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setTaxExclusiveAmount(new TaxExclusiveAmount($taxExclusiveAmount))->getTaxExclusiveAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setTaxInclusiveAmount(new TaxInclusiveAmount($taxInclusiveAmount))->getTaxInclusiveAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setPayableAmount(new PayableAmount($payableAmount))->getPayableAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        $this->invoiceObject->setLegalMonetaryTotal($legalMonetaryTotal);

        return $this;
    }

    /**
     * Set the document complete summation information
     *
     * @param float $lineExtensionAmount
     * Sum of all Invoice line net amounts in the Invoice. Must be rounded to maximum 2 decimals.
     * __Example value__: 3800.0
     * @param float $taxExclusiveAmount
     * The total amount of the Invoice without VAT. Must be rounded to maximum 2 decimals.
     * __Example value__: 3600.0
     * @param float $taxInclusiveAmount
     * The total amount of the Invoice with VAT. Must be rounded to maximum 2 decimals.
     * __Example value__: 4500.0
     * @param float $payableAmount
     * The outstanding amount that is requested to be paid. Must be rounded to maximum 2 decimals.
     * __Example value__: 3500.0
     * @param float $allowanceTotalAmount
     * Sum of all allowances on document level in the Invoice. Must be rounded to maximum 2 decimals.
     * __Example value__: 200.0
     * @param float $chargeTotalAmount
     * Sum of all charges on document level in the Invoice. Must be rounded to maximum 2 decimals.
     * __Example value__: 0.0
     * @param float $prepaidAmount
     * The sum of amounts which have been paid in advance. Must be rounded to maximum 2 decimals.
     * __Example value__: 1000.0
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentSummationEnhanced(float $lineExtensionAmount, float $taxExclusiveAmount, float $taxInclusiveAmount, float $payableAmount, float $allowanceTotalAmount, float $chargeTotalAmount, float $prepaidAmount): UblDocumentBuilderXRechnung
    {
        $legalMonetaryTotal = new LegalMonetaryTotal();

        $legalMonetaryTotal->setLineExtensionAmount(new LineExtensionAmount($lineExtensionAmount))->getLineExtensionAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setTaxExclusiveAmount(new TaxExclusiveAmount($taxExclusiveAmount))->getTaxExclusiveAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setTaxInclusiveAmount(new TaxInclusiveAmount($taxInclusiveAmount))->getTaxInclusiveAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setPayableAmount(new PayableAmount($payableAmount))->getPayableAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setChargeTotalAmount(new ChargeTotalAmount($chargeTotalAmount))->getChargeTotalAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setAllowanceTotalAmount(new AllowanceTotalAmount($allowanceTotalAmount))->getAllowanceTotalAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());
        $legalMonetaryTotal->setPrepaidAmount(new PrepaidAmount($prepaidAmount))->getPrepaidAmount()->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        $this->invoiceObject->setLegalMonetaryTotal($legalMonetaryTotal);

        return $this;
    }

    /**
     * Initializes a new invoice line
     *
     * @param string $lineId
     * A unique identifier for the individual line within the Invoice.
     * __Example value__: 12
     * @return UblDocumentBuilderXRechnung
     */
    public function addNewDocumentPosition(string $lineId): UblDocumentBuilderXRechnung
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setID(new ID($lineId));

        $this->invoiceObject->addToInvoiceLine($invoiceLine);

        return $this;
    }

    /**
     * Set note on the latest created document position.
     * __Note:__ You have to call addNewDocumentPosition before you can use this method
     *
     * @param string $note
     * A textual note that gives unstructured information that is relevant to the Invoice line.
     * __Example value__: New article number 12345
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPositionNote(string $note): UblDocumentBuilderXRechnung
    {
        $invoiceLineCount = count($this->invoiceObject->getInvoiceLine());

        if ($invoiceLineCount <= 0) {
            return $this;
        }

        $note = new Note($note);

        $invoiceLine = $this->invoiceObject->getInvoiceLine()[$invoiceLineCount - 1];
        $invoiceLine->setNote([$note]);

        return $this;
    }

    /**
     * Set the invoiced quantity in the latest created document position
     * __Note:__ You have to call addNewDocumentPosition before you can use this method
     *
     * @param float $quantity
     * The quantity of items (goods or services) that is charged in the Invoice line.
     * __Example value__: 100
     * @param string $unitCode
     * The unit of measure that applies to the invoiced quantity. Codes for unit of packaging from UNECE Recommendation
     * No. 21 can be used in accordance with the descriptions in the "Intro" section of UN/ECE Recommendation 20,
     * Revision 11 (2015): The 2 character alphanumeric code values in UNECE Recommendation 21 shall be used. To avoid
     * duplication with existing code values in UNECE Recommendation No. 20, each code value from UNECE Recommendation 21
     * shall be prefixed with an “X”, resulting in a 3 alphanumeric code when used as a unit of measure.
     * __Example value__: C62
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPositionQuantity(float $quantity, string $unitCode): UblDocumentBuilderXRechnung
    {
        if (StringUtils::stringIsNullOrEmpty($unitCode)) {
            return $this;
        }

        $invoiceLineCount = count($this->invoiceObject->getInvoiceLine());

        if ($invoiceLineCount <= 0) {
            return $this;
        }

        $invoicedQuantity = new InvoicedQuantity($quantity);
        $invoicedQuantity->setUnitCode($unitCode);

        $invoiceLine = $this->invoiceObject->getInvoiceLine()[$invoiceLineCount - 1];
        $invoiceLine->setInvoicedQuantity($invoicedQuantity);

        return $this;
    }

    /**
     * Sets the invoice line net amount
     * __Note:__ You have to call addNewDocumentPosition before you can use this method
     *
     * @param float $totalAmount
     * The total amount of the Invoice line. The amount is “net” without VAT, i.e. inclusive of line level
     * allowances and charges as well as other relevant taxes. Must be rounded to maximum 2 decimals.
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPositionTotalAmount(float $totalAmount): UblDocumentBuilderXRechnung
    {
        $invoiceLineCount = count($this->invoiceObject->getInvoiceLine());

        if ($invoiceLineCount <= 0) {
            return $this;
        }

        $lineExtensionAmount = new LineExtensionAmount($totalAmount);
        $lineExtensionAmount->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode());

        $invoiceLine = $this->invoiceObject->getInvoiceLine()[$invoiceLineCount - 1];
        $invoiceLine->setLineExtensionAmount($lineExtensionAmount);

        return $this;
    }

    /**
     * Sets the delivery or invoice period
     * __Note:__ You have to call addNewDocumentPosition before you can use this method
     *
     * @param  DateTime|null $startDate
     * The date when the Invoice period for this Invoice line starts.
     * __Example value__: 2017-10-05
     * @param  DateTime|null $endDate
     * The date when the Invoice period for this Invoice line ends.
     * __Example value__: 2017-10-15
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPositionInvoicePeriod(?DateTime $startDate = null, ?DateTime $endDate = null): UblDocumentBuilderXRechnung
    {
        if (is_null($startDate) && is_null($endDate)) {
            return $this;
        }

        $invoiceLineCount = count($this->invoiceObject->getInvoiceLine());

        if ($invoiceLineCount <= 0) {
            return $this;
        }

        $invoicePeriod = $this->invoiceObject->setInvoicePeriod([new InvoicePeriod])->getInvoicePeriod()[0];

        if (!is_null($startDate)) {
            $invoicePeriod->setStartDate($startDate);
        }
        if (!is_null($endDate)) {
            $invoicePeriod->setEndDate($endDate);
        }

        $invoiceLine = $this->invoiceObject->getInvoiceLine()[$invoiceLineCount - 1];
        $invoiceLine->setInvoicePeriod([$invoicePeriod]);

        return $this;
    }

    /**
     * Sets the referenced purchase order line reference
     * __Note:__ You have to call addNewDocumentPosition before you can use this method
     *
     * @param string $orderLineReferenceNo
     * An identifier for a referenced line within a purchase order, issued by the Buyer.
     * __Example value__: 3
     * @return UblDocumentBuilderXRechnung
     */
    public function setDocumentPositionBuyerOrderLineNo(string $orderLineReferenceNo): UblDocumentBuilderXRechnung
    {
        $invoiceLineCount = count($this->invoiceObject->getInvoiceLine());

        if ($invoiceLineCount <= 0) {
            return $this;
        }

        $orderLineReference = new OrderLineReference();
        $orderLineReference->setLineID(new LineID($orderLineReferenceNo));

        $invoiceLine = $this->invoiceObject->getInvoiceLine()[$invoiceLineCount - 1];
        $invoiceLine->setOrderLineReference([$orderLineReference]);

        return $this;
    }
}
