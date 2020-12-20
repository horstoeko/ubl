<?php

namespace horstoeko\ubl\entities\ds;

/**
 * Class representing TransformsType
 *
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @var \horstoeko\ubl\entities\ds\Transform[] $transform
     */
    private $transform = [
        
    ];

    /**
     * Adds as transform
     *
     * @return self
     * @param  \horstoeko\ubl\entities\ds\Transform $transform
     */
    public function addToTransform(\horstoeko\ubl\entities\ds\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \horstoeko\ubl\entities\ds\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param  \horstoeko\ubl\entities\ds\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

