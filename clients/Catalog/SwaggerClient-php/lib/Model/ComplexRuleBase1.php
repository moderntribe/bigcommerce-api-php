<?php
/**
 * ComplexRuleBase1
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
 * ComplexRuleBase1 Class Doc Comment
 *
 * @category Class
 * @description Common ComplexRule properties.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComplexRuleBase1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'complexRule_Base_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'product_id' => 'int',
'sort_order' => 'int',
'enabled' => 'bool',
'stop' => 'bool',
'purchasing_disabled' => 'bool',
'purchasing_disabled_message' => 'string',
'purchasing_hidden' => 'bool',
'image_url' => 'string',
'price_adjuster' => '\BigCommerce\Catalog\Model\Adjuster',
'weight_adjuster' => '\BigCommerce\Catalog\Model\Adjuster',
'conditions' => '\BigCommerce\Catalog\Model\ComplexRuleCondition[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'product_id' => null,
'sort_order' => null,
'enabled' => null,
'stop' => null,
'purchasing_disabled' => null,
'purchasing_disabled_message' => null,
'purchasing_hidden' => null,
'image_url' => null,
'price_adjuster' => null,
'weight_adjuster' => null,
'conditions' => null    ];

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
        'id' => 'id',
'product_id' => 'product_id',
'sort_order' => 'sort_order',
'enabled' => 'enabled',
'stop' => 'stop',
'purchasing_disabled' => 'purchasing_disabled',
'purchasing_disabled_message' => 'purchasing_disabled_message',
'purchasing_hidden' => 'purchasing_hidden',
'image_url' => 'image_url',
'price_adjuster' => 'price_adjuster',
'weight_adjuster' => 'weight_adjuster',
'conditions' => 'conditions'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'product_id' => 'setProductId',
'sort_order' => 'setSortOrder',
'enabled' => 'setEnabled',
'stop' => 'setStop',
'purchasing_disabled' => 'setPurchasingDisabled',
'purchasing_disabled_message' => 'setPurchasingDisabledMessage',
'purchasing_hidden' => 'setPurchasingHidden',
'image_url' => 'setImageUrl',
'price_adjuster' => 'setPriceAdjuster',
'weight_adjuster' => 'setWeightAdjuster',
'conditions' => 'setConditions'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'product_id' => 'getProductId',
'sort_order' => 'getSortOrder',
'enabled' => 'getEnabled',
'stop' => 'getStop',
'purchasing_disabled' => 'getPurchasingDisabled',
'purchasing_disabled_message' => 'getPurchasingDisabledMessage',
'purchasing_hidden' => 'getPurchasingHidden',
'image_url' => 'getImageUrl',
'price_adjuster' => 'getPriceAdjuster',
'weight_adjuster' => 'getWeightAdjuster',
'conditions' => 'getConditions'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['purchasing_disabled'] = isset($data['purchasing_disabled']) ? $data['purchasing_disabled'] : null;
        $this->container['purchasing_disabled_message'] = isset($data['purchasing_disabled_message']) ? $data['purchasing_disabled_message'] : null;
        $this->container['purchasing_hidden'] = isset($data['purchasing_hidden']) ? $data['purchasing_hidden'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['price_adjuster'] = isset($data['price_adjuster']) ? $data['price_adjuster'] : null;
        $this->container['weight_adjuster'] = isset($data['weight_adjuster']) ? $data['weight_adjuster'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
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
     * @param int $id The unique numeric ID of the rule; increments sequentially. Read-Only
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param int $product_id The unique numeric ID of the product with which the rule is associated; increments sequentially.
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sort_order
     *
     * @return int
     */
    public function getSortOrder()
    {
        return $this->container['sort_order'];
    }

    /**
     * Sets sort_order
     *
     * @param int $sort_order The priority to give this rule when making adjustments to the product properties.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Flag for determining whether the rule is to be used when adjusting a product's price, weight, image, or availabilty.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets stop
     *
     * @return bool
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param bool $stop Flag for determining whether other rules should not be applied after this rule has been applied.
     *
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets purchasing_disabled
     *
     * @return bool
     */
    public function getPurchasingDisabled()
    {
        return $this->container['purchasing_disabled'];
    }

    /**
     * Sets purchasing_disabled
     *
     * @param bool $purchasing_disabled Flag for determining whether the rule should disable purchasing of a product when the conditions are applied.
     *
     * @return $this
     */
    public function setPurchasingDisabled($purchasing_disabled)
    {
        $this->container['purchasing_disabled'] = $purchasing_disabled;

        return $this;
    }

    /**
     * Gets purchasing_disabled_message
     *
     * @return string
     */
    public function getPurchasingDisabledMessage()
    {
        return $this->container['purchasing_disabled_message'];
    }

    /**
     * Sets purchasing_disabled_message
     *
     * @param string $purchasing_disabled_message Message displayed on the storefront when a rule disables the purchasing of a product.
     *
     * @return $this
     */
    public function setPurchasingDisabledMessage($purchasing_disabled_message)
    {
        $this->container['purchasing_disabled_message'] = $purchasing_disabled_message;

        return $this;
    }

    /**
     * Gets purchasing_hidden
     *
     * @return bool
     */
    public function getPurchasingHidden()
    {
        return $this->container['purchasing_hidden'];
    }

    /**
     * Sets purchasing_hidden
     *
     * @param bool $purchasing_hidden Flag for determining whether the rule should hide purchasing of a product when the conditions are applied.
     *
     * @return $this
     */
    public function setPurchasingHidden($purchasing_hidden)
    {
        $this->container['purchasing_hidden'] = $purchasing_hidden;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url The URL for an image displayed on the storefront when the conditions are applied. Limit of 8MB per file.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets price_adjuster
     *
     * @return \BigCommerce\Catalog\Model\Adjuster
     */
    public function getPriceAdjuster()
    {
        return $this->container['price_adjuster'];
    }

    /**
     * Sets price_adjuster
     *
     * @param \BigCommerce\Catalog\Model\Adjuster $price_adjuster price_adjuster
     *
     * @return $this
     */
    public function setPriceAdjuster($price_adjuster)
    {
        $this->container['price_adjuster'] = $price_adjuster;

        return $this;
    }

    /**
     * Gets weight_adjuster
     *
     * @return \BigCommerce\Catalog\Model\Adjuster
     */
    public function getWeightAdjuster()
    {
        return $this->container['weight_adjuster'];
    }

    /**
     * Sets weight_adjuster
     *
     * @param \BigCommerce\Catalog\Model\Adjuster $weight_adjuster weight_adjuster
     *
     * @return $this
     */
    public function setWeightAdjuster($weight_adjuster)
    {
        $this->container['weight_adjuster'] = $weight_adjuster;

        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \BigCommerce\Catalog\Model\ComplexRuleCondition[]
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \BigCommerce\Catalog\Model\ComplexRuleCondition[] $conditions conditions
     *
     * @return $this
     */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;

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
