<?php
/**
 * PropertiesPropertyIdGet200ResponsePropertyPropertyInfo
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
 * PropertiesPropertyIdGet200ResponsePropertyPropertyInfo Class Doc Comment
 *
 * @category Class
 * @description General information regarding the property.
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PropertiesPropertyIdGet200ResponsePropertyPropertyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_properties__propertyId__get_200_response_property_propertyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'unit_count' => 'float',
        'message_list' => '\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoMessageListInner[]',
        'category_list' => 'float[]',
        'language_list' => 'string[]',
        'location' => '\com.lodgea\com.lodgea.model\AvailablePropertiesInner1GeoLocation',
        'accepted_payment_list' => '\com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoAcceptedPaymentListInner[]'
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

    public const CATEGORY_LIST_1 = 1;
    public const CATEGORY_LIST_2 = 2;
    public const CATEGORY_LIST_3 = 3;
    public const CATEGORY_LIST_4 = 4;
    public const CATEGORY_LIST_5 = 5;
    public const CATEGORY_LIST_6 = 6;
    public const CATEGORY_LIST_7 = 7;
    public const CATEGORY_LIST_8 = 8;
    public const CATEGORY_LIST_9 = 9;
    public const CATEGORY_LIST_10 = 10;
    public const CATEGORY_LIST_11 = 11;
    public const CATEGORY_LIST_12 = 12;
    public const CATEGORY_LIST_13 = 13;
    public const CATEGORY_LIST_14 = 14;
    public const CATEGORY_LIST_15 = 15;
    public const CATEGORY_LIST_16 = 16;
    public const CATEGORY_LIST_17 = 17;
    public const CATEGORY_LIST_18 = 18;
    public const CATEGORY_LIST_19 = 19;
    public const CATEGORY_LIST_20 = 20;
    public const CATEGORY_LIST_21 = 21;
    public const CATEGORY_LIST_22 = 22;
    public const CATEGORY_LIST_23 = 23;
    public const CATEGORY_LIST_24 = 24;
    public const CATEGORY_LIST_25 = 25;
    public const CATEGORY_LIST_26 = 26;
    public const CATEGORY_LIST_27 = 27;
    public const CATEGORY_LIST_28 = 28;
    public const CATEGORY_LIST_29 = 29;
    public const CATEGORY_LIST_30 = 30;
    public const CATEGORY_LIST_31 = 31;
    public const CATEGORY_LIST_32 = 32;
    public const CATEGORY_LIST_33 = 33;
    public const CATEGORY_LIST_34 = 34;
    public const CATEGORY_LIST_35 = 35;
    public const CATEGORY_LIST_36 = 36;
    public const CATEGORY_LIST_37 = 37;
    public const CATEGORY_LIST_38 = 38;
    public const CATEGORY_LIST_39 = 39;
    public const CATEGORY_LIST_40 = 40;
    public const CATEGORY_LIST_41 = 41;
    public const CATEGORY_LIST_42 = 42;
    public const CATEGORY_LIST_43 = 43;
    public const CATEGORY_LIST_44 = 44;
    public const CATEGORY_LIST_45 = 45;
    public const CATEGORY_LIST_46 = 46;
    public const CATEGORY_LIST_47 = 47;
    public const CATEGORY_LIST_48 = 48;
    public const CATEGORY_LIST_49 = 49;
    public const CATEGORY_LIST_50 = 50;
    public const CATEGORY_LIST_51 = 51;
    public const CATEGORY_LIST_52 = 52;
    public const CATEGORY_LIST_53 = 53;
    public const CATEGORY_LIST_54 = 54;
    public const CATEGORY_LIST_55 = 55;
    public const CATEGORY_LIST_56 = 56;
    public const CATEGORY_LIST_57 = 57;
    public const CATEGORY_LIST_58 = 58;
    public const CATEGORY_LIST_59 = 59;
    public const CATEGORY_LIST_60 = 60;
    public const CATEGORY_LIST_61 = 61;
    public const CATEGORY_LIST_62 = 62;
    public const CATEGORY_LIST_5000 = 5000;
    public const CATEGORY_LIST_5001 = 5001;
    public const CATEGORY_LIST_5002 = 5002;
    public const CATEGORY_LIST_5003 = 5003;
    public const CATEGORY_LIST_5004 = 5004;
    public const CATEGORY_LIST_5005 = 5005;
    public const CATEGORY_LIST_5006 = 5006;
    public const CATEGORY_LIST_5007 = 5007;
    public const CATEGORY_LIST_5008 = 5008;
    public const CATEGORY_LIST_5009 = 5009;
    public const LANGUAGE_LIST_AF = 'af';
    public const LANGUAGE_LIST_AR = 'ar';
    public const LANGUAGE_LIST_AZ = 'az';
    public const LANGUAGE_LIST_BE = 'be';
    public const LANGUAGE_LIST_BG = 'bg';
    public const LANGUAGE_LIST_CA = 'ca';
    public const LANGUAGE_LIST_CS = 'cs';
    public const LANGUAGE_LIST_DA = 'da';
    public const LANGUAGE_LIST_DE = 'de';
    public const LANGUAGE_LIST_EL = 'el';
    public const LANGUAGE_LIST_EN = 'en';
    public const LANGUAGE_LIST_EN_GB = 'en-gb';
    public const LANGUAGE_LIST_EN_US = 'en-us';
    public const LANGUAGE_LIST_ES = 'es';
    public const LANGUAGE_LIST_ES_AR = 'es-ar';
    public const LANGUAGE_LIST_ET = 'et';
    public const LANGUAGE_LIST_FR = 'fr';
    public const LANGUAGE_LIST_FI = 'fi';
    public const LANGUAGE_LIST_HE = 'he';
    public const LANGUAGE_LIST_HI = 'hi';
    public const LANGUAGE_LIST_HR = 'hr';
    public const LANGUAGE_LIST_HU = 'hu';
    public const LANGUAGE_LIST_ID = 'id';
    public const LANGUAGE_LIST_IS = 'is';
    public const LANGUAGE_LIST_IT = 'it';
    public const LANGUAGE_LIST_JA = 'ja';
    public const LANGUAGE_LIST_KM = 'km';
    public const LANGUAGE_LIST_KO = 'ko';
    public const LANGUAGE_LIST_LO = 'lo';
    public const LANGUAGE_LIST_LT = 'lt';
    public const LANGUAGE_LIST_LV = 'lv';
    public const LANGUAGE_LIST_MS = 'ms';
    public const LANGUAGE_LIST_NL = 'nl';
    public const LANGUAGE_LIST_NO = 'no';
    public const LANGUAGE_LIST_PL = 'pl';
    public const LANGUAGE_LIST_PT = 'pt';
    public const LANGUAGE_LIST_PT_BR = 'pt-br';
    public const LANGUAGE_LIST_PT_PT = 'pt-pt';
    public const LANGUAGE_LIST_RO = 'ro';
    public const LANGUAGE_LIST_RU = 'ru';
    public const LANGUAGE_LIST_SK = 'sk';
    public const LANGUAGE_LIST_SL = 'sl';
    public const LANGUAGE_LIST_SR = 'sr';
    public const LANGUAGE_LIST_SV = 'sv';
    public const LANGUAGE_LIST_TL = 'tl';
    public const LANGUAGE_LIST_TH = 'th';
    public const LANGUAGE_LIST_TR = 'tr';
    public const LANGUAGE_LIST_UK = 'uk';
    public const LANGUAGE_LIST_VI = 'vi';
    public const LANGUAGE_LIST_XA = 'xa';
    public const LANGUAGE_LIST_XB = 'xb';
    public const LANGUAGE_LIST_XS = 'xs';
    public const LANGUAGE_LIST_XT = 'xt';
    public const LANGUAGE_LIST_XU = 'xu';
    public const LANGUAGE_LIST_ZH = 'zh';
    public const LANGUAGE_LIST_ZH_CN = 'zh-cn';
    public const LANGUAGE_LIST_ZH_TW = 'zh-tw';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryListAllowableValues()
    {
        return [
            self::CATEGORY_LIST_1,
            self::CATEGORY_LIST_2,
            self::CATEGORY_LIST_3,
            self::CATEGORY_LIST_4,
            self::CATEGORY_LIST_5,
            self::CATEGORY_LIST_6,
            self::CATEGORY_LIST_7,
            self::CATEGORY_LIST_8,
            self::CATEGORY_LIST_9,
            self::CATEGORY_LIST_10,
            self::CATEGORY_LIST_11,
            self::CATEGORY_LIST_12,
            self::CATEGORY_LIST_13,
            self::CATEGORY_LIST_14,
            self::CATEGORY_LIST_15,
            self::CATEGORY_LIST_16,
            self::CATEGORY_LIST_17,
            self::CATEGORY_LIST_18,
            self::CATEGORY_LIST_19,
            self::CATEGORY_LIST_20,
            self::CATEGORY_LIST_21,
            self::CATEGORY_LIST_22,
            self::CATEGORY_LIST_23,
            self::CATEGORY_LIST_24,
            self::CATEGORY_LIST_25,
            self::CATEGORY_LIST_26,
            self::CATEGORY_LIST_27,
            self::CATEGORY_LIST_28,
            self::CATEGORY_LIST_29,
            self::CATEGORY_LIST_30,
            self::CATEGORY_LIST_31,
            self::CATEGORY_LIST_32,
            self::CATEGORY_LIST_33,
            self::CATEGORY_LIST_34,
            self::CATEGORY_LIST_35,
            self::CATEGORY_LIST_36,
            self::CATEGORY_LIST_37,
            self::CATEGORY_LIST_38,
            self::CATEGORY_LIST_39,
            self::CATEGORY_LIST_40,
            self::CATEGORY_LIST_41,
            self::CATEGORY_LIST_42,
            self::CATEGORY_LIST_43,
            self::CATEGORY_LIST_44,
            self::CATEGORY_LIST_45,
            self::CATEGORY_LIST_46,
            self::CATEGORY_LIST_47,
            self::CATEGORY_LIST_48,
            self::CATEGORY_LIST_49,
            self::CATEGORY_LIST_50,
            self::CATEGORY_LIST_51,
            self::CATEGORY_LIST_52,
            self::CATEGORY_LIST_53,
            self::CATEGORY_LIST_54,
            self::CATEGORY_LIST_55,
            self::CATEGORY_LIST_56,
            self::CATEGORY_LIST_57,
            self::CATEGORY_LIST_58,
            self::CATEGORY_LIST_59,
            self::CATEGORY_LIST_60,
            self::CATEGORY_LIST_61,
            self::CATEGORY_LIST_62,
            self::CATEGORY_LIST_5000,
            self::CATEGORY_LIST_5001,
            self::CATEGORY_LIST_5002,
            self::CATEGORY_LIST_5003,
            self::CATEGORY_LIST_5004,
            self::CATEGORY_LIST_5005,
            self::CATEGORY_LIST_5006,
            self::CATEGORY_LIST_5007,
            self::CATEGORY_LIST_5008,
            self::CATEGORY_LIST_5009,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageListAllowableValues()
    {
        return [
            self::LANGUAGE_LIST_AF,
            self::LANGUAGE_LIST_AR,
            self::LANGUAGE_LIST_AZ,
            self::LANGUAGE_LIST_BE,
            self::LANGUAGE_LIST_BG,
            self::LANGUAGE_LIST_CA,
            self::LANGUAGE_LIST_CS,
            self::LANGUAGE_LIST_DA,
            self::LANGUAGE_LIST_DE,
            self::LANGUAGE_LIST_EL,
            self::LANGUAGE_LIST_EN,
            self::LANGUAGE_LIST_EN_GB,
            self::LANGUAGE_LIST_EN_US,
            self::LANGUAGE_LIST_ES,
            self::LANGUAGE_LIST_ES_AR,
            self::LANGUAGE_LIST_ET,
            self::LANGUAGE_LIST_FR,
            self::LANGUAGE_LIST_FI,
            self::LANGUAGE_LIST_HE,
            self::LANGUAGE_LIST_HI,
            self::LANGUAGE_LIST_HR,
            self::LANGUAGE_LIST_HU,
            self::LANGUAGE_LIST_ID,
            self::LANGUAGE_LIST_IS,
            self::LANGUAGE_LIST_IT,
            self::LANGUAGE_LIST_JA,
            self::LANGUAGE_LIST_KM,
            self::LANGUAGE_LIST_KO,
            self::LANGUAGE_LIST_LO,
            self::LANGUAGE_LIST_LT,
            self::LANGUAGE_LIST_LV,
            self::LANGUAGE_LIST_MS,
            self::LANGUAGE_LIST_NL,
            self::LANGUAGE_LIST_NO,
            self::LANGUAGE_LIST_PL,
            self::LANGUAGE_LIST_PT,
            self::LANGUAGE_LIST_PT_BR,
            self::LANGUAGE_LIST_PT_PT,
            self::LANGUAGE_LIST_RO,
            self::LANGUAGE_LIST_RU,
            self::LANGUAGE_LIST_SK,
            self::LANGUAGE_LIST_SL,
            self::LANGUAGE_LIST_SR,
            self::LANGUAGE_LIST_SV,
            self::LANGUAGE_LIST_TL,
            self::LANGUAGE_LIST_TH,
            self::LANGUAGE_LIST_TR,
            self::LANGUAGE_LIST_UK,
            self::LANGUAGE_LIST_VI,
            self::LANGUAGE_LIST_XA,
            self::LANGUAGE_LIST_XB,
            self::LANGUAGE_LIST_XS,
            self::LANGUAGE_LIST_XT,
            self::LANGUAGE_LIST_XU,
            self::LANGUAGE_LIST_ZH,
            self::LANGUAGE_LIST_ZH_CN,
            self::LANGUAGE_LIST_ZH_TW,
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

        if ($this->container['message_list'] === null) {
            $invalidProperties[] = "'message_list' can't be null";
        }
        if ($this->container['category_list'] === null) {
            $invalidProperties[] = "'category_list' can't be null";
        }
        if ($this->container['language_list'] === null) {
            $invalidProperties[] = "'language_list' can't be null";
        }
        if ($this->container['accepted_payment_list'] === null) {
            $invalidProperties[] = "'accepted_payment_list' can't be null";
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
     * @param float|null $unit_count The amount of units the property has.
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
     * @return \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoMessageListInner[]
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoMessageListInner[] $message_list Contains a descriptive message for this property in all supported languages.
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
     * @return float[]
     */
    public function getCategoryList()
    {
        return $this->container['category_list'];
    }

    /**
     * Sets category_list
     *
     * @param float[] $category_list A list of code of the property class types that apply to the property.
     *
     * @return self
     */
    public function setCategoryList($category_list)
    {
        $allowedValues = $this->getCategoryListAllowableValues();
        if (array_diff($category_list, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category_list', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category_list'] = $category_list;

        return $this;
    }

    /**
     * Gets language_list
     *
     * @return string[]
     */
    public function getLanguageList()
    {
        return $this->container['language_list'];
    }

    /**
     * Sets language_list
     *
     * @param string[] $language_list The codes of languages the staff of this property can speak. Please note that these codes partially differ from the two character ISO language codes widely used throughout the API as they partially include country specific language code.<p>See also <a href=\"#languagecountry-code\">in the appendix</a>.</p>
     *
     * @return self
     */
    public function setLanguageList($language_list)
    {
        $allowedValues = $this->getLanguageListAllowableValues();
        if (array_diff($language_list, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language_list', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language_list'] = $language_list;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \com.lodgea\com.lodgea.model\AvailablePropertiesInner1GeoLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \com.lodgea\com.lodgea.model\AvailablePropertiesInner1GeoLocation|null $location location
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
     * @return \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoAcceptedPaymentListInner[]
     */
    public function getAcceptedPaymentList()
    {
        return $this->container['accepted_payment_list'];
    }

    /**
     * Sets accepted_payment_list
     *
     * @param \com.lodgea\com.lodgea.model\PropertiesPropertyIdGet200ResponsePropertyPropertyInfoAcceptedPaymentListInner[] $accepted_payment_list A list of the accepted payment methods. Payment methods might subject to frequent change as payment providers come and go. You should always implement a way to handle new, unexpected payment methods.<p>See also <a href=\"#paymenttypes\">in the appendix</a>.</p>
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


