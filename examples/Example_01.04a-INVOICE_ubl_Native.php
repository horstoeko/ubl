<?php

require getcwd() . "/../vendor/autoload.php";

use horstoeko\ubl\UblDocumentNative;
use horstoeko\ubl\entities\cbc\ID;
use horstoeko\ubl\entities\cac\Item;
use horstoeko\ubl\entities\cbc\Name;
use horstoeko\ubl\entities\cbc\Note;
use horstoeko\ubl\entities\cac\Party;
use horstoeko\ubl\entities\cac\Price;
use horstoeko\ubl\entities\cac\Contact;
use horstoeko\ubl\entities\cac\Country;
use horstoeko\ubl\entities\cbc\Percent;
use horstoeko\ubl\entities\cac\TaxTotal;
use horstoeko\ubl\entities\cbc\CityName;
use horstoeko\ubl\entities\cac\PartyName;
use horstoeko\ubl\entities\cac\TaxScheme;
use horstoeko\ubl\entities\cbc\CompanyID;
use horstoeko\ubl\entities\cbc\TaxAmount;
use horstoeko\ubl\entities\cbc\Telephone;
use horstoeko\ubl\entities\cbc\PostalZone;
use horstoeko\ubl\entities\cbc\StreetName;
use horstoeko\ubl\entities\cac\InvoiceLine;
use horstoeko\ubl\entities\cac\TaxCategory;
use horstoeko\ubl\entities\cac\TaxSubtotal;
use horstoeko\ubl\entities\cbc\Description;
use horstoeko\ubl\entities\cac\PaymentMeans;
use horstoeko\ubl\entities\cac\PaymentTerms;
use horstoeko\ubl\entities\cac\PostalAddress;
use horstoeko\ubl\entities\cbc\PayableAmount;
use horstoeko\ubl\entities\cbc\TaxableAmount;
use horstoeko\ubl\entities\cac\PartyTaxScheme;
use horstoeko\ubl\entities\cbc\BuyerReference;
use horstoeko\ubl\entities\cbc\ElectronicMail;
use horstoeko\ubl\entities\cbc\CustomizationID;
use horstoeko\ubl\entities\cbc\InvoiceTypeCode;
use horstoeko\ubl\entities\cac\PartyLegalEntity;
use horstoeko\ubl\entities\cbc\CompanyLegalForm;
use horstoeko\ubl\entities\cbc\InvoicedQuantity;
use horstoeko\ubl\entities\cbc\PaymentMeansCode;
use horstoeko\ubl\entities\cbc\RegistrationName;
use horstoeko\ubl\entities\cac\LegalMonetaryTotal;
use horstoeko\ubl\entities\cbc\IdentificationCode;
use horstoeko\ubl\entities\cbc\TaxExclusiveAmount;
use horstoeko\ubl\entities\cbc\TaxExemptionReason;
use horstoeko\ubl\entities\cbc\TaxInclusiveAmount;
use horstoeko\ubl\entities\cbc\LineExtensionAmount;
use horstoeko\ubl\entities\cbc\AdditionalStreetName;
use horstoeko\ubl\entities\cbc\DocumentCurrencyCode;
use horstoeko\ubl\entities\cac\ClassifiedTaxCategory;
use horstoeko\ubl\entities\cac\PayeeFinancialAccount;
use horstoeko\ubl\entities\cac\AccountingCustomerParty;
use horstoeko\ubl\entities\cac\AccountingSupplierParty;
use horstoeko\ubl\entities\cbc\PriceAmount;

$document = new UblDocumentNative();

$document
    ->getInvoiceObject()
    ->setCustomizationID(new CustomizationID("urn:cen.eu:en16931:2017#compliant#urn:xoev-de:kosit:standard:xrechnung_2.0"))
    ->setID(new ID("1234/78/901"))
    ->setIssueDate(\DateTime::createFromFormat("Y-m-d", "2016-06-16"))
    ->setInvoiceTypeCode(new InvoiceTypeCode("380"))
    ->addToNote(new Note("#ADU#Diese Leistung ist umsatzsteuerbefreit nach § 4 Nr. 22a UStG."))
    ->setDocumentCurrencyCode(new DocumentCurrencyCode("EUR"))
    ->setBuyerReference(new BuyerReference("04011000-12348-31"))
    ->setAccountingSupplierParty((new AccountingSupplierParty())
        ->setParty((new Party())
            ->addToPartyName((new PartyName())->setName(new Name("[Seller trading name]")))
            ->setPostalAddress((new PostalAddress())
                ->setStreetName(new StreetName("[Seller address line 1]"))
                ->setAdditionalStreetName(new AdditionalStreetName("[Seller address line 2]"))
                ->setCityName(new CityName("[Seller city]"))
                ->setPostalZone(new PostalZone("12345"))
                ->setCountry((new Country())->setIdentificationCode(new IdentificationCode("DE"))))
            ->addToPartyTaxScheme((new PartyTaxScheme())
                ->setCompanyID(new CompanyID("12/345/67890"))
                ->setTaxScheme((new TaxScheme())->setID(new ID("???"))))
            ->addToPartyLegalEntity((new PartyLegalEntity())
                ->setRegistrationName(new RegistrationName("[Seller name]"))
                ->setCompanyID(new CompanyID("VR 12345 Nz"))
                ->setCompanyLegalForm(new CompanyLegalForm("Vorstand: [...] (Vorsitzender)")))
            ->setContact((new Contact())
                ->setName(new Name("[...]"))
                ->setTelephone(new Telephone("+49 (0)12-345678-90"))
                ->setElectronicMail(new ElectronicMail("mail@seller.eu")))))
    ->setAccountingCustomerParty((new AccountingCustomerParty())
        ->setParty((new Party())
            ->setPostalAddress((new PostalAddress())
                ->setStreetName(new StreetName("[Buyer address line 1]"))
                ->setAdditionalStreetName(new AdditionalStreetName("[Buyer address line 2]"))
                ->setCityName(new CityName("[Buyer city]"))
                ->setPostalZone(new PostalZone("12345"))
                ->setCountry((new Country())->setIdentificationCode(new IdentificationCode("DE"))))
            ->addToPartyLegalEntity((new PartyLegalEntity())
                ->setRegistrationName(new RegistrationName("[Buyer name]")))
            ->setContact((new Contact())
                ->setName(new Name("[Buyer contact person]")))))
    ->addToPaymentMeans((new PaymentMeans())
        ->setPaymentMeansCode(new PaymentMeansCode("58"))
        ->setPayeeFinancialAccount((new PayeeFinancialAccount())->setID(new ID("DE75512108001245126199"))))
    ->addToPaymentTerms((new PaymentTerms())
        ->addToNote(new Note("Wir möchten Sie bitten...")))
    ->addToTaxTotal((new TaxTotal())
        ->setTaxAmount((new TaxAmount(0.0))->setCurrencyID("EUR"))
        ->addToTaxSubtotal((new TaxSubtotal())
            ->setTaxableAmount((new TaxableAmount(120))->setCurrencyID("EUR"))
            ->setTaxAmount((new TaxAmount(0.0))->setCurrencyID("EUR"))
            ->setTaxCategory((new TaxCategory())
                ->setID(new ID("O"))
                ->setPercent(new Percent(0.0))
                ->addToTaxExemptionReason(new TaxExemptionReason("als gemeinnützig anerkannt"))
                ->setTaxScheme((new TaxScheme())->setID(new ID("VAT"))))))
    ->setLegalMonetaryTotal((new LegalMonetaryTotal())
        ->setLineExtensionAmount((new LineExtensionAmount(120.0))->setCurrencyID("EUR"))
        ->setTaxInclusiveAmount((new TaxInclusiveAmount(120.0))->setCurrencyID("EUR"))
        ->setTaxExclusiveAmount((new TaxExclusiveAmount(120.0))->setCurrencyID("EUR"))
        ->setPayableAmount((new PayableAmount(120.0))->setCurrencyID("EUR")))
    ->addToInvoiceLine((new InvoiceLine())
        ->setID(new ID("Teilnahmegebühr"))
        ->setInvoicedQuantity((new InvoicedQuantity(1))->setUnitCode("XPP"))
        ->setLineExtensionAmount((new LineExtensionAmount(120.0))->setCurrencyID("EUR"))
        ->setItem((new Item())
            ->addToDescription(new Description("Anmeldung von [...]"))
            ->setName(new Name("Teilnahmegebühr"))
            ->addToClassifiedTaxCategory((new ClassifiedTaxCategory())
                ->setID(new ID("O"))
                ->setTaxScheme((new TaxScheme())->setID(new ID("VAT")))))
        ->setPrice((new Price())->setPriceAmount((new PriceAmount(120))->setCurrencyID("EUR"))));

$document->writeFile(dirname(__FILE__) . "/Example_01.04a-INVOICE_ubl_Native.xml");
