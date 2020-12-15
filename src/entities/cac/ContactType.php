<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ContactType
 *
 * ABIE
 *  Contact. Details
 *  A class to describe a contactable person or department in an organization.
 *  Contact
 * XSD Type: ContactType
 */
class ContactType
{

    /**
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Telephone $telephone
     */
    private $telephone = null;

    /**
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Telefax $telefax
     */
    private $telefax = null;

    /**
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ElectronicMail $electronicMail
     */
    private $electronicMail = null;

    /**
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @var \horstoeko\ubl\entities\cac\OtherCommunication[] $otherCommunication
     */
    private $otherCommunication = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
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
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
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
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
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
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
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
     * Gets as telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Telephone $telephone
     * @return self
     */
    public function setTelephone(\horstoeko\ubl\entities\cbc\Telephone $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Telefax $telefax
     * @return self
     */
    public function setTelefax(\horstoeko\ubl\entities\cbc\Telefax $telefax)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ElectronicMail
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * Sets a new electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(\horstoeko\ubl\entities\cbc\ElectronicMail $electronicMail)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Note $note
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Adds as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\horstoeko\ubl\entities\cac\OtherCommunication $otherCommunication)
    {
        $this->otherCommunication[] = $otherCommunication;
        return $this;
    }

    /**
     * isset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCommunication($index)
    {
        return isset($this->otherCommunication[$index]);
    }

    /**
     * unset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCommunication($index)
    {
        unset($this->otherCommunication[$index]);
    }

    /**
     * Gets as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return \horstoeko\ubl\entities\cac\OtherCommunication[]
     */
    public function getOtherCommunication()
    {
        return $this->otherCommunication;
    }

    /**
     * Sets a new otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param \horstoeko\ubl\entities\cac\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(array $otherCommunication)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }


}

