<?php

namespace horstoeko\ubl\entities\ds;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\ds\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \horstoeko\ubl\entities\ds\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \horstoeko\ubl\entities\ds\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \horstoeko\ubl\entities\ds\ObjectXsd[] $object
     */
    private $object = [
        
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
     * Gets as signedInfo
     *
     * @return \horstoeko\ubl\entities\ds\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \horstoeko\ubl\entities\ds\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\horstoeko\ubl\entities\ds\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \horstoeko\ubl\entities\ds\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \horstoeko\ubl\entities\ds\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\horstoeko\ubl\entities\ds\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \horstoeko\ubl\entities\ds\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \horstoeko\ubl\entities\ds\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\horstoeko\ubl\entities\ds\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \horstoeko\ubl\entities\ds\ObjectXsd $object
     */
    public function addToObject(\horstoeko\ubl\entities\ds\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \horstoeko\ubl\entities\ds\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \horstoeko\ubl\entities\ds\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

