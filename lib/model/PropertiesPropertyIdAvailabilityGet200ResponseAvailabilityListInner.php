<?php
/**
 * PropertiesPropertyIdAvailabilityGet200ResponseAvailabilityListInner
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
 * The version of the OpenAPI document: 1.1.0
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
 * PropertiesPropertyIdAvailabilityGet200ResponseAvailabilityListInner Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertiesPropertyIdAvailabilityGet200ResponseAvailabilityListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_properties__propertyId__availability_get_200_response_availabilityList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rate_plan_list' => '\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInner[]',
        'name' => 'string',
        'meal_plan_list' => 'float[]',
        'room_type_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rate_plan_list' => null,
        'name' => null,
        'meal_plan_list' => null,
        'room_type_list' => null
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
        'rate_plan_list' => 'ratePlanList',
        'name' => 'name',
        'meal_plan_list' => 'mealPlanList',
        'room_type_list' => 'roomTypeList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_plan_list' => 'setRatePlanList',
        'name' => 'setName',
        'meal_plan_list' => 'setMealPlanList',
        'room_type_list' => 'setRoomTypeList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_plan_list' => 'getRatePlanList',
        'name' => 'getName',
        'meal_plan_list' => 'getMealPlanList',
        'room_type_list' => 'getRoomTypeList'
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

    public const MEAL_PLAN_LIST_0 = 0;
    public const MEAL_PLAN_LIST_1 = 1;
    public const MEAL_PLAN_LIST_2 = 2;
    public const MEAL_PLAN_LIST_3 = 3;
    public const MEAL_PLAN_LIST_4 = 4;
    public const MEAL_PLAN_LIST_5 = 5;
    public const MEAL_PLAN_LIST_6 = 6;
    public const MEAL_PLAN_LIST_7 = 7;
    public const MEAL_PLAN_LIST_8 = 8;
    public const MEAL_PLAN_LIST_9 = 9;
    public const MEAL_PLAN_LIST_10 = 10;
    public const MEAL_PLAN_LIST_11 = 11;
    public const MEAL_PLAN_LIST_12 = 12;
    public const MEAL_PLAN_LIST_14 = 14;
    public const MEAL_PLAN_LIST_15 = 15;
    public const MEAL_PLAN_LIST_16 = 16;
    public const MEAL_PLAN_LIST_17 = 17;
    public const MEAL_PLAN_LIST_18 = 18;
    public const MEAL_PLAN_LIST_19 = 19;
    public const MEAL_PLAN_LIST_20 = 20;
    public const MEAL_PLAN_LIST_21 = 21;
    public const MEAL_PLAN_LIST_22 = 22;
    public const MEAL_PLAN_LIST_23 = 23;
    public const MEAL_PLAN_LIST_24 = 24;
    public const MEAL_PLAN_LIST_90001 = 90001;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMealPlanListAllowableValues()
    {
        return [
            self::MEAL_PLAN_LIST_0,
            self::MEAL_PLAN_LIST_1,
            self::MEAL_PLAN_LIST_2,
            self::MEAL_PLAN_LIST_3,
            self::MEAL_PLAN_LIST_4,
            self::MEAL_PLAN_LIST_5,
            self::MEAL_PLAN_LIST_6,
            self::MEAL_PLAN_LIST_7,
            self::MEAL_PLAN_LIST_8,
            self::MEAL_PLAN_LIST_9,
            self::MEAL_PLAN_LIST_10,
            self::MEAL_PLAN_LIST_11,
            self::MEAL_PLAN_LIST_12,
            self::MEAL_PLAN_LIST_14,
            self::MEAL_PLAN_LIST_15,
            self::MEAL_PLAN_LIST_16,
            self::MEAL_PLAN_LIST_17,
            self::MEAL_PLAN_LIST_18,
            self::MEAL_PLAN_LIST_19,
            self::MEAL_PLAN_LIST_20,
            self::MEAL_PLAN_LIST_21,
            self::MEAL_PLAN_LIST_22,
            self::MEAL_PLAN_LIST_23,
            self::MEAL_PLAN_LIST_24,
            self::MEAL_PLAN_LIST_90001,
        ];
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
        $this->container['rate_plan_list'] = $data['rate_plan_list'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['meal_plan_list'] = $data['meal_plan_list'] ?? null;
        $this->container['room_type_list'] = $data['room_type_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rate_plan_list'] === null) {
            $invalidProperties[] = "'rate_plan_list' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['meal_plan_list'] === null) {
            $invalidProperties[] = "'meal_plan_list' can't be null";
        }
        if ($this->container['room_type_list'] === null) {
            $invalidProperties[] = "'room_type_list' can't be null";
        }
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
     * Gets rate_plan_list
     *
     * @return \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInner[]
     */
    public function getRatePlanList()
    {
        return $this->container['rate_plan_list'];
    }

    /**
     * Sets rate_plan_list
     *
     * @param \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponseProductListInnerRatePlanListInner[] $rate_plan_list A list of available rate plans.
     *
     * @return self
     */
    public function setRatePlanList($rate_plan_list)
    {
        $this->container['rate_plan_list'] = $rate_plan_list;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the rate plan group.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets meal_plan_list
     *
     * @return float[]
     */
    public function getMealPlanList()
    {
        return $this->container['meal_plan_list'];
    }

    /**
     * Sets meal_plan_list
     *
     * @param float[] $meal_plan_list The available meal plans.<p>See also <a href=\"#mealplan-type-codes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setMealPlanList($meal_plan_list)
    {
        $allowedValues = $this->getMealPlanListAllowableValues();
        if (array_diff($meal_plan_list, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meal_plan_list', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['meal_plan_list'] = $meal_plan_list;

        return $this;
    }

    /**
     * Gets room_type_list
     *
     * @return string[]
     */
    public function getRoomTypeList()
    {
        return $this->container['room_type_list'];
    }

    /**
     * Sets room_type_list
     *
     * @param string[] $room_type_list The rooms this availability is for.
     *
     * @return self
     */
    public function setRoomTypeList($room_type_list)
    {
        $this->container['room_type_list'] = $room_type_list;

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


