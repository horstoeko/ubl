<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing IntegerListType
 *
 *
 * XSD Type: IntegerListType
 */
class IntegerListType
{

    /**
     * @var int[] $int
     */
    private $int = [
        
    ];

    /**
     * Adds as int
     *
     * @return self
     * @param int $int
     */
    public function addToInt($int)
    {
        $this->int[] = $int;
        return $this;
    }

    /**
     * isset int
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInt($index)
    {
        return isset($this->int[$index]);
    }

    /**
     * unset int
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInt($index)
    {
        unset($this->int[$index]);
    }

    /**
     * Gets as int
     *
     * @return int[]
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Sets a new int
     *
     * @param int[] $int
     * @return self
     */
    public function setInt(array $int)
    {
        $this->int = $int;
        return $this;
    }


}

