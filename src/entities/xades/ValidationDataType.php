<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing ValidationDataType
 *
 * XSD Type: ValidationDataType
 */
class ValidationDataType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $uR
     */
    private $uR = null;

    /**
     * @var \horstoeko\ubl\entities\xades\CertificateValues $certificateValues
     */
    private $certificateValues = null;

    /**
     * @var \horstoeko\ubl\entities\xades\RevocationValues $revocationValues
     */
    private $revocationValues = null;

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
     * Gets as uR
     *
     * @return string
     */
    public function getUR()
    {
        return $this->uR;
    }

    /**
     * Sets a new uR
     *
     * @param  string $uR
     * @return self
     */
    public function setUR($uR)
    {
        $this->uR = $uR;
        return $this;
    }

    /**
     * Gets as certificateValues
     *
     * @return \horstoeko\ubl\entities\xades\CertificateValues
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param  \horstoeko\ubl\entities\xades\CertificateValues $certificateValues
     * @return self
     */
    public function setCertificateValues(\horstoeko\ubl\entities\xades\CertificateValues $certificateValues)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Gets as revocationValues
     *
     * @return \horstoeko\ubl\entities\xades\RevocationValues
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param  \horstoeko\ubl\entities\xades\RevocationValues $revocationValues
     * @return self
     */
    public function setRevocationValues(\horstoeko\ubl\entities\xades\RevocationValues $revocationValues)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }


}

