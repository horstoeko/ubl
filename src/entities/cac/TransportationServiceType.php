<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TransportationServiceType
 *
 * ABIE
 *  Transportation Service. Details
 *  Transport service details.
 *  Transportation Service
 * XSD Type: TransportationServiceType
 */
class TransportationServiceType
{

    /**
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
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
     *  Specification of a tariff class applicable to a transportation service.
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
     *  Statement indicating priority of requested transportation service.
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
     *  Code to indicate applicable rate class for freight.
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
     * Gets as transportServiceCode
     *
     * BBIE
     *  Transportation Service. Transport Service Code. Code
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
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
     *  A code which describes the general type of service required for the transportation of goods. Specifically, it identifies the extent of the transportation service, e.g., door-to-door, port-to-port.
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
     *  Specification of a tariff class applicable to a transportation service.
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
     *  Specification of a tariff class applicable to a transportation service.
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
     *  Statement indicating priority of requested transportation service.
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
     *  Statement indicating priority of requested transportation service.
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
     *  Code to indicate applicable rate class for freight.
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
     *  Code to indicate applicable rate class for freight.
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


}

