<?php

/**
 * This file is a part of horstoeko/ubl.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace horstoeko\ubl;

use \DateTime;
use \horstoeko\ubl\entities\cbc\ID;
use \horstoeko\ubl\entities\cbc\URI;
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
use \horstoeko\ubl\entities\cbc\TaxAmount;
use \horstoeko\ubl\entities\cbc\Telephone;
use \horstoeko\ubl\entities\cbc\BaseAmount;
use \horstoeko\ubl\entities\cac\Attachment;
use \horstoeko\ubl\entities\cbc\HolderName;
use \horstoeko\ubl\entities\cbc\PostalZone;
use \horstoeko\ubl\entities\cbc\StreetName;
use \MimeTyper\Repository\MimeDbRepository;
use \horstoeko\ubl\entities\cac\InvoiceLine;
use \horstoeko\ubl\entities\cbc\Description;
use \horstoeko\ubl\entities\cbc\PriceAmount;
use \horstoeko\stringmanagement\StringUtils;
use \horstoeko\ubl\entities\cac\CardAccount;
use \horstoeko\ubl\entities\cac\TaxCategory;
use \horstoeko\ubl\entities\cac\TaxSubtotal;
use \horstoeko\ubl\entities\cac\PaymentTerms;
use \horstoeko\ubl\entities\cbc\BaseQuantity;
use \horstoeko\ubl\entities\cac\PaymentMeans;
use \horstoeko\ubl\entities\cbc\SalesOrderID;
use \horstoeko\ubl\entities\cac\OriginCountry;
use \horstoeko\ubl\entities\cbc\PayableAmount;
use \horstoeko\ubl\entities\cbc\PrepaidAmount;
use \horstoeko\ubl\entities\cbc\TaxableAmount;
use \horstoeko\ubl\entities\cbc\AccountingCost;
use \horstoeko\ubl\entities\cac\OrderReference;
use \horstoeko\ubl\entities\cac\PartyTaxScheme;
use \horstoeko\ubl\entities\cac\PaymentMandate;
use \horstoeko\ubl\entities\cbc\BuyerReference;
use \horstoeko\ubl\entities\cbc\ElectronicMail;
use \horstoeko\ubl\entities\cac\AllowanceCharge;
use \horstoeko\ubl\entities\cbc\SequenceNumeric;
use \horstoeko\ubl\entities\cbc\CustomizationID;
use \horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use \horstoeko\ubl\entities\cbc\InvoicedQuantity;
use \horstoeko\ubl\entities\cac\BillingReference;
use \horstoeko\ubl\entities\cbc\CountrySubentity;
use \horstoeko\ubl\entities\cbc\DocumentTypeCode;
use \horstoeko\ubl\entities\cbc\PaymentMeansCode;
use \horstoeko\ubl\entities\cbc\RegistrationName;
use \horstoeko\ubl\entities\cbc\ChargeTotalAmount;
use \horstoeko\ubl\entities\cac\ExternalReference;
use \horstoeko\ubl\entities\cac\LegalMonetaryTotal;
use \horstoeko\ubl\entities\cbc\TaxExclusiveAmount;
use \horstoeko\ubl\entities\cbc\TaxExemptionReason;
use \horstoeko\ubl\entities\cbc\TaxInclusiveAmount;
use \horstoeko\ubl\entities\cbc\IdentificationCode;
use \horstoeko\ubl\entities\cbc\LineExtensionAmount;
use \horstoeko\ubl\entities\cac\PartyIdentification;
use \horstoeko\ubl\entities\cbc\DocumentDescription;
use \horstoeko\ubl\entities\cbc\AllowanceTotalAmount;
use \horstoeko\ubl\entities\cbc\AdditionalStreetName;
use \horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use \horstoeko\ubl\entities\cac\ClassifiedTaxCategory;
use \horstoeko\ubl\entities\cbc\AllowanceChargeReason;
use \horstoeko\ubl\entities\cbc\PayableRoundingAmount;
use \horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use \horstoeko\ubl\entities\cac\PayerFinancialAccount;
use \horstoeko\ubl\entities\cac\AdditionalItemProperty;
use \horstoeko\ubl\entities\cbc\ItemClassificationCode;
use \horstoeko\ubl\entities\cbc\TaxExemptionReasonCode;
use \horstoeko\ubl\entities\cbc\PrimaryAccountNumberID;
use \horstoeko\ubl\entities\cac\CommodityClassification;
use \horstoeko\ubl\entities\cac\BuyersItemIdentification;
use \horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use \horstoeko\ubl\entities\cac\SellersItemIdentification;
use \horstoeko\ubl\entities\cbc\AllowanceChargeReasonCode;
use \horstoeko\ubl\entities\cac\StandardItemIdentification;
use \horstoeko\ubl\entities\cac\FinancialInstitutionBranch;
use \horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use \horstoeko\ubl\entities\cac\AddressLine;
use \horstoeko\ubl\entities\cbc\CompanyLegalForm;
use \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;
use \horstoeko\ubl\entities\cbc\EndpointID;
use \horstoeko\ubl\entities\cbc\Line;
use \horstoeko\ubl\entities\cbc\MultiplierFactorNumeric;
use \horstoeko\ubl\entities\cbc\PaymentID;
use \horstoeko\ubl\entities\cbc\ProfileID;
use \horstoeko\ubl\entities\cbc\TaxCurrencyCode;

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
     * @internal
     * The internal reference to the builder helper (tool)
     * @var      \horstoeko\ubl\UblDocumentBuilderHelper
     */
    protected $ublBuilderHelper = null;

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
        $this->initBuilderHelper();
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
     * @return UblDocument
     */
    public function writeFile(string $xmlfilename): UblDocument
    {
        file_put_contents($xmlfilename, $this->getContent());
        return $this;
    }

    /**
     * Sets the identifier for the customization
     *
     * @param  string|null $customization
     * The identifier for the customization
     * @return UblDocumentBuilder
     */
    public function setDocumentCustomization(?string $customization = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($customization)) {
            $this->invoiceObject->setCustomizationID(new CustomizationID($customization));
        }

        return $this;
    }

    /**
     * Set Profile
     *
     * @param  string|null $profileId
     * @return UblDocumentBuilder
     */
    public function setDocumentProfile(?string $profileId = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($profileId)) {
            $this->invoiceObject->setProfileID(new ProfileID($profileId));
        }

        return $this;
    }

    /**
     * Set main information about this document
     *
     * @param  string        $documentno
     * The document no issued by the seller
     * @param  string        $documenttypecode
     * The type of the document, See \horstoeko\codelists\ZugferdInvoiceType for details
     * @param  DateTime      $documentdate         Date of invoice
     *                                             The date when
     *                                             the document
     *                                             was issued by
     *                                             the seller
     * @param  string        $documentCurrencyCode Code for the invoice currency
     *                                             The code for the invoice
     *                                             currency
     * @param  DateTime|null $dueDate
     * The date by which payment is due Note: The payment due date reflects the net payment due
     * date. In the case of partial payments, this indicates the first due date of a net payment.
     * The corresponding description of more complex payment terms can be given in BT-20.
     * @param  DateTime|null $taxPointDate
     * The date when the VAT becomes accountable for the Seller and for the Buyer in so far as
     * that date can be determined and differs from the date of issue of the invoice, according
     * to the VAT directive.This element is required if the Value added tax point date is different
     * from the Invoice issue date.
     * @return UblDocumentBuilder
     */
    public function setDocumentInformation(string $documentno, string $documenttypecode, DateTime $documentdate, string $documentCurrencyCode, ?string $taxCurrencyCode = null, ?DateTime $dueDate = null, ?DateTime $taxPointDate = null): UblDocumentBuilder
    {
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentno, "Invoice number must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documenttypecode, "Invoice type code must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentdate, "Invoice issue date must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentCurrencyCode, "Invoice currency code must not be empty");

        $this->invoiceObject->setID(new Id($documentno));
        $this->invoiceObject->setInvoiceTypeCode(new InvoiceTypeCode($documenttypecode));
        $this->invoiceObject->setIssueDate($documentdate);
        $this->invoiceObject->setDocumentCurrencyCode(new DocumentCurrencyCode($documentCurrencyCode));
        $this->invoiceObject->setTaxCurrencyCode(new TaxCurrencyCode(StringUtils::stringIsNullOrEmpty($taxCurrencyCode) ? $documentCurrencyCode : $taxCurrencyCode));

        if ($dueDate != null) {
            $this->invoiceObject->setDueDate($dueDate);
        }

        if ($taxPointDate != null) {
            $this->invoiceObject->setTaxPointDate($taxPointDate);
        }

        return $this;
    }

    /**
     * Adds a note to the document
     *
     * @param  string $note
     * The free-text to add as a document note
     * @return UblDocumentBuilder
     */
    public function addDocumentNote(string $note): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($note)) {
            $this->invoiceObject->addToNote(new Note($note));
        }

        return $this;
    }

    /**
     * Mark document as a copy from the original one
     *
     * @return UblDocumentBuilder
     */
    public function setIsDocumentCopy(): UblDocumentBuilder
    {
        $this->invoiceObject->setCopyIndicator(true);

        return $this;
    }

    /**
     * Document money summation
     *
     * @param  float      $grandTotalAmount     Total invoice amount including sales tax
     * @param  float      $duePayableAmount     Payment amount due
     * @param  float      $lineTotalAmount      Sum of the net amounts of all invoice items
     * @param  float|null $chargeTotalAmount    Sum of the surcharges at document level
     * @param  float|null $allowanceTotalAmount Sum of the discounts at document level
     * @param  float|null $taxBasisTotalAmount  Total invoice amount excluding sales tax
     * @param  float|null $taxTotalAmount       Total amount of the invoice sales tax, Total tax amount in the booking currency
     * @param  float|null $roundingAmount       Rounding amount
     * @param  float|null $totalPrepaidAmount   Prepayment amount
     * @return UblDocumentBuilder
     */
    public function setDocumentSummation(float $grandTotalAmount, float $duePayableAmount, ?float $lineTotalAmount = null, ?float $chargeTotalAmount = null, ?float $allowanceTotalAmount = null, ?float $taxBasisTotalAmount = null, ?float $taxTotalAmount = null, ?float $roundingAmount = null, ?float $totalPrepaidAmount = null): UblDocumentBuilder
    {
        $total = new LegalMonetaryTotal();

        $total->setLineExtensionAmount((new LineExtensionAmount($lineTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        $total->setTaxExclusiveAmount((new TaxExclusiveAmount($lineTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        $total->setTaxInclusiveAmount((new TaxInclusiveAmount($grandTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        $total->setPayableAmount((new PayableAmount($duePayableAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));

        if ($chargeTotalAmount !== null) {
            $total->setChargeTotalAmount((new ChargeTotalAmount($chargeTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        }
        if ($allowanceTotalAmount !== null) {
            $total->setAllowanceTotalAmount((new AllowanceTotalAmount($allowanceTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        }
        if ($roundingAmount !== null) {
            $total->setPayableRoundingAmount((new PayableRoundingAmount($roundingAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        }
        if ($totalPrepaidAmount !== null) {
            $total->setPrepaidAmount((new PrepaidAmount($totalPrepaidAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        }

        $this->invoiceObject->setLegalMonetaryTotal($total);

        return $this;
    }

    /**
     * An identifier assigned by the buyer and used for internal routing.
     *
     * __Note__: The reference is specified by the buyer (e.g. contact details, department, office ID, project code),
     * but stated by the seller on the invoice.
     *
     * __Note__: The route ID must be specified in the Buyer Reference (BT-10) in the XRechnung. According to the XRechnung
     * standard, two syntaxes are permitted for displaying electronic invoices: Universal Business Language (UBL) and UN/CEFACT
     * Cross Industry Invoice (CII).
     *
     * @param  string|null $buyerreference
     * An identifier assigned by the buyer and used for internal routing
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerReference(?string $buyerreference = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($buyerreference)) {
            $this->invoiceObject->setBuyerReference(new BuyerReference($buyerreference));
        }

        return $this;
    }

    /**
     * Detailed information about the seller (=service provider)
     *
     * @param  string|null $name     The full formal name under which the seller is registered in the
     *                               National Register of Legal Entities, Taxable Person or otherwise
     *                               acting as person(s)
     * @param  string|null $id
     * An identifier of the seller. In many systems, seller identification
     * is key information. Multiple seller IDs can be assigned or specified. They can be differentiated
     * by using different identification schemes. If no scheme is given, it should be known to the buyer
     * and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @param  string|null $idscheme
     * The scheme identifier for the $id
     * @return UblDocumentBuilder
     */
    public function setDocumentSeller(?string $name = null, ?string $id = null, ?string $idscheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $partyName = $this->ublBuilderHelper->ensureAccountingSupplierPartyPartyName();
            $partyName->setName(new Name($name));
        }

        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $partyIdentification = $this->ublBuilderHelper->ensureAccountingSupplierPartyPartyIdentification();
            $partyIdentification->setID(new ID($id));
            if (!StringUtils::stringIsNullOrEmpty($id)) {
                $partyIdentification->getId()->setSchemeID($idscheme);
            }
        }

        return $this;
    }

    /**
     * Seller electronic address
     *
     * @param  string|null $endpoint
     * Identifies the Seller's electronic address to which the application level response to the invoice
     * may be delivered.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerEndpointID(?string $endpoint = null, ?string $endpointScheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($endpoint) && !StringUtils::stringIsNullOrEmpty($endpointScheme)) {
            $party = $this->ublBuilderHelper->ensureAccountingSupplierParty();
            $party->setEndpointID((new EndpointID($endpoint))->setSchemeID($endpointScheme));
        }

        return $this;
    }

    /**
     * Add a global id for the seller
     *
     * __Notes__
     *
     * - The Seller's ID identification scheme is a unique identifier
     *   assigned to a seller by a global registration organization
     *
     * @param  string|null $globalID
     * The seller's identifier identification scheme is an identifier uniquely assigned to a seller by a
     * global registration organization.
     * @param  string|null $globalIDType
     * If the identifier is used for the identification scheme, it must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID) && !StringUtils::stringIsNullOrEmpty($globalIDType)) {
            $party = $this->ublBuilderHelper->ensureAccountingSupplierParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add detailed information on the seller's tax information
     *
     * The local identification (defined by the seller's address) of the seller for tax purposes or a reference that enables the seller
     * to indicate his reporting status for tax purposes The sales tax identification number of the seller
     * Note: This information may affect how the buyer the invoice settled (such as in relation to social security contributions). So
     * e.g. In some countries, if the seller is not reported for tax, the buyer will withhold the tax amount and pay it on behalf of the
     * seller. Sales tax number with a prefixed country code. A supplier registered as subject to VAT must provide his sales tax
     * identification number, unless he uses a tax agent.
     *
     * @param  string|null $taxregtype Type of tax number of the seller
     * @param  string|null $taxregid   Tax number of the seller or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && !StringUtils::stringIsNullOrEmpty($taxregid)) {
            $party = $this->ublBuilderHelper->ensureAccountingSupplierParty();
            $party->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets detailed information on the business address of the seller
     *
     * @param  string|null $lineone
     * The main line in the sellers address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the seller's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the seller's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the seller's address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The sellers state
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineone)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setStreetName(new StreetName($lineone));
        }
        if (!StringUtils::stringIsNullOrEmpty($linetwo)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        }
        if (!StringUtils::stringIsNullOrEmpty($linethree)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->addToAddressLine((new AddressLine())->setLine(new Line($linethree)));
        }
        if (!StringUtils::stringIsNullOrEmpty($postcode)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setPostalZone(new PostalZone($postcode));
        }
        if (!StringUtils::stringIsNullOrEmpty($city)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setCityName(new CityName($city));
        }
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        }
        if (!StringUtils::stringIsNullOrEmpty($subdivision)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingSupplierPartyPostalAddress();
            $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));
        }

        return $this;
    }

    /**
     * Set Organization details
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * seller as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer and seller
     * @param  string|null $legalorgtype
     * The identifier for the identification scheme of the legal
     * registration of the seller. If the identification scheme is used, it must be selected from
     * ISO/IEC 6523 list
     * @param  string|null $legalorgname
     * A name by which the seller is known, if different from the seller's name (also known as
     * the company name). Note: This may be used if different from the seller's name.
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null, ?string $legalform = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() !== null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalform)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            $partyLegalEntity->setCompanyLegalForm(new CompanyLegalForm($legalform));
        }

        return $this;
    }

    /**
     * Set detailed information on the seller's contact person
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity,
     * such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the seller's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the seller's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the seller's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerContact(?string $contactpersonname = null, ?string $contactdepartmentname = null, ?string $contactphoneno = null, ?string $contactfaxno = null, ?string $contactemailadd = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensureAccountingSupplierPartyContact();
            $contact->setName(new Name($contactpersonname));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactphoneno)) {
            $contact = $this->ublBuilderHelper->ensureAccountingSupplierPartyContact();
            $contact->setTelephone(new Telephone($contactphoneno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactfaxno)) {
            $contact = $this->ublBuilderHelper->ensureAccountingSupplierPartyContact();
            $contact->setTelefax(new Telefax($contactfaxno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactemailadd)) {
            $contact = $this->ublBuilderHelper->ensureAccountingSupplierPartyContact();
            $contact->setElectronicMail(new ElectronicMail($contactemailadd));
        }

        return $this;
    }

    /**
     * Detailed information about the buyer (service recipient)
     *
     * @param  string|null $name
     * The full name of the buyer
     * @param  string|null $id
     * An identifier of the buyer. In many systems, buyer identification is key information. Multiple buyer IDs can be
     * assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given,
     * it should be known to the buyer and buyer, e.g. a previously exchanged, seller-assigned identifier of the buyer
     * @param  string|null $idscheme
     * The scheme identifier for the $id
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyer(?string $name = null, ?string $id = null, ?string $idscheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $partyName = $this->ublBuilderHelper->ensureAccountingCustomerPartyPartyName();
            $partyName->setName(new Name($name));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $partyIdentification = $this->ublBuilderHelper->ensureAccountingCustomerPartyPartyIdentification();
            $partyIdentification->setID(new ID($id));
            if (!StringUtils::stringIsNullOrEmpty($id)) {
                $partyIdentification->getId()->setSchemeID($idscheme);
            }
        }

        return $this;
    }

    /**
     * Buyer electronic address
     *
     * @param  string|null $endpoint
     * Identifies the Buyer's electronic address to which the invoice is delivered.
     * @param  string|null $endpointScheme
     * The identification scheme identifier of the Buyer electronic address.
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerEndpointID(?string $endpoint = null, ?string $endpointScheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($endpoint) && !StringUtils::stringIsNullOrEmpty($endpointScheme)) {
            $party = $this->ublBuilderHelper->ensureAccountingCustomerParty();
            $party->setEndpointID((new EndpointID($endpoint))->setSchemeID($endpointScheme));
        }

        return $this;
    }

    /**
     * Add a global id for the buyer
     *
     * @param  string|null $globalID
     * The buyers's identifier identification scheme is an identifier uniquely assigned to a buyer by a
     * global registration organization.
     * @param  string|null $globalIDType
     * If the identifier is used for the identification scheme, it must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentBuyerGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID) && !StringUtils::stringIsNullOrEmpty($globalIDType)) {
            $party = $this->ublBuilderHelper->ensureAccountingCustomerParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add detailed information on the buyers's tax information
     *
     * The local identification (defined by the buyers's address) of the buyers for tax purposes or a reference that enables the buyers
     * to indicate his reporting status for tax purposes The sales tax identification number of the buyers
     * Note: This information may affect how the buyer the invoice settled (such as in relation to social security contributions). So
     * e.g. In some countries, if the buyers is not reported for tax, the buyer will withhold the tax amount and pay it on behalf of the
     * buyers. Sales tax number with a prefixed country code. A supplier registered as subject to VAT must provide his sales tax
     * identification number, unless he uses a tax agent.
     *
     * @param  string|null $taxregtype
     * Type of tax number of the buyers
     * @param  string|null $taxregid
     * Tax number of the buyers or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentBuyerTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && !StringUtils::stringIsNullOrEmpty($taxregid)) {
            $party = $this->ublBuilderHelper->ensureAccountingCustomerParty();
            $party->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets detailed information on the business address of the buyer
     *
     * @param  string|null $lineone
     * The main line in the buyers address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the buyers address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the buyers address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the buyers address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The buyers state
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineone)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setStreetName(new StreetName($lineone));
        }
        if (!StringUtils::stringIsNullOrEmpty($linetwo)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        }
        if (!StringUtils::stringIsNullOrEmpty($linethree)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->addToAddressLine((new AddressLine())->setLine(new Line($linethree)));
        }
        if (!StringUtils::stringIsNullOrEmpty($postcode)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setPostalZone(new PostalZone($postcode));
        }
        if (!StringUtils::stringIsNullOrEmpty($city)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setCityName(new CityName($city));
        }
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        }
        if (!StringUtils::stringIsNullOrEmpty($subdivision)) {
            $postalAddress = $this->ublBuilderHelper->ensureAccountingCustomerPostalAddress();
            $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));
        }

        return $this;
    }

    /**
     * Set legal organisation of the buyer party
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * buyer as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer and buyer
     * @param  string|null $legalorgtype
     * The identifier for the identification scheme of the legal
     * registration of the buyer. If the identification scheme is used, it must be selected from
     * ISO/IEC 6523 list
     * @param  string|null $legalorgname
     * A name by which the buyer is known, if different from the buyers name
     * (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null, ?string $legalform = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            if ($partyLegalEntity->getCompanyID() !== null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalform)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            $partyLegalEntity->setCompanyLegalForm(new CompanyLegalForm($legalform));
        }

        return $this;
    }

    /**
     * Set contact of the buyer party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the buyer's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the buyer's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the buyer's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerContact(?string $contactpersonname = null, ?string $contactdepartmentname = null, ?string $contactphoneno = null, ?string $contactfaxno = null, ?string $contactemailadd = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensureAccountingCustomerContact();
            $contact->setName(new Name($contactpersonname));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactphoneno)) {
            $contact = $this->ublBuilderHelper->ensureAccountingCustomerContact();
            $contact->setTelephone(new Telephone($contactphoneno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactfaxno)) {
            $contact = $this->ublBuilderHelper->ensureAccountingCustomerContact();
            $contact->setTelefax(new Telefax($contactfaxno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactemailadd)) {
            $contact = $this->ublBuilderHelper->ensureAccountingCustomerContact();
            $contact->setElectronicMail(new ElectronicMail($contactemailadd));
        }

        return $this;
    }

    /**
     * Sets the sellers tax representative trade party
     *
     * @param  string|null $name
     * The full name of the seller's tax agent
     * @param  string|null $id
     * An identifier of the sellers tax agent.
     * @param  string|null $idscheme
     * The scheme identifier for the $id
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentative(?string $name = null, ?string $id = null, ?string $idscheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $partyName = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPartyName();
            $partyName->setName(new Name($name));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $partyIdentification = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPartyIdentification();
            $partyIdentification->setID(new ID($id));
            if (!StringUtils::stringIsNullOrEmpty($id)) {
                $partyIdentification->getId()->setSchemeID($idscheme);
            }
        }

        return $this;
    }

    /**
     * Add a global id for the Tax representative party
     *
     * @param  string|null $globalID
     * The seller's tax agent identifier identification scheme is an identifier uniquely assigned to a seller by a
     * global registration organization.
     * @param  string|null $globalIDType
     * If the identifier is used for the identification scheme, it must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerTaxRepresentativeGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID) && !StringUtils::stringIsNullOrEmpty($globalIDType)) {
            $taxRepresentativeParty = $this->ublBuilderHelper->ensureTaxRepresentativeTradeParty();
            $taxRepresentativeParty->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add Tax registration to tax representative party
     *
     * @param  string|null $taxregtype
     * @param  string|null $taxregid
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerTaxRepresentativeTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && !StringUtils::stringIsNullOrEmpty($taxregid)) {
            $taxRepresentativeParty = $this->ublBuilderHelper->ensureTaxRepresentativeTradeParty();
            $taxRepresentativeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets the postal address of the tax representative party
     *
     * @param  string|null $lineone
     * The main line in the sellers tax agent address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the sellers tax agent address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the sellers tax agent address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the sellers tax agent address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The sellers tax agent state
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineone)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setStreetName(new StreetName($lineone));
        }
        if (!StringUtils::stringIsNullOrEmpty($linetwo)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        }
        if (!StringUtils::stringIsNullOrEmpty($linethree)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->addToAddressLine((new AddressLine())->setLine(new Line($linethree)));
        }
        if (!StringUtils::stringIsNullOrEmpty($postcode)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setPostalZone(new PostalZone($postcode));
        }
        if (!StringUtils::stringIsNullOrEmpty($city)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setCityName(new CityName($city));
        }
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        }
        if (!StringUtils::stringIsNullOrEmpty($subdivision)) {
            $postalAddress = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyPostalAddress();
            $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));
        }

        return $this;
    }

    /**
     * Set legal organisation of the tax representative party
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the seller tax agent as
     * a legal entity or legal person.
     * @param  string|null $legalorgtype
     * The identifier for the identification scheme of the legal registration of the sellers tax
     * agent. If the identification scheme is used, it must be selected from  ISO/IEC 6523 list
     * @param  string|null $legalorgname
     * A name by which the sellers tax agent is known, if different from the  sellers tax agent
     * name (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null, ?string $legalform = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() !== null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalform)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            $partyLegalEntity->setCompanyLegalForm(new CompanyLegalForm($legalform));
        }

        return $this;
    }

    /**
     * Set contact of the tax representative party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the seller's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the seller's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the seller's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeContact(?string $contactpersonname = null, ?string $contactdepartmentname = null, ?string $contactphoneno = null, ?string $contactfaxno = null, ?string $contactemailadd = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyContact();
            $contact->setName(new Name($contactpersonname));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactphoneno)) {
            $contact = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyContact();
            $contact->setTelephone(new Telephone($contactphoneno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactfaxno)) {
            $contact = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyContact();
            $contact->setTelefax(new Telefax($contactfaxno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactemailadd)) {
            $contact = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyContact();
            $contact->setElectronicMail(new ElectronicMail($contactemailadd));
        }

        return $this;
    }

    // TODO: Product enduser goes here....

    /**
     * Ship-To
     *
     * @param  string|null $name
     * The name of the party to whom the goods are being delivered or for whom the services are being
     * performed. Must be used if the recipient of the goods or services is not the same as the buyer.
     * @param  string|null $id
     * An identifier for the place where the goods are delivered or where the services are provided.
     * Multiple IDs can be assigned or specified. They can be differentiated by using different
     * identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g.
     * a previously exchanged identifier assigned by the buyer or seller.
     * @param  string|null $idscheme
     * The scheme identifier for the $id
     * @return UblDocumentBuilder
     */
    public function setDocumentShipTo(?string $name = null, ?string $id = null, ?string $idscheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $partyName = $this->ublBuilderHelper->ensureDeliveryPartyPartyName();
            $partyName->setName(new Name($name));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $location = $this->ublBuilderHelper->ensureDeliveryLocation();
            if (!StringUtils::stringIsNullOrEmpty($idscheme)) {
                $location->setID((new ID($id))->setSchemeID($idscheme));
            } else {
                $location->setID(new ID($id));
            }
        }

        return $this;
    }

    /**
     * Add a global id for the Ship-to Trade Party
     *
     * @param  string|null $globalID
     * Global identifier of the goods recipient
     * @param  string|null $globalIDType
     * Type of global identification number, must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentShipToGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID)) {
            $party = $this->ublBuilderHelper->ensureDeliveryParty();
            if (!StringUtils::stringIsNullOrEmpty($globalIDType)) {
                $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
            } else {
                $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))));
            }
        }

        return $this;
    }

    /**
     * Add Tax registration to Ship-To Trade party
     *
     * @param  string|null $taxregtype
     * Type of tax number of the party
     * @param  string|null $taxregid
     * Tax number of the party or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentShipToTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && !StringUtils::stringIsNullOrEmpty($taxregid)) {
            $party = $this->ublBuilderHelper->ensureDeliveryParty();
            $party->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets the postal address of the Ship-To party
     *
     * @param  string|null $lineone
     * The main line in the party's address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the party's address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The party's state
     * @return UblDocumentBuilder
     */
    public function setDocumentShipToAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineone)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setStreetName(new StreetName($lineone));
        }
        if (!StringUtils::stringIsNullOrEmpty($linetwo)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        }
        if (!StringUtils::stringIsNullOrEmpty($linethree)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->addToAddressLine((new AddressLine())->setLine(new Line($linethree)));
        }
        if (!StringUtils::stringIsNullOrEmpty($postcode)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setPostalZone(new PostalZone($postcode));
        }
        if (!StringUtils::stringIsNullOrEmpty($city)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setCityName(new CityName($city));
        }
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        }
        if (!StringUtils::stringIsNullOrEmpty($subdivision)) {
            $deliveryAddress = $this->ublBuilderHelper->ensureDeliveryLocationAddress();
            $deliveryAddress->setCountrySubentity(new CountrySubentity($subdivision));
        }

        return $this;
    }

    /**
     * Set legal organisation of the Ship-To party
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param  string|null $legalorgtype The identifier for the identification scheme of the legal
     *                                   registration of the party. In particular, the following scheme codes are used: 0021 : SWIFT, 0088 : EAN,
     *                                   0060 : DUNS, 0177 : ODETTE
     * @param  string|null $legalorgname A name by which the party is known, if different from the party's name
     *                                   (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentShipToLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null, ?string $legalform = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() !== null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalform)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            $partyLegalEntity->setCompanyLegalForm(new CompanyLegalForm($legalform));
        }

        return $this;
    }

    /**
     * Set contact of the Ship-To party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the party's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentShipToContact(?string $contactpersonname = null, ?string $contactdepartmentname = null, ?string $contactphoneno = null, ?string $contactfaxno = null, ?string $contactemailadd = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensureDeliveryPartyContact();
            $contact->setName(new Name($contactpersonname));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactphoneno)) {
            $contact = $this->ublBuilderHelper->ensureDeliveryPartyContact();
            $contact->setTelephone(new Telephone($contactphoneno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactfaxno)) {
            $contact = $this->ublBuilderHelper->ensureDeliveryPartyContact();
            $contact->setTelefax(new Telefax($contactfaxno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactemailadd)) {
            $contact = $this->ublBuilderHelper->ensureDeliveryPartyContact();
            $contact->setElectronicMail(new ElectronicMail($contactemailadd));
        }

        return $this;
    }

    /**
     * Set the date on which the supply of goods or services was made or completed
     *
     * @param  DateTime|null $shipmentDate
     * The date on which the supply of goods or services was made or completed
     * @return UblDocumentBuilder
     */
    public function setDocumentShipmentDate(?DateTime $shipmentDate = null): UblDocumentBuilder
    {
        if ($shipmentDate !== null) {
            $delivery = $this->ublBuilderHelper->ensureDelivery();
            $delivery->setActualDeliveryDate($shipmentDate);
        }

        return $this;
    }

    // TODO: UltimateShipTo goes here...

    // TODO: ShipFrom goes here...

    // TODO: Invoicer goes here...

    // TODO: Invoicee goes here

    /**
     * Set detailed information about the payee, i.e. about the place that receives the payment.
     * The role of the payee may also be performed by a party other than the seller, e.g. by a factoring service.
     *
     * @param  string|null $name
     * The name of the party. Must be used if the payee is not the same as the seller. However, the name of the
     * payee may match the name of the seller.
     * @param  string|null $id
     * An identifier for the party. Multiple IDs can be assigned or specified. They can be differentiated by using
     * different identification schemes. If no scheme is given, it should  be known to the buyer and seller, e.g.
     * a previously exchanged identifier assigned by the buyer or seller.
     * @param  string|null $idscheme
     * The scheme identifier for the $id
     * @return UblDocumentBuilder
     */
    public function setDocumentPayee(?string $name = null, ?string $id = null, ?string $idscheme = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $partyName = $this->ublBuilderHelper->ensurePayeePartyPartyName();
            $partyName->setName(new Name($name));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $partyIdentification = $this->ublBuilderHelper->ensurePayeePartyPartyIdentification();
            $partyIdentification->setID(new ID($id));
            if (!StringUtils::stringIsNullOrEmpty($id)) {
                $partyIdentification->getId()->setSchemeID($idscheme);
            }
        }

        return $this;
    }

    /**
     * Add a global id for the payee trade party
     *
     * @param  string|null $globalID
     * Global identification number
     * @param  string|null $globalIDType
     * Type of global identification number, must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentPayeeGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID) && !StringUtils::stringIsNullOrEmpty($globalIDType)) {
            $payeeParty = $this->ublBuilderHelper->ensurePayeeParty();
            $payeeParty->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add Tax registration to payee trade party
     *
     * @param  string|null $taxregtype
     * Type of tax number of the party
     * @param  string|null $taxregid
     * Tax number of the party or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentPayeeTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && !StringUtils::stringIsNullOrEmpty($taxregid)) {
            $payeeParty = $this->ublBuilderHelper->ensurePayeeParty();
            $payeeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets the postal address of the payee trade party
     *
     * @param  string|null $lineone
     * The main line in the party's address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the party's address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The party's state
     * @return UblDocumentBuilder
     */
    public function setDocumentPayeeAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineone)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setStreetName(new StreetName($lineone));
        }
        if (!StringUtils::stringIsNullOrEmpty($linetwo)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        }
        if (!StringUtils::stringIsNullOrEmpty($linethree)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->addToAddressLine((new AddressLine())->setLine(new Line($linethree)));
        }
        if (!StringUtils::stringIsNullOrEmpty($postcode)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setPostalZone(new PostalZone($postcode));
        }
        if (!StringUtils::stringIsNullOrEmpty($city)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setCityName(new CityName($city));
        }
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        }
        if (!StringUtils::stringIsNullOrEmpty($subdivision)) {
            $postalAddress = $this->ublBuilderHelper->ensurePayeePartyPostalAddress();
            $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));
        }

        return $this;
    }

    /**
     * Set legal organisation of the payee trade party
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param  string|null $legalorgtype
     * The identifier for the identification scheme of the legal registration of the party. In particular,
     * the following scheme codes are used: 0021 : SWIFT, 0088 : EAN, 0060 : DUNS, 0177 : ODETTE
     * @param  string|null $legalorgname
     * A name by which the party is known, if different from the party's name (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentPayeeLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null, ?string $legalform = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() !== null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalform)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            $partyLegalEntity->setCompanyLegalForm(new CompanyLegalForm($legalform));
        }

        return $this;
    }

    /**
     * Set contact of the payee trade party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the party's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentPayeeContact(?string $contactpersonname = null, ?string $contactdepartmentname = null, ?string $contactphoneno = null, ?string $contactfaxno = null, ?string $contactemailadd = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensurePayeePartyPostalContact();
            $contact->setName(new Name($contactpersonname));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactpersonname)) {
            $contact = $this->ublBuilderHelper->ensurePayeePartyPostalContact();
            $contact->setTelephone(new Telephone($contactphoneno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactfaxno)) {
            $contact = $this->ublBuilderHelper->ensurePayeePartyPostalContact();
            $contact->setTelefax(new Telefax($contactfaxno));
        }
        if (!StringUtils::stringIsNullOrEmpty($contactemailadd)) {
            $contact = $this->ublBuilderHelper->ensurePayeePartyPostalContact();
            $contact->setElectronicMail(new ElectronicMail($contactemailadd));
        }

        return $this;
    }

    // TODO: DeliveryTerms goes here

    /**
     * Set details of the associated order confirmation
     *
     * @param  string|null   $issuerassignedid
     * An identifier issued by the seller for a referenced sales order (Order confirmation number)
     * @param  DateTime|null $issueddate
     * Order confirmation date
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerOrderReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $orderReference = $this->ublBuilderHelper->ensureOrderReference();
            $orderReference->setSalesOrderID(new SalesOrderID($issuerassignedid));
        }

        return $this;
    }

    /**
     * Set details of the related buyer order
     *
     * @param  string|null   $issuerassignedid
     * An identifier issued by the buyer for a referenced order (order number)
     * @param  DateTime|null $issueddate
     * Date of order
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerOrderReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $orderReference = $this->ublBuilderHelper->ensureOrderReference();
            $orderReference->setID(new Id($issuerassignedid));
            if ($issueddate !== null) {
                $orderReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set details of the associated contract
     *
     * @param  string|null   $issuerassignedid
     * The contract reference should be assigned once in the context of the specific trade relationship and for a
     * defined period of time (contract number)
     * @param  DateTime|null $issueddate
     * Contract date
     * @return UblDocumentBuilder
     */
    public function setDocumentContractReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $contractReference = $this->ublBuilderHelper->ensureContractReference();
            $contractReference->setId(new Id($issuerassignedid));
            if ($issueddate !== null) {
                $contractReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set the identification of the call for tender or lot the invoice relates to.
     *
     * @param  string|null   $issuerassignedid
     * The identification of the call for tender or lot the invoice relates to.
     * @param  DateTime|null $issueddate
     * @return UblDocumentBuilder
     */
    public function setDocumentOriginatorReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $originatorReference = $this->ublBuilderHelper->ensureOriginatorReference();
            $originatorReference->setID(new ID($issuerassignedid));
            if ($issueddate !== null) {
                $originatorReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set information about billing documents that provide evidence of claims made in the bill
     *
     * __Notes__
     *  - The documents justifying the invoice can be used to reference a document number, which should be
     *    known to the recipient, as well as an external document (referenced by a URL) or an embedded document (such
     *    as a timesheet as a PDF file). The option of linking to an external document is e.g. required when it comes
     *    to large attachments and / or sensitive information, e.g. for personal services, which must be separated
     *    from the bill
     *  - Use ZugferdDocumentReader::firstDocumentAdditionalReferencedDocument and
     *    ZugferdDocumentReader::nextDocumentAdditionalReferencedDocument to seek between multiple additional referenced
     *    documents
     *
     * @param  string|null       $issuerassignedid
     * The identifier of the tender or lot to which the invoice relates, or an identifier specified by the seller for
     * an object on which the invoice is based, or an identifier of the document on which the invoice is based.
     * @param  string|null       $typecode
     * Type of referenced document (See codelist UNTDID 1001)
     *  - Code 916 "reference paper" is used to reference the identification of the document on which the invoice is based
     *  - Code 50 "Price / sales catalog response" is used to reference the tender or the lot
     *  - Code 130 "invoice data sheet" is used to reference an identifier for an object specified by the seller.
     * @param  string|null       $uriid
     * The Uniform Resource Locator (URL) at which the external document is available. A means of finding the resource
     * including the primary access method intended for it, e.g. http: // or ftp: //. The location of the external document
     * must be used if the buyer needs additional information to support the amounts billed. External documents are not part
     * of the invoice. Access to external documents can involve certain risks.
     * @param  string|array|null $name
     * A description of the document, e.g. Hourly billing, usage or consumption report, etc.
     * @param  string|null       $reftypecode
     * The identifier for the identification scheme of the identifier of the item invoiced. If it is not clear to the
     * recipient which scheme is used for the identifier, an identifier of the scheme should be used, which must be selected
     * from UNTDID 1153 in accordance with the code list entries.
     * @param  DateTime|null     $issueddate
     * Document date
     * @param  string|null       $binarydatafilename
     * Contains a file name of an attachment document embedded as a binary object
     * @return UblDocumentBuilder
     */
    public function addDocumentAdditionalReferencedDocument(?string $issuerassignedid = null, ?string $typecode = null, ?string $uriid = null, ?string $name = null, ?string $reftypecode = null, ?DateTime $issueddate = null, ?string $binarydatafilename = null): UblDocumentBuilder
    {
        $additionalrefdoc = $this->invoiceObject->addToAdditionalDocumentReference(new AdditionalDocumentReference())->getAdditionalDocumentReference();
        $additionalrefdoc = $additionalrefdoc[count($additionalrefdoc) - 1];

        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $additionalrefdoc->setID(new Id($issuerassignedid));
        }

        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $additionalrefdoc->addToDocumentDescription(new DocumentDescription($name));
        }

        if (!StringUtils::stringIsNullOrEmpty($typecode)) {
            $additionalrefdoc->setDocumentTypeCode(new DocumentTypeCode($typecode));
        }

        if ($issueddate !== null) {
            $additionalrefdoc->setIssueDate($issueddate);
        }

        if (!StringUtils::stringIsNullOrEmpty($binarydatafilename)) {
            if (FileUtils::fileExists($binarydatafilename)) {
                $mimetyper = new MimeDbRepository();
                $mimeType = $mimetyper->findType(FileUtils::getFileExtension($binarydatafilename));

                if (in_array($mimeType, self::SUPPORTEDTMIMETYPES)) {
                    $content = FileUtils::fileToBase64($binarydatafilename);
                    $embededObject = (new EmbeddedDocumentBinaryObject($content))->setMimeCode($mimeType)->setFilename(FileUtils::getFilenameWithExtension($binarydatafilename));
                    $attachment = (new Attachment())->setEmbeddedDocumentBinaryObject($embededObject);
                    $additionalrefdoc->setAttachment($attachment);
                } else {
                    throw new \Exception(sprintf("Invalid attachment. Mimetype %s not supported", $mimeType));
                }
            }
        } elseif (!StringUtils::stringIsNullOrEmpty($uriid)) {
            $attachment = (new Attachment())->setExternalReference((new ExternalReference())->setURI(new URI($uriid)));
            $additionalrefdoc->setAttachment($attachment);
        }

        return $this;
    }

    /**
     * Set a Reference to the previous invoice
     *
     * __Note__: To be used if:
     *  - a previous invoice is corrected
     *  - reference is made to previous partial invoices from a final invoice
     *  - Reference is made to previous invoices for advance payments from a final invoice
     *
     * @param  string|null   $issuerassignedid
     * Number of the previous invoice
     * @param  DateTime|null $issueddate
     * Date of the previous invoice
     * @return UblDocumentBuilder
     */
    public function setDocumentInvoiceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $billingReference = isset($this->invoiceObject->getBillingReference()[0]) ?
            $this->invoiceObject->getBillingReference()[0] :
            $this->invoiceObject->addToBillingReference(new BillingReference())->getBillingReference()[0];

        $invoiceReference = $billingReference->getInvoiceDocumentReference() !== null ?
            $billingReference->getInvoiceDocumentReference() :
            $billingReference->setInvoiceDocumentReference(new InvoiceDocumentReference())->getInvoiceDocumentReference();

        $invoiceReference->setId(new Id($issuerassignedid));

        if ($issueddate != null) {
            $invoiceReference->setIssueDate($issueddate);
        }

        return $this;
    }

    /**
     * Set Details of a project reference
     *
     * @param  string|null   $id
     * Project number/id
     * @param  DateTime|null $date
     * Project date
     * @return UblDocumentBuilder
     */
    public function setDocumentProcuringProject(?string $id = null, ?DateTime $date = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $procuringproject = $this->ublBuilderHelper->ensureProjectReference();
            $procuringproject->setID(new ID($id));
            if ($date !== null) {
                $procuringproject->setIssueDate($date);
            }
        }

        return $this;
    }

    // TODO: UltimateCustomerOrderReferencedDocument goes here...

    // TODO: SupplyChainEvent goes here...

    /**
     * Set detailed information on the associated shipping notification
     *
     * @param  string|null   $issuerassignedid
     * Shipping notification reference
     * @param  DateTime|null $issueddate
     * Shipping notification date
     * @return UblDocumentBuilder
     */
    public function setDocumentDespatchAdviceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $despatchDocumentReference = $this->ublBuilderHelper->ensureDespatchDocumentReference();
            $despatchDocumentReference->setID(new ID($issuerassignedid));
            if ($issueddate !== null) {
                $despatchDocumentReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set detailed information on the associated goods receipt notification
     *
     * @param  string|null   $issuerassignedid
     * An identifier for a referenced goods receipt notification (Goods receipt number)
     * @param  DateTime|null $issueddate
     * Goods receipt date
     * @return UblDocumentBuilder
     */
    public function setDocumentReceivingAdviceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $receiptDocumentReference = $this->ublBuilderHelper->ensureReceiptDocumentReference();
            $receiptDocumentReference->setID(new ID($issuerassignedid));
            if ($issueddate !== null) {
                $receiptDocumentReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    // TODO: DeliveryNoteReferencedDocument goes here...

    /**
     * Add detailed information on the payment method
     *
     * __Notes__
     *  - The SpecifiedTradeSettlementPaymentMeans element can only be repeated for each bank account if
     *    several bank accounts are to be transferred for transfers. The code for the payment method in the Typecode
     *    element must therefore not differ in the repetitions. The elements ApplicableTradeSettlementFinancialCard
     *    and PayerPartyDebtorFinancialAccount must not be specified for bank transfers.
     *
     * @param  string|null $typecode
     * The expected or used means of payment, expressed as a code. The entries from the UNTDID 4461 code list
     * must be used. A distinction should be made between SEPA and non-SEPA payments as well as between credit
     * payments, direct debits, card payments and other means of payment In particular, the following codes can
     * be used:
     *  - 10: cash
     *  - 20: check
     *  - 30: transfer
     *  - 42: Payment to bank account
     *  - 48: Card payment
     *  - 49: direct debit
     *  - 57: Standing order
     *  - 58: SEPA Credit Transfer
     *  - 59: SEPA Direct Debit
     *  - 97: Report
     * @param  string|null $information
     * The expected or used means of payment expressed in text form, e.g. cash, bank transfer, direct debit,
     * credit card, etc.
     * @param  string|null $cardType
     * The type of the card
     * @param  string|null $cardId
     * The primary account number (PAN) to which the card used for payment belongs. In accordance with card
     * payment security standards, an invoice should never contain a full payment card master account number.
     * The following specification of the PCI Security Standards Council currently applies: The first 6 and
     * last 4 digits at most are to be displayed
     * @param  string|null $cardHolderName
     * Name of the payment card holder
     * @param  string|null $buyerIban
     * Direct debit: ID of the account to be debited
     * @param  string|null $payeeIban
     * Transfer: A unique identifier for the financial account held with a payment service provider to which
     * the payment should be made, e.g. Use an IBAN (in the case of a SEPA payment) for a national ProprietaryID
     * account number
     * @param  string|null $payeeAccountName
     * The name of the payment account held with a payment service provider to which the payment should be made.
     * Information only required if different from the name of the payee / seller
     * @param  string|null $payeePropId
     * National account number (not for SEPA)
     * @param  string|null $payeeBic
     * Seller's banking institution, An identifier for the payment service provider with whom the payment account
     * is managed, such as the BIC or a national bank code, if required. No identification scheme is to be used.
     * @param string|null $mandate
     * Unique identifier assigned by the Payee for referencing the direct debit mandate. Used in order to pre-notify
     * the Buyer of a SEPA direct debit.
     * @param string|null $paymentReference
     * A textual value used to establish a link between the payment and the Invoice, issued by the Seller. Used for
     * creditor's critical reconciliation information. This information element helps the Seller to assign an incoming
     * payment to the relevant payment process.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMean(?string $typecode = null, ?string $information = null, ?string $cardType = null, ?string $cardId = null, ?string $cardHolderName = null, ?string $buyerIban = null, ?string $payeeIban = null, ?string $payeeAccountName = null, ?string $payeePropId = null, ?string $payeeBic = null, ?string $mandate = null, ?string $paymentReference = null): UblDocumentBuilder
    {
        if ($typecode == "58") {
            return $this->addDocumentPaymentMeanSepaCreditTransfer($payeeIban, $payeeAccountName, $payeePropId, $payeeBic, $paymentReference);
        }
        if ($typecode == "59") {
            return $this->addDocumentPaymentMeanSepaDirectDebit($buyerIban, $mandate);
        }
        if ($typecode == "48") {
            return $this->addDocumentPaymentMeanBankCard($cardType, $cardId, $cardHolderName);
        }

        $paymentMean = new PaymentMeans();

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        if (!StringUtils::stringIsNullOrEmpty($typecode)) {
            $paymentMean->setPaymentMeansCode(new PaymentMeansCode($typecode));
        }
        if (!StringUtils::stringIsNullOrEmpty($information)) {
            $paymentMean->getPaymentMeansCode()->setName($information);
        }
        if (!StringUtils::stringIsNullOrEmpty($cardType)) {
            $cardAccount = $paymentMean->getCardAccount() ?? $paymentMean->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setNetworkID(new NetworkID($cardType));
        }
        if (!StringUtils::stringIsNullOrEmpty($cardId)) {
            $cardAccount = $paymentMean->getCardAccount() ?? $paymentMean->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setPrimaryAccountNumberID(new PrimaryAccountNumberID(substr($cardId, -4)));
        }
        if (!StringUtils::stringIsNullOrEmpty($cardHolderName)) {
            $cardAccount = $paymentMean->getCardAccount() ?? $paymentMean->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setHolderName(new HolderName($cardHolderName));
        }
        if (!StringUtils::stringIsNullOrEmpty($buyerIban)) {
            $paymentMandate = $paymentMean->getPaymentMandate() ?? $paymentMean->setPaymentMandate(new PaymentMandate())->getPaymentMandate();
            $payerFinancialAccount = $paymentMandate->getPayerFinancialAccount() ?? $paymentMandate->setPayerFinancialAccount(new PayerFinancialAccount())->getPayerFinancialAccount();
            $payerFinancialAccount->setID(new ID($buyerIban));
        }
        if (!StringUtils::stringIsNullOrEmpty($mandate)) {
            $paymentMandate = $paymentMean->getPaymentMandate() ?? $paymentMean->setPaymentMandate(new PaymentMandate())->getPaymentMandate();
            $paymentMandate->setID(new ID($mandate));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeIban)) {
            $payeeFinancialAccount = $paymentMean->getPayeeFinancialAccount() ?? $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setID(new ID($payeeIban));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeAccountName)) {
            $payeeFinancialAccount = $paymentMean->getPayeeFinancialAccount() ?? $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setName(new Name($payeeAccountName));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeePropId)) {
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeBic)) {
            $payeeFinancialAccount = $paymentMean->getPayeeFinancialAccount() ?? $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setFinancialInstitutionBranch((new FinancialInstitutionBranch())->setID(new ID($payeeBic)));
        }
        if (!StringUtils::stringIsNullOrEmpty($paymentReference)) {
            $paymentMean->addToPaymentID(new PaymentID($paymentReference));
        }

        return $this;
    }

    /**
     * Create payment means for payment type 58 (SEPA credit transfer)
     * German translation: SEPA-Überweisung
     *
     * @param string|null $payeeIban
     * @param string|null $payeeAccountName
     * @param string|null $payeePropId
     * @param string|null $payeeBic
     * @param string|null $paymentReference
     * A textual value used to establish a link between the payment and the Invoice, issued by the Seller. Used for
     * creditor's critical reconciliation information. This information element helps the Seller to assign an incoming
     * payment to the relevant payment process.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaCreditTransfer(?string $payeeIban = null, ?string $payeeAccountName = null, ?string $payeePropId = null, ?string $payeeBic = null, ?string $paymentReference = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode(new PaymentMeansCode("58"));
        $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount())->getPayeeFinancialAccount()->setID(new ID($payeeIban));
        if (!StringUtils::stringIsNullOrEmpty($payeeAccountName)) {
            $payeeFinancialAccount = $paymentMean->getPayeeFinancialAccount() ?? $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setName(new Name($payeeAccountName));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeePropId)) {
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeBic)) {
            $payeeFinancialAccount = $paymentMean->getPayeeFinancialAccount() ?? $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setFinancialInstitutionBranch((new FinancialInstitutionBranch())->setID(new ID($payeeBic)));
        }

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Create payment means for payment type 59 (SEPA direct debit)
     * German translation: SEPA Lastschrift
     *
     * @param  string|null $buyerIban
     * Debited account,  __German translation:__ Belastetes Konto
     * @param  string|null $mandate
     * Mandate reference identifier
     * Unique identifier assigned by the Payee for referencing the direct debit mandate. Used in order to pre-notify
     * the Buyer of a SEPA direct debit, __German translation:__ Mandatsreferenz
     * @param string|null $paymentReference
     * A textual value used to establish a link between the payment and the Invoice, issued by the Seller. Used for
     * creditor's critical reconciliation information. This information element helps the Seller to assign an incoming
     * payment to the relevant payment process.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaDirectDebit(?string $buyerIban = null, ?string $mandate = null, ?string $paymentReference = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode(new PaymentMeansCode("59"));
        $paymentMean->setPaymentMandate(new PaymentMandate())->getPaymentMandate()->setPayerFinancialAccount((new PayerFinancialAccount())->setID(new ID($buyerIban)))->setID(new ID($mandate));

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Create payment means for payment type 48 (Bank card)
     *
     * @param  string|null $cardType
     * Card Network identifier, such as VISA, American Express, Master Card.
     * @param  string|null $cardId
     * The Primary Account Number (PAN) of the card used for payment.In accordance with card payments security
     * standards, an invoice should never include a full card primary account number. This method will do the
     * security for you automatically
     * @param  string|null $cardHolderName
     * The name of the payment card holder.
     * @param string|null $paymentReference
     * A textual value used to establish a link between the payment and the Invoice, issued by the Seller. Used for
     * creditor's critical reconciliation information. This information element helps the Seller to assign an incoming
     * payment to the relevant payment process.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanBankCard(?string $cardType = null, ?string $cardId = null, ?string $cardHolderName = null, ?string $paymentReference = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode(new PaymentMeansCode("48"));
        $paymentMean->setCardAccount(
            (new CardAccount)
                ->setPrimaryAccountNumberID(new PrimaryAccountNumberID(substr($cardId, -4)))
                ->setNetworkID(new NetworkID($cardType))
                ->setHolderName(new HolderName($cardHolderName))
        );

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Add a VAT breakdown (at document level)
     *
     * @param  string        $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string        $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param  float         $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param  float         $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param  float         $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @param  string|null   $exemptionReason
     * Reason for tax exemption (free text)
     * @param  string|null   $exemptionReasonCode
     * Reason given in code form for the exemption of the amount from VAT. Note: Code list issued
     * and maintained by the Connecting Europe Facility.
     * @return UblDocumentBuilder
     */
    public function addDocumentTax(string $categoryCode, string $typeCode, float $basisAmount, float $calculatedAmount, float $rateApplicablePercent, ?string $exemptionReason = null, ?string $exemptionReasonCode = null): UblDocumentBuilder
    {
        $taxTotalAmount = 0.0;

        //$taxCurrencyCode = $this->invoiceObject->getTaxCurrencyCode() !== null ? $this->invoiceObject->getTaxCurrencyCode()->value() : null;
        //$taxCurrencyCode = StringUtils::stringIsNullOrEmpty($taxCurrencyCode) == true ? $this->invoiceObject->getDocumentCurrencyCode()->value() : $taxCurrencyCode;
        $taxCurrencyCode = $this->invoiceObject->getDocumentCurrencyCode()->value();

        $taxTotal = new TaxTotal();

        $taxSubTotal = new TaxSubtotal();
        $taxSubTotal->setTaxableAmount((new TaxableAmount($basisAmount))->setCurrencyID($taxCurrencyCode));
        $taxSubTotal->setTaxAmount((new TaxAmount($calculatedAmount))->setCurrencyID($taxCurrencyCode));

        $taxCategory = (new TaxCategory())
            ->setId(new ID($categoryCode))
            ->setTaxScheme(
                (new TaxScheme())
                    ->setID(new ID($typeCode))
            );

        if ($rateApplicablePercent !== null) {
            $taxCategory->setPercent(new Percent($rateApplicablePercent));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReason)) {
            $taxCategory->addToTaxExemptionReason(new TaxExemptionReason($exemptionReason));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReasonCode)) {
            $taxCategory->setTaxExemptionReasonCode(new TaxExemptionReasonCode($exemptionReasonCode));
        }

        $taxSubTotal->setTaxCategory($taxCategory);
        $taxTotal->addToTaxSubtotal($taxSubTotal);

        foreach ($taxTotal->getTaxSubtotal() as $taxSubTotal) {
            $taxTotalAmount += $taxSubTotal->getTaxAmount()->value();
        }

        $taxTotal->setTaxAmount((new TaxAmount($taxTotalAmount))->setCurrencyID($taxCurrencyCode));

        $this->invoiceObject->addToTaxTotal($taxTotal);

        return $this;
    }

    /**
     * Add a VAT breakdown (at document level) in a more simple way
     *
     * @param  string $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param  float  $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param  float  $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param  float  $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @return UblDocumentBuilder
     */
    public function addDocumentTaxSimple(string $categoryCode, string $typeCode, float $basisAmount, float $calculatedAmount, float $rateApplicablePercent): UblDocumentBuilder
    {
        return $this->addDocumentTax($categoryCode, $typeCode, $basisAmount, $calculatedAmount, $rateApplicablePercent);
    }

    /**
     * Add a VAT breakdown (at document level)
     *
     * @param  string        $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string        $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param  float         $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param  float         $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param  float         $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @param  string|null   $exemptionReason
     * Reason for tax exemption (free text)
     * @param  string|null   $exemptionReasonCode
     * Reason given in code form for the exemption of the amount from VAT. Note: Code list issued
     * and maintained by the Connecting Europe Facility.
     * @return UblDocumentBuilder
     */
    public function addDocumentTaxSubTotal(string $categoryCode, string $typeCode, float $basisAmount, float $calculatedAmount, float $rateApplicablePercent, ?string $exemptionReason = null, ?string $exemptionReasonCode = null): UblDocumentBuilder
    {
        $taxTotalAmount = 0.0;

        //$taxCurrencyCode = $this->invoiceObject->getTaxCurrencyCode() !== null ? $this->invoiceObject->getTaxCurrencyCode()->value() : null;
        //$taxCurrencyCode = StringUtils::stringIsNullOrEmpty($taxCurrencyCode) == true ? $this->invoiceObject->getDocumentCurrencyCode()->value() : $taxCurrencyCode;
        $taxCurrencyCode = $this->invoiceObject->getDocumentCurrencyCode()->value();

        if (count($this->invoiceObject->getTaxTotal()) <= 0) {
            return $this;
        }

        $taxTotal = $this->invoiceObject->getTaxTotal()[count($this->invoiceObject->getTaxTotal()) - 1];

        $taxSubTotal = new TaxSubtotal();
        $taxSubTotal->setTaxableAmount((new TaxableAmount($basisAmount))->setCurrencyID($taxCurrencyCode));
        $taxSubTotal->setTaxAmount((new TaxAmount($calculatedAmount))->setCurrencyID($taxCurrencyCode));

        $taxCategory = (new TaxCategory())
            ->setId(new ID($categoryCode))
            ->setTaxScheme(
                (new TaxScheme())
                    ->setID(new ID($typeCode))
            );

        if ($rateApplicablePercent !== null) {
            $taxCategory->setPercent(new Percent($rateApplicablePercent));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReason)) {
            $taxCategory->addToTaxExemptionReason(new TaxExemptionReason($exemptionReason));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReasonCode)) {
            $taxCategory->setTaxExemptionReasonCode(new TaxExemptionReasonCode($exemptionReasonCode));
        }

        $taxSubTotal->setTaxCategory($taxCategory);
        $taxTotal->addToTaxSubtotal($taxSubTotal);

        foreach ($taxTotal->getTaxSubtotal() as $taxSubTotal) {
            $taxTotalAmount += $taxSubTotal->getTaxAmount()->value();
        }

        $taxTotal->setTaxAmount((new TaxAmount($taxTotalAmount))->setCurrencyID($taxCurrencyCode));

        return $this;
    }

    /**
     * Add a VAT breakdown (at document level) in a more simple way
     *
     * @param  string $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param  float  $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param  float  $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param  float  $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @return UblDocumentBuilder
     */
    public function addDocumentTaxSubTotalSimple(string $categoryCode, string $typeCode, float $basisAmount, float $calculatedAmount, float $rateApplicablePercent): UblDocumentBuilder
    {
        return $this->addDocumentTaxSubTotal($categoryCode, $typeCode, $basisAmount, $calculatedAmount, $rateApplicablePercent);
    }

    /**
     * Add Tax in foreign currency
     *
     * @param  float $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @return UblDocumentBuilder
     */
    public function addDocumentTaxInTaxCurrency(float $calculatedAmount): UblDocumentBuilder
    {
        $taxTotalAmount = 0.0;

        $taxCurrencyCode = $this->invoiceObject->getTaxCurrencyCode() !== null ? $this->invoiceObject->getTaxCurrencyCode()->value() : null;

        if (StringUtils::stringIsNullOrEmpty($taxCurrencyCode)) {
            return $this;
        }

        $taxTotal = new TaxTotal();
        $taxTotal->setTaxAmount((new TaxAmount($calculatedAmount))->setCurrencyID($taxCurrencyCode));

        $this->invoiceObject->addToTaxTotal($taxTotal);

        return $this;
    }

    /**
     * Get detailed information on the billing period
     *
     * @param  DateTime|null $startdate
     * Start of the billing period
     * @param  DateTime|null $endDate
     * End of the billing period
     * @param  string|null   $description
     * Further information of the billing period
     * @return UblDocumentBuilder
     */
    public function setDocumentBillingPeriod(?DateTime $startdate = null, ?DateTime $endDate = null, ?string $description = null): UblDocumentBuilder
    {
        if ($startdate !== null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->setStartDate($startdate);
        }
        if ($endDate !== null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->setEndDate($endDate);
        }
        if (!StringUtils::stringIsNullOrEmpty($description)) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->setDescription([])->addToDescription(new Description($description));
        }

        return $this;
    }

    /**
     * Add information about surcharges and charges applicable to the bill as a whole, Deductions,
     * such as for withheld taxes may also be specified in this group
     *
     * @param  float       $actualAmount
     * Amount of the surcharge or discount at document level
     * @param  boolean     $isCharge
     * Switch that indicates whether the following data refer to an surcharge or a discount, true means that
     * this an charge
     * @param  string      $taxCategoryCode
     * A coded indication of which sales tax category applies to the surcharge or deduction at document level
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta/Melilla)
     * @param  string      $taxTypeCode
     * Code for the VAT category of the surcharge or charge at document level. Note: Fixed value = "VAT"
     * @param  float       $rateApplicablePercent
     * VAT rate for the surcharge or discount on document level. Note: The code of the sales tax category
     * and the category-specific sales tax rate must correspond to one another. The value to be given is
     * the percentage. For example, the value 20 is given for 20% (and not 0.2)
     * @param  float|null  $sequence
     * Calculation order
     * @param  float|null  $calculationPercent
     * Percentage surcharge or discount at document level
     * @param  float|null  $basisAmount
     * The base amount that may be used in conjunction with the percentage of the surcharge or discount
     * at document level to calculate the amount of the discount at document level
     * @param  float|null  $basisQuantity
     * Basismenge des Rabatts
     * @param  string|null $basisQuantityUnitCode
     * Einheit der Preisbasismenge
     *  - Codeliste: Rec. N°20 Vollständige Liste, In Recommendation N°20 Intro 2.a ist beschrieben, dass
     *    beide Listen kombiniert anzuwenden sind.
     *  - Codeliste: Rec. N°21 Vollständige Liste, In Recommendation N°20 Intro 2.a ist beschrieben, dass
     *    beide Listen kombiniert anzuwenden sind.
     * @param  string|null $reasonCode
     * The reason given as a code for the surcharge or discount at document level. Note: Use entries from
     * the UNTDID 5189 code list. The code of the reason for the surcharge or discount at document level
     * and the reason for the surcharge or discount at document level must correspond to each other
     *
     * Code list: UNTDID 7161 Complete list, code list: UNTDID 5189 Restricted
     * Include PEPPOL subset:
     *  - 41 - Bonus for works ahead of schedule
     *  - 42 - Other bonus
     *  - 60 - Manufacturer’s consumer discount
     *  - 62 - Due to military status
     *  - 63 - Due to work accident
     *  - 64 - Special agreement
     *  - 65 - Production error discount
     *  - 66 - New outlet discount
     *  - 67 - Sample discount
     *  - 68 - End-of-range discount
     *  - 70 - Incoterm discount
     *  - 71 - Point of sales threshold allowance
     *  - 88 - Material surcharge/deduction
     *  - 95 - Discount
     *  - 100 - Special rebate
     *  - 102 - Fixed long term
     *  - 103 - Temporary
     *  - 104 - Standard
     *  - 105 - Yearly turnover
     * @param  string|null $reason
     * The reason given in text form for the surcharge or discount at document level
     * @param  float|null  $multiplierFactor
     * The percentage that may be used, in conjunction with the document level allowance
     * base amount, to calculate the document level allowance or charge amount.
     * To state 20%, use value 20.
     * @return UblDocumentBuilder
     */
    public function addDocumentAllowanceCharge(float $actualAmount, bool $isCharge, string $taxCategoryCode, string $taxTypeCode, float $rateApplicablePercent, ?float $sequence = null, ?float $calculationPercent = null, ?float $basisAmount = null, ?float $basisQuantity = null, ?string $basisQuantityUnitCode = null, ?string $reasonCode = null, ?string $reason = null, ?float $multiplierFactor = null): UblDocumentBuilder
    {
        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setAmount((new Amount($actualAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()->value()));
        $allowanceCharge->setChargeIndicator($isCharge);

        if ($basisAmount !== null) {
            $allowanceCharge->setBaseAmount((new BaseAmount($basisAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()->value()));
        }
        if (!StringUtils::stringIsNullOrEmpty($reason)) {
            $allowanceCharge->addToAllowanceChargeReason(new AllowanceChargeReason($reason));
        }
        if (!StringUtils::stringIsNullOrEmpty($reasonCode)) {
            $allowanceCharge->setAllowanceChargeReasonCode(new AllowanceChargeReasonCode($reasonCode));
        }
        if ($sequence !== null) {
            $allowanceCharge->setSequenceNumeric(new SequenceNumeric($sequence));
        }
        if ($multiplierFactor !== null) {
            $allowanceCharge->setMultiplierFactorNumeric(new MultiplierFactorNumeric($multiplierFactor));
        }

        $taxCategory = new TaxCategory();
        $taxCategory->setID(new ID($taxCategoryCode));
        $taxCategory->setPercent(new Percent($rateApplicablePercent));
        $taxCategory->setTaxScheme((new TaxScheme)->setID(new ID($taxTypeCode)));

        $allowanceCharge->addToTaxCategory($taxCategory);

        $this->invoiceObject->addToAllowanceCharge($allowanceCharge);

        return $this;
    }

    // TODO: LogisticsServiceCharge goes here...

    /**
     * Add a payment term
     *
     * @param  string|null $description
     * A text description of the payment terms that apply to the payment amount due (including a
     * description of possible penalties). Note: This element can contain multiple lines and
     * multiple conditions.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentTerm(?string $description = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($description)) {
            $paymentTerms = new PaymentTerms();
            $paymentTerms->addToNote(new Note($description));
            $this->invoiceObject->addToPaymentTerms($paymentTerms);
        }

        return $this;
    }

    // TODO: DiscountTermsToPaymentTerms goes here...

    /**
     * Add an AccountingAccount
     * Detailinformationen zur Buchungsreferenz
     *
     * @param  string $id
     * @return UblDocumentBuilder
     */
    public function addDocumentReceivableSpecifiedTradeAccountingAccount(string $id): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $this->invoiceObject->setAccountingCost(new AccountingCost($id));
        }

        return $this;
    }

    /**
     * Adds a new position (line) to document
     *
     * @param  string $lineid
     * A unique identifier for the relevant item within the invoice (item number)
     * @return UblDocumentBuilder
     */
    public function addNewPosition(string $lineid): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($lineid)) {
            $this->currentPosition = (new InvoiceLine())->setID(new ID($lineid));
            $this->invoiceObject->addToInvoiceLine($this->currentPosition);
        }

        return $this;
    }

    /**
     * Add detailed information on the free text on the position
     *
     * @param  string $content
     * A free text that contains unstructured information that is relevant to the invoice item
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionNote(string $content): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($content)) {
            $this->currentPosition->addToNote(new Note($content));
        }

        return $this;
    }

    /**
     * Add detailed information on the free text on the position
     *
     * @param  string $content
     * A free text that contains unstructured information that is relevant to the invoice item
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionNote(string $content): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($content)) {
            $this->currentPosition->addToNote(new Note($content));
        }

        return $this;
    }

    /**
     * Adds product details to the last created position (line) in the document
     *
     * @param  string      $name
     * A name of the item (item name)
     * @param  string|null $description
     * A description of the item, the item description makes it possible to describe the item and its
     * properties in more detail than is possible with the item name.
     * @param  string|null $sellerAssignedID
     * An identifier assigned to the item by the seller
     * @param  string|null $buyerAssignedID
     * An identifier assigned to the item by the buyer. The article number of the buyer is a clear,
     * bilaterally agreed identification of the product. It can, for example, be the customer article
     * number or the article number assigned by the manufacturer.
     * @param  string|null $globalIDType
     * The scheme for $globalID
     * @param  string|null $globalID
     * Identification of an article according to the registered scheme (Global identifier of the product,
     * GTIN, ...)
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionProductDetails(string $name, ?string $description = null, ?string $sellerAssignedID = null, ?string $buyerAssignedID = null, ?string $globalIDType = null, ?string $globalID = null): UblDocumentBuilder
    {
        $item = $this->ublBuilderHelper->ensureInvoiceLineItem();

        $item->setName(new Name($name));

        if (!StringUtils::stringIsNullOrEmpty($description)) {
            $item->addToDescription(new Description($description));
        }
        if (!StringUtils::stringIsNullOrEmpty($sellerAssignedID)) {
            $item->setBuyersItemIdentification((new BuyersItemIdentification())->setID(new ID($sellerAssignedID)));
        }
        if (!StringUtils::stringIsNullOrEmpty($buyerAssignedID)) {
            $item->setSellersItemIdentification((new SellersItemIdentification())->setId(new ID($buyerAssignedID)));
        }
        if (!StringUtils::stringIsNullOrEmpty($globalIDType) && !StringUtils::stringIsNullOrEmpty($globalID)) {
            $item->setStandardItemIdentification((new StandardItemIdentification())->setID((new ID($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add extra characteristics to the formerly added product.
     * Contains information about the characteristics of the goods and services invoiced
     *
     * @param  string $description
     * The name of the attribute or property of the product such as "Colour"
     * @param  string $value
     * The value of the attribute or property of the product such as "Red"
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionProductCharacteristic(string $description, string $value): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($description) && !StringUtils::stringIsNullOrEmpty($value)) {
            $itemProperty = new AdditionalItemProperty();
            $itemProperty->setName(new Name($description));
            $itemProperty->setValue(new Value($value));
            $item = $this->ublBuilderHelper->ensureInvoiceLineItem();
            $item->addToAdditionalItemProperty($itemProperty);
        }

        return $this;
    }

    /**
     * Add detailed information on product classification
     *
     * @param  string      $classCode
     * A code for classifying the item by type or nature or essence or condition.
     * __Note__: Classification codes are used to group similar items for different purposes, such as public
     * procurement (using the Common Procurement Vocabulary [CPV]), e-commerce (UNSPSC), etc.
     * @param  string      $listID
     * The identifier for the identification scheme of the identifier of the article classification
     * __Note__: The identification scheme must be selected from the entries from UNTDID 7143.
     * @param  string|null $listVersionID
     * The version of the identification scheme
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionProductClassification(string $classCode, string $listID, ?string $listVersionID = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($classCode) && !StringUtils::stringIsNullOrEmpty($listID)) {
            $classification = new CommodityClassification();
            $classification->setItemClassificationCode(new ItemClassificationCode($classCode));
            $classification->getItemClassificationCode()->setListID($listID);
            if (!StringUtils::stringIsNullOrEmpty($listVersionID)) {
                $classification->getItemClassificationCode()->setListVersionID($listVersionID);
            }
            $item = $this->ublBuilderHelper->ensureInvoiceLineItem();
            $item->addToCommodityClassification($classification);
        }

        return $this;
    }

    /**
     * Sets the detailed information on the product origin
     *
     * @param  string $country
     * The code indicating the country the goods came from
     * __Note__: The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance
     * Agency “Codes for the representation of names of countries and their subdivisions”.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionProductOriginTradeCountry(string $country): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($country)) {
            $item = $this->ublBuilderHelper->ensureInvoiceLineItem();
            $item->setOriginCountry((new OriginCountry())->setIdentificationCode(new IdentificationCode($country)));
        }

        return $this;
    }

    /**
     * Add detailed information on included products. This information relates to the
     * product that has just been added
     *
     * @param  string      $name
     * Item name
     * @param  string|null $description
     * Item description
     * @param  string|null $sellerAssignedID
     * Item number of the seller
     * @param  string|null $buyerAssignedID
     * Item number of the buyer
     * __Note__: The identifier of the product is a unique, bilaterally agreed identification of the
     * product. It can, for example, be the customer article number or the article number assigned by
     * the manufacturer.
     * @param  string|null $globalID
     * Global identifier of the product
     * __Note__: The global identifier of the product is a label uniquely assigned by the manufacturer,
     * which is based on the rules of a global registration organization.
     * @param  string|null $globalIDType
     * Type of global item number
     * In particular, the following codes can be used:
     *  * 0021: SWIFT
     *  * 0088: EAN
     *  * 0060: DUNS
     *  * 0177: ODETTE
     * @param  float|null  $unitQuantity
     * Included quantity
     * @param  string|null $unitCode
     * Unit of measurement of the included quantity
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionReferencedProduct(string $name, ?string $description = null, ?string $sellerAssignedID = null, ?string $buyerAssignedID = null, ?string $globalID = null, ?string $globalIDType = null, ?float $unitQuantity = null, ?string $unitCode = null): UblDocumentBuilder
    {
        // TODO: Implement this
        return $this;
    }

    /**
     * Set details of the related buyer order position
     *
     * @param  string        $issuerassignedid
     * An identifier issued by the buyer for a referenced order (order number)
     * @param  string        $lineid
     * An identifier for a position within an order placed by the buyer. Note: Reference is made to the order
     * reference at the document level.
     * @param  DateTime|null $issueddate
     * Date of order
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionBuyerOrderReferencedDocument(string $issuerassignedid, string $lineid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        /* Is it allowed?
        if (
            $this->invoiceObject->getOrderReference() !== null &&
            $this->invoiceObject->getOrderReference()->getID() !== null &&
            !StringUtils::stringIsNullOrEmpty($this->invoiceObject->getOrderReference()->getID()->value())
        ) {
            $issuerassignedid = $this->invoiceObject->getOrderReference()->getID()->value();
        }
        */
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $orderLineReference = $this->ublBuilderHelper->ensureInvoiceLineOrderLineReference();
            $orderLineReference->setOrderReference((new OrderReference())->setID(new ID($issuerassignedid)));
        }

        if (!StringUtils::stringIsNullOrEmpty($lineid)) {
            $orderLineReference = $this->ublBuilderHelper->ensureInvoiceLineOrderLineReference();
            $orderLineReference->setLineID(new LineID($lineid));
        }

        return $this;
    }

    /**
     * Set details of the related contract position
     *
     * @param  string        $issuerassignedid
     * The contract reference should be assigned once in the context of the specific trade relationship and for a
     * defined period of time (contract number)
     * @param  string        $lineid
     * Identifier of the according contract position
     * @param  DateTime|null $issueddate
     * Contract date
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionContractReferencedDocument(string $issuerassignedid, string $lineid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        // TODO: Implement this
        return $this;
    }

    /**
     * Add a referennce to a ultimate customer order referenced document
     *
     * @param  string        $issuerassignedid
     * @param  string        $lineid
     * @param  DateTime|null $issueddate
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionUltimateCustomerOrderReferencedDocument(string $issuerassignedid, string $lineid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        // TODO: Implement this
        return $this;
    }

    /**
     * Set the unit price excluding sales tax before deduction of the discount on the item price.
     *
     * @param  float       $amount
     * The unit price excluding sales tax before deduction of the discount on the item price.
     * Note: If the price is shown according to the net calculation, the price must also be shown
     * according to the gross calculation.
     * @param  float|null  $basisQuantity
     * The number of item units for which the price applies (price base quantity)
     * @param  string|null $basisQuantityUnitCode
     * The unit code of the number of item units for which the price applies (price base quantity)
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionGrossPrice(float $amount, ?float $basisQuantity = null, ?string $basisQuantityUnitCode = null): UblDocumentBuilder
    {
        $price = new Price();
        $price->setPriceAmount(new PriceAmount($amount));

        if ($basisQuantity !== null && $basisQuantityUnitCode !== null) {
            $price->setBaseQuantity((new BaseQuantity($basisQuantity))->setUnitCode($basisQuantityUnitCode));
        }

        $this->currentPosition->setPrice($price);

        return $this;
    }

    /**
     * Detailed information on surcharges and discounts on item gross price
     *
     * @param  float       $actualAmount
     * Discount on the item price. The total discount subtracted from the gross price to calculate the
     * net price. Note: Only applies if the discount is given per unit and is not included in the gross price.
     * @param  boolean     $isCharge
     * Switch for surcharge/discount, if true then its an charge
     * @param  float|null  $basisAmount
     * Base amount of the discount/surcharge
     * @param  string|null $reason
     * Reason for surcharge/discount (free text)
     * @param  string|null $taxTypeCode
     * @param  string|null $taxCategoryCode
     * @param  float|null  $rateApplicablePercent
     * @param  float|null  $sequence
     * @param  string|null $reasonCode
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionGrossPriceAllowanceCharge(float $actualAmount, bool $isCharge, ?float $basisAmount = null, ?string $reason = null, ?string $taxTypeCode = null, ?string $taxCategoryCode = null, ?float $rateApplicablePercent = null, ?float $sequence = null, ?string $reasonCode = null): UblDocumentBuilder
    {
        $price = $this->currentPosition->getPrice();

        if ($price == null) {
            return $this;
        }

        $allowanceCharge = new AllowanceCharge();

        $allowanceCharge->setChargeIndicator($isCharge);
        $allowanceCharge->setAmount((new Amount($actualAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));

        if ($basisAmount !== null) {
            $allowanceCharge->setBaseAmount((new BaseAmount($basisAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        }
        if (!StringUtils::stringIsNullOrEmpty($reason)) {
            $allowanceCharge->addToAllowanceChargeReason(new AllowanceChargeReason($reason));
        }
        if (!StringUtils::stringIsNullOrEmpty($reasonCode)) {
            $allowanceCharge->setAllowanceChargeReasonCode(new AllowanceChargeReasonCode($reasonCode));
        }
        if ($sequence !== null) {
            $allowanceCharge->setSequenceNumeric(new SequenceNumeric($sequence));
        }

        if (!StringUtils::stringIsNullOrEmpty($taxCategoryCode) && !StringUtils::stringIsNullOrEmpty($taxTypeCode)) {
            $taxCategory = (new TaxCategory())
                ->setId(new ID($taxCategoryCode))
                ->setTaxScheme(
                    (new TaxScheme())
                        ->setID(new ID($taxTypeCode))
                );

            if ($rateApplicablePercent !== null) {
                $taxCategory->setPercent(new Percent($rateApplicablePercent));
            }

            $allowanceCharge->addToTaxCategory($taxCategory);
        }

        $price->addToAllowanceCharge($allowanceCharge);

        return $this;
    }

    /**
     * Set detailed information on the net price of the item
     *
     * @param  float       $amount
     * Net price of the item
     * @param  float|null  $basisQuantity
     * Base quantity at the item price
     * @param  string|null $basisQuantityUnitCode
     * Code of the unit of measurement of the base quantity at the item price
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionNetPrice(float $amount, ?float $basisQuantity = null, ?string $basisQuantityUnitCode = null): UblDocumentBuilder
    {
        $price = new Price();
        $price->setPriceAmount((new PriceAmount($amount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));

        if ($basisQuantity !== null && $basisQuantityUnitCode !== null) {
            $price->setBaseQuantity((new BaseQuantity($basisQuantity))->setUnitCode($basisQuantityUnitCode));
        }

        $this->currentPosition->setPrice($price);

        return $this;
    }

    /**
     * Tax included for B2C on position level
     *
     * @param  string      $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string      $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param  float       $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @param  float       $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param  string|null $exemptionReason
     * Reason for tax exemption (free text)
     * @param  string|null $exemptionReasonCode
     * Reason given in code form for the exemption of the amount from VAT. Note: Code list issued
     * and maintained by the Connecting Europe Facility.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionNetPriceTax(string $categoryCode, string $typeCode, float $rateApplicablePercent, float $calculatedAmount, ?string $exemptionReason = null, ?string $exemptionReasonCode = null): UblDocumentBuilder
    {
        // TODO: Seems to be not possible in UBL
        return $this;
    }
    /**
     * Set the position Quantity
     *
     * @param  float  $billedQuantity
     * The quantity of individual items (goods or services) billed in the relevant line
     * @param  string $billedQuantityUnitCode
     * The unit of measure applicable to the amount billed. Note: The unit of measurement must be taken from the
     * lists from UN / ECE Recommendation No. 20 "Codes for Units of Measure Used in International Trade" and
     * UN / ECE Recommendation No. 21 "Codes for Passengers, Types of Cargo, Packages and Packaging Materials
     * (with Complementary Codes for Package Names)" using the UN / ECE Rec No. 20 Intro 2.a) can be selected.
     * It should be noted that in most cases it is not necessary for buyers and sellers to fully implement these
     * lists in their software. Sellers only need to support the entities necessary for their goods and services;
     * Buyers only need to verify that the units used in the invoice match those in other documents (such as in
     * Contracts, catalogs, orders and shipping notifications) match the units used.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionQuantity(float $billedQuantity, string $billedQuantityUnitCode): UblDocumentBuilder
    {
        $this->currentPosition->setInvoicedQuantity((new InvoicedQuantity($billedQuantity))->setUnitCode($billedQuantityUnitCode));
        return $this;
    }

    /**
     * Set detailed information on the different ship-to party at item level
     *
     * @param  string      $name
     * The name of the party to whom the goods are being delivered or for whom the services are being
     * performed. Must be used if the recipient of the goods or services is not the same as the buyer.
     * @param  string|null $id
     * An identifier for the place where the goods are delivered or where the services are provided.
     * Multiple IDs can be assigned or specified. They can be differentiated by using different
     * identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g.
     * a previously exchanged identifier assigned by the buyer or seller.
     * @param  string|null $description
     * Further legal information that is relevant for the party
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionShipTo(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Add a global id for the Ship-to Trade Party
     *
     * @param  string|null $globalID
     * The identifier is uniquely assigned to a party by a global registration organization.
     * @param  string|null $globalIDType
     * If the identifier is used for the identification scheme, it must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionShipToGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Add Tax registration to Ship-To Trade party
     *
     * The local identification (defined by the party's address) of the party for tax purposes or a reference that enables the party
     * to indicate his reporting status for tax purposes The sales tax identification number of the party
     * Note: This information may affect how the buyer the invoice settled (such as in relation to social security contributions). So
     * e.g. In some countries, if the party is not reported for tax, the buyer will withhold the tax amount and pay it on behalf of the
     * party. Sales tax number with a prefixed country code. A supplier registered as subject to VAT must provide his sales tax
     * identification number, unless he uses a tax agent.
     *
     * @param  string|null $taxregtype
     * Type of tax number of the party
     * @param  string|null $taxregid
     * Tax number of the party or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionShipToTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Sets the postal address of the Ship-To party
     *
     * @param  string|null $lineone
     * The main line in the product end users address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the product end users address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the product end users address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the product end users address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The product end users state
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionShipToAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Set legal organisation of the Ship-To party on item level
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param  string|null $legalorgtype
     * registration of the party. In particular, the following scheme codes are used: 0021 : SWIFT, 0088 : EAN,
     * 0060 : DUNS, 0177 : ODETTE
     * @param  string|null $legalorgname A name by which the party is known, if different from the party's name
     *                                   (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionShipToLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname, ?string $legalform = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Set contact of the Ship-To party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the party's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionShipToContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Detailed information on the different end recipient
     *
     * @param  string      $name
     * The name of the party to whom the goods are being delivered or for whom the services are being
     * performed. Must be used if the recipient of the goods or services is not the same as the buyer.
     * @param  string|null $id
     * An identifier for the party Multiple IDs can be assigned or specified. They can be differentiated
     * by using different identification schemes. If no scheme is given, it should be known to the buyer
     * and seller, e.g. a previously exchanged identifier assigned by the buyer or seller.
     * @param  string|null $description
     * Further legal information that is relevant for the party
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionUltimateShipTo(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Add a global id for the Ship-to Trade Party
     *
     * @param  string|null $globalID
     * Global identifier of the parfty
     * @param  string|null $globalIDType
     * Type of global identification number, must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionUltimateShipToGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Add Tax registration to Ship-To Trade party
     *
     * @param  string|null $taxregtype
     * Type of tax number of the party
     * @param  string|null $taxregid
     * Tax number of the party or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionUltimateShipToTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Sets the postal address of the Ship-To party
     *
     * @param  string|null $lineone
     * The main line in the party's address. This is usually the street name and house number or
     * the post office box
     * @param  string|null $linetwo
     * Line 2 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $linethree
     * Line 3 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param  string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param  string|null $city
     * Usual name of the city or municipality in which the party's address is located
     * @param  string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param  string|null $subdivision
     * The party's state
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionUltimateShipToAddress(?string $lineone = null, ?string $linetwo = null, ?string $linethree = null, ?string $postcode = null, ?string $city = null, ?string $country = null, ?string $subdivision = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Set legal organisation of the Ship-To party
     *
     * @param  string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param  string|null $legalorgtype The identifier for the identification scheme of the legal
     *                                   registration of the party. In particular, the following scheme codes are used: 0021 : SWIFT, 0088 : EAN,
     *                                   0060 : DUNS, 0177 : ODETTE
     * @param  string|null $legalorgname A name by which the party is known, if different from the party's name
     *                                   (also known as the company name)
     * @param  string|null $legalform
     * Additional legal information relevant for the Seller.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionUltimateShipToLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname, ?string $legalform = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Set contact of the Ship-To party
     *
     * @param  string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param  string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param  string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param  string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param  string|null $contactemailadd
     * Detailed information on the party's email address
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionUltimateShipToContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Detailed information on the actual delivery on item level
     *
     * @param  DateTime|null $date
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionSupplyChainEvent(?DateTime $date): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Detailed information on the associated shipping notification on item level
     *
     * @param  string        $issuerassignedid
     * @param  string|null   $lineid
     * @param  DateTime|null $issueddate
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionDespatchAdviceReferencedDocument(string $issuerassignedid, ?string $lineid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Detailed information on the associated shipping notification on item level
     *
     * @param  string        $issuerassignedid
     * @param  string|null   $lineid
     * @param  DateTime|null $issueddate
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionReceivingAdviceReferencedDocument(string $issuerassignedid, ?string $lineid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Detailed information on the associated delivery note on item level
     *
     * @param  string        $issuerassignedid
     * @param  string|null   $lineid
     * @param  DateTime|null $issueddate
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionDeliveryNoteReferencedDocument(string $issuerassignedid, ?string $lineid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        // TODO: Implement this, if possible
        return $this;
    }

    /**
     * Add information about the sales tax that applies to the goods and services invoiced
     * in the relevant invoice line
     *
     * @param  string      $categoryCode
     * Coded description of a sales tax category
     *
     * The following entries from UNTDID 5305 are used (details in brackets):
     *  - Standard rate (sales tax is due according to the normal procedure)
     *  - Goods to be taxed according to the zero rate (sales tax is charged with a percentage of zero)
     *  - Tax exempt (USt./IGIC/IPSI)
     *  - Reversal of the tax liability (the rules for reversing the tax liability at USt./IGIC/IPSI apply)
     *  - VAT exempt for intra-community deliveries of goods (USt./IGIC/IPSI not levied due to rules on intra-community deliveries)
     *  - Free export item, tax not levied (VAT / IGIC/IPSI not levied due to export outside the EU)
     *  - Services outside the tax scope (sales are not subject to VAT / IGIC/IPSI)
     *  - Canary Islands general indirect tax (IGIC tax applies)
     *  - IPSI (tax for Ceuta / Melilla) applies.
     *
     * The codes for the VAT category are as follows:
     *  - S = sales tax is due at the normal rate
     *  - Z = goods to be taxed according to the zero rate
     *  - E = tax exempt
     *  - AE = reversal of tax liability
     *  - K = VAT is not shown for intra-community deliveries
     *  - G = tax not levied due to export outside the EU
     *  - O = Outside the tax scope
     *  - L = IGIC (Canary Islands)
     *  - M = IPSI (Ceuta / Melilla)
     * @param  string      $typeCode
     * In EN 16931 only the tax type “sales tax” with the code “VAT” is supported. Should other types of tax be
     * specified, such as an insurance tax or a mineral oil tax the EXTENDED profile must be used. The code for
     * the tax type must then be taken from the code list UNTDID 5153.
     * @param  float       $rateApplicablePercent
     * The VAT rate applicable to the item invoiced and expressed as a percentage. Note: The code of the sales
     * tax category and the category-specific sales tax rate  must correspond to one another. The value to be
     * given is the percentage. For example, the value 20 is given for 20% (and not 0.2)
     * @param  string|null $exemptionReason
     * Reason for tax exemption (free text)
     * @param  string|null $exemptionReasonCode
     * Reason given in code form for the exemption of the amount from VAT. Note: Code list issued
     * and maintained by the Connecting Europe Facility.
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionTax(string $categoryCode, string $typeCode, float $rateApplicablePercent, ?string $exemptionReason = null, ?string $exemptionReasonCode = null): UblDocumentBuilder
    {
        $item = $this->ublBuilderHelper->ensureInvoiceLineItem();

        $taxCategory = (new ClassifiedTaxCategory())
            ->setId(new ID($categoryCode))
            ->setTaxScheme(
                (new TaxScheme())
                    ->setID(new ID($typeCode))
            );

        if ($rateApplicablePercent !== null) {
            $taxCategory->setPercent(new Percent($rateApplicablePercent));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReason)) {
            $taxCategory->addToTaxExemptionReason(new TaxExemptionReason($exemptionReason));
        }
        if (!StringUtils::stringIsNullOrEmpty($exemptionReasonCode)) {
            $taxCategory->setTaxExemptionReasonCode(new TaxExemptionReasonCode($exemptionReasonCode));
        }

        $item->addToClassifiedTaxCategory($taxCategory);

        return $this;
    }

    /**
     * Set information about the period relevant for the invoice item.
     * Note: Also known as the invoice line delivery period.
     *
     * @param  DateTime|null $startdate
     * Start of the billing period
     * @param  DateTime|null $endDate
     * End of the billing period
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionBillingPeriod(?DateTime $startdate, ?DateTime $endDate): UblDocumentBuilder
    {
        if ($startdate !== null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureInvoiceLineBillingPeriod();
            $invoicePeriod->setStartDate($startdate);
        }
        if ($endDate !== null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureInvoiceLineBillingPeriod();
            $invoicePeriod->setEndDate($endDate);
        }

        return $this;
    }

    /**
     * Add surcharges and discounts on position level
     *
     * @param  float       $actualAmount
     * The surcharge/discount amount excluding sales tax
     * @param  boolean     $isCharge
     * Switch that indicates whether the following data refer to an allowance or a discount,
     * true means that
     * @param  float|null  $calculationPercent
     * The percentage that may be used in conjunction with the base invoice line discount
     * amount to calculate the invoice line discount amount
     * @param  float|null  $basisAmount
     * The base amount that may be used in conjunction with the invoice line discount percentage
     * to calculate the invoice line discount amount
     * @param  string|null $reasonCode
     * The reason given as a code for the invoice line discount
     *
     * __Notes__
     *  - Use entries from the UNTDID 5189 code list (discounts) or the UNTDID 7161 code list
     *    (surcharges). The invoice line discount reason code and the invoice line discount reason must
     *    match.
     *  - In the case of a discount, the code list UNTDID 5189 must be used.
     *  - In the event of a surcharge, the code list UNTDID 7161 must be used.
     *
     * In particular, the following codes can be used:
     *  - AA = Advertising
     *  - ABL = Additional packaging
     *  - ADR = Other services
     *  - ADT = Pick-up
     *  - FC = Freight service
     *  - FI = Financing
     *  - LA = Labelling
     *
     * Include PEPPOL subset:
     *  - 41 - Bonus for works ahead of schedule
     *  - 42 - Other bonus
     *  - 60 - Manufacturer’s consumer discount
     *  - 62 - Due to military status
     *  - 63 - Due to work accident
     *  - 64 - Special agreement
     *  - 65 - Production error discount
     *  - 66 - New outlet discount
     *  - 67 - Sample discount
     *  - 68 - End-of-range discount
     *  - 70 - Incoterm discount
     *  - 71 - Point of sales threshold allowance
     *  - 88 - Material surcharge/deduction
     *  - 95 - Discount
     *  - 100 - Special rebate
     *  - 102 - Fixed long term
     *  - 103 - Temporary
     *  - 104 - Standard
     *  - 105 - Yearly turnover
     *
     * Codelists: UNTDID 7161 (Complete list), UNTDID 5189 (Restricted)
     * @param  string|null $reason
     * The reason given in text form for the invoice item discount/surcharge
     *
     * __Notes__
     *  - The invoice line discount reason code (BT-140) and the invoice line discount reason
     *    (BT-139) must show the same allowance type.
     *  - Each line item discount (BG-27) must include a corresponding line discount reason
     *    (BT-139) or an appropriate line discount reason code (BT-140), or both.
     *  - The code for the reason for the charge at the invoice line level (BT-145) and the
     *    reason for the invoice line discount (BT-144) must show the same discount type
     * @return UblDocumentBuilder
     */
    public function addDocumentPositionAllowanceCharge(float $actualAmount, bool $isCharge, ?float $calculationPercent = null, ?float $basisAmount = null, ?string $reasonCode = null, ?string $reason = null, ?float $multiplierFactor = null): UblDocumentBuilder
    {
        $allowanceCharge = new AllowanceCharge();
        $allowanceCharge->setAmount((new Amount($actualAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()->value()));
        $allowanceCharge->setChargeIndicator($isCharge);

        if ($basisAmount !== null) {
            $allowanceCharge->setBaseAmount((new BaseAmount($basisAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()->value()));
        }
        if (!StringUtils::stringIsNullOrEmpty($reason)) {
            $allowanceCharge->addToAllowanceChargeReason(new AllowanceChargeReason($reason));
        }
        if (!StringUtils::stringIsNullOrEmpty($reasonCode)) {
            $allowanceCharge->setAllowanceChargeReasonCode(new AllowanceChargeReasonCode($reasonCode));
        }
        if ($multiplierFactor !== null) {
            $allowanceCharge->setMultiplierFactorNumeric(new MultiplierFactorNumeric($multiplierFactor));
        }

        $this->currentPosition->addToAllowanceCharge($allowanceCharge);

        return $this;
    }

    /**
     * Set information on item totals
     *
     * @param  float $lineTotalAmount
     * The total amount of the invoice item.
     * __Note:__ This is the "net" amount, that is, excluding sales tax, but including all surcharges
     * and discounts applicable to the item level, as well as other taxes.
     * @return UblDocumentBuilder
     */
    public function setDocumentPositionLineSummation(float $lineTotalAmount): UblDocumentBuilder
    {
        $this->currentPosition->setLineExtensionAmount((new LineExtensionAmount($lineTotalAmount))->setCurrencyID($this->invoiceObject->getDocumentCurrencyCode()));
        return $this;
    }

    /**
     * Creates a new instance of the invoice class
     *
     * @return UblDocumentBuilder
     */
    private function initInvoiceObject(): UblDocumentBuilder
    {
        $this->invoiceObject = new Invoice();
        return $this;
    }

    /**
     * Creates a new instance of the internal builder helper
     *
     * @return UblDocumentBuilder
     */
    private function initBuilderHelper(): UblDocumentBuilder
    {
        $this->ublBuilderHelper = new UblDocumentBuilderHelper($this);
        return $this;
    }
}
