<?php
/**
 * V1PropertyGetPost200ResponseProductListInnerPolicyInfoCancellationPolicyListInner
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
 * V1PropertyGetPost200ResponseProductListInnerPolicyInfoCancellationPolicyListInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponseProductListInnerPolicyInfoCancellationPolicyListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_productList_inner_policyInfo_cancellationPolicyList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'float',
        'percent_after_reservation' => 'float',
        'nights_after_reservation' => 'float',
        'deadline_days' => 'float',
        'deadline_hours' => 'float',
        'percent_after_deadline' => 'float',
        'nights_after_deadline' => 'float',
        'no_show_policy' => 'string'
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
        'percent_after_reservation' => null,
        'nights_after_reservation' => null,
        'deadline_days' => null,
        'deadline_hours' => null,
        'percent_after_deadline' => null,
        'nights_after_deadline' => null,
        'no_show_policy' => null
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
        'percent_after_reservation' => 'percentAfterReservation',
        'nights_after_reservation' => 'nightsAfterReservation',
        'deadline_days' => 'deadlineDays',
        'deadline_hours' => 'deadlineHours',
        'percent_after_deadline' => 'percentAfterDeadline',
        'nights_after_deadline' => 'nightsAfterDeadline',
        'no_show_policy' => 'noShowPolicy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'percent_after_reservation' => 'setPercentAfterReservation',
        'nights_after_reservation' => 'setNightsAfterReservation',
        'deadline_days' => 'setDeadlineDays',
        'deadline_hours' => 'setDeadlineHours',
        'percent_after_deadline' => 'setPercentAfterDeadline',
        'nights_after_deadline' => 'setNightsAfterDeadline',
        'no_show_policy' => 'setNoShowPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'percent_after_reservation' => 'getPercentAfterReservation',
        'nights_after_reservation' => 'getNightsAfterReservation',
        'deadline_days' => 'getDeadlineDays',
        'deadline_hours' => 'getDeadlineHours',
        'percent_after_deadline' => 'getPercentAfterDeadline',
        'nights_after_deadline' => 'getNightsAfterDeadline',
        'no_show_policy' => 'getNoShowPolicy'
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
        $this->container['percent_after_reservation'] = $data['percent_after_reservation'] ?? null;
        $this->container['nights_after_reservation'] = $data['nights_after_reservation'] ?? null;
        $this->container['deadline_days'] = $data['deadline_days'] ?? null;
        $this->container['deadline_hours'] = $data['deadline_hours'] ?? null;
        $this->container['percent_after_deadline'] = $data['percent_after_deadline'] ?? null;
        $this->container['nights_after_deadline'] = $data['nights_after_deadline'] ?? null;
        $this->container['no_show_policy'] = $data['no_show_policy'] ?? null;
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
     * Gets percent_after_reservation
     *
     * @return float|null
     */
    public function getPercentAfterReservation()
    {
        return $this->container['percent_after_reservation'];
    }

    /**
     * Sets percent_after_reservation
     *
     * @param float|null $percent_after_reservation percent_after_reservation
     *
     * @return self
     */
    public function setPercentAfterReservation($percent_after_reservation)
    {
        $this->container['percent_after_reservation'] = $percent_after_reservation;

        return $this;
    }

    /**
     * Gets nights_after_reservation
     *
     * @return float|null
     */
    public function getNightsAfterReservation()
    {
        return $this->container['nights_after_reservation'];
    }

    /**
     * Sets nights_after_reservation
     *
     * @param float|null $nights_after_reservation nights_after_reservation
     *
     * @return self
     */
    public function setNightsAfterReservation($nights_after_reservation)
    {
        $this->container['nights_after_reservation'] = $nights_after_reservation;

        return $this;
    }

    /**
     * Gets deadline_days
     *
     * @return float|null
     */
    public function getDeadlineDays()
    {
        return $this->container['deadline_days'];
    }

    /**
     * Sets deadline_days
     *
     * @param float|null $deadline_days deadline_days
     *
     * @return self
     */
    public function setDeadlineDays($deadline_days)
    {
        $this->container['deadline_days'] = $deadline_days;

        return $this;
    }

    /**
     * Gets deadline_hours
     *
     * @return float|null
     */
    public function getDeadlineHours()
    {
        return $this->container['deadline_hours'];
    }

    /**
     * Sets deadline_hours
     *
     * @param float|null $deadline_hours deadline_hours
     *
     * @return self
     */
    public function setDeadlineHours($deadline_hours)
    {
        $this->container['deadline_hours'] = $deadline_hours;

        return $this;
    }

    /**
     * Gets percent_after_deadline
     *
     * @return float|null
     */
    public function getPercentAfterDeadline()
    {
        return $this->container['percent_after_deadline'];
    }

    /**
     * Sets percent_after_deadline
     *
     * @param float|null $percent_after_deadline percent_after_deadline
     *
     * @return self
     */
    public function setPercentAfterDeadline($percent_after_deadline)
    {
        $this->container['percent_after_deadline'] = $percent_after_deadline;

        return $this;
    }

    /**
     * Gets nights_after_deadline
     *
     * @return float|null
     */
    public function getNightsAfterDeadline()
    {
        return $this->container['nights_after_deadline'];
    }

    /**
     * Sets nights_after_deadline
     *
     * @param float|null $nights_after_deadline nights_after_deadline
     *
     * @return self
     */
    public function setNightsAfterDeadline($nights_after_deadline)
    {
        $this->container['nights_after_deadline'] = $nights_after_deadline;

        return $this;
    }

    /**
     * Gets no_show_policy
     *
     * @return string|null
     */
    public function getNoShowPolicy()
    {
        return $this->container['no_show_policy'];
    }

    /**
     * Sets no_show_policy
     *
     * @param string|null $no_show_policy no_show_policy
     *
     * @return self
     */
    public function setNoShowPolicy($no_show_policy)
    {
        $this->container['no_show_policy'] = $no_show_policy;

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


