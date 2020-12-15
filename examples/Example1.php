<?php

require getcwd() . "/../vendor/autoload.php";

use \horstoeko\ubl\UblDocumentBuilder;

$ublBuilder = new UblDocumentBuilder();

$ublBuilder->setDocumentCustomization("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0");
$ublBuilder->setDocumentInformation("1234", "380", new \DateTime(), "EUR");
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

$ublBuilder->setDocumentSellerTaxRepresentativeTradeParty("[Seller tax representative name]", "tx0001");
$ublBuilder->addDocumentSellerTaxRepresentativeGlobalId("123321123321", "0088");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("FC", "201/113/40209");
$ublBuilder->addDocumentSellerTaxRepresentativeTaxRegistration("VA", "DE123456789");
$ublBuilder->setDocumentSellerTaxRepresentativeAddress("Lieferantenstraße 20", null, null, "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentSellerTaxRepresentativeLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentSellerTaxRepresentativeContact("Heinz Müller", "FiBu", "+49-111-22222", "+49-111-23232", "vat@lieferant.de");

$ublBuilder->setDocumentShipTo("Warehouse GmbH", "68");
$ublBuilder->setDocumentShipToAddress("Kundenstraße 15", null, null, "69876", "Frankfurt", "DE", "Hessen");
$ublBuilder->setDocumentShipToContact("Heinz Müller", "", "", "", "");

$ublBuilder->setDocumentPayee("[payee name]", "payee0001");
$ublBuilder->addDocumentPayeeGlobalId("38763267", "0088");
$ublBuilder->addDocumentPayeeTaxRegistration("DE366746532","FC");
$ublBuilder->setDocumentPayeeAddress("Lieferantenstraße 20", null, null, "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentPayeeLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentPayeeContact("Horst Meier", "Einkauf", "+49-111-333", "+49-111-444", "info@kunde.de");

$ublBuilder->setDocumentSellerOrderReferencedDocument("ABC123456789");
$ublBuilder->setDocumentBuyerOrderReferencedDocument("65002278");
$ublBuilder->setDocumentContractReferencedDocument("CR987654321", new DateTime());
$ublBuilder->addDocumentAdditionalReferencedDocument("01_15_Anhang_01.pdf", null, null, "Aufschlüsselung der einzelnen Leistungspositionen");

echo $ublBuilder->getContent();
echo "\n\n";
