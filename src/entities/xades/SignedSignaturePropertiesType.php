<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SignedSignaturePropertiesType
 *
 * XSD Type: SignedSignaturePropertiesType
 */
class SignedSignaturePropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $signingTime
     */
    private $signingTime = null;

    /**
     * @var \horstoeko\ubl\entities\xades\CertIDType[] $signingCertificate
     */
    private $signingCertificate = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     */
    private $signaturePolicyIdentifier = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignatureProductionPlaceType $signatureProductionPlace
     */
    private $signatureProductionPlace = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignerRoleType $signerRole
     */
    private $signerRole = null;

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
     * Gets as signingTime
     *
     * @return \DateTime
     */
    public function getSigningTime()
    {
        return $this->signingTime;
    }

    /**
     * Sets a new signingTime
     *
     * @param  \DateTime $signingTime
     * @return self
     */
    public function setSigningTime(\DateTime $signingTime)
    {
        $this->signingTime = $signingTime;
        return $this;
    }

    /**
     * Adds as cert
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CertIDType $cert
     */
    public function addToSigningCertificate(\horstoeko\ubl\entities\xades\CertIDType $cert)
    {
        $this->signingCertificate[] = $cert;
        return $this;
    }

    /**
     * isset signingCertificate
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSigningCertificate($index)
    {
        return isset($this->signingCertificate[$index]);
    }

    /**
     * unset signingCertificate
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSigningCertificate($index)
    {
        unset($this->signingCertificate[$index]);
    }

    /**
     * Gets as signingCertificate
     *
     * @return \horstoeko\ubl\entities\xades\CertIDType[]
     */
    public function getSigningCertificate()
    {
        return $this->signingCertificate;
    }

    /**
     * Sets a new signingCertificate
     *
     * @param  \horstoeko\ubl\entities\xades\CertIDType[] $signingCertificate
     * @return self
     */
    public function setSigningCertificate(array $signingCertificate)
    {
        $this->signingCertificate = $signingCertificate;
        return $this;
    }

    /**
     * Gets as signaturePolicyIdentifier
     *
     * @return \horstoeko\ubl\entities\xades\SignaturePolicyIdentifierType
     */
    public function getSignaturePolicyIdentifier()
    {
        return $this->signaturePolicyIdentifier;
    }

    /**
     * Sets a new signaturePolicyIdentifier
     *
     * @param  \horstoeko\ubl\entities\xades\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     * @return self
     */
    public function setSignaturePolicyIdentifier(\horstoeko\ubl\entities\xades\SignaturePolicyIdentifierType $signaturePolicyIdentifier)
    {
        $this->signaturePolicyIdentifier = $signaturePolicyIdentifier;
        return $this;
    }

    /**
     * Gets as signatureProductionPlace
     *
     * @return \horstoeko\ubl\entities\xades\SignatureProductionPlaceType
     */
    public function getSignatureProductionPlace()
    {
        return $this->signatureProductionPlace;
    }

    /**
     * Sets a new signatureProductionPlace
     *
     * @param  \horstoeko\ubl\entities\xades\SignatureProductionPlaceType $signatureProductionPlace
     * @return self
     */
    public function setSignatureProductionPlace(\horstoeko\ubl\entities\xades\SignatureProductionPlaceType $signatureProductionPlace)
    {
        $this->signatureProductionPlace = $signatureProductionPlace;
        return $this;
    }

    /**
     * Gets as signerRole
     *
     * @return \horstoeko\ubl\entities\xades\SignerRoleType
     */
    public function getSignerRole()
    {
        return $this->signerRole;
    }

    /**
     * Sets a new signerRole
     *
     * @param  \horstoeko\ubl\entities\xades\SignerRoleType $signerRole
     * @return self
     */
    public function setSignerRole(\horstoeko\ubl\entities\xades\SignerRoleType $signerRole)
    {
        $this->signerRole = $signerRole;
        return $this;
    }


}

