<?php
/**
 * V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInner
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
 * V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInner Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_property_facilityInfo_guestRoomList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_active' => 'bool',
        'room_id' => 'string',
        'name' => 'string',
        'type_name' => 'string',
        'description_text' => 'string',
        'image_list' => 'string[]',
        'room_type_code' => 'string',
        'is_non_smoking' => 'bool',
        'room_type_name' => 'string',
        'amenity_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner[]',
        'max_occupancy' => 'string',
        'message_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner[]',
        'media_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner[]',
        'max_adult_occupancy' => 'string',
        'max_child_occupancy' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_active' => null,
        'room_id' => null,
        'name' => null,
        'type_name' => null,
        'description_text' => null,
        'image_list' => null,
        'room_type_code' => null,
        'is_non_smoking' => null,
        'room_type_name' => null,
        'amenity_list' => null,
        'max_occupancy' => null,
        'message_list' => null,
        'media_list' => null,
        'max_adult_occupancy' => null,
        'max_child_occupancy' => null
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
        'is_active' => 'isActive',
        'room_id' => 'roomId',
        'name' => 'name',
        'type_name' => 'typeName',
        'description_text' => 'descriptionText',
        'image_list' => 'imageList',
        'room_type_code' => 'roomTypeCode',
        'is_non_smoking' => 'isNonSmoking',
        'room_type_name' => 'roomTypeName',
        'amenity_list' => 'amenityList',
        'max_occupancy' => 'maxOccupancy',
        'message_list' => 'messageList',
        'media_list' => 'mediaList',
        'max_adult_occupancy' => 'maxAdultOccupancy',
        'max_child_occupancy' => 'maxChildOccupancy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_active' => 'setIsActive',
        'room_id' => 'setRoomId',
        'name' => 'setName',
        'type_name' => 'setTypeName',
        'description_text' => 'setDescriptionText',
        'image_list' => 'setImageList',
        'room_type_code' => 'setRoomTypeCode',
        'is_non_smoking' => 'setIsNonSmoking',
        'room_type_name' => 'setRoomTypeName',
        'amenity_list' => 'setAmenityList',
        'max_occupancy' => 'setMaxOccupancy',
        'message_list' => 'setMessageList',
        'media_list' => 'setMediaList',
        'max_adult_occupancy' => 'setMaxAdultOccupancy',
        'max_child_occupancy' => 'setMaxChildOccupancy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_active' => 'getIsActive',
        'room_id' => 'getRoomId',
        'name' => 'getName',
        'type_name' => 'getTypeName',
        'description_text' => 'getDescriptionText',
        'image_list' => 'getImageList',
        'room_type_code' => 'getRoomTypeCode',
        'is_non_smoking' => 'getIsNonSmoking',
        'room_type_name' => 'getRoomTypeName',
        'amenity_list' => 'getAmenityList',
        'max_occupancy' => 'getMaxOccupancy',
        'message_list' => 'getMessageList',
        'media_list' => 'getMediaList',
        'max_adult_occupancy' => 'getMaxAdultOccupancy',
        'max_child_occupancy' => 'getMaxChildOccupancy'
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
        $this->container['is_active'] = $data['is_active'] ?? null;
        $this->container['room_id'] = $data['room_id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['type_name'] = $data['type_name'] ?? null;
        $this->container['description_text'] = $data['description_text'] ?? null;
        $this->container['image_list'] = $data['image_list'] ?? null;
        $this->container['room_type_code'] = $data['room_type_code'] ?? null;
        $this->container['is_non_smoking'] = $data['is_non_smoking'] ?? null;
        $this->container['room_type_name'] = $data['room_type_name'] ?? null;
        $this->container['amenity_list'] = $data['amenity_list'] ?? null;
        $this->container['max_occupancy'] = $data['max_occupancy'] ?? null;
        $this->container['message_list'] = $data['message_list'] ?? null;
        $this->container['media_list'] = $data['media_list'] ?? null;
        $this->container['max_adult_occupancy'] = $data['max_adult_occupancy'] ?? null;
        $this->container['max_child_occupancy'] = $data['max_child_occupancy'] ?? null;
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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets room_id
     *
     * @return string|null
     */
    public function getRoomId()
    {
        return $this->container['room_id'];
    }

    /**
     * Sets room_id
     *
     * @param string|null $room_id room_id
     *
     * @return self
     */
    public function setRoomId($room_id)
    {
        $this->container['room_id'] = $room_id;

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
     * Gets type_name
     *
     * @return string|null
     */
    public function getTypeName()
    {
        return $this->container['type_name'];
    }

    /**
     * Sets type_name
     *
     * @param string|null $type_name type_name
     *
     * @return self
     */
    public function setTypeName($type_name)
    {
        $this->container['type_name'] = $type_name;

        return $this;
    }

    /**
     * Gets description_text
     *
     * @return string|null
     */
    public function getDescriptionText()
    {
        return $this->container['description_text'];
    }

    /**
     * Sets description_text
     *
     * @param string|null $description_text description_text
     *
     * @return self
     */
    public function setDescriptionText($description_text)
    {
        $this->container['description_text'] = $description_text;

        return $this;
    }

    /**
     * Gets image_list
     *
     * @return string[]|null
     */
    public function getImageList()
    {
        return $this->container['image_list'];
    }

    /**
     * Sets image_list
     *
     * @param string[]|null $image_list image_list
     *
     * @return self
     */
    public function setImageList($image_list)
    {
        $this->container['image_list'] = $image_list;

        return $this;
    }

    /**
     * Gets room_type_code
     *
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->container['room_type_code'];
    }

    /**
     * Sets room_type_code
     *
     * @param string|null $room_type_code room_type_code
     *
     * @return self
     */
    public function setRoomTypeCode($room_type_code)
    {
        $this->container['room_type_code'] = $room_type_code;

        return $this;
    }

    /**
     * Gets is_non_smoking
     *
     * @return bool|null
     */
    public function getIsNonSmoking()
    {
        return $this->container['is_non_smoking'];
    }

    /**
     * Sets is_non_smoking
     *
     * @param bool|null $is_non_smoking is_non_smoking
     *
     * @return self
     */
    public function setIsNonSmoking($is_non_smoking)
    {
        $this->container['is_non_smoking'] = $is_non_smoking;

        return $this;
    }

    /**
     * Gets room_type_name
     *
     * @return string|null
     */
    public function getRoomTypeName()
    {
        return $this->container['room_type_name'];
    }

    /**
     * Sets room_type_name
     *
     * @param string|null $room_type_name room_type_name
     *
     * @return self
     */
    public function setRoomTypeName($room_type_name)
    {
        $this->container['room_type_name'] = $room_type_name;

        return $this;
    }

    /**
     * Gets amenity_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner[]|null
     */
    public function getAmenityList()
    {
        return $this->container['amenity_list'];
    }

    /**
     * Sets amenity_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerAmenityListInner[]|null $amenity_list amenity_list
     *
     * @return self
     */
    public function setAmenityList($amenity_list)
    {
        $this->container['amenity_list'] = $amenity_list;

        return $this;
    }

    /**
     * Gets max_occupancy
     *
     * @return string|null
     */
    public function getMaxOccupancy()
    {
        return $this->container['max_occupancy'];
    }

    /**
     * Sets max_occupancy
     *
     * @param string|null $max_occupancy max_occupancy
     *
     * @return self
     */
    public function setMaxOccupancy($max_occupancy)
    {
        $this->container['max_occupancy'] = $max_occupancy;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner[]|null
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMessageListInner[]|null $message_list message_list
     *
     * @return self
     */
    public function setMessageList($message_list)
    {
        $this->container['message_list'] = $message_list;

        return $this;
    }

    /**
     * Gets media_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner[]|null
     */
    public function getMediaList()
    {
        return $this->container['media_list'];
    }

    /**
     * Sets media_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner[]|null $media_list media_list
     *
     * @return self
     */
    public function setMediaList($media_list)
    {
        $this->container['media_list'] = $media_list;

        return $this;
    }

    /**
     * Gets max_adult_occupancy
     *
     * @return string|null
     */
    public function getMaxAdultOccupancy()
    {
        return $this->container['max_adult_occupancy'];
    }

    /**
     * Sets max_adult_occupancy
     *
     * @param string|null $max_adult_occupancy max_adult_occupancy
     *
     * @return self
     */
    public function setMaxAdultOccupancy($max_adult_occupancy)
    {
        $this->container['max_adult_occupancy'] = $max_adult_occupancy;

        return $this;
    }

    /**
     * Gets max_child_occupancy
     *
     * @return string|null
     */
    public function getMaxChildOccupancy()
    {
        return $this->container['max_child_occupancy'];
    }

    /**
     * Sets max_child_occupancy
     *
     * @param string|null $max_child_occupancy max_child_occupancy
     *
     * @return self
     */
    public function setMaxChildOccupancy($max_child_occupancy)
    {
        $this->container['max_child_occupancy'] = $max_child_occupancy;

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


