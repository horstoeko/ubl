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
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentNumber
     */
    public function testSetDocumentNumber(): void
    {
        (self::$document)->setDocumentNumber("INV-00001");

        $this->assertXPathValue('/ubl:Invoice/cbc:ID', "INV-00001");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentDate
     */
    public function testSetDocumentDate(): void
    {
        (self::$document)->setDocumentDate(DateTime::createFromFormat("Ymd", "20200101"));

        $this->assertXPathValue('/ubl:Invoice/cbc:IssueDate', "2020-01-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentDueDate
     */
    public function testSetDocumentDueDate(): void
    {
        (self::$document)->setDocumentDueDate(DateTime::createFromFormat("Ymd", "20200114"));

        $this->assertXPathValue('/ubl:Invoice/cbc:DueDate', "2020-01-14");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentTaxPointDate
     */
    public function testSetDocumentTaxPointDate(): void
    {
        (self::$document)->setDocumentTaxPointDate(DateTime::createFromFormat("Ymd", "20200131"));

        $this->assertXPathValue('/ubl:Invoice/cbc:TaxPointDate', "2020-01-31");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentType
     */
    public function testSetDocumentType(): void
    {
        (self::$document)->setDocumentType("");

        $this->assertXPathValue('/ubl:Invoice/cbc:InvoiceTypeCode', "");

        (self::$document)->setDocumentType("381");

        $this->assertXPathValue('/ubl:Invoice/cbc:InvoiceTypeCode', "381");

        (self::$document)->setDocumentType("380");

        $this->assertXPathValue('/ubl:Invoice/cbc:InvoiceTypeCode', "380");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentNote
     */
    public function testSetDocumentNote(): void
    {
        (self::$document)->setDocumentNote("Test Note");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:Note', 0, "Test Note");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cbc:Note', 1);

        (self::$document)->setDocumentNote("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:Note', 0, "");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cbc:Note', 1);

        (self::$document)->setDocumentNote("This is an invoice note");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cbc:Note', 0, "This is an invoice note");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cbc:Note', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentCurrencies
     */
    public function testSetDocumentCurrencies(): void
    {
        (self::$document)->setDocumentCurrencies("EUR");

        $this->assertXPathValue('/ubl:Invoice/cbc:DocumentCurrencyCode', "EUR");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxCurrencyCode', "EUR");

        (self::$document)->setDocumentCurrencies("EUR", "GBP");

        $this->assertXPathValue('/ubl:Invoice/cbc:DocumentCurrencyCode', "EUR");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxCurrencyCode', "GBP");

        (self::$document)->setDocumentCurrencies("EUR", "");

        $this->assertXPathValue('/ubl:Invoice/cbc:DocumentCurrencyCode', "EUR");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxCurrencyCode', "EUR");

        (self::$document)->setDocumentCurrencies("EUR", null);

        $this->assertXPathValue('/ubl:Invoice/cbc:DocumentCurrencyCode', "EUR");
        $this->assertXPathValue('/ubl:Invoice/cbc:TaxCurrencyCode', "EUR");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentAccountingCost
     */
    public function testSetDocumentAccountingCost(): void
    {
        (self::$document)->setDocumentAccountingCost("47110815");

        $this->assertXPathValue('/ubl:Invoice/cbc:AccountingCost', "47110815");

        (self::$document)->setDocumentAccountingCost("");

        $this->assertXPathValue('/ubl:Invoice/cbc:AccountingCost', "");

        (self::$document)->setDocumentAccountingCost("7211");

        $this->assertXPathValue('/ubl:Invoice/cbc:AccountingCost', "7211");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerReference
     */
    public function testSetDocumentBuyerReference(): void
    {
        (self::$document)->setDocumentBuyerReference("90000000-03083-12");

        $this->assertXPathValue('/ubl:Invoice/cbc:BuyerReference', "90000000-03083-12");

        (self::$document)->setDocumentBuyerReference("");

        $this->assertXPathValue('/ubl:Invoice/cbc:BuyerReference', "");

        (self::$document)->setDocumentBuyerReference("04011000-12348-31");

        $this->assertXPathValue('/ubl:Invoice/cbc:BuyerReference', "04011000-12348-31");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentInvoicePeriod
     */
    public function testSetDocumentInvoicePeriod(): void
    {
        (self::$document)->setDocumentInvoicePeriod();

        $this->assertXPathNotExists('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate');
        $this->assertXPathNotExists('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate');

        (self::$document)->setDocumentInvoicePeriod(DateTime::createFromFormat("Ymd", "20200101"));

        $this->assertXPathValue('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate', "2020-01-01");
        $this->assertXPathNotExists('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate');

        (self::$document)->setDocumentInvoicePeriod(null, DateTime::createFromFormat("Ymd", "20200101"));

        $this->assertXPathNotExists('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate');
        $this->assertXPathValue('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate', "2020-01-01");

        (self::$document)->setDocumentInvoicePeriod(DateTime::createFromFormat("Ymd", "20200101"), DateTime::createFromFormat("Ymd", "20200131"));

        $this->assertXPathValue('/ubl:Invoice/cac:InvoicePeriod/cbc:StartDate', "2020-01-01");
        $this->assertXPathValue('/ubl:Invoice/cac:InvoicePeriod/cbc:EndDate', "2020-01-31");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentBuyerOrderNo
     */
    public function testSetDocumentBuyerOrderNo(): void
    {
        (self::$document)->setDocumentBuyerOrderNo("PO-000001");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "PO-000001");

        (self::$document)->setDocumentBuyerOrderNo("");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "");

        (self::$document)->setDocumentBuyerOrderNo("PO-000002");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "PO-000002");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerOrderNo
     */
    public function testSetDocumentSellerOrderNo(): void
    {
        (self::$document)->setDocumentSellerOrderNo("SO-000001");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "PO-000002");
        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', "SO-000001");

        (self::$document)->setDocumentSellerOrderNo("");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "PO-000002");
        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', "");

        (self::$document)->setDocumentSellerOrderNo("SO-000002");

        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:ID', "PO-000002");
        $this->assertXPathValue('/ubl:Invoice/cac:OrderReference/cbc:SalesOrderID', "SO-000002");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentBillingReference
     */
    public function testAddDocumentBillingReference(): void
    {
        (self::$document)->addDocumentBillingReference("INVREF-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', 0, "INVREF-001");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:IssueDate', 0);

        (self::$document)->addDocumentBillingReference("INVREF-002", DateTime::createFromFormat("Ymd", "20191201"));

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', 0, "INVREF-001");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:ID', 1, "INVREF-002");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:BillingReference/cac:InvoiceDocumentReference/cbc:IssueDate', 0, "2019-12-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentDespatchReference
     */
    public function testSetDocumentDespatchReference(): void
    {
        (self::$document)->setDocumentDespatchReference("DESP-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 0, "DESP-001");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentDespatchReference("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 0, "");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentDespatchReference("DESP-002");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 0, "DESP-002");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:DespatchDocumentReference/cbc:ID', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentReceiptReference
     */
    public function testSetDocumentReceiptReference(): void
    {
        (self::$document)->setDocumentReceiptReference("REC-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 0, "REC-001");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentReceiptReference("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 0, "");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentReceiptReference("REC-002");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 0, "REC-002");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ReceiptDocumentReference/cbc:ID', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentOriginatorReference
     */
    public function testSetDocumentOriginatorReference(): void
    {
        (self::$document)->setDocumentOriginatorReference("ANG-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 0, "ANG-001");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentOriginatorReference("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 0, "");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentOriginatorReference("ANG-002");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 0, "ANG-002");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:OriginatorDocumentReference/cbc:ID', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentContractReference
     */
    public function testSetDocumentContractReference(): void
    {
        (self::$document)->setDocumentContractReference("CON-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 0, "CON-001");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentContractReference("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 0, "");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 1);

        (self::$document)->setDocumentContractReference("CON-002");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 0, "CON-002");
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:ContractDocumentReference/cbc:ID', 1);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentAdditionalReference
     */
    public function testAddDocumentAdditionalReference(): void
    {
        (self::$document)->addDocumentAdditionalReference("ADD-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0, "ADD-001");

        (self::$document)->addDocumentAdditionalReference("ADD-002", "0088");

        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 1, "ADD-002", "schemeID", "0088");

        (self::$document)->addDocumentAdditionalReference("ADD-003", "0088", "130");

        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 2, "ADD-003", "schemeID", "0088");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentTypeCode', 0, "130");

        (self::$document)->addDocumentAdditionalReference("ADD-004", "0088", "130", "Additional document");

        $this->assertXPathValueWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 3, "ADD-004", "schemeID", "0088");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentTypeCode', 1, "130");
        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:DocumentDescription', 0, "Additional document");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::clearDocumentAdditionalReference
     */
    public function testClearDocumentAdditionalReference(): void
    {
        (self::$document)->clearDocumentAdditionalReference();

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 2);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 3);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::clearDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilder::setFileAttachmentToAdditionalReference
     */
    public function testSetFileAttachmentToAdditionalReference(): void
    {
        (self::$document)->clearDocumentAdditionalReference();

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 2);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 3);

        (self::$document)->setFileAttachmentToAdditionalReference(dirname(__FILE__) . "/notexists.pdf");

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 0);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->addDocumentAdditionalReference("ADD-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0, "ADD-001");

        (self::$document)->setFileAttachmentToAdditionalReference(dirname(__FILE__) . "/notexists.pdf");

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 0);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->addDocumentAdditionalReference("ADD-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0, "ADD-001");

        (self::$document)->setFileAttachmentToAdditionalReference(dirname(__FILE__) . "/data/attachment.xml");

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 0);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->addDocumentAdditionalReference("ADD-001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0, "ADD-001");

        (self::$document)->setFileAttachmentToAdditionalReference(dirname(__FILE__) . "/data/attachment.pdf");

        $this->assertXPathValueStartsWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 0, "SlZCRVJpMHhMalFLSmNPa3c3", "mimeCode", "application/pdf");
        $this->assertXPathValueStartsWithIndexAndAttribute('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cbc:EmbeddedDocumentBinaryObject', 0, "SlZCRVJpMHhMalFLSmNPa3c3", "filename", "attachment.pdf");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::clearDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilder::setExternalAttachmentToAdditionalReference
     */
    public function testSetExternalAttachmentToAdditionalReference(): void
    {
        (self::$document)->clearDocumentAdditionalReference();

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 0);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 1);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 2);
        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cbc:ID', 3);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->setExternalAttachmentToAdditionalReference("");

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cac:ExternalReference/cbc:URI', 0);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->addDocumentAdditionalReference("ADD-001");
        (self::$document)->setExternalAttachmentToAdditionalReference("");

        $this->assertXPathNotExistsWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cac:ExternalReference/cbc:URI', 0);

        (self::$document)->clearDocumentAdditionalReference();
        (self::$document)->addDocumentAdditionalReference("ADD-001");
        (self::$document)->setExternalAttachmentToAdditionalReference("http://lieferant.de/372167817.pdf");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:AdditionalDocumentReference/cac:Attachment/cac:ExternalReference/cbc:URI', 0, "http://lieferant.de/372167817.pdf");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentProjectReference
     */
    public function testSetDocumentProjectReference(): void
    {
        (self::$document)->setDocumentProjectReference("P-00001");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ProjectReference/cbc:ID', 0, "P-00001");

        (self::$document)->setDocumentProjectReference("");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ProjectReference/cbc:ID', 0, "");

        (self::$document)->setDocumentProjectReference("P-00002");

        $this->assertXPathValueWithIndex('/ubl:Invoice/cac:ProjectReference/cbc:ID', 0, "P-00002");

        (self::$document)->setDocumentSellerName("Seller Name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name", 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerEndpointId
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerIdentification
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerName
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerPostalAddress
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerVATIdentifier
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRegistration
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerLegalEntity
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerContact
     */
    public function testBeforeInitSellerParty(): void
    {
        (self::$document)->setDocumentSellerEndpointId("test@test.de", "EM");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID");

        (self::$document)->addDocumentSellerIdentification("1234567890", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->setDocumentSellerName("Seller Name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentSellerPostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress", 0);

        (self::$document)->setDocumentSellerVATIdentifier("DE 123456789");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentSellerTaxRegistration("123/456/789");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 1);

        (self::$document)->setDocumentSellerLegalEntity("Seller name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentSellerContact("Name", "+49-(0)-111-22222222", "info@foo.bar");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact", 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::initDocumentSeller
     */
    public function testInitSellerParty(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party");
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty");

        (self::$document)->initDocumentSeller();

        $this->assertXPathExists("/ubl:Invoice/cac:AccountingSupplierParty");
        $this->assertXPathExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerEndpointId
     */
    public function testSetDocumentSellerEndpointId(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentSellerEndpointId("", "");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentSellerEndpointId("rechnungsausgang@test.com", "");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentSellerEndpointId("", "EM");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentSellerEndpointId("rechnungsausgang@test.com", "EM");

        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cbc:EndpointID", 0, "rechnungsausgang@test.com", "schemeID", "EM");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::addDocumentSellerIdentification
     */
    public function testAddDocumentSellerIdentification(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentSellerIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentSellerIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentSellerIdentification("1234567890", "0088");

        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 0, "1234567890", "schemeID", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentSellerIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentSellerIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentSellerIdentification("9876543210");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyIdentification/cbc:ID", 1, "9876543210");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerName
     */
    public function testSetDocumentSellerName(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentSellerName("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentSellerName("Seller Name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyName/cbc:Name", 0, "Seller Name");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerPostalAddress
     */
    public function testSetDocumentSellerPostalAddress(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress", 0);

        (self::$document)->setDocumentSellerPostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:StreetName", 0, "Main Street 1");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:AdditionalStreetName", 0, "Po Box 351");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:CityName", 0, "London");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:PostalZone", 0, "W1G 8LZ");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cbc:CountrySubentity", 0, "Region A");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cac:AddressLine/cbc:Line", 0, "Building 23");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PostalAddress/cac:Country/cbc:IdentificationCode", 0, "GB");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerVATIdentifier
     */
    public function testSetDocumentSellerVATIdentifier(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentSellerVATIdentifier("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentSellerVATIdentifier("DE 123456789");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID", 0, "DE 123456789");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID", 0, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerTaxRegistration
     */
    public function testSetDocumentSellerTaxRegistration(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 1);

        (self::$document)->setDocumentSellerTaxRegistration("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme", 1);

        (self::$document)->setDocumentSellerTaxRegistration("123/456/789");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID", 1, "123/456/789");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID", 1, "FC");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerLegalEntity
     */
    public function testSetDocumentSellerLegalEntity(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentSellerLegalEntity("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentSellerLegalEntity("Seller name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Seller name");

        (self::$document)->setDocumentSellerLegalEntity("Seller name", "HRB 123");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Seller name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID", 0, "HRB 123");

        (self::$document)->setDocumentSellerLegalEntity("Seller name", "HRB 123", "0002");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Seller name");
        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID", 0, "HRB 123", "schemeID", "0002");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilder::setDocumentSellerContact
     */
    public function testSetDocumentSellerContact(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact", 0);

        (self::$document)->setDocumentSellerContact("", "", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Name", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telephone", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentSellerContact("Name", "", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telephone", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentSellerContact("Name", "+49-(0)111-2222222", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telephone", 0, "+49-(0)111-2222222");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentSellerContact("Name", "+49-(0)111-2222222", "info@foo.bar");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:Telephone", 0, "+49-(0)111-2222222");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingSupplierParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "info@foo.bar");
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
