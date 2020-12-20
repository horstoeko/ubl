<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing IncludeType
 *
 * XSD Type: IncludeType
 */
class IncludeType
{

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var bool $referencedData
     */
    private $referencedData = null;

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
     * Gets as referencedData
     *
     * @return bool
     */
    public function getReferencedData()
    {
        return $this->referencedData;
    }

    /**
     * Sets a new referencedData
     *
     * @param  bool $referencedData
     * @return self
     */
    public function setReferencedData($referencedData)
    {
        $this->referencedData = $referencedData;
        return $this;
    }


}

