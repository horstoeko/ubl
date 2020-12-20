<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CompleteRevocationRefsType
 *
 * XSD Type: CompleteRevocationRefsType
 */
class CompleteRevocationRefsType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\CRLRefType[] $cRLRefs
     */
    private $cRLRefs = null;

    /**
     * @var \horstoeko\ubl\entities\xades\OCSPRefType[] $oCSPRefs
     */
    private $oCSPRefs = null;

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $otherRefs
     */
    private $otherRefs = null;

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
     * Adds as cRLRef
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CRLRefType $cRLRef
     */
    public function addToCRLRefs(\horstoeko\ubl\entities\xades\CRLRefType $cRLRef)
    {
        $this->cRLRefs[] = $cRLRef;
        return $this;
    }

    /**
     * isset cRLRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCRLRefs($index)
    {
        return isset($this->cRLRefs[$index]);
    }

    /**
     * unset cRLRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCRLRefs($index)
    {
        unset($this->cRLRefs[$index]);
    }

    /**
     * Gets as cRLRefs
     *
     * @return \horstoeko\ubl\entities\xades\CRLRefType[]
     */
    public function getCRLRefs()
    {
        return $this->cRLRefs;
    }

    /**
     * Sets a new cRLRefs
     *
     * @param  \horstoeko\ubl\entities\xades\CRLRefType[] $cRLRefs
     * @return self
     */
    public function setCRLRefs(array $cRLRefs)
    {
        $this->cRLRefs = $cRLRefs;
        return $this;
    }

    /**
     * Adds as oCSPRef
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\OCSPRefType $oCSPRef
     */
    public function addToOCSPRefs(\horstoeko\ubl\entities\xades\OCSPRefType $oCSPRef)
    {
        $this->oCSPRefs[] = $oCSPRef;
        return $this;
    }

    /**
     * isset oCSPRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOCSPRefs($index)
    {
        return isset($this->oCSPRefs[$index]);
    }

    /**
     * unset oCSPRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOCSPRefs($index)
    {
        unset($this->oCSPRefs[$index]);
    }

    /**
     * Gets as oCSPRefs
     *
     * @return \horstoeko\ubl\entities\xades\OCSPRefType[]
     */
    public function getOCSPRefs()
    {
        return $this->oCSPRefs;
    }

    /**
     * Sets a new oCSPRefs
     *
     * @param  \horstoeko\ubl\entities\xades\OCSPRefType[] $oCSPRefs
     * @return self
     */
    public function setOCSPRefs(array $oCSPRefs)
    {
        $this->oCSPRefs = $oCSPRefs;
        return $this;
    }

    /**
     * Adds as otherRef
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\AnyType $otherRef
     */
    public function addToOtherRefs(\horstoeko\ubl\entities\xades\AnyType $otherRef)
    {
        $this->otherRefs[] = $otherRef;
        return $this;
    }

    /**
     * isset otherRefs
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetOtherRefs($index)
    {
        return isset($this->otherRefs[$index]);
    }

    /**
     * unset otherRefs
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetOtherRefs($index)
    {
        unset($this->otherRefs[$index]);
    }

    /**
     * Gets as otherRefs
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getOtherRefs()
    {
        return $this->otherRefs;
    }

    /**
     * Sets a new otherRefs
     *
     * @param  \horstoeko\ubl\entities\xades\AnyType[] $otherRefs
     * @return self
     */
    public function setOtherRefs(array $otherRefs)
    {
        $this->otherRefs = $otherRefs;
        return $this;
    }


}

