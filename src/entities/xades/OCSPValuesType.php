<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing OCSPValuesType
 *
 *
 * XSD Type: OCSPValuesType
 */
class OCSPValuesType
{

    /**
     * @var \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     */
    private $encapsulatedOCSPValue = [
        
    ];

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToEncapsulatedOCSPValue(\horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedOCSPValue($index)
    {
        return isset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * unset encapsulatedOCSPValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedOCSPValue($index)
    {
        unset($this->encapsulatedOCSPValue[$index]);
    }

    /**
     * Gets as encapsulatedOCSPValue
     *
     * @return \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedOCSPValue()
    {
        return $this->encapsulatedOCSPValue;
    }

    /**
     * Sets a new encapsulatedOCSPValue
     *
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedOCSPValue
     * @return self
     */
    public function setEncapsulatedOCSPValue(array $encapsulatedOCSPValue)
    {
        $this->encapsulatedOCSPValue = $encapsulatedOCSPValue;
        return $this;
    }


}

