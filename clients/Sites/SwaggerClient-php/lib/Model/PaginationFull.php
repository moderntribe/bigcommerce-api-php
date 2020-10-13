<?php
/**
 * PaginationFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sites
 *
 * Create and manage [sites](#sites) and [routes](#routes) for [headless storefront](https://support.bigcommerce.com/s/article/The-Headless-Approach#what-mean) sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api).  - [Authentication](#authentication) - [Sites](#sites) - [Site routes](#site-routes) - [Route types](#route-types) - [Route variables](#route-variables) - [Additional Information](#additional-information)  ## Authentication  Authenticate requests by sending an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` via `X-Auth-Token` HTTP header.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites Content-Type: application/json X-Auth-Token: {{ACCESS_TOKEN}} ```  ### [OAuth Scopes](https://developer.bigcommerce.com/api-docs/getting-started/authentication/rest-api-authentication#oauth-scopes)  | UI Name        | Permission | Parameter               | |----------------|------------|-------------------------| | Sites & Routes | modify     | `store_sites`           | | Sites & Routes | read-only  | `store_sites_read_only` |  For more information on authenticating BigCommerce APIs, see [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## [Sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites)  Sites link [headless storefronts](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless) to sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api). To [create a site](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"url\": \"http://store.example.com/\",   \"channel_id\": 5 } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#requestrunner)  **[Response:](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#responses)**  ```json {   \"id\": 1,   \"url\": \"http://store.example.com/\",   \"channel_id\": 5,   \"created_at\": \"2018-01-04T04:15:50.000Z\",   \"updated_at\": \"2018-01-04T04:15:50.000Z\" } ```  To [get a list of sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites), send a `GET` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Accept: application/json ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites#requestrunner)  ## [Site routes](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes)  Site routes tell BigCommerce how to link to pages on a [headless storefront](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless). To [create a route](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route) for a [site](#sites), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"12\",   \"route\": \"/en/product?id=12\" } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route#requestrunner)  ## Route types  The following route types are supported.  | Type | Description | |-|-| |`account_new_return`|Route for shopper account page| |`account_order_status`|Route for shopper order status account page| |`cart`|Route to shopper's cart| |`checkout`|Route to checkout| |`create_account`|Route to the create a shopper account page| |`forgot_password`|Route to shopper forgot password page| |`home`|Route to headless storefront homepage| |`order_confirmation`|Route to the order confirmation page| |`product`|Route for product details pages | |`recover_abandoned_cart`|Route for URL in emails for a shopper to recover their abandoned cart| |`unsubscribe`|Route for unsubscribe URL in emails|  ## Route variables  The following route variables are supported  |Variable|Description| |-|-|-| |`{id}`|The **ID** of the requested item| |`{slug}`|The **slug** for the requested item (if available). Note: the `slug` value may contain `/` slash| |`{lang}`|The **language** string that the client is using|  **Example:**  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"*\",   \"route\": \"/{lang}/{slug}?id={id}\" } ```  ## Additional Information  ### Related resources * [Channels and Listings Reference](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api) * [Channels Overview](https://developer.bigcommerce.com/api-docs/channels/overview) * [Building Headless Storefronts Guide](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless)
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaginationFull Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaginationFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'pagination_Full';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'total' => 'int',
'count' => 'int',
'per_page' => 'int',
'current_page' => 'int',
'total_pages' => 'int',
'links' => '\Swagger\Client\Model\LinksFull'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'total' => 'int32',
'count' => 'int32',
'per_page' => 'int32',
'current_page' => 'int32',
'total_pages' => 'int32',
'links' => null    ];

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
        'total' => 'total',
'count' => 'count',
'per_page' => 'per_page',
'current_page' => 'current_page',
'total_pages' => 'total_pages',
'links' => 'links'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total' => 'setTotal',
'count' => 'setCount',
'per_page' => 'setPerPage',
'current_page' => 'setCurrentPage',
'total_pages' => 'setTotalPages',
'links' => 'setLinks'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total' => 'getTotal',
'count' => 'getCount',
'per_page' => 'getPerPage',
'current_page' => 'getCurrentPage',
'total_pages' => 'getTotalPages',
'links' => 'getLinks'    ];

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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['per_page'] = isset($data['per_page']) ? $data['per_page'] : null;
        $this->container['current_page'] = isset($data['current_page']) ? $data['current_page'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int $total Total number of items in the result set.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count Total number of items in the collection response.
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets per_page
     *
     * @return int
     */
    public function getPerPage()
    {
        return $this->container['per_page'];
    }

    /**
     * Sets per_page
     *
     * @param int $per_page The amount of items returned in the collection per page, controlled by the limit parameter.
     *
     * @return $this
     */
    public function setPerPage($per_page)
    {
        $this->container['per_page'] = $per_page;

        return $this;
    }

    /**
     * Gets current_page
     *
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->container['current_page'];
    }

    /**
     * Sets current_page
     *
     * @param int $current_page The page you are currently on within the collection.
     *
     * @return $this
     */
    public function setCurrentPage($current_page)
    {
        $this->container['current_page'] = $current_page;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages The total number of pages in the collection.
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\LinksFull
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\LinksFull $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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
