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
}
