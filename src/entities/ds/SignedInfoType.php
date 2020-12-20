<?php

namespace horstoeko\ubl\entities\ds;

/**
 * Class representing SignedInfoType
 *
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \horstoeko\ubl\entities\ds\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @var \horstoeko\ubl\entities\ds\Reference[] $reference
     */
    private $reference = [
        
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
     * @param  string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @param  \horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\horstoeko\ubl\entities\ds\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return \horstoeko\ubl\entities\ds\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param  \horstoeko\ubl\entities\ds\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\horstoeko\ubl\entities\ds\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param  \horstoeko\ubl\entities\ds\Reference $reference
     */
    public function addToReference(\horstoeko\ubl\entities\ds\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \horstoeko\ubl\entities\ds\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param  \horstoeko\ubl\entities\ds\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

