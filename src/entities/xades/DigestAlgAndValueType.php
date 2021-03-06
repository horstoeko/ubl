<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing DigestAlgAndValueType
 *
 * XSD Type: DigestAlgAndValueType
 */
class DigestAlgAndValueType
{

    /**
     * @var \horstoeko\ubl\entities\ds\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var string $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as digestMethod
     *
     * @return \horstoeko\ubl\entities\ds\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param  \horstoeko\ubl\entities\ds\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\horstoeko\ubl\entities\ds\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return string
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param  string $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }


}

