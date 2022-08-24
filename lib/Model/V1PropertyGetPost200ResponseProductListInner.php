<?php
/**
 * V1PropertyGetPost200ResponseProductListInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * V1PropertyGetPost200ResponseProductListInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponseProductListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_productList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => 'string',
        'name' => 'string',
        'meal_plan_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerMealPlanListInner[]',
        'room_type_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRoomTypeListInner[]',
        'is_los_pricing' => 'bool',
        'is_obp_pricing' => 'bool',
        'rate_plan_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInner[]',
        'policy_info' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerPolicyInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'property_id' => null,
        'name' => null,
        'meal_plan_list' => null,
        'room_type_list' => null,
        'is_los_pricing' => null,
        'is_obp_pricing' => null,
        'rate_plan_list' => null,
        'policy_info' => null
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
        'property_id' => 'propertyId',
        'name' => 'name',
        'meal_plan_list' => 'mealPlanList',
        'room_type_list' => 'roomTypeList',
        'is_los_pricing' => 'isLOSPricing',
        'is_obp_pricing' => 'isOBPPricing',
        'rate_plan_list' => 'ratePlanList',
        'policy_info' => 'policyInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'name' => 'setName',
        'meal_plan_list' => 'setMealPlanList',
        'room_type_list' => 'setRoomTypeList',
        'is_los_pricing' => 'setIsLosPricing',
        'is_obp_pricing' => 'setIsObpPricing',
        'rate_plan_list' => 'setRatePlanList',
        'policy_info' => 'setPolicyInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'name' => 'getName',
        'meal_plan_list' => 'getMealPlanList',
        'room_type_list' => 'getRoomTypeList',
        'is_los_pricing' => 'getIsLosPricing',
        'is_obp_pricing' => 'getIsObpPricing',
        'rate_plan_list' => 'getRatePlanList',
        'policy_info' => 'getPolicyInfo'
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
        $this->container['property_id'] = $data['property_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['meal_plan_list'] = $data['meal_plan_list'] ?? null;
        $this->container['room_type_list'] = $data['room_type_list'] ?? null;
        $this->container['is_los_pricing'] = $data['is_los_pricing'] ?? null;
        $this->container['is_obp_pricing'] = $data['is_obp_pricing'] ?? null;
        $this->container['rate_plan_list'] = $data['rate_plan_list'] ?? null;
        $this->container['policy_info'] = $data['policy_info'] ?? null;
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
     * Gets property_id
     *
     * @return string|null
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param string|null $property_id property_id
     *
     * @return self
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
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
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerMealPlanListInner[]|null
     */
    public function getMealPlanList()
    {
        return $this->container['meal_plan_list'];
    }

    /**
     * Sets meal_plan_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerMealPlanListInner[]|null $meal_plan_list meal_plan_list
     *
     * @return self
     */
    public function setMealPlanList($meal_plan_list)
    {
        $this->container['meal_plan_list'] = $meal_plan_list;

        return $this;
    }

    /**
     * Gets room_type_list
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRoomTypeListInner[]|null
     */
    public function getRoomTypeList()
    {
        return $this->container['room_type_list'];
    }

    /**
     * Sets room_type_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRoomTypeListInner[]|null $room_type_list room_type_list
     *
     * @return self
     */
    public function setRoomTypeList($room_type_list)
    {
        $this->container['room_type_list'] = $room_type_list;

        return $this;
    }

    /**
     * Gets is_los_pricing
     *
     * @return bool|null
     */
    public function getIsLosPricing()
    {
        return $this->container['is_los_pricing'];
    }

    /**
     * Sets is_los_pricing
     *
     * @param bool|null $is_los_pricing is_los_pricing
     *
     * @return self
     */
    public function setIsLosPricing($is_los_pricing)
    {
        $this->container['is_los_pricing'] = $is_los_pricing;

        return $this;
    }

    /**
     * Gets is_obp_pricing
     *
     * @return bool|null
     */
    public function getIsObpPricing()
    {
        return $this->container['is_obp_pricing'];
    }

    /**
     * Sets is_obp_pricing
     *
     * @param bool|null $is_obp_pricing is_obp_pricing
     *
     * @return self
     */
    public function setIsObpPricing($is_obp_pricing)
    {
        $this->container['is_obp_pricing'] = $is_obp_pricing;

        return $this;
    }

    /**
     * Gets rate_plan_list
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInner[]|null
     */
    public function getRatePlanList()
    {
        return $this->container['rate_plan_list'];
    }

    /**
     * Sets rate_plan_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInner[]|null $rate_plan_list rate_plan_list
     *
     * @return self
     */
    public function setRatePlanList($rate_plan_list)
    {
        $this->container['rate_plan_list'] = $rate_plan_list;

        return $this;
    }

    /**
     * Gets policy_info
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerPolicyInfo|null
     */
    public function getPolicyInfo()
    {
        return $this->container['policy_info'];
    }

    /**
     * Sets policy_info
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponseProductListInnerPolicyInfo|null $policy_info policy_info
     *
     * @return self
     */
    public function setPolicyInfo($policy_info)
    {
        $this->container['policy_info'] = $policy_info;

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


