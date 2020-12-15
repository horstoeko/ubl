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
use horstoeko\ubl\entities\cbc\URI;
use \horstoeko\ubl\entities\cbc\Name;
use \horstoeko\ubl\entities\cbc\Note;
use \horstoeko\ubl\entities\cac\Party;
use \horstoeko\ubl\entities\cac\Address;
use \horstoeko\ubl\entities\cac\Contact;
use \horstoeko\ubl\entities\cac\Country;
use \horstoeko\ubl\entities\cbc\Telefax;
use \horstoeko\ubl\entities\cac\Delivery;
use \horstoeko\ubl\entities\cbc\CityName;
use \horstoeko\ubl\entities\main\Invoice;
use horstoeko\stringmanagement\FileUtils;
use horstoeko\ubl\entities\cbc\NetworkID;
use \horstoeko\ubl\entities\cac\PartyName;
use \horstoeko\ubl\entities\cac\TaxScheme;
use \horstoeko\ubl\entities\cbc\CompanyID;
use \horstoeko\ubl\entities\cbc\Telephone;
use horstoeko\ubl\entities\cac\Attachment;
use horstoeko\ubl\entities\cbc\HolderName;
use MimeTyper\Repository\MimeDbRepository;
use \horstoeko\ubl\entities\cac\PayeeParty;
use \horstoeko\ubl\entities\cbc\PostalZone;
use \horstoeko\ubl\entities\cbc\StreetName;
use horstoeko\ubl\entities\cac\CardAccount;
use \horstoeko\stringmanagement\StringUtils;
use horstoeko\ubl\entities\cac\PaymentMeans;
use \horstoeko\ubl\entities\cbc\SalesOrderID;
use \horstoeko\ubl\entities\cac\DeliveryParty;
use \horstoeko\ubl\entities\cac\PostalAddress;
use horstoeko\ubl\entities\cac\PaymentMandate;
use horstoeko\ubl\entities\cbc\BuyerReference;
use \horstoeko\ubl\entities\cac\OrderReference;
use \horstoeko\ubl\entities\cac\PartyTaxScheme;
use \horstoeko\ubl\entities\cbc\ElectronicMail;
use \horstoeko\ubl\entities\cbc\CustomizationID;
use \horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use function PHPUnit\Framework\stringStartsWith;
use horstoeko\ubl\entities\cac\BillingReference;
use horstoeko\ubl\entities\cac\ProjectReference;
use horstoeko\ubl\entities\cbc\PaymentMeansCode;
use \horstoeko\ubl\entities\cac\DeliveryLocation;
use \horstoeko\ubl\entities\cac\PartyLegalEntity;
use \horstoeko\ubl\entities\cbc\CountrySubentity;
use \horstoeko\ubl\entities\cbc\DocumentTypeCode;
use \horstoeko\ubl\entities\cbc\RegistrationName;
use horstoeko\ubl\entities\cac\ExternalReference;
use \horstoeko\ubl\entities\cbc\IdentificationCode;
use horstoeko\ubl\entities\cbc\DocumentDescription;
use \horstoeko\ubl\entities\cac\PartyIdentification;
use \horstoeko\ubl\entities\cbc\AdditionalStreetName;
use \horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use horstoeko\ubl\entities\cac\PayerFinancialAccount;
use horstoeko\ubl\entities\cbc\PrimaryAccountNumberID;
use \horstoeko\ubl\entities\cac\TaxRepresentativeParty;
use \horstoeko\ubl\entities\cac\AccountingCustomerParty;
use \horstoeko\ubl\entities\cac\AccountingSupplierParty;
use horstoeko\ubl\entities\cac\InvoiceDocumentReference;
use horstoeko\ubl\entities\cac\ReceiptDocumentReference;
use horstoeko\ubl\entities\cac\DespatchDocumentReference;
use \horstoeko\ubl\entities\cac\ContractDocumentReference;
use horstoeko\ubl\entities\cac\FinancialInstitutionBranch;

use \horstoeko\ubl\entities\cac\AdditionalDocumentReference;
use horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject;

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
     * @param string $customization
     * The identifier for the customization
     * @return UblDocumentBuilder
     */
    public function setDocumentCustomization(string $customization): UblDocumentBuilder
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
     * @param string $invoiceCurrency Code for the invoice currency
     * The code for the invoice currency
     * @return UblDocumentBuilder
     */
    public function setDocumentInformation(string $documentno, string $documenttypecode, DateTime $documentdate, string $invoiceCurrency): UblDocumentBuilder
    {
        // Mandatory

        $this->invoiceObject->setID(new Id($documentno));
        $this->invoiceObject->setIssueDate($documentdate);
        $this->invoiceObject->setDocumentCurrencyCode(new DocumentCurrencyCode($invoiceCurrency));

        // Optional

        if (!StringUtils::stringIsNullOrEmpty($documenttypecode)) {
            $this->invoiceObject->setInvoiceTypeCode(new InvoiceTypeCode($documenttypecode));
        }

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
     * An identifier assigned by the buyer and used for internal routing.
     *
     * __Note__: The reference is specified by the buyer (e.g. contact details, department, office ID, project code),
     * but stated by the seller on the invoice.
     *
     * __Note__: The route ID must be specified in the Buyer Reference (BT-10) in the XRechnung. According to the XRechnung
     * standard, two syntaxes are permitted for displaying electronic invoices: Universal Business Language (UBL) and UN/CEFACT
     * Cross Industry Invoice (CII).
     *
     * @param string $buyerreference
     * An identifier assigned by the buyer and used for internal routing
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerReference(string $buyerreference): UblDocumentBuilder
    {
        $this->invoiceObject->setBuyerReference(new BuyerReference($buyerreference));
        return $this;
    }

    /**
     * Detailed information about the seller (=service provider)
     *
     * @param string $name The full formal name under which the seller is registered in the
     * National Register of Legal Entities, Taxable Person or otherwise acting as person(s)
     * @param string|null $id
     * An identifier of the seller. In many systems, seller identification
     * is key information. Multiple seller IDs can be assigned or specified. They can be differentiated
     * by using different identification schemes. If no scheme is given, it should be known to the buyer
     * and seller, e.g. a previously exchanged, buyer-assigned identifier of the seller
     * @return UblDocumentBuilder
     */
    public function setDocumentSeller(string $name, ?string $id = null): UblDocumentBuilder
    {
        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();

        $party = $accountingSupplierParty->getParty() ?? new Party();
        $party->addToPartyName((new PartyName())->setName((new Name($name))));
        if (!StringUtils::stringIsNullOrEmpty($id)) {
            $party->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));
        }

        $accountingSupplierParty->setParty($party);

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
        if (StringUtils::stringIsNullOrEmpty($globalID)) {
            return $this;
        }

        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();

        $party = $accountingSupplierParty->getParty() ?? new Party();
        $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));

        $accountingSupplierParty->setParty($party);

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
        if (StringUtils::stringIsNullOrEmpty($taxregtype) || StringUtils::stringIsNullOrEmpty($taxregid)) {
            return $this;
        }

        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();

        $party = $accountingSupplierParty->getParty() ?? new Party();
        $party->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));

        $accountingSupplierParty->setParty($party);

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
        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();
        $party = $accountingSupplierParty->getParty() ?? new Party();

        $postalAddress = $party->getPostalAddress() ?? new PostalAddress();
        $postalAddress->setStreetName(new StreetName($lineone));
        $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        $postalAddress->setPostalZone(new PostalZone($postcode));
        $postalAddress->setCityName(new CityName($city));
        $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));

        $party->setPostalAddress($postalAddress);

        $accountingSupplierParty->setParty($party);

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
    public function setDocumentSellerLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname): UblDocumentBuilder
    {
        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();
        $party = $accountingSupplierParty->getParty() ?? new Party();

        $partyLegalEntity = isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : new PartyLegalEntity();
        $partyLegalEntity->setCompanyID((new CompanyID($legalorgid))->setSchemeID($legalorgtype));
        $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));

        $party->setPartyLegalEntity([$partyLegalEntity]);

        $accountingSupplierParty->setParty($party);

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
    public function setDocumentSellerContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        $accountingSupplierParty = $this->invoiceObject->getAccountingSupplierParty() ?? $this->invoiceObject->setAccountingSupplierParty((new AccountingSupplierParty())->setParty(new Party()))->getAccountingSupplierParty();
        $party = $accountingSupplierParty->getParty() ?? new Party();

        $contact = $party->getContact() ?? new Contact();
        $contact->setName(new Name($contactpersonname));
        $contact->setTelephone(new Telephone($contactphoneno));
        $contact->setTelefax(new Telefax($contactfaxno));
        $contact->setElectronicMail(new ElectronicMail($contactemailadd));

        $party->setContact($contact);

        $accountingSupplierParty->setParty($party);

        return $this;
    }

    /**
     * Detailed information about the buyer (service recipient)
     *
     * @param string $name
     * The full name of the buyer
     * @param string|null $id
     * An identifier of the buyer. In many systems, buyer identification is key information. Multiple buyer IDs can be
     * assigned or specified. They can be differentiated by using different identification schemes. If no scheme is given,
     * it should be known to the buyer and buyer, e.g. a previously exchanged, seller-assigned identifier of the buyer
     * @param string|null $description
     * Further legal information about the buyer
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyer(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();

        $party = $accountingCustomerParty->getParty() ?? new Party();
        $party->addToPartyName((new PartyName())->setName((new Name($name))));
        $party->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));

        $accountingCustomerParty->setParty($party);

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
        if (StringUtils::stringIsNullOrEmpty($globalID)) {
            return $this;
        }

        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();

        $party = $accountingCustomerParty->getParty() ?? new Party();
        $party->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));

        $accountingCustomerParty->setParty($party);

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
        if (StringUtils::stringIsNullOrEmpty($taxregtype) || StringUtils::stringIsNullOrEmpty($taxregid)) {
            return $this;
        }

        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();

        $party = $accountingCustomerParty->getParty() ?? new Party();
        $party->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));

        $accountingCustomerParty->setParty($party);

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
        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();
        $party = $accountingCustomerParty->getParty() ?? new Party();

        $postalAddress = $party->getPostalAddress() ?? new PostalAddress();
        $postalAddress->setStreetName(new StreetName($lineone));
        $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        $postalAddress->setPostalZone(new PostalZone($postcode));
        $postalAddress->setCityName(new CityName($city));
        $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));

        $party->setPostalAddress($postalAddress);

        $accountingCustomerParty->setParty($party);

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
    public function setDocumentBuyerLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname): UblDocumentBuilder
    {
        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();
        $party = $accountingCustomerParty->getParty() ?? new Party();

        $partyLegalEntity = isset($party->getPartyLegalEntity()[0]) ? $party->getPartyLegalEntity()[0] : new PartyLegalEntity();
        $partyLegalEntity->setCompanyID((new CompanyID($legalorgid))->setSchemeID($legalorgtype));
        $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));

        $party->setPartyLegalEntity([$partyLegalEntity]);

        $accountingCustomerParty->setParty($party);

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
    public function setDocumentBuyerContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        $accountingCustomerParty = $this->invoiceObject->getAccountingCustomerParty() ?? $this->invoiceObject->setAccountingCustomerParty((new AccountingCustomerParty())->setParty(new Party()))->getAccountingCustomerParty();
        $party = $accountingCustomerParty->getParty() ?? new Party();

        $contact = $party->getContact() ?? new Contact();
        $contact->setName(new Name($contactpersonname));
        $contact->setTelephone(new Telephone($contactphoneno));
        $contact->setTelefax(new Telefax($contactfaxno));
        $contact->setElectronicMail(new ElectronicMail($contactemailadd));

        $party->setContact($contact);

        $accountingCustomerParty->setParty($party);

        return $this;
    }

    /**
     * Sets the sellers tax representative trade party
     *
     * @param string $name
     * The full name of the seller's tax agent
     * @param string|null $id
     * An identifier of the sellers tax agent.
     * @param string|null $description
     * Further legal information that is relevant for the sellers tax agent
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerTaxRepresentativeTradeParty(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $taxRepresentativeParty->addToPartyName((new PartyName())->setName((new Name($name))));
        $taxRepresentativeParty->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));

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
        if (StringUtils::stringIsNullOrEmpty($globalID)) {
            return $this;
        }

        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $taxRepresentativeParty->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));

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
        if (StringUtils::stringIsNullOrEmpty($taxregtype) || StringUtils::stringIsNullOrEmpty($taxregid)) {
            return $this;
        }

        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $taxRepresentativeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));

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
        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $postalAddress = $taxRepresentativeParty->getPostalAddress() ?? new PostalAddress();;
        $postalAddress->setStreetName(new StreetName($lineone));
        $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        $postalAddress->setPostalZone(new PostalZone($postcode));
        $postalAddress->setCityName(new CityName($city));
        $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));

        $taxRepresentativeParty->setPostalAddress($postalAddress);

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
    public function setDocumentSellerTaxRepresentativeLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname): UblDocumentBuilder
    {
        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $partyLegalEntity = isset($taxRepresentativeParty->getPartyLegalEntity()[0]) ? $taxRepresentativeParty->getPartyLegalEntity()[0] : new PartyLegalEntity();
        $partyLegalEntity->setCompanyID((new CompanyID($legalorgid))->setSchemeID($legalorgtype));
        $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));

        $taxRepresentativeParty->setPartyLegalEntity([$partyLegalEntity]);

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
    public function setDocumentSellerTaxRepresentativeContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        $taxRepresentativeParty = $this->invoiceObject->getTaxRepresentativeParty() ?? $this->invoiceObject->setTaxRepresentativeParty(new TaxRepresentativeParty())->getTaxRepresentativeParty();

        $contact = $taxRepresentativeParty->getContact() ?? new Contact();
        $contact->setName(new Name($contactpersonname));
        $contact->setTelephone(new Telephone($contactphoneno));
        $contact->setTelefax(new Telefax($contactfaxno));
        $contact->setElectronicMail(new ElectronicMail($contactemailadd));

        $taxRepresentativeParty->setContact($contact);

        return $this;
    }

    // TODO: Product enduser goes here....

    /**
     * Ship-To
     *
     * @param string $name
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
    public function setDocumentShipTo(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        $delivery = $this->invoiceObject->getDelivery();
        $delivery = isset($delivery[0]) ? $delivery[0] : $this->invoiceObject->addToDelivery(new Delivery())->getDelivery()[0];

        $deliveryParty = $delivery->getDeliveryParty() ?? new DeliveryParty();
        $deliveryParty->addToPartyName((new PartyName())->setName((new Name($name))));

        $deliveryLocation = $delivery->getDeliveryLocation() ?? new DeliveryLocation();
        $deliveryLocation->setID(new Id($id));

        $delivery->setDeliveryParty($deliveryParty);
        $delivery->setDeliveryLocation($deliveryLocation);

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
        if (StringUtils::stringIsNullOrEmpty($globalID)) {
            return $this;
        }

        $delivery = $this->invoiceObject->getDelivery();
        $delivery = isset($delivery[0]) ? $delivery[0] : $this->invoiceObject->addToDelivery(new Delivery())->getDelivery()[0];

        $deliveryParty = $delivery->getDeliveryParty() ?? new DeliveryParty();
        $deliveryParty->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));

        $delivery->setDeliveryParty($deliveryParty);

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
        if (StringUtils::stringIsNullOrEmpty($taxregtype) || StringUtils::stringIsNullOrEmpty($taxregid)) {
            return $this;
        }

        $delivery = $this->invoiceObject->getDelivery();
        $delivery = isset($delivery[0]) ? $delivery[0] : $this->invoiceObject->addToDelivery(new Delivery())->getDelivery()[0];

        $deliveryParty = $delivery->getDeliveryParty() ?? new DeliveryParty();
        $deliveryParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));

        $delivery->setDeliveryParty($deliveryParty);

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
        $delivery = $this->invoiceObject->getDelivery();
        $delivery = isset($delivery[0]) ? $delivery[0] : $this->invoiceObject->addToDelivery(new Delivery())->getDelivery()[0];

        $deliveryLocation = $delivery->getDeliveryLocation() ?? new DeliveryLocation();
        $deliveryAddress = $deliveryLocation->getAddress() ?? new Address();

        $deliveryAddress->setStreetName(new StreetName($lineone));
        $deliveryAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        $deliveryAddress->setPostalZone(new PostalZone($postcode));
        $deliveryAddress->setCityName(new CityName($city));
        $deliveryAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        $deliveryAddress->setCountrySubentity(new CountrySubentity($subdivision));

        $deliveryLocation->setAddress($deliveryAddress);
        $delivery->setDeliveryLocation($deliveryLocation);

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
    public function setDocumentShipToLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname): UblDocumentBuilder
    {
        // TODO: Implement this
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
    public function setDocumentShipToContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        $delivery = $this->invoiceObject->getDelivery();
        $delivery = isset($delivery[0]) ? $delivery[0] : $this->invoiceObject->addToDelivery(new Delivery())->getDelivery()[0];

        $deliveryParty = $delivery->getDeliveryParty() ?? new DeliveryParty();

        $contact = $deliveryParty->getContact() ?? new Contact();
        $contact->setName(new Name($contactpersonname));
        $contact->setTelephone(new Telephone($contactphoneno));
        $contact->setTelefax(new Telefax($contactfaxno));
        $contact->setElectronicMail(new ElectronicMail($contactemailadd));

        $deliveryParty->setContact($contact);

        $delivery->setDeliveryParty($deliveryParty);

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
     * @param string $name
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
    public function setDocumentPayee(string $name, ?string $id = null, ?string $description = null): UblDocumentBuilder
    {
        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $payeeParty->addToPartyName((new PartyName())->setName((new Name($name))));
        $payeeParty->addToPartyIdentification((new PartyIdentification())->setID(new Id($id)));

        $this->invoiceObject->setPayeeParty($payeeParty);

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
        if (StringUtils::stringIsNullOrEmpty($globalID)) {
            return $this;
        }

        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $payeeParty->addToPartyIdentification((new PartyIdentification())->setID((new Id($globalID))->setSchemeID($globalIDType)));

        $this->invoiceObject->setPayeeParty($payeeParty);

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
        if (StringUtils::stringIsNullOrEmpty($taxregtype) || StringUtils::stringIsNullOrEmpty($taxregid)) {
            return $this;
        }

        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $payeeParty->addToPartyTaxScheme((new PartyTaxScheme())->setCompanyID((new CompanyID($taxregid)))->setTaxScheme((new TaxScheme())->setId(new Id($taxregtype))));

        $this->invoiceObject->setPayeeParty($payeeParty);

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
        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $postalAddress = $payeeParty->getPostalAddress() ?? new PostalAddress();
        $postalAddress->setStreetName(new StreetName($lineone));
        $postalAddress->setAdditionalStreetName(new AdditionalStreetName($linetwo));
        $postalAddress->setPostalZone(new PostalZone($postcode));
        $postalAddress->setCityName(new CityName($city));
        $postalAddress->setCountry((new Country())->setIdentificationCode(new IdentificationCode($country)));
        $postalAddress->setCountrySubentity(new CountrySubentity($subdivision));

        $payeeParty->setPostalAddress($postalAddress);

        $this->invoiceObject->setPayeeParty($payeeParty);

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
    public function setDocumentPayeeLegalOrganisation(?string $legalorgid, ?string $legalorgtype, ?string $legalorgname): UblDocumentBuilder
    {
        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $partyLegalEntity = isset($payeeParty->getPartyLegalEntity()[0]) ? $payeeParty->getPartyLegalEntity()[0] : new PartyLegalEntity();
        $partyLegalEntity->setCompanyID((new CompanyID($legalorgid))->setSchemeID($legalorgtype));
        $partyLegalEntity->setRegistrationName(new RegistrationName($legalorgname));

        $payeeParty->setPartyLegalEntity([$partyLegalEntity]);

        $this->invoiceObject->setPayeeParty($payeeParty);

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
    public function setDocumentPayeeContact(?string $contactpersonname, ?string $contactdepartmentname, ?string $contactphoneno, ?string $contactfaxno, ?string $contactemailadd): UblDocumentBuilder
    {
        $payeeParty = $this->invoiceObject->getPayeeParty() ?? $this->invoiceObject->setPayeeParty((new PayeeParty()))->getPayeeParty();

        $contact = $payeeParty->getContact() ?? new Contact();
        $contact->setName(new Name($contactpersonname));
        $contact->setTelephone(new Telephone($contactphoneno));
        $contact->setTelefax(new Telefax($contactfaxno));
        $contact->setElectronicMail(new ElectronicMail($contactemailadd));

        $payeeParty->setContact($contact);

        $this->invoiceObject->setPayeeParty($payeeParty);

        return $this;
    }

    // TODO: DeliveryTerms goes here

    /**
     * Set details of the associated order confirmation
     *
     * @param string $issuerassignedid
     * An identifier issued by the seller for a referenced sales order (Order confirmation number)
     * @param DateTime|null $issueddate
     * Order confirmation date
     * @return UblDocumentBuilder
     */
    public function setDocumentSellerOrderReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();

        $orderReference->setSalesOrderID(new SalesOrderID($issuerassignedid));
        $this->invoiceObject->setOrderReference($orderReference);

        return $this;
    }

    /**
     * Set details of the related buyer order
     *
     * @param string $issuerassignedid
     * An identifier issued by the buyer for a referenced order (order number)
     * @param DateTime|null $issueddate
     * Date of order
     * @return UblDocumentBuilder
     */
    public function setDocumentBuyerOrderReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $orderReference = $this->invoiceObject->getOrderReference() ?? $this->invoiceObject->setOrderReference(new OrderReference())->getOrderReference();

        $orderReference->setID(new Id($issuerassignedid));
        if ($issueddate != null) $orderReference->setIssueDate($issueddate);

        $this->invoiceObject->setOrderReference($orderReference);

        return $this;
    }

    /**
     * Set details of the associated contract
     *
     * @param string $issuerassignedid
     * The contract reference should be assigned once in the context of the specific trade relationship and for a
     * defined period of time (contract number)
     * @param DateTime|null $issueddate
     * Contract date
     * @return UblDocumentBuilder
     */
    public function setDocumentContractReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $contractReference =
            isset($this->invoiceObject->getContractDocumentReference()[0]) ?
            $this->invoiceObject->getContractDocumentReference()[0] :
            $this->invoiceObject->addToContractDocumentReference(new ContractDocumentReference())->getContractDocumentReference()[0];

        $contractReference->setId(new Id($issuerassignedid));
        if ($issueddate != null) $contractReference->setIssueDate($issueddate);

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
     * @param string $issuerassignedid
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
    public function addDocumentAdditionalReferencedDocument(string $issuerassignedid, ?string $typecode = null, ?string $uriid = null, ?string $name = null, ?string $reftypecode = null, ?DateTime $issueddate = null, ?string $binarydatafilename = null): UblDocumentBuilder
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

        if ($issueddate != null)
            $additionalrefdoc->setIssueDate($issueddate);

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
     * @param string $issuerassignedid
     * Number of the previous invoice
     * @param DateTime|null $issueddate
     * Date of the previous invoice
     * @return UblDocumentBuilder
     */
    public function setDocumentInvoiceReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
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
     * @param string $id
     * Project number/id
     * @param DateTime|null $date
     * Project date
     * @return UblDocumentBuilder
     */
    public function setDocumentProcuringProject(string $id, ?DateTime $date = null): UblDocumentBuilder
    {
        $procuringproject = isset($this->invoiceObject->getProjectReference()[0]) ?
            $this->invoiceObject->getProjectReference()[0] :
            $this->invoiceObject->addToProjectReference(new ProjectReference())->getProjectReference()[0];

        $procuringproject->setID(new ID($id));
        if ($date != null) $procuringproject->setIssueDate($date);

        return $this;
    }

    // TODO: UltimateCustomerOrderReferencedDocument goes here...

    // TODO: SupplyChainEvent goes here...

    /**
     * Set detailed information on the associated shipping notification
     *
     * @param string $issuerassignedid
     * Shipping notification reference
     * @param DateTime|null $issueddate
     * Shipping notification date
     * @return UblDocumentBuilder
     */
    public function setDocumentDespatchAdviceReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $despatchDocumentReference = isset($this->invoiceObject->getDespatchDocumentReference()[0]) ?
            $this->invoiceObject->getDespatchDocumentReference()[0] :
            $this->invoiceObject->addToDespatchDocumentReference(new DespatchDocumentReference())->getDespatchDocumentReference()[0];

        $despatchDocumentReference->setID(new ID($issuerassignedid));
        if ($issueddate != null) $despatchDocumentReference->setIssueDate($issueddate);

        return $this;
    }

    /**
     * Set detailed information on the associated goods receipt notification
     *
     * @param string $issuerassignedid
     * An identifier for a referenced goods receipt notification (Goods receipt number)
     * @param DateTime|null $issueddate
     * Goods receipt date
     * @return UblDocumentBuilder
     */
    public function setDocumentReceivingAdviceReferencedDocument(string $issuerassignedid, ?DateTime $issueddate = null): UblDocumentBuilder
    {
        $receiptDocumentReference = isset($this->invoiceObject->getReceiptDocumentReference()[0]) ?
            $this->invoiceObject->getReceiptDocumentReference()[0] :
            $this->invoiceObject->addToReceiptDocumentReference(new ReceiptDocumentReference())->getReceiptDocumentReference()[0];

        $receiptDocumentReference->setID(new ID($issuerassignedid));
        if ($issueddate != null) $receiptDocumentReference->setIssueDate($issueddate);

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
     * @param string $typecode
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
    public function addDocumentPaymentMean(string $typecode, ?string $information = null, ?string $cardType = null, ?string $cardId = null, ?string $cardHolderName = null, ?string $buyerIban = null, ?string $payeeIban = null, ?string $payeeAccountName = null, ?string $payeePropId = null, ?string $payeeBic = null, ?string $mandate = null): UblDocumentBuilder
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

        $paymentMeans = $this->invoiceObject->setPaymentMeans([])->addToPaymentMeans(new PaymentMeans())->getPaymentMeans()[0];

        if (!StringUtils::stringIsNullOrEmpty($typecode)) {
            $paymentMeans->setPaymentMeansCode(new PaymentMeansCode($typecode));
        }
        if (!StringUtils::stringIsNullOrEmpty($information)) {
            $paymentMeans->getPaymentMeansCode()->setName($information);
        }
        if (!StringUtils::stringIsNullOrEmpty($cardType)) {
            $cardAccount = $paymentMeans->getCardAccount() ?? $paymentMeans->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setNetworkID(new NetworkID($cardType));
        }
        if (!StringUtils::stringIsNullOrEmpty($cardId)) {
            $cardAccount = $paymentMeans->getCardAccount() ?? $paymentMeans->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setPrimaryAccountNumberID(new PrimaryAccountNumberID(substr($cardId, -4)));
        }
        if (!StringUtils::stringIsNullOrEmpty($cardHolderName)) {
            $cardAccount = $paymentMeans->getCardAccount() ?? $paymentMeans->setCardAccount(new CardAccount())->getCardAccount();
            $cardAccount->setHolderName(new HolderName($cardHolderName));
        }
        if (!StringUtils::stringIsNullOrEmpty($buyerIban)) {
            $payerFinancialAccount = $paymentMeans->getPayerFinancialAccount() ?? $paymentMeans->setPayerFinancialAccount(new PayerFinancialAccount())->getPayerFinancialAccount();
            $payerFinancialAccount->setID(new ID($buyerIban));
        }
        if (!StringUtils::stringIsNullOrEmpty($mandate)) {
            $paymentMandate = $paymentMeans->getPaymentMandate() ?? $paymentMeans->setPaymentMandate(new PaymentMandate())->getPaymentMandate();
            $paymentMandate->setID(new ID($mandate));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeIban)) {
            $payeeFinancialAccount = $paymentMeans->getPayeeFinancialAccount() ?? $paymentMeans->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setID(new ID($payeeIban));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeAccountName)) {
            $payeeFinancialAccount = $paymentMeans->getPayeeFinancialAccount() ?? $paymentMeans->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setName(new Name($payeeAccountName));
        }
        if (!StringUtils::stringIsNullOrEmpty($payeePropId)) {
        }
        if (!StringUtils::stringIsNullOrEmpty($payeeBic)) {
            $payeeFinancialAccount = $paymentMeans->getPayeeFinancialAccount() ?? $paymentMeans->setPayeeFinancialAccount(new PayeeFinancialAccount)->getPayeeFinancialAccount();
            $payeeFinancialAccount->setFinancialInstitutionBranch((new FinancialInstitutionBranch())->setID(new ID($payeeBic)));
        }

        return $this;
    }

    /**
     * Create payment means for payment type 58 (SEPA credit transfer)
     * German translation: SEPA-Überweisung
     *
     * @param string $payeeIban
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaCreditTransfer(string $payeeIban): UblDocumentBuilder
    {
        $paymentMeans = $this->invoiceObject->setPaymentMeans([])->addToPaymentMeans(new PaymentMeans())->getPaymentMeans()[0];
        $paymentMeans->setPaymentMeansCode((new PaymentMeansCode("58"))->setName("SEPA credit transfer"));
        $paymentMeans->setPayeeFinancialAccount(new PayeeFinancialAccount())->getPayeeFinancialAccount()->setID(new ID($payeeIban));

        return $this;
    }

    /**
     * Create payment means for payment type 59 (SEPA direct debit)
     * German translation: SEPA Lastschrift
     *
     * @param string $buyerIban
     * Debited account,  __German translation:__ Belastetes Konto
     * @param string $mandate
     * Mandate reference identifier
     * Unique identifier assigned by the Payee for referencing the direct debit mandate. Used in order to pre-notify
     * the Buyer of a SEPA direct debit, __German translation:__ Mandatsreferenz
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanSepaDirectDebit(string $buyerIban, string $mandate): UblDocumentBuilder
    {
        $paymentMeans = $this->invoiceObject->setPaymentMeans([])->addToPaymentMeans(new PaymentMeans())->getPaymentMeans()[0];
        $paymentMeans->setPaymentMeansCode((new PaymentMeansCode("59"))->setName("SEPA direct debit"));
        $paymentMeans->setPaymentMandate(new PaymentMandate())->getPaymentMandate()->setPayerFinancialAccount((new PayerFinancialAccount())->setID(new ID($buyerIban)))->setID(new ID($mandate));

        return $this;
    }

    /**
     * Create payment means for payment type 48 (Bank card)
     *
     * @param string $cardType
     * Card Network identifier, such as VISA, American Express, Master Card.
     * @param string $cardId
     * The Primary Account Number (PAN) of the card used for payment.In accordance with card payments security
     * standards, an invoice should never include a full card primary account number. This method will do the
     * security for you automatically
     * @param string $cardHolderName
     * The name of the payment card holder.
     * @return UblDocumentBuilder
     */
    public function addDocumentPaymentMeanBankCard(string $cardType, string $cardId, string $cardHolderName): UblDocumentBuilder
    {
        $paymentMeans = $this->invoiceObject->setPaymentMeans([])->addToPaymentMeans(new PaymentMeans())->getPaymentMeans()[0];
        $paymentMeans->setPaymentMeansCode((new PaymentMeansCode("48"))->setName("Bank card"));
        $paymentMeans->setCardAccount((new CardAccount)
            ->setPrimaryAccountNumberID(new PrimaryAccountNumberID(substr($cardId, -4)))
            ->setNetworkID(new NetworkID($cardType))
            ->setHolderName(new HolderName($cardHolderName)));

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
}
