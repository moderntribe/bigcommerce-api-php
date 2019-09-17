<?php
/**
 * ProductVideo
 *
 * @package  BigCommerce\Api
 */

/**
 * BigCommerce API
 *
 * OpenAPI spec version: 3.0.0b
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\Model;

use \ArrayAccess;

class ProductVideo extends ProductVideoBase implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductVideo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'title' => 'string',
        'description' => 'string',
        'sort_order' => 'int',
        'type' => 'string',
        'id' => 'int',
        'video_id' => 'string',
        'product_id' => 'int',
        'length' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'description' => 'description',
        'sort_order' => 'sort_order',
        'type' => 'type',
        'id' => 'id',
        'video_id' => 'video_id',
        'product_id' => 'product_id',
        'length' => 'length'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'sort_order' => 'setSortOrder',
        'type' => 'setType',
        'id' => 'setId',
        'video_id' => 'setVideoId',
        'product_id' => 'setProductId',
        'length' => 'setLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'sort_order' => 'getSortOrder',
        'type' => 'getType',
        'id' => 'getId',
        'video_id' => 'getVideoId',
        'product_id' => 'getProductId',
        'length' => 'getLength'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['title'] = array_key_exists('title', $data) ? $data['title'] : null;
        $this->container['description'] = array_key_exists('description', $data) ? $data['description'] : null;
        $this->container['sort_order'] = array_key_exists('sort_order', $data) ? $data['sort_order'] : null;
        $this->container['type'] = array_key_exists('type', $data) ? $data['type'] : null;
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['video_id'] = array_key_exists('video_id', $data) ? $data['video_id'] : null;
        $this->container['product_id'] = array_key_exists('product_id', $data) ? $data['product_id'] : null;
        $this->container['length'] = array_key_exists('length', $data) ? $data['length'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (strlen($this->container['title']) > 255) {
            $invalid_properties[] = "invalid value for 'title', the character length must be smaller than or equal to 255.";
        }
        if (strlen($this->container['title']) < 0) {
            $invalid_properties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['sort_order'] > 2147483647) {
            $invalid_properties[] = "invalid value for 'sort_order', must be smaller than or equal to 2147483647.";
        }
        if ($this->container['sort_order'] < -2147483648) {
            $invalid_properties[] = "invalid value for 'sort_order', must be bigger than or equal to -2147483648.";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['title']) > 255) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        if ($this->container['sort_order'] > 2147483647) {
            return false;
        }
        if ($this->container['sort_order'] < -2147483648) {
            return false;
        }
        return true;
    }


    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title for the video. If left blank, this will be filled in according to data on a host site.
     * @return $this
     */
    public function setTitle($title)
    {
        if (strlen($title) > 255) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductVideo., must be smaller than or equal to 255.');
        }
        if (strlen($title) < 0) {
            throw new \InvalidArgumentException('invalid length for $title when calling ProductVideo., must be bigger than or equal to 0.');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The description for the video. If left blank, this will be filled in according to data on a host site.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets sort_order
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     * @param int $sort_order The order in which the video will be displayed on the product page. Higher integers give the video a lower priority. When updating, if the video is given a lower priority, all videos with a `sort_order` the same as or greater than the video's new `sort_order` value will have their `sort_order`s reordered.
     * @return $this
     */
    public function setSortOrder($sort_order)
    {

        if ($sort_order > 2147483647) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductVideo., must be smaller than or equal to 2147483647.');
        }
        if ($sort_order < -2147483648) {
            throw new \InvalidArgumentException('invalid value for $sort_order when calling ProductVideo., must be bigger than or equal to -2147483648.');
        }
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The video type (a short name of a host site).
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique numeric ID of the product video; increments sequentially.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets video_id
     * @return string
     */
    public function getVideoId()
    {
        return $this->container['video_id'];
    }

    /**
     * Sets video_id
     * @param string $video_id The ID of the video on a host site.
     * @return $this
     */
    public function setVideoId($video_id)
    {
        $this->container['video_id'] = $video_id;

        return $this;
    }

    /**
     * Gets product_id
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param int $product_id The unique numeric identifier for the product with which the image is associated.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets length
     * @return string
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     * @param string $length Length of the video. This will be filled in according to data on a host site.
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\ObjectSerializer::sanitizeForSerialization($this));
    }
}


