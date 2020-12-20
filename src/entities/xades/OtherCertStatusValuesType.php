<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing OtherCertStatusValuesType
 *
 * XSD Type: OtherCertStatusValuesType
 */
class OtherCertStatusValuesType
{

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $otherValue
     */
    private $otherValue = [
        
    ];

    /**
     * Adds as otherValue
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\AnyType $otherValue
     */
    public function addToOtherValue(\horstoeko\ubl\entities\xades\AnyType $otherValue)
    {
        $this->otherValue[] = $otherValue;
        return $this;
    }

    /**
     * isset otherValue
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOtherValue($index)
    {
        return isset($this->otherValue[$index]);
    }

    /**
     * unset otherValue
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOtherValue($index)
    {
        unset($this->otherValue[$index]);
    }

    /**
     * Gets as otherValue
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getOtherValue()
    {
        return $this->otherValue;
    }

    /**
     * Sets a new otherValue
     *
     * @param  \horstoeko\ubl\entities\xades\AnyType[] $otherValue
     * @return self
     */
    public function setOtherValue(array $otherValue)
    {
        $this->otherValue = $otherValue;
        return $this;
    }


}

