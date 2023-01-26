<?php
/**
 * AvailablePropertiesInner1LowestPrice
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
 * AvailablePropertiesInner1LowestPrice Class Doc Comment
 *
 * @category Class
 * @description An object outlining the stay with the lowest available price point for this property.
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailablePropertiesInner1LowestPrice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Available_Properties_inner_1_lowestPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'currency_code' => 'string',
        'arrival_date' => 'float',
        'return_date' => 'float',
        'length_of_stay' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'currency_code' => null,
        'arrival_date' => null,
        'return_date' => null,
        'length_of_stay' => null
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
        'amount' => 'amount',
        'currency_code' => 'currencyCode',
        'arrival_date' => 'arrivalDate',
        'return_date' => 'returnDate',
        'length_of_stay' => 'lengthOfStay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'currency_code' => 'setCurrencyCode',
        'arrival_date' => 'setArrivalDate',
        'return_date' => 'setReturnDate',
        'length_of_stay' => 'setLengthOfStay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'currency_code' => 'getCurrencyCode',
        'arrival_date' => 'getArrivalDate',
        'return_date' => 'getReturnDate',
        'length_of_stay' => 'getLengthOfStay'
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

    public const CURRENCY_CODE_AED = 'AED';
    public const CURRENCY_CODE_ARS = 'ARS';
    public const CURRENCY_CODE_AUD = 'AUD';
    public const CURRENCY_CODE_AZN = 'AZN';
    public const CURRENCY_CODE_BGN = 'BGN';
    public const CURRENCY_CODE_BHD = 'BHD';
    public const CURRENCY_CODE_BRL = 'BRL';
    public const CURRENCY_CODE_CAD = 'CAD';
    public const CURRENCY_CODE_CHF = 'CHF';
    public const CURRENCY_CODE_CLP = 'CLP';
    public const CURRENCY_CODE_CNY = 'CNY';
    public const CURRENCY_CODE_COP = 'COP';
    public const CURRENCY_CODE_CZK = 'CZK';
    public const CURRENCY_CODE_DKK = 'DKK';
    public const CURRENCY_CODE_EGP = 'EGP';
    public const CURRENCY_CODE_EUR = 'EUR';
    public const CURRENCY_CODE_FJD = 'FJD';
    public const CURRENCY_CODE_GBP = 'GBP';
    public const CURRENCY_CODE_GEL = 'GEL';
    public const CURRENCY_CODE_HKD = 'HKD';
    public const CURRENCY_CODE_HUF = 'HUF';
    public const CURRENCY_CODE_IDR = 'IDR';
    public const CURRENCY_CODE_ILS = 'ILS';
    public const CURRENCY_CODE_INR = 'INR';
    public const CURRENCY_CODE_JOD = 'JOD';
    public const CURRENCY_CODE_JPY = 'JPY';
    public const CURRENCY_CODE_KRW = 'KRW';
    public const CURRENCY_CODE_KWD = 'KWD';
    public const CURRENCY_CODE_KZT = 'KZT';
    public const CURRENCY_CODE_MDL = 'MDL';
    public const CURRENCY_CODE_MXN = 'MXN';
    public const CURRENCY_CODE_MYR = 'MYR';
    public const CURRENCY_CODE_NAD = 'NAD';
    public const CURRENCY_CODE_NOK = 'NOK';
    public const CURRENCY_CODE_NZD = 'NZD';
    public const CURRENCY_CODE_OMR = 'OMR';
    public const CURRENCY_CODE_PLN = 'PLN';
    public const CURRENCY_CODE_QAR = 'QAR';
    public const CURRENCY_CODE_RON = 'RON';
    public const CURRENCY_CODE_RUB = 'RUB';
    public const CURRENCY_CODE_SAR = 'SAR';
    public const CURRENCY_CODE_SEK = 'SEK';
    public const CURRENCY_CODE_SGD = 'SGD';
    public const CURRENCY_CODE_THB = 'THB';
    public const CURRENCY_CODE__TRY = 'TRY';
    public const CURRENCY_CODE_TWD = 'TWD';
    public const CURRENCY_CODE_UAH = 'UAH';
    public const CURRENCY_CODE_USD = 'USD';
    public const CURRENCY_CODE_XOF = 'XOF';
    public const CURRENCY_CODE_ZAR = 'ZAR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyCodeAllowableValues()
    {
        return [
            self::CURRENCY_CODE_AED,
            self::CURRENCY_CODE_ARS,
            self::CURRENCY_CODE_AUD,
            self::CURRENCY_CODE_AZN,
            self::CURRENCY_CODE_BGN,
            self::CURRENCY_CODE_BHD,
            self::CURRENCY_CODE_BRL,
            self::CURRENCY_CODE_CAD,
            self::CURRENCY_CODE_CHF,
            self::CURRENCY_CODE_CLP,
            self::CURRENCY_CODE_CNY,
            self::CURRENCY_CODE_COP,
            self::CURRENCY_CODE_CZK,
            self::CURRENCY_CODE_DKK,
            self::CURRENCY_CODE_EGP,
            self::CURRENCY_CODE_EUR,
            self::CURRENCY_CODE_FJD,
            self::CURRENCY_CODE_GBP,
            self::CURRENCY_CODE_GEL,
            self::CURRENCY_CODE_HKD,
            self::CURRENCY_CODE_HUF,
            self::CURRENCY_CODE_IDR,
            self::CURRENCY_CODE_ILS,
            self::CURRENCY_CODE_INR,
            self::CURRENCY_CODE_JOD,
            self::CURRENCY_CODE_JPY,
            self::CURRENCY_CODE_KRW,
            self::CURRENCY_CODE_KWD,
            self::CURRENCY_CODE_KZT,
            self::CURRENCY_CODE_MDL,
            self::CURRENCY_CODE_MXN,
            self::CURRENCY_CODE_MYR,
            self::CURRENCY_CODE_NAD,
            self::CURRENCY_CODE_NOK,
            self::CURRENCY_CODE_NZD,
            self::CURRENCY_CODE_OMR,
            self::CURRENCY_CODE_PLN,
            self::CURRENCY_CODE_QAR,
            self::CURRENCY_CODE_RON,
            self::CURRENCY_CODE_RUB,
            self::CURRENCY_CODE_SAR,
            self::CURRENCY_CODE_SEK,
            self::CURRENCY_CODE_SGD,
            self::CURRENCY_CODE_THB,
            self::CURRENCY_CODE__TRY,
            self::CURRENCY_CODE_TWD,
            self::CURRENCY_CODE_UAH,
            self::CURRENCY_CODE_USD,
            self::CURRENCY_CODE_XOF,
            self::CURRENCY_CODE_ZAR,
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['arrival_date'] = $data['arrival_date'] ?? null;
        $this->container['return_date'] = $data['return_date'] ?? null;
        $this->container['length_of_stay'] = $data['length_of_stay'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        $allowedValues = $this->getCurrencyCodeAllowableValues();
        if (!is_null($this->container['currency_code']) && !in_array($this->container['currency_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency_code', must be one of '%s'",
                $this->container['currency_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['arrival_date'] === null) {
            $invalidProperties[] = "'arrival_date' can't be null";
        }
        if ($this->container['return_date'] === null) {
            $invalidProperties[] = "'return_date' can't be null";
        }
        if ($this->container['length_of_stay'] === null) {
            $invalidProperties[] = "'length_of_stay' can't be null";
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
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount of the lowest price.
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string $currency_code The currency code for the given amount.<p>See also <a href=\"#currencycodes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $allowedValues = $this->getCurrencyCodeAllowableValues();
        if (!in_array($currency_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency_code', must be one of '%s'",
                    $currency_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets arrival_date
     *
     * @return float
     */
    public function getArrivalDate()
    {
        return $this->container['arrival_date'];
    }

    /**
     * Sets arrival_date
     *
     * @param float $arrival_date Arrival date for the given price as unix timestamp (seconds).
     *
     * @return self
     */
    public function setArrivalDate($arrival_date)
    {
        $this->container['arrival_date'] = $arrival_date;

        return $this;
    }

    /**
     * Gets return_date
     *
     * @return float
     */
    public function getReturnDate()
    {
        return $this->container['return_date'];
    }

    /**
     * Sets return_date
     *
     * @param float $return_date Departure date for the given price as unix timestamp (seconds).
     *
     * @return self
     */
    public function setReturnDate($return_date)
    {
        $this->container['return_date'] = $return_date;

        return $this;
    }

    /**
     * Gets length_of_stay
     *
     * @return float
     */
    public function getLengthOfStay()
    {
        return $this->container['length_of_stay'];
    }

    /**
     * Sets length_of_stay
     *
     * @param float $length_of_stay The amount of nights of stay this price is for
     *
     * @return self
     */
    public function setLengthOfStay($length_of_stay)
    {
        $this->container['length_of_stay'] = $length_of_stay;

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


