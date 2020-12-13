<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing PersonType
 *
 * ABIE
 *  Person. Details
 *  Information about a person.
 *  Person
 * XSD Type: PersonType
 */
class PersonType
{

    /**
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\FirstName $firstName
     */
    private $firstName = null;

    /**
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\FamilyName $familyName
     */
    private $familyName = null;

    /**
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Title $title
     */
    private $title = null;

    /**
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\MiddleName $middleName
     */
    private $middleName = null;

    /**
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\NameSuffix $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\JobTitle $jobTitle
     */
    private $jobTitle = null;

    /**
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OrganizationDepartment $organizationDepartment
     */
    private $organizationDepartment = null;

    /**
     * Gets as firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\FirstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * BBIE
     *  Person. First_ Name. Name
     *  A person's forename or first name.
     *  0..1
     *  Person
     *  First
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\FirstName $firstName
     * @return self
     */
    public function setFirstName(\horstoeko\ubl\entities\cbc\FirstName $firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\FamilyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets a new familyName
     *
     * BBIE
     *  Person. Family_ Name. Name
     *  A person's surname or family name.
     *  0..1
     *  Person
     *  Family
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\FamilyName $familyName
     * @return self
     */
    public function setFamilyName(\horstoeko\ubl\entities\cbc\FamilyName $familyName)
    {
        $this->familyName = $familyName;
        return $this;
    }

    /**
     * Gets as title
     *
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * BBIE
     *  Person. Title. Text
     *  A person's title of address, e.g., Mr, Ms, Dr, Sir.
     *  0..1
     *  Person
     *  Title
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Title $title
     * @return self
     */
    public function setTitle(\horstoeko\ubl\entities\cbc\Title $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\MiddleName
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * BBIE
     *  Person. Middle_ Name. Name
     *  A person's middle name(s) and/or initial(s).
     *  0..1
     *  Person
     *  Middle
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \horstoeko\ubl\entities\cbc\MiddleName $middleName
     * @return self
     */
    public function setMiddleName(\horstoeko\ubl\entities\cbc\MiddleName $middleName)
    {
        $this->middleName = $middleName;
        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\NameSuffix
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * BBIE
     *  Person. Name Suffix. Text
     *  A suffix to a person's name, e.g., PhD, OBE, Jnr.
     *  0..1
     *  Person
     *  Name Suffix
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\NameSuffix $nameSuffix
     * @return self
     */
    public function setNameSuffix(\horstoeko\ubl\entities\cbc\NameSuffix $nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;
        return $this;
    }

    /**
     * Gets as jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\JobTitle
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Sets a new jobTitle
     *
     * BBIE
     *  Person. Job Title. Text
     *  A person's job title within an organization (for a particular role).
     *  0..1
     *  Person
     *  Job Title
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\JobTitle $jobTitle
     * @return self
     */
    public function setJobTitle(\horstoeko\ubl\entities\cbc\JobTitle $jobTitle)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * Gets as organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OrganizationDepartment
     */
    public function getOrganizationDepartment()
    {
        return $this->organizationDepartment;
    }

    /**
     * Sets a new organizationDepartment
     *
     * BBIE
     *  Person. Organization_ Department. Text
     *  The department or subdivision of an organization that the person belongs to (for a particular role).
     *  0..1
     *  Person
     *  Organization
     *  Department
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OrganizationDepartment $organizationDepartment
     * @return self
     */
    public function setOrganizationDepartment(\horstoeko\ubl\entities\cbc\OrganizationDepartment $organizationDepartment)
    {
        $this->organizationDepartment = $organizationDepartment;
        return $this;
    }


}

