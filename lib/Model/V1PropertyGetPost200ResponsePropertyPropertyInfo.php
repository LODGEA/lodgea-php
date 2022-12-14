<?php
/**
 * V1PropertyGetPost200ResponsePropertyPropertyInfo
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
 * V1PropertyGetPost200ResponsePropertyPropertyInfo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponsePropertyPropertyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_property_propertyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unit_count' => 'float',
        'message_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoMessageListInner[]',
        'category_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoCategoryListInner[]',
        'language_list' => 'string[]',
        'location' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoLocation',
        'accepted_payment_list' => '\OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoAcceptedPaymentListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'unit_count' => null,
        'message_list' => null,
        'category_list' => null,
        'language_list' => null,
        'location' => null,
        'accepted_payment_list' => null
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
        'unit_count' => 'unitCount',
        'message_list' => 'messageList',
        'category_list' => 'categoryList',
        'language_list' => 'languageList',
        'location' => 'location',
        'accepted_payment_list' => 'acceptedPaymentList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unit_count' => 'setUnitCount',
        'message_list' => 'setMessageList',
        'category_list' => 'setCategoryList',
        'language_list' => 'setLanguageList',
        'location' => 'setLocation',
        'accepted_payment_list' => 'setAcceptedPaymentList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unit_count' => 'getUnitCount',
        'message_list' => 'getMessageList',
        'category_list' => 'getCategoryList',
        'language_list' => 'getLanguageList',
        'location' => 'getLocation',
        'accepted_payment_list' => 'getAcceptedPaymentList'
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
        $this->container['unit_count'] = $data['unit_count'] ?? null;
        $this->container['message_list'] = $data['message_list'] ?? null;
        $this->container['category_list'] = $data['category_list'] ?? null;
        $this->container['language_list'] = $data['language_list'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['accepted_payment_list'] = $data['accepted_payment_list'] ?? null;
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
     * Gets unit_count
     *
     * @return float|null
     */
    public function getUnitCount()
    {
        return $this->container['unit_count'];
    }

    /**
     * Sets unit_count
     *
     * @param float|null $unit_count unit_count
     *
     * @return self
     */
    public function setUnitCount($unit_count)
    {
        $this->container['unit_count'] = $unit_count;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoMessageListInner[]|null
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoMessageListInner[]|null $message_list message_list
     *
     * @return self
     */
    public function setMessageList($message_list)
    {
        $this->container['message_list'] = $message_list;

        return $this;
    }

    /**
     * Gets category_list
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoCategoryListInner[]|null
     */
    public function getCategoryList()
    {
        return $this->container['category_list'];
    }

    /**
     * Sets category_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoCategoryListInner[]|null $category_list category_list
     *
     * @return self
     */
    public function setCategoryList($category_list)
    {
        $this->container['category_list'] = $category_list;

        return $this;
    }

    /**
     * Gets language_list
     *
     * @return string[]|null
     */
    public function getLanguageList()
    {
        return $this->container['language_list'];
    }

    /**
     * Sets language_list
     *
     * @param string[]|null $language_list language_list
     *
     * @return self
     */
    public function setLanguageList($language_list)
    {
        $this->container['language_list'] = $language_list;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets accepted_payment_list
     *
     * @return \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoAcceptedPaymentListInner[]|null
     */
    public function getAcceptedPaymentList()
    {
        return $this->container['accepted_payment_list'];
    }

    /**
     * Sets accepted_payment_list
     *
     * @param \OpenAPI\Client\Model\V1PropertyGetPost200ResponsePropertyPropertyInfoAcceptedPaymentListInner[]|null $accepted_payment_list accepted_payment_list
     *
     * @return self
     */
    public function setAcceptedPaymentList($accepted_payment_list)
    {
        $this->container['accepted_payment_list'] = $accepted_payment_list;

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


