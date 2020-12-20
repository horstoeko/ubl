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
}
