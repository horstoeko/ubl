<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing GenericTimeStampType
 *
 *
 * XSD Type: GenericTimeStampType
 */
class GenericTimeStampType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\IncludeXsd[] $include
     */
    private $include = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\ReferenceInfo[] $referenceInfo
     */
    private $referenceInfo = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = [
        
    ];

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $xMLTimeStamp
     */
    private $xMLTimeStamp = [
        
    ];

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
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as include
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\IncludeXsd $include
     */
    public function addToInclude(\horstoeko\ubl\entities\xades\IncludeXsd $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * @return \horstoeko\ubl\entities\xades\IncludeXsd[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * @param \horstoeko\ubl\entities\xades\IncludeXsd[] $include
     * @return self
     */
    public function setInclude(array $include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Adds as referenceInfo
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\ReferenceInfo $referenceInfo
     */
    public function addToReferenceInfo(\horstoeko\ubl\entities\xades\ReferenceInfo $referenceInfo)
    {
        $this->referenceInfo[] = $referenceInfo;
        return $this;
    }

    /**
     * isset referenceInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceInfo($index)
    {
        return isset($this->referenceInfo[$index]);
    }

    /**
     * unset referenceInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceInfo($index)
    {
        unset($this->referenceInfo[$index]);
    }

    /**
     * Gets as referenceInfo
     *
     * @return \horstoeko\ubl\entities\xades\ReferenceInfo[]
     */
    public function getReferenceInfo()
    {
        return $this->referenceInfo;
    }

    /**
     * Sets a new referenceInfo
     *
     * @param \horstoeko\ubl\entities\xades\ReferenceInfo[] $referenceInfo
     * @return self
     */
    public function setReferenceInfo(array $referenceInfo)
    {
        $this->referenceInfo = $referenceInfo;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return \horstoeko\ubl\entities\ds\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Adds as encapsulatedTimeStamp
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    public function addToEncapsulatedTimeStamp(\horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp[] = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * isset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedTimeStamp($index)
    {
        return isset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * unset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedTimeStamp($index)
    {
        unset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(array $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Adds as xMLTimeStamp
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\AnyType $xMLTimeStamp
     */
    public function addToXMLTimeStamp(\horstoeko\ubl\entities\xades\AnyType $xMLTimeStamp)
    {
        $this->xMLTimeStamp[] = $xMLTimeStamp;
        return $this;
    }

    /**
     * isset xMLTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXMLTimeStamp($index)
    {
        return isset($this->xMLTimeStamp[$index]);
    }

    /**
     * unset xMLTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXMLTimeStamp($index)
    {
        unset($this->xMLTimeStamp[$index]);
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \horstoeko\ubl\entities\xades\AnyType[] $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(array $xMLTimeStamp)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }


}

