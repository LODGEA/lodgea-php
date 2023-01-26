<?php
/**
 * PropertiesPropertyIdGet200ResponsePropertyGuestInfo
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
 * PropertiesPropertyIdGet200ResponsePropertyGuestInfo Class Doc Comment
 *
 * @category Class
 * @description Information regarding requirements towards guests.
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertiesPropertyIdGet200ResponsePropertyGuestInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_properties__propertyId__get_200_response_property_guestInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guest_address_required' => 'bool',
        'guest_contact_number_required' => 'bool',
        'guest_name_list_required' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guest_address_required' => null,
        'guest_contact_number_required' => null,
        'guest_name_list_required' => null
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
        'guest_address_required' => 'guestAddressRequired',
        'guest_contact_number_required' => 'guestContactNumberRequired',
        'guest_name_list_required' => 'guestNameListRequired'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guest_address_required' => 'setGuestAddressRequired',
        'guest_contact_number_required' => 'setGuestContactNumberRequired',
        'guest_name_list_required' => 'setGuestNameListRequired'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guest_address_required' => 'getGuestAddressRequired',
        'guest_contact_number_required' => 'getGuestContactNumberRequired',
        'guest_name_list_required' => 'getGuestNameListRequired'
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
        $this->container['guest_address_required'] = $data['guest_address_required'] ?? null;
        $this->container['guest_contact_number_required'] = $data['guest_contact_number_required'] ?? null;
        $this->container['guest_name_list_required'] = $data['guest_name_list_required'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['guest_address_required'] === null) {
            $invalidProperties[] = "'guest_address_required' can't be null";
        }
        if ($this->container['guest_contact_number_required'] === null) {
            $invalidProperties[] = "'guest_contact_number_required' can't be null";
        }
        if ($this->container['guest_name_list_required'] === null) {
            $invalidProperties[] = "'guest_name_list_required' can't be null";
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
     * Gets guest_address_required
     *
     * @return bool
     */
    public function getGuestAddressRequired()
    {
        return $this->container['guest_address_required'];
    }

    /**
     * Sets guest_address_required
     *
     * @param bool $guest_address_required Whether the address of the guest is required to book this property.
     *
     * @return self
     */
    public function setGuestAddressRequired($guest_address_required)
    {
        $this->container['guest_address_required'] = $guest_address_required;

        return $this;
    }

    /**
     * Gets guest_contact_number_required
     *
     * @return bool
     */
    public function getGuestContactNumberRequired()
    {
        return $this->container['guest_contact_number_required'];
    }

    /**
     * Sets guest_contact_number_required
     *
     * @param bool $guest_contact_number_required Whether the phone number of the guest is required to book this property.
     *
     * @return self
     */
    public function setGuestContactNumberRequired($guest_contact_number_required)
    {
        $this->container['guest_contact_number_required'] = $guest_contact_number_required;

        return $this;
    }

    /**
     * Gets guest_name_list_required
     *
     * @return bool
     */
    public function getGuestNameListRequired()
    {
        return $this->container['guest_name_list_required'];
    }

    /**
     * Sets guest_name_list_required
     *
     * @param bool $guest_name_list_required Whether a list of the guests names is required to book this property.
     *
     * @return self
     */
    public function setGuestNameListRequired($guest_name_list_required)
    {
        $this->container['guest_name_list_required'] = $guest_name_list_required;

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


