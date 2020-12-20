<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing TextType
 *
 * UNDT000019
 *  CCT
 *  Text. Type
 *  1.0
 *  A character string (i.e. a finite set of characters) generally in the form of words of a language.
 *  Text
 *  string
 * XSD Type: TextType
 */
class TextType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
     *  Language
     *  Identification
     *  Identifier
     *  string
     *
     * @var string $languageID
     */
    private $languageID = null;

    /**
     * UNDT000019-SC3
     *  SC
     *  Language. Locale. Identifier
     *  The identification of the locale of the language.
     *  Language
     *  Locale
     *  Identifier
     *  string
     *
     * @var string $languageLocaleID
     */
    private $languageLocaleID = null;

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
     * Gets as languageID
     *
     * UNDT000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
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
     * UNDT000019-SC2
     *  SC
     *  Language. Identifier
     *  The identifier of the language used in the content component.
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
     * Gets as languageLocaleID
     *
     * UNDT000019-SC3
     *  SC
     *  Language. Locale. Identifier
     *  The identification of the locale of the language.
     *  Language
     *  Locale
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getLanguageLocaleID()
    {
        return $this->languageLocaleID;
    }

    /**
     * Sets a new languageLocaleID
     *
     * UNDT000019-SC3
     *  SC
     *  Language. Locale. Identifier
     *  The identification of the locale of the language.
     *  Language
     *  Locale
     *  Identifier
     *  string
     *
     * @param  string $languageLocaleID
     * @return self
     */
    public function setLanguageLocaleID($languageLocaleID)
    {
        $this->languageLocaleID = $languageLocaleID;
        return $this;
    }


}

