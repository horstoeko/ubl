<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing FinancialInstitutionType
 *
 * ABIE
 *  Financial Institution. Details
 *  A class to describe a financial institution.
 *  Financial Institution
 * XSD Type: FinancialInstitutionType
 */
class FinancialInstitutionType
{

    /**
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @var \horstoeko\ubl\entities\cac\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Financial Institution. Identifier
     *  An identifier for this financial institution. It is recommended that the ISO 9362 Bank Identification Code (BIC) be used as the ID.
     *  0..1
     *  Financial Institution
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Financial Institution. Name
     *  The name of this financial institution.
     *  0..1
     *  Financial Institution
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Name $name
     * @return self
     */
    public function setName(\horstoeko\ubl\entities\cbc\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @return \horstoeko\ubl\entities\cac\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Financial Institution. Address
     *  The address of this financial institution.
     *  0..1
     *  Financial Institution
     *  Address
     *  Address
     *  Address
     *
     * @param \horstoeko\ubl\entities\cac\Address $address
     * @return self
     */
    public function setAddress(\horstoeko\ubl\entities\cac\Address $address)
    {
        $this->address = $address;
        return $this;
    }


}

