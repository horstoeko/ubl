<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CertifiedRolesListType
 *
 * XSD Type: CertifiedRolesListType
 */
class CertifiedRolesListType
{

    /**
     * @var \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $certifiedRole
     */
    private $certifiedRole = [
        
    ];

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param  \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRole(\horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRole[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRole
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCertifiedRole($index)
    {
        return isset($this->certifiedRole[$index]);
    }

    /**
     * unset certifiedRole
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCertifiedRole($index)
    {
        unset($this->certifiedRole[$index]);
    }

    /**
     * Gets as certifiedRole
     *
     * @return \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRole()
    {
        return $this->certifiedRole;
    }

    /**
     * Sets a new certifiedRole
     *
     * @param  \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $certifiedRole
     * @return self
     */
    public function setCertifiedRole(array $certifiedRole)
    {
        $this->certifiedRole = $certifiedRole;
        return $this;
    }


}

