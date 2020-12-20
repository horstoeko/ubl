<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing WinningPartyType
 *
 * ABIE
 *  Winning Party. Details
 *  A party that is identified as the awarded by a tender result.
 *  Winning Party
 * XSD Type: WinningPartyType
 */
class WinningPartyType
{

    /**
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Rank $rank
     */
    private $rank = null;

    /**
     * ASBIE
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\Party $party
     */
    private $party = null;

    /**
     * Gets as rank
     *
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Rank
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Sets a new rank
     *
     * BBIE
     *  Winning Party. Rank. Text
     *  Indicates the rank obtained in the award.
     *  0..1
     *  Winning Party
     *  Rank
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\Rank $rank
     * @return self
     */
    public function setRank(\horstoeko\ubl\entities\cbc\Rank $rank)
    {
        $this->rank = $rank;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Winning Party. Party
     *  Information about an organization, sub-organization, or individual fulfilling a role in a business process.
     *  1
     *  Winning Party
     *  Party
     *  Party
     *  Party
     *
     * @param  \horstoeko\ubl\entities\cac\Party $party
     * @return self
     */
    public function setParty(\horstoeko\ubl\entities\cac\Party $party)
    {
        $this->party = $party;
        return $this;
    }


}

