<?php

namespace horstoeko\ubl\entities\ds;

/**
 * Class representing KeyValueType
 *
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @var \horstoeko\ubl\entities\ds\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \horstoeko\ubl\entities\ds\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \horstoeko\ubl\entities\ds\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param  \horstoeko\ubl\entities\ds\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\horstoeko\ubl\entities\ds\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \horstoeko\ubl\entities\ds\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param  \horstoeko\ubl\entities\ds\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\horstoeko\ubl\entities\ds\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

