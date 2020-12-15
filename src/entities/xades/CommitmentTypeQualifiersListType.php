<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CommitmentTypeQualifiersListType
 *
 *
 * XSD Type: CommitmentTypeQualifiersListType
 */
class CommitmentTypeQualifiersListType
{

    /**
     * @var \horstoeko\ubl\entities\xades\AnyType[] $commitmentTypeQualifier
     */
    private $commitmentTypeQualifier = [
        
    ];

    /**
     * Adds as commitmentTypeQualifier
     *
     * @return self
     * @param \horstoeko\ubl\entities\xades\AnyType $commitmentTypeQualifier
     */
    public function addToCommitmentTypeQualifier(\horstoeko\ubl\entities\xades\AnyType $commitmentTypeQualifier)
    {
        $this->commitmentTypeQualifier[] = $commitmentTypeQualifier;
        return $this;
    }

    /**
     * isset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeQualifier($index)
    {
        return isset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * unset commitmentTypeQualifier
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeQualifier($index)
    {
        unset($this->commitmentTypeQualifier[$index]);
    }

    /**
     * Gets as commitmentTypeQualifier
     *
     * @return \horstoeko\ubl\entities\xades\AnyType[]
     */
    public function getCommitmentTypeQualifier()
    {
        return $this->commitmentTypeQualifier;
    }

    /**
     * Sets a new commitmentTypeQualifier
     *
     * @param \horstoeko\ubl\entities\xades\AnyType[] $commitmentTypeQualifier
     * @return self
     */
    public function setCommitmentTypeQualifier(array $commitmentTypeQualifier)
    {
        $this->commitmentTypeQualifier = $commitmentTypeQualifier;
        return $this;
    }


}

