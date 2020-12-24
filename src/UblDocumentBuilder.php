<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use \DateTime;
use Prophecy\Util\StringUtil;
use \horstoeko\ubl\entities\cbc\ID;
use \horstoeko\ubl\entities\cbc\URI;
use \horstoeko\ubl\entities\cbc\Line;
use \horstoeko\ubl\entities\cbc\Name;
use \horstoeko\ubl\entities\cbc\Note;
use horstoeko\ubl\entities\cac\Party;
use \horstoeko\ubl\entities\cac\Price;
use \horstoeko\ubl\entities\cbc\Value;
use \horstoeko\ubl\entities\cbc\Amount;
use \horstoeko\ubl\entities\cbc\LineID;
use \horstoeko\ubl\entities\cac\Country;
use \horstoeko\ubl\entities\cbc\Percent;
use \horstoeko\ubl\entities\cbc\Telefax;
use \horstoeko\ubl\entities\cac\TaxTotal;
use \horstoeko\ubl\entities\cbc\CityName;
use \horstoeko\ubl\entities\main\Invoice;
use \horstoeko\stringmanagement\FileUtils;
use \horstoeko\ubl\entities\cac\PartyName;
use \horstoeko\ubl\entities\cac\TaxScheme;
use \horstoeko\ubl\entities\cbc\CompanyID;
use \horstoeko\ubl\entities\cbc\NetworkID;
use \horstoeko\ubl\entities\cbc\PaymentID;
use \horstoeko\ubl\entities\cbc\ProfileID;
use \horstoeko\ubl\entities\cbc\TaxAmount;
use \horstoeko\ubl\entities\cbc\Telephone;
use \horstoeko\ubl\entities\cac\Attachment;
use \horstoeko\ubl\entities\cbc\BaseAmount;
use \horstoeko\ubl\entities\cbc\EndpointID;
use \horstoeko\ubl\entities\cbc\HolderName;
use \horstoeko\ubl\entities\cbc\PostalZone;
use \horstoeko\ubl\entities\cbc\StreetName;
use \MimeTyper\Repository\MimeDbRepository;
use \horstoeko\stringmanagement\StringUtils;
use \horstoeko\ubl\entities\cac\AddressLine;
use \horstoeko\ubl\entities\cac\CardAccount;
use \horstoeko\ubl\entities\cac\InvoiceLine;
use \horstoeko\ubl\entities\cac\TaxCategory;
use \horstoeko\ubl\entities\cac\TaxSubtotal;
use \horstoeko\ubl\entities\cbc\Description;
use \horstoeko\ubl\entities\cbc\PriceAmount;
use \horstoeko\ubl\entities\cac\PaymentMeans;
use \horstoeko\ubl\entities\cac\PaymentTerms;
use \horstoeko\ubl\entities\cbc\BaseQuantity;
use \horstoeko\ubl\entities\cbc\SalesOrderID;
use horstoeko\ubl\entities\cac\InvoicePeriod;
use \horstoeko\ubl\entities\cac\OriginCountry;
use \horstoeko\ubl\entities\cbc\PayableAmount;
use \horstoeko\ubl\entities\cbc\PrepaidAmount;
use \horstoeko\ubl\entities\cbc\TaxableAmount;
use \horstoeko\ubl\entities\cac\OrderReference;
use \horstoeko\ubl\entities\cac\PartyTaxScheme;
use \horstoeko\ubl\entities\cac\PaymentMandate;
use \horstoeko\ubl\entities\cbc\AccountingCost;
use \horstoeko\ubl\entities\cbc\BuyerReference;
use \horstoeko\ubl\entities\cbc\ElectronicMail;
use horstoeko\ubl\entities\cac\DespatchAddress;
use \horstoeko\ubl\entities\cac\AllowanceCharge;
use \horstoeko\ubl\entities\cbc\CustomizationID;
use \horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use \horstoeko\ubl\entities\cbc\SequenceNumeric;
use \horstoeko\ubl\entities\cbc\TaxCurrencyCode;
use horstoeko\ubl\entities\cac\ProjectReference;
use horstoeko\ubl\entities\cct\BinaryObjectType;
use \horstoeko\ubl\entities\cac\BillingReference;
use \horstoeko\ubl\entities\cbc\CompanyLegalForm;
use \horstoeko\ubl\entities\cbc\CountrySubentity;
use \horstoeko\ubl\entities\cbc\DocumentTypeCode;
use \horstoeko\ubl\entities\cbc\InvoicedQuantity;
use \horstoeko\ubl\entities\cbc\PaymentMeansCode;
use \horstoeko\ubl\entities\cbc\RegistrationName;
use Symfony\Component\Validator\Constraints\Date;
use \horstoeko\ubl\entities\cac\ExternalReference;
use \horstoeko\ubl\entities\cbc\ChargeTotalAmount;
use \horstoeko\ubl\entities\cac\LegalMonetaryTotal;
use \horstoeko\ubl\entities\cbc\IdentificationCode;
use \horstoeko\ubl\entities\cbc\TaxExclusiveAmount;
use \horstoeko\ubl\entities\cbc\TaxExemptionReason;
use \horstoeko\ubl\entities\cbc\TaxInclusiveAmount;
use \horstoeko\ubl\entities\cac\PartyIdentification;
use \horstoeko\ubl\entities\cbc\DocumentDescription;
use \horstoeko\ubl\entities\cbc\LineExtensionAmount;
use \horstoeko\ubl\entities\cbc\AdditionalStreetName;
use \horstoeko\ubl\entities\cbc\AllowanceTotalAmount;
use \horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use \horstoeko\ubl\entities\cac\ClassifiedTaxCategory;
use \horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use \horstoeko\ubl\entities\cac\PayerFinancialAccount;
use \horstoeko\ubl\entities\cbc\AllowanceChargeReason;
use \horstoeko\ubl\entities\cbc\PayableRoundingAmount;
use \horstoeko\ubl\entities\cac\AdditionalItemProperty;
use \horstoeko\ubl\entities\cbc\ItemClassificationCode;
use \horstoeko\ubl\entities\cbc\PrimaryAccountNumberID;
use \horstoeko\ubl\entities\cbc\TaxExemptionReasonCode;
use horstoeko\ubl\entities\cac\AccountingSupplierParty;
use \horstoeko\ubl\entities\cac\CommodityClassification;
use \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric;
use horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use \horstoeko\ubl\entities\cac\BuyersItemIdentification;
use \horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use horstoeko\ubl\entities\cac\ContractDocumentReference;
use horstoeko\ubl\entities\cac\DespatchDocumentReference;
use \horstoeko\ubl\entities\cac\SellersItemIdentification;
use \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode;
use \horstoeko\ubl\entities\cac\FinancialInstitutionBranch;
use \horstoeko\ubl\entities\cac\StandardItemIdentification;
use horstoeko\ubl\entities\cac\OriginatorDocumentReference;
use \horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use horstoeko\ubl\entities\cac\Contact;
use horstoeko\ubl\entities\cac\PartyLegalEntity;
use horstoeko\ubl\entities\cac\PostalAddress;
use \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;
use horstoeko\ubl\entities\cbc\IdentificationID;

/**
 * Class representing the ubl invoice builder
 *
 * @category UBL
 * @package  UBL
 * @author   D. Erling <horstoeko@erling.com.de>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/horstoeko/ubl
 */
class UblDocumentBuilder extends UblDocument
{
    /**
     * @internal
     * The internal invoice object
     * @var      \horstoeko\ubl\entities\main\Invoice
     */
    protected $invoiceObject = null;

    /**
     * @internal Internal reference to the currently created document position
     *
     * @var \horstoeko\ubl\entities\cac\InvoiceLine
     */
    protected $currentPosition = null;

    /**
     * A list of supported mimetypes by binaryattachments
     */
    const SUPPORTEDTMIMETYPES = [
        "application/pdf",
        "image/png",
        "image/jpeg",
        "text/csv",
        "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
        "application/vnd.oasis.opendocument.spreadsheet",
    ];

    /**
     * Constructor
     *
     * @codeCoverageIgnore
     */
    public function __construct()
    {
        parent::__construct();
        $this->initInvoiceObject();
    }

    /**
     * @inheritDoc
     * @codeCoverageIgnore
     */
    public function getInvoiceObject(): Invoice
    {
        return $this->invoiceObject;
    }

    /**
     * Returns the currently created document position (invoice line)
     *
     * @return InvoiceLine|null
     * @codeCoverageIgnore
     */
    public function getCurrentPosition(): ?InvoiceLine
    {
        return $this->currentPosition;
    }

    /**
     * This method can be overridden in derived class
     * It is called before a XML is written
     *
     * @return void
     */
    protected function onBeforeGetContent(): void
    {
        // Do nothing
    }

    /**
     * Write the content of a UBL object to a string
     *
     * @return string
     */
    public function getContent(): string
    {
        $this->onBeforeGetContent();
        return $this->serializer->serialize($this->invoiceObject, 'xml');
    }

    /**
     * Write the content of a UBL object to a file
     *
     * @param  string $xmlfilename
     * The filename to which the content of the UBL invoice object is
     * saved to as XML
     * @return UblDocumentBuilder
     */
    public function writeFile(string $xmlfilename): UblDocumentBuilder
    {
        file_put_contents($xmlfilename, $this->getContent());
        return $this;
    }

    /**
     * Sets the identifier for the customization
     *
     * @param  string $customization
     * The identifier for the customization
     * @return UblDocumentBuilder
     */
    public function setDocumentCustomization(string $customization): UblDocumentBuilder
    {
        $this->invoiceObject->setCustomizationID(new CustomizationID($customization));
        return $this;
    }

    /**
     * Set Profile
     *
     * @param  string $profileId
     * @return UblDocumentBuilder
     */
    public function setDocumentProfile($profileId): UblDocumentBuilder
    {
        $this->invoiceObject->setProfileID(new ProfileID($profileId));
        return $this;
    }

    /**
     * Sets the invoice number
     *
     * @param string $documentNo
     * A unique identification of the Invoice. The sequential number required in Article 226(2)
     * of the directive 2006/112/EC [2], to uniquely identify the Invoice within the business
     * context, time-frame, operating systems and records of the Seller. No identification scheme
     * is to be used.
     * @return UblDocumentBuilder
     */
    public function setDocumentNumber(string $documentNo): UblDocumentBuilder
    {
        $this->invoiceObject->setID(new ID($documentNo));
        return $this;
    }

    /**
     * Sets the invoice issue date
     *
     * @param DateTime $documentDate
     * The date when the Invoice was issued
     * @return UblDocumentBuilder
     */
    public function setDocumentDate(DateTime $documentDate): UblDocumentBuilder
    {
        $this->invoiceObject->setIssueDate($documentDate);
        return $this;
    }

    /**
     * Sets the payment due date
     *
     * @param DateTime $documentDueDate
     * The date when the payment is due. In case the Amount due for payment (BT-115)
     * is positive, either the Payment due date (BT-9) or the Payment terms (BT-20) shall be present
     * @return UblDocumentBuilder
     */
    public function setDocumentDueDate(DateTime $documentDueDate): UblDocumentBuilder
    {
        $this->invoiceObject->setDueDate($documentDueDate);
        return $this;
    }

    /**
     * Sets the Value added tax point date
     *
     * @param DateTime $taxPointDate
     * The date when the VAT becomes accountable for the Seller and for the Buyer in so far as that date
     * can be determined and differs from the date of issue of the invoice, according to the VAT directive.
     * This element is required if the Value added tax point date is different from the Invoice issue date.
     * @return UblDocumentBuilder
     */
    public function setDocumentTaxPointDate(DateTime $taxPointDate): UblDocumentBuilder
    {
        $this->invoiceObject->setTaxPointDate($taxPointDate);
        return $this;
    }

    /**
     * Sets the invoice type code
     *
     * @param string $documentTypeCode
     * A code specifying the functional type of the Invoice. The default value is __380__.
     * @return UblDocumentBuilder
     */
    public function setDocumentType(string $documentTypeCode): UblDocumentBuilder
    {
        $this->invoiceObject->setInvoiceTypeCode(new InvoiceTypeCode($documentTypeCode));
        return $this;
    }

    /**
     * Sets the invoice note
     *
     * @param string $documentNote
     * A textual note that gives unstructured information that is relevant to the Invoice as a whole.
     * Such as the reason for any correction or assignment note in case the invoice has been factored.
     * @return UblDocumentBuilder
     */
    public function setDocumentNote(string $documentNote): UblDocumentBuilder
    {
        $this->invoiceObject->setNote([new Note($documentNote)]);
        return $this;
    }

    /**
     * Sets the document currencies
     *
     * @param string $documentCurrency
     * The currency in which all Invoice amounts are given, except for the Total VAT amount in accounting
     * currency. Only one currency shall be used in the Invoice, except for the VAT accounting currency
     * code (BT-6) and the invoice total VAT amount in accounting currency (BT-111)
     * @param string|null $taxCurrency
     * The currency used for VAT accounting and reporting purposes as accepted or required in the country
     * of the Seller. Shall be used in combination with the Invoice total VAT amount in accounting currency
     * (BT-111), when the VAT accounting currency code differs from the Invoice currency code.
     * @return UblDocumentBuilder
     */
    public function setDocumentCurrencies(string $documentCurrency, ?string $taxCurrency = null): UblDocumentBuilder
    {
        $this->invoiceObject->setDocumentCurrencyCode(new DocumentCurrencyCode($documentCurrency));
        $this->invoiceObject->setTaxCurrencyCode(!StringUtils::stringIsNullOrEmpty($taxCurrency) ? new TaxCurrencyCode($taxCurrency) : new TaxCurrencyCode($documentCurrency));

        return $this;
    }

    /**
     * Sets the buyers accounting reference
     *
     * @param string $accountingCost
     * A textual value that specifies where to book the relevant data into the Buyer's financial accounts.
     * @return UblDocumentBuilder
     */
    public function setDocumentAccountingCost(string $accountingCost): UblDocumentBuilder
    {
        $this->invoiceObject->setAccountingCost(new AccountingCost($accountingCost));
        return $this;
    }

    /**
     * Sets the buyer reference
     *
     * @param string $buyerReference
     * An identifier assigned by the Buyer used for internal routing purposes. An invoice must have buyer
     * reference or purchase order reference (BT-13)
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerReference(string $buyerReference): UblDocumentBuilder
    {
        $this->invoiceObject->setBuyerReference(new BuyerReference($buyerReference));
        return $this;
    }

    /**
     * Sets the delivery or invoice period
     *
     * @param DateTime|null $startDate
     * The date when the Invoice period starts
     * @param DateTime|null $endDate
     * The date when the Invoice period ends
     * @return UblDocumentBuilder
     */
    public function setDocumentInvoicePeriod(?DateTime $startDate = null, ?DateTime $endDate = null): UblDocumentBuilder
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
     * @param string $buyerOrderNo
     * An identifier of a referenced purchase order, issued by the Buyer.
     * An invoice must have buyer reference (BT-10) or purchase order reference.
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerOrderNo(string $buyerOrderNo): UblDocumentBuilder
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();
        $orderReference->setID(new ID($buyerOrderNo));

        return $this;
    }

    /**
     * Sets the seller order reference number
     *
     * @param string $sellerOrderNo
     * An identifier of a referenced sales order, issued by the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerOrderNo(string $sellerOrderNo): UblDocumentBuilder
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();
        $orderReference->setSalesOrderID(new SalesOrderID($sellerOrderNo));

        return $this;
    }

    /**
     * Sets an invoice document reference number and optionally ab issue date for this
     *
     * @param string $referenceNo
     * The identification of an Invoice that was previously sent by the Seller.
     * @param DateTime|null $issueDate
     * The date when the Preceding Invoice was issued.
     * Shall be provided in case the Preceding Invoice identifier is not unique
     * @return UblDocumentBuilder
     */
    public function addDocumentBillingReference(string $referenceNo, ?DateTime $issueDate = null): UblDocumentBuilder
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
     * @param string $referenceNo
     * An identifier of a referenced despatch advice.
     * @return UblDocumentBuilder
     */
    public function setDocumentDespatchReference(string $referenceNo): UblDocumentBuilder
    {
        $despatchReference = new DespatchDocumentReference();
        $despatchReference->setID(new ID($referenceNo));

        $this->invoiceObject->setDespatchDocumentReference([$despatchReference]);

        return $this;
    }

    /**
     * Sets a receiving advice reference
     *
     * @param string $referenceNo
     * An identifier of a referenced receiving advice.
     * @return UblDocumentBuilder
     */
    public function setDocumentReceiptReference(string $referenceNo): UblDocumentBuilder
    {
        $receiptReference = new ReceiptDocumentReference();
        $receiptReference->setID(new ID($referenceNo));

        $this->invoiceObject->setReceiptDocumentReference([$receiptReference]);

        return $this;
    }

    /**
     * Sets a tender or lot reference
     *
     * @param string $referenceNo
     * The identification of the call for tender or lot the invoice relates to.
     * @return UblDocumentBuilder
     */
    public function setDocumentOriginatorReference(string $referenceNo): UblDocumentBuilder
    {
        $originatorReference = new OriginatorDocumentReference();
        $originatorReference->setID(new ID($referenceNo));

        $this->invoiceObject->setOriginatorDocumentReference([$originatorReference]);

        return $this;
    }

    /**
     * Sets the contract reference
     *
     * @param string $referenceNo
     * The identification of a contract.
     * @return UblDocumentBuilder
     */
    public function setDocumentContractReference(string $referenceNo): UblDocumentBuilder
    {
        $contractReference = new ContractDocumentReference();
        $contractReference->setID(new ID($referenceNo));

        $this->invoiceObject->setContractDocumentReference([$contractReference]);

        return $this;
    }

    /**
     * Removes all additional supporting documents
     *
     * @return UblDocumentBuilder
     */
    public function clearDocumentAdditionalReference(): UblDocumentBuilder
    {
        $this->invoiceObject->setAdditionalDocumentReference([]);

        return $this;
    }

    /**
     * Add an additional supporting document
     *
     * @param string $referenceNo
     * An identifier for an object on which the invoice is based, given by the Seller, or the
     * identifier for the supporting document.
     * @param string $referenceScheme
     * The identification scheme identifier of the Invoiced object identifier.
     * @param string $documentTypeCode
     * Code "130" MUST be used to indicate an invoice object reference. Not used for other additional documents
     * @param string $documentDescription
     * A description of the supporting document, such as: timesheet, usage report etc.
     * @return UblDocumentBuilder
     */
    public function addDocumentAdditionalReference(string $referenceNo, string $referenceScheme = "", string $documentTypeCode = "", string $documentDescription = ""): UblDocumentBuilder
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
     * @param string $filenameToAttach
     * File containing binary data. The file MUST exist.
     * @return UblDocumentBuilder
     */
    public function setFileAttachmentToAdditionalReference(string $filenameToAttach): UblDocumentBuilder
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
     * @param string $referenceNo
     * The identification of the project the invoice refers to.
     * @return UblDocumentBuilder
     */
    public function setDocumentProjectReference(string $referenceNo): UblDocumentBuilder
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
     * @param string $uriId
     * The URL (Uniform Resource Locator) that identifies where the external document is located. A means
     * of locating the resource, including its primary access mechanism, e.g. http:// or ftp://.
     * Example value: http://www.example.com/index.html
     * @return UblDocumentBuilder
     */
    public function setExternalAttachmentToAdditionalReference(string $uriId): UblDocumentBuilder
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
     * @return UblDocumentBuilder
     */
    public function initDocumentSeller(): UblDocumentBuilder
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
     * @param string $endpointId
     * Identifies the Seller's electronic address to which the application level response to the
     * invoice may be delivered.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerEndpointId(string $endpointId, string $endpointSchemeId): UblDocumentBuilder
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
     * @param string $id
     * This element is used for both the identification of the Seller, or the unique banking reference identifier
     * of Seller (assigned by the Seller bank.). For seller identification use ICD code list, for SEPA bank assigned
     * creditor reference, use SEPA. In order for the buyer to automatically identify a supplier, the Seller
     * identifier (BT-29), the Seller legal registration identifier (BT-30) and/or the Seller VAT identifier (BT-31)
     * shall be present
     * @param string $idSchemeid
     * The identification scheme identifier of the Seller identifier. For bank assigned creditor identifier (BT-90),
     * value MUST be "SEPA"
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerIdentification(string $id, string $idSchemeid = ""): UblDocumentBuilder
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
     * @param string $name
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerName(string $name): UblDocumentBuilder
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
     * @param string $streetName1
     * The main address line in an address.
     * __Example value__: Main Street 1
     * @param string $streetName2
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Po Box 351
     * @param string $streetName3
     * An additional address line in an address that can be used to give further details supplementing the main line.
     * __Example value__: Building 23
     * @param string $cityName
     * The common name of the city, town or village, where the Seller address is located.
     * __Example value__: London
     * @param string $cityPostCode
     * The identifier for an addressable group of properties according to the relevant postal service.
     * __Example value__: W1G 8LZ
     * @param string $countyName
     * The subdivision of a country.
     * __Example value__: Region A
     * @param string $countryId
     * A code that identifies the country.
     * __Example value__: GB
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerPostalAddress(string $streetName1, string $streetName2, string $streetName3, string $cityName, string $cityPostCode, string $countyName, string $countryId): UblDocumentBuilder
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
     * @param string $vatIdentifier
     * The Seller's VAT identifier (also known as Seller VAT identification number)
     * __Example value__: NO999888777
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerVATIdentifier(string $vatIdentifier): UblDocumentBuilder
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
     * @param string $taxRegistration
     * the local identification (defined by the Seller’s address) of the Seller for tax purposes or a reference
     * that enables the Seller to state his registered tax status. In order for the buyer to automatically identify
     * a supplier
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRegistration(string $taxRegistration): UblDocumentBuilder
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
     * @param string $registrationName
     * The full formal name by which the Seller is registered in the national registry of legal entities or as a Taxable
     * person or otherwise trades as a person or persons.
     * __Example value__: Full Formal Seller Name LTD.
     * @param string $companyId
     * An identifier issued by an official registrar that identifies the Seller as a legal entity or person. In order for
     * the buyer to automatically identify a supplier, the Seller identifier (BT-29), the Seller legal registration
     * identifier (BT-30) and/or the Seller VAT identifier (BT-31) shall be present
     * __Example value__: HRB 123
     * @param string $companyIdSchemeId
     * The identification scheme identifier of the Seller legal registration identifier.
     * __Example value__: 0002
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerLegalEntity(string $registrationName, string $companyId = "", string $companyIdSchemeId = ""): UblDocumentBuilder
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
     * @param string $contactName
     * A contact point for a legal entity or person.
     * __Example value__: xyz123
     * @param string $contactPhone
     * A phone number for the contact point.
     * __Example value__: 887 654 321
     * @param string $contactElectronicMail
     * An e-mail address for the contact point.
     * __Example value__: test.name@foo.bar
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerContact(string $contactName, string $contactPhone, string $contactElectronicMail): UblDocumentBuilder
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
     * Creates a new instance of the invoice class
     *
     * @return UblDocumentBuilder
     * @codeCoverageIgnore
     */
    private function initInvoiceObject(): UblDocumentBuilder
    {
        // Create the internal invoice object
        $this->invoiceObject = new Invoice();

        // Initialize some defaults
        $this->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
        $this->setDocumentProfile("urn:fdc:peppol.eu:2017:poacc:billing:01:1.0");
        $this->setDocumentType("380");

        return $this;
    }
}
