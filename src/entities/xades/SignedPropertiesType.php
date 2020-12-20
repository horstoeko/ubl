<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SignedPropertiesType
 *
 * XSD Type: SignedPropertiesType
 */
class SignedPropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignedSignaturePropertiesType $signedSignatureProperties
     */
    private $signedSignatureProperties = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignedDataObjectPropertiesType $signedDataObjectProperties
     */
    private $signedDataObjectProperties = null;

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
     * Gets as signedSignatureProperties
     *
     * @return \horstoeko\ubl\entities\xades\SignedSignaturePropertiesType
     */
    public function getSignedSignatureProperties()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * Sets a new signedSignatureProperties
     *
     * @param  \horstoeko\ubl\entities\xades\SignedSignaturePropertiesType $signedSignatureProperties
     * @return self
     */
    public function setSignedSignatureProperties(\horstoeko\ubl\entities\xades\SignedSignaturePropertiesType $signedSignatureProperties)
    {
        $this->signedSignatureProperties = $signedSignatureProperties;
        return $this;
    }

    /**
     * Gets as signedDataObjectProperties
     *
     * @return \horstoeko\ubl\entities\xades\SignedDataObjectPropertiesType
     */
    public function getSignedDataObjectProperties()
    {
        return $this->signedDataObjectProperties;
    }

    /**
     * Sets a new signedDataObjectProperties
     *
     * @param  \horstoeko\ubl\entities\xades\SignedDataObjectPropertiesType $signedDataObjectProperties
     * @return self
     */
    public function setSignedDataObjectProperties(\horstoeko\ubl\entities\xades\SignedDataObjectPropertiesType $signedDataObjectProperties)
    {
        $this->signedDataObjectProperties = $signedDataObjectProperties;
        return $this;
    }


}

