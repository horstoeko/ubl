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
use \horstoeko\ubl\entities\cac\Party;
use \horstoeko\ubl\entities\cac\Address;
use \horstoeko\ubl\entities\cac\Contact;
use \horstoeko\ubl\entities\cac\Country;
use \horstoeko\ubl\entities\cbc\Percent;
use \horstoeko\ubl\entities\cbc\Telefax;
use \horstoeko\ubl\entities\cac\Delivery;
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
use \horstoeko\ubl\entities\cac\Attachment;
use \horstoeko\ubl\entities\cac\PayeeParty;
use \horstoeko\ubl\entities\cbc\HolderName;
use \horstoeko\ubl\entities\cbc\PostalZone;
use \horstoeko\ubl\entities\cbc\StreetName;
use \MimeTyper\Repository\MimeDbRepository;
use horstoeko\ubl\entities\cbc\Description;
use \horstoeko\stringmanagement\StringUtils;
use \horstoeko\ubl\entities\cac\CardAccount;
use \horstoeko\ubl\entities\cac\TaxCategory;
use \horstoeko\ubl\entities\cac\TaxSubtotal;
use \horstoeko\ubl\entities\cac\PaymentMeans;
use \horstoeko\ubl\entities\cbc\SalesOrderID;
use horstoeko\ubl\entities\cac\InvoicePeriod;
use \horstoeko\ubl\entities\cac\DeliveryParty;
use \horstoeko\ubl\entities\cac\PostalAddress;
use \horstoeko\ubl\entities\cbc\TaxableAmount;
use \horstoeko\ubl\entities\cac\OrderReference;
use \horstoeko\ubl\entities\cac\PartyTaxScheme;
use \horstoeko\ubl\entities\cac\PaymentMandate;
use \horstoeko\ubl\entities\cbc\BuyerReference;
use \horstoeko\ubl\entities\cbc\ElectronicMail;
use \horstoeko\ubl\entities\cbc\CustomizationID;
use \horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use \horstoeko\ubl\entities\cac\BillingReference;
use \horstoeko\ubl\entities\cac\DeliveryLocation;
use \horstoeko\ubl\entities\cac\PartyLegalEntity;
use \horstoeko\ubl\entities\cac\ProjectReference;
use \horstoeko\ubl\entities\cbc\CountrySubentity;
use \horstoeko\ubl\entities\cbc\DocumentTypeCode;
use \horstoeko\ubl\entities\cbc\PaymentMeansCode;
use \horstoeko\ubl\entities\cbc\RegistrationName;
use \horstoeko\ubl\entities\cac\ExternalReference;
use horstoeko\ubl\entities\cbc\TaxExemptionReason;
use \horstoeko\ubl\entities\cbc\IdentificationCode;
use \horstoeko\ubl\entities\cac\PartyIdentification;
use \horstoeko\ubl\entities\cbc\DocumentDescription;
use \horstoeko\ubl\entities\cbc\AdditionalStreetName;
use \horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use \horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use \horstoeko\ubl\entities\cac\PayerFinancialAccount;
use horstoeko\ubl\entities\cbc\TaxExemptionReasonCode;
use \horstoeko\ubl\entities\cac\TaxRepresentativeParty;
use \horstoeko\ubl\entities\cbc\PrimaryAccountNumberID;
use horstoeko\ubl\entities\cbc\ExceptionResolutionCode;
use \horstoeko\ubl\entities\cac\AccountingCustomerParty;
use \horstoeko\ubl\entities\cac\AccountingSupplierParty;
use \horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use \horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use \horstoeko\ubl\entities\cac\ContractDocumentReference;
use \horstoeko\ubl\entities\cac\DespatchDocumentReference;
use \horstoeko\ubl\entities\cac\FinancialInstitutionBranch;
use \horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;

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
     * @var \horstoeko\ubl\entities\main\Invoice
     */
    protected $invoiceObject = null;

    /**
     * @internal
     * The internal reference to the builder helper (tool)
     * @var \horstoeko\ubl\UblDocumentBuilderHelper
     */
    protected $ublBuilderHelper = null;

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
        "application/xml",
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
     * @param string $xmlfilename
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
     * @param string|null $customization
     * The identifier for the customization
     * @return UblDocumentBuilder
     */
    public function setDocumentCustomization(?string $customization = null): UblDocumentBuilder
    {
        $this->invoiceObject->setCustomizationID(new CustomizationID($customization));
        return $this;
    }

    /**
     * Set main information about this document
     *
     * @param string $documentno
     * The document no issued by the seller
     * @param string $documenttypecode
     * The type of the document, See \horstoeko\codelists\ZugferdInvoiceType for details
     * @param DateTime $documentdate Date of invoice
     * The date when the document was issued by the seller
     * @param string $documentCurrencyCode Code for the invoice currency
     * The code for the invoice currency
     * @return UblDocumentBuilder
     */
    public function setDocumentInformation(string $documentno, string $documenttypecode, DateTime $documentdate, string $documentCurrencyCode): UblDocumentBuilder
    {
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentno, "Invoice number must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documenttypecode, "Invoice type code must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentdate, "Invoice issue date must not be empty");
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($documentCurrencyCode, "Invoice currency code must not be empty");

        $this->invoiceObject->setID(new Id($documentno));
        $this->invoiceObject->setInvoiceTypeCode(new InvoiceTypeCode($documenttypecode));
        $this->invoiceObject->setIssueDate($documentdate);
        $this->invoiceObject->setDocumentCurrencyCode(new DocumentCurrencyCode($documentCurrencyCode));

        return $this;
    }

    /**
     * Adds a note to the document
     *
     * @param string $note
     * The free-text to add as a document note
     * @return UblDocumentBuilder
     */
    public function addDocumentNote(string $note): UblDocumentBuilder
    {
        $this->ublBuilderHelper->assertNotEmptyAndNotNull($note, "The note must not be empy");

        $this->invoiceObject->addToNote(new Note($note));

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
     * An identifier assigned by the buyer and used for internal routing.
     *
     * __Note__: The reference is specified by the buyer (e.g. contact details, department, office ID, project code),
     * but stated by the seller on the invoice.
     *
     * __Note__: The route ID must be specified in the Buyer Reference (BT-10) in the XRechnung. According to the XRechnung
     * standard, two syntaxes are permitted for displaying electronic invoices: Universal Business Language (UBL) and UN/CEFACT
     * Cross Industry Invoice (CII).
     *
     * @param string|null $buyerreference
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
     * @param string|null $name The full formal name under which the seller is registered in the
     * National Register of Legal Entities, Taxable Person or otherwise acting as person(s)
     * @param string|null $id
     * An identifier of the seller. In many systems, seller identification
     * is key information. Multiple seller IDs can be assigned or specified. They can be differentiated
     * by using different identification schemes. If no scheme is given, it should be known to the buyer
     * and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @return UblDocumentBuilder
     */
    public function setDocumentSeller(?string $name = null, ?string $id = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $party = $this->ublBuilderHelper->ensureAccountingSupplierParty();
            $party->addToPartyName((new PartyName())->setName((new Name($name))));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $party = $this->ublBuilderHelper->ensureAccountingSupplierParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
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
     * @param string|null $globalID
     * The seller's identifier identification scheme is an identifier uniquely assigned to a seller by a
     * global registration organization.
     * @param string|null $globalIDType
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
     * @param string|null $taxregtype Type of tax number of the seller
     * @param string|null $taxregid Tax number of the seller or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
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
     * @param string|null $lineone
     * The main line in the sellers address. This is usually the street name and house number or
     * the post office box
     * @param string|null $linetwo
     * Line 2 of the seller's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $linethree
     * Line 3 of the seller's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param string|null $city
     * Usual name of the city or municipality in which the seller's address is located
     * @param string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param string|null $subdivision
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
     * @param string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * seller as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer and seller
     * @param string|null $legalorgtype
     * The identifier for the identification scheme of the legal
     * registration of the seller. If the identification scheme is used, it must be selected from
     * ISO/IEC 6523 list
     * @param string|null $legalorgname
     * A name by which the seller is known, if different from the seller's name (also known as
     * the company name). Note: This may be used if different from the seller's name.
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() != null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingSupplierPartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }

        return $this;
    }

    /**
     * Set detailed information on the seller's contact person
     *
     * @param string|null $contactpersonname
     * Contact point for a legal entity,
     * such as a personal name of the contact person
     * @param string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param string|null $contactphoneno
     * Detailed information on the seller's phone number
     * @param string|null $contactfaxno
     * Detailed information on the seller's fax number
     * @param string|null $contactemailadd
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
     * @param string|null $name
     * The full name of the buyer
     * @param string|null $id
     * An identifier of the buyer. In many systems, buyer identification is key information. Multiple buyer IDs can be
     * assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given,
     * it should be known to the buyer and buyer, e.g. a previously exchanged, seller-assigned identifier of the buyer
     * @param string|null $description
     * Further legal information about the buyer
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyer(?string $name = null, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $party = $this->ublBuilderHelper->ensureAccountingCustomerParty();
            $party->addToPartyName((new PartyName())->setName((new Name($name))));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $party = $this->ublBuilderHelper->ensureAccountingCustomerParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
        }

        return $this;
    }

    /**
     * Add a global id for the buyer
     *
     * @param string|null $globalID
     * The buyers's identifier identification scheme is an identifier uniquely assigned to a buyer by a
     * global registration organization.
     * @param string|null $globalIDType
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
     * @param string|null $taxregtype
     * Type of tax number of the buyers
     * @param string|null $taxregid
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
     * @param string|null $lineone
     * The main line in the buyers address. This is usually the street name and house number or
     * the post office box
     * @param string|null $linetwo
     * Line 2 of the buyers address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $linethree
     * Line 3 of the buyers address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param string|null $city
     * Usual name of the city or municipality in which the buyers address is located
     * @param string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param string|null $subdivision
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
     * @param string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * buyer as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer and buyer
     * @param string|null $legalorgtype
     * The identifier for the identification scheme of the legal
     * registration of the buyer. If the identification scheme is used, it must be selected from
     * ISO/IEC 6523 list
     * @param string|null $legalorgname
     * A name by which the buyer is known, if different from the buyers name
     * (also known as the company name)
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            if ($partyLegalEntity->getCompanyID() != null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureAccountingCustomerLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }

        return $this;
    }

    /**
     * Set contact of the buyer party
     *
     * @param string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param string|null $contactphoneno
     * Detailed information on the buyer's phone number
     * @param string|null $contactfaxno
     * Detailed information on the buyer's fax number
     * @param string|null $contactemailadd
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
     * @param string|null $name
     * The full name of the seller's tax agent
     * @param string|null $id
     * An identifier of the sellers tax agent.
     * @param string|null $description
     * Further legal information that is relevant for the sellers tax agent
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeTradeParty(?string $name = null, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $taxRepresentativeParty = $this->ublBuilderHelper->ensureTaxRepresentativeTradeParty();
            $taxRepresentativeParty->addToPartyName((new PartyName())->setName((new Name($name))));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $taxRepresentativeParty = $this->ublBuilderHelper->ensureTaxRepresentativeTradeParty();
            $taxRepresentativeParty->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
        }

        return $this;
    }

    /**
     * Add a global id for the Tax representative party
     *
     * @param string|null $globalID
     * The seller's tax agent identifier identification scheme is an identifier uniquely assigned to a seller by a
     * global registration organization.
     * @param string|null $globalIDType
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
     * @param string|null $taxregtype
     * @param string|null $taxregid
     * @return UblDocumentBuilder
     */
    public function addDocumentSellerTaxRepresentativeTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && StringUtils::stringIsNullOrEmpty($taxregid)) {
            $taxRepresentativeParty = $this->ublBuilderHelper->ensureTaxRepresentativeTradeParty();
            $taxRepresentativeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets the postal address of the tax representative party
     *
     * @param string|null $lineone
     * The main line in the sellers tax agent address. This is usually the street name and house number or
     * the post office box
     * @param string|null $linetwo
     * Line 2 of the sellers tax agent address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $linethree
     * Line 3 of the sellers tax agent address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param string|null $city
     * Usual name of the city or municipality in which the sellers tax agent address is located
     * @param string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param string|null $subdivision
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
     * @param string|null $legalorgid
     * An identifier issued by an official registrar that identifies the seller tax agent as
     * a legal entity or legal person.
     * @param string|null $legalorgtype
     * The identifier for the identification scheme of the legal registration of the sellers tax
     * agent. If the identification scheme is used, it must be selected from  ISO/IEC 6523 list
     * @param string|null $legalorgname
     * A name by which the sellers tax agent is known, if different from the  sellers tax agent
     * name (also known as the company name)
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() != null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureTaxRepresentativeTradePartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }

        return $this;
    }

    /**
     * Set contact of the tax representative party
     *
     * @param string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param string|null $contactphoneno
     * Detailed information on the seller's phone number
     * @param string|null $contactfaxno
     * Detailed information on the seller's fax number
     * @param string|null $contactemailadd
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
     * @param string|null $name
     * The name of the party to whom the goods are being delivered or for whom the services are being
     * performed. Must be used if the recipient of the goods or services is not the same as the buyer.
     * @param string|null $id
     * An identifier for the place where the goods are delivered or where the services are provided.
     * Multiple IDs can be assigned or specified. They can be differentiated by using different
     * identification schemes. If no scheme is given, it should be known to the buyer and seller, e.g.
     * a previously exchanged identifier assigned by the buyer or seller.
     * @param string|null $description
     * Further legal information that is relevant for the party
     * @return UblDocumentBuilder
     */
    public function setDocumentShipTo(?string $name = null, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $party = $this->ublBuilderHelper->ensureDeliveryParty();
            $party->addToPartyName((new PartyName())->setName((new Name($name))));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $party = $this->ublBuilderHelper->ensureDeliveryParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
        }

        return $this;
    }

    /**
     * Add a global id for the Ship-to Trade Party
     *
     * @param string|null $globalID
     * Global identifier of the goods recipient
     * @param string|null $globalIDType
     * Type of global identification number, must be selected from the entries in
     * the list published by the ISO / IEC 6523 Maintenance Agency.
     * @return UblDocumentBuilder
     */
    public function addDocumentShipToGlobalId(?string $globalID = null, ?string $globalIDType = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($globalID) && !StringUtils::stringIsNullOrEmpty($globalIDType)) {
            $party = $this->ublBuilderHelper->ensureDeliveryParty();
            $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));
        }

        return $this;
    }

    /**
     * Add Tax registration to Ship-To Trade party
     *
     * @param string|null $taxregtype
     * Type of tax number of the party
     * @param string|null $taxregid
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
     * @param string|null $lineone
     * The main line in the party's address. This is usually the street name and house number or
     * the post office box
     * @param string|null $linetwo
     * Line 2 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $linethree
     * Line 3 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param string|null $city
     * Usual name of the city or municipality in which the party's address is located
     * @param string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param string|null $subdivision
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
     * @param string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param string|null $legalorgtype The identifier for the identification scheme of the legal
     * registration of the party. In particular, the following scheme codes are used: 0021 : SWIFT, 0088 : EAN,
     * 0060 : DUNS, 0177 : ODETTE
     * @param string|null $legalorgname A name by which the party is known, if different from the party's name
     * (also known as the company name)
     * @return UblDocumentBuilder
     */
    public function setDocumentShipToLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() != null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensureDeliveryPartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }

        return $this;
    }

    /**
     * Set contact of the Ship-To party
     *
     * @param string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param string|null $contactemailadd
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

    // TODO: UltimateShipTo goes here...

    // TODO: ShipFrom goes here...

    // TODO: Invoicer goes here...

    // TODO: Invoicee goes here

    /**
     * Set detailed information about the payee, i.e. about the place that receives the payment.
     * The role of the payee may also be performed by a party other than the seller, e.g. by a factoring service.
     *
     * @param string|null $name
     * The name of the party. Must be used if the payee is not the same as the seller. However, the name of the
     * payee may match the name of the seller.
     * @param string|null $id
     * An identifier for the party. Multiple IDs can be assigned or specified. They can be differentiated by using
     * different identification schemes. If no scheme is given, it should  be known to the buyer and seller, e.g.
     * a previously exchanged identifier assigned by the buyer or seller.
     * @param string|null $description
     * Further legal information that is relevant for the party
     * @return UblDocumentBuilder
     */
    public function setDocumentPayee(?string $name = null, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($name)) {
            $payeeParty = $this->ublBuilderHelper->ensurePayeeParty();
            $payeeParty->addToPartyName((new PartyName())->setName((new Name($name))));
        }
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $payeeParty = $this->ublBuilderHelper->ensurePayeeParty();
            $payeeParty->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
        }

        return $this;
    }

    /**
     * Add a global id for the payee trade party
     *
     * @param string|null $globalID
     * Global identification number
     * @param string|null $globalIDType
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
     * @param string|null $taxregtype
     * Type of tax number of the party
     * @param string|null $taxregid
     * Tax number of the party or sales tax identification number of the (FC = Tax number, VA = Sales tax number)
     * @return UblDocumentBuilder
     */
    public function addDocumentPayeeTaxRegistration(?string $taxregtype = null, ?string $taxregid = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($taxregtype) && StringUtils::stringIsNullOrEmpty($taxregid)) {
            $payeeParty = $this->ublBuilderHelper->ensurePayeeParty();
            $payeeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));
        }

        return $this;
    }

    /**
     * Sets the postal address of the payee trade party
     *
     * @param string|null $lineone
     * The main line in the party's address. This is usually the street name and house number or
     * the post office box
     * @param string|null $linetwo
     * Line 2 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $linethree
     * Line 3 of the party's address. This is an additional address line in an address that can be
     * used to provide additional details in addition to the main line
     * @param string|null $postcode
     * Identifier for a group of properties, such as a zip code
     * @param string|null $city
     * Usual name of the city or municipality in which the party's address is located
     * @param string|null $country
     * Code used to identify the country. If no tax agent is specified, this is the country in which the sales tax
     * is due. The lists of approved countries are maintained by the EN ISO 3166-1 Maintenance Agency “Codes for the
     * representation of names of countries and their subdivisions”
     * @param string|null $subdivision
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
     * @param string|null $legalorgid
     * An identifier issued by an official registrar that identifies the
     * party as a legal entity or legal person. If no identification scheme ($legalorgtype) is provided,
     * it should be known to the buyer or seller party
     * @param string|null $legalorgtype
     * The identifier for the identification scheme of the legal registration of the party. In particular,
     * the following scheme codes are used: 0021 : SWIFT, 0088 : EAN, 0060 : DUNS, 0177 : ODETTE
     * @param string|null $legalorgname
     * A name by which the party is known, if different from the party's name (also known as the company name)
     * @return UblDocumentBuilder
     */
    public function setDocumentPayeeLegalOrganisation(?string $legalorgid = null, ?string $legalorgtype = null, ?string $legalorgname = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($legalorgid)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            $partyLegalEntity->setCompanyID((new CompanyID($legalorgid)));
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgtype)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            if ($partyLegalEntity->getCompanyID() != null) {
                $partyLegalEntity->getCompanyID()->setSchemeID($legalorgtype);
            }
        }
        if (!StringUtils::stringIsNullOrEmpty($legalorgname)) {
            $partyLegalEntity = $this->ublBuilderHelper->ensurePayeePartyLegalEntity();
            $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));
        }

        return $this;
    }

    /**
     * Set contact of the payee trade party
     *
     * @param string|null $contactpersonname
     * Contact point for a legal entity, such as a personal name of the contact person
     * @param string|null $contactdepartmentname
     * Contact point for a legal entity, such as a name of the department or office
     * @param string|null $contactphoneno
     * Detailed information on the party's phone number
     * @param string|null $contactfaxno
     * Detailed information on the party's fax number
     * @param string|null $contactemailadd
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
     * @param string|null $issuerassignedid
     * An identifier issued by the seller for a referenced sales order (Order confirmation number)
     * @param DateTime|null $issueddate
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
     * @param string|null $issuerassignedid
     * An identifier issued by the buyer for a referenced order (order number)
     * @param DateTime|null $issueddate
     * Date of order
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerOrderReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $orderReference = $this->ublBuilderHelper->ensureOrderReference();
            $orderReference->setID(new Id($issuerassignedid));
            if ($issueddate != null) {
                $orderReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set details of the associated contract
     *
     * @param string|null $issuerassignedid
     * The contract reference should be assigned once in the context of the specific trade relationship and for a
     * defined period of time (contract number)
     * @param DateTime|null $issueddate
     * Contract date
     * @return UblDocumentBuilder
     */
    public function setDocumentContractReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $contractReference = $this->ublBuilderHelper->ensureContractReference();
            $contractReference->setId(new Id($issuerassignedid));
            if ($issueddate != null) {
                $contractReference->setIssueDate($issueddate);
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
     * @param string|null $issuerassignedid
     * The identifier of the tender or lot to which the invoice relates, or an identifier specified by the seller for
     * an object on which the invoice is based, or an identifier of the document on which the invoice is based.
     * @param string|null $typecode
     * Type of referenced document (See codelist UNTDID 1001)
     *  - Code 916 "reference paper" is used to reference the identification of the document on which the invoice is based
     *  - Code 50 "Price / sales catalog response" is used to reference the tender or the lot
     *  - Code 130 "invoice data sheet" is used to reference an identifier for an object specified by the seller.
     * @param string|null $uriid
     * The Uniform Resource Locator (URL) at which the external document is available. A means of finding the resource
     * including the primary access method intended for it, e.g. http: // or ftp: //. The location of the external document
     * must be used if the buyer needs additional information to support the amounts billed. External documents are not part
     * of the invoice. Access to external documents can involve certain risks.
     * @param string|array|null $name
     * A description of the document, e.g. Hourly billing, usage or consumption report, etc.
     * @param string|null $reftypecode
     * The identifier for the identification scheme of the identifier of the item invoiced. If it is not clear to the
     * recipient which scheme is used for the identifier, an identifier of the scheme should be used, which must be selected
     * from UNTDID 1153 in accordance with the code list entries.
     * @param DateTime|null $issueddate
     * Document date
     * @param string|null $binarydatafilename
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

        if ($issueddate != null) {
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
     * @param string|null $issuerassignedid
     * Number of the previous invoice
     * @param DateTime|null $issueddate
     * Date of the previous invoice
     * @return UblDocumentBuilder
     */
    public function setDocumentInvoiceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $billingReference = isset($this->invoiceObject->getBillingReference()[0]) ?
            $this->invoiceObject->getBillingReference()[0] :
            $this->invoiceObject->addToBillingReference(new BillingReference())->getBillingReference()[0];

        $invoiceReference = $billingReference->getInvoiceDocumentReference() != null ?
            $billingReference->getInvoiceDocumentReference :
            $billingReference->setInvoiceDocumentReference(new InvoiceDocumentReference())->getInvoiceDocumentReference();

        $invoiceReference->setId(new Id($issuerassignedid));
        if ($issueddate != null) $invoiceReference->setIssueDate($issueddate);

        return $this;
    }

    /**
     * Set Details of a project reference
     *
     * @param string|null $id
     * Project number/id
     * @param DateTime|null $date
     * Project date
     * @return UblDocumentBuilder
     */
    public function setDocumentProcuringProject(?string $id = null, ?DateTime $date = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $procuringproject = $this->ublBuilderHelper->ensureProjectReference();
            $procuringproject->setID(new ID($id));
            if ($date != null) {
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
     * @param string|null $issuerassignedid
     * Shipping notification reference
     * @param DateTime|null $issueddate
     * Shipping notification date
     * @return UblDocumentBuilder
     */
    public function setDocumentDespatchAdviceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $despatchDocumentReference = $this->ublBuilderHelper->ensureDespatchDocumentReference();
            $despatchDocumentReference->setID(new ID($issuerassignedid));
            if ($issueddate != null) {
                $despatchDocumentReference->setIssueDate($issueddate);
            }
        }

        return $this;
    }

    /**
     * Set detailed information on the associated goods receipt notification
     *
     * @param string|null $issuerassignedid
     * An identifier for a referenced goods receipt notification (Goods receipt number)
     * @param DateTime|null $issueddate
     * Goods receipt date
     * @return UblDocumentBuilder
     */
    public function setDocumentReceivingAdviceReferencedDocument(?string $issuerassignedid = null, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        if (!StringUtils::stringIsNullOrEmpty($issuerassignedid)) {
            $receiptDocumentReference = $this->ublBuilderHelper->ensureReceiptDocumentReference();
            $receiptDocumentReference->setID(new ID($issuerassignedid));
            if ($issueddate != null) {
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
     * @param string|null $typecode
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
     * @param string|null $information
     * The expected or used means of payment expressed in text form, e.g. cash, bank transfer, direct debit,
     * credit card, etc.
     * @param string|null $cardType
     * The type of the card
     * @param string|null $cardId
     * The primary account number (PAN) to which the card used for payment belongs. In accordance with card
     * payment security standards, an invoice should never contain a full payment card master account number.
     * The following specification of the PCI Security Standards Council currently applies: The first 6 and
     * last 4 digits at most are to be displayed
     * @param string|null $cardHolderName
     * Name of the payment card holder
     * @param string|null $buyerIban
     * Direct debit: ID of the account to be debited
     * @param string|null $payeeIban
     * Transfer: A unique identifier for the financial account held with a payment service provider to which
     * the payment should be made, e.g. Use an IBAN (in the case of a SEPA payment) for a national ProprietaryID
     * account number
     * @param string|null $payeeAccountName
     * The name of the payment account held with a payment service provider to which the payment should be made.
     * Information only required if different from the name of the payee / seller
     * @param string|null $payeePropId
     * National account number (not for SEPA)
     * @param string|null $payeeBic
     * Seller's banking institution, An identifier for the payment service provider with whom the payment account
     * is managed, such as the BIC or a national bank code, if required. No identification scheme is to be used.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMean(?string $typecode = null, ?string $information = null, ?string $cardType = null, ?string $cardId = null, ?string $cardHolderName = null, ?string $buyerIban = null, ?string $payeeIban = null, ?string $payeeAccountName = null, ?string $payeePropId = null, ?string $payeeBic = null, ?string $mandate = null): UblDocumentBuilder
    {
        if ($typecode == "58") {
            return $this->addDocumentPaymentMeanSepaCreditTransfer($payeeIban);
        }
        if ($typecode == "59") {
            return $this->addDocumentPaymentMeanSepaCreditTransfer($buyerIban, $mandate);
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
            $payerFinancialAccount = $paymentMean->getPayerFinancialAccount() ?? $paymentMean->setPayerFinancialAccount(new PayerFinancialAccount())->getPayerFinancialAccount();
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

        return $this;
    }

    /**
     * Create payment means for payment type 58 (SEPA credit transfer)
     * German translation: SEPA-Überweisung
     *
     * @param string|null $payeeIban
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaCreditTransfer(?string $payeeIban = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode((new PaymentMeansCode("58"))->setName("SEPA credit transfer"));
        $paymentMean->setPayeeFinancialAccount(new PayeeFinancialAccount())->getPayeeFinancialAccount()->setID(new ID($payeeIban));

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Create payment means for payment type 59 (SEPA direct debit)
     * German translation: SEPA Lastschrift
     *
     * @param string|null $buyerIban
     * Debited account,  __German translation:__ Belastetes Konto
     * @param string|null $mandate
     * Mandate reference identifier
     * Unique identifier assigned by the Payee for referencing the direct debit mandate. Used in order to pre-notify
     * the Buyer of a SEPA direct debit, __German translation:__ Mandatsreferenz
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaDirectDebit(?string $buyerIban = null, ?string $mandate = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode((new PaymentMeansCode("59"))->setName("SEPA direct debit"));
        $paymentMean->setPaymentMandate(new PaymentMandate())->getPaymentMandate()->setPayerFinancialAccount((new PayerFinancialAccount())->setID(new ID($buyerIban)))->setID(new ID($mandate));

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Create payment means for payment type 48 (Bank card)
     *
     * @param string|null $cardType
     * Card Network identifier, such as VISA, American Express, Master Card.
     * @param string|null $cardId
     * The Primary Account Number (PAN) of the card used for payment.In accordance with card payments security
     * standards, an invoice should never include a full card primary account number. This method will do the
     * security for you automatically
     * @param string|null $cardHolderName
     * The name of the payment card holder.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanBankCard(?string $cardType = null, ?string $cardId = null, ?string $cardHolderName = null): UblDocumentBuilder
    {
        $paymentMean = new PaymentMeans();
        $paymentMean->setPaymentMeansCode((new PaymentMeansCode("48"))->setName("Bank card"));
        $paymentMean->setCardAccount((new CardAccount)
            ->setPrimaryAccountNumberID(new PrimaryAccountNumberID(substr($cardId, -4)))
            ->setNetworkID(new NetworkID($cardType))
            ->setHolderName(new HolderName($cardHolderName)));

        $this->invoiceObject->addToPaymentMeans($paymentMean);

        return $this;
    }

    /**
     * Add a VAT breakdown (at document level)
     *
     * @param string $categoryCode
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
     * @param string $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param float $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param float $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param float $rateApplicablePercent
     * The sales tax rate, expressed as the percentage applicable to the sales tax category in
     * question. Note: The code of the sales tax category and the category-specific sales tax rate
     * must correspond to one another. The value to be given is the percentage. For example, the
     * value 20 is given for 20% (and not 0.2)
     * @param string|null $exemptionReason
     * Reason for tax exemption (free text)
     * @param string|null $exemptionReasonCode
     * Reason given in code form for the exemption of the amount from VAT. Note: Code list issued
     * and maintained by the Connecting Europe Facility.
     * @param float|null $lineTotalBasisAmount
     * Tax rate goods amount
     * @param float|null $allowanceChargeBasisAmount
     * Total amount of surcharges and deductions of the tax rate at document level
     * @param DateTime|null $taxPointDate
     * Specification of a date, in accordance with the sales tax guideline, on which the sales tax
     * for the seller and for the buyer becomes relevant for accounting, insofar as this date can be
     * determined and differs from the invoice date
     * Note: The tax collection date for VAT purposes is usually the date the goods were delivered or
     * the service was completed (the base tax date). There are a few variations. For further information,
     * please refer to Article 226 (7) of Council Directive 2006/112 / EC. This element is required
     * if the date set for the sales tax return differs from the invoice date. Both the buyer and the
     * seller should use the delivery date for VAT returns, if provided by the seller.
     * This is not used in Germany. Instead, the delivery and service date must be specified.
     * @param string|null $dueDateTypeCode
     * The code for the date on which sales tax becomes relevant for the seller and the buyer.
     * The code must distinguish between the following entries from UNTDID 2005:
     *  - date of issue of the invoice document
     *  - actual delivery date
     *  - Date of payment.
     *
     * The VAT Collection Date Code is used when the VAT Collection Date is not known for VAT purposes
     * when the invoice is issued.
     *
     * The semantic values cited in the standard, which are represented by the values 3, 35, 432 in
     * UNTDID2005, are mapped to the following values of UNTDID2475, which is the relevant code list
     * supported by CII 16B:
     *  - 5: date of issue of the invoice
     *  - 29: Delivery date, current status
     *  - 72: Paid to date
     *
     * In Germany, the date of delivery and service is decisive.
     * @return UblDocumentBuilder
     */
    public function addDocumentTax(string $categoryCode, string $typeCode, float $basisAmount, float $calculatedAmount, float $rateApplicablePercent, ?string $exemptionReason = null, ?string $exemptionReasonCode = null, ?float $lineTotalBasisAmount = null, ?float $allowanceChargeBasisAmount = null, ?DateTime $taxPointDate = null, ?string $dueDateTypeCode = null): UblDocumentBuilder
    {
        $taxTotalAmount = 0.0;

        $taxCurrencyCode = $this->invoiceObject->getTaxCurrencyCode() != null ? $this->invoiceObject->getTaxCurrencyCode()->value() : null;
        $taxCurrencyCode = StringUtils::stringIsNullOrEmpty($taxCurrencyCode) == true ? $this->invoiceObject->getDocumentCurrencyCode()->value() : $taxCurrencyCode;

        $taxTotal = isset($this->invoiceObject->getTaxTotal()[0]) ?
            $this->invoiceObject->getTaxTotal()[0] :
            $this->invoiceObject->addToTaxTotal(new TaxTotal())->getTaxTotal()[0];

        $taxSubTotal = new TaxSubtotal();
        $taxSubTotal->setTaxableAmount((new TaxableAmount($basisAmount))->setCurrencyID($taxCurrencyCode));
        $taxSubTotal->setTaxAmount((new TaxAmount($calculatedAmount))->setCurrencyID($taxCurrencyCode));

        $taxCategory = (new TaxCategory())
            ->setId(new ID($categoryCode))
            ->setTaxScheme((new TaxScheme())
                ->setID(new ID($typeCode)));

        if ($rateApplicablePercent != null) {
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
     * @param string $categoryCode
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
     * @param string $typeCode
     * Coded description of a sales tax category. Note: Fixed value = "VAT"
     * @param float $basisAmount
     * Tax base amount, Each sales tax breakdown must show a category-specific tax base amount.
     * @param float $calculatedAmount
     * The total amount to be paid for the relevant VAT category. Note: Calculated by multiplying
     * the amount to be taxed according to the sales tax category by the sales tax rate applicable
     * for the sales tax category concerned
     * @param float $rateApplicablePercent
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
     * Get detailed information on the billing period
     *
     * @param DateTime|null $startdate
     * Start of the billing period
     * @param DateTime|null $endDate
     * End of the billing period
     * @param string|null $description
     * Further information of the billing period
     * @return UblDocumentBuilder
     */
    public function setDocumentBillingPeriod(?DateTime $startdate = null, ?DateTime $endDate = null, ?string $description = null): UblDocumentBuilder
    {
        if ($startdate != null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->setStartDate($startdate);
        }
        if ($endDate != null) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->setEndDate($endDate);
        }
        if (!StringUtils::stringIsNullOrEmpty($description)) {
            $invoicePeriod = $this->ublBuilderHelper->ensureBillingPeriod();
            $invoicePeriod->addToDescription(new Description($description));
        }

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
