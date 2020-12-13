<?php

require getcwd() . "/../vendor/autoload.php";

use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use \GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use horstoeko\ubl\entities\cbc\ID;
use \JMS\Serializer\Handler\HandlerRegistryInterface;
use \JMS\Serializer\SerializerBuilder;
use \horstoeko\ubl\entities\main\Invoice;

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/cac', 'horstoeko\ubl\entities\cac');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/cbc', 'horstoeko\ubl\entities\cbc');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/clm5639', 'horstoeko\ubl\entities\clm5639');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/clm54217', 'horstoeko\ubl\entities\clm54217');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/clm66411', 'horstoeko\ubl\entities\clm66411');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/ext', 'horstoeko\ubl\entities\ext');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/main', 'horstoeko\ubl\entities\main');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/mimemedia', 'horstoeko\ubl\entities\mimemedia');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/qdt', 'horstoeko\ubl\entities\qdt');
$serializerBuilder->addMetadataDir(dirname(__FILE__) . '/../src/yaml/udt', 'horstoeko\ubl\entities\udt');
$serializerBuilder->addDefaultListeners();
$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler());
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
});

$serializer = $serializerBuilder->build();

$invoice = new Invoice();
$invoice->setId(new ID("1234"));

echo $serializer->serialize($invoice, 'xml');
echo "\n\n";
