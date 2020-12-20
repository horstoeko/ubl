<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing NoticeReferenceType
 *
 * XSD Type: NoticeReferenceType
 */
class NoticeReferenceType
{

    /**
     * @var string $organization
     */
    private $organization = null;

    /**
     * @var int[] $noticeNumbers
     */
    private $noticeNumbers = null;

    /**
     * Gets as organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param  string $organization
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Adds as int
     *
     * @return self
     * @param  int $int
     */
    public function addToNoticeNumbers($int)
    {
        $this->noticeNumbers[] = $int;
        return $this;
    }

    /**
     * isset noticeNumbers
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetNoticeNumbers($index)
    {
        return isset($this->noticeNumbers[$index]);
    }

    /**
     * unset noticeNumbers
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetNoticeNumbers($index)
    {
        unset($this->noticeNumbers[$index]);
    }

    /**
     * Gets as noticeNumbers
     *
     * @return int[]
     */
    public function getNoticeNumbers()
    {
        return $this->noticeNumbers;
    }

    /**
     * Sets a new noticeNumbers
     *
     * @param  int[] $noticeNumbers
     * @return self
     */
    public function setNoticeNumbers(array $noticeNumbers)
    {
        $this->noticeNumbers = $noticeNumbers;
        return $this;
    }


}

