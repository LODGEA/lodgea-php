<?php
/**
 * V1PropertyGetPost200ResponsePropertyServiceListInner
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
 * V1PropertyGetPost200ResponsePropertyServiceListInner Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponsePropertyServiceListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_property_serviceList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'float',
        'price' => 'float',
        'exists' => 'bool',
        'included' => 'bool',
        'currency_code' => 'string',
        'feature_list' => 'string[]',
        'type_list' => 'string[]',
        'item_list' => 'string[]',
        'operation_time_list' => 'string[]',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'price' => null,
        'exists' => null,
        'included' => null,
        'currency_code' => null,
        'feature_list' => null,
        'type_list' => null,
        'item_list' => null,
        'operation_time_list' => null,
        'name' => null
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
        'code' => 'code',
        'price' => 'price',
        'exists' => 'exists',
        'included' => 'included',
        'currency_code' => 'currencyCode',
        'feature_list' => 'featureList',
        'type_list' => 'typeList',
        'item_list' => 'itemList',
        'operation_time_list' => 'operationTimeList',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'price' => 'setPrice',
        'exists' => 'setExists',
        'included' => 'setIncluded',
        'currency_code' => 'setCurrencyCode',
        'feature_list' => 'setFeatureList',
        'type_list' => 'setTypeList',
        'item_list' => 'setItemList',
        'operation_time_list' => 'setOperationTimeList',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'price' => 'getPrice',
        'exists' => 'getExists',
        'included' => 'getIncluded',
        'currency_code' => 'getCurrencyCode',
        'feature_list' => 'getFeatureList',
        'type_list' => 'getTypeList',
        'item_list' => 'getItemList',
        'operation_time_list' => 'getOperationTimeList',
        'name' => 'getName'
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
        $this->container['exists'] = $data['exists'] ?? null;
        $this->container['included'] = $data['included'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['feature_list'] = $data['feature_list'] ?? null;
        $this->container['type_list'] = $data['type_list'] ?? null;
        $this->container['item_list'] = $data['item_list'] ?? null;
        $this->container['operation_time_list'] = $data['operation_time_list'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
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
     * Gets code
     *
     * @return float|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param float|null $code code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets exists
     *
     * @return bool|null
     */
    public function getExists()
    {
        return $this->container['exists'];
    }

    /**
     * Sets exists
     *
     * @param bool|null $exists exists
     *
     * @return self
     */
    public function setExists($exists)
    {
        $this->container['exists'] = $exists;

        return $this;
    }

    /**
     * Gets included
     *
     * @return bool|null
     */
    public function getIncluded()
    {
        return $this->container['included'];
    }

    /**
     * Sets included
     *
     * @param bool|null $included included
     *
     * @return self
     */
    public function setIncluded($included)
    {
        $this->container['included'] = $included;

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
     * Gets feature_list
     *
     * @return string[]|null
     */
    public function getFeatureList()
    {
        return $this->container['feature_list'];
    }

    /**
     * Sets feature_list
     *
     * @param string[]|null $feature_list feature_list
     *
     * @return self
     */
    public function setFeatureList($feature_list)
    {
        $this->container['feature_list'] = $feature_list;

        return $this;
    }

    /**
     * Gets type_list
     *
     * @return string[]|null
     */
    public function getTypeList()
    {
        return $this->container['type_list'];
    }

    /**
     * Sets type_list
     *
     * @param string[]|null $type_list type_list
     *
     * @return self
     */
    public function setTypeList($type_list)
    {
        $this->container['type_list'] = $type_list;

        return $this;
    }

    /**
     * Gets item_list
     *
     * @return string[]|null
     */
    public function getItemList()
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list
     *
     * @param string[]|null $item_list item_list
     *
     * @return self
     */
    public function setItemList($item_list)
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets operation_time_list
     *
     * @return string[]|null
     */
    public function getOperationTimeList()
    {
        return $this->container['operation_time_list'];
    }

    /**
     * Sets operation_time_list
     *
     * @param string[]|null $operation_time_list operation_time_list
     *
     * @return self
     */
    public function setOperationTimeList($operation_time_list)
    {
        $this->container['operation_time_list'] = $operation_time_list;

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


