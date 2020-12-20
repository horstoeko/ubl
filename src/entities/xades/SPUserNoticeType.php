<?php

namespace horstoeko\ubl\entities\xades;

/**
 * Class representing SPUserNoticeType
 *
 * XSD Type: SPUserNoticeType
 */
class SPUserNoticeType
{

    /**
     * @var \horstoeko\ubl\entities\xades\NoticeReferenceType $noticeRef
     */
    private $noticeRef = null;

    /**
     * @var string $explicitText
     */
    private $explicitText = null;

    /**
     * Gets as noticeRef
     *
     * @return \horstoeko\ubl\entities\xades\NoticeReferenceType
     */
    public function getNoticeRef()
    {
        return $this->noticeRef;
    }

    /**
     * Sets a new noticeRef
     *
     * @param  \horstoeko\ubl\entities\xades\NoticeReferenceType $noticeRef
     * @return self
     */
    public function setNoticeRef(\horstoeko\ubl\entities\xades\NoticeReferenceType $noticeRef)
    {
        $this->noticeRef = $noticeRef;
        return $this;
    }

    /**
     * Gets as explicitText
     *
     * @return string
     */
    public function getExplicitText()
    {
        return $this->explicitText;
    }

    /**
     * Sets a new explicitText
     *
     * @param  string $explicitText
     * @return self
     */
    public function setExplicitText($explicitText)
    {
        $this->explicitText = $explicitText;
        return $this;
    }


}

