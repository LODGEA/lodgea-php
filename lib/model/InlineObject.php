<?php
/**
 * InlineObject
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
 * InlineObject Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search_text' => 'string',
        'currency_code' => 'string',
        'language_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search_text' => null,
        'currency_code' => null,
        'language_code' => null
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
        'search_text' => 'searchText',
        'currency_code' => 'currencyCode',
        'language_code' => 'languageCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_text' => 'setSearchText',
        'currency_code' => 'setCurrencyCode',
        'language_code' => 'setLanguageCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_text' => 'getSearchText',
        'currency_code' => 'getCurrencyCode',
        'language_code' => 'getLanguageCode'
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

    const CURRENCY_CODE_AED = 'AED';
    const CURRENCY_CODE_ARS = 'ARS';
    const CURRENCY_CODE_AUD = 'AUD';
    const CURRENCY_CODE_AZN = 'AZN';
    const CURRENCY_CODE_BGN = 'BGN';
    const CURRENCY_CODE_BHD = 'BHD';
    const CURRENCY_CODE_BRL = 'BRL';
    const CURRENCY_CODE_CAD = 'CAD';
    const CURRENCY_CODE_CHF = 'CHF';
    const CURRENCY_CODE_CLP = 'CLP';
    const CURRENCY_CODE_CNY = 'CNY';
    const CURRENCY_CODE_COP = 'COP';
    const CURRENCY_CODE_CZK = 'CZK';
    const CURRENCY_CODE_DKK = 'DKK';
    const CURRENCY_CODE_EGP = 'EGP';
    const CURRENCY_CODE_EUR = 'EUR';
    const CURRENCY_CODE_FJD = 'FJD';
    const CURRENCY_CODE_GBP = 'GBP';
    const CURRENCY_CODE_GEL = 'GEL';
    const CURRENCY_CODE_HKD = 'HKD';
    const CURRENCY_CODE_HUF = 'HUF';
    const CURRENCY_CODE_IDR = 'IDR';
    const CURRENCY_CODE_ILS = 'ILS';
    const CURRENCY_CODE_INR = 'INR';
    const CURRENCY_CODE_JOD = 'JOD';
    const CURRENCY_CODE_JPY = 'JPY';
    const CURRENCY_CODE_KRW = 'KRW';
    const CURRENCY_CODE_KWD = 'KWD';
    const CURRENCY_CODE_KZT = 'KZT';
    const CURRENCY_CODE_MDL = 'MDL';
    const CURRENCY_CODE_MXN = 'MXN';
    const CURRENCY_CODE_MYR = 'MYR';
    const CURRENCY_CODE_NAD = 'NAD';
    const CURRENCY_CODE_NOK = 'NOK';
    const CURRENCY_CODE_NZD = 'NZD';
    const CURRENCY_CODE_OMR = 'OMR';
    const CURRENCY_CODE_PLN = 'PLN';
    const CURRENCY_CODE_QAR = 'QAR';
    const CURRENCY_CODE_RON = 'RON';
    const CURRENCY_CODE_RUB = 'RUB';
    const CURRENCY_CODE_SAR = 'SAR';
    const CURRENCY_CODE_SEK = 'SEK';
    const CURRENCY_CODE_SGD = 'SGD';
    const CURRENCY_CODE_THB = 'THB';
    const CURRENCY_CODE__TRY = 'TRY';
    const CURRENCY_CODE_TWD = 'TWD';
    const CURRENCY_CODE_UAH = 'UAH';
    const CURRENCY_CODE_USD = 'USD';
    const CURRENCY_CODE_XOF = 'XOF';
    const CURRENCY_CODE_ZAR = 'ZAR';
    const LANGUAGE_CODE_AF = 'af';
    const LANGUAGE_CODE_AR = 'ar';
    const LANGUAGE_CODE_BG = 'bg';
    const LANGUAGE_CODE_CA = 'ca';
    const LANGUAGE_CODE_CS = 'cs';
    const LANGUAGE_CODE_DA = 'da';
    const LANGUAGE_CODE_DE = 'de';
    const LANGUAGE_CODE_EL = 'el';
    const LANGUAGE_CODE_EN = 'en';
    const LANGUAGE_CODE_ES = 'es';
    const LANGUAGE_CODE_ET = 'et';
    const LANGUAGE_CODE_FI = 'fi';
    const LANGUAGE_CODE_FR = 'fr';
    const LANGUAGE_CODE_HE = 'he';
    const LANGUAGE_CODE_HI = 'hi';
    const LANGUAGE_CODE_HR = 'hr';
    const LANGUAGE_CODE_HU = 'hu';
    const LANGUAGE_CODE_ID = 'id';
    const LANGUAGE_CODE_IS = 'is';
    const LANGUAGE_CODE_IT = 'it';
    const LANGUAGE_CODE_JA = 'ja';
    const LANGUAGE_CODE_KO = 'ko';
    const LANGUAGE_CODE_LT = 'lt';
    const LANGUAGE_CODE_LV = 'lv';
    const LANGUAGE_CODE_NL = 'nl';
    const LANGUAGE_CODE_NO = 'no';
    const LANGUAGE_CODE_PL = 'pl';
    const LANGUAGE_CODE_PT = 'pt';
    const LANGUAGE_CODE_RO = 'ro';
    const LANGUAGE_CODE_RU = 'ru';
    const LANGUAGE_CODE_SK = 'sk';
    const LANGUAGE_CODE_SL = 'sl';
    const LANGUAGE_CODE_SR = 'sr';
    const LANGUAGE_CODE_SV = 'sv';
    const LANGUAGE_CODE_TH = 'th';
    const LANGUAGE_CODE_TR = 'tr';
    const LANGUAGE_CODE_VI = 'vi';
    const LANGUAGE_CODE_ZH = 'zh';

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageCodeAllowableValues()
    {
        return [
            self::LANGUAGE_CODE_AF,
            self::LANGUAGE_CODE_AR,
            self::LANGUAGE_CODE_BG,
            self::LANGUAGE_CODE_CA,
            self::LANGUAGE_CODE_CS,
            self::LANGUAGE_CODE_DA,
            self::LANGUAGE_CODE_DE,
            self::LANGUAGE_CODE_EL,
            self::LANGUAGE_CODE_EN,
            self::LANGUAGE_CODE_ES,
            self::LANGUAGE_CODE_ET,
            self::LANGUAGE_CODE_FI,
            self::LANGUAGE_CODE_FR,
            self::LANGUAGE_CODE_HE,
            self::LANGUAGE_CODE_HI,
            self::LANGUAGE_CODE_HR,
            self::LANGUAGE_CODE_HU,
            self::LANGUAGE_CODE_ID,
            self::LANGUAGE_CODE_IS,
            self::LANGUAGE_CODE_IT,
            self::LANGUAGE_CODE_JA,
            self::LANGUAGE_CODE_KO,
            self::LANGUAGE_CODE_LT,
            self::LANGUAGE_CODE_LV,
            self::LANGUAGE_CODE_NL,
            self::LANGUAGE_CODE_NO,
            self::LANGUAGE_CODE_PL,
            self::LANGUAGE_CODE_PT,
            self::LANGUAGE_CODE_RO,
            self::LANGUAGE_CODE_RU,
            self::LANGUAGE_CODE_SK,
            self::LANGUAGE_CODE_SL,
            self::LANGUAGE_CODE_SR,
            self::LANGUAGE_CODE_SV,
            self::LANGUAGE_CODE_TH,
            self::LANGUAGE_CODE_TR,
            self::LANGUAGE_CODE_VI,
            self::LANGUAGE_CODE_ZH,
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
        $this->container['search_text'] = $data['search_text'] ?? null;
        $this->container['currency_code'] = $data['currency_code'] ?? null;
        $this->container['language_code'] = $data['language_code'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['search_text'] === null) {
            $invalidProperties[] = "'search_text' can't be null";
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

        if ($this->container['language_code'] === null) {
            $invalidProperties[] = "'language_code' can't be null";
        }
        $allowedValues = $this->getLanguageCodeAllowableValues();
        if (!is_null($this->container['language_code']) && !in_array($this->container['language_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language_code', must be one of '%s'",
                $this->container['language_code'],
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
     * Gets search_text
     *
     * @return string
     */
    public function getSearchText()
    {
        return $this->container['search_text'];
    }

    /**
     * Sets search_text
     *
     * @param string $search_text A search text in free form to search locations by.
     *
     * @return self
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

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
     * @param string $currency_code The currency code of the currency in which the lowest price for each found location should be returned.<p>See also <a href=\"#currencycodes\">in the appendix</a>.</p>
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
     * Gets language_code
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     *
     * @param string $language_code The language code of the language in which the descriptive texts for each found location should be returned.<p>Please note that beside the general restrictions listed below only languages configured during system setup for your respective tenant are allowed.</p><p>See also <a href=\"#isolanguage-codes\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setLanguageCode($language_code)
    {
        $allowedValues = $this->getLanguageCodeAllowableValues();
        if (!in_array($language_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language_code', must be one of '%s'",
                    $language_code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language_code'] = $language_code;

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


