<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing TelecommunicationsServiceType
 *
 * ABIE
 *  Telecommunications Service. Details
 *  A class to describe a telecommunications service (e.g., a telephone call or a video on demand service).
 *  Telecommunications Service
 * XSD Type: TelecommunicationsServiceType
 */
class TelecommunicationsServiceType
{

    /**
     * BBIE
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @var \DateTime $callDate
     */
    private $callDate = null;

    /**
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @var \DateTime $callTime
     */
    private $callTime = null;

    /**
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @var \horstoeko\ubl\entities\cbc\ServiceNumberCalled $serviceNumberCalled
     */
    private $serviceNumberCalled = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     */
    private $telecommunicationsServiceCategory = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     */
    private $telecommunicationsServiceCategoryCode = null;

    /**
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @var \horstoeko\ubl\entities\cbc\MovieTitle $movieTitle
     */
    private $movieTitle = null;

    /**
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @var \horstoeko\ubl\entities\cbc\RoamingPartnerName $roamingPartnerName
     */
    private $roamingPartnerName = null;

    /**
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @var \horstoeko\ubl\entities\cbc\PayPerView $payPerView
     */
    private $payPerView = null;

    /**
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @var \horstoeko\ubl\entities\cbc\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCall $telecommunicationsServiceCall
     */
    private $telecommunicationsServiceCall = null;

    /**
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @var \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     */
    private $telecommunicationsServiceCallCode = null;

    /**
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CallBaseAmount $callBaseAmount
     */
    private $callBaseAmount = null;

    /**
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @var \horstoeko\ubl\entities\cbc\CallExtensionAmount $callExtensionAmount
     */
    private $callExtensionAmount = null;

    /**
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @var \horstoeko\ubl\entities\cac\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @var \horstoeko\ubl\entities\cac\Country $country
     */
    private $country = null;

    /**
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \horstoeko\ubl\entities\cac\ExchangeRate[] $exchangeRate
     */
    private $exchangeRate = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @var \horstoeko\ubl\entities\cac\CallDuty[] $callDuty
     */
    private $callDuty = [
        
    ];

    /**
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @var \horstoeko\ubl\entities\cac\TimeDuty[] $timeDuty
     */
    private $timeDuty = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
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
     *  Telecommunications Service. Identifier
     *  An identifier for this telecommunications service.
     *  0..1
     *  Telecommunications Service
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
     * Gets as callDate
     *
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @return \DateTime
     */
    public function getCallDate()
    {
        return $this->callDate;
    }

    /**
     * Sets a new callDate
     *
     * BBIE
     *  Telecommunications Service. Call_ Date. Date
     *  In the case of a telephone call, the date of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Date
     *  Date
     *  Date. Type
     *  2008-01-01
     *
     * @param  \DateTime $callDate
     * @return self
     */
    public function setCallDate(\DateTime $callDate)
    {
        $this->callDate = $callDate;
        return $this;
    }

    /**
     * Gets as callTime
     *
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @return \DateTime
     */
    public function getCallTime()
    {
        return $this->callTime;
    }

    /**
     * Sets a new callTime
     *
     * BBIE
     *  Telecommunications Service. Call_ Time. Time
     *  In the case of a telephone call, the time of the call.
     *  1
     *  Telecommunications Service
     *  Call
     *  Time
     *  Time
     *  Time. Type
     *  00:01:00
     *
     * @param  \DateTime $callTime
     * @return self
     */
    public function setCallTime(\DateTime $callTime)
    {
        $this->callTime = $callTime;
        return $this;
    }

    /**
     * Gets as serviceNumberCalled
     *
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @return \horstoeko\ubl\entities\cbc\ServiceNumberCalled
     */
    public function getServiceNumberCalled()
    {
        return $this->serviceNumberCalled;
    }

    /**
     * Sets a new serviceNumberCalled
     *
     * BBIE
     *  Telecommunications Service. Service Number Called. Text
     *  In the case of a telephone call, the phone number called.
     *  1
     *  Telecommunications Service
     *  Service Number Called
     *  Text
     *  Text. Type
     *  12345679
     *
     * @param  \horstoeko\ubl\entities\cbc\ServiceNumberCalled $serviceNumberCalled
     * @return self
     */
    public function setServiceNumberCalled(\horstoeko\ubl\entities\cbc\ServiceNumberCalled $serviceNumberCalled)
    {
        $this->serviceNumberCalled = $serviceNumberCalled;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategory
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategory
     */
    public function getTelecommunicationsServiceCategory()
    {
        return $this->telecommunicationsServiceCategory;
    }

    /**
     * Sets a new telecommunicationsServiceCategory
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category. Text
     *  The telecommunications category, expressed as text.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category
     *  Text
     *  Text. Type
     *  Subscription
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategory $telecommunicationsServiceCategory
     * @return self
     */
    public function setTelecommunicationsServiceCategory(\horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategory $telecommunicationsServiceCategory)
    {
        $this->telecommunicationsServiceCategory = $telecommunicationsServiceCategory;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCategoryCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategoryCode
     */
    public function getTelecommunicationsServiceCategoryCode()
    {
        return $this->telecommunicationsServiceCategoryCode;
    }

    /**
     * Sets a new telecommunicationsServiceCategoryCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Category Code. Code
     *  The telecommunications category, expressed as a code.
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Category Code
     *  Code
     *  Code. Type
     *  Subscription
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode
     * @return self
     */
    public function setTelecommunicationsServiceCategoryCode(\horstoeko\ubl\entities\cbc\TelecommunicationsServiceCategoryCode $telecommunicationsServiceCategoryCode)
    {
        $this->telecommunicationsServiceCategoryCode = $telecommunicationsServiceCategoryCode;
        return $this;
    }

    /**
     * Gets as movieTitle
     *
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @return \horstoeko\ubl\entities\cbc\MovieTitle
     */
    public function getMovieTitle()
    {
        return $this->movieTitle;
    }

    /**
     * Sets a new movieTitle
     *
     * BBIE
     *  Telecommunications Service. Movie Title. Text
     *  The title of a movie delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Movie Title
     *  Text
     *  Text. Type
     *  The Matrix
     *
     * @param  \horstoeko\ubl\entities\cbc\MovieTitle $movieTitle
     * @return self
     */
    public function setMovieTitle(\horstoeko\ubl\entities\cbc\MovieTitle $movieTitle)
    {
        $this->movieTitle = $movieTitle;
        return $this;
    }

    /**
     * Gets as roamingPartnerName
     *
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @return \horstoeko\ubl\entities\cbc\RoamingPartnerName
     */
    public function getRoamingPartnerName()
    {
        return $this->roamingPartnerName;
    }

    /**
     * Sets a new roamingPartnerName
     *
     * BBIE
     *  Telecommunications Service. Roaming Partner Name. Name
     *  Statement of the roaming partner name.
     *  0..1
     *  Telecommunications Service
     *  Roaming Partner Name
     *  Name
     *  Name. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\RoamingPartnerName $roamingPartnerName
     * @return self
     */
    public function setRoamingPartnerName(\horstoeko\ubl\entities\cbc\RoamingPartnerName $roamingPartnerName)
    {
        $this->roamingPartnerName = $roamingPartnerName;
        return $this;
    }

    /**
     * Gets as payPerView
     *
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @return \horstoeko\ubl\entities\cbc\PayPerView
     */
    public function getPayPerView()
    {
        return $this->payPerView;
    }

    /**
     * Sets a new payPerView
     *
     * BBIE
     *  Telecommunications Service. Pay Per View. Text
     *  A pay-per-view delivered via this telecommunications service.
     *  0..1
     *  Telecommunications Service
     *  Pay Per View
     *  Text
     *  Text. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\PayPerView $payPerView
     * @return self
     */
    public function setPayPerView(\horstoeko\ubl\entities\cbc\PayPerView $payPerView)
    {
        $this->payPerView = $payPerView;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @return \horstoeko\ubl\entities\cbc\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Telecommunications Service. Quantity
     *  The number of calls.
     *  0..1
     *  Telecommunications Service
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  5761
     *
     * @param  \horstoeko\ubl\entities\cbc\Quantity $quantity
     * @return self
     */
    public function setQuantity(\horstoeko\ubl\entities\cbc\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCall
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCall
     */
    public function getTelecommunicationsServiceCall()
    {
        return $this->telecommunicationsServiceCall;
    }

    /**
     * Sets a new telecommunicationsServiceCall
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call. Text
     *  The telecommunications call described as a text
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call
     *  Text
     *  Text. Type
     *  CallAttempt
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCall $telecommunicationsServiceCall
     * @return self
     */
    public function setTelecommunicationsServiceCall(\horstoeko\ubl\entities\cbc\TelecommunicationsServiceCall $telecommunicationsServiceCall)
    {
        $this->telecommunicationsServiceCall = $telecommunicationsServiceCall;
        return $this;
    }

    /**
     * Gets as telecommunicationsServiceCallCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @return \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCallCode
     */
    public function getTelecommunicationsServiceCallCode()
    {
        return $this->telecommunicationsServiceCallCode;
    }

    /**
     * Sets a new telecommunicationsServiceCallCode
     *
     * BBIE
     *  Telecommunications Service. Telecommunications Service Call Code. Code
     *  The telecommunications call described as a code
     *  0..1
     *  Telecommunications Service
     *  Telecommunications Service Call Code
     *  Code
     *  Code. Type
     *  CallAttempt
     *
     * @param  \horstoeko\ubl\entities\cbc\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode
     * @return self
     */
    public function setTelecommunicationsServiceCallCode(\horstoeko\ubl\entities\cbc\TelecommunicationsServiceCallCode $telecommunicationsServiceCallCode)
    {
        $this->telecommunicationsServiceCallCode = $telecommunicationsServiceCallCode;
        return $this;
    }

    /**
     * Gets as callBaseAmount
     *
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CallBaseAmount
     */
    public function getCallBaseAmount()
    {
        return $this->callBaseAmount;
    }

    /**
     * Sets a new callBaseAmount
     *
     * BBIE
     *  Telecommunications Service. Call Base_ Amount. Amount
     *  The amount to be payed as the base for one call
     *  0..1
     *  Telecommunications Service
     *  Call Base
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param  \horstoeko\ubl\entities\cbc\CallBaseAmount $callBaseAmount
     * @return self
     */
    public function setCallBaseAmount(\horstoeko\ubl\entities\cbc\CallBaseAmount $callBaseAmount)
    {
        $this->callBaseAmount = $callBaseAmount;
        return $this;
    }

    /**
     * Gets as callExtensionAmount
     *
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @return \horstoeko\ubl\entities\cbc\CallExtensionAmount
     */
    public function getCallExtensionAmount()
    {
        return $this->callExtensionAmount;
    }

    /**
     * Sets a new callExtensionAmount
     *
     * BBIE
     *  Telecommunications Service. Call Extension_ Amount. Amount
     *  The amount to be payed for the call
     *  0..1
     *  Telecommunications Service
     *  Call Extension
     *  Amount
     *  Amount
     *  Amount. Type
     *  542.44
     *
     * @param  \horstoeko\ubl\entities\cbc\CallExtensionAmount $callExtensionAmount
     * @return self
     */
    public function setCallExtensionAmount(\horstoeko\ubl\entities\cbc\CallExtensionAmount $callExtensionAmount)
    {
        $this->callExtensionAmount = $callExtensionAmount;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @return \horstoeko\ubl\entities\cac\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Telecommunications Service. Price
     *  The price for using the telecommunication service
     *  0..1
     *  Telecommunications Service
     *  Price
     *  Price
     *  Price
     *
     * @param  \horstoeko\ubl\entities\cac\Price $price
     * @return self
     */
    public function setPrice(\horstoeko\ubl\entities\cac\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as country
     *
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @return \horstoeko\ubl\entities\cac\Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * ASBIE
     *  Telecommunications Service. Country
     *  The country to which the service is provided. In case of a telephone call it is the country where the receiver is located.
     *  0..1
     *  Telecommunications Service
     *  Country
     *  Country
     *  Country
     *
     * @param  \horstoeko\ubl\entities\cac\Country $country
     * @return self
     */
    public function setCountry(\horstoeko\ubl\entities\cac\Country $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Adds as exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate
     */
    public function addToExchangeRate(\horstoeko\ubl\entities\cac\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate[] = $exchangeRate;
        return $this;
    }

    /**
     * isset exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \horstoeko\ubl\entities\cac\ExchangeRate[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Telecommunications Service. Exchange Rate
     *  A exchanges rates used in the pricing e.g.. when phone calls has crossed border lines.
     *  0..n
     *  Telecommunications Service
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param  \horstoeko\ubl\entities\cac\ExchangeRate[] $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\horstoeko\ubl\entities\cac\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \horstoeko\ubl\entities\cac\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Telecommunications Service. Allowance Charge
     *  An allowance or charge that applies to the UtilityStatement as a whole.
     *  0..n
     *  Telecommunications Service
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param  \horstoeko\ubl\entities\cac\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\horstoeko\ubl\entities\cac\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \horstoeko\ubl\entities\cac\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Telecommunications Service. Tax Total
     *  A total amount of taxes of a particular kind applicable to this telecommunications service.
     *  0..n
     *  Telecommunications Service
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param  \horstoeko\ubl\entities\cac\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\CallDuty $callDuty
     */
    public function addToCallDuty(\horstoeko\ubl\entities\cac\CallDuty $callDuty)
    {
        $this->callDuty[] = $callDuty;
        return $this;
    }

    /**
     * isset callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetCallDuty($index)
    {
        return isset($this->callDuty[$index]);
    }

    /**
     * unset callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetCallDuty($index)
    {
        unset($this->callDuty[$index]);
    }

    /**
     * Gets as callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @return \horstoeko\ubl\entities\cac\CallDuty[]
     */
    public function getCallDuty()
    {
        return $this->callDuty;
    }

    /**
     * Sets a new callDuty
     *
     * ASBIE
     *  Telecommunications Service. Call_ Duty. Duty
     *  In the case of a telephone call, a duty on this call.
     *  0..n
     *  Telecommunications Service
     *  Call
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  \horstoeko\ubl\entities\cac\CallDuty[] $callDuty
     * @return self
     */
    public function setCallDuty(array $callDuty)
    {
        $this->callDuty = $callDuty;
        return $this;
    }

    /**
     * Adds as timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @return self
     * @param  \horstoeko\ubl\entities\cac\TimeDuty $timeDuty
     */
    public function addToTimeDuty(\horstoeko\ubl\entities\cac\TimeDuty $timeDuty)
    {
        $this->timeDuty[] = $timeDuty;
        return $this;
    }

    /**
     * isset timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  int|string $index
     * @return bool
     */
    public function issetTimeDuty($index)
    {
        return isset($this->timeDuty[$index]);
    }

    /**
     * unset timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  int|string $index
     * @return void
     */
    public function unsetTimeDuty($index)
    {
        unset($this->timeDuty[$index]);
    }

    /**
     * Gets as timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @return \horstoeko\ubl\entities\cac\TimeDuty[]
     */
    public function getTimeDuty()
    {
        return $this->timeDuty;
    }

    /**
     * Sets a new timeDuty
     *
     * ASBIE
     *  Telecommunications Service. Time_ Duty. Duty
     *  A duty on a consumption of time.
     *  0..n
     *  Telecommunications Service
     *  Time
     *  Duty
     *  Duty
     *  Duty
     *
     * @param  \horstoeko\ubl\entities\cac\TimeDuty[] $timeDuty
     * @return self
     */
    public function setTimeDuty(array $timeDuty)
    {
        $this->timeDuty = $timeDuty;
        return $this;
    }


}

