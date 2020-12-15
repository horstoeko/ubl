<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TradeFinancingType
 *
 * ABIE
 *  Trade Financing. Details
 *  A class to describe a trade financing instrument.
 *  Trade Financing
 * XSD Type: TradeFinancingType
 */
class TradeFinancingType
{

    /**
     * BBIE
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @var \horstoeko\ubl\entities\cbc\FinancingInstrumentCode $financingInstrumentCode
     */
    private $financingInstrumentCode = null;

    /**
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference
     */
    private $contractDocumentReference = null;

    /**
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\FinancingParty $financingParty
     */
    private $financingParty = null;

    /**
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \horstoeko\ubl\entities\cac\FinancingFinancialAccount $financingFinancialAccount
     */
    private $financingFinancialAccount = null;

    /**
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \horstoeko\ubl\entities\cac\Clause[] $clause
     */
    private $clause = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Trade Financing. Identifier
     *  An identifier for this trade financing instrument.
     *  0..1
     *  Trade Financing
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as financingInstrumentCode
     *
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @return \horstoeko\ubl\entities\cbc\FinancingInstrumentCode
     */
    public function getFinancingInstrumentCode()
    {
        return $this->financingInstrumentCode;
    }

    /**
     * Sets a new financingInstrumentCode
     *
     * BBIE
     *  Trade Financing. Financing Instrument Code. Code
     *  A code signifying the type of this financing instrument.
     *  0..1
     *  Trade Financing
     *  Financing Instrument Code
     *  Code
     *  Code. Type
     *  Factoring , Invoice Financing , Pre-shipment Financing , Letter of Credit , Irrevocable Letter of Credit .
     *
     * @param \horstoeko\ubl\entities\cbc\FinancingInstrumentCode $financingInstrumentCode
     * @return self
     */
    public function setFinancingInstrumentCode(\horstoeko\ubl\entities\cbc\FinancingInstrumentCode $financingInstrumentCode)
    {
        $this->financingInstrumentCode = $financingInstrumentCode;
        return $this;
    }

    /**
     * Gets as contractDocumentReference
     *
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\ContractDocumentReference
     */
    public function getContractDocumentReference()
    {
        return $this->contractDocumentReference;
    }

    /**
     * Sets a new contractDocumentReference
     *
     * ASBIE
     *  Trade Financing. Contract_ Document Reference. Document Reference
     *  A reference to a contract document.
     *  0..1
     *  Trade Financing
     *  Contract
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference
     * @return self
     */
    public function setContractDocumentReference(\horstoeko\ubl\entities\cac\ContractDocumentReference $contractDocumentReference)
    {
        $this->contractDocumentReference = $contractDocumentReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    public function addToDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Trade Financing. Document Reference
     *  A reference to a document associated with this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as financingParty
     *
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\FinancingParty
     */
    public function getFinancingParty()
    {
        return $this->financingParty;
    }

    /**
     * Sets a new financingParty
     *
     * ASBIE
     *  Trade Financing. Financing_ Party. Party
     *  The financing party (bank or other enabled party).
     *  1
     *  Trade Financing
     *  Financing
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\FinancingParty $financingParty
     * @return self
     */
    public function setFinancingParty(\horstoeko\ubl\entities\cac\FinancingParty $financingParty)
    {
        $this->financingParty = $financingParty;
        return $this;
    }

    /**
     * Gets as financingFinancialAccount
     *
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \horstoeko\ubl\entities\cac\FinancingFinancialAccount
     */
    public function getFinancingFinancialAccount()
    {
        return $this->financingFinancialAccount;
    }

    /**
     * Sets a new financingFinancialAccount
     *
     * ASBIE
     *  Trade Financing. Financing_ Financial Account. Financial Account
     *  An internal bank account used by the bank or its first agent to manage the line of credit granted to the financing requester.
     *  0..1
     *  Trade Financing
     *  Financing
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \horstoeko\ubl\entities\cac\FinancingFinancialAccount $financingFinancialAccount
     * @return self
     */
    public function setFinancingFinancialAccount(\horstoeko\ubl\entities\cac\FinancingFinancialAccount $financingFinancialAccount)
    {
        $this->financingFinancialAccount = $financingFinancialAccount;
        return $this;
    }

    /**
     * Adds as clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\Clause $clause
     */
    public function addToClause(\horstoeko\ubl\entities\cac\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \horstoeko\ubl\entities\cac\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * ASBIE
     *  Trade Financing. Clause
     *  A clause applicable to this trade financing instrument.
     *  0..n
     *  Trade Financing
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \horstoeko\ubl\entities\cac\Clause[] $clause
     * @return self
     */
    public function setClause(array $clause)
    {
        $this->clause = $clause;
        return $this;
    }


}

