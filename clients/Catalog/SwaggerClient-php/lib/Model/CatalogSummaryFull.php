<?php
/**
 * CatalogSummaryFull
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Catalog
 *
 * Manage products, brands and categories. To learn more about catalog resources see [Catalog Overview](https://developer.bigcommerce.com/api-docs/catalog/products-overview).  - [Authentication](#authentication) - [Differentiating Variants & Modifiers](#variants-and-modifiers) - [Available Endpoints](#available-endpoints) - [Resources](#resources)  ## Authentication Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### OAuth Scopes | UI Name  | Permission | Parameter                     | |----------|------------|-------------------------------| | Products | modify     | `store_v2_products`           | | Products | read-only  | `store_v2_products_read_only` |  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Differentiating Variants and Modifiers [Variants](https://support.bigcommerce.com/s/article/Product-Options-v3#variations) represent a physical product made up of [Product Option](https://support.bigcommerce.com/s/article/Product-Options-v3) choices, i.e. a large blue t-shirt. Each variant can have a unique SKU.  Modifiers represent a choice a customer makes about a product that doesn't represent a physical item, i.e. text to be printed on a t-shirt. Assigning a SKU to a modifier will turn it into a variant.  See [Variant Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#variant-options) and [Modifier Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#modifier-options) for more information.  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Brand Images                            | Create and manage brand images                                          | | Brand Metafields                        | Create and manage brand metafields                                      | | Brands                                  | Create and manage brands                                                | | Catalog                                 | Create and manage store categories, products, and brands                | | Categories                              | Create and manage categorties                                           | | Category Images                         | Create and manage category images                                       | | Category Metafields                     | Create and manage category metafields                                   | | Product Bulk Pricing Rules              | Create and manage product bulk pricing rules                            | | Product Complex Rules                   | Create and manage product complex rules                                 | | Product Custom Fields                   | Create and manage product custom fields                                 | | Product Images                          | Create and manage product images                                        | | Product Metafields                      | Create and manage product meta fields                                   | | Product Modifier Images                 | Create and manage product modifer images                                | | Product Modifier Values                 | Create and manage product modifier values                               | | Product Modifiers                       | Create and manage product midifiers                                     | | Product Reviews                         | Create and manage product reviews                                       | | Product Variant Option Values           | Create and manage product variant option values                         | | Product Variant Options                 | Create and manage product variant options                               | | Product Variants                        | Create and manage product variants                                      | | Product Videos                          | Create and manage product videos                                        | | Products                                | Create and manage products                                              | | ProductVariant Metafields               | Create and manage product meta flields                                  | | Variants                                | Get and update all variants                                             |  ## Resources  ### Webhooks * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [Categories](/api-docs/getting-started/webhooks/webhook-events#webhook-events_category) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related Endpoints * [Catalog API](/api-reference/catalog/catalog-api)
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

namespace BigCommerce\Catalog\Model;

use \ArrayAccess;
use \BigCommerce\Catalog\ObjectSerializer;

/**
 * CatalogSummaryFull Class Doc Comment
 *
 * @category Class
 * @description Catalog Summary object describes a lightweight summary of the catalog.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CatalogSummaryFull implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'catalogSummary_Full';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'inventory_count' => 'int',
'inventory_value' => 'double',
'primary_category_id' => 'int',
'primary_category_name' => 'string',
'variant_count' => 'int',
'highest_variant_price' => 'double',
'average_variant_price' => 'double',
'lowest_variant_price' => 'string',
'oldest_variant_date' => 'string',
'newest_variant_date' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'inventory_count' => null,
'inventory_value' => 'double',
'primary_category_id' => null,
'primary_category_name' => null,
'variant_count' => null,
'highest_variant_price' => 'double',
'average_variant_price' => 'double',
'lowest_variant_price' => null,
'oldest_variant_date' => null,
'newest_variant_date' => null    ];

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
        'inventory_count' => 'inventory_count',
'inventory_value' => 'inventory_value',
'primary_category_id' => 'primary_category_id',
'primary_category_name' => 'primary_category_name',
'variant_count' => 'variant_count',
'highest_variant_price' => 'highest_variant_price',
'average_variant_price' => 'average_variant_price',
'lowest_variant_price' => 'lowest_variant_price',
'oldest_variant_date' => 'oldest_variant_date',
'newest_variant_date' => 'newest_variant_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'inventory_count' => 'setInventoryCount',
'inventory_value' => 'setInventoryValue',
'primary_category_id' => 'setPrimaryCategoryId',
'primary_category_name' => 'setPrimaryCategoryName',
'variant_count' => 'setVariantCount',
'highest_variant_price' => 'setHighestVariantPrice',
'average_variant_price' => 'setAverageVariantPrice',
'lowest_variant_price' => 'setLowestVariantPrice',
'oldest_variant_date' => 'setOldestVariantDate',
'newest_variant_date' => 'setNewestVariantDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'inventory_count' => 'getInventoryCount',
'inventory_value' => 'getInventoryValue',
'primary_category_id' => 'getPrimaryCategoryId',
'primary_category_name' => 'getPrimaryCategoryName',
'variant_count' => 'getVariantCount',
'highest_variant_price' => 'getHighestVariantPrice',
'average_variant_price' => 'getAverageVariantPrice',
'lowest_variant_price' => 'getLowestVariantPrice',
'oldest_variant_date' => 'getOldestVariantDate',
'newest_variant_date' => 'getNewestVariantDate'    ];

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
        $this->container['inventory_count'] = isset($data['inventory_count']) ? $data['inventory_count'] : null;
        $this->container['inventory_value'] = isset($data['inventory_value']) ? $data['inventory_value'] : null;
        $this->container['primary_category_id'] = isset($data['primary_category_id']) ? $data['primary_category_id'] : null;
        $this->container['primary_category_name'] = isset($data['primary_category_name']) ? $data['primary_category_name'] : null;
        $this->container['variant_count'] = isset($data['variant_count']) ? $data['variant_count'] : null;
        $this->container['highest_variant_price'] = isset($data['highest_variant_price']) ? $data['highest_variant_price'] : null;
        $this->container['average_variant_price'] = isset($data['average_variant_price']) ? $data['average_variant_price'] : null;
        $this->container['lowest_variant_price'] = isset($data['lowest_variant_price']) ? $data['lowest_variant_price'] : null;
        $this->container['oldest_variant_date'] = isset($data['oldest_variant_date']) ? $data['oldest_variant_date'] : null;
        $this->container['newest_variant_date'] = isset($data['newest_variant_date']) ? $data['newest_variant_date'] : null;
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
     * Gets inventory_count
     *
     * @return int
     */
    public function getInventoryCount()
    {
        return $this->container['inventory_count'];
    }

    /**
     * Sets inventory_count
     *
     * @param int $inventory_count A count of all inventory items in the catalog.
     *
     * @return $this
     */
    public function setInventoryCount($inventory_count)
    {
        $this->container['inventory_count'] = $inventory_count;

        return $this;
    }

    /**
     * Gets inventory_value
     *
     * @return double
     */
    public function getInventoryValue()
    {
        return $this->container['inventory_value'];
    }

    /**
     * Sets inventory_value
     *
     * @param double $inventory_value Total value of store's inventory.
     *
     * @return $this
     */
    public function setInventoryValue($inventory_value)
    {
        $this->container['inventory_value'] = $inventory_value;

        return $this;
    }

    /**
     * Gets primary_category_id
     *
     * @return int
     */
    public function getPrimaryCategoryId()
    {
        return $this->container['primary_category_id'];
    }

    /**
     * Sets primary_category_id
     *
     * @param int $primary_category_id ID of the category containing the most products.
     *
     * @return $this
     */
    public function setPrimaryCategoryId($primary_category_id)
    {
        $this->container['primary_category_id'] = $primary_category_id;

        return $this;
    }

    /**
     * Gets primary_category_name
     *
     * @return string
     */
    public function getPrimaryCategoryName()
    {
        return $this->container['primary_category_name'];
    }

    /**
     * Sets primary_category_name
     *
     * @param string $primary_category_name Name of the category containing the most products.
     *
     * @return $this
     */
    public function setPrimaryCategoryName($primary_category_name)
    {
        $this->container['primary_category_name'] = $primary_category_name;

        return $this;
    }

    /**
     * Gets variant_count
     *
     * @return int
     */
    public function getVariantCount()
    {
        return $this->container['variant_count'];
    }

    /**
     * Sets variant_count
     *
     * @param int $variant_count Total number of variants
     *
     * @return $this
     */
    public function setVariantCount($variant_count)
    {
        $this->container['variant_count'] = $variant_count;

        return $this;
    }

    /**
     * Gets highest_variant_price
     *
     * @return double
     */
    public function getHighestVariantPrice()
    {
        return $this->container['highest_variant_price'];
    }

    /**
     * Sets highest_variant_price
     *
     * @param double $highest_variant_price Highest priced variant
     *
     * @return $this
     */
    public function setHighestVariantPrice($highest_variant_price)
    {
        $this->container['highest_variant_price'] = $highest_variant_price;

        return $this;
    }

    /**
     * Gets average_variant_price
     *
     * @return double
     */
    public function getAverageVariantPrice()
    {
        return $this->container['average_variant_price'];
    }

    /**
     * Sets average_variant_price
     *
     * @param double $average_variant_price Average price of all variants
     *
     * @return $this
     */
    public function setAverageVariantPrice($average_variant_price)
    {
        $this->container['average_variant_price'] = $average_variant_price;

        return $this;
    }

    /**
     * Gets lowest_variant_price
     *
     * @return string
     */
    public function getLowestVariantPrice()
    {
        return $this->container['lowest_variant_price'];
    }

    /**
     * Sets lowest_variant_price
     *
     * @param string $lowest_variant_price Lowest priced variant in the store
     *
     * @return $this
     */
    public function setLowestVariantPrice($lowest_variant_price)
    {
        $this->container['lowest_variant_price'] = $lowest_variant_price;

        return $this;
    }

    /**
     * Gets oldest_variant_date
     *
     * @return string
     */
    public function getOldestVariantDate()
    {
        return $this->container['oldest_variant_date'];
    }

    /**
     * Sets oldest_variant_date
     *
     * @param string $oldest_variant_date oldest_variant_date
     *
     * @return $this
     */
    public function setOldestVariantDate($oldest_variant_date)
    {
        $this->container['oldest_variant_date'] = $oldest_variant_date;

        return $this;
    }

    /**
     * Gets newest_variant_date
     *
     * @return string
     */
    public function getNewestVariantDate()
    {
        return $this->container['newest_variant_date'];
    }

    /**
     * Sets newest_variant_date
     *
     * @param string $newest_variant_date newest_variant_date
     *
     * @return $this
     */
    public function setNewestVariantDate($newest_variant_date)
    {
        $this->container['newest_variant_date'] = $newest_variant_date;

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
