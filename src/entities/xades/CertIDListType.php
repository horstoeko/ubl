<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CertIDListType
 *
 * XSD Type: CertIDListType
 */
class CertIDListType
{

    /**
     * @var \horstoeko\ubl\entities\xades\CertIDType[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\CertIDType $cert
     */
    public function addToCert(\horstoeko\ubl\entities\xades\CertIDType $cert)
    {
        $this->cert[] = $cert;
        return $this;
    }

    /**
     * isset cert
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCert($index)
    {
        return isset($this->cert[$index]);
    }

    /**
     * unset cert
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCert($index)
    {
        unset($this->cert[$index]);
    }

    /**
     * Gets as cert
     *
     * @return \horstoeko\ubl\entities\xades\CertIDType[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param  \horstoeko\ubl\entities\xades\CertIDType[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }


}

