<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing OtherCertStatusRefsType
 *
 *
 * XSD Type: OtherCertStatusRefsType
 */
class OtherCertStatusRefsType
{

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $otherRef
     */
    private $otherRef = [
        
    ];

    /**
     * Adds as otherRef
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\AnyType $otherRef
     */
    public function addToOtherRef(\horstoeko\ubl\entities\xades\AnyType $otherRef)
    {
        $this->otherRef[] = $otherRef;
        return $this;
    }

    /**
     * isset otherRef
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherRef($index)
    {
        return isset($this->otherRef[$index]);
    }

    /**
     * unset otherRef
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherRef($index)
    {
        unset($this->otherRef[$index]);
    }

    /**
     * Gets as otherRef
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getOtherRef()
    {
        return $this->otherRef;
    }

    /**
     * Sets a new otherRef
     *
     * @param \horstoeko\ubl\entities\xades\AnyType[] $otherRef
     * @return self
     */
    public function setOtherRef(array $otherRef)
    {
        $this->otherRef = $otherRef;
        return $this;
    }


}

