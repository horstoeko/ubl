<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing UnsignedPropertiesType
 *
 *
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \horstoeko\ubl\entities\xades\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \horstoeko\ubl\entities\xades\UnsignedSignaturePropertiesType
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \horstoeko\ubl\entities\xades\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(\horstoeko\ubl\entities\xades\UnsignedSignaturePropertiesType $unsignedSignatureProperties)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \horstoeko\ubl\entities\xades\UnsignedDataObjectPropertiesType
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \horstoeko\ubl\entities\xades\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(\horstoeko\ubl\entities\xades\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }


}

