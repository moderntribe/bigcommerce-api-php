<?php
/**
 * OrderShipmentRequest
 *
 * @package  BigCommerce\Api
 */

/**
 * Orders APIs
 *
 * OpenAPI spec version: 
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

class OrderShipmentRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_address_id' => 'int',
        'tracking_number' => 'string',
        'shipping_method' => 'string',
        'shipping_provider' => 'string',
        'tracking_carrier' => 'string',
        'comments' => 'string',
        'items' => '\BigCommerce\Api\Model\ShipmentItem[]'
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
        'order_address_id' => 'order_address_id',
        'tracking_number' => 'tracking_number',
        'shipping_method' => 'shipping_method',
        'shipping_provider' => 'shipping_provider',
        'tracking_carrier' => 'tracking_carrier',
        'comments' => 'comments',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'order_address_id' => 'setOrderAddressId',
        'tracking_number' => 'setTrackingNumber',
        'shipping_method' => 'setShippingMethod',
        'shipping_provider' => 'setShippingProvider',
        'tracking_carrier' => 'setTrackingCarrier',
        'comments' => 'setComments',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'order_address_id' => 'getOrderAddressId',
        'tracking_number' => 'getTrackingNumber',
        'shipping_method' => 'getShippingMethod',
        'shipping_provider' => 'getShippingProvider',
        'tracking_carrier' => 'getTrackingCarrier',
        'comments' => 'getComments',
        'items' => 'getItems'
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
        $this->container['order_address_id'] = array_key_exists('order_address_id', $data) ? $data['order_address_id'] : null;
        $this->container['tracking_number'] = array_key_exists('tracking_number', $data) ? $data['tracking_number'] : null;
        $this->container['shipping_method'] = array_key_exists('shipping_method', $data) ? $data['shipping_method'] : null;
        $this->container['shipping_provider'] = array_key_exists('shipping_provider', $data) ? $data['shipping_provider'] : null;
        $this->container['tracking_carrier'] = array_key_exists('tracking_carrier', $data) ? $data['tracking_carrier'] : null;
        $this->container['comments'] = array_key_exists('comments', $data) ? $data['comments'] : null;
        $this->container['items'] = array_key_exists('items', $data) ? $data['items'] : null;
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
        return true;
    }


    /**
     * Gets order_address_id
     * @return int
     */
    public function getOrderAddressId()
    {
        return $this->container['order_address_id'];
    }

    /**
     * Sets order_address_id
     * @param int $order_address_id ID of the associated order address.
     * @return $this
     */
    public function setOrderAddressId($order_address_id)
    {
        $this->container['order_address_id'] = $order_address_id;

        return $this;
    }

    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     * @param string $tracking_number Tracking number of the shipment.
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets shipping_method
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     * @param string $shipping_method Extra detail to describe the shipment, with values like: Standard, My Custom Shipping Method Name, etc. Can also be used for live quotes from some shipping providers.
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_provider
     * @return string
     */
    public function getShippingProvider()
    {
        return $this->container['shipping_provider'];
    }

    /**
     * Sets shipping_provider
     * @param string $shipping_provider Enum of the BigCommerce shipping-carrier integration/module. (Note: This property should be included in a POST request to create a shipment object. If it is omitted from the request, the property’s value will default to custom, and no tracking link will be generated in the email. To avoid this behavior, you can pass the property as an empty string.)
     * @return $this
     */
    public function setShippingProvider($shipping_provider)
    {
        $this->container['shipping_provider'] = $shipping_provider;

        return $this;
    }

    /**
     * Gets tracking_carrier
     * @return string
     */
    public function getTrackingCarrier()
    {
        return $this->container['tracking_carrier'];
    }

    /**
     * Sets tracking_carrier
     * @param string $tracking_carrier Optional, but if you include it, its value must refer/map to the same carrier service as the `shipping_provider` value.
     * @return $this
     */
    public function setTrackingCarrier($tracking_carrier)
    {
        $this->container['tracking_carrier'] = $tracking_carrier;

        return $this;
    }

    /**
     * Gets comments
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     * @param string $comments Comments the shipper wishes to add.
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets items
     * @return \BigCommerce\Api\Model\ShipmentItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \BigCommerce\Api\Model\ShipmentItem[] $items The items in the shipment.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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

