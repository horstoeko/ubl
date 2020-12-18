<?php

require getcwd() . "/../vendor/autoload.php";

use \horstoeko\ubl\UblDocumentBuilder;
use Symfony\Component\Validator\Constraints\Date;

$ublBuilder = new UblDocumentBuilder();

$ublBuilder->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
$ublBuilder->setDocumentInformation("1234", "380", new \DateTime, "EUR", "EUR", new \DateTime("+14 days"));
$ublBuilder->addDocumentNote("#ADU#Es gelten unsere Allgem. Geschäftsbedingungen, die Sie unter […] finden.");
$ublBuilder->setDocumentBuyerReference("abc");

$ublBuilder->setDocumentSeller("Lieferant GmbH", "549910");
$ublBuilder->addDocumentSellerGlobalId("4000001123452", "0088");
$ublBuilder->addDocumentSellerTaxRegistration("FC", "201/113/40209");
$ublBuilder->addDocumentSellerTaxRegistration("VA", "DE123456789");
$ublBuilder->setDocumentSellerAddress("Lieferantenstraße 20", null, null, "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentSellerLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentSellerContact("Heinz Müller", "", "", "", "");

$ublBuilder->setDocumentBuyer("Kunden AG Mitte", "GE2020211");
$ublBuilder->addDocumentBuyerGlobalId("4000001123452", "0088");
$ublBuilder->addDocumentBuyerTaxRegistration("FC", "201/113/40209");
$ublBuilder->addDocumentBuyerTaxRegistration("VA", "DE123456789");
$ublBuilder->setDocumentBuyerAddress("Kundenstraße 15", null, null, "69876", "Frankfurt", "DE", "Hessen");
$ublBuilder->setDocumentBuyerLegalOrganisation("999999999", "0198", "Kunden AG Holding");
$ublBuilder->setDocumentBuyerContact("Horst Meier", "Einkauf", "+49-111-333", "+49-111-444", "info@kunde.de");

$ublBuilder->setDocumentSellerTaxRepresentative("[Seller tax representative name]", "tx0001");
$ublBuilder->addDocumentSellerTaxRepresentativeGlobalId("123321123321", "0088");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("FC", "201/113/40209");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("VA", "DE123456789");
$ublBuilder->setDocumentSellerTaxRepresentativeAddress("Lieferantenstraße 20", null, null, "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentSellerTaxRepresentativeLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentSellerTaxRepresentativeContact("Heinz Müller", "FiBu", "+49-111-22222", "+49-111-23232", "vat@lieferant.de");

$ublBuilder->setDocumentShipTo("Warehouse GmbH", "68");
$ublBuilder->setDocumentShipToAddress("Kundenstraße 15", null, null, "69876", "Frankfurt", "DE", "Hessen");
$ublBuilder->setDocumentShipToContact("Heinz Müller", "", "", "", "");
$ublBuilder->setDocumentShipToLegalOrganisation("aa", "bb", "cc");

$ublBuilder->setDocumentPayee("[payee name]", "payee0001");
$ublBuilder->addDocumentPayeeGlobalId("38763267", "0088");
$ublBuilder->addDocumentPayeeTaxRegistration("DE366746532", "FC");
$ublBuilder->setDocumentPayeeAddress("Lieferantenstraße 20", null, null, "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentPayeeLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentPayeeContact("Horst Meier", "Einkauf", "+49-111-333", "+49-111-444", "info@kunde.de");

$ublBuilder->setDocumentSellerOrderReferencedDocument("ABC123456789");
//$ublBuilder->setDocumentBuyerOrderReferencedDocument("65002278");
$ublBuilder->setDocumentContractReferencedDocument("CR987654321", new DateTime());
$ublBuilder->addDocumentAdditionalReferencedDocument("01_15_Anhang_01.pdf", null, "http://web.de", "Aufschlüsselung der einzelnen Leistungspositionen", "", null, null);
$ublBuilder->setDocumentInvoiceReferencedDocument("INV-00001", new DateTime());
$ublBuilder->setDocumentProcuringProject("PROJ-0001");
$ublBuilder->setDocumentDespatchAdviceReferencedDocument("DESP-0002", new DateTime());
$ublBuilder->setDocumentReceivingAdviceReferencedDocument("RECIP-0003", new DateTime());

$ublBuilder->addDocumentPaymentMeanBankCard("VISA", "99933847576752", "Rolf Meier");

$ublBuilder->addDocumentTaxSimple("S", "VAT", 20700379.33, 3933072.07, 19.0);
$ublBuilder->setDocumentBillingPeriod(\DateTime::createFromFormat("Y-m-d", "2018-04-13"), \DateTime::createFromFormat("Y-m-d", "2018-04-13"));

$ublBuilder->addDocumentAllowanceCharge(19, false, "S", "VAT", 19, null, 19, 100, null, null, "AAA", "Testing");

$ublBuilder->addNewPosition("1.0");
$ublBuilder->addDocumentPositionNote("Erste Bemerkungen");
$ublBuilder->addDocumentPositionNote("Zweite Bemerkungen");
$ublBuilder->setDocumentPositionProductDetails("Name", "Beschreibung", "sellerid", "buyerid", "0088", "globalid");
$ublBuilder->addDocumentPositionProductClassification("classcode", "listid", "listversionid");
$ublBuilder->setDocumentPositionProductOriginTradeCountry("DE");
$ublBuilder->setDocumentPositionBuyerOrderReferencedDocument("order", "orderline");
$ublBuilder->addDocumentPositionProductCharacteristic("Color", "Red");
//$ublBuilder->setDocumentPositionGrossPrice(12.0);
//$ublBuilder->addDocumentPositionGrossPriceAllowanceCharge(2.0, false, 12.0, "Rabatt", "VAT", "S", 19.0, 1);
$ublBuilder->setDocumentPositionNetPrice(10.0);
$ublBuilder->setDocumentPositionQuantity(2, "C62");
$ublBuilder->addDocumentPositionTax("S", "VAT", 19.0);
$ublBuilder->setDocumentPositionLineSummation(100.0);

$ublBuilder->setDocumentSummation(119.0, 119.0, 100);

echo $ublBuilder->getContent() . PHP_EOL . PHP_EOL;
