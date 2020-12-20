<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SignaturePolicyIdType
 *
 * XSD Type: SignaturePolicyIdType
 */
class SignaturePolicyIdType
{

    /**
     * @var \horstoeko\ubl\entities\xades\ObjectIdentifierType $sigPolicyId
     */
    private $sigPolicyId = null;

    /**
     * @var \horstoeko\ubl\entities\ds\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * @var \horstoeko\ubl\entities\xades\DigestAlgAndValueType $sigPolicyHash
     */
    private $sigPolicyHash = null;

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $sigPolicyQualifiers
     */
    private $sigPolicyQualifiers = null;

    /**
     * Gets as sigPolicyId
     *
     * @return \horstoeko\ubl\entities\xades\ObjectIdentifierType
     */
    public function getSigPolicyId()
    {
        return $this->sigPolicyId;
    }

    /**
     * Sets a new sigPolicyId
     *
     * @param  \horstoeko\ubl\entities\xades\ObjectIdentifierType $sigPolicyId
     * @return self
     */
    public function setSigPolicyId(\horstoeko\ubl\entities\xades\ObjectIdentifierType $sigPolicyId)
    {
        $this->sigPolicyId = $sigPolicyId;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param  \horstoeko\ubl\entities\ds\Transform $transform
     */
    public function addToTransforms(\horstoeko\ubl\entities\ds\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \horstoeko\ubl\entities\ds\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param  \horstoeko\ubl\entities\ds\Transform[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * Gets as sigPolicyHash
     *
     * @return \horstoeko\ubl\entities\xades\DigestAlgAndValueType
     */
    public function getSigPolicyHash()
    {
        return $this->sigPolicyHash;
    }

    /**
     * Sets a new sigPolicyHash
     *
     * @param  \horstoeko\ubl\entities\xades\DigestAlgAndValueType $sigPolicyHash
     * @return self
     */
    public function setSigPolicyHash(\horstoeko\ubl\entities\xades\DigestAlgAndValueType $sigPolicyHash)
    {
        $this->sigPolicyHash = $sigPolicyHash;
        return $this;
    }

    /**
     * Adds as sigPolicyQualifier
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\AnyType $sigPolicyQualifier
     */
    public function addToSigPolicyQualifiers(\horstoeko\ubl\entities\xades\AnyType $sigPolicyQualifier)
    {
        $this->sigPolicyQualifiers[] = $sigPolicyQualifier;
        return $this;
    }

    /**
     * isset sigPolicyQualifiers
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetSigPolicyQualifiers($index)
    {
        return isset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * unset sigPolicyQualifiers
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetSigPolicyQualifiers($index)
    {
        unset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * Gets as sigPolicyQualifiers
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getSigPolicyQualifiers()
    {
        return $this->sigPolicyQualifiers;
    }

    /**
     * Sets a new sigPolicyQualifiers
     *
     * @param  \horstoeko\ubl\entities\xades\AnyType[] $sigPolicyQualifiers
     * @return self
     */
    public function setSigPolicyQualifiers(array $sigPolicyQualifiers)
    {
        $this->sigPolicyQualifiers = $sigPolicyQualifiers;
        return $this;
    }


}

