<?php
/**
 * OrderShared
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
 * OrderShared Class Doc Comment
 *
 * @category Class
 * @description Order object used for POST requests. Products and Billing address only required for POST operation.
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderShared implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'order_Shared';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => 'AllOforderSharedBillingAddress',
'subtotal_ex_tax' => 'string',
'subtotal_inc_tax' => 'string',
'base_shipping_cost' => 'string',
'shipping_cost_ex_tax' => 'string',
'shipping_cost_inc_tax' => 'string',
'base_handling_cost' => 'string',
'handling_cost_ex_tax' => 'string',
'handling_cost_inc_tax' => 'string',
'base_wrapping_cost' => 'string',
'wrapping_cost_ex_tax' => 'string',
'wrapping_cost_inc_tax' => 'string',
'total_ex_tax' => 'string',
'total_inc_tax' => 'string',
'items_total' => 'float',
'items_shipped' => 'float',
'payment_method' => 'string',
'payment_provider_id' => 'string',
'refunded_amount' => 'string',
'order_is_digital' => 'bool',
'ip_address' => 'string',
'geoip_country' => 'string',
'geoip_country_iso2' => 'string',
'staff_notes' => 'string',
'customer_message' => 'string',
'discount_amount' => 'string',
'is_deleted' => 'bool',
'ebay_order_id' => 'string',
'external_source' => 'string',
'external_id' => 'int',
'channel_id' => 'int',
'tax_provider_id' => 'string',
'date_created' => 'string',
'default_currency_code' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
'subtotal_ex_tax' => null,
'subtotal_inc_tax' => null,
'base_shipping_cost' => null,
'shipping_cost_ex_tax' => null,
'shipping_cost_inc_tax' => null,
'base_handling_cost' => null,
'handling_cost_ex_tax' => null,
'handling_cost_inc_tax' => null,
'base_wrapping_cost' => null,
'wrapping_cost_ex_tax' => null,
'wrapping_cost_inc_tax' => null,
'total_ex_tax' => null,
'total_inc_tax' => null,
'items_total' => null,
'items_shipped' => null,
'payment_method' => null,
'payment_provider_id' => null,
'refunded_amount' => null,
'order_is_digital' => null,
'ip_address' => null,
'geoip_country' => null,
'geoip_country_iso2' => null,
'staff_notes' => null,
'customer_message' => null,
'discount_amount' => null,
'is_deleted' => null,
'ebay_order_id' => null,
'external_source' => null,
'external_id' => null,
'channel_id' => null,
'tax_provider_id' => null,
'date_created' => null,
'default_currency_code' => null    ];

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
        'billing_address' => 'billing_address',
'subtotal_ex_tax' => 'subtotal_ex_tax',
'subtotal_inc_tax' => 'subtotal_inc_tax',
'base_shipping_cost' => 'base_shipping_cost',
'shipping_cost_ex_tax' => 'shipping_cost_ex_tax',
'shipping_cost_inc_tax' => 'shipping_cost_inc_tax',
'base_handling_cost' => 'base_handling_cost',
'handling_cost_ex_tax' => 'handling_cost_ex_tax',
'handling_cost_inc_tax' => 'handling_cost_inc_tax',
'base_wrapping_cost' => 'base_wrapping_cost',
'wrapping_cost_ex_tax' => 'wrapping_cost_ex_tax',
'wrapping_cost_inc_tax' => 'wrapping_cost_inc_tax',
'total_ex_tax' => 'total_ex_tax',
'total_inc_tax' => 'total_inc_tax',
'items_total' => 'items_total',
'items_shipped' => 'items_shipped',
'payment_method' => 'payment_method',
'payment_provider_id' => 'payment_provider_id',
'refunded_amount' => 'refunded_amount',
'order_is_digital' => 'order_is_digital',
'ip_address' => 'ip_address',
'geoip_country' => 'geoip_country',
'geoip_country_iso2' => 'geoip_country_iso2',
'staff_notes' => 'staff_notes',
'customer_message' => 'customer_message',
'discount_amount' => 'discount_amount',
'is_deleted' => 'is_deleted',
'ebay_order_id' => 'ebay_order_id',
'external_source' => 'external_source',
'external_id' => 'external_id',
'channel_id' => 'channel_id',
'tax_provider_id' => 'tax_provider_id',
'date_created' => 'date_created',
'default_currency_code' => 'default_currency_code'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
'subtotal_ex_tax' => 'setSubtotalExTax',
'subtotal_inc_tax' => 'setSubtotalIncTax',
'base_shipping_cost' => 'setBaseShippingCost',
'shipping_cost_ex_tax' => 'setShippingCostExTax',
'shipping_cost_inc_tax' => 'setShippingCostIncTax',
'base_handling_cost' => 'setBaseHandlingCost',
'handling_cost_ex_tax' => 'setHandlingCostExTax',
'handling_cost_inc_tax' => 'setHandlingCostIncTax',
'base_wrapping_cost' => 'setBaseWrappingCost',
'wrapping_cost_ex_tax' => 'setWrappingCostExTax',
'wrapping_cost_inc_tax' => 'setWrappingCostIncTax',
'total_ex_tax' => 'setTotalExTax',
'total_inc_tax' => 'setTotalIncTax',
'items_total' => 'setItemsTotal',
'items_shipped' => 'setItemsShipped',
'payment_method' => 'setPaymentMethod',
'payment_provider_id' => 'setPaymentProviderId',
'refunded_amount' => 'setRefundedAmount',
'order_is_digital' => 'setOrderIsDigital',
'ip_address' => 'setIpAddress',
'geoip_country' => 'setGeoipCountry',
'geoip_country_iso2' => 'setGeoipCountryIso2',
'staff_notes' => 'setStaffNotes',
'customer_message' => 'setCustomerMessage',
'discount_amount' => 'setDiscountAmount',
'is_deleted' => 'setIsDeleted',
'ebay_order_id' => 'setEbayOrderId',
'external_source' => 'setExternalSource',
'external_id' => 'setExternalId',
'channel_id' => 'setChannelId',
'tax_provider_id' => 'setTaxProviderId',
'date_created' => 'setDateCreated',
'default_currency_code' => 'setDefaultCurrencyCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
'subtotal_ex_tax' => 'getSubtotalExTax',
'subtotal_inc_tax' => 'getSubtotalIncTax',
'base_shipping_cost' => 'getBaseShippingCost',
'shipping_cost_ex_tax' => 'getShippingCostExTax',
'shipping_cost_inc_tax' => 'getShippingCostIncTax',
'base_handling_cost' => 'getBaseHandlingCost',
'handling_cost_ex_tax' => 'getHandlingCostExTax',
'handling_cost_inc_tax' => 'getHandlingCostIncTax',
'base_wrapping_cost' => 'getBaseWrappingCost',
'wrapping_cost_ex_tax' => 'getWrappingCostExTax',
'wrapping_cost_inc_tax' => 'getWrappingCostIncTax',
'total_ex_tax' => 'getTotalExTax',
'total_inc_tax' => 'getTotalIncTax',
'items_total' => 'getItemsTotal',
'items_shipped' => 'getItemsShipped',
'payment_method' => 'getPaymentMethod',
'payment_provider_id' => 'getPaymentProviderId',
'refunded_amount' => 'getRefundedAmount',
'order_is_digital' => 'getOrderIsDigital',
'ip_address' => 'getIpAddress',
'geoip_country' => 'getGeoipCountry',
'geoip_country_iso2' => 'getGeoipCountryIso2',
'staff_notes' => 'getStaffNotes',
'customer_message' => 'getCustomerMessage',
'discount_amount' => 'getDiscountAmount',
'is_deleted' => 'getIsDeleted',
'ebay_order_id' => 'getEbayOrderId',
'external_source' => 'getExternalSource',
'external_id' => 'getExternalId',
'channel_id' => 'getChannelId',
'tax_provider_id' => 'getTaxProviderId',
'date_created' => 'getDateCreated',
'default_currency_code' => 'getDefaultCurrencyCode'    ];

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

    const PAYMENT_METHOD_CREDIT_CARD = 'Credit Card';
const PAYMENT_METHOD_CASH = 'Cash';
const PAYMENT_METHOD_TEST_PAYMENT_GATEWAY = 'Test Payment Gateway';
const PAYMENT_METHOD_MANUAL = 'Manual';
const TAX_PROVIDER_ID_BASIC_TAX_PROVIDER = 'BasicTaxProvider';
const TAX_PROVIDER_ID_AVA_TAX_PROVIDER = 'AvaTaxProvider';
const TAX_PROVIDER_ID_EMPTY = '';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_CREDIT_CARD,
self::PAYMENT_METHOD_CASH,
self::PAYMENT_METHOD_TEST_PAYMENT_GATEWAY,
self::PAYMENT_METHOD_MANUAL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTaxProviderIdAllowableValues()
    {
        return [
            self::TAX_PROVIDER_ID_BASIC_TAX_PROVIDER,
self::TAX_PROVIDER_ID_AVA_TAX_PROVIDER,
self::TAX_PROVIDER_ID_EMPTY,        ];
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
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['subtotal_ex_tax'] = isset($data['subtotal_ex_tax']) ? $data['subtotal_ex_tax'] : null;
        $this->container['subtotal_inc_tax'] = isset($data['subtotal_inc_tax']) ? $data['subtotal_inc_tax'] : null;
        $this->container['base_shipping_cost'] = isset($data['base_shipping_cost']) ? $data['base_shipping_cost'] : null;
        $this->container['shipping_cost_ex_tax'] = isset($data['shipping_cost_ex_tax']) ? $data['shipping_cost_ex_tax'] : null;
        $this->container['shipping_cost_inc_tax'] = isset($data['shipping_cost_inc_tax']) ? $data['shipping_cost_inc_tax'] : null;
        $this->container['base_handling_cost'] = isset($data['base_handling_cost']) ? $data['base_handling_cost'] : null;
        $this->container['handling_cost_ex_tax'] = isset($data['handling_cost_ex_tax']) ? $data['handling_cost_ex_tax'] : null;
        $this->container['handling_cost_inc_tax'] = isset($data['handling_cost_inc_tax']) ? $data['handling_cost_inc_tax'] : null;
        $this->container['base_wrapping_cost'] = isset($data['base_wrapping_cost']) ? $data['base_wrapping_cost'] : null;
        $this->container['wrapping_cost_ex_tax'] = isset($data['wrapping_cost_ex_tax']) ? $data['wrapping_cost_ex_tax'] : null;
        $this->container['wrapping_cost_inc_tax'] = isset($data['wrapping_cost_inc_tax']) ? $data['wrapping_cost_inc_tax'] : null;
        $this->container['total_ex_tax'] = isset($data['total_ex_tax']) ? $data['total_ex_tax'] : null;
        $this->container['total_inc_tax'] = isset($data['total_inc_tax']) ? $data['total_inc_tax'] : null;
        $this->container['items_total'] = isset($data['items_total']) ? $data['items_total'] : null;
        $this->container['items_shipped'] = isset($data['items_shipped']) ? $data['items_shipped'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_provider_id'] = isset($data['payment_provider_id']) ? $data['payment_provider_id'] : null;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['order_is_digital'] = isset($data['order_is_digital']) ? $data['order_is_digital'] : null;
        $this->container['ip_address'] = isset($data['ip_address']) ? $data['ip_address'] : null;
        $this->container['geoip_country'] = isset($data['geoip_country']) ? $data['geoip_country'] : null;
        $this->container['geoip_country_iso2'] = isset($data['geoip_country_iso2']) ? $data['geoip_country_iso2'] : null;
        $this->container['staff_notes'] = isset($data['staff_notes']) ? $data['staff_notes'] : null;
        $this->container['customer_message'] = isset($data['customer_message']) ? $data['customer_message'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
        $this->container['ebay_order_id'] = isset($data['ebay_order_id']) ? $data['ebay_order_id'] : null;
        $this->container['external_source'] = isset($data['external_source']) ? $data['external_source'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['channel_id'] = isset($data['channel_id']) ? $data['channel_id'] : null;
        $this->container['tax_provider_id'] = isset($data['tax_provider_id']) ? $data['tax_provider_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['default_currency_code'] = isset($data['default_currency_code']) ? $data['default_currency_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTaxProviderIdAllowableValues();
        if (!is_null($this->container['tax_provider_id']) && !in_array($this->container['tax_provider_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tax_provider_id', must be one of '%s'",
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
     * Gets billing_address
     *
     * @return AllOforderSharedBillingAddress
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param AllOforderSharedBillingAddress $billing_address Required to create an order.
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets subtotal_ex_tax
     *
     * @return string
     */
    public function getSubtotalExTax()
    {
        return $this->container['subtotal_ex_tax'];
    }

    /**
     * Sets subtotal_ex_tax
     *
     * @param string $subtotal_ex_tax Override value for subtotal excluding tax. If specified, the field `subtotal_inc_tax` is also required. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setSubtotalExTax($subtotal_ex_tax)
    {
        $this->container['subtotal_ex_tax'] = $subtotal_ex_tax;

        return $this;
    }

    /**
     * Gets subtotal_inc_tax
     *
     * @return string
     */
    public function getSubtotalIncTax()
    {
        return $this->container['subtotal_inc_tax'];
    }

    /**
     * Sets subtotal_inc_tax
     *
     * @param string $subtotal_inc_tax Override value for subtotal including tax. If specified, the field `subtotal_ex_tax` is also required. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setSubtotalIncTax($subtotal_inc_tax)
    {
        $this->container['subtotal_inc_tax'] = $subtotal_inc_tax;

        return $this;
    }

    /**
     * Gets base_shipping_cost
     *
     * @return string
     */
    public function getBaseShippingCost()
    {
        return $this->container['base_shipping_cost'];
    }

    /**
     * Sets base_shipping_cost
     *
     * @param string $base_shipping_cost The value of the base shipping cost. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setBaseShippingCost($base_shipping_cost)
    {
        $this->container['base_shipping_cost'] = $base_shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_cost_ex_tax
     *
     * @return string
     */
    public function getShippingCostExTax()
    {
        return $this->container['shipping_cost_ex_tax'];
    }

    /**
     * Sets shipping_cost_ex_tax
     *
     * @param string $shipping_cost_ex_tax The value of shipping cost, excluding tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setShippingCostExTax($shipping_cost_ex_tax)
    {
        $this->container['shipping_cost_ex_tax'] = $shipping_cost_ex_tax;

        return $this;
    }

    /**
     * Gets shipping_cost_inc_tax
     *
     * @return string
     */
    public function getShippingCostIncTax()
    {
        return $this->container['shipping_cost_inc_tax'];
    }

    /**
     * Sets shipping_cost_inc_tax
     *
     * @param string $shipping_cost_inc_tax The value of shipping cost, including tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setShippingCostIncTax($shipping_cost_inc_tax)
    {
        $this->container['shipping_cost_inc_tax'] = $shipping_cost_inc_tax;

        return $this;
    }

    /**
     * Gets base_handling_cost
     *
     * @return string
     */
    public function getBaseHandlingCost()
    {
        return $this->container['base_handling_cost'];
    }

    /**
     * Sets base_handling_cost
     *
     * @param string $base_handling_cost The value of the base handling cost. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setBaseHandlingCost($base_handling_cost)
    {
        $this->container['base_handling_cost'] = $base_handling_cost;

        return $this;
    }

    /**
     * Gets handling_cost_ex_tax
     *
     * @return string
     */
    public function getHandlingCostExTax()
    {
        return $this->container['handling_cost_ex_tax'];
    }

    /**
     * Sets handling_cost_ex_tax
     *
     * @param string $handling_cost_ex_tax The value of the handling cost, excluding tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setHandlingCostExTax($handling_cost_ex_tax)
    {
        $this->container['handling_cost_ex_tax'] = $handling_cost_ex_tax;

        return $this;
    }

    /**
     * Gets handling_cost_inc_tax
     *
     * @return string
     */
    public function getHandlingCostIncTax()
    {
        return $this->container['handling_cost_inc_tax'];
    }

    /**
     * Sets handling_cost_inc_tax
     *
     * @param string $handling_cost_inc_tax The value of the handling cost, including tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setHandlingCostIncTax($handling_cost_inc_tax)
    {
        $this->container['handling_cost_inc_tax'] = $handling_cost_inc_tax;

        return $this;
    }

    /**
     * Gets base_wrapping_cost
     *
     * @return string
     */
    public function getBaseWrappingCost()
    {
        return $this->container['base_wrapping_cost'];
    }

    /**
     * Sets base_wrapping_cost
     *
     * @param string $base_wrapping_cost The value of the base wrapping cost. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setBaseWrappingCost($base_wrapping_cost)
    {
        $this->container['base_wrapping_cost'] = $base_wrapping_cost;

        return $this;
    }

    /**
     * Gets wrapping_cost_ex_tax
     *
     * @return string
     */
    public function getWrappingCostExTax()
    {
        return $this->container['wrapping_cost_ex_tax'];
    }

    /**
     * Sets wrapping_cost_ex_tax
     *
     * @param string $wrapping_cost_ex_tax The value of the wrapping cost, excluding tax. (Float, Float-As-String, Integer)
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
     * @return string
     */
    public function getWrappingCostIncTax()
    {
        return $this->container['wrapping_cost_inc_tax'];
    }

    /**
     * Sets wrapping_cost_inc_tax
     *
     * @param string $wrapping_cost_inc_tax The value of the wrapping cost, including tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setWrappingCostIncTax($wrapping_cost_inc_tax)
    {
        $this->container['wrapping_cost_inc_tax'] = $wrapping_cost_inc_tax;

        return $this;
    }

    /**
     * Gets total_ex_tax
     *
     * @return string
     */
    public function getTotalExTax()
    {
        return $this->container['total_ex_tax'];
    }

    /**
     * Sets total_ex_tax
     *
     * @param string $total_ex_tax Override value for the total, excluding tax. If specified, the field `total_inc_tax` is also required. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setTotalExTax($total_ex_tax)
    {
        $this->container['total_ex_tax'] = $total_ex_tax;

        return $this;
    }

    /**
     * Gets total_inc_tax
     *
     * @return string
     */
    public function getTotalIncTax()
    {
        return $this->container['total_inc_tax'];
    }

    /**
     * Sets total_inc_tax
     *
     * @param string $total_inc_tax Override value for the total, including tax. If specified, the field `total_ex_tax` is also required. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setTotalIncTax($total_inc_tax)
    {
        $this->container['total_inc_tax'] = $total_inc_tax;

        return $this;
    }

    /**
     * Gets items_total
     *
     * @return float
     */
    public function getItemsTotal()
    {
        return $this->container['items_total'];
    }

    /**
     * Sets items_total
     *
     * @param float $items_total The total number of items in the order.
     *
     * @return $this
     */
    public function setItemsTotal($items_total)
    {
        $this->container['items_total'] = $items_total;

        return $this;
    }

    /**
     * Gets items_shipped
     *
     * @return float
     */
    public function getItemsShipped()
    {
        return $this->container['items_shipped'];
    }

    /**
     * Sets items_shipped
     *
     * @param float $items_shipped The number of items that have been shipped.
     *
     * @return $this
     */
    public function setItemsShipped($items_shipped)
    {
        $this->container['items_shipped'] = $items_shipped;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method The payment method for this order. Can be one of the following: `Manual`, `Credit Card`, `cash`, `Test Payment Gateway`, etc.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_provider_id
     *
     * @return string
     */
    public function getPaymentProviderId()
    {
        return $this->container['payment_provider_id'];
    }

    /**
     * Sets payment_provider_id
     *
     * @param string $payment_provider_id The external Transaction ID/Payment ID within this order's payment provider (if a payment provider was used).
     *
     * @return $this
     */
    public function setPaymentProviderId($payment_provider_id)
    {
        $this->container['payment_provider_id'] = $payment_provider_id;

        return $this;
    }

    /**
     * Gets refunded_amount
     *
     * @return string
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     *
     * @param string $refunded_amount The amount refunded from this transaction. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets order_is_digital
     *
     * @return bool
     */
    public function getOrderIsDigital()
    {
        return $this->container['order_is_digital'];
    }

    /**
     * Sets order_is_digital
     *
     * @param bool $order_is_digital Whether this is an order for digital products.
     *
     * @return $this
     */
    public function setOrderIsDigital($order_is_digital)
    {
        $this->container['order_is_digital'] = $order_is_digital;

        return $this;
    }

    /**
     * Gets ip_address
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ip_address'];
    }

    /**
     * Sets ip_address
     *
     * @param string $ip_address IP Address of the customer, if known.
     *
     * @return $this
     */
    public function setIpAddress($ip_address)
    {
        $this->container['ip_address'] = $ip_address;

        return $this;
    }

    /**
     * Gets geoip_country
     *
     * @return string
     */
    public function getGeoipCountry()
    {
        return $this->container['geoip_country'];
    }

    /**
     * Sets geoip_country
     *
     * @param string $geoip_country The full name of the country where the customer made the purchase, based on the IP.
     *
     * @return $this
     */
    public function setGeoipCountry($geoip_country)
    {
        $this->container['geoip_country'] = $geoip_country;

        return $this;
    }

    /**
     * Gets geoip_country_iso2
     *
     * @return string
     */
    public function getGeoipCountryIso2()
    {
        return $this->container['geoip_country_iso2'];
    }

    /**
     * Sets geoip_country_iso2
     *
     * @param string $geoip_country_iso2 The country where the customer made the purchase, in ISO2 format, based on the IP.
     *
     * @return $this
     */
    public function setGeoipCountryIso2($geoip_country_iso2)
    {
        $this->container['geoip_country_iso2'] = $geoip_country_iso2;

        return $this;
    }

    /**
     * Gets staff_notes
     *
     * @return string
     */
    public function getStaffNotes()
    {
        return $this->container['staff_notes'];
    }

    /**
     * Sets staff_notes
     *
     * @param string $staff_notes Any additional notes for staff.
     *
     * @return $this
     */
    public function setStaffNotes($staff_notes)
    {
        $this->container['staff_notes'] = $staff_notes;

        return $this;
    }

    /**
     * Gets customer_message
     *
     * @return string
     */
    public function getCustomerMessage()
    {
        return $this->container['customer_message'];
    }

    /**
     * Sets customer_message
     *
     * @param string $customer_message Message that the customer entered (number, optional) -o the `Order Comments` box during checkout.
     *
     * @return $this
     */
    public function setCustomerMessage($customer_message)
    {
        $this->container['customer_message'] = $customer_message;

        return $this;
    }

    /**
     * Gets discount_amount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param string $discount_amount Amount of discount for this transaction. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets is_deleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool $is_deleted Indicates whether the order was deleted (archived). Set to to true, to archive an order.
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {
        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }

    /**
     * Gets ebay_order_id
     *
     * @return string
     */
    public function getEbayOrderId()
    {
        return $this->container['ebay_order_id'];
    }

    /**
     * Sets ebay_order_id
     *
     * @param string $ebay_order_id If the order was placed through eBay, the eBay order number will be included. Otherwise, the value will be `0`.
     *
     * @return $this
     */
    public function setEbayOrderId($ebay_order_id)
    {
        $this->container['ebay_order_id'] = $ebay_order_id;

        return $this;
    }

    /**
     * Gets external_source
     *
     * @return string
     */
    public function getExternalSource()
    {
        return $this->container['external_source'];
    }

    /**
     * Sets external_source
     *
     * @param string $external_source For orders submitted or modified via the API, using a PUT or POST operation, you can optionally pass in a value identifying the system used to generate the order. For example: `POS`. Otherwise, the value will be null.
     *
     * @return $this
     */
    public function setExternalSource($external_source)
    {
        $this->container['external_source'] = $external_source;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return int
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param int $external_id ID of the order in another system. For example, the Amazon Order ID if this is an Amazon order.This field can be updated in a /POST, but using a /PUT to update the order will return a 400 error. The field 'external_id' cannot be written to. Please remove it from your request before trying again. It can not be overwritten once set.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets channel_id
     *
     * @return int
     */
    public function getChannelId()
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param int $channel_id Shows where the order originated. The channel_id will default to 1.
     *
     * @return $this
     */
    public function setChannelId($channel_id)
    {
        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets tax_provider_id
     *
     * @return string
     */
    public function getTaxProviderId()
    {
        return $this->container['tax_provider_id'];
    }

    /**
     * Sets tax_provider_id
     *
     * @param string $tax_provider_id BasicTaxProvider - Tax is set to manual.  AvaTaxProvider - This is for when the tax provider has been set to automatic and the order was NOT created by the API. Used for Avalara.  \"\" (blank) - When the tax provider is unknown. This includes legacy orders and orders previously created via API. This can be set when creating an order using a POST.
     *
     * @return $this
     */
    public function setTaxProviderId($tax_provider_id)
    {
        $allowedValues = $this->getTaxProviderIdAllowableValues();
        if (!is_null($tax_provider_id) && !in_array($tax_provider_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tax_provider_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tax_provider_id'] = $tax_provider_id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created The date this order was created. If not specified, will default to the current time. The date should be in RFC 2822 format.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets default_currency_code
     *
     * @return string
     */
    public function getDefaultCurrencyCode()
    {
        return $this->container['default_currency_code'];
    }

    /**
     * Sets default_currency_code
     *
     * @param string $default_currency_code The currency code of the default currency for this type of transaction; writeable when multi-currency enabled.
     *
     * @return $this
     */
    public function setDefaultCurrencyCode($default_currency_code)
    {
        $this->container['default_currency_code'] = $default_currency_code;

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
