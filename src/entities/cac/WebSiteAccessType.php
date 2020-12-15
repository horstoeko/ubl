<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing WebSiteAccessType
 *
 * ABIE
 *  Web Site Access. Details
 *  A class to describe access to a web site.
 *  Web Site Access
 * XSD Type: WebSiteAccessType
 */
class WebSiteAccessType
{

    /**
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @var \horstoeko\ubl\entities\cbc\Password $password
     */
    private $password = null;

    /**
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @var \horstoeko\ubl\entities\cbc\Login $login
     */
    private $login = null;

    /**
     * Gets as uRI
     *
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Web Site Access. URI. Identifier
     *  The Uniform Resource Identifier (URI) for this web site; i.e., its Uniform Resource Locator (URL).
     *  0..1
     *  Web Site Access
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\URI $uRI
     * @return self
     */
    public function setURI(\horstoeko\ubl\entities\cbc\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as password
     *
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @return \horstoeko\ubl\entities\cbc\Password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * BBIE
     *  Web Site Access. Password. Text
     *  A password to the web site.
     *  1
     *  Web Site Access
     *  Password
     *  Text
     *  Text. Type
     *  confidence
     *
     * @param \horstoeko\ubl\entities\cbc\Password $password
     * @return self
     */
    public function setPassword(\horstoeko\ubl\entities\cbc\Password $password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as login
     *
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @return \horstoeko\ubl\entities\cbc\Login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * BBIE
     *  Web Site Access. Login. Text
     *  Text describing login details.
     *  1
     *  Web Site Access
     *  Login
     *  Text
     *  Text. Type
     *  Utsuser
     *
     * @param \horstoeko\ubl\entities\cbc\Login $login
     * @return self
     */
    public function setLogin(\horstoeko\ubl\entities\cbc\Login $login)
    {
        $this->login = $login;
        return $this;
    }


}

