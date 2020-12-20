<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing EvidenceType
 *
 * ABIE
 *  Evidence. Details
 *  A class to describe an item of evidentiary support for representations of capabilities or the ability to meet tendering requirements, which an economic operator must provide for acceptance into a tendering process.
 *  Evidence
 * XSD Type: EvidenceType
 */
class EvidenceType
{

    /**
     * BBIE
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\EvidenceTypeCode $evidenceTypeCode
     */
    private $evidenceTypeCode = null;

    /**
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CandidateStatement[] $candidateStatement
     */
    private $candidateStatement = [
        
    ];

    /**
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\EvidenceIssuingParty $evidenceIssuingParty
     */
    private $evidenceIssuingParty = null;

    /**
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..1
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @var \horstoeko\ubl\entities\cac\Language $language
     */
    private $language = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
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
     *  Evidence. Identifier
     *  An identifier for this item of evidentiary support.
     *  0..1
     *  Evidence
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as evidenceTypeCode
     *
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\EvidenceTypeCode
     */
    public function getEvidenceTypeCode()
    {
        return $this->evidenceTypeCode;
    }

    /**
     * Sets a new evidenceTypeCode
     *
     * BBIE
     *  Evidence. Evidence Type Code. Code
     *  A code signifying the type of evidence.
     *  0..1
     *  Evidence
     *  Evidence Type Code
     *  Code
     *  Code. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\EvidenceTypeCode $evidenceTypeCode
     * @return self
     */
    public function setEvidenceTypeCode(\horstoeko\ubl\entities\cbc\EvidenceTypeCode $evidenceTypeCode)
    {
        $this->evidenceTypeCode = $evidenceTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Evidence. Description. Text
     *  The textual description for this Evidence.
     *  0..n
     *  Evidence
     *  Description
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\CandidateStatement $candidateStatement
     */
    public function addToCandidateStatement(\horstoeko\ubl\entities\cbc\CandidateStatement $candidateStatement)
    {
        $this->candidateStatement[] = $candidateStatement;
        return $this;
    }

    /**
     * isset candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCandidateStatement($index)
    {
        return isset($this->candidateStatement[$index]);
    }

    /**
     * unset candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCandidateStatement($index)
    {
        unset($this->candidateStatement[$index]);
    }

    /**
     * Gets as candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CandidateStatement[]
     */
    public function getCandidateStatement()
    {
        return $this->candidateStatement;
    }

    /**
     * Sets a new candidateStatement
     *
     * BBIE
     *  Evidence. Candidate_ Statement. Text
     *  Information about a candidate statement that the contracting authority accepts as a sufficient response.
     *  0..n
     *  Evidence
     *  Candidate
     *  Statement
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CandidateStatement[] $candidateStatement
     * @return self
     */
    public function setCandidateStatement(array $candidateStatement)
    {
        $this->candidateStatement = $candidateStatement;
        return $this;
    }

    /**
     * Gets as evidenceIssuingParty
     *
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\EvidenceIssuingParty
     */
    public function getEvidenceIssuingParty()
    {
        return $this->evidenceIssuingParty;
    }

    /**
     * Sets a new evidenceIssuingParty
     *
     * ASBIE
     *  Evidence. Evidence Issuing_ Party. Party
     *  A class to describe a party issuing an evidentiary document.
     *  0..1
     *  Evidence
     *  Evidence Issuing
     *  Party
     *  Party
     *  Party
     *
     * @param  \horstoeko\ubl\entities\cac\EvidenceIssuingParty $evidenceIssuingParty
     * @return self
     */
    public function setEvidenceIssuingParty(\horstoeko\ubl\entities\cac\EvidenceIssuingParty $evidenceIssuingParty)
    {
        $this->evidenceIssuingParty = $evidenceIssuingParty;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..1
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Evidence. Document Reference
     *  A reference to the evidentiary document.
     *  0..1
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param  \horstoeko\ubl\entities\cac\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\horstoeko\ubl\entities\cac\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @return \horstoeko\ubl\entities\cac\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Evidence. Language
     *  Information about a required translation to be part of the response, i.e. the language.
     *  0..1
     *  Evidence
     *  Language
     *  Language
     *  Language
     *
     * @param  \horstoeko\ubl\entities\cac\Language $language
     * @return self
     */
    public function setLanguage(\horstoeko\ubl\entities\cac\Language $language)
    {
        $this->language = $language;
        return $this;
    }


}

