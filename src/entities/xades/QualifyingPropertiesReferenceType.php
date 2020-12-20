<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing QualifyingPropertiesReferenceType
 *
 * XSD Type: QualifyingPropertiesReferenceType
 */
class QualifyingPropertiesReferenceType
{

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param  string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
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


}

