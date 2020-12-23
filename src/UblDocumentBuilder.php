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
use \horstoeko\ubl\entities\cac\CommodityClassification;
use \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric;
use \horstoeko\ubl\entities\cac\BuyersItemIdentification;
use \horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use horstoeko\ubl\entities\cac\DespatchDocumentReference;
use \horstoeko\ubl\entities\cac\SellersItemIdentification;
use \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode;
use \horstoeko\ubl\entities\cac\FinancialInstitutionBranch;
use \horstoeko\ubl\entities\cac\StandardItemIdentification;
use \horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use horstoeko\ubl\entities\cac\ContractDocumentReference;
use horstoeko\ubl\entities\cac\OriginatorDocumentReference;
use horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;
use horstoeko\ubl\entities\cct\BinaryObjectType;

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
     */
    public function getInvoiceObject(): Invoice
    {
        return $this->invoiceObject;
    }

    /**
     * Returns the currently created document position (invoice line)
     *
     * @return InvoiceLine|null
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
     * Creates a new instance of the invoice class
     *
     * @return UblDocumentBuilder
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
