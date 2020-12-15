<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing CRLIdentifierType
 *
 *
 * XSD Type: CRLIdentifierType
 */
class CRLIdentifierType
{

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var string $issuer
     */
    private $issuer = null;

    /**
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * @var int $number
     */
    private $number = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Sets a new issuer
     *
     * @param string $issuer
     * @return self
     */
    public function setIssuer($issuer)
    {
        $this->issuer = $issuer;
        return $this;
    }

    /**
     * Gets as issueTime
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
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

