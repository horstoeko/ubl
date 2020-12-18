<?php

require getcwd() . "/../vendor/autoload.php";

use \horstoeko\ubl\UblDocumentBuilder;
use Symfony\Component\Validator\Constraints\Date;

$ublBuilder = new UblDocumentBuilder();

$ublBuilder->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
$ublBuilder->setDocumentInformation("1234567", "380", \DateTime::createFromFormat("Y-m-d", "2018-04-13"), "EUR", "EUR", \DateTime::createFromFormat("Y-m-d", "2018-04-13"));
$ublBuilder->addDocumentNote("#AAC#Invoice Note Description");
$ublBuilder->setDocumentBuyerReference("90000000-03083-12");
$ublBuilder->setDocumentBillingPeriod(\DateTime::createFromFormat("Y-m-d", "2018-04-13"), \DateTime::createFromFormat("Y-m-d", "2018-04-13"));
$ublBuilder->setDocumentBuyerOrderReferencedDocument("65002278");
$ublBuilder->setDocumentSellerOrderReferencedDocument("ABC123456789");

$ublBuilder->setDocumentSeller("", "");
$ublBuilder->addDocumentSellerTaxRegistration("VAT", "ATU123456789");
$ublBuilder->setDocumentSellerAddress("", "", "", "12345", "[Seller city]", "DE");
$ublBuilder->setDocumentSellerLegalOrganisation("HRB 123", null, "[Seller name]");
$ublBuilder->setDocumentSellerContact("Tim Tester", "", "012 3456789", "", "tim.tester@test.com");

$ublBuilder->setDocumentBuyer("", "138");
$ublBuilder->addDocumentBuyerTaxRegistration("VAT", "DE12345ABC");
$ublBuilder->setDocumentBuyerAddress("", "", "", "98765", "[Buyer city]", "DE");
$ublBuilder->setDocumentBuyerLegalOrganisation("HRB 3456", null, "[Buyer name]");
$ublBuilder->setDocumentBuyerContact("Tina Tester", "", "0800 123456", "", "tester@test.de");

$ublBuilder->setDocumentPayee("[Payee name]", "74");

$ublBuilder->setDocumentSellerTaxRepresentative("[Seller tax representative name]");
$ublBuilder->setDocumentSellerTaxRepresentativeAddress("", "", "", "", "", "DE", "");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("VAT", "DE124567");

$ublBuilder->setDocumentShipTo("[Deliver to party name]", "68");
$ublBuilder->setDocumentShipToAddress("[Deliver to street]", "4. OG", "", "98765", "[Deliver to city]", "DE", "Bayern");

$ublBuilder->addDocumentPaymentMean("58", "", "", "", "", "", "DE75512108001245126199", "", "", "", "");

$ublBuilder->addDocumentTax("S", "VAT", 10781.25, 2048.44, 19);
$ublBuilder->setDocumentSummation(12829.69, 12829.69, 10781.25);

$ublBuilder->addNewPosition("1");
$ublBuilder->setDocumentPositionProductDetails("Beratung", "");
$ublBuilder->addDocumentPositionTax("S", "VAT", 19.0);
$ublBuilder->setDocumentPositionNetPrice(143.75);
$ublBuilder->setDocumentPositionQuantity(30, "XPP");
$ublBuilder->setDocumentPositionLineSummation(4743.75);

$ublBuilder->addNewPosition("2");
$ublBuilder->setDocumentPositionProductDetails("Beratung", "");
$ublBuilder->addDocumentPositionTax("S", "VAT", 19.0);
$ublBuilder->setDocumentPositionNetPrice(143.75);
$ublBuilder->setDocumentPositionQuantity(30, "XPP");
$ublBuilder->setDocumentPositionLineSummation(6037.50);

//echo $ublBuilder->getContent() . PHP_EOL . PHP_EOL;
$ublBuilder->writeFile(dirname(__FILE__) . "/Example_01.14a-INVOICE_ubl.xml");
