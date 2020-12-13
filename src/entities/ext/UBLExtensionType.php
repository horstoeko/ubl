<?php

namespace horstoeko\ubl\entities\ext;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{

    /**
     * BBIE
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * An agency that maintains one or more Extensions.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionAgencyID $extensionAgencyID
     */
    private $extensionAgencyID = null;

    /**
     * The name of the agency that maintains the Extension.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionAgencyName $extensionAgencyName
     */
    private $extensionAgencyName = null;

    /**
     * The version of the Extension.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionVersionID $extensionVersionID
     */
    private $extensionVersionID = null;

    /**
     * A URI for the Agency that maintains the Extension.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionAgencyURI $extensionAgencyURI
     */
    private $extensionAgencyURI = null;

    /**
     * A URI for the Extension.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionURI $extensionURI
     */
    private $extensionURI = null;

    /**
     * A code for reason the Extension is being included.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionReasonCode $extensionReasonCode
     */
    private $extensionReasonCode = null;

    /**
     * A description of the reason for the Extension.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionReason $extensionReason
     */
    private $extensionReason = null;

    /**
     * The definition of the extension content.
     *
     * @var \horstoeko\ubl\entities\ext\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Identifier
     *  
     *  An identifier for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     *  Extension. Name
     *  
     *  A name for the Extension assigned by the creator of the extension.
     *  0..1
     *  Extension
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
     * Gets as extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionAgencyID
     */
    public function getExtensionAgencyID()
    {
        return $this->extensionAgencyID;
    }

    /**
     * Sets a new extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionAgencyID $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(\horstoeko\ubl\entities\ext\ExtensionAgencyID $extensionAgencyID)
    {
        $this->extensionAgencyID = $extensionAgencyID;
        return $this;
    }

    /**
     * Gets as extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionAgencyName
     */
    public function getExtensionAgencyName()
    {
        return $this->extensionAgencyName;
    }

    /**
     * Sets a new extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionAgencyName $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(\horstoeko\ubl\entities\ext\ExtensionAgencyName $extensionAgencyName)
    {
        $this->extensionAgencyName = $extensionAgencyName;
        return $this;
    }

    /**
     * Gets as extensionVersionID
     *
     * The version of the Extension.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionVersionID
     */
    public function getExtensionVersionID()
    {
        return $this->extensionVersionID;
    }

    /**
     * Sets a new extensionVersionID
     *
     * The version of the Extension.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionVersionID $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(\horstoeko\ubl\entities\ext\ExtensionVersionID $extensionVersionID)
    {
        $this->extensionVersionID = $extensionVersionID;
        return $this;
    }

    /**
     * Gets as extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionAgencyURI
     */
    public function getExtensionAgencyURI()
    {
        return $this->extensionAgencyURI;
    }

    /**
     * Sets a new extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionAgencyURI $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(\horstoeko\ubl\entities\ext\ExtensionAgencyURI $extensionAgencyURI)
    {
        $this->extensionAgencyURI = $extensionAgencyURI;
        return $this;
    }

    /**
     * Gets as extensionURI
     *
     * A URI for the Extension.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionURI
     */
    public function getExtensionURI()
    {
        return $this->extensionURI;
    }

    /**
     * Sets a new extensionURI
     *
     * A URI for the Extension.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionURI $extensionURI
     * @return self
     */
    public function setExtensionURI(\horstoeko\ubl\entities\ext\ExtensionURI $extensionURI)
    {
        $this->extensionURI = $extensionURI;
        return $this;
    }

    /**
     * Gets as extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionReasonCode
     */
    public function getExtensionReasonCode()
    {
        return $this->extensionReasonCode;
    }

    /**
     * Sets a new extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionReasonCode $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(\horstoeko\ubl\entities\ext\ExtensionReasonCode $extensionReasonCode)
    {
        $this->extensionReasonCode = $extensionReasonCode;
        return $this;
    }

    /**
     * Gets as extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionReason
     */
    public function getExtensionReason()
    {
        return $this->extensionReason;
    }

    /**
     * Sets a new extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionReason $extensionReason
     * @return self
     */
    public function setExtensionReason(\horstoeko\ubl\entities\ext\ExtensionReason $extensionReason)
    {
        $this->extensionReason = $extensionReason;
        return $this;
    }

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \horstoeko\ubl\entities\ext\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \horstoeko\ubl\entities\ext\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\horstoeko\ubl\entities\ext\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }


}

