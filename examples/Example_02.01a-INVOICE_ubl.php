<?php

require getcwd() . "/../vendor/autoload.php";

use \horstoeko\ubl\UblDocumentBuilder;
use Symfony\Component\Validator\Constraints\Date;

$ublBuilder = new UblDocumentBuilder();

$ublBuilder->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
$ublBuilder->setDocumentProfile("urn:fdc:peppol.eu:2017:poacc:billing:01:1.0");

$ublBuilder->setDocumentInformation("1234567", "380", \DateTime::createFromFormat("Y-m-d", "2018-04-13"), "EUR", "GBP", \DateTime::createFromFormat("Y-m-d", "2018-04-13"), \DateTime::createFromFormat("Y-m-d", "2018-04-13"));
$ublBuilder->addDocumentNote("Invoice Note Description");
$ublBuilder->setDocumentBuyerReference("90000000-03083-12");
$ublBuilder->setDocumentBillingPeriod(\DateTime::createFromFormat("Y-m-d", "2018-04-13"), \DateTime::createFromFormat("Y-m-d", "2018-04-13"));
$ublBuilder->setDocumentBuyerOrderReferencedDocument("65002278");
$ublBuilder->setDocumentSellerOrderReferencedDocument("ABC123456789");
$ublBuilder->setDocumentOriginatorReferencedDocument("ANG987654321");
$ublBuilder->setDocumentContractReferencedDocument("0000000752");
$ublBuilder->addDocumentAdditionalReferencedDocument("01_15_Anhang_01.pdf", "", "", "Aufschlüsselung der einzelnen Leistungspositionen", "", null, dirname(__FILE__) . "/Example1Attachment.xml");
$ublBuilder->setDocumentProcuringProject("PR12345678");

$ublBuilder->setDocumentSeller("[Seller name]", "987654321", "0013");
$ublBuilder->setDocumentSellerEndpointID("rechnungsausgang@test.com", "EM");
$ublBuilder->setDocumentSellerAddress("[Seller address line 1]", "[Seller address line 2]", "", "12345", "[Seller city]", "DE");
$ublBuilder->addDocumentSellerTaxRegistration("VAT", "ATU123456789");
$ublBuilder->addDocumentSellerTaxRegistration("FC", "123/456/789");
$ublBuilder->setDocumentSellerLegalOrganisation("123456789", "0198", "[Seller trading name]", "Amtsgericht […], Geschäftsführer: […], Sitz der Gesellschaft […], Aufsichtsratvorsitzender: […]");
$ublBuilder->setDocumentSellerContact("Tim Tester", "", "012 3456789", "", "tim.tester@test.com");

$ublBuilder->setDocumentBuyer("[Buyer name]", "138");
$ublBuilder->setDocumentBuyerEndpointID("rechnungseingang@test.de", "EM");
$ublBuilder->setDocumentBuyerAddress("[Buyer address line 1]", "[Buyer address line 2]", "[Buyer address line 3]", "98765", "[Buyer city]", "DE");
$ublBuilder->addDocumentBuyerTaxRegistration("VAT", "DE12345ABC");
$ublBuilder->setDocumentBuyerLegalOrganisation("90000000-03083-12", "0198", "[Buyer name]");
$ublBuilder->setDocumentBuyerContact("Tina Tester", "", "0800 123456", "", "tester@test.de");

$ublBuilder->setDocumentPayee("[Payee name]", "74");

$ublBuilder->setDocumentSellerTaxRepresentative("[Seller tax representative name]");
$ublBuilder->setDocumentSellerTaxRepresentativeAddress("", "", "", "", "", "DE", "");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("VAT", "DE124567");

$ublBuilder->setDocumentShipTo("[Deliver to party name]", "68");
$ublBuilder->setDocumentShipToAddress("[Deliver to street]", "4. OG", "", "98765", "[Deliver to city]", "DE", "Bayern");
$ublBuilder->setDocumentShipmentDate(\DateTime::createFromFormat("Y-m-d", "2018-04-13"));

$ublBuilder->addDocumentPaymentMeanSepaCreditTransfer("DE75512108001245126199", "[Payment account name]", null, "[BIC]");
$ublBuilder->addDocumentPaymentTerm("Bitte überweisen Sie bis zum 24.01.2015 auf das unten aufgeführte Konto.");

$ublBuilder->addDocumentAllowanceCharge(0, true, "E", "VAT", 0, null, null, 0, null, null, "TAC", "Testing", 0);
$ublBuilder->addDocumentAllowanceCharge(0, false, "E", "VAT", 0, null, null, 0, null, null, "102", "Fixed long term", 0);

$ublBuilder->addDocumentTax("S", "VAT", 10781.25, 2048.44, 19);
$ublBuilder->addDocumentTaxSubTotal("E", "VAT", 0, 0, 0, "a reason");
$ublBuilder->addDocumentTaxInTaxCurrency(2048.44);

$ublBuilder->setDocumentSummation(12829.69, 12829.69, 10781.25, 0, 0, null, null, 0, 0);

$ublBuilder->addNewPosition("1");
$ublBuilder->addDocumentPositionNote("Die letzte Lieferung im Rahmen des abgerechneten Abonnements erfolgt in 12/2016 Lieferung erfolgt / erfolgte direkt vom Verlag");
$ublBuilder->setDocumentPositionQuantity(30, "XPP");
$ublBuilder->setDocumentPositionLineSummation(4743.75);
$ublBuilder->setDocumentPositionBillingPeriod(\DateTime::createFromFormat("Y-m-d", "2016-01-01"), \DateTime::createFromFormat("Y-m-d", "2016-01-31"));
$ublBuilder->setDocumentPositionBuyerOrderReferencedDocument("", "6171175.1");
$ublBuilder->setDocumentPositionProductDetails("Beratung", "Anforderungmanagament", "1034");
$ublBuilder->addDocumentPositionProductClassification("0721-880X", "IB");
$ublBuilder->addDocumentPositionTax("S", "VAT", 19.0);
$ublBuilder->setDocumentPositionNetPrice(143.75);

$ublBuilder->addNewPosition("2");
$ublBuilder->setDocumentPositionProductDetails("Beratung", "");
$ublBuilder->addDocumentPositionTax("S", "VAT", 19.0);
$ublBuilder->setDocumentPositionNetPrice(143.75);
$ublBuilder->setDocumentPositionQuantity(42, "XPP");
$ublBuilder->setDocumentPositionLineSummation(6037.50);

//echo $ublBuilder->getContent() . PHP_EOL . PHP_EOL;
$ublBuilder->writeFile(dirname(__FILE__) . "/Example_02.01a-INVOICE_ubl.xml");
