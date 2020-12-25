<?php

namespace horstoeko\ubl\tests;

use DateTime;
use horstoeko\ubl\UblDocument;
use PHPUnit\Framework\TestCase;
use horstoeko\ubl\UblDocumentBuilderXRechnung;

class BuilderXRechnungTest extends TestCase
{
    /**
     * @var UblDocumentBuilderXRechnung
     */
    protected static $document;

    use XPathUtils;

    protected static function getDocument(): ?UblDocument
    {
        return self::$document;
    }

    public static function setUpBeforeClass(): void
    {
        self::$document = new UblDocumentBuilderXRechnung();
    }

    public static function tearDownAfterClass(): void
    {
        (self::$document)->writeFile(dirname(__FILE__) . "/BuilderXRechnungTest.xml");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::getInvoiceObject
     */
    public function testgetInvoiceObject(): void
    {
        $invoiceObject = (self::$document)->getInvoiceObject();

        $this->assertNotNull($invoiceObject);
        $this->assertTrue(is_a($invoiceObject, \horstoeko\ubl\entities\main\Invoice::class));
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentCustomization
     */
    public function testSetDocumentCustomization(): void
    {
        (self::$document)->setDocumentCustomization("customizationid");

        $this->assertXPathValue('/ubl:Invoice/cbc:CustomizationID', "customizationid");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentProfile
     */
    public function testsetDocumentProfile(): void
    {
        (self::$document)->setDocumentProfile("profile");

        $this->assertXPathValue('/ubl:Invoice/cbc:ProfileID', "profile");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentNumber
     */
    public function testSetDocumentNumber(): void
    {
        (self::$document)->setDocumentNumber("INV-00001");

        $this->assertXPathValue('/ubl:Invoice/cbc:ID', "INV-00001");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentDate
     */
    public function testSetDocumentDate(): void
    {
        (self::$document)->setDocumentDate(DateTime::createFromFormat("Ymd", "20200101"));

        $this->assertXPathValue('/ubl:Invoice/cbc:IssueDate', "2020-01-01");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentDueDate
     */
    public function testSetDocumentDueDate(): void
    {
        (self::$document)->setDocumentDueDate(DateTime::createFromFormat("Ymd", "20200114"));

        $this->assertXPathValue('/ubl:Invoice/cbc:DueDate', "2020-01-14");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxPointDate
     */
    public function testSetDocumentTaxPointDate(): void
    {
        (self::$document)->setDocumentTaxPointDate(DateTime::createFromFormat("Ymd", "20200131"));

        $this->assertXPathValue('/ubl:Invoice/cbc:TaxPointDate', "2020-01-31");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentType
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentNote
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentCurrencies
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentAccountingCost
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentInvoicePeriod
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerOrderNo
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerOrderNo
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentBillingReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentDespatchReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentReceiptReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentOriginatorReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentContractReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentAdditionalReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::clearDocumentAdditionalReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::clearDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setFileAttachmentToAdditionalReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::clearDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentAdditionalReference
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setExternalAttachmentToAdditionalReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentProjectReference
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerEndpointId
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentSellerIdentification
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerName
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerPostalAddress
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerVATIdentifier
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerTaxRegistration
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerLegalEntity
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerContact
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::initDocumentSeller
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerEndpointId
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentSellerIdentification
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerName
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerPostalAddress
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerVATIdentifier
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerTaxRegistration
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerLegalEntity
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentSellerContact
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
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerEndpointId
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentBuyerIdentification
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerName
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerPostalAddress
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerVATIdentifier
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerLegalEntity
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerContact
     */
    public function testBeforeInitBuyerParty(): void
    {
        (self::$document)->setDocumentBuyerEndpointId("test@test.de", "EM");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID");

        (self::$document)->addDocumentBuyerIdentification("1234567890", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->setDocumentBuyerName("Buyer Name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentBuyerPostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress", 0);

        (self::$document)->setDocumentBuyerVATIdentifier("DE 123456789");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentBuyerLegalEntity("Buyer name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentBuyerContact("Name", "+49-(0)-111-22222222", "info@foo.bar");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact", 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::initDocumentBuyer
     */
    public function testInitBuyerParty(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party");
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty");

        (self::$document)->initDocumentBuyer();

        $this->assertXPathExists("/ubl:Invoice/cac:AccountingCustomerParty");
        $this->assertXPathExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerEndpointId
     */
    public function testSetDocumentBuyerEndpointId(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentBuyerEndpointId("", "");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentBuyerEndpointId("rechnungseingang@test.com", "");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentBuyerEndpointId("", "EM");

        $this->assertXPathNotExists("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID");

        (self::$document)->setDocumentBuyerEndpointId("rechnungseingang@test.com", "EM");

        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cbc:EndpointID", 0, "rechnungseingang@test.com", "schemeID", "EM");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentBuyerIdentification
     */
    public function testAddDocumentBuyerIdentification(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentBuyerIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentBuyerIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentBuyerIdentification("1234567890", "0088");

        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 0, "1234567890", "schemeID", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentBuyerIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentBuyerIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentBuyerIdentification("9876543210");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyIdentification/cbc:ID", 1, "9876543210");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerName
     */
    public function testSetDocumentBuyerName(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentBuyerName("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentBuyerName("Buyer Name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyName/cbc:Name", 0, "Buyer Name");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerPostalAddress
     */
    public function testSetDocumentBuyerPostalAddress(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress", 0);

        (self::$document)->setDocumentBuyerPostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:StreetName", 0, "Main Street 1");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:AdditionalStreetName", 0, "Po Box 351");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:CityName", 0, "London");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:PostalZone", 0, "W1G 8LZ");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cbc:CountrySubentity", 0, "Region A");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cac:AddressLine/cbc:Line", 0, "Building 23");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PostalAddress/cac:Country/cbc:IdentificationCode", 0, "GB");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerVATIdentifier
     */
    public function testSetDocumentBuyerVATIdentifier(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentBuyerVATIdentifier("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentBuyerVATIdentifier("DE 123456789");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cbc:CompanyID", 0, "DE 123456789");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID", 0, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerLegalEntity
     */
    public function testSetDocumentBuyerLegalEntity(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentBuyerLegalEntity("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentBuyerLegalEntity("Buyer name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Buyer name");

        (self::$document)->setDocumentBuyerLegalEntity("Buyer name", "7300010000001");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Buyer name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID", 0, "7300010000001");

        (self::$document)->setDocumentBuyerLegalEntity("Buyer name", "7300010000001", "0088");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Buyer name");
        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:PartyLegalEntity/cbc:CompanyID", 0, "7300010000001", "schemeID", "0088");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentBuyerContact
     */
    public function testSetDocumentBuyerContact(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact", 0);

        (self::$document)->setDocumentBuyerContact("", "", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Name", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telephone", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentBuyerContact("Name", "", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telephone", 0, "");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentBuyerContact("Name", "+49-(0)111-2222222", "");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telephone", 0, "+49-(0)111-2222222");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "");

        (self::$document)->setDocumentBuyerContact("Name", "+49-(0)111-2222222", "info@foo.bar");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Name", 0, "Name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:Telephone", 0, "+49-(0)111-2222222");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:AccountingCustomerParty/cac:Party/cac:Contact/cbc:ElectronicMail", 0, "info@foo.bar");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentPayeeIdentification
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeName
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeePostalAddress
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeVATIdentifier
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeLegalEntity
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeContact
     */
    public function testBeforeInitPayeeParty(): void
    {
        (self::$document)->addDocumentPayeeIdentification("1234567890", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->setDocumentPayeeName("Payee Name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentPayeeLegalEntity("Payee name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity", 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::initDocumentPayee
     */
    public function testInitPayeeParty(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:PayeeParty");

        (self::$document)->initDocumentPayee();

        $this->assertXPathExists("/ubl:Invoice/cac:PayeeParty");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::addDocumentPayeeIdentification
     */
    public function testAddDocumentPayeeIdentification(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentPayeeIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentPayeeIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 0);

        (self::$document)->addDocumentPayeeIdentification("1234567890", "0088");

        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 0, "1234567890", "schemeID", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentPayeeIdentification("", "");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentPayeeIdentification("", "0088");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 1);

        (self::$document)->addDocumentPayeeIdentification("9876543210");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyIdentification/cbc:ID", 1, "9876543210");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeName
     */
    public function testSetDocumentPayeeName(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentPayeeName("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentPayeeName("Payee Name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyName/cbc:Name", 0, "Payee Name");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentPayeeLegalEntity
     */
    public function testSetDocumentPayeeLegalEntity(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentPayeeLegalEntity("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity", 0);

        (self::$document)->setDocumentPayeeLegalEntity("Payee name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Payee name");

        (self::$document)->setDocumentPayeeLegalEntity("Payee name", "7300010000001");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Payee name");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:CompanyID", 0, "7300010000001");

        (self::$document)->setDocumentPayeeLegalEntity("Payee name", "7300010000001", "0088");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:RegistrationName", 0, "Payee name");
        $this->assertXPathValueWithIndexAndAttribute("/ubl:Invoice/cac:PayeeParty/cac:PartyLegalEntity/cbc:CompanyID", 0, "7300010000001", "schemeID", "0088");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativeName
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativePostalAddress
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativeVATIdentifier
     */
    public function testBeforeInitTaxRepresentativeParty(): void
    {
        (self::$document)->setDocumentTaxRepresentativeName("TaxRepresentative Name");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentTaxRepresentativePostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress", 0);

        (self::$document)->setDocumentTaxRepresentativeVATIdentifier("DE 123456789");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme", 0);
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::initDocumentTaxRepresentative
     */
    public function testInitTaxRepresentativeParty(): void
    {
        $this->assertXPathNotExists("/ubl:Invoice/cac:TaxRepresentativeParty");

        (self::$document)->initDocumentTaxRepresentative();

        $this->assertXPathExists("/ubl:Invoice/cac:TaxRepresentativeParty");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativeName
     */
    public function testSetDocumentTaxRepresentativeName(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentTaxRepresentativeName("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name", 0);

        (self::$document)->setDocumentTaxRepresentativeName("TaxRepresentative Name");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyName/cbc:Name", 0, "TaxRepresentative Name");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativePostalAddress
     */
    public function testSetDocumentTaxRepresentativePostalAddress(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress", 0);

        (self::$document)->setDocumentTaxRepresentativePostalAddress("Main Street 1", "Po Box 351", "Building 23", "London", "W1G 8LZ", "Region A", "GB");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:StreetName", 0, "Main Street 1");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:AdditionalStreetName", 0, "Po Box 351");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:CityName", 0, "London");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:PostalZone", 0, "W1G 8LZ");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cbc:CountrySubentity", 0, "Region A");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cac:AddressLine/cbc:Line", 0, "Building 23");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PostalAddress/cac:Country/cbc:IdentificationCode", 0, "GB");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::setDocumentTaxRepresentativeVATIdentifier
     */
    public function testSetDocumentTaxRepresentativeVATIdentifier(): void
    {
        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentTaxRepresentativeVATIdentifier("");

        $this->assertXPathNotExistsWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme", 0);

        (self::$document)->setDocumentTaxRepresentativeVATIdentifier("DE 123456789");

        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cbc:CompanyID", 0, "DE 123456789");
        $this->assertXPathValueWithIndex("/ubl:Invoice/cac:TaxRepresentativeParty/cac:PartyTaxScheme/cac:TaxScheme/cbc:ID", 0, "VAT");
    }

    /**
     * @covers \horstoeko\ubl\UblDocumentBuilderXRechnung::writeFile
     */
    public function testWriteFile(): void
    {
        (self::$document)->writeFile(dirname(__FILE__) . "/output.xml");

        $this->assertTrue(file_exists(dirname(__FILE__) . "/output.xml"));

        @unlink(dirname(__FILE__) . "/output.xml");
    }
}
