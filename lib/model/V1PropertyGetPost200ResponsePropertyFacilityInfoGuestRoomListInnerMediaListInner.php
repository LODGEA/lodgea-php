<?php
/**
 * V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner
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

namespace com.lodgea\com.lodgea.model;

use \ArrayAccess;
use \com.lodgea\ObjectSerializer;

/**
 * V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner Class Doc Comment
 *
 * @category Class
 * @package  com.lodgea
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_v1_property_get_post_200_response_property_facilityInfo_guestRoomList_inner_mediaList_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_main_image' => 'bool',
        'sort_order' => 'float',
        'url' => 'string',
        'tag_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerTagListInner[]',
        'moderation_label_list' => 'string[]',
        'detection_label_list' => 'string[]',
        'property_amenity_list' => 'string[]',
        'room_amenity_list' => '\com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerRoomAmenityListInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_main_image' => null,
        'sort_order' => null,
        'url' => null,
        'tag_list' => null,
        'moderation_label_list' => null,
        'detection_label_list' => null,
        'property_amenity_list' => null,
        'room_amenity_list' => null
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
        'is_main_image' => 'isMainImage',
        'sort_order' => 'sortOrder',
        'url' => 'url',
        'tag_list' => 'tagList',
        'moderation_label_list' => 'moderationLabelList',
        'detection_label_list' => 'detectionLabelList',
        'property_amenity_list' => 'propertyAmenityList',
        'room_amenity_list' => 'roomAmenityList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_main_image' => 'setIsMainImage',
        'sort_order' => 'setSortOrder',
        'url' => 'setUrl',
        'tag_list' => 'setTagList',
        'moderation_label_list' => 'setModerationLabelList',
        'detection_label_list' => 'setDetectionLabelList',
        'property_amenity_list' => 'setPropertyAmenityList',
        'room_amenity_list' => 'setRoomAmenityList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_main_image' => 'getIsMainImage',
        'sort_order' => 'getSortOrder',
        'url' => 'getUrl',
        'tag_list' => 'getTagList',
        'moderation_label_list' => 'getModerationLabelList',
        'detection_label_list' => 'getDetectionLabelList',
        'property_amenity_list' => 'getPropertyAmenityList',
        'room_amenity_list' => 'getRoomAmenityList'
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
        $this->container['is_main_image'] = $data['is_main_image'] ?? null;
        $this->container['sort_order'] = $data['sort_order'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['tag_list'] = $data['tag_list'] ?? null;
        $this->container['moderation_label_list'] = $data['moderation_label_list'] ?? null;
        $this->container['detection_label_list'] = $data['detection_label_list'] ?? null;
        $this->container['property_amenity_list'] = $data['property_amenity_list'] ?? null;
        $this->container['room_amenity_list'] = $data['room_amenity_list'] ?? null;
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
     * Gets is_main_image
     *
     * @return bool|null
     */
    public function getIsMainImage()
    {
        return $this->container['is_main_image'];
    }

    /**
     * Sets is_main_image
     *
     * @param bool|null $is_main_image is_main_image
     *
     * @return self
     */
    public function setIsMainImage($is_main_image)
    {
        $this->container['is_main_image'] = $is_main_image;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return float|null
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param float|null $sort_order sort_order
     *
     * @return self
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets tag_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerTagListInner[]|null
     */
    public function getTagList()
    {
        return $this->container['tag_list'];
    }

    /**
     * Sets tag_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerTagListInner[]|null $tag_list tag_list
     *
     * @return self
     */
    public function setTagList($tag_list)
    {
        $this->container['tag_list'] = $tag_list;

        return $this;
    }

    /**
     * Gets moderation_label_list
     *
     * @return string[]|null
     */
    public function getModerationLabelList()
    {
        return $this->container['moderation_label_list'];
    }

    /**
     * Sets moderation_label_list
     *
     * @param string[]|null $moderation_label_list moderation_label_list
     *
     * @return self
     */
    public function setModerationLabelList($moderation_label_list)
    {
        $this->container['moderation_label_list'] = $moderation_label_list;

        return $this;
    }

    /**
     * Gets detection_label_list
     *
     * @return string[]|null
     */
    public function getDetectionLabelList()
    {
        return $this->container['detection_label_list'];
    }

    /**
     * Sets detection_label_list
     *
     * @param string[]|null $detection_label_list detection_label_list
     *
     * @return self
     */
    public function setDetectionLabelList($detection_label_list)
    {
        $this->container['detection_label_list'] = $detection_label_list;

        return $this;
    }

    /**
     * Gets property_amenity_list
     *
     * @return string[]|null
     */
    public function getPropertyAmenityList()
    {
        return $this->container['property_amenity_list'];
    }

    /**
     * Sets property_amenity_list
     *
     * @param string[]|null $property_amenity_list property_amenity_list
     *
     * @return self
     */
    public function setPropertyAmenityList($property_amenity_list)
    {
        $this->container['property_amenity_list'] = $property_amenity_list;

        return $this;
    }

    /**
     * Gets room_amenity_list
     *
     * @return \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerRoomAmenityListInner[]|null
     */
    public function getRoomAmenityList()
    {
        return $this->container['room_amenity_list'];
    }

    /**
     * Sets room_amenity_list
     *
     * @param \com.lodgea\com.lodgea.model\V1PropertyGetPost200ResponsePropertyFacilityInfoGuestRoomListInnerMediaListInnerRoomAmenityListInner[]|null $room_amenity_list room_amenity_list
     *
     * @return self
     */
    public function setRoomAmenityList($room_amenity_list)
    {
        $this->container['room_amenity_list'] = $room_amenity_list;

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


