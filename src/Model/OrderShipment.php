<?php
/**
 * OrderShipment
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

class OrderShipment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'order_id' => 'int',
        'customer_id' => 'int',
        'order_address_id' => 'int',
        'date_created' => 'string',
        'tracking_number' => 'string',
        'shipping_method' => 'string',
        'shipping_provider' => 'string',
        'tracking_carrier' => 'string',
        'comments' => 'string',
        'billing_address' => '\BigCommerce\Api\Model\OrderBillingAddress',
        'shipping_address' => '\BigCommerce\Api\Model\ShipmentShippingAddress',
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
        'id' => 'id',
        'order_id' => 'order_id',
        'customer_id' => 'customer_id',
        'order_address_id' => 'order_address_id',
        'date_created' => 'date_created',
        'tracking_number' => 'tracking_number',
        'shipping_method' => 'shipping_method',
        'shipping_provider' => 'shipping_provider',
        'tracking_carrier' => 'tracking_carrier',
        'comments' => 'comments',
        'billing_address' => 'billing_address',
        'shipping_address' => 'shipping_address',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'customer_id' => 'setCustomerId',
        'order_address_id' => 'setOrderAddressId',
        'date_created' => 'setDateCreated',
        'tracking_number' => 'setTrackingNumber',
        'shipping_method' => 'setShippingMethod',
        'shipping_provider' => 'setShippingProvider',
        'tracking_carrier' => 'setTrackingCarrier',
        'comments' => 'setComments',
        'billing_address' => 'setBillingAddress',
        'shipping_address' => 'setShippingAddress',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'customer_id' => 'getCustomerId',
        'order_address_id' => 'getOrderAddressId',
        'date_created' => 'getDateCreated',
        'tracking_number' => 'getTrackingNumber',
        'shipping_method' => 'getShippingMethod',
        'shipping_provider' => 'getShippingProvider',
        'tracking_carrier' => 'getTrackingCarrier',
        'comments' => 'getComments',
        'billing_address' => 'getBillingAddress',
        'shipping_address' => 'getShippingAddress',
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
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['order_id'] = array_key_exists('order_id', $data) ? $data['order_id'] : null;
        $this->container['customer_id'] = array_key_exists('customer_id', $data) ? $data['customer_id'] : null;
        $this->container['order_address_id'] = array_key_exists('order_address_id', $data) ? $data['order_address_id'] : null;
        $this->container['date_created'] = array_key_exists('date_created', $data) ? $data['date_created'] : null;
        $this->container['tracking_number'] = array_key_exists('tracking_number', $data) ? $data['tracking_number'] : null;
        $this->container['shipping_method'] = array_key_exists('shipping_method', $data) ? $data['shipping_method'] : null;
        $this->container['shipping_provider'] = array_key_exists('shipping_provider', $data) ? $data['shipping_provider'] : null;
        $this->container['tracking_carrier'] = array_key_exists('tracking_carrier', $data) ? $data['tracking_carrier'] : null;
        $this->container['comments'] = array_key_exists('comments', $data) ? $data['comments'] : null;
        $this->container['billing_address'] = array_key_exists('billing_address', $data) ? $data['billing_address'] : null;
        $this->container['shipping_address'] = array_key_exists('shipping_address', $data) ? $data['shipping_address'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Shipment ID.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets order_id
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param int $order_id ID of the order associated with this shipment.
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets customer_id
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param int $customer_id ID of this order’s customer.
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
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
     * Gets date_created
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param string $date_created Creation date for the shipment.
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

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
     * Gets billing_address
     * @return \BigCommerce\Api\Model\OrderBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     * @param \BigCommerce\Api\Model\OrderBillingAddress $billing_address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_address
     * @return \BigCommerce\Api\Model\ShipmentShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     * @param \BigCommerce\Api\Model\ShipmentShippingAddress $shipping_address
     * @return $this
     */
    public function setShippingAddress($shipping_address)
    {
        $this->container['shipping_address'] = $shipping_address;

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


