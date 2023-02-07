<?php
/**
 * InlineResponse2003PropertyFeePolicyList
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
 * InlineResponse2003PropertyFeePolicyList Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2003PropertyFeePolicyList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_3_property_feePolicyList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type_code' => 'float',
        'percent' => 'float',
        'charge_type' => 'string',
        'charge_frequency_code' => 'float',
        'currency_code' => 'string',
        'condition_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type_code' => null,
        'percent' => null,
        'charge_type' => null,
        'charge_frequency_code' => null,
        'currency_code' => null,
        'condition_list' => null
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
        'type_code' => 'typeCode',
        'percent' => 'percent',
        'charge_type' => 'chargeType',
        'charge_frequency_code' => 'chargeFrequencyCode',
        'currency_code' => 'currencyCode',
        'condition_list' => 'conditionList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type_code' => 'setTypeCode',
        'percent' => 'setPercent',
        'charge_type' => 'setChargeType',
        'charge_frequency_code' => 'setChargeFrequencyCode',
        'currency_code' => 'setCurrencyCode',
        'condition_list' => 'setConditionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type_code' => 'getTypeCode',
        'percent' => 'getPercent',
        'charge_type' => 'getChargeType',
        'charge_frequency_code' => 'getChargeFrequencyCode',
        'currency_code' => 'getCurrencyCode',
        'condition_list' => 'getConditionList'
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

    const TYPE_CODE_2 = 2;
    const TYPE_CODE_9 = 9;
    const TYPE_CODE_11 = 11;
    const TYPE_CODE_12 = 12;
    const TYPE_CODE_14 = 14;
    const TYPE_CODE_16 = 16;
    const TYPE_CODE_27 = 27;
    const TYPE_CODE_29 = 29;
    const TYPE_CODE_31 = 31;
    const TYPE_CODE_32 = 32;
    const TYPE_CODE_33 = 33;
    const TYPE_CODE_34 = 34;
    const TYPE_CODE_37 = 37;
    const TYPE_CODE_38 = 38;
    const TYPE_CODE_40 = 40;
    const TYPE_CODE_41 = 41;
    const TYPE_CODE_42 = 42;
    const TYPE_CODE_44 = 44;
    const TYPE_CODE_45 = 45;
    const TYPE_CODE_47 = 47;
    const TYPE_CODE_51 = 51;
    const TYPE_CODE_52 = 52;
    const TYPE_CODE_53 = 53;
    const TYPE_CODE_54 = 54;
    const TYPE_CODE_55 = 55;
    const TYPE_CODE_56 = 56;
    const TYPE_CODE_5000 = 5000;
    const TYPE_CODE_5003 = 5003;
    const TYPE_CODE_5005 = 5005;
    const TYPE_CODE_5006 = 5006;
    const TYPE_CODE_5009 = 5009;
    const TYPE_CODE_5010 = 5010;
    const TYPE_CODE_5011 = 5011;
    const TYPE_CODE_5012 = 5012;
    const TYPE_CODE_5013 = 5013;
    const TYPE_CODE_5014 = 5014;
    const TYPE_CODE_5015 = 5015;
    const TYPE_CODE_5016 = 5016;
    const TYPE_CODE_5017 = 5017;
    const TYPE_CODE_5018 = 5018;
    const TYPE_CODE_5019 = 5019;
    const TYPE_CODE_5020 = 5020;
    const TYPE_CODE_5021 = 5021;
    const TYPE_CODE_5022 = 5022;
    const TYPE_CODE_5023 = 5023;
    const TYPE_CODE_5024 = 5024;
    const TYPE_CODE_5025 = 5025;
    const TYPE_CODE_5026 = 5026;
    const TYPE_CODE_5027 = 5027;
    const TYPE_CODE_5028 = 5028;
    const TYPE_CODE_5029 = 5029;
    const TYPE_CODE_5030 = 5030;
    const TYPE_CODE_5031 = 5031;
    const TYPE_CODE_5032 = 5032;
    const TYPE_CODE_5033 = 5033;
    const TYPE_CODE_5035 = 5035;
    const TYPE_CODE_5036 = 5036;
    const TYPE_CODE_20001 = 20001;
    const CHARGE_TYPE_INCLUDED = 'included';
    const CHARGE_TYPE_EXCLUDED = 'excluded';
    const CHARGE_TYPE_CONDITIONAL = 'conditional';
    const CHARGE_FREQUENCY_CODE_1 = 1;
    const CHARGE_FREQUENCY_CODE_2 = 2;
    const CHARGE_FREQUENCY_CODE_7 = 7;
    const CHARGE_FREQUENCY_CODE_10 = 10;
    const CHARGE_FREQUENCY_CODE_12 = 12;
    const CHARGE_FREQUENCY_CODE_17 = 17;
    const CHARGE_FREQUENCY_CODE_19 = 19;
    const CHARGE_FREQUENCY_CODE_20 = 20;
    const CHARGE_FREQUENCY_CODE_21 = 21;
    const CHARGE_FREQUENCY_CODE_25 = 25;
    const CHARGE_FREQUENCY_CODE_31 = 31;
    const CHARGE_FREQUENCY_CODE_5000 = 5000;
    const CHARGE_FREQUENCY_CODE_5001 = 5001;
    const CHARGE_FREQUENCY_CODE_5002 = 5002;
    const CHARGE_FREQUENCY_CODE_5010 = 5010;
    const CHARGE_FREQUENCY_CODE_5011 = 5011;
    const CHARGE_FREQUENCY_CODE_5012 = 5012;
    const CHARGE_FREQUENCY_CODE_5013 = 5013;
    const CHARGE_FREQUENCY_CODE_5014 = 5014;
    const CHARGE_FREQUENCY_CODE_5015 = 5015;
    const CHARGE_FREQUENCY_CODE_5016 = 5016;
    const CHARGE_FREQUENCY_CODE_5017 = 5017;
    const CHARGE_FREQUENCY_CODE_90010 = 90010;
    const CHARGE_FREQUENCY_CODE_90011 = 90011;
    const CHARGE_FREQUENCY_CODE_90012 = 90012;
    const CHARGE_FREQUENCY_CODE_90013 = 90013;
    const CONDITION_LIST_BRINGS_PET = 'guest_brings_pet';
    const CONDITION_LIST_DOESNT_CLEAN_BEFORE_CHECKOUT = 'guest_doesnt_clean_before_checkout';
    const CONDITION_LIST_SMOKES = 'guest_smokes';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeCodeAllowableValues()
    {
        return [
            self::TYPE_CODE_2,
            self::TYPE_CODE_9,
            self::TYPE_CODE_11,
            self::TYPE_CODE_12,
            self::TYPE_CODE_14,
            self::TYPE_CODE_16,
            self::TYPE_CODE_27,
            self::TYPE_CODE_29,
            self::TYPE_CODE_31,
            self::TYPE_CODE_32,
            self::TYPE_CODE_33,
            self::TYPE_CODE_34,
            self::TYPE_CODE_37,
            self::TYPE_CODE_38,
            self::TYPE_CODE_40,
            self::TYPE_CODE_41,
            self::TYPE_CODE_42,
            self::TYPE_CODE_44,
            self::TYPE_CODE_45,
            self::TYPE_CODE_47,
            self::TYPE_CODE_51,
            self::TYPE_CODE_52,
            self::TYPE_CODE_53,
            self::TYPE_CODE_54,
            self::TYPE_CODE_55,
            self::TYPE_CODE_56,
            self::TYPE_CODE_5000,
            self::TYPE_CODE_5003,
            self::TYPE_CODE_5005,
            self::TYPE_CODE_5006,
            self::TYPE_CODE_5009,
            self::TYPE_CODE_5010,
            self::TYPE_CODE_5011,
            self::TYPE_CODE_5012,
            self::TYPE_CODE_5013,
            self::TYPE_CODE_5014,
            self::TYPE_CODE_5015,
            self::TYPE_CODE_5016,
            self::TYPE_CODE_5017,
            self::TYPE_CODE_5018,
            self::TYPE_CODE_5019,
            self::TYPE_CODE_5020,
            self::TYPE_CODE_5021,
            self::TYPE_CODE_5022,
            self::TYPE_CODE_5023,
            self::TYPE_CODE_5024,
            self::TYPE_CODE_5025,
            self::TYPE_CODE_5026,
            self::TYPE_CODE_5027,
            self::TYPE_CODE_5028,
            self::TYPE_CODE_5029,
            self::TYPE_CODE_5030,
            self::TYPE_CODE_5031,
            self::TYPE_CODE_5032,
            self::TYPE_CODE_5033,
            self::TYPE_CODE_5035,
            self::TYPE_CODE_5036,
            self::TYPE_CODE_20001,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeTypeAllowableValues()
    {
        return [
            self::CHARGE_TYPE_INCLUDED,
            self::CHARGE_TYPE_EXCLUDED,
            self::CHARGE_TYPE_CONDITIONAL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChargeFrequencyCodeAllowableValues()
    {
        return [
            self::CHARGE_FREQUENCY_CODE_1,
            self::CHARGE_FREQUENCY_CODE_2,
            self::CHARGE_FREQUENCY_CODE_7,
            self::CHARGE_FREQUENCY_CODE_10,
            self::CHARGE_FREQUENCY_CODE_12,
            self::CHARGE_FREQUENCY_CODE_17,
            self::CHARGE_FREQUENCY_CODE_19,
            self::CHARGE_FREQUENCY_CODE_20,
            self::CHARGE_FREQUENCY_CODE_21,
            self::CHARGE_FREQUENCY_CODE_25,
            self::CHARGE_FREQUENCY_CODE_31,
            self::CHARGE_FREQUENCY_CODE_5000,
            self::CHARGE_FREQUENCY_CODE_5001,
            self::CHARGE_FREQUENCY_CODE_5002,
            self::CHARGE_FREQUENCY_CODE_5010,
            self::CHARGE_FREQUENCY_CODE_5011,
            self::CHARGE_FREQUENCY_CODE_5012,
            self::CHARGE_FREQUENCY_CODE_5013,
            self::CHARGE_FREQUENCY_CODE_5014,
            self::CHARGE_FREQUENCY_CODE_5015,
            self::CHARGE_FREQUENCY_CODE_5016,
            self::CHARGE_FREQUENCY_CODE_5017,
            self::CHARGE_FREQUENCY_CODE_90010,
            self::CHARGE_FREQUENCY_CODE_90011,
            self::CHARGE_FREQUENCY_CODE_90012,
            self::CHARGE_FREQUENCY_CODE_90013,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionListAllowableValues()
    {
        return [
            self::CONDITION_LIST_BRINGS_PET,
            self::CONDITION_LIST_DOESNT_CLEAN_BEFORE_CHECKOUT,
            self::CONDITION_LIST_SMOKES,
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
        $this->container['type_code'] = $data['type_code'] ?? null;
        $this->container['percent'] = $data['percent'] ?? null;
        $this->container['charge_type'] = $data['charge_type'] ?? null;
        $this->container['charge_frequency_code'] = $data['charge_frequency_code'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['condition_list'] = $data['condition_list'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type_code'] === null) {
            $invalidProperties[] = "'type_code' can't be null";
        }
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!is_null($this->container['type_code']) && !in_array($this->container['type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type_code', must be one of '%s'",
                $this->container['type_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['charge_type'] === null) {
            $invalidProperties[] = "'charge_type' can't be null";
        }
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!is_null($this->container['charge_type']) && !in_array($this->container['charge_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'charge_type', must be one of '%s'",
                $this->container['charge_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['charge_frequency_code'] === null) {
            $invalidProperties[] = "'charge_frequency_code' can't be null";
        }
        $allowedValues = $this->getChargeFrequencyCodeAllowableValues();
        if (!is_null($this->container['charge_frequency_code']) && !in_array($this->container['charge_frequency_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'charge_frequency_code', must be one of '%s'",
                $this->container['charge_frequency_code'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currency_code'] === null) {
            $invalidProperties[] = "'currency_code' can't be null";
        }
        if ($this->container['condition_list'] === null) {
            $invalidProperties[] = "'condition_list' can't be null";
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
     * Gets type_code
     *
     * @return float
     */
    public function getTypeCode()
    {
        return $this->container['type_code'];
    }

    /**
     * Sets type_code
     *
     * @param float $type_code The code that represents the type of fee.<p>See also <a href=\"#feetype-codes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setTypeCode($type_code)
    {
        $allowedValues = $this->getTypeCodeAllowableValues();
        if (!in_array($type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type_code', must be one of '%s'",
                    $type_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_code'] = $type_code;

        return $this;
    }

    /**
     * Gets percent
     *
     * @return float|null
     */
    public function getPercent()
    {
        return $this->container['percent'];
    }

    /**
     * Sets percent
     *
     * @param float|null $percent The charged percentage if applicable.
     *
     * @return self
     */
    public function setPercent($percent)
    {
        $this->container['percent'] = $percent;

        return $this;
    }

    /**
     * Gets charge_type
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->container['charge_type'];
    }

    /**
     * Sets charge_type
     *
     * @param string $charge_type The type of charge.
     *
     * @return self
     */
    public function setChargeType($charge_type)
    {
        $allowedValues = $this->getChargeTypeAllowableValues();
        if (!in_array($charge_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'charge_type', must be one of '%s'",
                    $charge_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_type'] = $charge_type;

        return $this;
    }

    /**
     * Gets charge_frequency_code
     *
     * @return float
     */
    public function getChargeFrequencyCode()
    {
        return $this->container['charge_frequency_code'];
    }

    /**
     * Sets charge_frequency_code
     *
     * @param float $charge_frequency_code The code that represents the frequency of charge.<p>See also <a href=\"#chargetype-codes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setChargeFrequencyCode($charge_frequency_code)
    {
        $allowedValues = $this->getChargeFrequencyCodeAllowableValues();
        if (!in_array($charge_frequency_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'charge_frequency_code', must be one of '%s'",
                    $charge_frequency_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['charge_frequency_code'] = $charge_frequency_code;

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
     * @param string $currency_code The currency code of the currency in that the charge is applied.<p>See also <a href=\"#currencycodes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets condition_list
     *
     * @return string[]
     */
    public function getConditionList()
    {
        return $this->container['condition_list'];
    }

    /**
     * Sets condition_list
     *
     * @param string[] $condition_list A list of conditions for the tax. Is empty if <code>chargeType</code> is not <code>conditional</code>.
     *
     * @return self
     */
    public function setConditionList($condition_list)
    {
        $allowedValues = $this->getConditionListAllowableValues();
        if (array_diff($condition_list, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition_list', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition_list'] = $condition_list;

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


