<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing AttachmentType
 *
 * ABIE
 *  Attachment. Details
 *  A class to describe an attached document. An attachment can refer to an external document or be included with the document being exchanged.
 *  Attachment
 * XSD Type: AttachmentType
 */
class AttachmentType
{

    /**
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @var \horstoeko\ubl\entities\cac\ExternalReference $externalReference
     */
    private $externalReference = null;

    /**
     * Gets as embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(\horstoeko\ubl\entities\cbc\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @return \horstoeko\ubl\entities\cac\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @param \horstoeko\ubl\entities\cac\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(\horstoeko\ubl\entities\cac\ExternalReference $externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }


}

