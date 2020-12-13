<?php

namespace horstoeko\ubl\entities\ext;

/**
 * Class representing UBLExtensionsType
 *
 * A container for all extensions present in the document.
 * XSD Type: UBLExtensionsType
 */
class UBLExtensionsType
{

    /**
     * A single extension for private use.
     *
     * @var \horstoeko\ubl\entities\ext\UBLExtension[] $uBLExtension
     */
    private $uBLExtension = [
        
    ];

    /**
     * Adds as uBLExtension
     *
     * A single extension for private use.
     *
     * @return self
     * @param \horstoeko\ubl\entities\ext\UBLExtension $uBLExtension
     */
    public function addToUBLExtension(\horstoeko\ubl\entities\ext\UBLExtension $uBLExtension)
    {
        $this->uBLExtension[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtension($index)
    {
        return isset($this->uBLExtension[$index]);
    }

    /**
     * unset uBLExtension
     *
     * A single extension for private use.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtension($index)
    {
        unset($this->uBLExtension[$index]);
    }

    /**
     * Gets as uBLExtension
     *
     * A single extension for private use.
     *
     * @return \horstoeko\ubl\entities\ext\UBLExtension[]
     */
    public function getUBLExtension()
    {
        return $this->uBLExtension;
    }

    /**
     * Sets a new uBLExtension
     *
     * A single extension for private use.
     *
     * @param \horstoeko\ubl\entities\ext\UBLExtension[] $uBLExtension
     * @return self
     */
    public function setUBLExtension(array $uBLExtension)
    {
        $this->uBLExtension = $uBLExtension;
        return $this;
    }


}

