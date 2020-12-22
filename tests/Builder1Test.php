<?php

namespace horstoeko\ubl\tests;

use DateTime;
use \horstoeko\ubl\UblDocumentBuilder;

class Builder1Test extends BuilderBaseTest
{
    public static function setUpBeforeClass(): void
    {
        self::$document = new UblDocumentBuilder();
    }

    public static function tearDownAfterClass(): void
    {
        self::$document->writeFile(dirname(__FILE__) . "/builder1.xml");
    }

    public function testXmlGenerals(): void
    {
        $xml = $this->getXml();
        $namespaces = $xml->getNamespaces(true);

        $this->disableRenderXmlContent();
        $this->assertArrayHasKey("ubl", $namespaces);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::getInvoiceObject
     */
    public function testgetInvoiceObject(): void
    {
        $invoiceObject = (self::$document)->getInvoiceObject();

        $this->assertNotNull($invoiceObject);
        $this->assertTrue(is_a($invoiceObject, \horstoeko\ubl\entities\main\Invoice::class));
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::getCurrentPosition
     */
    public function testGetCurrentPosition(): void
    {
        $currentPosition = (self::$document)->getCurrentPosition();

        $this->assertNull($currentPosition);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentCustomization
     */
    public function testSetDocumentCustomization(): void
    {
        (self::$document)->setDocumentCustomization("customizationid");

        $this->assertXPathValue('/ubl:Invoice/cbc:CustomizationID', "customizationid");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentProfile
     */
    public function testsetDocumentProfile(): void
    {
        (self::$document)->setDocumentProfile("profile");

        $this->assertXPathValue('/ubl:Invoice/cbc:ProfileID', "profile");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentInformation
     */
    public function testSetDocumentInformation(): void
    {
        (self::$document)->setDocumentInformation("471102", "380", DateTime::createFromFormat("Ymd", "20180305"), "EUR", "EUR", DateTime::createFromFormat("Ymd", "20180311"), DateTime::createFromFormat("Ymd", "20180312"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cbc:ID', "471102");
        $this->assertXPathValue('/ubl:Invoice/cbc:IssueDate', "2018-03-05");
        $this->assertXPathValue('/ubl:Invoice/cbc:DueDate', "2018-03-11");
        $this->assertXPathValue('/ubl:Invoice/cbc:InvoiceTypeCode', "380");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxPointDate', "2018-03-12");
        $this->assertXPathValue('/ubl:Invoice/cbc:DocumentCurrencyCode', "EUR");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxCurrencyCode', "EUR");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentNote
     */
    public function testAddDocumentNote(): void
    {
        (self::$document)->addDocumentNote("Single note");
        (self::$document)->addDocumentNote("");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:Note', 0, "Single note");
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cbc:Note", 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setIsDocumentCopy
     */
    public function testSetIsDocumentCopy(): void
    {
        (self::$document)->setIsDocumentCopy();

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cbc:CopyIndicator', "true");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSummation
     */
    public function testSetDocumentSummation(): void
    {
        (self::$document)->setDocumentSummation(119, 110, 100, 0, 0, 100, 19, 0, 9);

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:LineExtensionAmount', "100.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:TaxExclusiveAmount', "100.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:TaxInclusiveAmount', "119.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:AllowanceTotalAmount', "0.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:ChargeTotalAmount', "0.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:PrepaidAmount', "9.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:PayableRoundingAmount', "0.0");
        $this->assertXPathValue('/ubl:Invoice/cac:LegalMonetaryTotal/cbc:PayableAmount', "110.0");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerReference
     */
    public function testSetDocumentBuyerReference(): void
    {
        (self::$document)->setDocumentBuyerReference("abc-def");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cbc:BuyerReference', "abc-def");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSeller
     */
    public function testSetDocumentSeller(): void
    {
        (self::$document)->setDocumentSeller("name", "id", "scheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID', "id", "schemeID", "scheme");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name', "name");

        (self::$document)->setDocumentSeller("name2", "id2");
        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID', "id2");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name', "name2");

        (self::$document)->setDocumentSeller("name3", "id3", "scheme3");
        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID', "id3", "schemeID", "scheme3");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name', "name3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerEndpointID
     */
    public function testSetDocumentSellerEndpointID(): void
    {
        (self::$document)->setDocumentSellerEndpointID("endpointid", "endpointscheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID', "endpointid", "schemeID", "endpointscheme");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerGlobalId
     */
    public function testAddDocumentSellerGlobalId(): void
    {
        (self::$document)->addDocumentSellerGlobalId("globalid", "globalidscheme");
        (self::$document)->addDocumentSellerGlobalId("globalid2", "globalidscheme2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID', 1, "globalid", "schemeID", "globalidscheme");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID', 2, "globalid2", "schemeID", "globalidscheme2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerTaxRegistration
     */
    public function testAddDocumentSellerTaxRegistration(): void
    {
        (self::$document)->addDocumentSellerTaxRegistration("taxregtype", "taxregid");
        (self::$document)->addDocumentSellerTaxRegistration("taxregtype2", "taxregid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID', 0, "taxregid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 0, "taxregtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID', 1, "taxregid2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 1, "taxregtype2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerAddress
     */
    public function testSetDocumentSellerAddress(): void
    {
        (self::$document)->setDocumentSellerAddress("line1", "line2", "line3", "0000", "city", "DE", "county");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:StreetName', "line1");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:AdditionalStreetName', "line2");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:CityName', "city");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:PostalZone', "0000");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:CountrySubentity', "county");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cac:AddressLine/cbc:Line', "line3");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cac:Country/cbc:IdentificationCode', "DE");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerLegalOrganisation
     */
    public function testSetDocumentSellerLegalOrganisation(): void
    {
        (self::$document)->setDocumentSellerLegalOrganisation("legalorgid", "legalorgtype", "legalorgname", "legalorgform");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName', "legalorgname");
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID', "legalorgid", "schemeID", "legalorgtype");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyLegalForm', "legalorgform");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerContact
     */
    public function testSetDocumentSellerContact(): void
    {
        (self::$document)->setDocumentSellerContact("personname", "department", "phoneno", "faxno", "email");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Name', "personname");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telephone', "phoneno");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telefax', "faxno");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:ElectronicMail', "email");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyer
     */
    public function testSetDocumentBuyer(): void
    {
        (self::$document)->setDocumentBuyer("name", "id", "scheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID', "id", "schemeID", "scheme");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name', "name");

        (self::$document)->setDocumentBuyer("name2", "id2");
        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID', "id2");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name', "name2");

        (self::$document)->setDocumentBuyer("name3", "id3", "scheme3");
        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID', "id3", "schemeID", "scheme3");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name', "name3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerEndpointID
     */
    public function testSetDocumentBuyerEndpointID(): void
    {
        (self::$document)->setDocumentBuyerEndpointID("endpointid", "endpointscheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID', "endpointid", "schemeID", "endpointscheme");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentBuyerGlobalId
     */
    public function testAddDocumentBuyerGlobalId(): void
    {
        (self::$document)->addDocumentBuyerGlobalId("globalid", "globalidscheme");
        (self::$document)->addDocumentBuyerGlobalId("globalid2", "globalidscheme2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID', 1, "globalid", "schemeID", "globalidscheme");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID', 2, "globalid2", "schemeID", "globalidscheme2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentBuyerTaxRegistration
     */
    public function testAddDocumentBuyerTaxRegistration(): void
    {
        (self::$document)->addDocumentBuyerTaxRegistration("taxregtype", "taxregid");
        (self::$document)->addDocumentBuyerTaxRegistration("taxregtype2", "taxregid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID', 0, "taxregid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 0, "taxregtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID', 1, "taxregid2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 1, "taxregtype2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerAddress
     */
    public function testSetDocumentBuyerAddress(): void
    {
        (self::$document)->setDocumentBuyerAddress("line1", "line2", "line3", "0000", "city", "DE", "county");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:StreetName', "line1");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:AdditionalStreetName', "line2");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:CityName', "city");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:PostalZone', "0000");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:CountrySubentity', "county");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cac:AddressLine/cbc:Line', "line3");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cac:Country/cbc:IdentificationCode', "DE");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerLegalOrganisation
     */
    public function testSetDocumentBuyerLegalOrganisation(): void
    {
        (self::$document)->setDocumentBuyerLegalOrganisation("legalorgid", "legalorgtype", "legalorgname", "legalorgform");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName', "legalorgname");
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID', "legalorgid", "schemeID", "legalorgtype");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyLegalForm', "legalorgform");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerContact
     */
    public function testSetDocumentBuyerContact(): void
    {
        (self::$document)->setDocumentBuyerContact("personname", "department", "phoneno", "faxno", "email");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Name', "personname");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telephone', "phoneno");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telefax', "faxno");
        $this->assertXPathValue('/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:ElectronicMail', "email");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRepresentative
     */
    public function testSetDocumentSellerTaxRepresentative(): void
    {
        (self::$document)->setDocumentSellerTaxRepresentative("name", "id", "scheme");;

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyIdentification/cbc:ID', "id", "schemeID", "scheme");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name', "name");

        (self::$document)->setDocumentSellerTaxRepresentative("name2", "id2");
        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyIdentification/cbc:ID', "id2");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name', "name2");

        (self::$document)->setDocumentSellerTaxRepresentative("name3", "id3", "scheme3");
        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyIdentification/cbc:ID', "id3", "schemeID", "scheme3");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name', "name3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerTaxRepresentativeGlobalId
     */
    public function testAddDocumentSellerTaxRepresentativeGlobalId(): void
    {
        (self::$document)->addDocumentSellerTaxRepresentativeGlobalId("globalid", "globalidscheme");
        (self::$document)->addDocumentSellerTaxRepresentativeGlobalId("globalid2", "globalidscheme2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyIdentification/cbc:ID', 1, "globalid", "schemeID", "globalidscheme");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyIdentification/cbc:ID', 2, "globalid2", "schemeID", "globalidscheme2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerTaxRepresentativeTaxRegistration
     */
    public function testAddDocumentSellerTaxRepresentativeTaxRegistration(): void
    {
        (self::$document)->addDocumentSellerTaxRepresentativeTaxRegistration("taxregtype", "taxregid");
        (self::$document)->addDocumentSellerTaxRepresentativeTaxRegistration("taxregtype2", "taxregid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cbc:CompanyID', 0, "taxregid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 0, "taxregtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cbc:CompanyID', 1, "taxregid2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 1, "taxregtype2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRepresentativeAddress
     */
    public function testSetDocumentSellerTaxRepresentativeAddress(): void
    {
        (self::$document)->setDocumentSellerTaxRepresentativeAddress("line1", "line2", "line3", "0000", "city", "DE", "county");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:StreetName', "line1");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:AdditionalStreetName', "line2");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:CityName', "city");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:PostalZone', "0000");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:CountrySubentity', "county");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cac:AddressLine/cbc:Line', "line3");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cac:Country/cbc:IdentificationCode', "DE");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRepresentativeLegalOrganisation
     */
    public function testSetDocumentSellerTaxRepresentativeLegalOrganisation(): void
    {
        (self::$document)->setDocumentSellerTaxRepresentativeLegalOrganisation("legalorgid", "legalorgtype", "legalorgname", "legalorgform");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyLegalEntity/cbc:RegistrationName', "legalorgname");
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyLegalEntity/cbc:CompanyID', "legalorgid", "schemeID", "legalorgtype");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyLegalEntity/cbc:CompanyLegalForm', "legalorgform");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRepresentativeContact
     */
    public function testSetDocumentSellerTaxRepresentativeContact(): void
    {
        (self::$document)->setDocumentSellerTaxRepresentativeContact("personname", "department", "phoneno", "faxno", "email");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:Contact/cbc:Name', "personname");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:Contact/cbc:Telephone', "phoneno");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:Contact/cbc:Telefax', "faxno");
        $this->assertXPathValue('/ubl:Invoice/cac:TaxRepresentativeParty/cac:Contact/cbc:ElectronicMail', "email");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentShipTo
     */
    public function testSetDocumentShipTo(): void
    {
        (self::$document)->setDocumentShipTo("name", "id", "scheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cbc:ID', "id", "schemeID", "scheme");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyName/cbc:Name', "name");

        (self::$document)->setDocumentShipTo("name2", "id2");
        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cbc:ID', "id2");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyName/cbc:Name', "name2");

        (self::$document)->setDocumentShipTo("name3", "id3", "scheme3");
        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cbc:ID', "id3", "schemeID", "scheme3");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyName/cbc:Name', "name3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentShipToGlobalId
     */
    public function testAddDocumentShipToGlobalId(): void
    {
        (self::$document)->addDocumentShipToGlobalId("globalid", "globalidscheme");
        (self::$document)->addDocumentShipToGlobalId("globalid2", "globalidscheme2");
        (self::$document)->addDocumentShipToGlobalId("globalid3");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyIdentification/cbc:ID', 0, "globalid", "schemeID", "globalidscheme");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyIdentification/cbc:ID', 1, "globalid2", "schemeID", "globalidscheme2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyIdentification/cbc:ID', 2, "globalid3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentShipToTaxRegistration
     */
    public function testAddDocumentShipToTaxRegistration(): void
    {
        (self::$document)->addDocumentShipToTaxRegistration("taxregtype", "taxregid");
        (self::$document)->addDocumentShipToTaxRegistration("taxregtype2", "taxregid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyTaxScheme/cbc:CompanyID', 0, "taxregid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 0, "taxregtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyTaxScheme/cbc:CompanyID', 1, "taxregid2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 1, "taxregtype2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentShipToAddress
     */
    public function testSetDocumentShipToAddress(): void
    {
        (self::$document)->setDocumentShipToAddress("line1", "line2", "line3", "0000", "city", "DE", "county");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:StreetName', "line1");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:AdditionalStreetName', "line2");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:CityName', "city");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:PostalZone', "0000");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cbc:CountrySubentity', "county");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cac:AddressLine/cbc:Line', "line3");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryLocation/cac:Address/cac:Country/cbc:IdentificationCode', "DE");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentShipToLegalOrganisation
     */
    public function testSetDocumentShipToLegalOrganisation(): void
    {
        (self::$document)->setDocumentShipToLegalOrganisation("legalorgid", "legalorgtype", "legalorgname", "legalorgform");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyLegalEntity/cbc:RegistrationName', "legalorgname");
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyLegalEntity/cbc:CompanyID', "legalorgid", "schemeID", "legalorgtype");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:PartyLegalEntity/cbc:CompanyLegalForm', "legalorgform");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentShipToContact
     */
    public function testSetDocumentShipToContact(): void
    {
        (self::$document)->setDocumentShipToContact("personname", "department", "phoneno", "faxno", "email");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:Contact/cbc:Name', "personname");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:Contact/cbc:Telephone', "phoneno");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:Contact/cbc:Telefax', "faxno");
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cac:DeliveryParty/cac:Contact/cbc:ElectronicMail', "email");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentShipmentDate
     */
    public function testSetDocumentShipmentDate(): void
    {
        (self::$document)->setDocumentShipmentDate(\DateTime::createFromFormat("Ymd", "20201201"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:Delivery/cbc:ActualDeliveryDate', "2020-12-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPayee
     */
    public function testSetDocumentPayee(): void
    {
        (self::$document)->setDocumentPayee("name", "id", "scheme");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID', "id", "schemeID", "scheme");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name', "name");

        (self::$document)->setDocumentPayee("name2", "id2");
        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID', "id2");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name', "name2");

        (self::$document)->setDocumentPayee("name3", "id3", "scheme3");
        $this->disableRenderXmlContent();
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID', "id3", "schemeID", "scheme3");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name', "name3");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPayeeGlobalId
     */
    public function testAddDocumentPayeeGlobalId(): void
    {
        (self::$document)->addDocumentPayeeGlobalId("globalid", "globalidscheme");
        (self::$document)->addDocumentPayeeGlobalId("globalid2", "globalidscheme2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID', 1, "globalid", "schemeID", "globalidscheme");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID', 2, "globalid2", "schemeID", "globalidscheme2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPayeeTaxRegistration
     */
    public function testAddDocumentPayeeTaxRegistration(): void
    {
        (self::$document)->addDocumentPayeeTaxRegistration("taxregtype", "taxregid");
        (self::$document)->addDocumentPayeeTaxRegistration("taxregtype2", "taxregid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PayeeParty/cac:PartyTaxScheme/cbc:CompanyID', 0, "taxregid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PayeeParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 0, "taxregtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PayeeParty/cac:PartyTaxScheme/cbc:CompanyID', 1, "taxregid2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PayeeParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID', 1, "taxregtype2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPayeeAddress
     */
    public function testSetDocumentPayeeAddress(): void
    {
        (self::$document)->setDocumentPayeeAddress("line1", "line2", "line3", "0000", "city", "DE", "county");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cbc:StreetName', "line1");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cbc:AdditionalStreetName', "line2");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cbc:CityName', "city");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cbc:PostalZone', "0000");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cbc:CountrySubentity', "county");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cac:AddressLine/cbc:Line', "line3");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PostalAddress/cac:Country/cbc:IdentificationCode', "DE");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPayeeLegalOrganisation
     */
    public function testSetDocumentPayeeLegalOrganisation(): void
    {
        (self::$document)->setDocumentPayeeLegalOrganisation("legalorgid", "legalorgtype", "legalorgname", "legalorgform");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:RegistrationName', "legalorgname");
        $this->assertXPathValueWithAttribute('/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:CompanyID', "legalorgid", "schemeID", "legalorgtype");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:CompanyLegalForm', "legalorgform");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPayeeContact
     */
    public function testSetDocumentPayeeContact(): void
    {
        (self::$document)->setDocumentPayeeContact("personname", "department", "phoneno", "faxno", "email");

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:Contact/cbc:Name', "personname");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:Contact/cbc:Telephone', "phoneno");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:Contact/cbc:Telefax', "faxno");
        $this->assertXPathValue('/ubl:Invoice/cac:PayeeParty/cac:Contact/cbc:ElectronicMail', "email");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerOrderReferencedDocument
     */
    public function testSetDocumentSellerOrderReferencedDocument(): void
    {
        (self::$document)->setDocumentSellerOrderReferencedDocument("sellerorderrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', 0, "sellerorderrefdoc");

        (self::$document)->setDocumentSellerOrderReferencedDocument("sellerorderrefdoc2", \DateTime::createFromFormat("Ymd", "20200102"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', 0, "sellerorderrefdoc2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerOrderReferencedDocument
     */
    public function testSetDocumentBuyerOrderReferencedDocument(): void
    {
        (self::$document)->setDocumentBuyerOrderReferencedDocument("buyerorderrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:ID', 0, "buyerorderrefdoc");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', 0, "sellerorderrefdoc2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:IssueDate', 0, "2020-01-01");

        (self::$document)->setDocumentBuyerOrderReferencedDocument("buyerorderrefdoc2", \DateTime::createFromFormat("Ymd", "20200102"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:ID', 0, "buyerorderrefdoc2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', 0, "sellerorderrefdoc2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OrderReference/cbc:IssueDate', 0, "2020-01-02");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentContractReferencedDocument
     */
    public function testSetDocumentContractReferencedDocument(): void
    {
        (self::$document)->setDocumentContractReferencedDocument("contractrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 0, "contractrefdoc");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:IssueDate', 0, "2020-01-01");

        (self::$document)->setDocumentContractReferencedDocument("contractrefdoc2", \DateTime::createFromFormat("Ymd", "20200102"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 0, "contractrefdoc2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:IssueDate', 0, "2020-01-02");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentOriginatorReferencedDocument
     */
    public function testSetDocumentOriginatorReferencedDocument(): void
    {
        (self::$document)->setDocumentOriginatorReferencedDocument("originatorrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 0, "originatorrefdoc");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:IssueDate', 0, "2020-01-01");

        (self::$document)->setDocumentOriginatorReferencedDocument("originatorrefdoc2", \DateTime::createFromFormat("Ymd", "20200102"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 0, "originatorrefdoc2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:IssueDate', 0, "2020-01-02");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentAdditionalReferencedDocument
     */
    public function testAddDocumentAdditionalReferencedDocument(): void
    {
        (self::$document)->addDocumentAdditionalReferencedDocument("adddocid", "adddoctype", "uriid", "name", "reftypecode", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0, "adddocid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:IssueDate', 0, "2020-01-01");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentTypeCode', 0, "adddoctype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentDescription', 0, "name");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cac:ExternalReference/cbc:URI', 0, "uriid");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentAdditionalReferencedDocument
     */
    public function testAddDocumentAdditionalReferencedDocument2(): void
    {
        (self::$document)->addDocumentAdditionalReferencedDocument("adddocid", "adddoctype", "uriid", "name", "reftypecode", \DateTime::createFromFormat("Ymd", "20200101"), dirname(__FILE__) . "/data/attachment.pdf");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 1, "adddocid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:IssueDate', 1, "2020-01-01");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentTypeCode', 1, "adddoctype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentDescription', 1, "name");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cac:ExternalReference/cbc:URI', 1);
        //$this->assertXPathValueStartsWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 1, "SlZCRVJpMHhM", "mimeCode", "application/pdf");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentInvoiceReferencedDocument
     */
    public function testSetDocumentInvoiceReferencedDocument(): void
    {
        (self::$document)->setDocumentInvoiceReferencedDocument("invrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', "invrefdoc");
        $this->assertXPathValue('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:IssueDate', "2020-01-01");

        (self::$document)->setDocumentInvoiceReferencedDocument("invrefdoc2", \DateTime::createFromFormat("Ymd", "20200102"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', "invrefdoc2");
        $this->assertXPathValue('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:IssueDate', "2020-01-02");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentProcuringProject
     */
    public function testSetDocumentProcuringProject(): void
    {
        (self::$document)->setDocumentProcuringProject("projectref", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:ProjectReference/cbc:ID', "projectref");
        $this->assertXPathValue('/ubl:Invoice/cac:ProjectReference/cbc:IssueDate', "2020-01-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentDespatchAdviceReferencedDocument
     */
    public function testSetDocumentDespatchAdviceReferencedDocument(): void
    {
        (self::$document)->setDocumentDespatchAdviceReferencedDocument("despadvrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', "despadvrefdoc");
        $this->assertXPathValue('/ubl:Invoice/cac:DespatchDocumentReference/cbc:IssueDate', "2020-01-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentReceivingAdviceReferencedDocument
     */
    public function testSetDocumentReceivingAdviceReferencedDocument(): void
    {
        (self::$document)->setDocumentReceivingAdviceReferencedDocument("revadvrefdoc", \DateTime::createFromFormat("Ymd", "20200101"));

        $this->disableRenderXmlContent();
        $this->assertXPathValue('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', "revadvrefdoc");
        $this->assertXPathValue('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:IssueDate', "2020-01-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMean
     */
    public function testAddDocumentPaymentMean(): void
    {
        (self::$document)->addDocumentPaymentMean("00", "information", "cardtype", "cardid", "cardholder", "buyeriban", "payeeiban", "payeeaccount", "payeepropid", "payeebic", "mandate", "paymentref");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentMeansCode', 0, "00", "name", "information");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentID', 0, "paymentref");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:PrimaryAccountNumberID', 0, "rdid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:NetworkID', 0, "cardtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:HolderName', 0, "cardholder");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:ID', 0, "payeeiban");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:Name', 0, "payeeaccount");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cac:FinancialInstitutionBranch/cbc:ID', 0, "payeebic");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cbc:ID', 0, "mandate");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cac:PayerFinancialAccount/cbc:ID', 0, "buyeriban");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMean
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMeanSepaCreditTransfer
     */
    public function testAddDocumentPaymentMean58(): void
    {
        (self::$document)->getInvoiceObject()->setPaymentMeans([]);
        (self::$document)->addDocumentPaymentMean("58", "information", "cardtype", "cardid", "cardholder", "buyeriban", "payeeiban", "payeeaccount", "payeepropid", "payeebic", "mandate", "paymentref");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentMeansCode', 0, "58");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:PrimaryAccountNumberID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:NetworkID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:HolderName', 0);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:ID', 0, "payeeiban");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:Name', 0, "payeeaccount");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cac:FinancialInstitutionBranch/cbc:ID', 0, "payeebic");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cac:PayerFinancialAccount/cbc:ID', 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMean
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMeanSepaDirectDebit
     */
    public function testAddDocumentPaymentMean59(): void
    {
        (self::$document)->getInvoiceObject()->setPaymentMeans([]);
        (self::$document)->addDocumentPaymentMean("59", "information", "cardtype", "cardid", "cardholder", "buyeriban", "payeeiban", "payeeaccount", "payeepropid", "payeebic", "mandate", "paymentref");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentMeansCode', 0, "59");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:PrimaryAccountNumberID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:NetworkID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:HolderName', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayerFinancialAccount/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:Name', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cac:FinancialInstitutionBranch/cbc:ID', 0);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cbc:ID', 0, "mandate");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cac:PayerFinancialAccount/cbc:ID', 0, "buyeriban");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMean
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentMeanBankCard
     */
    public function testAddDocumentPaymentMean49(): void
    {
        (self::$document)->getInvoiceObject()->setPaymentMeans([]);
        (self::$document)->addDocumentPaymentMean("48", "information", "cardtype", "cardid", "cardholder", "buyeriban", "payeeiban", "payeeaccount", "payeepropid", "payeebic", "mandate", "paymentref");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentMeansCode', 0, "48");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cbc:PaymentID', 0);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:PrimaryAccountNumberID', 0, "rdid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:NetworkID', 0, "cardtype");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:CardAccount/cbc:HolderName', 0, "cardholder");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayerFinancialAccount/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cbc:Name', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PayeeFinancialAccount/cac:FinancialInstitutionBranch/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cbc:ID', 0, "mandate");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:PaymentMeans/cac:PaymentMandate/cac:PayerFinancialAccount/cbc:ID', 0, "buyeriban");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentTax
     */
    public function testAddDocumentTax(): void
    {
        (self::$document)->addDocumentTax("S", "VAT", 100, 19, 19, "reason", "reasoncode");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 0, "19.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 0, "100.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 0, "19.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 0, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 0, "19.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 0, "reasoncode");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 0, "reason");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 0, "VAT");

        (self::$document)->addDocumentTax("E", "VAT", 100, 0, 0, "reason2", "reasoncode2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 1, "0.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 1, "100.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 1, "0.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 1, "E");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 1, "0.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 1, "reasoncode2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 1, "reason2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 1, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentTaxSimple
     */
    public function testAddDocumentTaxSimple(): void
    {
        (self::$document)->addDocumentTaxSimple("S", "VAT", 100, 19, 19);

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 2, "19.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 2, "100.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 2, "19.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 2, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 2, "19.0");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 2);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 2);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 2, "VAT");

        (self::$document)->addDocumentTaxSimple("E", "VAT", 100, 0, 0);

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 3, "0.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 3, "100.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 3, "0.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 3, "E");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 3, "0.0");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 3);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 3);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 3, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentTaxSubTotal
     */
    public function testAddDocumentTaxSubTotal(): void
    {
        (self::$document)->addDocumentTaxSubTotal("S", "VAT", 200, 38, 19, "reason3", "reasoncode3");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 3, "38.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 4, "200.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 4, "38.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 4, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 4, "19.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 2, "reasoncode3");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 2, "reason3");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 4, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentTaxSubTotalSimple
     */
    public function testAddDocumentTaxSubTotalSimple(): void
    {
        (self::$document)->addDocumentTaxSubTotalSimple("S", "VAT", 300, 57, 19);

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 3, "95.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxableAmount', 5, "300.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cbc:TaxAmount', 5, "57.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:ID', 5, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:Percent', 5, "19.0");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReasonCode', 3);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cbc:TaxExemptionReason', 3);
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:TaxTotal/cac:TaxSubtotal/cac:TaxCategory/cac:TaxScheme/cbc:ID', 5, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentTaxInTaxCurrency
     */
    public function testAddDocumentTaxInTaxCurrency(): void
    {
        (self::$document)->addDocumentTaxInTaxCurrency(99999);

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:TaxTotal/cbc:TaxAmount', 4, "99999.0", "currencyID", "EUR");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBillingPeriod
     */
    public function testSetDocumentBillingPeriod(): void
    {
        (self::$document)->setDocumentBillingPeriod(\DateTime::createFromFormat("Ymd", "20200101"), \DateTime::createFromFormat("Ymd", "20200131"), "description");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate', 0, "2020-01-01");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate', 0, "2020-01-31");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:Description', 0, "description");

        (self::$document)->setDocumentBillingPeriod(\DateTime::createFromFormat("Ymd", "20200301"), \DateTime::createFromFormat("Ymd", "20200331"), "description2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate', 0, "2020-03-01");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate', 0, "2020-03-31");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoicePeriod/cbc:Description', 0, "description2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBillingPeriod
     */
    public function testAddDocumentAllowanceCharge(): void
    {
        (self::$document)->addDocumentAllowanceCharge(10, false, "S", "VAT", 19, 1, 10, 1, 2, "C62", "reasoncode", "reason", 1);
        (self::$document)->addDocumentAllowanceCharge(20, true, "S", "VAT", 38, 2, 20, 11, 12, "C62", "reasoncode2", "reason2", 1);

        $this->disableRenderXmlContent();

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:ChargeIndicator', 0, "false");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:AllowanceChargeReasonCode', 0, "reasoncode");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:AllowanceChargeReason', 0, "reason");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:MultiplierFactorNumeric', 0, "1.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:SequenceNumeric', 0, "1.0");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AllowanceCharge/cbc:Amount', 0, "10.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AllowanceCharge/cbc:BaseAmount', 0, "1.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cbc:ID', 0, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cbc:Percent', 0, "19.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cac:TaxScheme/cbc:ID', 0, "VAT");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:ChargeIndicator', 1, "true");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:AllowanceChargeReasonCode', 1, "reasoncode2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:AllowanceChargeReason', 1, "reason2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:MultiplierFactorNumeric', 1, "1.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cbc:SequenceNumeric', 1, "2.0");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AllowanceCharge/cbc:Amount', 1, "20.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AllowanceCharge/cbc:BaseAmount', 1, "11.0", "currencyID", "EUR");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cbc:ID', 1, "S");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cbc:Percent', 1, "38.0");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AllowanceCharge/cac:TaxCategory/cac:TaxScheme/cbc:ID', 1, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPaymentTerm
     */
    public function testAddDocumentPaymentTerm(): void
    {
        (self::$document)->addDocumentPaymentTerm("term1");
        (self::$document)->addDocumentPaymentTerm("term2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentTerms/cbc:Note', 0, "term1");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:PaymentTerms/cbc:Note', 1, "term2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentReceivableSpecifiedTradeAccountingAccount
     */
    public function testAddDocumentReceivableSpecifiedTradeAccountingAccount(): void
    {
        (self::$document)->setDocumentReceivableSpecifiedTradeAccountingAccount("account1");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:AccountingCost', 0, "account1");

        (self::$document)->setDocumentReceivableSpecifiedTradeAccountingAccount("account2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:AccountingCost', 0, "account2");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addNewPosition
     */
    public function testAddNewPosition(): void
    {
        (self::$document)->addNewPosition("1");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:ID', 0, "1");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPositionNote
     */
    public function testSetDocumentPositionNote(): void
    {
        (self::$document)->setDocumentPositionNote("position note");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 0, "position note");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 1);

        (self::$document)->setDocumentPositionNote("position note 2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 0, "position note 2");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPositionNote
     */
    public function testAddDocumentPositionNote(): void
    {
        (self::$document)->addDocumentPositionNote("position note one");
        (self::$document)->addDocumentPositionNote("position note two");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 1, "position note one");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 2, "position note two");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cbc:Note', 3);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPositionProductDetails
     */
    public function testSetDocumentPositionProductDetails(): void
    {
        (self::$document)->setDocumentPositionProductDetails("name", "description", "sellerid", "buyerid", "globalidtype", "globalid");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cbc:Description', 0, "description");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cbc:Name', 0, "name");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:BuyersItemIdentification/cbc:ID', 0, "buyerid");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:SellersItemIdentification/cbc:ID', 0, "sellerid");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:StandardItemIdentification/cbc:ID', 0, "globalid", "schemeID", "globalidtype");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPositionProductCharacteristic
     */
    public function testAddDocumentPositionProductCharacteristic(): void
    {
        (self::$document)->addDocumentPositionProductCharacteristic("description1", "value1");
        (self::$document)->addDocumentPositionProductCharacteristic("description2", "value2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Name', 0, "description1");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Value', 0, "value1");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Name', 1, "description2");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Value', 1, "value2");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Name', 2);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:AdditionalItemProperty/cbc:Value', 2);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentPositionProductClassification
     */
    public function testAddDocumentPositionProductClassification(): void
    {
        (self::$document)->addDocumentPositionProductClassification("classcode1", "listid1", "listversionid1");
        (self::$document)->addDocumentPositionProductClassification("classcode2", "listid2", "listversionid2");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode', 0, "classcode1", "listID", "listid1");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode', 0, "classcode1", "listVersionID", "listversionid1");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode', 1, "classcode2", "listID", "listid2");
        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode', 1, "classcode2", "listVersionID", "listversionid2");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:CommodityClassification/cbc:ItemClassificationCode', 2);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentPositionProductOriginTradeCountry
     */
    public function testSetDocumentPositionProductOriginTradeCountry(): void
    {
        (self::$document)->setDocumentPositionProductOriginTradeCountry("DE");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 0, "DE");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 2);

        (self::$document)->setDocumentPositionProductOriginTradeCountry("GB");

        $this->disableRenderXmlContent();
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 0, "GB");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:InvoiceLine/cac:Item/cac:OriginCountry/cbc:IdentificationCode', 2);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::writeFile
     */
    public function testWriteFile(): void
    {
        (self::$document)->writeFile(dirname(__FILE__) . "/output.xml");

        $this->assertTrue(file_exists(dirname(__FILE__) . "/output.xml"));

        @unlink(dirname(__FILE__) . "/output.xml");
    }
}
