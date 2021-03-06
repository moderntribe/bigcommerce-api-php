<?php
/**
 * OrderProductWrite
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
 * OrderProductWrite Class Doc Comment
 *
 * @category Class
 * @description Product from catalog; &#x60;product_options&#x60; are required if adding a product with variants.
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderProductWrite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderProduct_Write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
'product_options' => '\BigCommerce\OrdersV2\Model\OrderProductWriteProductOptions[]',
'quantity' => 'float',
'price_inc_tax' => 'float',
'price_ex_tax' => 'float',
'upc' => 'string',
'variant_id' => 'int',
'wrapping_name' => 'string',
'wrapping_message' => 'string',
'wrapping_cost_ex_tax' => 'float',
'wrapping_cost_inc_tax' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
'product_options' => null,
'quantity' => null,
'price_inc_tax' => null,
'price_ex_tax' => null,
'upc' => null,
'variant_id' => null,
'wrapping_name' => null,
'wrapping_message' => null,
'wrapping_cost_ex_tax' => null,
'wrapping_cost_inc_tax' => null    ];

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
        'product_id' => 'product_id',
'product_options' => 'product_options',
'quantity' => 'quantity',
'price_inc_tax' => 'price_inc_tax',
'price_ex_tax' => 'price_ex_tax',
'upc' => 'upc',
'variant_id' => 'variant_id',
'wrapping_name' => 'wrapping_name',
'wrapping_message' => 'wrapping_message',
'wrapping_cost_ex_tax' => 'wrapping_cost_ex_tax',
'wrapping_cost_inc_tax' => 'wrapping_cost_inc_tax'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
'product_options' => 'setProductOptions',
'quantity' => 'setQuantity',
'price_inc_tax' => 'setPriceIncTax',
'price_ex_tax' => 'setPriceExTax',
'upc' => 'setUpc',
'variant_id' => 'setVariantId',
'wrapping_name' => 'setWrappingName',
'wrapping_message' => 'setWrappingMessage',
'wrapping_cost_ex_tax' => 'setWrappingCostExTax',
'wrapping_cost_inc_tax' => 'setWrappingCostIncTax'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
'product_options' => 'getProductOptions',
'quantity' => 'getQuantity',
'price_inc_tax' => 'getPriceIncTax',
'price_ex_tax' => 'getPriceExTax',
'upc' => 'getUpc',
'variant_id' => 'getVariantId',
'wrapping_name' => 'getWrappingName',
'wrapping_message' => 'getWrappingMessage',
'wrapping_cost_ex_tax' => 'getWrappingCostExTax',
'wrapping_cost_inc_tax' => 'getWrappingCostIncTax'    ];

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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_options'] = isset($data['product_options']) ? $data['product_options'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['price_inc_tax'] = isset($data['price_inc_tax']) ? $data['price_inc_tax'] : null;
        $this->container['price_ex_tax'] = isset($data['price_ex_tax']) ? $data['price_ex_tax'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['wrapping_name'] = isset($data['wrapping_name']) ? $data['wrapping_name'] : null;
        $this->container['wrapping_message'] = isset($data['wrapping_message']) ? $data['wrapping_message'] : null;
        $this->container['wrapping_cost_ex_tax'] = isset($data['wrapping_cost_ex_tax']) ? $data['wrapping_cost_ex_tax'] : null;
        $this->container['wrapping_cost_inc_tax'] = isset($data['wrapping_cost_inc_tax']) ? $data['wrapping_cost_inc_tax'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if ($this->container['product_options'] === null) {
            $invalidProperties[] = "'product_options' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_options
     *
     * @return \BigCommerce\OrdersV2\Model\OrderProductWriteProductOptions[]
     */
    public function getProductOptions()
    {
        return $this->container['product_options'];
    }

    /**
     * Sets product_options
     *
     * @param \BigCommerce\OrdersV2\Model\OrderProductWriteProductOptions[] $product_options product_options
     *
     * @return $this
     */
    public function setProductOptions($product_options)
    {
        $this->container['product_options'] = $product_options;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param float $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price_inc_tax
     *
     * @return float
     */
    public function getPriceIncTax()
    {
        return $this->container['price_inc_tax'];
    }

    /**
     * Sets price_inc_tax
     *
     * @param float $price_inc_tax price_inc_tax
     *
     * @return $this
     */
    public function setPriceIncTax($price_inc_tax)
    {
        $this->container['price_inc_tax'] = $price_inc_tax;

        return $this;
    }

    /**
     * Gets price_ex_tax
     *
     * @return float
     */
    public function getPriceExTax()
    {
        return $this->container['price_ex_tax'];
    }

    /**
     * Sets price_ex_tax
     *
     * @param float $price_ex_tax price_ex_tax
     *
     * @return $this
     */
    public function setPriceExTax($price_ex_tax)
    {
        $this->container['price_ex_tax'] = $price_ex_tax;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string $upc upc
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets variant_id
     *
     * @return int
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     *
     * @param int $variant_id Products `variant_id`. PUT or POST. This field is not available for custom products.
     *
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets wrapping_name
     *
     * @return string
     */
    public function getWrappingName()
    {
        return $this->container['wrapping_name'];
    }

    /**
     * Sets wrapping_name
     *
     * @param string $wrapping_name wrapping_name
     *
     * @return $this
     */
    public function setWrappingName($wrapping_name)
    {
        $this->container['wrapping_name'] = $wrapping_name;

        return $this;
    }

    /**
     * Gets wrapping_message
     *
     * @return string
     */
    public function getWrappingMessage()
    {
        return $this->container['wrapping_message'];
    }

    /**
     * Sets wrapping_message
     *
     * @param string $wrapping_message wrapping_message
     *
     * @return $this
     */
    public function setWrappingMessage($wrapping_message)
    {
        $this->container['wrapping_message'] = $wrapping_message;

        return $this;
    }

    /**
     * Gets wrapping_cost_ex_tax
     *
     * @return float
     */
    public function getWrappingCostExTax()
    {
        return $this->container['wrapping_cost_ex_tax'];
    }

    /**
     * Sets wrapping_cost_ex_tax
     *
     * @param float $wrapping_cost_ex_tax wrapping_cost_ex_tax
     *
     * @return $this
     */
    public function setWrappingCostExTax($wrapping_cost_ex_tax)
    {
        $this->container['wrapping_cost_ex_tax'] = $wrapping_cost_ex_tax;

        return $this;
    }

    /**
     * Gets wrapping_cost_inc_tax
     *
     * @return float
     */
    public function getWrappingCostIncTax()
    {
        return $this->container['wrapping_cost_inc_tax'];
    }

    /**
     * Sets wrapping_cost_inc_tax
     *
     * @param float $wrapping_cost_inc_tax wrapping_cost_inc_tax
     *
     * @return $this
     */
    public function setWrappingCostIncTax($wrapping_cost_inc_tax)
    {
        $this->container['wrapping_cost_inc_tax'] = $wrapping_cost_inc_tax;

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
