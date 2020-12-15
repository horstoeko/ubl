<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TransportationServiceType
 *
 * ABIE
 *  Transportation Service. Details
 *  A class to describe a transportation service.
 *  Transportation Service
 * XSD Type: TransportationServiceType
 */
class TransportationServiceType
{

    /**
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code signifying the extent of this transportation service (e.g., door-to-door, port-to-port).
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportServiceCode $transportServiceCode
     */
    private $transportServiceCode = null;

    /**
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  A code signifying the tariff class applicable to this transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @var \horstoeko\ubl\entities\cbc\TariffClassCode $tariffClassCode
     */
    private $tariffClassCode = null;

    /**
     * BBIE
     *  Transportation Service. Priority. Text
     *  The priority of this transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Priority $priority
     */
    private $priority = null;

    /**
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  A code signifying the rate class for freight in this transportation service.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @var \horstoeko\ubl\entities\cbc\FreightRateClassCode $freightRateClassCode
     */
    private $freightRateClassCode = null;

    /**
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportationServiceDescription[] $transportationServiceDescription
     */
    private $transportationServiceDescription = [
        
    ];

    /**
     * BBIE
     *  Transportation Service. Transportation Service Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding this transportation service.
     *  0..1
     *  Transportation Service
     *  Transportation Service Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportationServiceDetailsURI $transportationServiceDetailsURI
     */
    private $transportationServiceDetailsURI = null;

    /**
     * BBIE
     *  Transportation Service. Nomination Date. Date
     *  In a transport contract, the deadline date by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Transportation Service
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $nominationDate
     */
    private $nominationDate = null;

    /**
     * BBIE
     *  Transportation Service. Nomination Time. Time
     *  In a transport contract, the deadline time by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Transportation Service
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $nominationTime
     */
    private $nominationTime = null;

    /**
     * BBIE
     *  Transportation Service. Name
     *  The name of this transportation service.
     *  0..1
     *  Transportation Service
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Transportation Service. Sequence. Numeric
     *  A number indicating the order of this transportation service in a sequence of transportation services.
     *  0..1
     *  Transportation Service
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric
     */
    private $sequenceNumeric = null;

    /**
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \horstoeko\ubl\entities\cac\TransportEquipment[] $transportEquipment
     */
    private $transportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \horstoeko\ubl\entities\cac\SupportedTransportEquipment[] $supportedTransportEquipment
     */
    private $supportedTransportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \horstoeko\ubl\entities\cac\UnsupportedTransportEquipment[] $unsupportedTransportEquipment
     */
    private $unsupportedTransportEquipment = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \horstoeko\ubl\entities\cac\CommodityClassification[] $commodityClassification
     */
    private $commodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \horstoeko\ubl\entities\cac\SupportedCommodityClassification[] $supportedCommodityClassification
     */
    private $supportedCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \horstoeko\ubl\entities\cac\UnsupportedCommodityClassification[] $unsupportedCommodityClassification
     */
    private $unsupportedCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Total Capacity_ Dimension. Dimension
     *  The total capacity or volume available in this transportation service.
     *  0..1
     *  Transportation Service
     *  Total Capacity
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \horstoeko\ubl\entities\cac\TotalCapacityDimension $totalCapacityDimension
     */
    private $totalCapacityDimension = null;

    /**
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \horstoeko\ubl\entities\cac\ShipmentStage[] $shipmentStage
     */
    private $shipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\TransportEvent[] $transportEvent
     */
    private $transportEvent = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Responsible Transport Service Provider_ Party. Party
     *  The transport service provider responsible for this transportation service.
     *  0..1
     *  Transportation Service
     *  Responsible Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty
     */
    private $responsibleTransportServiceProviderParty = null;

    /**
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @var \horstoeko\ubl\entities\cac\EnvironmentalEmission[] $environmentalEmission
     */
    private $environmentalEmission = [
        
    ];

    /**
     * ASBIE
     *  Transportation Service. Estimated Duration_ Period. Period
     *  The estimated duration of this transportation service.
     *  0..1
     *  Transportation Service
     *  Estimated Duration
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\EstimatedDurationPeriod $estimatedDurationPeriod
     */
    private $estimatedDurationPeriod = null;

    /**
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @var \horstoeko\ubl\entities\cac\ScheduledServiceFrequency[] $scheduledServiceFrequency
     */
    private $scheduledServiceFrequency = [
        
    ];

    /**
     * Gets as transportServiceCode
     *
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code signifying the extent of this transportation service (e.g., door-to-door, port-to-port).
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportServiceCode
     */
    public function getTransportServiceCode()
    {
        return $this->transportServiceCode;
    }

    /**
     * Sets a new transportServiceCode
     *
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code signifying the extent of this transportation service (e.g., door-to-door, port-to-port).
     *  1
     *  Transportation Service
     *  Transport Service Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransportServiceCode $transportServiceCode
     * @return self
     */
    public function setTransportServiceCode(\horstoeko\ubl\entities\cbc\TransportServiceCode $transportServiceCode)
    {
        $this->transportServiceCode = $transportServiceCode;
        return $this;
    }

    /**
     * Gets as tariffClassCode
     *
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  A code signifying the tariff class applicable to this transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @return \horstoeko\ubl\entities\cbc\TariffClassCode
     */
    public function getTariffClassCode()
    {
        return $this->tariffClassCode;
    }

    /**
     * Sets a new tariffClassCode
     *
     * BBIE
     *  Transportation Service. Tariff Class Code. Code
     *  A code signifying the tariff class applicable to this transportation service.
     *  0..1
     *  Transportation Service
     *  Tariff Class Code
     *  Code
     *  Code. Type
     *  Tariff Class Specifier
     *
     * @param \horstoeko\ubl\entities\cbc\TariffClassCode $tariffClassCode
     * @return self
     */
    public function setTariffClassCode(\horstoeko\ubl\entities\cbc\TariffClassCode $tariffClassCode)
    {
        $this->tariffClassCode = $tariffClassCode;
        return $this;
    }

    /**
     * Gets as priority
     *
     * BBIE
     *  Transportation Service. Priority. Text
     *  The priority of this transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Sets a new priority
     *
     * BBIE
     *  Transportation Service. Priority. Text
     *  The priority of this transportation service.
     *  0..1
     *  Transportation Service
     *  Priority
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Priority $priority
     * @return self
     */
    public function setPriority(\horstoeko\ubl\entities\cbc\Priority $priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * Gets as freightRateClassCode
     *
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  A code signifying the rate class for freight in this transportation service.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @return \horstoeko\ubl\entities\cbc\FreightRateClassCode
     */
    public function getFreightRateClassCode()
    {
        return $this->freightRateClassCode;
    }

    /**
     * Sets a new freightRateClassCode
     *
     * BBIE
     *  Transportation Service. Freight Rate Class Code. Code
     *  A code signifying the rate class for freight in this transportation service.
     *  0..1
     *  Transportation Service
     *  Freight Rate Class Code
     *  Code
     *  Code. Type
     *  Charge Basis
     *
     * @param \horstoeko\ubl\entities\cbc\FreightRateClassCode $freightRateClassCode
     * @return self
     */
    public function setFreightRateClassCode(\horstoeko\ubl\entities\cbc\FreightRateClassCode $freightRateClassCode)
    {
        $this->freightRateClassCode = $freightRateClassCode;
        return $this;
    }

    /**
     * Adds as transportationServiceDescription
     *
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\TransportationServiceDescription $transportationServiceDescription
     */
    public function addToTransportationServiceDescription(\horstoeko\ubl\entities\cbc\TransportationServiceDescription $transportationServiceDescription)
    {
        $this->transportationServiceDescription[] = $transportationServiceDescription;
        return $this;
    }

    /**
     * isset transportationServiceDescription
     *
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportationServiceDescription($index)
    {
        return isset($this->transportationServiceDescription[$index]);
    }

    /**
     * unset transportationServiceDescription
     *
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportationServiceDescription($index)
    {
        unset($this->transportationServiceDescription[$index]);
    }

    /**
     * Gets as transportationServiceDescription
     *
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportationServiceDescription[]
     */
    public function getTransportationServiceDescription()
    {
        return $this->transportationServiceDescription;
    }

    /**
     * Sets a new transportationServiceDescription
     *
     * BBIE
     *  Transportation Service. Transportation Service Description. Text
     *  Text describing this transportation service.
     *  0..n
     *  Transportation Service
     *  Transportation Service Description
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransportationServiceDescription[] $transportationServiceDescription
     * @return self
     */
    public function setTransportationServiceDescription(array $transportationServiceDescription)
    {
        $this->transportationServiceDescription = $transportationServiceDescription;
        return $this;
    }

    /**
     * Gets as transportationServiceDetailsURI
     *
     * BBIE
     *  Transportation Service. Transportation Service Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding this transportation service.
     *  0..1
     *  Transportation Service
     *  Transportation Service Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportationServiceDetailsURI
     */
    public function getTransportationServiceDetailsURI()
    {
        return $this->transportationServiceDetailsURI;
    }

    /**
     * Sets a new transportationServiceDetailsURI
     *
     * BBIE
     *  Transportation Service. Transportation Service Details URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing additional details regarding this transportation service.
     *  0..1
     *  Transportation Service
     *  Transportation Service Details URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransportationServiceDetailsURI $transportationServiceDetailsURI
     * @return self
     */
    public function setTransportationServiceDetailsURI(\horstoeko\ubl\entities\cbc\TransportationServiceDetailsURI $transportationServiceDetailsURI)
    {
        $this->transportationServiceDetailsURI = $transportationServiceDetailsURI;
        return $this;
    }

    /**
     * Gets as nominationDate
     *
     * BBIE
     *  Transportation Service. Nomination Date. Date
     *  In a transport contract, the deadline date by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Transportation Service
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getNominationDate()
    {
        return $this->nominationDate;
    }

    /**
     * Sets a new nominationDate
     *
     * BBIE
     *  Transportation Service. Nomination Date. Date
     *  In a transport contract, the deadline date by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011.
     *  0..1
     *  Transportation Service
     *  Nomination Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $nominationDate
     * @return self
     */
    public function setNominationDate(\DateTime $nominationDate)
    {
        $this->nominationDate = $nominationDate;
        return $this;
    }

    /**
     * Gets as nominationTime
     *
     * BBIE
     *  Transportation Service. Nomination Time. Time
     *  In a transport contract, the deadline time by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Transportation Service
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getNominationTime()
    {
        return $this->nominationTime;
    }

    /**
     * Sets a new nominationTime
     *
     * BBIE
     *  Transportation Service. Nomination Time. Time
     *  In a transport contract, the deadline time by which this transportation service has to be booked. For example, if this service is scheduled for Wednesday 16 February 2011 at 10 a.m. CET, the nomination date might be Tuesday15 February 2011 and the nomination time 4 p.m. at the latest.
     *  0..1
     *  Transportation Service
     *  Nomination Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $nominationTime
     * @return self
     */
    public function setNominationTime(\DateTime $nominationTime)
    {
        $this->nominationTime = $nominationTime;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Transportation Service. Name
     *  The name of this transportation service.
     *  0..1
     *  Transportation Service
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
     *  Transportation Service. Name
     *  The name of this transportation service.
     *  0..1
     *  Transportation Service
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
     * Gets as sequenceNumeric
     *
     * BBIE
     *  Transportation Service. Sequence. Numeric
     *  A number indicating the order of this transportation service in a sequence of transportation services.
     *  0..1
     *  Transportation Service
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SequenceNumeric
     */
    public function getSequenceNumeric()
    {
        return $this->sequenceNumeric;
    }

    /**
     * Sets a new sequenceNumeric
     *
     * BBIE
     *  Transportation Service. Sequence. Numeric
     *  A number indicating the order of this transportation service in a sequence of transportation services.
     *  0..1
     *  Transportation Service
     *  Sequence
     *  Numeric
     *  Numeric. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric
     * @return self
     */
    public function setSequenceNumeric(\horstoeko\ubl\entities\cbc\SequenceNumeric $sequenceNumeric)
    {
        $this->sequenceNumeric = $sequenceNumeric;
        return $this;
    }

    /**
     * Adds as transportEquipment
     *
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TransportEquipment $transportEquipment
     */
    public function addToTransportEquipment(\horstoeko\ubl\entities\cac\TransportEquipment $transportEquipment)
    {
        $this->transportEquipment[] = $transportEquipment;
        return $this;
    }

    /**
     * isset transportEquipment
     *
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEquipment($index)
    {
        return isset($this->transportEquipment[$index]);
    }

    /**
     * unset transportEquipment
     *
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEquipment($index)
    {
        unset($this->transportEquipment[$index]);
    }

    /**
     * Gets as transportEquipment
     *
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \horstoeko\ubl\entities\cac\TransportEquipment[]
     */
    public function getTransportEquipment()
    {
        return $this->transportEquipment;
    }

    /**
     * Sets a new transportEquipment
     *
     * ASBIE
     *  Transportation Service. Transport Equipment
     *  A piece of transport equipment used in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \horstoeko\ubl\entities\cac\TransportEquipment[] $transportEquipment
     * @return self
     */
    public function setTransportEquipment(array $transportEquipment)
    {
        $this->transportEquipment = $transportEquipment;
        return $this;
    }

    /**
     * Adds as supportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SupportedTransportEquipment $supportedTransportEquipment
     */
    public function addToSupportedTransportEquipment(\horstoeko\ubl\entities\cac\SupportedTransportEquipment $supportedTransportEquipment)
    {
        $this->supportedTransportEquipment[] = $supportedTransportEquipment;
        return $this;
    }

    /**
     * isset supportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedTransportEquipment($index)
    {
        return isset($this->supportedTransportEquipment[$index]);
    }

    /**
     * unset supportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedTransportEquipment($index)
    {
        unset($this->supportedTransportEquipment[$index]);
    }

    /**
     * Gets as supportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \horstoeko\ubl\entities\cac\SupportedTransportEquipment[]
     */
    public function getSupportedTransportEquipment()
    {
        return $this->supportedTransportEquipment;
    }

    /**
     * Sets a new supportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Supported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \horstoeko\ubl\entities\cac\SupportedTransportEquipment[] $supportedTransportEquipment
     * @return self
     */
    public function setSupportedTransportEquipment(array $supportedTransportEquipment)
    {
        $this->supportedTransportEquipment = $supportedTransportEquipment;
        return $this;
    }

    /**
     * Adds as unsupportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\UnsupportedTransportEquipment $unsupportedTransportEquipment
     */
    public function addToUnsupportedTransportEquipment(\horstoeko\ubl\entities\cac\UnsupportedTransportEquipment $unsupportedTransportEquipment)
    {
        $this->unsupportedTransportEquipment[] = $unsupportedTransportEquipment;
        return $this;
    }

    /**
     * isset unsupportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnsupportedTransportEquipment($index)
    {
        return isset($this->unsupportedTransportEquipment[$index]);
    }

    /**
     * unset unsupportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnsupportedTransportEquipment($index)
    {
        unset($this->unsupportedTransportEquipment[$index]);
    }

    /**
     * Gets as unsupportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \horstoeko\ubl\entities\cac\UnsupportedTransportEquipment[]
     */
    public function getUnsupportedTransportEquipment()
    {
        return $this->unsupportedTransportEquipment;
    }

    /**
     * Sets a new unsupportedTransportEquipment
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Transport Equipment. Transport Equipment
     *  A piece of transport equipment that is not supported in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \horstoeko\ubl\entities\cac\UnsupportedTransportEquipment[] $unsupportedTransportEquipment
     * @return self
     */
    public function setUnsupportedTransportEquipment(array $unsupportedTransportEquipment)
    {
        $this->unsupportedTransportEquipment = $unsupportedTransportEquipment;
        return $this;
    }

    /**
     * Adds as commodityClassification
     *
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CommodityClassification $commodityClassification
     */
    public function addToCommodityClassification(\horstoeko\ubl\entities\cac\CommodityClassification $commodityClassification)
    {
        $this->commodityClassification[] = $commodityClassification;
        return $this;
    }

    /**
     * isset commodityClassification
     *
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommodityClassification($index)
    {
        return isset($this->commodityClassification[$index]);
    }

    /**
     * unset commodityClassification
     *
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommodityClassification($index)
    {
        unset($this->commodityClassification[$index]);
    }

    /**
     * Gets as commodityClassification
     *
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \horstoeko\ubl\entities\cac\CommodityClassification[]
     */
    public function getCommodityClassification()
    {
        return $this->commodityClassification;
    }

    /**
     * Sets a new commodityClassification
     *
     * ASBIE
     *  Transportation Service. Commodity Classification
     *  A classification of this transportation service.
     *  0..n
     *  Transportation Service
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \horstoeko\ubl\entities\cac\CommodityClassification[] $commodityClassification
     * @return self
     */
    public function setCommodityClassification(array $commodityClassification)
    {
        $this->commodityClassification = $commodityClassification;
        return $this;
    }

    /**
     * Adds as supportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\SupportedCommodityClassification $supportedCommodityClassification
     */
    public function addToSupportedCommodityClassification(\horstoeko\ubl\entities\cac\SupportedCommodityClassification $supportedCommodityClassification)
    {
        $this->supportedCommodityClassification[] = $supportedCommodityClassification;
        return $this;
    }

    /**
     * isset supportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupportedCommodityClassification($index)
    {
        return isset($this->supportedCommodityClassification[$index]);
    }

    /**
     * unset supportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupportedCommodityClassification($index)
    {
        unset($this->supportedCommodityClassification[$index]);
    }

    /**
     * Gets as supportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \horstoeko\ubl\entities\cac\SupportedCommodityClassification[]
     */
    public function getSupportedCommodityClassification()
    {
        return $this->supportedCommodityClassification;
    }

    /**
     * Sets a new supportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Supported_ Commodity Classification. Commodity Classification
     *  A classification (e.g., general cargo) for commodities that can be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Supported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \horstoeko\ubl\entities\cac\SupportedCommodityClassification[] $supportedCommodityClassification
     * @return self
     */
    public function setSupportedCommodityClassification(array $supportedCommodityClassification)
    {
        $this->supportedCommodityClassification = $supportedCommodityClassification;
        return $this;
    }

    /**
     * Adds as unsupportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\UnsupportedCommodityClassification $unsupportedCommodityClassification
     */
    public function addToUnsupportedCommodityClassification(\horstoeko\ubl\entities\cac\UnsupportedCommodityClassification $unsupportedCommodityClassification)
    {
        $this->unsupportedCommodityClassification[] = $unsupportedCommodityClassification;
        return $this;
    }

    /**
     * isset unsupportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnsupportedCommodityClassification($index)
    {
        return isset($this->unsupportedCommodityClassification[$index]);
    }

    /**
     * unset unsupportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnsupportedCommodityClassification($index)
    {
        unset($this->unsupportedCommodityClassification[$index]);
    }

    /**
     * Gets as unsupportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \horstoeko\ubl\entities\cac\UnsupportedCommodityClassification[]
     */
    public function getUnsupportedCommodityClassification()
    {
        return $this->unsupportedCommodityClassification;
    }

    /**
     * Sets a new unsupportedCommodityClassification
     *
     * ASBIE
     *  Transportation Service. Unsupported_ Commodity Classification. Commodity Classification
     *  A classification for commodities that cannot be handled in this transportation service.
     *  0..n
     *  Transportation Service
     *  Unsupported
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \horstoeko\ubl\entities\cac\UnsupportedCommodityClassification[] $unsupportedCommodityClassification
     * @return self
     */
    public function setUnsupportedCommodityClassification(array $unsupportedCommodityClassification)
    {
        $this->unsupportedCommodityClassification = $unsupportedCommodityClassification;
        return $this;
    }

    /**
     * Gets as totalCapacityDimension
     *
     * ASBIE
     *  Transportation Service. Total Capacity_ Dimension. Dimension
     *  The total capacity or volume available in this transportation service.
     *  0..1
     *  Transportation Service
     *  Total Capacity
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \horstoeko\ubl\entities\cac\TotalCapacityDimension
     */
    public function getTotalCapacityDimension()
    {
        return $this->totalCapacityDimension;
    }

    /**
     * Sets a new totalCapacityDimension
     *
     * ASBIE
     *  Transportation Service. Total Capacity_ Dimension. Dimension
     *  The total capacity or volume available in this transportation service.
     *  0..1
     *  Transportation Service
     *  Total Capacity
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \horstoeko\ubl\entities\cac\TotalCapacityDimension $totalCapacityDimension
     * @return self
     */
    public function setTotalCapacityDimension(\horstoeko\ubl\entities\cac\TotalCapacityDimension $totalCapacityDimension)
    {
        $this->totalCapacityDimension = $totalCapacityDimension;
        return $this;
    }

    /**
     * Adds as shipmentStage
     *
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ShipmentStage $shipmentStage
     */
    public function addToShipmentStage(\horstoeko\ubl\entities\cac\ShipmentStage $shipmentStage)
    {
        $this->shipmentStage[] = $shipmentStage;
        return $this;
    }

    /**
     * isset shipmentStage
     *
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentStage($index)
    {
        return isset($this->shipmentStage[$index]);
    }

    /**
     * unset shipmentStage
     *
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentStage($index)
    {
        unset($this->shipmentStage[$index]);
    }

    /**
     * Gets as shipmentStage
     *
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \horstoeko\ubl\entities\cac\ShipmentStage[]
     */
    public function getShipmentStage()
    {
        return $this->shipmentStage;
    }

    /**
     * Sets a new shipmentStage
     *
     * ASBIE
     *  Transportation Service. Shipment Stage
     *  One of the stages of shipment in this transportation service.
     *  0..n
     *  Transportation Service
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \horstoeko\ubl\entities\cac\ShipmentStage[] $shipmentStage
     * @return self
     */
    public function setShipmentStage(array $shipmentStage)
    {
        $this->shipmentStage = $shipmentStage;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\TransportEvent $transportEvent
     */
    public function addToTransportEvent(\horstoeko\ubl\entities\cac\TransportEvent $transportEvent)
    {
        $this->transportEvent[] = $transportEvent;
        return $this;
    }

    /**
     * isset transportEvent
     *
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEvent($index)
    {
        return isset($this->transportEvent[$index]);
    }

    /**
     * unset transportEvent
     *
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEvent($index)
    {
        unset($this->transportEvent[$index]);
    }

    /**
     * Gets as transportEvent
     *
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\TransportEvent[]
     */
    public function getTransportEvent()
    {
        return $this->transportEvent;
    }

    /**
     * Sets a new transportEvent
     *
     * ASBIE
     *  Transportation Service. Transport Event
     *  One of the transport events taking place in this transportation service.
     *  0..n
     *  Transportation Service
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\TransportEvent[] $transportEvent
     * @return self
     */
    public function setTransportEvent(array $transportEvent)
    {
        $this->transportEvent = $transportEvent;
        return $this;
    }

    /**
     * Gets as responsibleTransportServiceProviderParty
     *
     * ASBIE
     *  Transportation Service. Responsible Transport Service Provider_ Party. Party
     *  The transport service provider responsible for this transportation service.
     *  0..1
     *  Transportation Service
     *  Responsible Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\ResponsibleTransportServiceProviderParty
     */
    public function getResponsibleTransportServiceProviderParty()
    {
        return $this->responsibleTransportServiceProviderParty;
    }

    /**
     * Sets a new responsibleTransportServiceProviderParty
     *
     * ASBIE
     *  Transportation Service. Responsible Transport Service Provider_ Party. Party
     *  The transport service provider responsible for this transportation service.
     *  0..1
     *  Transportation Service
     *  Responsible Transport Service Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty
     * @return self
     */
    public function setResponsibleTransportServiceProviderParty(\horstoeko\ubl\entities\cac\ResponsibleTransportServiceProviderParty $responsibleTransportServiceProviderParty)
    {
        $this->responsibleTransportServiceProviderParty = $responsibleTransportServiceProviderParty;
        return $this;
    }

    /**
     * Adds as environmentalEmission
     *
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\EnvironmentalEmission $environmentalEmission
     */
    public function addToEnvironmentalEmission(\horstoeko\ubl\entities\cac\EnvironmentalEmission $environmentalEmission)
    {
        $this->environmentalEmission[] = $environmentalEmission;
        return $this;
    }

    /**
     * isset environmentalEmission
     *
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvironmentalEmission($index)
    {
        return isset($this->environmentalEmission[$index]);
    }

    /**
     * unset environmentalEmission
     *
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvironmentalEmission($index)
    {
        unset($this->environmentalEmission[$index]);
    }

    /**
     * Gets as environmentalEmission
     *
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @return \horstoeko\ubl\entities\cac\EnvironmentalEmission[]
     */
    public function getEnvironmentalEmission()
    {
        return $this->environmentalEmission;
    }

    /**
     * Sets a new environmentalEmission
     *
     * ASBIE
     *  Transportation Service. Environmental Emission
     *  An environmental emission resulting from this transportation service.
     *  0..n
     *  Transportation Service
     *  Environmental Emission
     *  Environmental Emission
     *  Environmental Emission
     *
     * @param \horstoeko\ubl\entities\cac\EnvironmentalEmission[] $environmentalEmission
     * @return self
     */
    public function setEnvironmentalEmission(array $environmentalEmission)
    {
        $this->environmentalEmission = $environmentalEmission;
        return $this;
    }

    /**
     * Gets as estimatedDurationPeriod
     *
     * ASBIE
     *  Transportation Service. Estimated Duration_ Period. Period
     *  The estimated duration of this transportation service.
     *  0..1
     *  Transportation Service
     *  Estimated Duration
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\EstimatedDurationPeriod
     */
    public function getEstimatedDurationPeriod()
    {
        return $this->estimatedDurationPeriod;
    }

    /**
     * Sets a new estimatedDurationPeriod
     *
     * ASBIE
     *  Transportation Service. Estimated Duration_ Period. Period
     *  The estimated duration of this transportation service.
     *  0..1
     *  Transportation Service
     *  Estimated Duration
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\EstimatedDurationPeriod $estimatedDurationPeriod
     * @return self
     */
    public function setEstimatedDurationPeriod(\horstoeko\ubl\entities\cac\EstimatedDurationPeriod $estimatedDurationPeriod)
    {
        $this->estimatedDurationPeriod = $estimatedDurationPeriod;
        return $this;
    }

    /**
     * Adds as scheduledServiceFrequency
     *
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\ScheduledServiceFrequency $scheduledServiceFrequency
     */
    public function addToScheduledServiceFrequency(\horstoeko\ubl\entities\cac\ScheduledServiceFrequency $scheduledServiceFrequency)
    {
        $this->scheduledServiceFrequency[] = $scheduledServiceFrequency;
        return $this;
    }

    /**
     * isset scheduledServiceFrequency
     *
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @param int|string $index
     * @return bool
     */
    public function issetScheduledServiceFrequency($index)
    {
        return isset($this->scheduledServiceFrequency[$index]);
    }

    /**
     * unset scheduledServiceFrequency
     *
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @param int|string $index
     * @return void
     */
    public function unsetScheduledServiceFrequency($index)
    {
        unset($this->scheduledServiceFrequency[$index]);
    }

    /**
     * Gets as scheduledServiceFrequency
     *
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @return \horstoeko\ubl\entities\cac\ScheduledServiceFrequency[]
     */
    public function getScheduledServiceFrequency()
    {
        return $this->scheduledServiceFrequency;
    }

    /**
     * Sets a new scheduledServiceFrequency
     *
     * ASBIE
     *  Transportation Service. Scheduled_ Service Frequency. Service Frequency
     *  A class to specify which day of the week a transport service is operational.
     *  0..n
     *  Transportation Service
     *  Scheduled
     *  Service Frequency
     *  Service Frequency
     *  Service Frequency
     *
     * @param \horstoeko\ubl\entities\cac\ScheduledServiceFrequency[] $scheduledServiceFrequency
     * @return self
     */
    public function setScheduledServiceFrequency(array $scheduledServiceFrequency)
    {
        $this->scheduledServiceFrequency = $scheduledServiceFrequency;
        return $this;
    }


}

