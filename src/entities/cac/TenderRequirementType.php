<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TenderRequirementType
 *
 * ABIE
 *  Tender Requirement. Details
 *  A template for a required document in a tendering process.
 *  Tender Requirement
 * XSD Type: TenderRequirementType
 */
class TenderRequirementType
{

    /**
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \horstoeko\ubl\entities\cac\TemplateDocumentReference $templateDocumentReference
     */
    private $templateDocumentReference = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
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
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
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
     * Adds as description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Description $description
     */
    public function addToDescription(\horstoeko\ubl\entities\cbc\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \horstoeko\ubl\entities\cac\TemplateDocumentReference
     */
    public function getTemplateDocumentReference()
    {
        return $this->templateDocumentReference;
    }

    /**
     * Sets a new templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \horstoeko\ubl\entities\cac\TemplateDocumentReference $templateDocumentReference
     * @return self
     */
    public function setTemplateDocumentReference(\horstoeko\ubl\entities\cac\TemplateDocumentReference $templateDocumentReference)
    {
        $this->templateDocumentReference = $templateDocumentReference;
        return $this;
    }


}

