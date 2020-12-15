<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SignaturePolicyIdentifierType
 *
 *
 * XSD Type: SignaturePolicyIdentifierType
 */
class SignaturePolicyIdentifierType
{

    /**
     * @var \horstoeko\ubl\entities\xades\SignaturePolicyIdType $signaturePolicyId
     */
    private $signaturePolicyId = null;

    /**
     * @var string $signaturePolicyImplied
     */
    private $signaturePolicyImplied = null;

    /**
     * Gets as signaturePolicyId
     *
     * @return \horstoeko\ubl\entities\xades\SignaturePolicyIdType
     */
    public function getSignaturePolicyId()
    {
        return $this->signaturePolicyId;
    }

    /**
     * Sets a new signaturePolicyId
     *
     * @param \horstoeko\ubl\entities\xades\SignaturePolicyIdType $signaturePolicyId
     * @return self
     */
    public function setSignaturePolicyId(\horstoeko\ubl\entities\xades\SignaturePolicyIdType $signaturePolicyId)
    {
        $this->signaturePolicyId = $signaturePolicyId;
        return $this;
    }

    /**
     * Gets as signaturePolicyImplied
     *
     * @return string
     */
    public function getSignaturePolicyImplied()
    {
        return $this->signaturePolicyImplied;
    }

    /**
     * Sets a new signaturePolicyImplied
     *
     * @param string $signaturePolicyImplied
     * @return self
     */
    public function setSignaturePolicyImplied($signaturePolicyImplied)
    {
        $this->signaturePolicyImplied = $signaturePolicyImplied;
        return $this;
    }


}

