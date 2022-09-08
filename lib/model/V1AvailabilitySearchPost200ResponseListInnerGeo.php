<?php
/**
 * V1AvailabilitySearchPost200ResponseListInnerGeo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * lodgea-php
 *
 * LODGEA SDK for PHP. Check out https://docs.lodgea.io for more information.
 *
 * The version of the OpenAPI document: 1.0.2
 * Contact: support@lodgea.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace com.lodgea\com.lodgea.model;

use \ArrayAccess;
use \com.lodgea\ObjectSerializer;

/**
 * V1AvailabilitySearchPost200ResponseListInnerGeo Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1AvailabilitySearchPost200ResponseListInnerGeo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_availability_search_post_200_response_list_inner_geo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'formatted_address' => 'string',
        'locality' => 'string',
        'sublocality' => 'string',
        'language' => 'string',
        'establishment' => 'string',
        'country_code' => 'string',
        'sublocality_level_1' => 'string',
        'route' => 'string',
        'administrative_area_level_3' => 'string',
        'administrative_area_level_1' => 'string',
        'street_number' => 'string',
        'location' => '\com.lodgea\com.lodgea.model\V1AvailabilitySearchPost200ResponseListInnerGeoLocation',
        'state_code' => 'string',
        'postal_code' => 'string',
        'natural_feature' => 'string',
        'place_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'formatted_address' => null,
        'locality' => null,
        'sublocality' => null,
        'language' => null,
        'establishment' => null,
        'country_code' => null,
        'sublocality_level_1' => null,
        'route' => null,
        'administrative_area_level_3' => null,
        'administrative_area_level_1' => null,
        'street_number' => null,
        'location' => null,
        'state_code' => null,
        'postal_code' => null,
        'natural_feature' => null,
        'place_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country' => 'country',
        'formatted_address' => 'formatted_address',
        'locality' => 'locality',
        'sublocality' => 'sublocality',
        'language' => 'language',
        'establishment' => 'establishment',
        'country_code' => 'country_code',
        'sublocality_level_1' => 'sublocality_level_1',
        'route' => 'route',
        'administrative_area_level_3' => 'administrative_area_level_3',
        'administrative_area_level_1' => 'administrative_area_level_1',
        'street_number' => 'street_number',
        'location' => 'location',
        'state_code' => 'state_code',
        'postal_code' => 'postal_code',
        'natural_feature' => 'natural_feature',
        'place_id' => 'place_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'formatted_address' => 'setFormattedAddress',
        'locality' => 'setLocality',
        'sublocality' => 'setSublocality',
        'language' => 'setLanguage',
        'establishment' => 'setEstablishment',
        'country_code' => 'setCountryCode',
        'sublocality_level_1' => 'setSublocalityLevel1',
        'route' => 'setRoute',
        'administrative_area_level_3' => 'setAdministrativeAreaLevel3',
        'administrative_area_level_1' => 'setAdministrativeAreaLevel1',
        'street_number' => 'setStreetNumber',
        'location' => 'setLocation',
        'state_code' => 'setStateCode',
        'postal_code' => 'setPostalCode',
        'natural_feature' => 'setNaturalFeature',
        'place_id' => 'setPlaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'formatted_address' => 'getFormattedAddress',
        'locality' => 'getLocality',
        'sublocality' => 'getSublocality',
        'language' => 'getLanguage',
        'establishment' => 'getEstablishment',
        'country_code' => 'getCountryCode',
        'sublocality_level_1' => 'getSublocalityLevel1',
        'route' => 'getRoute',
        'administrative_area_level_3' => 'getAdministrativeAreaLevel3',
        'administrative_area_level_1' => 'getAdministrativeAreaLevel1',
        'street_number' => 'getStreetNumber',
        'location' => 'getLocation',
        'state_code' => 'getStateCode',
        'postal_code' => 'getPostalCode',
        'natural_feature' => 'getNaturalFeature',
        'place_id' => 'getPlaceId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['country'] = $data['country'] ?? null;
        $this->container['formatted_address'] = $data['formatted_address'] ?? null;
        $this->container['locality'] = $data['locality'] ?? null;
        $this->container['sublocality'] = $data['sublocality'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['establishment'] = $data['establishment'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['sublocality_level_1'] = $data['sublocality_level_1'] ?? null;
        $this->container['route'] = $data['route'] ?? null;
        $this->container['administrative_area_level_3'] = $data['administrative_area_level_3'] ?? null;
        $this->container['administrative_area_level_1'] = $data['administrative_area_level_1'] ?? null;
        $this->container['street_number'] = $data['street_number'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['state_code'] = $data['state_code'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['natural_feature'] = $data['natural_feature'] ?? null;
        $this->container['place_id'] = $data['place_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets formatted_address
     *
     * @return string|null
     */
    public function getFormattedAddress()
    {
        return $this->container['formatted_address'];
    }

    /**
     * Sets formatted_address
     *
     * @param string|null $formatted_address formatted_address
     *
     * @return self
     */
    public function setFormattedAddress($formatted_address)
    {
        $this->container['formatted_address'] = $formatted_address;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets sublocality
     *
     * @return string|null
     */
    public function getSublocality()
    {
        return $this->container['sublocality'];
    }

    /**
     * Sets sublocality
     *
     * @param string|null $sublocality sublocality
     *
     * @return self
     */
    public function setSublocality($sublocality)
    {
        $this->container['sublocality'] = $sublocality;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets establishment
     *
     * @return string|null
     */
    public function getEstablishment()
    {
        return $this->container['establishment'];
    }

    /**
     * Sets establishment
     *
     * @param string|null $establishment establishment
     *
     * @return self
     */
    public function setEstablishment($establishment)
    {
        $this->container['establishment'] = $establishment;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets sublocality_level_1
     *
     * @return string|null
     */
    public function getSublocalityLevel1()
    {
        return $this->container['sublocality_level_1'];
    }

    /**
     * Sets sublocality_level_1
     *
     * @param string|null $sublocality_level_1 sublocality_level_1
     *
     * @return self
     */
    public function setSublocalityLevel1($sublocality_level_1)
    {
        $this->container['sublocality_level_1'] = $sublocality_level_1;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string|null $route route
     *
     * @return self
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets administrative_area_level_3
     *
     * @return string|null
     */
    public function getAdministrativeAreaLevel3()
    {
        return $this->container['administrative_area_level_3'];
    }

    /**
     * Sets administrative_area_level_3
     *
     * @param string|null $administrative_area_level_3 administrative_area_level_3
     *
     * @return self
     */
    public function setAdministrativeAreaLevel3($administrative_area_level_3)
    {
        $this->container['administrative_area_level_3'] = $administrative_area_level_3;

        return $this;
    }

    /**
     * Gets administrative_area_level_1
     *
     * @return string|null
     */
    public function getAdministrativeAreaLevel1()
    {
        return $this->container['administrative_area_level_1'];
    }

    /**
     * Sets administrative_area_level_1
     *
     * @param string|null $administrative_area_level_1 administrative_area_level_1
     *
     * @return self
     */
    public function setAdministrativeAreaLevel1($administrative_area_level_1)
    {
        $this->container['administrative_area_level_1'] = $administrative_area_level_1;

        return $this;
    }

    /**
     * Gets street_number
     *
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string|null $street_number street_number
     *
     * @return self
     */
    public function setStreetNumber($street_number)
    {
        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \com.lodgea\com.lodgea.model\V1AvailabilitySearchPost200ResponseListInnerGeoLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \com.lodgea\com.lodgea.model\V1AvailabilitySearchPost200ResponseListInnerGeoLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string|null $state_code state_code
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets natural_feature
     *
     * @return string|null
     */
    public function getNaturalFeature()
    {
        return $this->container['natural_feature'];
    }

    /**
     * Sets natural_feature
     *
     * @param string|null $natural_feature natural_feature
     *
     * @return self
     */
    public function setNaturalFeature($natural_feature)
    {
        $this->container['natural_feature'] = $natural_feature;

        return $this;
    }

    /**
     * Gets place_id
     *
     * @return string|null
     */
    public function getPlaceId()
    {
        return $this->container['place_id'];
    }

    /**
     * Sets place_id
     *
     * @param string|null $place_id place_id
     *
     * @return self
     */
    public function setPlaceId($place_id)
    {
        $this->container['place_id'] = $place_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


