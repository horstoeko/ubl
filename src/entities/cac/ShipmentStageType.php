<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ShipmentStageType
 *
 * ABIE
 *  Shipment Stage. Details
 *  A class to describe one stage of movement in a transport of goods.
 *  Shipment Stage
 * XSD Type: ShipmentStageType
 */
class ShipmentStageType
{

    /**
     * BBIE
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportModeCode $transportModeCode
     */
    private $transportModeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\TransitDirectionCode $transitDirectionCode
     */
    private $transitDirectionCode = null;

    /**
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @var bool $preCarriageIndicator
     */
    private $preCarriageIndicator = null;

    /**
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @var bool $onCarriageIndicator
     */
    private $onCarriageIndicator = null;

    /**
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $estimatedDeliveryDate
     */
    private $estimatedDeliveryDate = null;

    /**
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $estimatedDeliveryTime
     */
    private $estimatedDeliveryTime = null;

    /**
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requiredDeliveryDate
     */
    private $requiredDeliveryDate = null;

    /**
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $requiredDeliveryTime
     */
    private $requiredDeliveryTime = null;

    /**
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LoadingSequenceID $loadingSequenceID
     */
    private $loadingSequenceID = null;

    /**
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\SuccessiveSequenceID $successiveSequenceID
     */
    private $successiveSequenceID = null;

    /**
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\Instructions[] $instructions
     */
    private $instructions = [
        
    ];

    /**
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DemurrageInstructions[] $demurrageInstructions
     */
    private $demurrageInstructions = [
        
    ];

    /**
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CrewQuantity $crewQuantity
     */
    private $crewQuantity = null;

    /**
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PassengerQuantity $passengerQuantity
     */
    private $passengerQuantity = null;

    /**
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\TransitPeriod $transitPeriod
     */
    private $transitPeriod = null;

    /**
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\CarrierParty[] $carrierParty
     */
    private $carrierParty = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @var \horstoeko\ubl\entities\cac\TransportMeans $transportMeans
     */
    private $transportMeans = null;

    /**
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\LoadingPortLocation $loadingPortLocation
     */
    private $loadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\UnloadingPortLocation $unloadingPortLocation
     */
    private $unloadingPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\TransshipPortLocation $transshipPortLocation
     */
    private $transshipPortLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\LoadingTransportEvent $loadingTransportEvent
     */
    private $loadingTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ExaminationTransportEvent $examinationTransportEvent
     */
    private $examinationTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\AvailabilityTransportEvent $availabilityTransportEvent
     */
    private $availabilityTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ExportationTransportEvent $exportationTransportEvent
     */
    private $exportationTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\DischargeTransportEvent $dischargeTransportEvent
     */
    private $dischargeTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\WarehousingTransportEvent $warehousingTransportEvent
     */
    private $warehousingTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\TakeoverTransportEvent $takeoverTransportEvent
     */
    private $takeoverTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent
     */
    private $optionalTakeoverTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\DropoffTransportEvent $dropoffTransportEvent
     */
    private $dropoffTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ActualPickupTransportEvent $actualPickupTransportEvent
     */
    private $actualPickupTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\DeliveryTransportEvent $deliveryTransportEvent
     */
    private $deliveryTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ReceiptTransportEvent $receiptTransportEvent
     */
    private $receiptTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\StorageTransportEvent $storageTransportEvent
     */
    private $storageTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\AcceptanceTransportEvent $acceptanceTransportEvent
     */
    private $acceptanceTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\TerminalOperatorParty $terminalOperatorParty
     */
    private $terminalOperatorParty = null;

    /**
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @var \horstoeko\ubl\entities\cac\CustomsAgentParty $customsAgentParty
     */
    private $customsAgentParty = null;

    /**
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @var \horstoeko\ubl\entities\cac\EstimatedTransitPeriod $estimatedTransitPeriod
     */
    private $estimatedTransitPeriod = null;

    /**
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @var \horstoeko\ubl\entities\cac\FreightChargeLocation $freightChargeLocation
     */
    private $freightChargeLocation = null;

    /**
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\DetentionTransportEvent[] $detentionTransportEvent
     */
    private $detentionTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\RequestedDepartureTransportEvent $requestedDepartureTransportEvent
     */
    private $requestedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\RequestedArrivalTransportEvent $requestedArrivalTransportEvent
     */
    private $requestedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\RequestedWaypointTransportEvent[] $requestedWaypointTransportEvent
     */
    private $requestedWaypointTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     */
    private $plannedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     */
    private $plannedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\PlannedWaypointTransportEvent[] $plannedWaypointTransportEvent
     */
    private $plannedWaypointTransportEvent = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ActualDepartureTransportEvent $actualDepartureTransportEvent
     */
    private $actualDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ActualWaypointTransportEvent $actualWaypointTransportEvent
     */
    private $actualWaypointTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\ActualArrivalTransportEvent $actualArrivalTransportEvent
     */
    private $actualArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     */
    private $estimatedDepartureTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \horstoeko\ubl\entities\cac\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     */
    private $estimatedArrivalTransportEvent = null;

    /**
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\PassengerPerson[] $passengerPerson
     */
    private $passengerPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\DriverPerson[] $driverPerson
     */
    private $driverPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\ReportingPerson $reportingPerson
     */
    private $reportingPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\CrewMemberPerson[] $crewMemberPerson
     */
    private $crewMemberPerson = [
        
    ];

    /**
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\SecurityOfficerPerson $securityOfficerPerson
     */
    private $securityOfficerPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\MasterPerson $masterPerson
     */
    private $masterPerson = null;

    /**
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @var \horstoeko\ubl\entities\cac\ShipsSurgeonPerson $shipsSurgeonPerson
     */
    private $shipsSurgeonPerson = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
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
     *  Shipment Stage. Identifier
     *  An identifier for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1 , 2 , etc..
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
     * Gets as transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportModeCode
     */
    public function getTransportModeCode()
    {
        return $this->transportModeCode;
    }

    /**
     * Sets a new transportModeCode
     *
     * BBIE
     *  Shipment Stage. Transport Mode Code. Code
     *  A code signifying the method of transport used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Mode Code
     *  Code
     *  Transport Mode
     *  Transport Mode_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransportModeCode $transportModeCode
     * @return self
     */
    public function setTransportModeCode(\horstoeko\ubl\entities\cbc\TransportModeCode $transportModeCode)
    {
        $this->transportModeCode = $transportModeCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransportMeansTypeCode
     */
    public function getTransportMeansTypeCode()
    {
        return $this->transportMeansTypeCode;
    }

    /**
     * Sets a new transportMeansTypeCode
     *
     * BBIE
     *  Shipment Stage. Transport Means Type Code. Code
     *  A code signifying the kind of transport means (truck, vessel, etc.) used for this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransportMeansTypeCode $transportMeansTypeCode
     * @return self
     */
    public function setTransportMeansTypeCode(\horstoeko\ubl\entities\cbc\TransportMeansTypeCode $transportMeansTypeCode)
    {
        $this->transportMeansTypeCode = $transportMeansTypeCode;
        return $this;
    }

    /**
     * Gets as transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\TransitDirectionCode
     */
    public function getTransitDirectionCode()
    {
        return $this->transitDirectionCode;
    }

    /**
     * Sets a new transitDirectionCode
     *
     * BBIE
     *  Shipment Stage. Transit_ Direction Code. Code
     *  A code signifying the direction of transit in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Direction Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\TransitDirectionCode $transitDirectionCode
     * @return self
     */
    public function setTransitDirectionCode(\horstoeko\ubl\entities\cbc\TransitDirectionCode $transitDirectionCode)
    {
        $this->transitDirectionCode = $transitDirectionCode;
        return $this;
    }

    /**
     * Gets as preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @return bool
     */
    public function getPreCarriageIndicator()
    {
        return $this->preCarriageIndicator;
    }

    /**
     * Sets a new preCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. Pre Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place before the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  Pre Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery to wharf
     *
     * @param bool $preCarriageIndicator
     * @return self
     */
    public function setPreCarriageIndicator($preCarriageIndicator)
    {
        $this->preCarriageIndicator = $preCarriageIndicator;
        return $this;
    }

    /**
     * Gets as onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @return bool
     */
    public function getOnCarriageIndicator()
    {
        return $this->onCarriageIndicator;
    }

    /**
     * Sets a new onCarriageIndicator
     *
     * BBIE
     *  Shipment Stage. On Carriage_ Indicator. Indicator
     *  An indicator that this stage takes place after the main carriage of the shipment (true) or not (false).
     *  0..1
     *  Shipment Stage
     *  On Carriage
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Truck delivery from wharf
     *
     * @param bool $onCarriageIndicator
     * @return self
     */
    public function setOnCarriageIndicator($onCarriageIndicator)
    {
        $this->onCarriageIndicator = $onCarriageIndicator;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->estimatedDeliveryDate;
    }

    /**
     * Sets a new estimatedDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Date. Date
     *  The estimated date of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $estimatedDeliveryDate
     * @return self
     */
    public function setEstimatedDeliveryDate(\DateTime $estimatedDeliveryDate)
    {
        $this->estimatedDeliveryDate = $estimatedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryTime()
    {
        return $this->estimatedDeliveryTime;
    }

    /**
     * Sets a new estimatedDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Estimated_ Delivery Time. Time
     *  The estimated time of delivery in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $estimatedDeliveryTime
     * @return self
     */
    public function setEstimatedDeliveryTime(\DateTime $estimatedDeliveryTime)
    {
        $this->estimatedDeliveryTime = $estimatedDeliveryTime;
        return $this;
    }

    /**
     * Gets as requiredDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequiredDeliveryDate()
    {
        return $this->requiredDeliveryDate;
    }

    /**
     * Sets a new requiredDeliveryDate
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Date. Date
     *  The delivery date required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requiredDeliveryDate
     * @return self
     */
    public function setRequiredDeliveryDate(\DateTime $requiredDeliveryDate)
    {
        $this->requiredDeliveryDate = $requiredDeliveryDate;
        return $this;
    }

    /**
     * Gets as requiredDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getRequiredDeliveryTime()
    {
        return $this->requiredDeliveryTime;
    }

    /**
     * Sets a new requiredDeliveryTime
     *
     * BBIE
     *  Shipment Stage. Required_ Delivery Time. Time
     *  The delivery time required by the buyer in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Required
     *  Delivery Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $requiredDeliveryTime
     * @return self
     */
    public function setRequiredDeliveryTime(\DateTime $requiredDeliveryTime)
    {
        $this->requiredDeliveryTime = $requiredDeliveryTime;
        return $this;
    }

    /**
     * Gets as loadingSequenceID
     *
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LoadingSequenceID
     */
    public function getLoadingSequenceID()
    {
        return $this->loadingSequenceID;
    }

    /**
     * Sets a new loadingSequenceID
     *
     * BBIE
     *  Shipment Stage. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence (of consignments) associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LoadingSequenceID $loadingSequenceID
     * @return self
     */
    public function setLoadingSequenceID(\horstoeko\ubl\entities\cbc\LoadingSequenceID $loadingSequenceID)
    {
        $this->loadingSequenceID = $loadingSequenceID;
        return $this;
    }

    /**
     * Gets as successiveSequenceID
     *
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \horstoeko\ubl\entities\cbc\SuccessiveSequenceID
     */
    public function getSuccessiveSequenceID()
    {
        return $this->successiveSequenceID;
    }

    /**
     * Sets a new successiveSequenceID
     *
     * BBIE
     *  Shipment Stage. Successive_ Sequence Identifier. Identifier
     *  Identifies the successive loading sequence (of consignments) associated with a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Successive
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \horstoeko\ubl\entities\cbc\SuccessiveSequenceID $successiveSequenceID
     * @return self
     */
    public function setSuccessiveSequenceID(\horstoeko\ubl\entities\cbc\SuccessiveSequenceID $successiveSequenceID)
    {
        $this->successiveSequenceID = $successiveSequenceID;
        return $this;
    }

    /**
     * Adds as instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\Instructions $instructions
     */
    public function addToInstructions(\horstoeko\ubl\entities\cbc\Instructions $instructions)
    {
        $this->instructions[] = $instructions;
        return $this;
    }

    /**
     * isset instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstructions($index)
    {
        return isset($this->instructions[$index]);
    }

    /**
     * unset instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstructions($index)
    {
        unset($this->instructions[$index]);
    }

    /**
     * Gets as instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\Instructions[]
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * Sets a new instructions
     *
     * BBIE
     *  Shipment Stage. Instructions. Text
     *  Text of instructions applicable to a shipment stage.
     *  0..n
     *  Shipment Stage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\Instructions[] $instructions
     * @return self
     */
    public function setInstructions(array $instructions)
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * Adds as demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \horstoeko\ubl\entities\cbc\DemurrageInstructions $demurrageInstructions
     */
    public function addToDemurrageInstructions(\horstoeko\ubl\entities\cbc\DemurrageInstructions $demurrageInstructions)
    {
        $this->demurrageInstructions[] = $demurrageInstructions;
        return $this;
    }

    /**
     * isset demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDemurrageInstructions($index)
    {
        return isset($this->demurrageInstructions[$index]);
    }

    /**
     * unset demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDemurrageInstructions($index)
    {
        unset($this->demurrageInstructions[$index]);
    }

    /**
     * Gets as demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DemurrageInstructions[]
     */
    public function getDemurrageInstructions()
    {
        return $this->demurrageInstructions;
    }

    /**
     * Sets a new demurrageInstructions
     *
     * BBIE
     *  Shipment Stage. Demurrage_ Instructions. Text
     *  Text of instructions relating to demurrage (the case in which a vessel is prevented from loading or discharging cargo within the stipulated laytime).
     *  0..n
     *  Shipment Stage
     *  Demurrage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DemurrageInstructions[] $demurrageInstructions
     * @return self
     */
    public function setDemurrageInstructions(array $demurrageInstructions)
    {
        $this->demurrageInstructions = $demurrageInstructions;
        return $this;
    }

    /**
     * Gets as crewQuantity
     *
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CrewQuantity
     */
    public function getCrewQuantity()
    {
        return $this->crewQuantity;
    }

    /**
     * Sets a new crewQuantity
     *
     * BBIE
     *  Shipment Stage. Crew Quantity. Quantity
     *  The total number of crew aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Crew Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CrewQuantity $crewQuantity
     * @return self
     */
    public function setCrewQuantity(\horstoeko\ubl\entities\cbc\CrewQuantity $crewQuantity)
    {
        $this->crewQuantity = $crewQuantity;
        return $this;
    }

    /**
     * Gets as passengerQuantity
     *
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PassengerQuantity
     */
    public function getPassengerQuantity()
    {
        return $this->passengerQuantity;
    }

    /**
     * Sets a new passengerQuantity
     *
     * BBIE
     *  Shipment Stage. Passenger Quantity. Quantity
     *  The total number of passengers aboard a transport means.
     *  0..1
     *  Shipment Stage
     *  Passenger Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \horstoeko\ubl\entities\cbc\PassengerQuantity $passengerQuantity
     * @return self
     */
    public function setPassengerQuantity(\horstoeko\ubl\entities\cbc\PassengerQuantity $passengerQuantity)
    {
        $this->passengerQuantity = $passengerQuantity;
        return $this;
    }

    /**
     * Gets as transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\TransitPeriod
     */
    public function getTransitPeriod()
    {
        return $this->transitPeriod;
    }

    /**
     * Sets a new transitPeriod
     *
     * ASBIE
     *  Shipment Stage. Transit_ Period. Period
     *  The period during which this shipment stage actually took place.
     *  0..1
     *  Shipment Stage
     *  Transit
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\TransitPeriod $transitPeriod
     * @return self
     */
    public function setTransitPeriod(\horstoeko\ubl\entities\cac\TransitPeriod $transitPeriod)
    {
        $this->transitPeriod = $transitPeriod;
        return $this;
    }

    /**
     * Adds as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CarrierParty $carrierParty
     */
    public function addToCarrierParty(\horstoeko\ubl\entities\cac\CarrierParty $carrierParty)
    {
        $this->carrierParty[] = $carrierParty;
        return $this;
    }

    /**
     * isset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierParty($index)
    {
        return isset($this->carrierParty[$index]);
    }

    /**
     * unset carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierParty($index)
    {
        unset($this->carrierParty[$index]);
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\CarrierParty[]
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Shipment Stage. Carrier_ Party. Party
     *  A carrier party responsible for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\CarrierParty[] $carrierParty
     * @return self
     */
    public function setCarrierParty(array $carrierParty)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @return \horstoeko\ubl\entities\cac\TransportMeans
     */
    public function getTransportMeans()
    {
        return $this->transportMeans;
    }

    /**
     * Sets a new transportMeans
     *
     * ASBIE
     *  Shipment Stage. Transport Means
     *  The means of transport used in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transport Means
     *  Transport Means
     *  Transport Means
     *
     * @param \horstoeko\ubl\entities\cac\TransportMeans $transportMeans
     * @return self
     */
    public function setTransportMeans(\horstoeko\ubl\entities\cac\TransportMeans $transportMeans)
    {
        $this->transportMeans = $transportMeans;
        return $this;
    }

    /**
     * Gets as loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\LoadingPortLocation
     */
    public function getLoadingPortLocation()
    {
        return $this->loadingPortLocation;
    }

    /**
     * Sets a new loadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Loading Port_ Location. Location
     *  The location of loading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading Port
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\LoadingPortLocation $loadingPortLocation
     * @return self
     */
    public function setLoadingPortLocation(\horstoeko\ubl\entities\cac\LoadingPortLocation $loadingPortLocation)
    {
        $this->loadingPortLocation = $loadingPortLocation;
        return $this;
    }

    /**
     * Gets as unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\UnloadingPortLocation
     */
    public function getUnloadingPortLocation()
    {
        return $this->unloadingPortLocation;
    }

    /**
     * Sets a new unloadingPortLocation
     *
     * ASBIE
     *  Shipment Stage. Unloading Port_ Location. Location
     *  The location of unloading for a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Unloading Port
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\UnloadingPortLocation $unloadingPortLocation
     * @return self
     */
    public function setUnloadingPortLocation(\horstoeko\ubl\entities\cac\UnloadingPortLocation $unloadingPortLocation)
    {
        $this->unloadingPortLocation = $unloadingPortLocation;
        return $this;
    }

    /**
     * Gets as transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\TransshipPortLocation
     */
    public function getTransshipPortLocation()
    {
        return $this->transshipPortLocation;
    }

    /**
     * Sets a new transshipPortLocation
     *
     * ASBIE
     *  Shipment Stage. Transship Port_ Location. Location
     *  The location of transshipment relating to a shipment stage.
     *  0..1
     *  Shipment Stage
     *  Transship Port
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\TransshipPortLocation $transshipPortLocation
     * @return self
     */
    public function setTransshipPortLocation(\horstoeko\ubl\entities\cac\TransshipPortLocation $transshipPortLocation)
    {
        $this->transshipPortLocation = $transshipPortLocation;
        return $this;
    }

    /**
     * Gets as loadingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\LoadingTransportEvent
     */
    public function getLoadingTransportEvent()
    {
        return $this->loadingTransportEvent;
    }

    /**
     * Sets a new loadingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Loading_ Transport Event. Transport Event
     *  The loading of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Loading
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\LoadingTransportEvent $loadingTransportEvent
     * @return self
     */
    public function setLoadingTransportEvent(\horstoeko\ubl\entities\cac\LoadingTransportEvent $loadingTransportEvent)
    {
        $this->loadingTransportEvent = $loadingTransportEvent;
        return $this;
    }

    /**
     * Gets as examinationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ExaminationTransportEvent
     */
    public function getExaminationTransportEvent()
    {
        return $this->examinationTransportEvent;
    }

    /**
     * Sets a new examinationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Examination_ Transport Event. Transport Event
     *  The examination of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Examination
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ExaminationTransportEvent $examinationTransportEvent
     * @return self
     */
    public function setExaminationTransportEvent(\horstoeko\ubl\entities\cac\ExaminationTransportEvent $examinationTransportEvent)
    {
        $this->examinationTransportEvent = $examinationTransportEvent;
        return $this;
    }

    /**
     * Gets as availabilityTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\AvailabilityTransportEvent
     */
    public function getAvailabilityTransportEvent()
    {
        return $this->availabilityTransportEvent;
    }

    /**
     * Sets a new availabilityTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Availability_ Transport Event. Transport Event
     *  The making available of shipments in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Availability
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\AvailabilityTransportEvent $availabilityTransportEvent
     * @return self
     */
    public function setAvailabilityTransportEvent(\horstoeko\ubl\entities\cac\AvailabilityTransportEvent $availabilityTransportEvent)
    {
        $this->availabilityTransportEvent = $availabilityTransportEvent;
        return $this;
    }

    /**
     * Gets as exportationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ExportationTransportEvent
     */
    public function getExportationTransportEvent()
    {
        return $this->exportationTransportEvent;
    }

    /**
     * Sets a new exportationTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Exportation_ Transport Event. Transport Event
     *  The export event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Exportation
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ExportationTransportEvent $exportationTransportEvent
     * @return self
     */
    public function setExportationTransportEvent(\horstoeko\ubl\entities\cac\ExportationTransportEvent $exportationTransportEvent)
    {
        $this->exportationTransportEvent = $exportationTransportEvent;
        return $this;
    }

    /**
     * Gets as dischargeTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\DischargeTransportEvent
     */
    public function getDischargeTransportEvent()
    {
        return $this->dischargeTransportEvent;
    }

    /**
     * Sets a new dischargeTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Discharge_ Transport Event. Transport Event
     *  The discharge event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Discharge
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\DischargeTransportEvent $dischargeTransportEvent
     * @return self
     */
    public function setDischargeTransportEvent(\horstoeko\ubl\entities\cac\DischargeTransportEvent $dischargeTransportEvent)
    {
        $this->dischargeTransportEvent = $dischargeTransportEvent;
        return $this;
    }

    /**
     * Gets as warehousingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\WarehousingTransportEvent
     */
    public function getWarehousingTransportEvent()
    {
        return $this->warehousingTransportEvent;
    }

    /**
     * Sets a new warehousingTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Warehousing_ Transport Event. Transport Event
     *  The warehousing event associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Warehousing
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\WarehousingTransportEvent $warehousingTransportEvent
     * @return self
     */
    public function setWarehousingTransportEvent(\horstoeko\ubl\entities\cac\WarehousingTransportEvent $warehousingTransportEvent)
    {
        $this->warehousingTransportEvent = $warehousingTransportEvent;
        return $this;
    }

    /**
     * Gets as takeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\TakeoverTransportEvent
     */
    public function getTakeoverTransportEvent()
    {
        return $this->takeoverTransportEvent;
    }

    /**
     * Sets a new takeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Takeover_ Transport Event. Transport Event
     *  The receiver's takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\TakeoverTransportEvent $takeoverTransportEvent
     * @return self
     */
    public function setTakeoverTransportEvent(\horstoeko\ubl\entities\cac\TakeoverTransportEvent $takeoverTransportEvent)
    {
        $this->takeoverTransportEvent = $takeoverTransportEvent;
        return $this;
    }

    /**
     * Gets as optionalTakeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\OptionalTakeoverTransportEvent
     */
    public function getOptionalTakeoverTransportEvent()
    {
        return $this->optionalTakeoverTransportEvent;
    }

    /**
     * Sets a new optionalTakeoverTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Optional Takeover_ Transport Event. Transport Event
     *  The optional takeover of the goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Optional Takeover
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent
     * @return self
     */
    public function setOptionalTakeoverTransportEvent(\horstoeko\ubl\entities\cac\OptionalTakeoverTransportEvent $optionalTakeoverTransportEvent)
    {
        $this->optionalTakeoverTransportEvent = $optionalTakeoverTransportEvent;
        return $this;
    }

    /**
     * Gets as dropoffTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\DropoffTransportEvent
     */
    public function getDropoffTransportEvent()
    {
        return $this->dropoffTransportEvent;
    }

    /**
     * Sets a new dropoffTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Dropoff_ Transport Event. Transport Event
     *  The dropping off of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Dropoff
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\DropoffTransportEvent $dropoffTransportEvent
     * @return self
     */
    public function setDropoffTransportEvent(\horstoeko\ubl\entities\cac\DropoffTransportEvent $dropoffTransportEvent)
    {
        $this->dropoffTransportEvent = $dropoffTransportEvent;
        return $this;
    }

    /**
     * Gets as actualPickupTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ActualPickupTransportEvent
     */
    public function getActualPickupTransportEvent()
    {
        return $this->actualPickupTransportEvent;
    }

    /**
     * Sets a new actualPickupTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Pickup_ Transport Event. Transport Event
     *  The pickup of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Actual Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ActualPickupTransportEvent $actualPickupTransportEvent
     * @return self
     */
    public function setActualPickupTransportEvent(\horstoeko\ubl\entities\cac\ActualPickupTransportEvent $actualPickupTransportEvent)
    {
        $this->actualPickupTransportEvent = $actualPickupTransportEvent;
        return $this;
    }

    /**
     * Gets as deliveryTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\DeliveryTransportEvent
     */
    public function getDeliveryTransportEvent()
    {
        return $this->deliveryTransportEvent;
    }

    /**
     * Sets a new deliveryTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Delivery_ Transport Event. Transport Event
     *  The delivery of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\DeliveryTransportEvent $deliveryTransportEvent
     * @return self
     */
    public function setDeliveryTransportEvent(\horstoeko\ubl\entities\cac\DeliveryTransportEvent $deliveryTransportEvent)
    {
        $this->deliveryTransportEvent = $deliveryTransportEvent;
        return $this;
    }

    /**
     * Gets as receiptTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ReceiptTransportEvent
     */
    public function getReceiptTransportEvent()
    {
        return $this->receiptTransportEvent;
    }

    /**
     * Sets a new receiptTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Receipt_ Transport Event. Transport Event
     *  The receipt of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Receipt
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ReceiptTransportEvent $receiptTransportEvent
     * @return self
     */
    public function setReceiptTransportEvent(\horstoeko\ubl\entities\cac\ReceiptTransportEvent $receiptTransportEvent)
    {
        $this->receiptTransportEvent = $receiptTransportEvent;
        return $this;
    }

    /**
     * Gets as storageTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\StorageTransportEvent
     */
    public function getStorageTransportEvent()
    {
        return $this->storageTransportEvent;
    }

    /**
     * Sets a new storageTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Storage_ Transport Event. Transport Event
     *  The storage of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Storage
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\StorageTransportEvent $storageTransportEvent
     * @return self
     */
    public function setStorageTransportEvent(\horstoeko\ubl\entities\cac\StorageTransportEvent $storageTransportEvent)
    {
        $this->storageTransportEvent = $storageTransportEvent;
        return $this;
    }

    /**
     * Gets as acceptanceTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\AcceptanceTransportEvent
     */
    public function getAcceptanceTransportEvent()
    {
        return $this->acceptanceTransportEvent;
    }

    /**
     * Sets a new acceptanceTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Acceptance_ Transport Event. Transport Event
     *  The acceptance of goods in this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Acceptance
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\AcceptanceTransportEvent $acceptanceTransportEvent
     * @return self
     */
    public function setAcceptanceTransportEvent(\horstoeko\ubl\entities\cac\AcceptanceTransportEvent $acceptanceTransportEvent)
    {
        $this->acceptanceTransportEvent = $acceptanceTransportEvent;
        return $this;
    }

    /**
     * Gets as terminalOperatorParty
     *
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\TerminalOperatorParty
     */
    public function getTerminalOperatorParty()
    {
        return $this->terminalOperatorParty;
    }

    /**
     * Sets a new terminalOperatorParty
     *
     * ASBIE
     *  Shipment Stage. Terminal Operator_ Party. Party
     *  A terminal operator associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Terminal Operator
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\TerminalOperatorParty $terminalOperatorParty
     * @return self
     */
    public function setTerminalOperatorParty(\horstoeko\ubl\entities\cac\TerminalOperatorParty $terminalOperatorParty)
    {
        $this->terminalOperatorParty = $terminalOperatorParty;
        return $this;
    }

    /**
     * Gets as customsAgentParty
     *
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @return \horstoeko\ubl\entities\cac\CustomsAgentParty
     */
    public function getCustomsAgentParty()
    {
        return $this->customsAgentParty;
    }

    /**
     * Sets a new customsAgentParty
     *
     * ASBIE
     *  Shipment Stage. Customs Agent_ Party. Party
     *  A customs agent associated with this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Customs Agent
     *  Party
     *  Party
     *  Party
     *
     * @param \horstoeko\ubl\entities\cac\CustomsAgentParty $customsAgentParty
     * @return self
     */
    public function setCustomsAgentParty(\horstoeko\ubl\entities\cac\CustomsAgentParty $customsAgentParty)
    {
        $this->customsAgentParty = $customsAgentParty;
        return $this;
    }

    /**
     * Gets as estimatedTransitPeriod
     *
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @return \horstoeko\ubl\entities\cac\EstimatedTransitPeriod
     */
    public function getEstimatedTransitPeriod()
    {
        return $this->estimatedTransitPeriod;
    }

    /**
     * Sets a new estimatedTransitPeriod
     *
     * ASBIE
     *  Shipment Stage. Estimated Transit_ Period. Period
     *  The estimated transit period of this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Estimated Transit
     *  Period
     *  Period
     *  Period
     *
     * @param \horstoeko\ubl\entities\cac\EstimatedTransitPeriod $estimatedTransitPeriod
     * @return self
     */
    public function setEstimatedTransitPeriod(\horstoeko\ubl\entities\cac\EstimatedTransitPeriod $estimatedTransitPeriod)
    {
        $this->estimatedTransitPeriod = $estimatedTransitPeriod;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\horstoeko\ubl\entities\cac\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \horstoeko\ubl\entities\cac\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Shipment Stage. Freight_ Allowance Charge. Allowance Charge
     *  A freight allowance charge for this shipment stage.
     *  0..n
     *  Shipment Stage
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \horstoeko\ubl\entities\cac\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Gets as freightChargeLocation
     *
     * ASBIE
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @return \horstoeko\ubl\entities\cac\FreightChargeLocation
     */
    public function getFreightChargeLocation()
    {
        return $this->freightChargeLocation;
    }

    /**
     * Sets a new freightChargeLocation
     *
     * ASBIE
     *  Shipment Stage. Freight Charge_ Location. Location
     *  The location associated with a freight charge related to this shipment stage.
     *  0..1
     *  Shipment Stage
     *  Freight Charge
     *  Location
     *  Location
     *  Location
     *
     * @param \horstoeko\ubl\entities\cac\FreightChargeLocation $freightChargeLocation
     * @return self
     */
    public function setFreightChargeLocation(\horstoeko\ubl\entities\cac\FreightChargeLocation $freightChargeLocation)
    {
        $this->freightChargeLocation = $freightChargeLocation;
        return $this;
    }

    /**
     * Adds as detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DetentionTransportEvent $detentionTransportEvent
     */
    public function addToDetentionTransportEvent(\horstoeko\ubl\entities\cac\DetentionTransportEvent $detentionTransportEvent)
    {
        $this->detentionTransportEvent[] = $detentionTransportEvent;
        return $this;
    }

    /**
     * isset detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetentionTransportEvent($index)
    {
        return isset($this->detentionTransportEvent[$index]);
    }

    /**
     * unset detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetentionTransportEvent($index)
    {
        unset($this->detentionTransportEvent[$index]);
    }

    /**
     * Gets as detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\DetentionTransportEvent[]
     */
    public function getDetentionTransportEvent()
    {
        return $this->detentionTransportEvent;
    }

    /**
     * Sets a new detentionTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Detention_ Transport Event. Transport Event
     *  The detention of a transport means during loading and unloading operations.
     *  0..n
     *  Shipment Stage
     *  Detention
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\DetentionTransportEvent[] $detentionTransportEvent
     * @return self
     */
    public function setDetentionTransportEvent(array $detentionTransportEvent)
    {
        $this->detentionTransportEvent = $detentionTransportEvent;
        return $this;
    }

    /**
     * Gets as requestedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\RequestedDepartureTransportEvent
     */
    public function getRequestedDepartureTransportEvent()
    {
        return $this->requestedDepartureTransportEvent;
    }

    /**
     * Sets a new requestedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Departure_ Transport Event. Transport Event
     *  The departure requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\RequestedDepartureTransportEvent $requestedDepartureTransportEvent
     * @return self
     */
    public function setRequestedDepartureTransportEvent(\horstoeko\ubl\entities\cac\RequestedDepartureTransportEvent $requestedDepartureTransportEvent)
    {
        $this->requestedDepartureTransportEvent = $requestedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as requestedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\RequestedArrivalTransportEvent
     */
    public function getRequestedArrivalTransportEvent()
    {
        return $this->requestedArrivalTransportEvent;
    }

    /**
     * Sets a new requestedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Arrival_ Transport Event. Transport Event
     *  The arrival requested by the party requesting a transportation service.
     *  0..1
     *  Shipment Stage
     *  Requested Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\RequestedArrivalTransportEvent $requestedArrivalTransportEvent
     * @return self
     */
    public function setRequestedArrivalTransportEvent(\horstoeko\ubl\entities\cac\RequestedArrivalTransportEvent $requestedArrivalTransportEvent)
    {
        $this->requestedArrivalTransportEvent = $requestedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\RequestedWaypointTransportEvent $requestedWaypointTransportEvent
     */
    public function addToRequestedWaypointTransportEvent(\horstoeko\ubl\entities\cac\RequestedWaypointTransportEvent $requestedWaypointTransportEvent)
    {
        $this->requestedWaypointTransportEvent[] = $requestedWaypointTransportEvent;
        return $this;
    }

    /**
     * isset requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedWaypointTransportEvent($index)
    {
        return isset($this->requestedWaypointTransportEvent[$index]);
    }

    /**
     * unset requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedWaypointTransportEvent($index)
    {
        unset($this->requestedWaypointTransportEvent[$index]);
    }

    /**
     * Gets as requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\RequestedWaypointTransportEvent[]
     */
    public function getRequestedWaypointTransportEvent()
    {
        return $this->requestedWaypointTransportEvent;
    }

    /**
     * Sets a new requestedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Requested Waypoint_ Transport Event. Transport Event
     *  A waypoint requested by the party requesting a transportation service.
     *  0..n
     *  Shipment Stage
     *  Requested Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\RequestedWaypointTransportEvent[] $requestedWaypointTransportEvent
     * @return self
     */
    public function setRequestedWaypointTransportEvent(array $requestedWaypointTransportEvent)
    {
        $this->requestedWaypointTransportEvent = $requestedWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\PlannedDepartureTransportEvent
     */
    public function getPlannedDepartureTransportEvent()
    {
        return $this->plannedDepartureTransportEvent;
    }

    /**
     * Sets a new plannedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Departure_ Transport Event. Transport Event
     *  The departure planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\PlannedDepartureTransportEvent $plannedDepartureTransportEvent
     * @return self
     */
    public function setPlannedDepartureTransportEvent(\horstoeko\ubl\entities\cac\PlannedDepartureTransportEvent $plannedDepartureTransportEvent)
    {
        $this->plannedDepartureTransportEvent = $plannedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\PlannedArrivalTransportEvent
     */
    public function getPlannedArrivalTransportEvent()
    {
        return $this->plannedArrivalTransportEvent;
    }

    /**
     * Sets a new plannedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Arrival_ Transport Event. Transport Event
     *  The arrival planned by the party providing a transportation service.
     *  0..1
     *  Shipment Stage
     *  Planned Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\PlannedArrivalTransportEvent $plannedArrivalTransportEvent
     * @return self
     */
    public function setPlannedArrivalTransportEvent(\horstoeko\ubl\entities\cac\PlannedArrivalTransportEvent $plannedArrivalTransportEvent)
    {
        $this->plannedArrivalTransportEvent = $plannedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PlannedWaypointTransportEvent $plannedWaypointTransportEvent
     */
    public function addToPlannedWaypointTransportEvent(\horstoeko\ubl\entities\cac\PlannedWaypointTransportEvent $plannedWaypointTransportEvent)
    {
        $this->plannedWaypointTransportEvent[] = $plannedWaypointTransportEvent;
        return $this;
    }

    /**
     * isset plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlannedWaypointTransportEvent($index)
    {
        return isset($this->plannedWaypointTransportEvent[$index]);
    }

    /**
     * unset plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlannedWaypointTransportEvent($index)
    {
        unset($this->plannedWaypointTransportEvent[$index]);
    }

    /**
     * Gets as plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\PlannedWaypointTransportEvent[]
     */
    public function getPlannedWaypointTransportEvent()
    {
        return $this->plannedWaypointTransportEvent;
    }

    /**
     * Sets a new plannedWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Planned Waypoint_ Transport Event. Transport Event
     *  A waypoint planned by the party providing a transportation service.
     *  0..n
     *  Shipment Stage
     *  Planned Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\PlannedWaypointTransportEvent[] $plannedWaypointTransportEvent
     * @return self
     */
    public function setPlannedWaypointTransportEvent(array $plannedWaypointTransportEvent)
    {
        $this->plannedWaypointTransportEvent = $plannedWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as actualDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ActualDepartureTransportEvent
     */
    public function getActualDepartureTransportEvent()
    {
        return $this->actualDepartureTransportEvent;
    }

    /**
     * Sets a new actualDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Departure_ Transport Event. Transport Event
     *  The actual departure from a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ActualDepartureTransportEvent $actualDepartureTransportEvent
     * @return self
     */
    public function setActualDepartureTransportEvent(\horstoeko\ubl\entities\cac\ActualDepartureTransportEvent $actualDepartureTransportEvent)
    {
        $this->actualDepartureTransportEvent = $actualDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as actualWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ActualWaypointTransportEvent
     */
    public function getActualWaypointTransportEvent()
    {
        return $this->actualWaypointTransportEvent;
    }

    /**
     * Sets a new actualWaypointTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Waypoint_ Transport Event. Transport Event
     *  The location of an actual waypoint during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Waypoint
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ActualWaypointTransportEvent $actualWaypointTransportEvent
     * @return self
     */
    public function setActualWaypointTransportEvent(\horstoeko\ubl\entities\cac\ActualWaypointTransportEvent $actualWaypointTransportEvent)
    {
        $this->actualWaypointTransportEvent = $actualWaypointTransportEvent;
        return $this;
    }

    /**
     * Gets as actualArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\ActualArrivalTransportEvent
     */
    public function getActualArrivalTransportEvent()
    {
        return $this->actualArrivalTransportEvent;
    }

    /**
     * Sets a new actualArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Actual Arrival_ Transport Event. Transport Event
     *  The actual arrival at a specific location during a transportation service.
     *  0..1
     *  Shipment Stage
     *  Actual Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\ActualArrivalTransportEvent $actualArrivalTransportEvent
     * @return self
     */
    public function setActualArrivalTransportEvent(\horstoeko\ubl\entities\cac\ActualArrivalTransportEvent $actualArrivalTransportEvent)
    {
        $this->actualArrivalTransportEvent = $actualArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     *  Shipment Stage. Transport Event
     *  A significant occurrence in the course of this shipment of goods.
     *  0..n
     *  Shipment Stage
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
     * Gets as estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\EstimatedDepartureTransportEvent
     */
    public function getEstimatedDepartureTransportEvent()
    {
        return $this->estimatedDepartureTransportEvent;
    }

    /**
     * Sets a new estimatedDepartureTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Departure_ Transport Event. Transport Event
     *  Describes an estimated departure at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Departure
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent
     * @return self
     */
    public function setEstimatedDepartureTransportEvent(\horstoeko\ubl\entities\cac\EstimatedDepartureTransportEvent $estimatedDepartureTransportEvent)
    {
        $this->estimatedDepartureTransportEvent = $estimatedDepartureTransportEvent;
        return $this;
    }

    /**
     * Gets as estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \horstoeko\ubl\entities\cac\EstimatedArrivalTransportEvent
     */
    public function getEstimatedArrivalTransportEvent()
    {
        return $this->estimatedArrivalTransportEvent;
    }

    /**
     * Sets a new estimatedArrivalTransportEvent
     *
     * ASBIE
     *  Shipment Stage. Estimated Arrival_ Transport Event. Transport Event
     *  Describes an estimated arrival at a location during a transport service.
     *  0..1
     *  Shipment Stage
     *  Estimated Arrival
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \horstoeko\ubl\entities\cac\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent
     * @return self
     */
    public function setEstimatedArrivalTransportEvent(\horstoeko\ubl\entities\cac\EstimatedArrivalTransportEvent $estimatedArrivalTransportEvent)
    {
        $this->estimatedArrivalTransportEvent = $estimatedArrivalTransportEvent;
        return $this;
    }

    /**
     * Adds as passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\PassengerPerson $passengerPerson
     */
    public function addToPassengerPerson(\horstoeko\ubl\entities\cac\PassengerPerson $passengerPerson)
    {
        $this->passengerPerson[] = $passengerPerson;
        return $this;
    }

    /**
     * isset passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerPerson($index)
    {
        return isset($this->passengerPerson[$index]);
    }

    /**
     * unset passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerPerson($index)
    {
        unset($this->passengerPerson[$index]);
    }

    /**
     * Gets as passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\PassengerPerson[]
     */
    public function getPassengerPerson()
    {
        return $this->passengerPerson;
    }

    /**
     * Sets a new passengerPerson
     *
     * ASBIE
     *  Shipment Stage. Passenger_ Person. Person
     *  A person who travels in a conveyance without participating in its operation.
     *  0..n
     *  Shipment Stage
     *  Passenger
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\PassengerPerson[] $passengerPerson
     * @return self
     */
    public function setPassengerPerson(array $passengerPerson)
    {
        $this->passengerPerson = $passengerPerson;
        return $this;
    }

    /**
     * Adds as driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\DriverPerson $driverPerson
     */
    public function addToDriverPerson(\horstoeko\ubl\entities\cac\DriverPerson $driverPerson)
    {
        $this->driverPerson[] = $driverPerson;
        return $this;
    }

    /**
     * isset driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDriverPerson($index)
    {
        return isset($this->driverPerson[$index]);
    }

    /**
     * unset driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDriverPerson($index)
    {
        unset($this->driverPerson[$index]);
    }

    /**
     * Gets as driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\DriverPerson[]
     */
    public function getDriverPerson()
    {
        return $this->driverPerson;
    }

    /**
     * Sets a new driverPerson
     *
     * ASBIE
     *  Shipment Stage. Driver_ Person. Person
     *  Describes a person responsible for driving the transport means.
     *  0..n
     *  Shipment Stage
     *  Driver
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\DriverPerson[] $driverPerson
     * @return self
     */
    public function setDriverPerson(array $driverPerson)
    {
        $this->driverPerson = $driverPerson;
        return $this;
    }

    /**
     * Gets as reportingPerson
     *
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\ReportingPerson
     */
    public function getReportingPerson()
    {
        return $this->reportingPerson;
    }

    /**
     * Sets a new reportingPerson
     *
     * ASBIE
     *  Shipment Stage. Reporting_ Person. Person
     *  Describes a person being responsible for providing the required administrative reporting relating to a transport.
     *  0..1
     *  Shipment Stage
     *  Reporting
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\ReportingPerson $reportingPerson
     * @return self
     */
    public function setReportingPerson(\horstoeko\ubl\entities\cac\ReportingPerson $reportingPerson)
    {
        $this->reportingPerson = $reportingPerson;
        return $this;
    }

    /**
     * Adds as crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \horstoeko\ubl\entities\cac\CrewMemberPerson $crewMemberPerson
     */
    public function addToCrewMemberPerson(\horstoeko\ubl\entities\cac\CrewMemberPerson $crewMemberPerson)
    {
        $this->crewMemberPerson[] = $crewMemberPerson;
        return $this;
    }

    /**
     * isset crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCrewMemberPerson($index)
    {
        return isset($this->crewMemberPerson[$index]);
    }

    /**
     * unset crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCrewMemberPerson($index)
    {
        unset($this->crewMemberPerson[$index]);
    }

    /**
     * Gets as crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\CrewMemberPerson[]
     */
    public function getCrewMemberPerson()
    {
        return $this->crewMemberPerson;
    }

    /**
     * Sets a new crewMemberPerson
     *
     * ASBIE
     *  Shipment Stage. Crew Member_ Person. Person
     *  A person operating or serving aboard a transport means.
     *  0..n
     *  Shipment Stage
     *  Crew Member
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\CrewMemberPerson[] $crewMemberPerson
     * @return self
     */
    public function setCrewMemberPerson(array $crewMemberPerson)
    {
        $this->crewMemberPerson = $crewMemberPerson;
        return $this;
    }

    /**
     * Gets as securityOfficerPerson
     *
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\SecurityOfficerPerson
     */
    public function getSecurityOfficerPerson()
    {
        return $this->securityOfficerPerson;
    }

    /**
     * Sets a new securityOfficerPerson
     *
     * ASBIE
     *  Shipment Stage. Security Officer_ Person. Person
     *  The person on board the vessel, accountable to the master, designated by the company as responsible for the security of the ship, including implementation and maintenance of the ship security plan and for the liaison with the company security officer and the port facility security officers.
     *  0..1
     *  Shipment Stage
     *  Security Officer
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\SecurityOfficerPerson $securityOfficerPerson
     * @return self
     */
    public function setSecurityOfficerPerson(\horstoeko\ubl\entities\cac\SecurityOfficerPerson $securityOfficerPerson)
    {
        $this->securityOfficerPerson = $securityOfficerPerson;
        return $this;
    }

    /**
     * Gets as masterPerson
     *
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\MasterPerson
     */
    public function getMasterPerson()
    {
        return $this->masterPerson;
    }

    /**
     * Sets a new masterPerson
     *
     * ASBIE
     *  Shipment Stage. Master_ Person. Person
     *  The person responsible for the ship's safe and efficient operation, including cargo operations, navigation, crew management and for ensuring that the vessel complies with local and international laws, as well as company and flag state policies.
     *  0..1
     *  Shipment Stage
     *  Master
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\MasterPerson $masterPerson
     * @return self
     */
    public function setMasterPerson(\horstoeko\ubl\entities\cac\MasterPerson $masterPerson)
    {
        $this->masterPerson = $masterPerson;
        return $this;
    }

    /**
     * Gets as shipsSurgeonPerson
     *
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @return \horstoeko\ubl\entities\cac\ShipsSurgeonPerson
     */
    public function getShipsSurgeonPerson()
    {
        return $this->shipsSurgeonPerson;
    }

    /**
     * Sets a new shipsSurgeonPerson
     *
     * ASBIE
     *  Shipment Stage. Ships Surgeon_ Person. Person
     *  The person responsible for the health of the people aboard a ship at sea.
     *  0..1
     *  Shipment Stage
     *  Ships Surgeon
     *  Person
     *  Person
     *  Person
     *
     * @param \horstoeko\ubl\entities\cac\ShipsSurgeonPerson $shipsSurgeonPerson
     * @return self
     */
    public function setShipsSurgeonPerson(\horstoeko\ubl\entities\cac\ShipsSurgeonPerson $shipsSurgeonPerson)
    {
        $this->shipsSurgeonPerson = $shipsSurgeonPerson;
        return $this;
    }


}

