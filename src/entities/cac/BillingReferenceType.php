<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing BillingReferenceType
 *
 * ABIE
 *  Billing Reference. Details
 *  Information directly relating to a related document.
 *  Billing Reference
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{

    /**
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @var \horstoeko\ubl\entities\cac\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  An associative reference to Invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(\horstoeko\ubl\entities\cac\InvoiceDocumentReference $invoiceDocumentReference)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  An associative reference to Self Billed Invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(\horstoeko\ubl\entities\cac\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  An associative reference to Credit Note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(\horstoeko\ubl\entities\cac\CreditNoteDocumentReference $creditNoteDocumentReference)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  An associative reference to Self Billed Credit Note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(\horstoeko\ubl\entities\cac\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  An associative reference to Debit Note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(\horstoeko\ubl\entities\cac\DebitNoteDocumentReference $debitNoteDocumentReference)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  An associative reference to Reminder Document Reference
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(\horstoeko\ubl\entities\cac\ReminderDocumentReference $reminderDocumentReference)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  An associative reference to Additional Document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(\horstoeko\ubl\entities\cac\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\horstoeko\ubl\entities\cac\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return \horstoeko\ubl\entities\cac\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  An association to Billing Reference Line.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param \horstoeko\ubl\entities\cac\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(array $billingReferenceLine)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }


}

