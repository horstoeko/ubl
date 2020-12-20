<?php

namespace horstoeko\ubl\entities\cct;

/**
 * Class representing BinaryObjectType
 *
 * UNDT000002
 *  CCT
 *  Binary Object. Type
 *  1.0
 *  A set of finite-length sequences of binary octets.
 *  Binary Object
 *  binary
 * XSD Type: BinaryObjectType
 */
class BinaryObjectType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * UNDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
     *  Format
     *  Text
     *  string
     *
     * @var string $format
     */
    private $format = null;

    /**
     * UNDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
     *  Mime
     *  Code
     *  string
     *
     * @var string $mimeCode
     */
    private $mimeCode = null;

    /**
     * UNDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
     *  Encoding
     *  Code
     *  string
     *
     * @var string $encodingCode
     */
    private $encodingCode = null;

    /**
     * UNDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *
     * @var string $characterSetCode
     */
    private $characterSetCode = null;

    /**
     * UNDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @var string $uri
     */
    private $uri = null;

    /**
     * UNDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
     *  Filename
     *  Text
     *  string
     *
     * @var string $filename
     */
    private $filename = null;

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
     * Gets as format
     *
     * UNDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
     *  Format
     *  Text
     *  string
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * UNDT000002-SC2
     *  SC
     *  Binary Object. Format. Text
     *  The format of the binary content.
     *  Binary Object
     *  Format
     *  Text
     *  string
     *
     * @param  string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as mimeCode
     *
     * UNDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
     *  Mime
     *  Code
     *  string
     *
     * @return string
     */
    public function getMimeCode()
    {
        return $this->mimeCode;
    }

    /**
     * Sets a new mimeCode
     *
     * UNDT000002-SC3
     *  SC
     *  Binary Object. Mime. Code
     *  The mime type of the binary object.
     *  Binary Object
     *  Mime
     *  Code
     *  string
     *
     * @param  string $mimeCode
     * @return self
     */
    public function setMimeCode($mimeCode)
    {
        $this->mimeCode = $mimeCode;
        return $this;
    }

    /**
     * Gets as encodingCode
     *
     * UNDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
     *  Encoding
     *  Code
     *  string
     *
     * @return string
     */
    public function getEncodingCode()
    {
        return $this->encodingCode;
    }

    /**
     * Sets a new encodingCode
     *
     * UNDT000002-SC4
     *  SC
     *  Binary Object. Encoding. Code
     *  Specifies the decoding algorithm of the binary object.
     *  Binary Object
     *  Encoding
     *  Code
     *  string
     *
     * @param  string $encodingCode
     * @return self
     */
    public function setEncodingCode($encodingCode)
    {
        $this->encodingCode = $encodingCode;
        return $this;
    }

    /**
     * Gets as characterSetCode
     *
     * UNDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *
     * @return string
     */
    public function getCharacterSetCode()
    {
        return $this->characterSetCode;
    }

    /**
     * Sets a new characterSetCode
     *
     * UNDT000002-SC5
     *  SC
     *  Binary Object. Character Set. Code
     *  The character set of the binary object if the mime type is text.
     *  Binary Object
     *  Character Set
     *  Code
     *  string
     *
     * @param  string $characterSetCode
     * @return self
     */
    public function setCharacterSetCode($characterSetCode)
    {
        $this->characterSetCode = $characterSetCode;
        return $this;
    }

    /**
     * Gets as uri
     *
     * UNDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Sets a new uri
     *
     * UNDT000002-SC6
     *  SC
     *  Binary Object. Uniform Resource. Identifier
     *  The Uniform Resource Identifier that identifies where the binary object is located.
     *  Binary Object
     *  Uniform Resource Identifier
     *  Identifier
     *  string
     *
     * @param  string $uri
     * @return self
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * Gets as filename
     *
     * UNDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
     *  Filename
     *  Text
     *  string
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Sets a new filename
     *
     * UNDT000002-SC7
     *  SC
     *  Binary Object. Filename.Text
     *  The filename of the binary object.
     *  Binary Object
     *  Filename
     *  Text
     *  string
     *
     * @param  string $filename
     * @return self
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }


}

