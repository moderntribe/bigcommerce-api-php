<?php
/**
 * OrderShipmentPost2
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Orders V2
 *
 * Manage order coupons, messages, products, shipping addresses, statuses, taxes, shipments, and shipping address quotes.  - [Authentication](#authentication) - [Order](#order)  ## Authentication  Authenticate requests by including an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` and `client_id` in the request headers.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/{{ENDPOINT}} Content-Type: application/json X-Auth-Client: {{CLIENT_ID}} X-Auth-Token: {{ACCESS_TOKEN}} ```  ### OAuth Scopes  |  **UI Name** | **Permission** | **Parameter** | | --- | --- | --- | |  Orders | modify | `store_v2_orders` | |  Orders | read-only | `store_v2_orders_read_only` |   ## Order  The Order object contains a record of the purchase agreement between a shopper and a merchant. To learn more about creating orders, see [Orders API Guide](/api-docs/orders/orders-api-overview).  ### Currency Fields  * `currency_code` - the display currency used to present prices to the shopper on the storefront. * `currency_exchange_rate`: the exchange rate between the store's default currency and the display currency; when the order is created by means of the V2 endpoints, this value is always 1 (only in the storefront this value can be different to 1).  The following additional fields are returned on orders when Multi-Currency is enabled on the store:  * `store_default_currency_code` - the store's default currency * `store_default_to_transactional_exchange_rate` - the exchange rate between the store's default currency and the transactional currency used in the order.  **Example:**  ```json {   ...   \"currency_id\": 4,   \"currency_code\": \"EUR\",   \"currency_exchange_rate\": 1,   \"default_currency_id\": 4,   \"default_currency_code\": \"EUR\",   \"store_default_currency_code: \"USD\",   \"store_default_to_transactional_exchange_rate\": \"100.0000000000\"   ... } ```
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.21
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\OrdersV2\Model;

use \ArrayAccess;
use \BigCommerce\OrdersV2\ObjectSerializer;

/**
 * OrderShipmentPost2 Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderShipmentPost2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderShipment_Post_2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_address_id' => 'int',
'tracking_number' => 'string',
'shipping_method' => 'string',
'shipping_provider' => 'string',
'tracking_carrier' => 'string',
'comments' => 'string',
'items' => '\BigCommerce\OrdersV2\Model\OrdersorderIdshipmentsItems[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_address_id' => null,
'tracking_number' => null,
'shipping_method' => null,
'shipping_provider' => null,
'tracking_carrier' => null,
'comments' => null,
'items' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_address_id' => 'order_address_id',
'tracking_number' => 'tracking_number',
'shipping_method' => 'shipping_method',
'shipping_provider' => 'shipping_provider',
'tracking_carrier' => 'tracking_carrier',
'comments' => 'comments',
'items' => 'items'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_address_id' => 'setOrderAddressId',
'tracking_number' => 'setTrackingNumber',
'shipping_method' => 'setShippingMethod',
'shipping_provider' => 'setShippingProvider',
'tracking_carrier' => 'setTrackingCarrier',
'comments' => 'setComments',
'items' => 'setItems'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_address_id' => 'getOrderAddressId',
'tracking_number' => 'getTrackingNumber',
'shipping_method' => 'getShippingMethod',
'shipping_provider' => 'getShippingProvider',
'tracking_carrier' => 'getTrackingCarrier',
'comments' => 'getComments',
'items' => 'getItems'    ];

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
        return self::$swaggerModelName;
    }

    const SHIPPING_PROVIDER_AUSPOST = 'auspost';
const SHIPPING_PROVIDER_CANADAPOST = 'canadapost';
const SHIPPING_PROVIDER_ENDICIA = 'endicia';
const SHIPPING_PROVIDER_USPS = 'usps';
const SHIPPING_PROVIDER_FEDEX = 'fedex';
const SHIPPING_PROVIDER_UPS = 'ups';
const SHIPPING_PROVIDER_UPSREADY = 'upsready';
const SHIPPING_PROVIDER_UPSONLINE = 'upsonline';
const SHIPPING_PROVIDER_SHIPPERHQ = 'shipperhq';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingProviderAllowableValues()
    {
        return [
            self::SHIPPING_PROVIDER_AUSPOST,
self::SHIPPING_PROVIDER_CANADAPOST,
self::SHIPPING_PROVIDER_ENDICIA,
self::SHIPPING_PROVIDER_USPS,
self::SHIPPING_PROVIDER_FEDEX,
self::SHIPPING_PROVIDER_UPS,
self::SHIPPING_PROVIDER_UPSREADY,
self::SHIPPING_PROVIDER_UPSONLINE,
self::SHIPPING_PROVIDER_SHIPPERHQ,        ];
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
        $this->container['order_address_id'] = isset($data['order_address_id']) ? $data['order_address_id'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['shipping_provider'] = isset($data['shipping_provider']) ? $data['shipping_provider'] : null;
        $this->container['tracking_carrier'] = isset($data['tracking_carrier']) ? $data['tracking_carrier'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getShippingProviderAllowableValues();
        if (!is_null($this->container['shipping_provider']) && !in_array($this->container['shipping_provider'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'shipping_provider', must be one of '%s'",
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
     * Gets order_address_id
     *
     * @return int
     */
    public function getOrderAddressId()
    {
        return $this->container['order_address_id'];
    }

    /**
     * Sets order_address_id
     *
     * @param int $order_address_id ID of the desired `shipping_address` associated with the shipment.
     *
     * @return $this
     */
    public function setOrderAddressId($order_address_id)
    {
        $this->container['order_address_id'] = $order_address_id;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number Tracking number of the shipment.
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string $shipping_method Additional information to describe the method of shipment (ex. Standard, Ship by Weight, Custom Shipment). Can be used for live quotes from certain shipping providers. If different from `shipping_provider`, `shipping_method` should correspond to `tracking_carrier`.
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_provider
     *
     * @return string
     */
    public function getShippingProvider()
    {
        return $this->container['shipping_provider'];
    }

    /**
     * Sets shipping_provider
     *
     * @param string $shipping_provider Enum of the BigCommerce shipping-carrier integration/module.
     *
     * @return $this
     */
    public function setShippingProvider($shipping_provider)
    {
        $allowedValues = $this->getShippingProviderAllowableValues();
        if (!is_null($shipping_provider) && !in_array($shipping_provider, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shipping_provider', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipping_provider'] = $shipping_provider;

        return $this;
    }

    /**
     * Gets tracking_carrier
     *
     * @return string
     */
    public function getTrackingCarrier()
    {
        return $this->container['tracking_carrier'];
    }

    /**
     * Sets tracking_carrier
     *
     * @param string $tracking_carrier Tracking carrier for the shipment. Acceptable values include an empty string (`\"\"`) or one of the valid tracking-carrier values viewable [here](https://docs.google.com/spreadsheets/d/1w9c_aECSCGyf-oOrvGeUniDl-ARGKemfZl0qSsav8D4/pubhtml?gid=0&single=true) and downloadable as a .CSV file [here](https://docs.google.com/spreadsheets/d/1mTueEynfcEmwsU2y2Jd2MX-8GKwNZrmlRMBcIElg9aY/pub?gid=0&single=true&output=csv).
     *
     * @return $this
     */
    public function setTrackingCarrier($tracking_carrier)
    {
        $this->container['tracking_carrier'] = $tracking_carrier;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Comments the shipper wishes to add.
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \BigCommerce\OrdersV2\Model\OrdersorderIdshipmentsItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \BigCommerce\OrdersV2\Model\OrdersorderIdshipmentsItems[] $items The items in the shipment. This object has the following members, all integer: order_product_id (required), quantity (required), product_id (read-only). A sample items value might be: [ {\"order_product_id\":16,\"product_id\": 0,\"quantity\":2} ]
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
