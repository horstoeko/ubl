<?php

require getcwd() . "/../vendor/autoload.php";

use horstoeko\ubl\entities\cct\NumericType;
use horstoeko\ubl\UblDocumentNative;

function outWithDots($label, $value)
{
    $maxLabelWidth = 50;
    $label .= " ";

    if (!is_array($value)) {
        $value = [$value];
    }

    $label = $label . str_repeat("_", $maxLabelWidth - strlen($label)) . " ";

    foreach ($value as $valuekey => $valueitem) {
        if ($valuekey === array_key_first($value)) {
            echo $label;
        } else {
            echo str_repeat(" ", strlen($label));
        }
        echo mb_strimwidth($valueitem, 0, 50, "...");
        echo PHP_EOL;
    }
}

function outWithDotsAmount($label, $amount)
{
    if (method_exists($amount, "value")) {
        $value = number_format($amount->value(), 2, ",", "");
    }
    if (method_exists($amount, "getCurrencyID")) {
        $value = $value . " (" . $amount->getCurrencyId() . ")";
    }
    outWithDots($label, $value);
}

function outHeadLine($label)
{
    echo PHP_EOL;
    echo str_repeat("#", strlen($label) + 4) . PHP_EOL;
    echo "# {$label} #" . PHP_EOL;
    echo str_repeat("#", strlen($label) + 4) . PHP_EOL;
    echo PHP_EOL;
}

function outTable($tabledefs, $data)
{
    $sumwidth = 0;
    foreach ($tabledefs as $tabledef) {
        $sumwidth += $tabledef[1] + 3;
    }

    echo str_repeat("-", $sumwidth - 1);
    echo PHP_EOL;

    foreach ($tabledefs as $tabledef) {
        $padtype = STR_PAD_RIGHT;
        if (isset($tabledef[2]) && $tabledef[2] == "R") {
            $padtype = STR_PAD_LEFT;
        }
        echo mb_strimwidth(str_pad($tabledef[0], $tabledef[1], " ", $padtype), 0, $tabledef[1]) . " | ";
    }

    echo PHP_EOL;
    echo str_repeat("-", $sumwidth - 1);
    echo PHP_EOL;

    foreach ($data as $datakey => $dataitem) {
        foreach ($dataitem as $col => $datavalue) {
            if (is_object($datavalue) && method_exists($datavalue, "getCurrencyID")) {
                echo mb_strimwidth(str_pad(number_format($datavalue->value(), 2) . " " . $datavalue->getCurrencyId(), $tabledefs[$col][1]), 0, $tabledefs[$col][1]) . " | ";
            } else if (is_object($datavalue) && method_exists($datavalue, "getUnitCode")) {
                echo mb_strimwidth(str_pad(number_format($datavalue->value(), 2) . " " . $datavalue->getUnitCode(), $tabledefs[$col][1]), 0, $tabledefs[$col][1]) . " | ";
            } else {
                echo mb_strimwidth(str_pad($datavalue, $tabledefs[$col][1]), 0, $tabledefs[$col][1]) . " | ";
            }
        }
        echo PHP_EOL;
    }

    echo str_repeat("-", $sumwidth - 1);
    echo PHP_EOL;
}

$document = new UblDocumentNative();
$document->readfile(dirname(__FILE__) . "/Example_01.04a-INVOICE_ubl_Native_Read.xml");

outHeadLine("General document information");

outWithDots("Invoice No.", $document->getInvoiceObject()->getID());
outWithDots("Invoice Date", $document->getInvoiceObject()->getIssueDate()->format("d.m.Y"));

outHeadLine("Seller party");

foreach ($document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPartyName() as $partyname) {
    outWithDots("Party name", $partyname->getName());
}

outWithDots("Address - Street", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPostalAddress()->getStreetName());
outWithDots("Address - Street 2", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPostalAddress()->getAdditionalStreetName());
outWithDots("Address - City", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPostalAddress()->getCityName());
outWithDots("Address - Postcode", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPostalAddress()->getPostalZone());
outWithDots("Address - Country", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPostalAddress()->getCountry()->getIdentificationCode());

foreach ($document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPartyTaxScheme() as $partytaxscheme) {
    outWithDots("Tax - Scheme", $partytaxscheme->getTaxScheme()->getID());
    outWithDots("Tax - ID", $partytaxscheme->getCompanyID());
}

foreach ($document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getPartyLegalEntity() as $partylegalentity) {
    outWithDots("Legal Entity - Name", $partylegalentity->getRegistrationName());
    outWithDots("Legal Entity - ID", $partylegalentity->getCompanyID());
    outWithDots("Legal Entity - Legal Form ", $partylegalentity->getCompanyLegalForm());
}

outWithDots("Contact - Person Name", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getContact()->getName());
outWithDots("Contact - Telephone", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getContact()->getTelephone());
outWithDots("Contact - Mail", $document->getInvoiceObject()->getAccountingSupplierParty()->getParty()->getContact()->getElectronicMail());

outHeadLine("Buyer party");

foreach ($document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPartyName() as $partyname) {
    outWithDots("Party name", $partyname->getName());
}

outWithDots("Address - Street", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPostalAddress()->getStreetName());
outWithDots("Address - Street 2", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPostalAddress()->getAdditionalStreetName());
outWithDots("Address - City", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPostalAddress()->getCityName());
outWithDots("Address - Postcode", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPostalAddress()->getPostalZone());
outWithDots("Address - Country", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPostalAddress()->getCountry()->getIdentificationCode());

foreach ($document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPartyTaxScheme() as $partytaxscheme) {
    outWithDots("Tax - Scheme", $partytaxscheme->getTaxScheme()->getID());
    outWithDots("Tax - ID", $partytaxscheme->getCompanyID());
}

foreach ($document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getPartyLegalEntity() as $partylegalentity) {
    outWithDots("Legal Entity - Name", $partylegalentity->getRegistrationName());
    outWithDots("Legal Entity - ID", $partylegalentity->getCompanyID());
    outWithDots("Legal Entity - Legal Form ", $partylegalentity->getCompanyLegalForm());
}

outWithDots("Contact - Person Name", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getContact()->getName());
outWithDots("Contact - Telephone", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getContact()->getTelephone());
outWithDots("Contact - Mail", $document->getInvoiceObject()->getAccountingCustomerParty()->getParty()->getContact()->getElectronicMail());

outHeadLine("Payment means");

foreach ($document->getInvoiceObject()->getPaymentMeans() as $paymentmean) {
    outWithDots("Payment Means - Code", $paymentmean->getPaymentMeansCode());
    outWithDots("Payment Means - Payee financial account", $paymentmean->getPayeeFinancialAccount()->getID());
}

outHeadLine("Payment terms");

foreach ($document->getInvoiceObject()->getPaymentTerms() as $paymentterm) {
    outWithDots("Payment Means - Code", $paymentterm->getNote());
}

outHeadLine("Tax amounts");

foreach ($document->getInvoiceObject()->getTaxTotal() as $taxtotal) {
    outWithDots("Tax Total - Tax Amount", $taxtotal->getTaxAmount());
    foreach ($taxtotal->getTaxSubtotal() as $taxsubtotal) {
        outWithDots("  - Tax Sub Total - Tax category", $taxsubtotal->getTaxCategory()->getID());
        outWithDots("  - Tax Sub Total - Tax scheme", $taxsubtotal->getTaxCategory()->getTaxScheme()->getID());
        outWithDotsAmount("  - Tax Sub Total - Taxable amount", $taxsubtotal->getTaxableAmount());
        outWithDots("  - Tax Sub Total - Tax amount", $taxsubtotal->getTaxAmount());
        outWithDots("  - Tax Sub Total - Tax percent", $taxsubtotal->getTaxCategory()->getPercent());
        outWithDots("  - Tax Sub Total - Excemption reason", $taxsubtotal->getTaxCategory()->getTaxExemptionReason());
    }
}

outHeadLine("Summation of amounts");

outWithDotsAmount("Line extension amount", $document->getInvoiceObject()->getLegalMonetaryTotal()->getLineExtensionAmount());
outWithDotsAmount("Tax exclusive amount", $document->getInvoiceObject()->getLegalMonetaryTotal()->getTaxExclusiveAmount());
outWithDotsAmount("Tax inclusive amount", $document->getInvoiceObject()->getLegalMonetaryTotal()->getTaxInclusiveAmount());
outWithDotsAmount("Payable amount", $document->getInvoiceObject()->getLegalMonetaryTotal()->getPayableAmount());

outHeadLine("Document lines");

$data = [];

foreach ($document->getInvoiceObject()->getInvoiceLine() as $invoiceline) {
    $data[] = [
        $invoiceline->getID(),
        $invoiceline->getItem()->getDescription()[0],
        $invoiceline->getInvoicedQuantity(),
        $invoiceline->getPrice()->getPriceAmount()
    ];
}


outTable([["ID", 10], ["Description", 30], ["Quantity", 20], ["Price", 20]], $data);

echo PHP_EOL . PHP_EOL;
