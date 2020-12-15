<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing RegulationType
 *
 * ABIE
 *  Regulation. Details
 *  A class to describe a regulation.
 *  Regulation
 *  Points to regulation at atomic level
 * XSD Type: RegulationType
 */
class RegulationType
{

    /**
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @var \horstoeko\ubl\entities\cbc\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\OntologyURI $ontologyURI
     */
    private $ontologyURI = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
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
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
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
     * Gets as legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @return \horstoeko\ubl\entities\cbc\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @param \horstoeko\ubl\entities\cbc\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(\horstoeko\ubl\entities\cbc\LegalReference $legalReference)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Gets as ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\OntologyURI
     */
    public function getOntologyURI()
    {
        return $this->ontologyURI;
    }

    /**
     * Sets a new ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\OntologyURI $ontologyURI
     * @return self
     */
    public function setOntologyURI(\horstoeko\ubl\entities\cbc\OntologyURI $ontologyURI)
    {
        $this->ontologyURI = $ontologyURI;
        return $this;
    }


}

