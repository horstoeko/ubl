<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing IdentifierType
 *
 * UNDT000011
 *  CCT
 *  Identifier. Type
 *  1.0
 *  A character string to identify and distinguish uniquely, one instance of an object in an identification scheme from all other objects in the same scheme together with relevant supplementary information.
 *  Identifier
 *  string
 * XSD Type: IdentifierType
 */
class IdentifierType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000011-SC2
     *  SC
     *  Identification Scheme. Identifier
     *  The identification of the identification scheme.
     *  Identification Scheme
     *  Identification
     *  Identifier
     *  string
     *
     * @var string $schemeID
     */
    private $schemeID = null;

    /**
     * UNDT000011-SC3
     *  SC
     *  Identification Scheme. Name. Text
     *  The name of the identification scheme.
     *  Identification Scheme
     *  Name
     *  Text
     *  string
     *
     * @var string $schemeName
     */
    private $schemeName = null;

    /**
     * UNDT000011-SC4
     *  SC
     *  Identification Scheme Agency. Identifier
     *  The identification of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Identification
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var string $schemeAgencyID
     */
    private $schemeAgencyID = null;

    /**
     * UNDT000011-SC5
     *  SC
     *  Identification Scheme Agency. Name. Text
     *  The name of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Agency Name
     *  Text
     *  string
     *
     * @var string $schemeAgencyName
     */
    private $schemeAgencyName = null;

    /**
     * UNDT000011-SC6
     *  SC
     *  Identification Scheme. Version. Identifier
     *  The version of the identification scheme.
     *  Identification Scheme
     *  Version
     *  Identifier
     *  string
     *
     * @var string $schemeVersionID
     */
    private $schemeVersionID = null;

    /**
     * UNDT000011-SC7
     *  SC
     *  Identification Scheme Data. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme data is located.
     *  Identification Scheme Data
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @var string $schemeDataURI
     */
    private $schemeDataURI = null;

    /**
     * UNDT000011-SC8
     *  SC
     *  Identification Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme is located.
     *  Identification Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @var string $schemeURI
     */
    private $schemeURI = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param  string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as schemeID
     *
     * UNDT000011-SC2
     *  SC
     *  Identification Scheme. Identifier
     *  The identification of the identification scheme.
     *  Identification Scheme
     *  Identification
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getSchemeID()
    {
        return $this->schemeID;
    }

    /**
     * Sets a new schemeID
     *
     * UNDT000011-SC2
     *  SC
     *  Identification Scheme. Identifier
     *  The identification of the identification scheme.
     *  Identification Scheme
     *  Identification
     *  Identifier
     *  string
     *
     * @param  string $schemeID
     * @return self
     */
    public function setSchemeID($schemeID)
    {
        $this->schemeID = $schemeID;
        return $this;
    }

    /**
     * Gets as schemeName
     *
     * UNDT000011-SC3
     *  SC
     *  Identification Scheme. Name. Text
     *  The name of the identification scheme.
     *  Identification Scheme
     *  Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getSchemeName()
    {
        return $this->schemeName;
    }

    /**
     * Sets a new schemeName
     *
     * UNDT000011-SC3
     *  SC
     *  Identification Scheme. Name. Text
     *  The name of the identification scheme.
     *  Identification Scheme
     *  Name
     *  Text
     *  string
     *
     * @param  string $schemeName
     * @return self
     */
    public function setSchemeName($schemeName)
    {
        $this->schemeName = $schemeName;
        return $this;
    }

    /**
     * Gets as schemeAgencyID
     *
     * UNDT000011-SC4
     *  SC
     *  Identification Scheme Agency. Identifier
     *  The identification of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Identification
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return string
     */
    public function getSchemeAgencyID()
    {
        return $this->schemeAgencyID;
    }

    /**
     * Sets a new schemeAgencyID
     *
     * UNDT000011-SC4
     *  SC
     *  Identification Scheme Agency. Identifier
     *  The identification of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Identification
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param  string $schemeAgencyID
     * @return self
     */
    public function setSchemeAgencyID($schemeAgencyID)
    {
        $this->schemeAgencyID = $schemeAgencyID;
        return $this;
    }

    /**
     * Gets as schemeAgencyName
     *
     * UNDT000011-SC5
     *  SC
     *  Identification Scheme Agency. Name. Text
     *  The name of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Agency Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getSchemeAgencyName()
    {
        return $this->schemeAgencyName;
    }

    /**
     * Sets a new schemeAgencyName
     *
     * UNDT000011-SC5
     *  SC
     *  Identification Scheme Agency. Name. Text
     *  The name of the agency that maintains the identification scheme.
     *  Identification Scheme Agency
     *  Agency Name
     *  Text
     *  string
     *
     * @param  string $schemeAgencyName
     * @return self
     */
    public function setSchemeAgencyName($schemeAgencyName)
    {
        $this->schemeAgencyName = $schemeAgencyName;
        return $this;
    }

    /**
     * Gets as schemeVersionID
     *
     * UNDT000011-SC6
     *  SC
     *  Identification Scheme. Version. Identifier
     *  The version of the identification scheme.
     *  Identification Scheme
     *  Version
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getSchemeVersionID()
    {
        return $this->schemeVersionID;
    }

    /**
     * Sets a new schemeVersionID
     *
     * UNDT000011-SC6
     *  SC
     *  Identification Scheme. Version. Identifier
     *  The version of the identification scheme.
     *  Identification Scheme
     *  Version
     *  Identifier
     *  string
     *
     * @param  string $schemeVersionID
     * @return self
     */
    public function setSchemeVersionID($schemeVersionID)
    {
        $this->schemeVersionID = $schemeVersionID;
        return $this;
    }

    /**
     * Gets as schemeDataURI
     *
     * UNDT000011-SC7
     *  SC
     *  Identification Scheme Data. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme data is located.
     *  Identification Scheme Data
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getSchemeDataURI()
    {
        return $this->schemeDataURI;
    }

    /**
     * Sets a new schemeDataURI
     *
     * UNDT000011-SC7
     *  SC
     *  Identification Scheme Data. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme data is located.
     *  Identification Scheme Data
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @param  string $schemeDataURI
     * @return self
     */
    public function setSchemeDataURI($schemeDataURI)
    {
        $this->schemeDataURI = $schemeDataURI;
        return $this;
    }

    /**
     * Gets as schemeURI
     *
     * UNDT000011-SC8
     *  SC
     *  Identification Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme is located.
     *  Identification Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * Sets a new schemeURI
     *
     * UNDT000011-SC8
     *  SC
     *  Identification Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the identification scheme is located.
     *  Identification Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @param  string $schemeURI
     * @return self
     */
    public function setSchemeURI($schemeURI)
    {
        $this->schemeURI = $schemeURI;
        return $this;
    }


}

