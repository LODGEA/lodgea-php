<?php
/**
 * InlineResponse200List
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
 * InlineResponse200List Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse200List implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_list';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'currency_code' => 'string',
        'lowest_price' => 'float',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'currency_code' => null,
        'lowest_price' => null,
        'type' => null
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
        'name' => 'name',
        'currency_code' => 'currencyCode',
        'lowest_price' => 'lowestPrice',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'currency_code' => 'setCurrencyCode',
        'lowest_price' => 'setLowestPrice',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'currency_code' => 'getCurrencyCode',
        'lowest_price' => 'getLowestPrice',
        'type' => 'getType'
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

    const TYPE_FORMATTED_ADDRESS = 'formatted_address';
    const TYPE_PLACE_ID = 'place_id';
    const TYPE_LOCALITY = 'locality';
    const TYPE_ADMINISTRATIVE_AREA_LEVEL_1 = 'administrative_area_level_1';
    const TYPE_ADMINISTRATIVE_AREA_LEVEL_2 = 'administrative_area_level_2';
    const TYPE_ADMINISTRATIVE_AREA_LEVEL_3 = 'administrative_area_level_3';
    const TYPE_ADMINISTRATIVE_AREA_LEVEL_4 = 'administrative_area_level_4';
    const TYPE_ADMINISTRATIVE_AREA_LEVEL_5 = 'administrative_area_level_5';
    const TYPE_STATE_CODE = 'state_code';
    const TYPE_COUNTRY = 'country';
    const TYPE_COUNTRY_CODE = 'country_code';
    const TYPE_POSTAL_CODE = 'postal_code';
    const TYPE_LANGUAGE = 'language';
    const TYPE_NATURAL_FEATURE = 'natural_feature';
    const TYPE_ESTABLISHMENT = 'establishment';
    const TYPE_SUBLOCALITY = 'sublocality';
    const TYPE_SUBLOCALITY_LEVEL_1 = 'sublocality_level_1';
    const TYPE_SUBLOCALITY_LEVEL_2 = 'sublocality_level_2';
    const TYPE_SUBLOCALITY_LEVEL_3 = 'sublocality_level_3';
    const TYPE_SUBLOCALITY_LEVEL_4 = 'sublocality_level_4';
    const TYPE_SUBLOCALITY_LEVEL_5 = 'sublocality_level_5';
    const TYPE_STREET_NUMBER = 'streetNumber';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FORMATTED_ADDRESS,
            self::TYPE_PLACE_ID,
            self::TYPE_LOCALITY,
            self::TYPE_ADMINISTRATIVE_AREA_LEVEL_1,
            self::TYPE_ADMINISTRATIVE_AREA_LEVEL_2,
            self::TYPE_ADMINISTRATIVE_AREA_LEVEL_3,
            self::TYPE_ADMINISTRATIVE_AREA_LEVEL_4,
            self::TYPE_ADMINISTRATIVE_AREA_LEVEL_5,
            self::TYPE_STATE_CODE,
            self::TYPE_COUNTRY,
            self::TYPE_COUNTRY_CODE,
            self::TYPE_POSTAL_CODE,
            self::TYPE_LANGUAGE,
            self::TYPE_NATURAL_FEATURE,
            self::TYPE_ESTABLISHMENT,
            self::TYPE_SUBLOCALITY,
            self::TYPE_SUBLOCALITY_LEVEL_1,
            self::TYPE_SUBLOCALITY_LEVEL_2,
            self::TYPE_SUBLOCALITY_LEVEL_3,
            self::TYPE_SUBLOCALITY_LEVEL_4,
            self::TYPE_SUBLOCALITY_LEVEL_5,
            self::TYPE_STREET_NUMBER,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['lowest_price'] = $data['lowest_price'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['lowest_price'] === null) {
            $invalidProperties[] = "'lowest_price' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * @param string $name The name of the location.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code The currency code of the currency of the lowest price.
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets lowest_price
     *
     * @return float
     */
    public function getLowestPrice()
    {
        return $this->container['lowest_price'];
    }

    /**
     * Sets lowest_price
     *
     * @param float $lowest_price The lowest price available for this location.
     *
     * @return self
     */
    public function setLowestPrice($lowest_price)
    {
        $this->container['lowest_price'] = $lowest_price;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the found location.<p>See also <a href=\"#locationtypes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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

