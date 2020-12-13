<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LanguageType
 *
 * ABIE
 *  Language. Details
 *  Information about Language.
 *  Language
 * XSD Type: LanguageType
 */
class LanguageType
{

    /**
     * BBIE
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Language. Identifier
     *  An identifier for a language, expressed as a code.
     *  0..1
     *  Language
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Language. Name
     *  The name of the language.
     *  0..1
     *  Language
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Language. Locale Code. Code
     *  The locale where the language is used, expressed as a code.
     *  0..1
     *  Language
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(\horstoeko\ubl\entities\cbc\LocaleCode $localeCode)
    {
        $this->localeCode = $localeCode;
        return $this;
    }


}

