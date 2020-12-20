<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ClauseType
 *
 * ABIE
 *  Clause. Details
 *  A class to define a clause (a distinct article or provision) in a contract, treaty, will, or other formal or legal written document requiring compliance.
 *  Clause
 * XSD Type: ClauseType
 */
class ClauseType
{

    /**
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Content[] $content
     */
    private $content = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
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
     *  Clause. Identifier
     *  An identifier for this clause.
     *  0..1
     *  Clause
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
     * Adds as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cbc\Content $content
     */
    public function addToContent(\horstoeko\ubl\entities\cbc\Content $content)
    {
        $this->content[] = $content;
        return $this;
    }

    /**
     * isset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetContent($index)
    {
        return isset($this->content[$index]);
    }

    /**
     * unset content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetContent($index)
    {
        unset($this->content[$index]);
    }

    /**
     * Gets as content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Content[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * BBIE
     *  Clause. Content. Text
     *  The text of this clause.
     *  0..n
     *  Clause
     *  Content
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Content[] $content
     * @return self
     */
    public function setContent(array $content)
    {
        $this->content = $content;
        return $this;
    }


}

