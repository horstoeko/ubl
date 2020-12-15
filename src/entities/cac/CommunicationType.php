<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  A class to describe a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{

    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \horstoeko\ubl\entities\cbc\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \horstoeko\ubl\entities\cbc\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @var \horstoeko\ubl\entities\cbc\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \horstoeko\ubl\entities\cbc\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \horstoeko\ubl\entities\cbc\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(\horstoeko\ubl\entities\cbc\ChannelCode $channelCode)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \horstoeko\ubl\entities\cbc\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \horstoeko\ubl\entities\cbc\Channel $channel
     * @return self
     */
    public function setChannel(\horstoeko\ubl\entities\cbc\Channel $channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @return \horstoeko\ubl\entities\cbc\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @param \horstoeko\ubl\entities\cbc\Value $value
     * @return self
     */
    public function setValue(\horstoeko\ubl\entities\cbc\Value $value)
    {
        $this->value = $value;
        return $this;
    }


}

