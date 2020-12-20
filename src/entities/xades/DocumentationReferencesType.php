<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing DocumentationReferencesType
 *
 * XSD Type: DocumentationReferencesType
 */
class DocumentationReferencesType
{

    /**
     * @var string[] $documentationReference
     */
    private $documentationReference = [
        
    ];

    /**
     * Adds as documentationReference
     *
     * @return self
     * @param  string $documentationReference
     */
    public function addToDocumentationReference($documentationReference)
    {
        $this->documentationReference[] = $documentationReference;
        return $this;
    }

    /**
     * isset documentationReference
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetDocumentationReference($index)
    {
        return isset($this->documentationReference[$index]);
    }

    /**
     * unset documentationReference
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetDocumentationReference($index)
    {
        unset($this->documentationReference[$index]);
    }

    /**
     * Gets as documentationReference
     *
     * @return string[]
     */
    public function getDocumentationReference()
    {
        return $this->documentationReference;
    }

    /**
     * Sets a new documentationReference
     *
     * @param  string[] $documentationReference
     * @return self
     */
    public function setDocumentationReference(array $documentationReference)
    {
        $this->documentationReference = $documentationReference;
        return $this;
    }


}

