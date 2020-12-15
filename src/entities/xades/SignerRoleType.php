<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SignerRoleType
 *
 *
 * XSD Type: SignerRoleType
 */
class SignerRoleType
{

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $claimedRoles
     */
    private $claimedRoles = null;

    /**
     * @var \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $certifiedRoles
     */
    private $certifiedRoles = null;

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\AnyType $claimedRole
     */
    public function addToClaimedRoles(\horstoeko\ubl\entities\xades\AnyType $claimedRole)
    {
        $this->claimedRoles[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRoles($index)
    {
        return isset($this->claimedRoles[$index]);
    }

    /**
     * unset claimedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRoles($index)
    {
        unset($this->claimedRoles[$index]);
    }

    /**
     * Gets as claimedRoles
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getClaimedRoles()
    {
        return $this->claimedRoles;
    }

    /**
     * Sets a new claimedRoles
     *
     * @param \horstoeko\ubl\entities\xades\AnyType[] $claimedRoles
     * @return self
     */
    public function setClaimedRoles(array $claimedRoles)
    {
        $this->claimedRoles = $claimedRoles;
        return $this;
    }

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRoles(\horstoeko\ubl\entities\xades\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRoles[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRoles($index)
    {
        return isset($this->certifiedRoles[$index]);
    }

    /**
     * unset certifiedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRoles($index)
    {
        unset($this->certifiedRoles[$index]);
    }

    /**
     * Gets as certifiedRoles
     *
     * @return \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRoles()
    {
        return $this->certifiedRoles;
    }

    /**
     * Sets a new certifiedRoles
     *
     * @param \horstoeko\ubl\entities\xades\EncapsulatedPKIDataType[] $certifiedRoles
     * @return self
     */
    public function setCertifiedRoles(array $certifiedRoles)
    {
        $this->certifiedRoles = $certifiedRoles;
        return $this;
    }


}

