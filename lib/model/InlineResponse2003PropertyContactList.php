<?php
/**
 * InlineResponse2003PropertyContactList
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * lodgea-php
 *
 * LODGEA SDK for php. Check out https://docs.lodgea.io for more information.
 *
 * The version of the OpenAPI document: 1.2.0
 * Contact: support@lodgea.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
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
 * InlineResponse2003PropertyContactList Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2003PropertyContactList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_3_property_contactList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'profile_type' => 'string',
        'address_list' => '\com.lodgea\com.lodgea.model\InlineResponse2003PropertyAddressList[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'profile_type' => null,
        'address_list' => null
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
        'profile_type' => 'profileType',
        'address_list' => 'addressList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile_type' => 'setProfileType',
        'address_list' => 'setAddressList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile_type' => 'getProfileType',
        'address_list' => 'getAddressList'
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

    const PROFILE_TYPE_GENERAL = 'general';
    const PROFILE_TYPE_CONTRACT = 'contract';
    const PROFILE_TYPE_RESERVATIONS = 'reservations';
    const PROFILE_TYPE_INVOICES = 'invoices';
    const PROFILE_TYPE_AVAILABILITY = 'availability';
    const PROFILE_TYPE_SITE_CONTENT = 'site_content';
    const PROFILE_TYPE_PARITY = 'parity';
    const PROFILE_TYPE_REQUESTS = 'requests';
    const PROFILE_TYPE_CENTRAL_RESERVATIONS = 'central_reservations';
    const PROFILE_TYPE_PHYSICALLOCATION = 'physicallocation';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileTypeAllowableValues()
    {
        return [
            self::PROFILE_TYPE_GENERAL,
            self::PROFILE_TYPE_CONTRACT,
            self::PROFILE_TYPE_RESERVATIONS,
            self::PROFILE_TYPE_INVOICES,
            self::PROFILE_TYPE_AVAILABILITY,
            self::PROFILE_TYPE_SITE_CONTENT,
            self::PROFILE_TYPE_PARITY,
            self::PROFILE_TYPE_REQUESTS,
            self::PROFILE_TYPE_CENTRAL_RESERVATIONS,
            self::PROFILE_TYPE_PHYSICALLOCATION,
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
        $this->container['profile_type'] = $data['profile_type'] ?? null;
        $this->container['address_list'] = $data['address_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['profile_type'] === null) {
            $invalidProperties[] = "'profile_type' can't be null";
        }
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($this->container['profile_type']) && !in_array($this->container['profile_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'profile_type', must be one of '%s'",
                $this->container['profile_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['address_list'] === null) {
            $invalidProperties[] = "'address_list' can't be null";
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
     * Gets profile_type
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->container['profile_type'];
    }

    /**
     * Sets profile_type
     *
     * @param string $profile_type The type of profile this contact belongs to.
     *
     * @return self
     */
    public function setProfileType($profile_type)
    {
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!in_array($profile_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'profile_type', must be one of '%s'",
                    $profile_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile_type'] = $profile_type;

        return $this;
    }

    /**
     * Gets address_list
     *
     * @return \com.lodgea\com.lodgea.model\InlineResponse2003PropertyAddressList[]
     */
    public function getAddressList()
    {
        return $this->container['address_list'];
    }

    /**
     * Sets address_list
     *
     * @param \com.lodgea\com.lodgea.model\InlineResponse2003PropertyAddressList[] $address_list A list of addresses for this contact
     *
     * @return self
     */
    public function setAddressList($address_list)
    {
        $this->container['address_list'] = $address_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

