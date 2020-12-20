<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing OCSPRefsType
 *
 * XSD Type: OCSPRefsType
 */
class OCSPRefsType
{

    /**
     * @var \horstoeko\ubl\entities\xades\OCSPRefType[] $oCSPRef
     */
    private $oCSPRef = [
        
    ];

    /**
     * Adds as oCSPRef
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\OCSPRefType $oCSPRef
     */
    public function addToOCSPRef(\horstoeko\ubl\entities\xades\OCSPRefType $oCSPRef)
    {
        $this->oCSPRef[] = $oCSPRef;
        return $this;
    }

    /**
     * isset oCSPRef
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOCSPRef($index)
    {
        return isset($this->oCSPRef[$index]);
    }

    /**
     * unset oCSPRef
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOCSPRef($index)
    {
        unset($this->oCSPRef[$index]);
    }

    /**
     * Gets as oCSPRef
     *
     * @return \horstoeko\ubl\entities\xades\OCSPRefType[]
     */
    public function getOCSPRef()
    {
        return $this->oCSPRef;
    }

    /**
     * Sets a new oCSPRef
     *
     * @param  \horstoeko\ubl\entities\xades\OCSPRefType[] $oCSPRef
     * @return self
     */
    public function setOCSPRef(array $oCSPRef)
    {
        $this->oCSPRef = $oCSPRef;
        return $this;
    }


}

