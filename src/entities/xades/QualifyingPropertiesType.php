<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing QualifyingPropertiesType
 *
 * XSD Type: QualifyingPropertiesType
 */
class QualifyingPropertiesType
{

    /**
     * @var string $target
     */
    private $target = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \horstoeko\ubl\entities\xades\SignedPropertiesType $signedProperties
     */
    private $signedProperties = null;

    /**
     * @var \horstoeko\ubl\entities\xades\UnsignedPropertiesType $unsignedProperties
     */
    private $unsignedProperties = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param  string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

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
     * Gets as signedProperties
     *
     * @return \horstoeko\ubl\entities\xades\SignedPropertiesType
     */
    public function getSignedProperties()
    {
        return $this->signedProperties;
    }

    /**
     * Sets a new signedProperties
     *
     * @param  \horstoeko\ubl\entities\xades\SignedPropertiesType $signedProperties
     * @return self
     */
    public function setSignedProperties(\horstoeko\ubl\entities\xades\SignedPropertiesType $signedProperties)
    {
        $this->signedProperties = $signedProperties;
        return $this;
    }

    /**
     * Gets as unsignedProperties
     *
     * @return \horstoeko\ubl\entities\xades\UnsignedPropertiesType
     */
    public function getUnsignedProperties()
    {
        return $this->unsignedProperties;
    }

    /**
     * Sets a new unsignedProperties
     *
     * @param  \horstoeko\ubl\entities\xades\UnsignedPropertiesType $unsignedProperties
     * @return self
     */
    public function setUnsignedProperties(\horstoeko\ubl\entities\xades\UnsignedPropertiesType $unsignedProperties)
    {
        $this->unsignedProperties = $unsignedProperties;
        return $this;
    }


}

