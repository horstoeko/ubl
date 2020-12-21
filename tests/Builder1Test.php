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
}
