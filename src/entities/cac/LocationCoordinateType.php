<?php

namespace horstoeko\ubl\entities\cac;

/**
 * Class representing LocationCoordinateType
 *
 * ABIE
 *  Location Coordinate. Details
 *  Information about physical (geographical) location.
 *  Location Coordinate
 * XSD Type: LocationCoordinateType
 */
class LocationCoordinateType
{

    /**
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\CoordinateSystemCode $coordinateSystemCode
     */
    private $coordinateSystemCode = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LatitudeDegreesMeasure $latitudeDegreesMeasure
     */
    private $latitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LatitudeMinutesMeasure $latitudeMinutesMeasure
     */
    private $latitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LatitudeDirectionCode $latitudeDirectionCode
     */
    private $latitudeDirectionCode = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LongitudeDegreesMeasure $longitudeDegreesMeasure
     */
    private $longitudeDegreesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LongitudeMinutesMeasure $longitudeMinutesMeasure
     */
    private $longitudeMinutesMeasure = null;

    /**
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @var \horstoeko\ubl\entities\cbc\LongitudeDirectionCode $longitudeDirectionCode
     */
    private $longitudeDirectionCode = null;

    /**
     * Gets as coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\CoordinateSystemCode
     */
    public function getCoordinateSystemCode()
    {
        return $this->coordinateSystemCode;
    }

    /**
     * Sets a new coordinateSystemCode
     *
     * BBIE
     *  Location Coordinate. Coordinate System Code. Code
     *  An identifier for the location system used.
     *  0..1
     *  Location Coordinate
     *  Coordinate System Code
     *  Code
     *  Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\CoordinateSystemCode $coordinateSystemCode
     * @return self
     */
    public function setCoordinateSystemCode(\horstoeko\ubl\entities\cbc\CoordinateSystemCode $coordinateSystemCode)
    {
        $this->coordinateSystemCode = $coordinateSystemCode;
        return $this;
    }

    /**
     * Gets as latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LatitudeDegreesMeasure
     */
    public function getLatitudeDegreesMeasure()
    {
        return $this->latitudeDegreesMeasure;
    }

    /**
     * Sets a new latitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Degrees. Measure
     *  The measure of latitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LatitudeDegreesMeasure $latitudeDegreesMeasure
     * @return self
     */
    public function setLatitudeDegreesMeasure(\horstoeko\ubl\entities\cbc\LatitudeDegreesMeasure $latitudeDegreesMeasure)
    {
        $this->latitudeDegreesMeasure = $latitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LatitudeMinutesMeasure
     */
    public function getLatitudeMinutesMeasure()
    {
        return $this->latitudeMinutesMeasure;
    }

    /**
     * Sets a new latitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Latitude_ Minutes. Measure
     *  The measure of latitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Latitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LatitudeMinutesMeasure $latitudeMinutesMeasure
     * @return self
     */
    public function setLatitudeMinutesMeasure(\horstoeko\ubl\entities\cbc\LatitudeMinutesMeasure $latitudeMinutesMeasure)
    {
        $this->latitudeMinutesMeasure = $latitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LatitudeDirectionCode
     */
    public function getLatitudeDirectionCode()
    {
        return $this->latitudeDirectionCode;
    }

    /**
     * Sets a new latitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Latitude Direction Code. Code
     *  The direction of latitude measurement from the equator.
     *  0..1
     *  Location Coordinate
     *  Latitude Direction Code
     *  Code
     *  Latitude Direction_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LatitudeDirectionCode $latitudeDirectionCode
     * @return self
     */
    public function setLatitudeDirectionCode(\horstoeko\ubl\entities\cbc\LatitudeDirectionCode $latitudeDirectionCode)
    {
        $this->latitudeDirectionCode = $latitudeDirectionCode;
        return $this;
    }

    /**
     * Gets as longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LongitudeDegreesMeasure
     */
    public function getLongitudeDegreesMeasure()
    {
        return $this->longitudeDegreesMeasure;
    }

    /**
     * Sets a new longitudeDegreesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Degrees. Measure
     *  The measure of longitude in degrees.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Degrees
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LongitudeDegreesMeasure $longitudeDegreesMeasure
     * @return self
     */
    public function setLongitudeDegreesMeasure(\horstoeko\ubl\entities\cbc\LongitudeDegreesMeasure $longitudeDegreesMeasure)
    {
        $this->longitudeDegreesMeasure = $longitudeDegreesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LongitudeMinutesMeasure
     */
    public function getLongitudeMinutesMeasure()
    {
        return $this->longitudeMinutesMeasure;
    }

    /**
     * Sets a new longitudeMinutesMeasure
     *
     * BBIE
     *  Location Coordinate. Longitude_ Minutes. Measure
     *  The measure of longitude in minutes.
     *  0..1
     *  Location Coordinate
     *  Longitude
     *  Minutes
     *  Measure
     *  Measure. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LongitudeMinutesMeasure $longitudeMinutesMeasure
     * @return self
     */
    public function setLongitudeMinutesMeasure(\horstoeko\ubl\entities\cbc\LongitudeMinutesMeasure $longitudeMinutesMeasure)
    {
        $this->longitudeMinutesMeasure = $longitudeMinutesMeasure;
        return $this;
    }

    /**
     * Gets as longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @return \horstoeko\ubl\entities\cbc\LongitudeDirectionCode
     */
    public function getLongitudeDirectionCode()
    {
        return $this->longitudeDirectionCode;
    }

    /**
     * Sets a new longitudeDirectionCode
     *
     * BBIE
     *  Location Coordinate. Longitude Direction Code. Code
     *  The direction of longitude measurement from the meridian.
     *  0..1
     *  Location Coordinate
     *  Longitude Direction Code
     *  Code
     *  Longitude Direction_ Code. Type
     *
     * @param \horstoeko\ubl\entities\cbc\LongitudeDirectionCode $longitudeDirectionCode
     * @return self
     */
    public function setLongitudeDirectionCode(\horstoeko\ubl\entities\cbc\LongitudeDirectionCode $longitudeDirectionCode)
    {
        $this->longitudeDirectionCode = $longitudeDirectionCode;
        return $this;
    }


}

