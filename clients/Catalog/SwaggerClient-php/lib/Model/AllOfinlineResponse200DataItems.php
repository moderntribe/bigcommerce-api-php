<?php
/**
 * AllOfinlineResponse200DataItems
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
 * AllOfinlineResponse200DataItems Class Doc Comment
 *
 * @category Class
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AllOfinlineResponse200DataItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AllOfinline_response_200DataItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'date_created' => '\DateTime',
'date_modified' => '\DateTime',
'id' => 'int',
'base_variant_id' => 'int',
'calculated_price' => 'float',
'options' => 'object[]',
'modifiers' => 'object[]',
'map_price' => 'float',
'option_set_id' => 'int',
'option_set_display' => 'string',
'variants' => 'object'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'date_created' => 'date-time',
'date_modified' => 'date-time',
'id' => null,
'base_variant_id' => null,
'calculated_price' => 'float',
'options' => null,
'modifiers' => null,
'map_price' => null,
'option_set_id' => null,
'option_set_display' => null,
'variants' => null    ];

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
        'date_created' => 'date_created',
'date_modified' => 'date_modified',
'id' => 'id',
'base_variant_id' => 'base_variant_id',
'calculated_price' => 'calculated_price',
'options' => 'options',
'modifiers' => 'modifiers',
'map_price' => 'map_price',
'option_set_id' => 'option_set_id',
'option_set_display' => 'option_set_display',
'variants' => 'variants'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_created' => 'setDateCreated',
'date_modified' => 'setDateModified',
'id' => 'setId',
'base_variant_id' => 'setBaseVariantId',
'calculated_price' => 'setCalculatedPrice',
'options' => 'setOptions',
'modifiers' => 'setModifiers',
'map_price' => 'setMapPrice',
'option_set_id' => 'setOptionSetId',
'option_set_display' => 'setOptionSetDisplay',
'variants' => 'setVariants'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_created' => 'getDateCreated',
'date_modified' => 'getDateModified',
'id' => 'getId',
'base_variant_id' => 'getBaseVariantId',
'calculated_price' => 'getCalculatedPrice',
'options' => 'getOptions',
'modifiers' => 'getModifiers',
'map_price' => 'getMapPrice',
'option_set_id' => 'getOptionSetId',
'option_set_display' => 'getOptionSetDisplay',
'variants' => 'getVariants'    ];

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
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['date_modified'] = isset($data['date_modified']) ? $data['date_modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['base_variant_id'] = isset($data['base_variant_id']) ? $data['base_variant_id'] : null;
        $this->container['calculated_price'] = isset($data['calculated_price']) ? $data['calculated_price'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['modifiers'] = isset($data['modifiers']) ? $data['modifiers'] : null;
        $this->container['map_price'] = isset($data['map_price']) ? $data['map_price'] : null;
        $this->container['option_set_id'] = isset($data['option_set_id']) ? $data['option_set_id'] : null;
        $this->container['option_set_display'] = isset($data['option_set_display']) ? $data['option_set_display'] : null;
        $this->container['variants'] = isset($data['variants']) ? $data['variants'] : null;
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
     * Gets date_created
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param \DateTime $date_created The date on which the product was created.
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets date_modified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['date_modified'];
    }

    /**
     * Sets date_modified
     *
     * @param \DateTime $date_modified The date on which the product was modified.
     *
     * @return $this
     */
    public function setDateModified($date_modified)
    {
        $this->container['date_modified'] = $date_modified;

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
     * @param int $id ID of the product. Read Only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets base_variant_id
     *
     * @return int
     */
    public function getBaseVariantId()
    {
        return $this->container['base_variant_id'];
    }

    /**
     * Sets base_variant_id
     *
     * @param int $base_variant_id The unique identifier of the base variant associated with a simple product. This value is `null` for complex products.
     *
     * @return $this
     */
    public function setBaseVariantId($base_variant_id)
    {
        $this->container['base_variant_id'] = $base_variant_id;

        return $this;
    }

    /**
     * Gets calculated_price
     *
     * @return float
     */
    public function getCalculatedPrice()
    {
        return $this->container['calculated_price'];
    }

    /**
     * Sets calculated_price
     *
     * @param float $calculated_price The price of the product as seen on the storefront. It will be equal to the `sale_price`, if set, and the `price` if there is not a `sale_price`.
     *
     * @return $this
     */
    public function setCalculatedPrice($calculated_price)
    {
        $this->container['calculated_price'] = $calculated_price;

        return $this;
    }

    /**
     * Gets options
     *
     * @return object[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param object[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets modifiers
     *
     * @return object[]
     */
    public function getModifiers()
    {
        return $this->container['modifiers'];
    }

    /**
     * Sets modifiers
     *
     * @param object[] $modifiers modifiers
     *
     * @return $this
     */
    public function setModifiers($modifiers)
    {
        $this->container['modifiers'] = $modifiers;

        return $this;
    }

    /**
     * Gets map_price
     *
     * @return float
     */
    public function getMapPrice()
    {
        return $this->container['map_price'];
    }

    /**
     * Sets map_price
     *
     * @param float $map_price Minimum Advertised Price.
     *
     * @return $this
     */
    public function setMapPrice($map_price)
    {
        $this->container['map_price'] = $map_price;

        return $this;
    }

    /**
     * Gets option_set_id
     *
     * @return int
     */
    public function getOptionSetId()
    {
        return $this->container['option_set_id'];
    }

    /**
     * Sets option_set_id
     *
     * @param int $option_set_id Indicates that the product is in an Option Set (legacy V2 concept).
     *
     * @return $this
     */
    public function setOptionSetId($option_set_id)
    {
        $this->container['option_set_id'] = $option_set_id;

        return $this;
    }

    /**
     * Gets option_set_display
     *
     * @return string
     */
    public function getOptionSetDisplay()
    {
        return $this->container['option_set_display'];
    }

    /**
     * Sets option_set_display
     *
     * @param string $option_set_display Legacy template setting which controls if the option set shows up to the side of or below the product image and description.
     *
     * @return $this
     */
    public function setOptionSetDisplay($option_set_display)
    {
        $this->container['option_set_display'] = $option_set_display;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return object
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param object $variants variants
     *
     * @return $this
     */
    public function setVariants($variants)
    {
        $this->container['variants'] = $variants;

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
