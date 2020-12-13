<?php

require getcwd() . "/../vendor/autoload.php";

use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use horstoeko\ubl\entities\cbc\ID;
use \JMS\Serializer\Handler\HandlerRegistryInterface;
use \JMS\Serializer\SerializerBuilder;
use \horstoeko\ubl\UblDocumentBuilder;

$ublBuilder = new UblDocumentBuilder();

$ublBuilder->setDocumentInformation("1234", "380", new \DateTime(), "EUR");
$ublBuilder->addDocumentNote("#ADU#Es gelten unsere Allgem. Geschäftsbedingungen, die Sie unter […] finden.");
$ublBuilder->setDocumentBuyerReference("abc");
$ublBuilder->setDocumentSeller("Lieferant GmbH", "549910");
$ublBuilder->addDocumentSellerGlobalId("4000001123452", "0088");
$ublBuilder->addDocumentSellerTaxRegistration("FC", "201/113/40209");
$ublBuilder->addDocumentSellerTaxRegistration("VA", "DE123456789");
$ublBuilder->setDocumentSellerAddress("Lieferantenstraße 20", "", "", "80333", "München", "DE", "Bayern");
$ublBuilder->setDocumentSellerLegalOrganisation("123456789", "0198", "[Seller trading name]");
$ublBuilder->setDocumentSellerContact("Heinz Mükker", "Buchhaltung", "+49-111-2222222", "+49-111-3333333","info@lieferant.de");

echo $ublBuilder->getContent();
echo "\n\n";
