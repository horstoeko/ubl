<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CatalogueReferenceType
 *
 * ABIE
 *  Catalogue Reference. Details
 *  A class to define a reference to a catalogue.
 *  Catalogue Reference
 * XSD Type: CatalogueReferenceType
 */
class CatalogueReferenceType
{

    /**
     * BBIE
     *  Catalogue Reference. Identifier
     *  An identifier for a specific catalogue.
     *  1
     *  Catalogue Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for a specific catalogue.
     *  0..1
     *  Catalogue Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Catalogue Reference. Issue Date. Date
     *  The date on which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Catalogue Reference. Issue Time. Time
     *  The time at which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $revisionDate
     */
    private $revisionDate = null;

    /**
     * BBIE
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $revisionTime
     */
    private $revisionTime = null;

    /**
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @var \horstoeko\ubl\entities\cbc\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Catalogue Reference. Version. Identifier
     *  An identifier for the current version of the catalogue.
     *  0..1
     *  Catalogue Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \horstoeko\ubl\entities\cbc\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Catalogue Reference. Previous_ Version. Identifier
     *  An identifier for the previous version of the catalogue that is superseded by this version.
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @var \horstoeko\ubl\entities\cbc\PreviousVersionID $previousVersionID
     */
    private $previousVersionID = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Reference. Identifier
     *  An identifier for a specific catalogue.
     *  1
     *  Catalogue Reference
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
     *  Catalogue Reference. Identifier
     *  An identifier for a specific catalogue.
     *  1
     *  Catalogue Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\ID $iD
     * @return self
     */
    public function setID(\horstoeko\ubl\entities\cbc\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for a specific catalogue.
     *  0..1
     *  Catalogue Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Catalogue Reference. UUID. Identifier
     *  A universally unique identifier for a specific catalogue.
     *  0..1
     *  Catalogue Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\UUID $uUID
     * @return self
     */
    public function setUUID(\horstoeko\ubl\entities\cbc\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Catalogue Reference. Issue Date. Date
     *  The date on which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Catalogue Reference. Issue Date. Date
     *  The date on which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Catalogue Reference. Issue Time. Time
     *  The time at which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Catalogue Reference. Issue Time. Time
     *  The time at which the catalogue was issued.
     *  0..1
     *  Catalogue Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param  \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as revisionDate
     *
     * BBIE
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Sets a new revisionDate
     *
     * BBIE
     *  Catalogue Reference. Revision Date. Date
     *  The date on which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param  \DateTime $revisionDate
     * @return self
     */
    public function setRevisionDate(\DateTime $revisionDate)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Gets as revisionTime
     *
     * BBIE
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRevisionTime()
    {
        return $this->revisionTime;
    }

    /**
     * Sets a new revisionTime
     *
     * BBIE
     *  Catalogue Reference. Revision Time. Time
     *  The time at which the information in the catalogue was last revised.
     *  0..1
     *  Catalogue Reference
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param  \DateTime $revisionTime
     * @return self
     */
    public function setRevisionTime(\DateTime $revisionTime)
    {
        $this->revisionTime = $revisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Note $note
     */
    public function addToNote(\horstoeko\ubl\entities\cbc\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Catalogue Reference. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Reference
     *  Note
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Description $description
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
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @param  int|string $index
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
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @param  int|string $index
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
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  Catalogue Reference. Description. Text
     *  Text describing the catalogue.
     *  0..n
     *  Catalogue Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @param  \horstoeko\ubl\entities\cbc\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Catalogue Reference. Version. Identifier
     *  An identifier for the current version of the catalogue.
     *  0..1
     *  Catalogue Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \horstoeko\ubl\entities\cbc\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Catalogue Reference. Version. Identifier
     *  An identifier for the current version of the catalogue.
     *  0..1
     *  Catalogue Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param  \horstoeko\ubl\entities\cbc\VersionID $versionID
     * @return self
     */
    public function setVersionID(\horstoeko\ubl\entities\cbc\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as previousVersionID
     *
     * BBIE
     *  Catalogue Reference. Previous_ Version. Identifier
     *  An identifier for the previous version of the catalogue that is superseded by this version.
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @return \horstoeko\ubl\entities\cbc\PreviousVersionID
     */
    public function getPreviousVersionID()
    {
        return $this->previousVersionID;
    }

    /**
     * Sets a new previousVersionID
     *
     * BBIE
     *  Catalogue Reference. Previous_ Version. Identifier
     *  An identifier for the previous version of the catalogue that is superseded by this version.
     *  0..1
     *  Catalogue Reference
     *  Previous
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.0
     *
     * @param  \horstoeko\ubl\entities\cbc\PreviousVersionID $previousVersionID
     * @return self
     */
    public function setPreviousVersionID(\horstoeko\ubl\entities\cbc\PreviousVersionID $previousVersionID)
    {
        $this->previousVersionID = $previousVersionID;
        return $this;
    }


}

