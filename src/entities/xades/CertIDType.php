<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CertIDType
 *
 *
 * XSD Type: CertIDType
 */
class CertIDType
{

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \horstoeko\ubl\entities\xades\DigestAlgAndValueType $certDigest
     */
    private $certDigest = null;

    /**
     * @var \horstoeko\ubl\entities\ds\X509IssuerSerialType $issuerSerial
     */
    private $issuerSerial = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as certDigest
     *
     * @return \horstoeko\ubl\entities\xades\DigestAlgAndValueType
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * Sets a new certDigest
     *
     * @param \horstoeko\ubl\entities\xades\DigestAlgAndValueType $certDigest
     * @return self
     */
    public function setCertDigest(\horstoeko\ubl\entities\xades\DigestAlgAndValueType $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * Gets as issuerSerial
     *
     * @return \horstoeko\ubl\entities\ds\X509IssuerSerialType
     */
    public function getIssuerSerial()
    {
        return $this->issuerSerial;
    }

    /**
     * Sets a new issuerSerial
     *
     * @param \horstoeko\ubl\entities\ds\X509IssuerSerialType $issuerSerial
     * @return self
     */
    public function setIssuerSerial(\horstoeko\ubl\entities\ds\X509IssuerSerialType $issuerSerial)
    {
        $this->issuerSerial = $issuerSerial;
        return $this;
    }


}

