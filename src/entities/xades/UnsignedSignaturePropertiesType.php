<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing UnsignedSignaturePropertiesType
 *
 * XSD Type: UnsignedSignaturePropertiesType
 */
class UnsignedSignaturePropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\CounterSignatureType[] $counterSignature
     */
    private $counterSignature = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $signatureTimeStamp
     */
    private $signatureTimeStamp = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[] $completeCertificateRefs
     */
    private $completeCertificateRefs = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[] $completeRevocationRefs
     */
    private $completeRevocationRefs = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[] $attributeCertificateRefs
     */
    private $attributeCertificateRefs = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[] $attributeRevocationRefs
     */
    private $attributeRevocationRefs = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $sigAndRefsTimeStamp
     */
    private $sigAndRefsTimeStamp = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $refsOnlyTimeStamp
     */
    private $refsOnlyTimeStamp = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CertificateValuesType[] $certificateValues
     */
    private $certificateValues = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\RevocationValuesType[] $revocationValues
     */
    private $revocationValues = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\CertificateValuesType[] $attrAuthoritiesCertValues
     */
    private $attrAuthoritiesCertValues = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\RevocationValuesType[] $attributeRevocationValues
     */
    private $attributeRevocationValues = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $archiveTimeStamp
     */
    private $archiveTimeStamp = [
        
    ];

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param  string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as counterSignature
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CounterSignatureType $counterSignature
     */
    public function addToCounterSignature(\horstoeko\ubl\entities\xades\CounterSignatureType $counterSignature)
    {
        $this->counterSignature[] = $counterSignature;
        return $this;
    }

    /**
     * isset counterSignature
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCounterSignature($index)
    {
        return isset($this->counterSignature[$index]);
    }

    /**
     * unset counterSignature
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCounterSignature($index)
    {
        unset($this->counterSignature[$index]);
    }

    /**
     * Gets as counterSignature
     *
     * @return \horstoeko\ubl\entities\xades\CounterSignatureType[]
     */
    public function getCounterSignature()
    {
        return $this->counterSignature;
    }

    /**
     * Sets a new counterSignature
     *
     * @param  \horstoeko\ubl\entities\xades\CounterSignatureType[] $counterSignature
     * @return self
     */
    public function setCounterSignature(array $counterSignature)
    {
        $this->counterSignature = $counterSignature;
        return $this;
    }

    /**
     * Adds as signatureTimeStamp
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType $signatureTimeStamp
     */
    public function addToSignatureTimeStamp(\horstoeko\ubl\entities\xades\XAdESTimeStampType $signatureTimeStamp)
    {
        $this->signatureTimeStamp[] = $signatureTimeStamp;
        return $this;
    }

    /**
     * isset signatureTimeStamp
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSignatureTimeStamp($index)
    {
        return isset($this->signatureTimeStamp[$index]);
    }

    /**
     * unset signatureTimeStamp
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSignatureTimeStamp($index)
    {
        unset($this->signatureTimeStamp[$index]);
    }

    /**
     * Gets as signatureTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\XAdESTimeStampType[]
     */
    public function getSignatureTimeStamp()
    {
        return $this->signatureTimeStamp;
    }

    /**
     * Sets a new signatureTimeStamp
     *
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $signatureTimeStamp
     * @return self
     */
    public function setSignatureTimeStamp(array $signatureTimeStamp)
    {
        $this->signatureTimeStamp = $signatureTimeStamp;
        return $this;
    }

    /**
     * Adds as completeCertificateRefs
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CompleteCertificateRefsType $completeCertificateRefs
     */
    public function addToCompleteCertificateRefs(\horstoeko\ubl\entities\xades\CompleteCertificateRefsType $completeCertificateRefs)
    {
        $this->completeCertificateRefs[] = $completeCertificateRefs;
        return $this;
    }

    /**
     * isset completeCertificateRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCompleteCertificateRefs($index)
    {
        return isset($this->completeCertificateRefs[$index]);
    }

    /**
     * unset completeCertificateRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCompleteCertificateRefs($index)
    {
        unset($this->completeCertificateRefs[$index]);
    }

    /**
     * Gets as completeCertificateRefs
     *
     * @return \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[]
     */
    public function getCompleteCertificateRefs()
    {
        return $this->completeCertificateRefs;
    }

    /**
     * Sets a new completeCertificateRefs
     *
     * @param  \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[] $completeCertificateRefs
     * @return self
     */
    public function setCompleteCertificateRefs(array $completeCertificateRefs)
    {
        $this->completeCertificateRefs = $completeCertificateRefs;
        return $this;
    }

    /**
     * Adds as completeRevocationRefs
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CompleteRevocationRefsType $completeRevocationRefs
     */
    public function addToCompleteRevocationRefs(\horstoeko\ubl\entities\xades\CompleteRevocationRefsType $completeRevocationRefs)
    {
        $this->completeRevocationRefs[] = $completeRevocationRefs;
        return $this;
    }

    /**
     * isset completeRevocationRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCompleteRevocationRefs($index)
    {
        return isset($this->completeRevocationRefs[$index]);
    }

    /**
     * unset completeRevocationRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCompleteRevocationRefs($index)
    {
        unset($this->completeRevocationRefs[$index]);
    }

    /**
     * Gets as completeRevocationRefs
     *
     * @return \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[]
     */
    public function getCompleteRevocationRefs()
    {
        return $this->completeRevocationRefs;
    }

    /**
     * Sets a new completeRevocationRefs
     *
     * @param  \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[] $completeRevocationRefs
     * @return self
     */
    public function setCompleteRevocationRefs(array $completeRevocationRefs)
    {
        $this->completeRevocationRefs = $completeRevocationRefs;
        return $this;
    }

    /**
     * Adds as attributeCertificateRefs
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CompleteCertificateRefsType $attributeCertificateRefs
     */
    public function addToAttributeCertificateRefs(\horstoeko\ubl\entities\xades\CompleteCertificateRefsType $attributeCertificateRefs)
    {
        $this->attributeCertificateRefs[] = $attributeCertificateRefs;
        return $this;
    }

    /**
     * isset attributeCertificateRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAttributeCertificateRefs($index)
    {
        return isset($this->attributeCertificateRefs[$index]);
    }

    /**
     * unset attributeCertificateRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAttributeCertificateRefs($index)
    {
        unset($this->attributeCertificateRefs[$index]);
    }

    /**
     * Gets as attributeCertificateRefs
     *
     * @return \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[]
     */
    public function getAttributeCertificateRefs()
    {
        return $this->attributeCertificateRefs;
    }

    /**
     * Sets a new attributeCertificateRefs
     *
     * @param  \horstoeko\ubl\entities\xades\CompleteCertificateRefsType[] $attributeCertificateRefs
     * @return self
     */
    public function setAttributeCertificateRefs(array $attributeCertificateRefs)
    {
        $this->attributeCertificateRefs = $attributeCertificateRefs;
        return $this;
    }

    /**
     * Adds as attributeRevocationRefs
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CompleteRevocationRefsType $attributeRevocationRefs
     */
    public function addToAttributeRevocationRefs(\horstoeko\ubl\entities\xades\CompleteRevocationRefsType $attributeRevocationRefs)
    {
        $this->attributeRevocationRefs[] = $attributeRevocationRefs;
        return $this;
    }

    /**
     * isset attributeRevocationRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAttributeRevocationRefs($index)
    {
        return isset($this->attributeRevocationRefs[$index]);
    }

    /**
     * unset attributeRevocationRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAttributeRevocationRefs($index)
    {
        unset($this->attributeRevocationRefs[$index]);
    }

    /**
     * Gets as attributeRevocationRefs
     *
     * @return \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[]
     */
    public function getAttributeRevocationRefs()
    {
        return $this->attributeRevocationRefs;
    }

    /**
     * Sets a new attributeRevocationRefs
     *
     * @param  \horstoeko\ubl\entities\xades\CompleteRevocationRefsType[] $attributeRevocationRefs
     * @return self
     */
    public function setAttributeRevocationRefs(array $attributeRevocationRefs)
    {
        $this->attributeRevocationRefs = $attributeRevocationRefs;
        return $this;
    }

    /**
     * Adds as sigAndRefsTimeStamp
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType $sigAndRefsTimeStamp
     */
    public function addToSigAndRefsTimeStamp(\horstoeko\ubl\entities\xades\XAdESTimeStampType $sigAndRefsTimeStamp)
    {
        $this->sigAndRefsTimeStamp[] = $sigAndRefsTimeStamp;
        return $this;
    }

    /**
     * isset sigAndRefsTimeStamp
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSigAndRefsTimeStamp($index)
    {
        return isset($this->sigAndRefsTimeStamp[$index]);
    }

    /**
     * unset sigAndRefsTimeStamp
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSigAndRefsTimeStamp($index)
    {
        unset($this->sigAndRefsTimeStamp[$index]);
    }

    /**
     * Gets as sigAndRefsTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\XAdESTimeStampType[]
     */
    public function getSigAndRefsTimeStamp()
    {
        return $this->sigAndRefsTimeStamp;
    }

    /**
     * Sets a new sigAndRefsTimeStamp
     *
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $sigAndRefsTimeStamp
     * @return self
     */
    public function setSigAndRefsTimeStamp(array $sigAndRefsTimeStamp)
    {
        $this->sigAndRefsTimeStamp = $sigAndRefsTimeStamp;
        return $this;
    }

    /**
     * Adds as refsOnlyTimeStamp
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType $refsOnlyTimeStamp
     */
    public function addToRefsOnlyTimeStamp(\horstoeko\ubl\entities\xades\XAdESTimeStampType $refsOnlyTimeStamp)
    {
        $this->refsOnlyTimeStamp[] = $refsOnlyTimeStamp;
        return $this;
    }

    /**
     * isset refsOnlyTimeStamp
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetRefsOnlyTimeStamp($index)
    {
        return isset($this->refsOnlyTimeStamp[$index]);
    }

    /**
     * unset refsOnlyTimeStamp
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetRefsOnlyTimeStamp($index)
    {
        unset($this->refsOnlyTimeStamp[$index]);
    }

    /**
     * Gets as refsOnlyTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\XAdESTimeStampType[]
     */
    public function getRefsOnlyTimeStamp()
    {
        return $this->refsOnlyTimeStamp;
    }

    /**
     * Sets a new refsOnlyTimeStamp
     *
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $refsOnlyTimeStamp
     * @return self
     */
    public function setRefsOnlyTimeStamp(array $refsOnlyTimeStamp)
    {
        $this->refsOnlyTimeStamp = $refsOnlyTimeStamp;
        return $this;
    }

    /**
     * Adds as certificateValues
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CertificateValuesType $certificateValues
     */
    public function addToCertificateValues(\horstoeko\ubl\entities\xades\CertificateValuesType $certificateValues)
    {
        $this->certificateValues[] = $certificateValues;
        return $this;
    }

    /**
     * isset certificateValues
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCertificateValues($index)
    {
        return isset($this->certificateValues[$index]);
    }

    /**
     * unset certificateValues
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCertificateValues($index)
    {
        unset($this->certificateValues[$index]);
    }

    /**
     * Gets as certificateValues
     *
     * @return \horstoeko\ubl\entities\xades\CertificateValuesType[]
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param  \horstoeko\ubl\entities\xades\CertificateValuesType[] $certificateValues
     * @return self
     */
    public function setCertificateValues(array $certificateValues)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Adds as revocationValues
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\RevocationValuesType $revocationValues
     */
    public function addToRevocationValues(\horstoeko\ubl\entities\xades\RevocationValuesType $revocationValues)
    {
        $this->revocationValues[] = $revocationValues;
        return $this;
    }

    /**
     * isset revocationValues
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetRevocationValues($index)
    {
        return isset($this->revocationValues[$index]);
    }

    /**
     * unset revocationValues
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetRevocationValues($index)
    {
        unset($this->revocationValues[$index]);
    }

    /**
     * Gets as revocationValues
     *
     * @return \horstoeko\ubl\entities\xades\RevocationValuesType[]
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param  \horstoeko\ubl\entities\xades\RevocationValuesType[] $revocationValues
     * @return self
     */
    public function setRevocationValues(array $revocationValues)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }

    /**
     * Adds as attrAuthoritiesCertValues
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CertificateValuesType $attrAuthoritiesCertValues
     */
    public function addToAttrAuthoritiesCertValues(\horstoeko\ubl\entities\xades\CertificateValuesType $attrAuthoritiesCertValues)
    {
        $this->attrAuthoritiesCertValues[] = $attrAuthoritiesCertValues;
        return $this;
    }

    /**
     * isset attrAuthoritiesCertValues
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAttrAuthoritiesCertValues($index)
    {
        return isset($this->attrAuthoritiesCertValues[$index]);
    }

    /**
     * unset attrAuthoritiesCertValues
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAttrAuthoritiesCertValues($index)
    {
        unset($this->attrAuthoritiesCertValues[$index]);
    }

    /**
     * Gets as attrAuthoritiesCertValues
     *
     * @return \horstoeko\ubl\entities\xades\CertificateValuesType[]
     */
    public function getAttrAuthoritiesCertValues()
    {
        return $this->attrAuthoritiesCertValues;
    }

    /**
     * Sets a new attrAuthoritiesCertValues
     *
     * @param  \horstoeko\ubl\entities\xades\CertificateValuesType[] $attrAuthoritiesCertValues
     * @return self
     */
    public function setAttrAuthoritiesCertValues(array $attrAuthoritiesCertValues)
    {
        $this->attrAuthoritiesCertValues = $attrAuthoritiesCertValues;
        return $this;
    }

    /**
     * Adds as attributeRevocationValues
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\RevocationValuesType $attributeRevocationValues
     */
    public function addToAttributeRevocationValues(\horstoeko\ubl\entities\xades\RevocationValuesType $attributeRevocationValues)
    {
        $this->attributeRevocationValues[] = $attributeRevocationValues;
        return $this;
    }

    /**
     * isset attributeRevocationValues
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAttributeRevocationValues($index)
    {
        return isset($this->attributeRevocationValues[$index]);
    }

    /**
     * unset attributeRevocationValues
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAttributeRevocationValues($index)
    {
        unset($this->attributeRevocationValues[$index]);
    }

    /**
     * Gets as attributeRevocationValues
     *
     * @return \horstoeko\ubl\entities\xades\RevocationValuesType[]
     */
    public function getAttributeRevocationValues()
    {
        return $this->attributeRevocationValues;
    }

    /**
     * Sets a new attributeRevocationValues
     *
     * @param  \horstoeko\ubl\entities\xades\RevocationValuesType[] $attributeRevocationValues
     * @return self
     */
    public function setAttributeRevocationValues(array $attributeRevocationValues)
    {
        $this->attributeRevocationValues = $attributeRevocationValues;
        return $this;
    }

    /**
     * Adds as archiveTimeStamp
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType $archiveTimeStamp
     */
    public function addToArchiveTimeStamp(\horstoeko\ubl\entities\xades\XAdESTimeStampType $archiveTimeStamp)
    {
        $this->archiveTimeStamp[] = $archiveTimeStamp;
        return $this;
    }

    /**
     * isset archiveTimeStamp
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetArchiveTimeStamp($index)
    {
        return isset($this->archiveTimeStamp[$index]);
    }

    /**
     * unset archiveTimeStamp
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetArchiveTimeStamp($index)
    {
        unset($this->archiveTimeStamp[$index]);
    }

    /**
     * Gets as archiveTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\XAdESTimeStampType[]
     */
    public function getArchiveTimeStamp()
    {
        return $this->archiveTimeStamp;
    }

    /**
     * Sets a new archiveTimeStamp
     *
     * @param  \horstoeko\ubl\entities\xades\XAdESTimeStampType[] $archiveTimeStamp
     * @return self
     */
    public function setArchiveTimeStamp(array $archiveTimeStamp)
    {
        $this->archiveTimeStamp = $archiveTimeStamp;
        return $this;
    }


}

