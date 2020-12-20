<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CounterSignatureType
 *
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{

    /**
     * @var \horstoeko\ubl\entities\ds\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \horstoeko\ubl\entities\ds\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param  \horstoeko\ubl\entities\ds\Signature $signature
     * @return self
     */
    public function setSignature(\horstoeko\ubl\entities\ds\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

