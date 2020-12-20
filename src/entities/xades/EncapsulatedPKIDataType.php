<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing EncapsulatedPKIDataType
 *
 * XSD Type: EncapsulatedPKIDataType
 */
class EncapsulatedPKIDataType
{

    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $encoding
     */
    private $encoding = null;

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
     * Gets as encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets a new encoding
     *
     * @param  string $encoding
     * @return self
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }


}

