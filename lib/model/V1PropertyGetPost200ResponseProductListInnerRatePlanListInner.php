<?php
/**
 * V1PropertyGetPost200ResponseProductListInnerRatePlanListInner
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
 * V1PropertyGetPost200ResponseProductListInnerRatePlanListInner Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponseProductListInnerRatePlanListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_productList_inner_ratePlanList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'active' => 'bool',
        'name' => 'string',
        'code' => 'string',
        'property_id' => 'string',
        'pricing_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'active' => null,
        'name' => null,
        'code' => null,
        'property_id' => null,
        'pricing_list' => null
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
        'active' => 'active',
        'name' => 'name',
        'code' => 'code',
        'property_id' => 'propertyId',
        'pricing_list' => 'pricingList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'name' => 'setName',
        'code' => 'setCode',
        'property_id' => 'setPropertyId',
        'pricing_list' => 'setPricingList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'name' => 'getName',
        'code' => 'getCode',
        'property_id' => 'getPropertyId',
        'pricing_list' => 'getPricingList'
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
        $this->container['active'] = $data['active'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['property_id'] = $data['property_id'] ?? null;
        $this->container['pricing_list'] = $data['pricing_list'] ?? null;
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
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
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
     * Gets pricing_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInner[]|null
     */
    public function getPricingList()
    {
        return $this->container['pricing_list'];
    }

    /**
     * Sets pricing_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponseProductListInnerRatePlanListInnerPricingListInner[]|null $pricing_list pricing_list
     *
     * @return self
     */
    public function setPricingList($pricing_list)
    {
        $this->container['pricing_list'] = $pricing_list;

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


