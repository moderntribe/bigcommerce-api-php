<?php
/**
 * OrderShippingAddress1
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
 * OrderShippingAddress1 Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\OrdersV2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderShippingAddress1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'orderShippingAddress_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'base_cost' => 'string',
'base_handling_cost' => 'string',
'city' => 'string',
'company' => 'string',
'cost_ex_tax' => 'string',
'cost_inc_tax' => 'string',
'cost_tax' => 'string',
'cost_tax_class_id' => 'int',
'country' => 'string',
'country_iso2' => 'string',
'email' => 'string',
'first_name' => 'string',
'form_fields' => '\BigCommerce\OrdersV2\Model\FormFields1[]',
'handling_cost_ex_tax' => 'string',
'handling_cost_inc_tax' => 'string',
'handling_cost_tax' => 'string',
'handling_cost_tax_class_id' => 'int',
'id' => 'int',
'items_shipped' => 'float',
'items_total' => 'float',
'last_name' => 'string',
'order_id' => 'int',
'phone' => 'string',
'shipping_method' => 'string',
'shipping_quotes' => '\BigCommerce\OrdersV2\Model\ShippingQuotesResource1',
'shipping_zone_id' => 'float',
'shipping_zone_name' => 'string',
'state' => 'string',
'street_1' => 'string',
'street_2' => 'string',
'zip' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'base_cost' => null,
'base_handling_cost' => null,
'city' => null,
'company' => null,
'cost_ex_tax' => null,
'cost_inc_tax' => null,
'cost_tax' => null,
'cost_tax_class_id' => null,
'country' => null,
'country_iso2' => null,
'email' => null,
'first_name' => null,
'form_fields' => null,
'handling_cost_ex_tax' => null,
'handling_cost_inc_tax' => null,
'handling_cost_tax' => null,
'handling_cost_tax_class_id' => null,
'id' => null,
'items_shipped' => null,
'items_total' => null,
'last_name' => null,
'order_id' => null,
'phone' => null,
'shipping_method' => null,
'shipping_quotes' => null,
'shipping_zone_id' => null,
'shipping_zone_name' => null,
'state' => null,
'street_1' => null,
'street_2' => null,
'zip' => null    ];

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
        'base_cost' => 'base_cost',
'base_handling_cost' => 'base_handling_cost',
'city' => 'city',
'company' => 'company',
'cost_ex_tax' => 'cost_ex_tax',
'cost_inc_tax' => 'cost_inc_tax',
'cost_tax' => 'cost_tax',
'cost_tax_class_id' => 'cost_tax_class_id',
'country' => 'country',
'country_iso2' => 'country_iso2',
'email' => 'email',
'first_name' => 'first_name',
'form_fields' => 'form_fields',
'handling_cost_ex_tax' => 'handling_cost_ex_tax',
'handling_cost_inc_tax' => 'handling_cost_inc_tax',
'handling_cost_tax' => 'handling_cost_tax',
'handling_cost_tax_class_id' => 'handling_cost_tax_class_id',
'id' => 'id',
'items_shipped' => 'items_shipped',
'items_total' => 'items_total',
'last_name' => 'last_name',
'order_id' => 'order_id',
'phone' => 'phone',
'shipping_method' => 'shipping_method',
'shipping_quotes' => 'shipping_quotes',
'shipping_zone_id' => 'shipping_zone_id',
'shipping_zone_name' => 'shipping_zone_name',
'state' => 'state',
'street_1' => 'street_1',
'street_2' => 'street_2',
'zip' => 'zip'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'base_cost' => 'setBaseCost',
'base_handling_cost' => 'setBaseHandlingCost',
'city' => 'setCity',
'company' => 'setCompany',
'cost_ex_tax' => 'setCostExTax',
'cost_inc_tax' => 'setCostIncTax',
'cost_tax' => 'setCostTax',
'cost_tax_class_id' => 'setCostTaxClassId',
'country' => 'setCountry',
'country_iso2' => 'setCountryIso2',
'email' => 'setEmail',
'first_name' => 'setFirstName',
'form_fields' => 'setFormFields',
'handling_cost_ex_tax' => 'setHandlingCostExTax',
'handling_cost_inc_tax' => 'setHandlingCostIncTax',
'handling_cost_tax' => 'setHandlingCostTax',
'handling_cost_tax_class_id' => 'setHandlingCostTaxClassId',
'id' => 'setId',
'items_shipped' => 'setItemsShipped',
'items_total' => 'setItemsTotal',
'last_name' => 'setLastName',
'order_id' => 'setOrderId',
'phone' => 'setPhone',
'shipping_method' => 'setShippingMethod',
'shipping_quotes' => 'setShippingQuotes',
'shipping_zone_id' => 'setShippingZoneId',
'shipping_zone_name' => 'setShippingZoneName',
'state' => 'setState',
'street_1' => 'setStreet1',
'street_2' => 'setStreet2',
'zip' => 'setZip'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'base_cost' => 'getBaseCost',
'base_handling_cost' => 'getBaseHandlingCost',
'city' => 'getCity',
'company' => 'getCompany',
'cost_ex_tax' => 'getCostExTax',
'cost_inc_tax' => 'getCostIncTax',
'cost_tax' => 'getCostTax',
'cost_tax_class_id' => 'getCostTaxClassId',
'country' => 'getCountry',
'country_iso2' => 'getCountryIso2',
'email' => 'getEmail',
'first_name' => 'getFirstName',
'form_fields' => 'getFormFields',
'handling_cost_ex_tax' => 'getHandlingCostExTax',
'handling_cost_inc_tax' => 'getHandlingCostIncTax',
'handling_cost_tax' => 'getHandlingCostTax',
'handling_cost_tax_class_id' => 'getHandlingCostTaxClassId',
'id' => 'getId',
'items_shipped' => 'getItemsShipped',
'items_total' => 'getItemsTotal',
'last_name' => 'getLastName',
'order_id' => 'getOrderId',
'phone' => 'getPhone',
'shipping_method' => 'getShippingMethod',
'shipping_quotes' => 'getShippingQuotes',
'shipping_zone_id' => 'getShippingZoneId',
'shipping_zone_name' => 'getShippingZoneName',
'state' => 'getState',
'street_1' => 'getStreet1',
'street_2' => 'getStreet2',
'zip' => 'getZip'    ];

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
        $this->container['base_cost'] = isset($data['base_cost']) ? $data['base_cost'] : null;
        $this->container['base_handling_cost'] = isset($data['base_handling_cost']) ? $data['base_handling_cost'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['cost_ex_tax'] = isset($data['cost_ex_tax']) ? $data['cost_ex_tax'] : null;
        $this->container['cost_inc_tax'] = isset($data['cost_inc_tax']) ? $data['cost_inc_tax'] : null;
        $this->container['cost_tax'] = isset($data['cost_tax']) ? $data['cost_tax'] : null;
        $this->container['cost_tax_class_id'] = isset($data['cost_tax_class_id']) ? $data['cost_tax_class_id'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['country_iso2'] = isset($data['country_iso2']) ? $data['country_iso2'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['form_fields'] = isset($data['form_fields']) ? $data['form_fields'] : null;
        $this->container['handling_cost_ex_tax'] = isset($data['handling_cost_ex_tax']) ? $data['handling_cost_ex_tax'] : null;
        $this->container['handling_cost_inc_tax'] = isset($data['handling_cost_inc_tax']) ? $data['handling_cost_inc_tax'] : null;
        $this->container['handling_cost_tax'] = isset($data['handling_cost_tax']) ? $data['handling_cost_tax'] : null;
        $this->container['handling_cost_tax_class_id'] = isset($data['handling_cost_tax_class_id']) ? $data['handling_cost_tax_class_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['items_shipped'] = isset($data['items_shipped']) ? $data['items_shipped'] : null;
        $this->container['items_total'] = isset($data['items_total']) ? $data['items_total'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['shipping_quotes'] = isset($data['shipping_quotes']) ? $data['shipping_quotes'] : null;
        $this->container['shipping_zone_id'] = isset($data['shipping_zone_id']) ? $data['shipping_zone_id'] : null;
        $this->container['shipping_zone_name'] = isset($data['shipping_zone_name']) ? $data['shipping_zone_name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['street_1'] = isset($data['street_1']) ? $data['street_1'] : null;
        $this->container['street_2'] = isset($data['street_2']) ? $data['street_2'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
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
     * Gets base_cost
     *
     * @return string
     */
    public function getBaseCost()
    {
        return $this->container['base_cost'];
    }

    /**
     * Sets base_cost
     *
     * @param string $base_cost The base value of the order’s items. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setBaseCost($base_cost)
    {
        $this->container['base_cost'] = $base_cost;

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
     * @param string $base_handling_cost The base handling charge. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setBaseHandlingCost($base_handling_cost)
    {
        $this->container['base_handling_cost'] = $base_handling_cost;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets cost_ex_tax
     *
     * @return string
     */
    public function getCostExTax()
    {
        return $this->container['cost_ex_tax'];
    }

    /**
     * Sets cost_ex_tax
     *
     * @param string $cost_ex_tax The value of the order’s items, excluding tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setCostExTax($cost_ex_tax)
    {
        $this->container['cost_ex_tax'] = $cost_ex_tax;

        return $this;
    }

    /**
     * Gets cost_inc_tax
     *
     * @return string
     */
    public function getCostIncTax()
    {
        return $this->container['cost_inc_tax'];
    }

    /**
     * Sets cost_inc_tax
     *
     * @param string $cost_inc_tax The value of the order’s items, including tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setCostIncTax($cost_inc_tax)
    {
        $this->container['cost_inc_tax'] = $cost_inc_tax;

        return $this;
    }

    /**
     * Gets cost_tax
     *
     * @return string
     */
    public function getCostTax()
    {
        return $this->container['cost_tax'];
    }

    /**
     * Sets cost_tax
     *
     * @param string $cost_tax The tax amount on the order. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setCostTax($cost_tax)
    {
        $this->container['cost_tax'] = $cost_tax;

        return $this;
    }

    /**
     * Gets cost_tax_class_id
     *
     * @return int
     */
    public function getCostTaxClassId()
    {
        return $this->container['cost_tax_class_id'];
    }

    /**
     * Sets cost_tax_class_id
     *
     * @param int $cost_tax_class_id The ID of the tax class applied to the product. (NOTE: Value ignored if automatic tax is enabled.)
     *
     * @return $this
     */
    public function setCostTaxClassId($cost_tax_class_id)
    {
        $this->container['cost_tax_class_id'] = $cost_tax_class_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_iso2
     *
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     *
     * @param string $country_iso2 2-letter ISO Alpha-2 code for the country.
     *
     * @return $this
     */
    public function setCountryIso2($country_iso2)
    {
        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Recipient's email address.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets form_fields
     *
     * @return \BigCommerce\OrdersV2\Model\FormFields1[]
     */
    public function getFormFields()
    {
        return $this->container['form_fields'];
    }

    /**
     * Sets form_fields
     *
     * @param \BigCommerce\OrdersV2\Model\FormFields1[] $form_fields form_fields
     *
     * @return $this
     */
    public function setFormFields($form_fields)
    {
        $this->container['form_fields'] = $form_fields;

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
     * @param string $handling_cost_ex_tax The handling charge, excluding tax. (Float, Float-As-String, Integer)
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
     * @param string $handling_cost_inc_tax The handling charge, including tax. (Float, Float-As-String, Integer)
     *
     * @return $this
     */
    public function setHandlingCostIncTax($handling_cost_inc_tax)
    {
        $this->container['handling_cost_inc_tax'] = $handling_cost_inc_tax;

        return $this;
    }

    /**
     * Gets handling_cost_tax
     *
     * @return string
     */
    public function getHandlingCostTax()
    {
        return $this->container['handling_cost_tax'];
    }

    /**
     * Sets handling_cost_tax
     *
     * @param string $handling_cost_tax handling_cost_tax
     *
     * @return $this
     */
    public function setHandlingCostTax($handling_cost_tax)
    {
        $this->container['handling_cost_tax'] = $handling_cost_tax;

        return $this;
    }

    /**
     * Gets handling_cost_tax_class_id
     *
     * @return int
     */
    public function getHandlingCostTaxClassId()
    {
        return $this->container['handling_cost_tax_class_id'];
    }

    /**
     * Sets handling_cost_tax_class_id
     *
     * @param int $handling_cost_tax_class_id A read-only value. Do not attempt to set or modify this value in a POST or PUT operation. (NOTE: Value ignored if automatic tax is enabled on the store.)
     *
     * @return $this
     */
    public function setHandlingCostTaxClassId($handling_cost_tax_class_id)
    {
        $this->container['handling_cost_tax_class_id'] = $handling_cost_tax_class_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of this shipping address.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets order_id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param int $order_id ID of the order.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Recipient's telephone number.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * @param string $shipping_method Text code identifying the BigCommerce shipping module selected by the customer.
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets shipping_quotes
     *
     * @return \BigCommerce\OrdersV2\Model\ShippingQuotesResource1
     */
    public function getShippingQuotes()
    {
        return $this->container['shipping_quotes'];
    }

    /**
     * Sets shipping_quotes
     *
     * @param \BigCommerce\OrdersV2\Model\ShippingQuotesResource1 $shipping_quotes shipping_quotes
     *
     * @return $this
     */
    public function setShippingQuotes($shipping_quotes)
    {
        $this->container['shipping_quotes'] = $shipping_quotes;

        return $this;
    }

    /**
     * Gets shipping_zone_id
     *
     * @return float
     */
    public function getShippingZoneId()
    {
        return $this->container['shipping_zone_id'];
    }

    /**
     * Sets shipping_zone_id
     *
     * @param float $shipping_zone_id Numeric ID of the shipping zone.
     *
     * @return $this
     */
    public function setShippingZoneId($shipping_zone_id)
    {
        $this->container['shipping_zone_id'] = $shipping_zone_id;

        return $this;
    }

    /**
     * Gets shipping_zone_name
     *
     * @return string
     */
    public function getShippingZoneName()
    {
        return $this->container['shipping_zone_name'];
    }

    /**
     * Sets shipping_zone_name
     *
     * @param string $shipping_zone_name Name of the shipping zone.
     *
     * @return $this
     */
    public function setShippingZoneName($shipping_zone_name)
    {
        $this->container['shipping_zone_name'] = $shipping_zone_name;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets street_1
     *
     * @return string
     */
    public function getStreet1()
    {
        return $this->container['street_1'];
    }

    /**
     * Sets street_1
     *
     * @param string $street_1 Street address (first line).
     *
     * @return $this
     */
    public function setStreet1($street_1)
    {
        $this->container['street_1'] = $street_1;

        return $this;
    }

    /**
     * Gets street_2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street_2'];
    }

    /**
     * Sets street_2
     *
     * @param string $street_2 Street address (second line).
     *
     * @return $this
     */
    public function setStreet2($street_2)
    {
        $this->container['street_2'] = $street_2;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Zip or postal code, as a string.
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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
