<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CertificateValuesType
 *
 *
 * XSD Type: CertificateValuesType
 */
class CertificateValuesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedX509Certificate
     */
    private $encapsulatedX509Certificate = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $otherCertificate
     */
    private $otherCertificate = [
        
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
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as encapsulatedX509Certificate
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedX509Certificate
     */
    public function addToEncapsulatedX509Certificate(\horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedX509Certificate)
    {
        $this->encapsulatedX509Certificate[] = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * isset encapsulatedX509Certificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedX509Certificate($index)
    {
        return isset($this->encapsulatedX509Certificate[$index]);
    }

    /**
     * unset encapsulatedX509Certificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedX509Certificate($index)
    {
        unset($this->encapsulatedX509Certificate[$index]);
    }

    /**
     * Gets as encapsulatedX509Certificate
     *
     * @return \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedX509Certificate()
    {
        return $this->encapsulatedX509Certificate;
    }

    /**
     * Sets a new encapsulatedX509Certificate
     *
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedX509Certificate
     * @return self
     */
    public function setEncapsulatedX509Certificate(array $encapsulatedX509Certificate)
    {
        $this->encapsulatedX509Certificate = $encapsulatedX509Certificate;
        return $this;
    }

    /**
     * Adds as otherCertificate
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\AnyType $otherCertificate
     */
    public function addToOtherCertificate(\horstoeko\ubl\entities\xades\AnyType $otherCertificate)
    {
        $this->otherCertificate[] = $otherCertificate;
        return $this;
    }

    /**
     * isset otherCertificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCertificate($index)
    {
        return isset($this->otherCertificate[$index]);
    }

    /**
     * unset otherCertificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCertificate($index)
    {
        unset($this->otherCertificate[$index]);
    }

    /**
     * Gets as otherCertificate
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getOtherCertificate()
    {
        return $this->otherCertificate;
    }

    /**
     * Sets a new otherCertificate
     *
     * @param \horstoeko\ubl\entities\xades\AnyType[] $otherCertificate
     * @return self
     */
    public function setOtherCertificate(array $otherCertificate)
    {
        $this->otherCertificate = $otherCertificate;
        return $this;
    }


}

