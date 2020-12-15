<?php

namespace horstoeko\ubl\entities\main;

/**
 * Class representing InvoiceType
 *
 * ABIE
 *  Invoice. Details
 *  A document used to request payment.
 *  Invoice
 * XSD Type: InvoiceType
 */
class InvoiceType
{

    /**
     * A container for all extensions present in the document.
     *
     * @var \horstoeko\ubl\entities\ext\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @var \horstoeko\ubl\entities\cbc\UBLVersionID $uBLVersionID
     */
    private $uBLVersionID = null;

    /**
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \horstoeko\ubl\entities\cbc\CustomizationID $customizationID
     */
    private $customizationID = null;

    /**
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @var \horstoeko\ubl\entities\cbc\ProfileID $profileID
     */
    private $profileID = null;

    /**
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @var \horstoeko\ubl\entities\cbc\ProfileExecutionID $profileExecutionID
     */
    private $profileExecutionID = null;

    /**
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $dueDate
     */
    private $dueDate = null;

    /**
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\InvoiceTypeCode $invoiceTypeCode
     */
    private $invoiceTypeCode = null;

    /**
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DocumentCurrencyCode $documentCurrencyCode
     */
    private $documentCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TaxCurrencyCode $taxCurrencyCode
     */
    private $taxCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PricingCurrencyCode $pricingCurrencyCode
     */
    private $pricingCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentCurrencyCode $paymentCurrencyCode
     */
    private $paymentCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     */
    private $paymentAlternativeCurrencyCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LineCountNumeric $lineCountNumeric
     */
    private $lineCountNumeric = null;

    /**
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\BuyerReference $buyerReference
     */
    private $buyerReference = null;

    /**
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \horstoeko\ubl\entities\cac\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DespatchDocumentReference[] $despatchDocumentReference
     */
    private $despatchDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\ReceiptDocumentReference[] $receiptDocumentReference
     */
    private $receiptDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\StatementDocumentReference[] $statementDocumentReference
     */
    private $statementDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\OriginatorDocumentReference[] $originatorDocumentReference
     */
    private $originatorDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\ContractDocumentReference[] $contractDocumentReference
     */
    private $contractDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\AdditionalDocumentReference[] $additionalDocumentReference
     */
    private $additionalDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @var \horstoeko\ubl\entities\cac\ProjectReference[] $projectReference
     */
    private $projectReference = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \horstoeko\ubl\entities\cac\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\TaxRepresentativeParty $taxRepresentativeParty
     */
    private $taxRepresentativeParty = null;

    /**
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \horstoeko\ubl\entities\cac\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \horstoeko\ubl\entities\cac\PaymentMeans[] $paymentMeans
     */
    private $paymentMeans = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @var \horstoeko\ubl\entities\cac\PrepaidPayment[] $prepaidPayment
     */
    private $prepaidPayment = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\TaxExchangeRate $taxExchangeRate
     */
    private $taxExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate
     */
    private $pricingExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\PaymentExchangeRate $paymentExchangeRate
     */
    private $paymentExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     */
    private $paymentAlternativeExchangeRate = null;

    /**
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\WithholdingTaxTotal[] $withholdingTaxTotal
     */
    private $withholdingTaxTotal = [
        
    ];

    /**
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \horstoeko\ubl\entities\cac\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @var \horstoeko\ubl\entities\cac\InvoiceLine[] $invoiceLine
     */
    private $invoiceLine = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A container for all extensions present in the document.
     *
     * @return self
     * @param \horstoeko\ubl\entities\ext\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\horstoeko\ubl\entities\ext\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @return \horstoeko\ubl\entities\ext\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for all extensions present in the document.
     *
     * @param \horstoeko\ubl\entities\ext\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(array $uBLExtensions)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Gets as uBLVersionID
     *
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @return \horstoeko\ubl\entities\cbc\UBLVersionID
     */
    public function getUBLVersionID()
    {
        return $this->uBLVersionID;
    }

    /**
     * Sets a new uBLVersionID
     *
     * BBIE
     *  Invoice. UBL Version Identifier. Identifier
     *  Identifies the earliest version of the UBL 2 schema for this document type that defines all of the elements that might be encountered in the current instance.
     *  0..1
     *  Invoice
     *  UBL Version Identifier
     *  Identifier
     *  Identifier. Type
     *  2.0.5
     *
     * @param \horstoeko\ubl\entities\cbc\UBLVersionID $uBLVersionID
     * @return self
     */
    public function setUBLVersionID(\horstoeko\ubl\entities\cbc\UBLVersionID $uBLVersionID)
    {
        $this->uBLVersionID = $uBLVersionID;
        return $this;
    }

    /**
     * Gets as customizationID
     *
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \horstoeko\ubl\entities\cbc\CustomizationID
     */
    public function getCustomizationID()
    {
        return $this->customizationID;
    }

    /**
     * Sets a new customizationID
     *
     * BBIE
     *  Invoice. Customization Identifier. Identifier
     *  Identifies a user-defined customization of UBL for a specific use.
     *  0..1
     *  Invoice
     *  Customization Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \horstoeko\ubl\entities\cbc\CustomizationID $customizationID
     * @return self
     */
    public function setCustomizationID(\horstoeko\ubl\entities\cbc\CustomizationID $customizationID)
    {
        $this->customizationID = $customizationID;
        return $this;
    }

    /**
     * Gets as profileID
     *
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @return \horstoeko\ubl\entities\cbc\ProfileID
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Sets a new profileID
     *
     * BBIE
     *  Invoice. Profile Identifier. Identifier
     *  Identifies a user-defined profile of the customization of UBL being used.
     *  0..1
     *  Invoice
     *  Profile Identifier
     *  Identifier
     *  Identifier. Type
     *  BasicProcurementProcess
     *
     * @param \horstoeko\ubl\entities\cbc\ProfileID $profileID
     * @return self
     */
    public function setProfileID(\horstoeko\ubl\entities\cbc\ProfileID $profileID)
    {
        $this->profileID = $profileID;
        return $this;
    }

    /**
     * Gets as profileExecutionID
     *
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @return \horstoeko\ubl\entities\cbc\ProfileExecutionID
     */
    public function getProfileExecutionID()
    {
        return $this->profileExecutionID;
    }

    /**
     * Sets a new profileExecutionID
     *
     * BBIE
     *  Invoice. Profile Execution Identifier. Identifier
     *  Identifies an instance of executing a profile, to associate all transactions in a collaboration.
     *  0..1
     *  Invoice
     *  Profile Execution Identifier
     *  Identifier
     *  Identifier. Type
     *  BPP-1001
     *
     * @param \horstoeko\ubl\entities\cbc\ProfileExecutionID $profileExecutionID
     * @return self
     */
    public function setProfileExecutionID(\horstoeko\ubl\entities\cbc\ProfileExecutionID $profileExecutionID)
    {
        $this->profileExecutionID = $profileExecutionID;
        return $this;
    }

    /**
     * Gets as iD
     *
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Invoice. Identifier
     *  An identifier for this document, assigned by the sender.
     *  1
     *  Invoice
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Invoice Number
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Invoice. Copy_ Indicator. Indicator
     *  Indicates whether this document is a copy (true) or not (false).
     *  0..1
     *  Invoice
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Invoice. UUID. Identifier
     *  A universally unique identifier for an instance of this document.
     *  0..1
     *  Invoice
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\UUID $uUID
     * @return self
     */
    public function setUUID(\horstoeko\ubl\entities\cbc\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Invoice. Issue Date. Date
     *  The date, assigned by the sender, on which this document was issued.
     *  1
     *  Invoice
     *  Issue Date
     *  Date
     *  Date. Type
     *  Invoice Date
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Invoice. Issue Time. Time
     *  The time, assigned by the sender, at which this document was issued.
     *  0..1
     *  Invoice
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as dueDate
     *
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets a new dueDate
     *
     * BBIE
     *  Invoice. Due Date. Date
     *  The date on which Invoice is due.
     *  0..1
     *  Invoice
     *  Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $dueDate
     * @return self
     */
    public function setDueDate(\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Gets as invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\InvoiceTypeCode
     */
    public function getInvoiceTypeCode()
    {
        return $this->invoiceTypeCode;
    }

    /**
     * Sets a new invoiceTypeCode
     *
     * BBIE
     *  Invoice. Invoice Type Code. Code
     *  A code signifying the type of the Invoice.
     *  0..1
     *  Invoice
     *  Invoice Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\InvoiceTypeCode $invoiceTypeCode
     * @return self
     */
    public function setInvoiceTypeCode(\horstoeko\ubl\entities\cbc\InvoiceTypeCode $invoiceTypeCode)
    {
        $this->invoiceTypeCode = $invoiceTypeCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Invoice. Note. Text
     *  Free-form text pertinent to this document, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Invoice
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Invoice. Tax Point Date. Date
     *  The date of the Invoice, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Invoice
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as documentCurrencyCode
     *
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DocumentCurrencyCode
     */
    public function getDocumentCurrencyCode()
    {
        return $this->documentCurrencyCode;
    }

    /**
     * Sets a new documentCurrencyCode
     *
     * BBIE
     *  Invoice. Document_ Currency Code. Code
     *  A code signifying the default currency for this document.
     *  0..1
     *  Invoice
     *  Document
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DocumentCurrencyCode $documentCurrencyCode
     * @return self
     */
    public function setDocumentCurrencyCode(\horstoeko\ubl\entities\cbc\DocumentCurrencyCode $documentCurrencyCode)
    {
        $this->documentCurrencyCode = $documentCurrencyCode;
        return $this;
    }

    /**
     * Gets as taxCurrencyCode
     *
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TaxCurrencyCode
     */
    public function getTaxCurrencyCode()
    {
        return $this->taxCurrencyCode;
    }

    /**
     * Sets a new taxCurrencyCode
     *
     * BBIE
     *  Invoice. Tax_ Currency Code. Code
     *  A code signifying the currency used for tax amounts in the Invoice.
     *  0..1
     *  Invoice
     *  Tax
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TaxCurrencyCode $taxCurrencyCode
     * @return self
     */
    public function setTaxCurrencyCode(\horstoeko\ubl\entities\cbc\TaxCurrencyCode $taxCurrencyCode)
    {
        $this->taxCurrencyCode = $taxCurrencyCode;
        return $this;
    }

    /**
     * Gets as pricingCurrencyCode
     *
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PricingCurrencyCode
     */
    public function getPricingCurrencyCode()
    {
        return $this->pricingCurrencyCode;
    }

    /**
     * Sets a new pricingCurrencyCode
     *
     * BBIE
     *  Invoice. Pricing_ Currency Code. Code
     *  A code signifying the currency used for prices in the Invoice.
     *  0..1
     *  Invoice
     *  Pricing
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PricingCurrencyCode $pricingCurrencyCode
     * @return self
     */
    public function setPricingCurrencyCode(\horstoeko\ubl\entities\cbc\PricingCurrencyCode $pricingCurrencyCode)
    {
        $this->pricingCurrencyCode = $pricingCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaymentCurrencyCode
     */
    public function getPaymentCurrencyCode()
    {
        return $this->paymentCurrencyCode;
    }

    /**
     * Sets a new paymentCurrencyCode
     *
     * BBIE
     *  Invoice. Payment_ Currency Code. Code
     *  A code signifying the currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PaymentCurrencyCode $paymentCurrencyCode
     * @return self
     */
    public function setPaymentCurrencyCode(\horstoeko\ubl\entities\cbc\PaymentCurrencyCode $paymentCurrencyCode)
    {
        $this->paymentCurrencyCode = $paymentCurrencyCode;
        return $this;
    }

    /**
     * Gets as paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PaymentAlternativeCurrencyCode
     */
    public function getPaymentAlternativeCurrencyCode()
    {
        return $this->paymentAlternativeCurrencyCode;
    }

    /**
     * Sets a new paymentAlternativeCurrencyCode
     *
     * BBIE
     *  Invoice. Payment Alternative_ Currency Code. Code
     *  A code signifying the alternative currency used for payment in the Invoice.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Currency Code
     *  Code
     *  Currency
     *  Currency_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode
     * @return self
     */
    public function setPaymentAlternativeCurrencyCode(\horstoeko\ubl\entities\cbc\PaymentAlternativeCurrencyCode $paymentAlternativeCurrencyCode)
    {
        $this->paymentAlternativeCurrencyCode = $paymentAlternativeCurrencyCode;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Invoice. Accounting Cost Code. Code
     *  The buyer's accounting code, applied to the Invoice as a whole.
     *  0..1
     *  Invoice
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\horstoeko\ubl\entities\cbc\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Invoice. Accounting Cost. Text
     *  The buyer's accounting code, applied to the Invoice as a whole, expressed as text.
     *  0..1
     *  Invoice
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\horstoeko\ubl\entities\cbc\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as lineCountNumeric
     *
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LineCountNumeric
     */
    public function getLineCountNumeric()
    {
        return $this->lineCountNumeric;
    }

    /**
     * Sets a new lineCountNumeric
     *
     * BBIE
     *  Invoice. Line Count. Numeric
     *  The number of lines in the document.
     *  0..1
     *  Invoice
     *  Line Count
     *  Numeric
     *  Numeric. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LineCountNumeric $lineCountNumeric
     * @return self
     */
    public function setLineCountNumeric(\horstoeko\ubl\entities\cbc\LineCountNumeric $lineCountNumeric)
    {
        $this->lineCountNumeric = $lineCountNumeric;
        return $this;
    }

    /**
     * Gets as buyerReference
     *
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\BuyerReference
     */
    public function getBuyerReference()
    {
        return $this->buyerReference;
    }

    /**
     * Sets a new buyerReference
     *
     * BBIE
     *  Invoice. Buyer_ Reference. Text
     *  A reference provided by the buyer used for internal routing of the document.
     *  0..1
     *  Invoice
     *  Buyer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\BuyerReference $buyerReference
     * @return self
     */
    public function setBuyerReference(\horstoeko\ubl\entities\cbc\BuyerReference $buyerReference)
    {
        $this->buyerReference = $buyerReference;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\horstoeko\ubl\entities\cac\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Invoice. Invoice_ Period. Period
     *  A period to which the Invoice applies.
     *  0..n
     *  Invoice
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \horstoeko\ubl\entities\cac\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Invoice. Order Reference
     *  A reference to the Order with which this Invoice is associated.
     *  0..1
     *  Invoice
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \horstoeko\ubl\entities\cac\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(\horstoeko\ubl\entities\cac\OrderReference $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\BillingReference $billingReference
     */
    public function addToBillingReference(\horstoeko\ubl\entities\cac\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \horstoeko\ubl\entities\cac\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Invoice. Billing Reference
     *  A reference to a billing document associated with this document.
     *  0..n
     *  Invoice
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \horstoeko\ubl\entities\cac\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DespatchDocumentReference $despatchDocumentReference
     */
    public function addToDespatchDocumentReference(\horstoeko\ubl\entities\cac\DespatchDocumentReference $despatchDocumentReference)
    {
        $this->despatchDocumentReference[] = $despatchDocumentReference;
        return $this;
    }

    /**
     * isset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchDocumentReference($index)
    {
        return isset($this->despatchDocumentReference[$index]);
    }

    /**
     * unset despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchDocumentReference($index)
    {
        unset($this->despatchDocumentReference[$index]);
    }

    /**
     * Gets as despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DespatchDocumentReference[]
     */
    public function getDespatchDocumentReference()
    {
        return $this->despatchDocumentReference;
    }

    /**
     * Sets a new despatchDocumentReference
     *
     * ASBIE
     *  Invoice. Despatch_ Document Reference. Document Reference
     *  A reference to a Despatch Advice associated with this document.
     *  0..n
     *  Invoice
     *  Despatch
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DespatchDocumentReference[] $despatchDocumentReference
     * @return self
     */
    public function setDespatchDocumentReference(array $despatchDocumentReference)
    {
        $this->despatchDocumentReference = $despatchDocumentReference;
        return $this;
    }

    /**
     * Adds as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ReceiptDocumentReference $receiptDocumentReference
     */
    public function addToReceiptDocumentReference(\horstoeko\ubl\entities\cac\ReceiptDocumentReference $receiptDocumentReference)
    {
        $this->receiptDocumentReference[] = $receiptDocumentReference;
        return $this;
    }

    /**
     * isset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptDocumentReference($index)
    {
        return isset($this->receiptDocumentReference[$index]);
    }

    /**
     * unset receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptDocumentReference($index)
    {
        unset($this->receiptDocumentReference[$index]);
    }

    /**
     * Gets as receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\ReceiptDocumentReference[]
     */
    public function getReceiptDocumentReference()
    {
        return $this->receiptDocumentReference;
    }

    /**
     * Sets a new receiptDocumentReference
     *
     * ASBIE
     *  Invoice. Receipt_ Document Reference. Document Reference
     *  A reference to a Receipt Advice associated with this document.
     *  0..n
     *  Invoice
     *  Receipt
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\ReceiptDocumentReference[] $receiptDocumentReference
     * @return self
     */
    public function setReceiptDocumentReference(array $receiptDocumentReference)
    {
        $this->receiptDocumentReference = $receiptDocumentReference;
        return $this;
    }

    /**
     * Adds as statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\StatementDocumentReference $statementDocumentReference
     */
    public function addToStatementDocumentReference(\horstoeko\ubl\entities\cac\StatementDocumentReference $statementDocumentReference)
    {
        $this->statementDocumentReference[] = $statementDocumentReference;
        return $this;
    }

    /**
     * isset statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatementDocumentReference($index)
    {
        return isset($this->statementDocumentReference[$index]);
    }

    /**
     * unset statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatementDocumentReference($index)
    {
        unset($this->statementDocumentReference[$index]);
    }

    /**
     * Gets as statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\StatementDocumentReference[]
     */
    public function getStatementDocumentReference()
    {
        return $this->statementDocumentReference;
    }

    /**
     * Sets a new statementDocumentReference
     *
     * ASBIE
     *  Invoice. Statement_ Document Reference. Document Reference
     *  A reference to a Statement associated with this document.
     *  0..n
     *  Invoice
     *  Statement
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\StatementDocumentReference[] $statementDocumentReference
     * @return self
     */
    public function setStatementDocumentReference(array $statementDocumentReference)
    {
        $this->statementDocumentReference = $statementDocumentReference;
        return $this;
    }

    /**
     * Adds as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\OriginatorDocumentReference $originatorDocumentReference
     */
    public function addToOriginatorDocumentReference(\horstoeko\ubl\entities\cac\OriginatorDocumentReference $originatorDocumentReference)
    {
        $this->originatorDocumentReference[] = $originatorDocumentReference;
        return $this;
    }

    /**
     * isset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginatorDocumentReference($index)
    {
        return isset($this->originatorDocumentReference[$index]);
    }

    /**
     * unset originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginatorDocumentReference($index)
    {
        unset($this->originatorDocumentReference[$index]);
    }

    /**
     * Gets as originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\OriginatorDocumentReference[]
     */
    public function getOriginatorDocumentReference()
    {
        return $this->originatorDocumentReference;
    }

    /**
     * Sets a new originatorDocumentReference
     *
     * ASBIE
     *  Invoice. Originator_ Document Reference. Document Reference
     *  A reference to an originator document associated with this document.
     *  0..n
     *  Invoice
     *  Originator
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\OriginatorDocumentReference[] $originatorDocumentReference
     * @return self
     */
    public function setOriginatorDocumentReference(array $originatorDocumentReference)
    {
        $this->originatorDocumentReference = $originatorDocumentReference;
        return $this;
    }

    /**
     * Adds as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference
     */
    public function addToContractDocumentReference(\horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference[] = $contractDocumentReference;
        return $this;
    }

    /**
     * isset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractDocumentReference($index)
    {
        return isset($this->contractDocumentReference[$index]);
    }

    /**
     * unset contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractDocumentReference($index)
    {
        unset($this->contractDocumentReference[$index]);
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\ContractDocumentReference[]
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Invoice. Contract_ Document Reference. Document Reference
     *  A reference to a contract associated with this document.
     *  0..n
     *  Invoice
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\ContractDocumentReference[] $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(array $contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference
     */
    public function addToAdditionalDocumentReference(\horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference[] = $additionalDocumentReference;
        return $this;
    }

    /**
     * isset additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDocumentReference($index)
    {
        return isset($this->additionalDocumentReference[$index]);
    }

    /**
     * unset additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDocumentReference($index)
    {
        unset($this->additionalDocumentReference[$index]);
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\AdditionalDocumentReference[]
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Invoice. Additional_ Document Reference. Document Reference
     *  A reference to an additional document associated with this document.
     *  0..n
     *  Invoice
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\AdditionalDocumentReference[] $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(array $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ProjectReference $projectReference
     */
    public function addToProjectReference(\horstoeko\ubl\entities\cac\ProjectReference $projectReference)
    {
        $this->projectReference[] = $projectReference;
        return $this;
    }

    /**
     * isset projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProjectReference($index)
    {
        return isset($this->projectReference[$index]);
    }

    /**
     * unset projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProjectReference($index)
    {
        unset($this->projectReference[$index]);
    }

    /**
     * Gets as projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @return \horstoeko\ubl\entities\cac\ProjectReference[]
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * ASBIE
     *  Invoice. Project Reference
     *  Information about a project.
     *  0..n
     *  Invoice
     *  Project Reference
     *  Project Reference
     *  Project Reference
     *
     * @param \horstoeko\ubl\entities\cac\ProjectReference[] $projectReference
     * @return self
     */
    public function setProjectReference(array $projectReference)
    {
        $this->projectReference = $projectReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Signature $signature
     */
    public function addToSignature(\horstoeko\ubl\entities\cac\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \horstoeko\ubl\entities\cac\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Invoice. Signature
     *  A signature applied to this document.
     *  0..n
     *  Invoice
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \horstoeko\ubl\entities\cac\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \horstoeko\ubl\entities\cac\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Invoice. Accounting_ Supplier Party. Supplier Party
     *  The accounting supplier party.
     *  1
     *  Invoice
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\horstoeko\ubl\entities\cac\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Invoice. Accounting_ Customer Party. Customer Party
     *  The accounting customer party.
     *  1
     *  Invoice
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\horstoeko\ubl\entities\cac\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Invoice. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Invoice
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(\horstoeko\ubl\entities\cac\PayeeParty $payeeParty)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \horstoeko\ubl\entities\cac\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Invoice. Buyer_ Customer Party. Customer Party
     *  The buyer.
     *  0..1
     *  Invoice
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\horstoeko\ubl\entities\cac\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \horstoeko\ubl\entities\cac\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Invoice. Seller_ Supplier Party. Supplier Party
     *  The seller.
     *  0..1
     *  Invoice
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\horstoeko\ubl\entities\cac\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\TaxRepresentativeParty
     */
    public function getTaxRepresentativeParty()
    {
        return $this->taxRepresentativeParty;
    }

    /**
     * Sets a new taxRepresentativeParty
     *
     * ASBIE
     *  Invoice. Tax Representative_ Party. Party
     *  The tax representative.
     *  0..1
     *  Invoice
     *  Tax Representative
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\TaxRepresentativeParty $taxRepresentativeParty
     * @return self
     */
    public function setTaxRepresentativeParty(\horstoeko\ubl\entities\cac\TaxRepresentativeParty $taxRepresentativeParty)
    {
        $this->taxRepresentativeParty = $taxRepresentativeParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Delivery $delivery
     */
    public function addToDelivery(\horstoeko\ubl\entities\cac\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \horstoeko\ubl\entities\cac\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Invoice. Delivery
     *  A delivery associated with this document.
     *  0..n
     *  Invoice
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \horstoeko\ubl\entities\cac\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Invoice. Delivery Terms
     *  A set of delivery terms associated with this document.
     *  0..1
     *  Invoice
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\horstoeko\ubl\entities\cac\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans
     */
    public function addToPaymentMeans(\horstoeko\ubl\entities\cac\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans[] = $paymentMeans;
        return $this;
    }

    /**
     * isset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentMeans($index)
    {
        return isset($this->paymentMeans[$index]);
    }

    /**
     * unset paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentMeans($index)
    {
        unset($this->paymentMeans[$index]);
    }

    /**
     * Gets as paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \horstoeko\ubl\entities\cac\PaymentMeans[]
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Invoice. Payment Means
     *  Expected means of payment.
     *  0..n
     *  Invoice
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \horstoeko\ubl\entities\cac\PaymentMeans[] $paymentMeans
     * @return self
     */
    public function setPaymentMeans(array $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\horstoeko\ubl\entities\cac\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \horstoeko\ubl\entities\cac\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Invoice. Payment Terms
     *  A set of payment terms associated with this document.
     *  0..n
     *  Invoice
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \horstoeko\ubl\entities\cac\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PrepaidPayment $prepaidPayment
     */
    public function addToPrepaidPayment(\horstoeko\ubl\entities\cac\PrepaidPayment $prepaidPayment)
    {
        $this->prepaidPayment[] = $prepaidPayment;
        return $this;
    }

    /**
     * isset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrepaidPayment($index)
    {
        return isset($this->prepaidPayment[$index]);
    }

    /**
     * unset prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrepaidPayment($index)
    {
        unset($this->prepaidPayment[$index]);
    }

    /**
     * Gets as prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @return \horstoeko\ubl\entities\cac\PrepaidPayment[]
     */
    public function getPrepaidPayment()
    {
        return $this->prepaidPayment;
    }

    /**
     * Sets a new prepaidPayment
     *
     * ASBIE
     *  Invoice. Prepaid_ Payment. Payment
     *  A prepaid payment.
     *  0..n
     *  Invoice
     *  Prepaid
     *  Payment
     *  Payment
     *  Payment
     *
     * @param \horstoeko\ubl\entities\cac\PrepaidPayment[] $prepaidPayment
     * @return self
     */
    public function setPrepaidPayment(array $prepaidPayment)
    {
        $this->prepaidPayment = $prepaidPayment;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \horstoeko\ubl\entities\cac\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Invoice. Allowance Charge
     *  A discount or charge that applies to a price component.
     *  0..n
     *  Invoice
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\TaxExchangeRate
     */
    public function getTaxExchangeRate()
    {
        return $this->taxExchangeRate;
    }

    /**
     * Sets a new taxExchangeRate
     *
     * ASBIE
     *  Invoice. Tax_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the tax currency.
     *  0..1
     *  Invoice
     *  Tax
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\TaxExchangeRate $taxExchangeRate
     * @return self
     */
    public function setTaxExchangeRate(\horstoeko\ubl\entities\cac\TaxExchangeRate $taxExchangeRate)
    {
        $this->taxExchangeRate = $taxExchangeRate;
        return $this;
    }

    /**
     * Gets as pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\PricingExchangeRate
     */
    public function getPricingExchangeRate()
    {
        return $this->pricingExchangeRate;
    }

    /**
     * Sets a new pricingExchangeRate
     *
     * ASBIE
     *  Invoice. Pricing_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the pricing currency.
     *  0..1
     *  Invoice
     *  Pricing
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate
     * @return self
     */
    public function setPricingExchangeRate(\horstoeko\ubl\entities\cac\PricingExchangeRate $pricingExchangeRate)
    {
        $this->pricingExchangeRate = $pricingExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\PaymentExchangeRate
     */
    public function getPaymentExchangeRate()
    {
        return $this->paymentExchangeRate;
    }

    /**
     * Sets a new paymentExchangeRate
     *
     * ASBIE
     *  Invoice. Payment_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment currency.
     *  0..1
     *  Invoice
     *  Payment
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\PaymentExchangeRate $paymentExchangeRate
     * @return self
     */
    public function setPaymentExchangeRate(\horstoeko\ubl\entities\cac\PaymentExchangeRate $paymentExchangeRate)
    {
        $this->paymentExchangeRate = $paymentExchangeRate;
        return $this;
    }

    /**
     * Gets as paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\PaymentAlternativeExchangeRate
     */
    public function getPaymentAlternativeExchangeRate()
    {
        return $this->paymentAlternativeExchangeRate;
    }

    /**
     * Sets a new paymentAlternativeExchangeRate
     *
     * ASBIE
     *  Invoice. Payment Alternative_ Exchange Rate. Exchange Rate
     *  The exchange rate between the document currency and the payment alternative currency.
     *  0..1
     *  Invoice
     *  Payment Alternative
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \horstoeko\ubl\entities\cac\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate
     * @return self
     */
    public function setPaymentAlternativeExchangeRate(\horstoeko\ubl\entities\cac\PaymentAlternativeExchangeRate $paymentAlternativeExchangeRate)
    {
        $this->paymentAlternativeExchangeRate = $paymentAlternativeExchangeRate;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\horstoeko\ubl\entities\cac\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \horstoeko\ubl\entities\cac\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Invoice. Tax Total
     *  The total amount of a specific type of tax.
     *  0..n
     *  Invoice
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\WithholdingTaxTotal $withholdingTaxTotal
     */
    public function addToWithholdingTaxTotal(\horstoeko\ubl\entities\cac\WithholdingTaxTotal $withholdingTaxTotal)
    {
        $this->withholdingTaxTotal[] = $withholdingTaxTotal;
        return $this;
    }

    /**
     * isset withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWithholdingTaxTotal($index)
    {
        return isset($this->withholdingTaxTotal[$index]);
    }

    /**
     * unset withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWithholdingTaxTotal($index)
    {
        unset($this->withholdingTaxTotal[$index]);
    }

    /**
     * Gets as withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \horstoeko\ubl\entities\cac\WithholdingTaxTotal[]
     */
    public function getWithholdingTaxTotal()
    {
        return $this->withholdingTaxTotal;
    }

    /**
     * Sets a new withholdingTaxTotal
     *
     * ASBIE
     *  Invoice. Withholding_ Tax Total. Tax Total
     *  The total withholding tax.
     *  0..n
     *  Invoice
     *  Withholding
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \horstoeko\ubl\entities\cac\WithholdingTaxTotal[] $withholdingTaxTotal
     * @return self
     */
    public function setWithholdingTaxTotal(array $withholdingTaxTotal)
    {
        $this->withholdingTaxTotal = $withholdingTaxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \horstoeko\ubl\entities\cac\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Invoice. Legal_ Monetary Total. Monetary Total
     *  The total amount payable on the Invoice, including Allowances, Charges, and Taxes.
     *  1
     *  Invoice
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \horstoeko\ubl\entities\cac\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\horstoeko\ubl\entities\cac\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\InvoiceLine $invoiceLine
     */
    public function addToInvoiceLine(\horstoeko\ubl\entities\cac\InvoiceLine $invoiceLine)
    {
        $this->invoiceLine[] = $invoiceLine;
        return $this;
    }

    /**
     * isset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoiceLine($index)
    {
        return isset($this->invoiceLine[$index]);
    }

    /**
     * unset invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoiceLine($index)
    {
        unset($this->invoiceLine[$index]);
    }

    /**
     * Gets as invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @return \horstoeko\ubl\entities\cac\InvoiceLine[]
     */
    public function getInvoiceLine()
    {
        return $this->invoiceLine;
    }

    /**
     * Sets a new invoiceLine
     *
     * ASBIE
     *  Invoice. Invoice Line
     *  A line describing an invoice item.
     *  1..n
     *  Invoice
     *  Invoice Line
     *  Invoice Line
     *  Invoice Line
     *
     * @param \horstoeko\ubl\entities\cac\InvoiceLine[] $invoiceLine
     * @return self
     */
    public function setInvoiceLine(array $invoiceLine)
    {
        $this->invoiceLine = $invoiceLine;
        return $this;
    }


}

