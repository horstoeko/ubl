<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing ForecastExceptionType
 *
 * ABIE
 *  Forecast Exception. Details
 *  As explained in Exception Criteria Line: Three types of exception criteria can be defined, Operational, Metric or Forecast Exceptions. This class provides criteria for forecast exception type: the identification of the purpose of the forecast, the source of data and the time basis criteria for the exception.
 *  Forecast Exception
 * XSD Type: ForecastExceptionType
 */
class ForecastExceptionType
{

    /**
     * BBIE
     *  Forecast Exception. Forecast_ Purpose Code. Code
     *  It is either Sales forecast or Order Forecast. Definition can be changed like: "The purpose of the Forecast (either sales or order), about which an exception criteria is being defined".
     *  1
     *  Forecast Exception
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ForecastPurposeCode $forecastPurposeCode
     */
    private $forecastPurposeCode = null;

    /**
     * BBIE
     *  Forecast Exception. Forecast Type Code. Code
     *  A code signifying the type of forecast. Example of values are:BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Exception
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * BBIE
     *  Forecast Exception. Issue Date. Date
     *  The date on which the forecast was issued.
     *  1
     *  Forecast Exception
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Forecast Exception. Issue Time. Time
     *  The time at which the forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Forecast Exception. Data Source Code. Code
     *  A code signifying the partner who provides this information.
     *  1
     *  Forecast Exception
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\DataSourceCode $dataSourceCode
     */
    private $dataSourceCode = null;

    /**
     * BBIE
     *  Forecast Exception. Comparison Data Code. Code
     *  A code signifying the partner providing the information in this forecast exception.
     *  0..1
     *  Forecast Exception
     *  Comparison Data Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\ComparisonDataCode $comparisonDataCode
     */
    private $comparisonDataCode = null;

    /**
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Time. Time
     *  The time at which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $comparisonForecastIssueTime
     */
    private $comparisonForecastIssueTime = null;

    /**
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Date. Date
     *  The date on which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $comparisonForecastIssueDate
     */
    private $comparisonForecastIssueDate = null;

    /**
     * Gets as forecastPurposeCode
     *
     * BBIE
     *  Forecast Exception. Forecast_ Purpose Code. Code
     *  It is either Sales forecast or Order Forecast. Definition can be changed like: "The purpose of the Forecast (either sales or order), about which an exception criteria is being defined".
     *  1
     *  Forecast Exception
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ForecastPurposeCode
     */
    public function getForecastPurposeCode()
    {
        return $this->forecastPurposeCode;
    }

    /**
     * Sets a new forecastPurposeCode
     *
     * BBIE
     *  Forecast Exception. Forecast_ Purpose Code. Code
     *  It is either Sales forecast or Order Forecast. Definition can be changed like: "The purpose of the Forecast (either sales or order), about which an exception criteria is being defined".
     *  1
     *  Forecast Exception
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ForecastPurposeCode $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(\horstoeko\ubl\entities\cbc\ForecastPurposeCode $forecastPurposeCode)
    {
        $this->forecastPurposeCode = $forecastPurposeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Forecast Exception. Forecast Type Code. Code
     *  A code signifying the type of forecast. Example of values are:BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Exception
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * BBIE
     *  Forecast Exception. Forecast Type Code. Code
     *  A code signifying the type of forecast. Example of values are:BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Forecast Exception
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\horstoeko\ubl\entities\cbc\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Forecast Exception. Issue Date. Date
     *  The date on which the forecast was issued.
     *  1
     *  Forecast Exception
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Forecast Exception. Issue Date. Date
     *  The date on which the forecast was issued.
     *  1
     *  Forecast Exception
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Forecast Exception. Issue Time. Time
     *  The time at which the forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Issue Time
     *  Time
     *  Time. Type
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
     * BBIE
     *  Forecast Exception. Issue Time. Time
     *  The time at which the forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Issue Time
     *  Time
     *  Time. Type
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
     * Gets as dataSourceCode
     *
     * BBIE
     *  Forecast Exception. Data Source Code. Code
     *  A code signifying the partner who provides this information.
     *  1
     *  Forecast Exception
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\DataSourceCode
     */
    public function getDataSourceCode()
    {
        return $this->dataSourceCode;
    }

    /**
     * Sets a new dataSourceCode
     *
     * BBIE
     *  Forecast Exception. Data Source Code. Code
     *  A code signifying the partner who provides this information.
     *  1
     *  Forecast Exception
     *  Data Source Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\DataSourceCode $dataSourceCode
     * @return self
     */
    public function setDataSourceCode(\horstoeko\ubl\entities\cbc\DataSourceCode $dataSourceCode)
    {
        $this->dataSourceCode = $dataSourceCode;
        return $this;
    }

    /**
     * Gets as comparisonDataCode
     *
     * BBIE
     *  Forecast Exception. Comparison Data Code. Code
     *  A code signifying the partner providing the information in this forecast exception.
     *  0..1
     *  Forecast Exception
     *  Comparison Data Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\ComparisonDataCode
     */
    public function getComparisonDataCode()
    {
        return $this->comparisonDataCode;
    }

    /**
     * Sets a new comparisonDataCode
     *
     * BBIE
     *  Forecast Exception. Comparison Data Code. Code
     *  A code signifying the partner providing the information in this forecast exception.
     *  0..1
     *  Forecast Exception
     *  Comparison Data Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\ComparisonDataCode $comparisonDataCode
     * @return self
     */
    public function setComparisonDataCode(\horstoeko\ubl\entities\cbc\ComparisonDataCode $comparisonDataCode)
    {
        $this->comparisonDataCode = $comparisonDataCode;
        return $this;
    }

    /**
     * Gets as comparisonForecastIssueTime
     *
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Time. Time
     *  The time at which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getComparisonForecastIssueTime()
    {
        return $this->comparisonForecastIssueTime;
    }

    /**
     * Sets a new comparisonForecastIssueTime
     *
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Time. Time
     *  The time at which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $comparisonForecastIssueTime
     * @return self
     */
    public function setComparisonForecastIssueTime(\DateTime $comparisonForecastIssueTime)
    {
        $this->comparisonForecastIssueTime = $comparisonForecastIssueTime;
        return $this;
    }

    /**
     * Gets as comparisonForecastIssueDate
     *
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Date. Date
     *  The date on which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getComparisonForecastIssueDate()
    {
        return $this->comparisonForecastIssueDate;
    }

    /**
     * Sets a new comparisonForecastIssueDate
     *
     * BBIE
     *  Forecast Exception. Comparison Forecast Issue Date. Date
     *  The date on which this comparison forecast was issued.
     *  0..1
     *  Forecast Exception
     *  Comparison Forecast Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $comparisonForecastIssueDate
     * @return self
     */
    public function setComparisonForecastIssueDate(\DateTime $comparisonForecastIssueDate)
    {
        $this->comparisonForecastIssueDate = $comparisonForecastIssueDate;
        return $this;
    }


}

