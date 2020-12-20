<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing CodeType
 *
 * UNDT000007
 *  CCT
 *  Code. Type
 *  1.0
 *  A character string (letters, figures, or symbols) that for brevity and/or languange independence may be used to represent or replace a definitive value or text of an attribute together with relevant supplementary information.
 *  Code
 *  string
 *  Should not be used if the character string identifies an instance of an object class or an object in the real world, in which case the Identifier. Type should be used.
 * XSD Type: CodeType
 */
class CodeType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @var string $listID
     */
    private $listID = null;

    /**
     * UNDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var string $listAgencyID
     */
    private $listAgencyID = null;

    /**
     * UNDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @var string $listAgencyName
     */
    private $listAgencyName = null;

    /**
     * UNDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @var string $listName
     */
    private $listName = null;

    /**
     * UNDT000007-SC6
     *  SC
     *  Code List. Version. Identifier
     *  The version of the list of codes.
     *  Code List
     *  Version
     *  Identifier
     *  string
     *
     * @var string $listVersionID
     */
    private $listVersionID = null;

    /**
     * UNDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *
     * @var string $name
     */
    private $name = null;

    /**
     * UNDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *
     * @var string $languageID
     */
    private $languageID = null;

    /**
     * UNDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @var string $listURI
     */
    private $listURI = null;

    /**
     * UNDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @var string $listSchemeURI
     */
    private $listSchemeURI = null;

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
     * Gets as listID
     *
     * UNDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getListID()
    {
        return $this->listID;
    }

    /**
     * Sets a new listID
     *
     * UNDT000007-SC2
     *  SC
     *  Code List. Identifier
     *  The identification of a list of codes.
     *  Code List
     *  Identification
     *  Identifier
     *  string
     *
     * @param  string $listID
     * @return self
     */
    public function setListID($listID)
    {
        $this->listID = $listID;
        return $this;
    }

    /**
     * Gets as listAgencyID
     *
     * UNDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return string
     */
    public function getListAgencyID()
    {
        return $this->listAgencyID;
    }

    /**
     * Sets a new listAgencyID
     *
     * UNDT000007-SC3
     *  SC
     *  Code List. Agency. Identifier
     *  An agency that maintains one or more lists of codes.
     *  Code List
     *  Agency
     *  Identifier
     *  string
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param  string $listAgencyID
     * @return self
     */
    public function setListAgencyID($listAgencyID)
    {
        $this->listAgencyID = $listAgencyID;
        return $this;
    }

    /**
     * Gets as listAgencyName
     *
     * UNDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getListAgencyName()
    {
        return $this->listAgencyName;
    }

    /**
     * Sets a new listAgencyName
     *
     * UNDT000007-SC4
     *  SC
     *  Code List. Agency Name. Text
     *  The name of the agency that maintains the list of codes.
     *  Code List
     *  Agency Name
     *  Text
     *  string
     *
     * @param  string $listAgencyName
     * @return self
     */
    public function setListAgencyName($listAgencyName)
    {
        $this->listAgencyName = $listAgencyName;
        return $this;
    }

    /**
     * Gets as listName
     *
     * UNDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getListName()
    {
        return $this->listName;
    }

    /**
     * Sets a new listName
     *
     * UNDT000007-SC5
     *  SC
     *  Code List. Name. Text
     *  The name of a list of codes.
     *  Code List
     *  Name
     *  Text
     *  string
     *
     * @param  string $listName
     * @return self
     */
    public function setListName($listName)
    {
        $this->listName = $listName;
        return $this;
    }

    /**
     * Gets as listVersionID
     *
     * UNDT000007-SC6
     *  SC
     *  Code List. Version. Identifier
     *  The version of the list of codes.
     *  Code List
     *  Version
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getListVersionID()
    {
        return $this->listVersionID;
    }

    /**
     * Sets a new listVersionID
     *
     * UNDT000007-SC6
     *  SC
     *  Code List. Version. Identifier
     *  The version of the list of codes.
     *  Code List
     *  Version
     *  Identifier
     *  string
     *
     * @param  string $listVersionID
     * @return self
     */
    public function setListVersionID($listVersionID)
    {
        $this->listVersionID = $listVersionID;
        return $this;
    }

    /**
     * Gets as name
     *
     * UNDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * UNDT000007-SC7
     *  SC
     *  Code. Name. Text
     *  The textual equivalent of the code content component.
     *  Code
     *  Name
     *  Text
     *  string
     *
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * UNDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * UNDT000007-SC8
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the code name.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *
     * @param  string $languageID
     * @return self
     */
    public function setLanguageID($languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Gets as listURI
     *
     * UNDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getListURI()
    {
        return $this->listURI;
    }

    /**
     * Sets a new listURI
     *
     * UNDT000007-SC9
     *  SC
     *  Code List. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list is located.
     *  Code List
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @param  string $listURI
     * @return self
     */
    public function setListURI($listURI)
    {
        $this->listURI = $listURI;
        return $this;
    }

    /**
     * Gets as listSchemeURI
     *
     * UNDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getListSchemeURI()
    {
        return $this->listSchemeURI;
    }

    /**
     * Sets a new listSchemeURI
     *
     * UNDT000007-SC10
     *  SC
     *  Code List Scheme. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the code list scheme is located.
     *  Code List Scheme
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @param  string $listSchemeURI
     * @return self
     */
    public function setListSchemeURI($listSchemeURI)
    {
        $this->listSchemeURI = $listSchemeURI;
        return $this;
    }


}

