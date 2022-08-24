<?php
/**
 * AvailabilitySearch
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
 * LODGEA SDK for PHP. Check out https://lodgea.redoc.ly for more information.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: info@lodgea.com
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
 * AvailabilitySearch Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailabilitySearch implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'availabilitySearch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adult_count' => 'float',
        'child_count' => 'float',
        'child_age_list' => 'float[]',
        'currency_code' => 'string',
        'min_length_of_stay' => 'float',
        'max_length_of_stay' => 'float',
        'location_name' => 'string',
        'location_type' => 'string',
        'earliest_arrival' => '\DateTime',
        'latest_return' => '\DateTime',
        'sort' => 'string',
        'service_list' => 'float[]',
        'type_list' => 'float[]',
        'unit_type_list' => 'float[]',
        'unit_amenity_list' => 'float[]',
        'meal_plan_list' => 'float[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adult_count' => null,
        'child_count' => null,
        'child_age_list' => null,
        'currency_code' => null,
        'min_length_of_stay' => null,
        'max_length_of_stay' => null,
        'location_name' => null,
        'location_type' => null,
        'earliest_arrival' => 'date',
        'latest_return' => 'date',
        'sort' => null,
        'service_list' => null,
        'type_list' => null,
        'unit_type_list' => null,
        'unit_amenity_list' => null,
        'meal_plan_list' => null
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
        'adult_count' => 'adultCount',
        'child_count' => 'childCount',
        'child_age_list' => 'childAgeList',
        'currency_code' => 'currencyCode',
        'min_length_of_stay' => 'minLengthOfStay',
        'max_length_of_stay' => 'maxLengthOfStay',
        'location_name' => 'locationName',
        'location_type' => 'locationType',
        'earliest_arrival' => 'earliestArrival',
        'latest_return' => 'latestReturn',
        'sort' => 'sort',
        'service_list' => 'serviceList',
        'type_list' => 'typeList',
        'unit_type_list' => 'unitTypeList',
        'unit_amenity_list' => 'unitAmenityList',
        'meal_plan_list' => 'mealPlanList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adult_count' => 'setAdultCount',
        'child_count' => 'setChildCount',
        'child_age_list' => 'setChildAgeList',
        'currency_code' => 'setCurrencyCode',
        'min_length_of_stay' => 'setMinLengthOfStay',
        'max_length_of_stay' => 'setMaxLengthOfStay',
        'location_name' => 'setLocationName',
        'location_type' => 'setLocationType',
        'earliest_arrival' => 'setEarliestArrival',
        'latest_return' => 'setLatestReturn',
        'sort' => 'setSort',
        'service_list' => 'setServiceList',
        'type_list' => 'setTypeList',
        'unit_type_list' => 'setUnitTypeList',
        'unit_amenity_list' => 'setUnitAmenityList',
        'meal_plan_list' => 'setMealPlanList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adult_count' => 'getAdultCount',
        'child_count' => 'getChildCount',
        'child_age_list' => 'getChildAgeList',
        'currency_code' => 'getCurrencyCode',
        'min_length_of_stay' => 'getMinLengthOfStay',
        'max_length_of_stay' => 'getMaxLengthOfStay',
        'location_name' => 'getLocationName',
        'location_type' => 'getLocationType',
        'earliest_arrival' => 'getEarliestArrival',
        'latest_return' => 'getLatestReturn',
        'sort' => 'getSort',
        'service_list' => 'getServiceList',
        'type_list' => 'getTypeList',
        'unit_type_list' => 'getUnitTypeList',
        'unit_amenity_list' => 'getUnitAmenityList',
        'meal_plan_list' => 'getMealPlanList'
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
        $this->container['adult_count'] = $data['adult_count'] ?? null;
        $this->container['child_count'] = $data['child_count'] ?? null;
        $this->container['child_age_list'] = $data['child_age_list'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['min_length_of_stay'] = $data['min_length_of_stay'] ?? null;
        $this->container['max_length_of_stay'] = $data['max_length_of_stay'] ?? null;
        $this->container['location_name'] = $data['location_name'] ?? null;
        $this->container['location_type'] = $data['location_type'] ?? null;
        $this->container['earliest_arrival'] = $data['earliest_arrival'] ?? null;
        $this->container['latest_return'] = $data['latest_return'] ?? null;
        $this->container['sort'] = $data['sort'] ?? null;
        $this->container['service_list'] = $data['service_list'] ?? null;
        $this->container['type_list'] = $data['type_list'] ?? null;
        $this->container['unit_type_list'] = $data['unit_type_list'] ?? null;
        $this->container['unit_amenity_list'] = $data['unit_amenity_list'] ?? null;
        $this->container['meal_plan_list'] = $data['meal_plan_list'] ?? null;
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
     * Gets adult_count
     *
     * @return float|null
     */
    public function getAdultCount()
    {
        return $this->container['adult_count'];
    }

    /**
     * Sets adult_count
     *
     * @param float|null $adult_count adult_count
     *
     * @return self
     */
    public function setAdultCount($adult_count)
    {
        $this->container['adult_count'] = $adult_count;

        return $this;
    }

    /**
     * Gets child_count
     *
     * @return float|null
     */
    public function getChildCount()
    {
        return $this->container['child_count'];
    }

    /**
     * Sets child_count
     *
     * @param float|null $child_count child_count
     *
     * @return self
     */
    public function setChildCount($child_count)
    {
        $this->container['child_count'] = $child_count;

        return $this;
    }

    /**
     * Gets child_age_list
     *
     * @return float[]|null
     */
    public function getChildAgeList()
    {
        return $this->container['child_age_list'];
    }

    /**
     * Sets child_age_list
     *
     * @param float[]|null $child_age_list child_age_list
     *
     * @return self
     */
    public function setChildAgeList($child_age_list)
    {
        $this->container['child_age_list'] = $child_age_list;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets min_length_of_stay
     *
     * @return float|null
     */
    public function getMinLengthOfStay()
    {
        return $this->container['min_length_of_stay'];
    }

    /**
     * Sets min_length_of_stay
     *
     * @param float|null $min_length_of_stay min_length_of_stay
     *
     * @return self
     */
    public function setMinLengthOfStay($min_length_of_stay)
    {
        $this->container['min_length_of_stay'] = $min_length_of_stay;

        return $this;
    }

    /**
     * Gets max_length_of_stay
     *
     * @return float|null
     */
    public function getMaxLengthOfStay()
    {
        return $this->container['max_length_of_stay'];
    }

    /**
     * Sets max_length_of_stay
     *
     * @param float|null $max_length_of_stay max_length_of_stay
     *
     * @return self
     */
    public function setMaxLengthOfStay($max_length_of_stay)
    {
        $this->container['max_length_of_stay'] = $max_length_of_stay;

        return $this;
    }

    /**
     * Gets location_name
     *
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->container['location_name'];
    }

    /**
     * Sets location_name
     *
     * @param string|null $location_name location_name
     *
     * @return self
     */
    public function setLocationName($location_name)
    {
        $this->container['location_name'] = $location_name;

        return $this;
    }

    /**
     * Gets location_type
     *
     * @return string|null
     */
    public function getLocationType()
    {
        return $this->container['location_type'];
    }

    /**
     * Sets location_type
     *
     * @param string|null $location_type location_type
     *
     * @return self
     */
    public function setLocationType($location_type)
    {
        $this->container['location_type'] = $location_type;

        return $this;
    }

    /**
     * Gets earliest_arrival
     *
     * @return \DateTime|null
     */
    public function getEarliestArrival()
    {
        return $this->container['earliest_arrival'];
    }

    /**
     * Sets earliest_arrival
     *
     * @param \DateTime|null $earliest_arrival earliest_arrival
     *
     * @return self
     */
    public function setEarliestArrival($earliest_arrival)
    {
        $this->container['earliest_arrival'] = $earliest_arrival;

        return $this;
    }

    /**
     * Gets latest_return
     *
     * @return \DateTime|null
     */
    public function getLatestReturn()
    {
        return $this->container['latest_return'];
    }

    /**
     * Sets latest_return
     *
     * @param \DateTime|null $latest_return latest_return
     *
     * @return self
     */
    public function setLatestReturn($latest_return)
    {
        $this->container['latest_return'] = $latest_return;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string|null $sort sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets service_list
     *
     * @return float[]|null
     */
    public function getServiceList()
    {
        return $this->container['service_list'];
    }

    /**
     * Sets service_list
     *
     * @param float[]|null $service_list service_list
     *
     * @return self
     */
    public function setServiceList($service_list)
    {
        $this->container['service_list'] = $service_list;

        return $this;
    }

    /**
     * Gets type_list
     *
     * @return float[]|null
     */
    public function getTypeList()
    {
        return $this->container['type_list'];
    }

    /**
     * Sets type_list
     *
     * @param float[]|null $type_list type_list
     *
     * @return self
     */
    public function setTypeList($type_list)
    {
        $this->container['type_list'] = $type_list;

        return $this;
    }

    /**
     * Gets unit_type_list
     *
     * @return float[]|null
     */
    public function getUnitTypeList()
    {
        return $this->container['unit_type_list'];
    }

    /**
     * Sets unit_type_list
     *
     * @param float[]|null $unit_type_list unit_type_list
     *
     * @return self
     */
    public function setUnitTypeList($unit_type_list)
    {
        $this->container['unit_type_list'] = $unit_type_list;

        return $this;
    }

    /**
     * Gets unit_amenity_list
     *
     * @return float[]|null
     */
    public function getUnitAmenityList()
    {
        return $this->container['unit_amenity_list'];
    }

    /**
     * Sets unit_amenity_list
     *
     * @param float[]|null $unit_amenity_list unit_amenity_list
     *
     * @return self
     */
    public function setUnitAmenityList($unit_amenity_list)
    {
        $this->container['unit_amenity_list'] = $unit_amenity_list;

        return $this;
    }

    /**
     * Gets meal_plan_list
     *
     * @return float[]|null
     */
    public function getMealPlanList()
    {
        return $this->container['meal_plan_list'];
    }

    /**
     * Sets meal_plan_list
     *
     * @param float[]|null $meal_plan_list meal_plan_list
     *
     * @return self
     */
    public function setMealPlanList($meal_plan_list)
    {
        $this->container['meal_plan_list'] = $meal_plan_list;

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


