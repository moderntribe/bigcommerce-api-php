<?php
/**
 * ProductVariantPutProduct1
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
 * ProductVariantPutProduct1 Class Doc Comment
 *
 * @category Class
 * @description The model for a PUT to update variants on a product.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductVariantPutProduct1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'productVariant_Put_Product_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cost_price' => 'double',
'price' => 'double',
'sale_price' => 'double',
'retail_price' => 'double',
'weight' => 'double',
'width' => 'double',
'height' => 'double',
'depth' => 'double',
'is_free_shipping' => 'bool',
'fixed_cost_shipping_price' => 'double',
'purchasing_disabled' => 'bool',
'purchasing_disabled_message' => 'string',
'upc' => 'string',
'inventory_level' => 'int',
'inventory_warning_level' => 'int',
'bin_picking_number' => 'string',
'product_id' => 'int',
'sku' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cost_price' => 'double',
'price' => 'double',
'sale_price' => 'double',
'retail_price' => 'double',
'weight' => 'double',
'width' => 'double',
'height' => 'double',
'depth' => 'double',
'is_free_shipping' => null,
'fixed_cost_shipping_price' => 'double',
'purchasing_disabled' => null,
'purchasing_disabled_message' => null,
'upc' => null,
'inventory_level' => null,
'inventory_warning_level' => null,
'bin_picking_number' => null,
'product_id' => null,
'sku' => null    ];

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
        'cost_price' => 'cost_price',
'price' => 'price',
'sale_price' => 'sale_price',
'retail_price' => 'retail_price',
'weight' => 'weight',
'width' => 'width',
'height' => 'height',
'depth' => 'depth',
'is_free_shipping' => 'is_free_shipping',
'fixed_cost_shipping_price' => 'fixed_cost_shipping_price',
'purchasing_disabled' => 'purchasing_disabled',
'purchasing_disabled_message' => 'purchasing_disabled_message',
'upc' => 'upc',
'inventory_level' => 'inventory_level',
'inventory_warning_level' => 'inventory_warning_level',
'bin_picking_number' => 'bin_picking_number',
'product_id' => 'product_id',
'sku' => 'sku'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost_price' => 'setCostPrice',
'price' => 'setPrice',
'sale_price' => 'setSalePrice',
'retail_price' => 'setRetailPrice',
'weight' => 'setWeight',
'width' => 'setWidth',
'height' => 'setHeight',
'depth' => 'setDepth',
'is_free_shipping' => 'setIsFreeShipping',
'fixed_cost_shipping_price' => 'setFixedCostShippingPrice',
'purchasing_disabled' => 'setPurchasingDisabled',
'purchasing_disabled_message' => 'setPurchasingDisabledMessage',
'upc' => 'setUpc',
'inventory_level' => 'setInventoryLevel',
'inventory_warning_level' => 'setInventoryWarningLevel',
'bin_picking_number' => 'setBinPickingNumber',
'product_id' => 'setProductId',
'sku' => 'setSku'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost_price' => 'getCostPrice',
'price' => 'getPrice',
'sale_price' => 'getSalePrice',
'retail_price' => 'getRetailPrice',
'weight' => 'getWeight',
'width' => 'getWidth',
'height' => 'getHeight',
'depth' => 'getDepth',
'is_free_shipping' => 'getIsFreeShipping',
'fixed_cost_shipping_price' => 'getFixedCostShippingPrice',
'purchasing_disabled' => 'getPurchasingDisabled',
'purchasing_disabled_message' => 'getPurchasingDisabledMessage',
'upc' => 'getUpc',
'inventory_level' => 'getInventoryLevel',
'inventory_warning_level' => 'getInventoryWarningLevel',
'bin_picking_number' => 'getBinPickingNumber',
'product_id' => 'getProductId',
'sku' => 'getSku'    ];

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
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['is_free_shipping'] = isset($data['is_free_shipping']) ? $data['is_free_shipping'] : null;
        $this->container['fixed_cost_shipping_price'] = isset($data['fixed_cost_shipping_price']) ? $data['fixed_cost_shipping_price'] : null;
        $this->container['purchasing_disabled'] = isset($data['purchasing_disabled']) ? $data['purchasing_disabled'] : null;
        $this->container['purchasing_disabled_message'] = isset($data['purchasing_disabled_message']) ? $data['purchasing_disabled_message'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['inventory_level'] = isset($data['inventory_level']) ? $data['inventory_level'] : null;
        $this->container['inventory_warning_level'] = isset($data['inventory_warning_level']) ? $data['inventory_warning_level'] : null;
        $this->container['bin_picking_number'] = isset($data['bin_picking_number']) ? $data['bin_picking_number'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
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
     * Gets cost_price
     *
     * @return double
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param double $cost_price The cost price of the variant. Not affected by Price List prices.
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price This variant's base price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is `null`, the product's default price (set in the Product resource's `price` field) will be used as the base price.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return double
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param double $sale_price This variant's sale price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is null, the product's sale price (set in the Product resource's `price` field) will be used as the sale price.
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return double
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param double $retail_price This variant's retail price on the storefront. If a Price List ID is used, the Price List value will be used. If a Price List ID is not used, and this value is null, the product's retail price (set in the Product resource's `price` field) will be used as the retail price.
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight This variant's base weight on the storefront. If this value is null, the product's default weight (set in the Product resource's weight field) will be used as the base weight.
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Width of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default width (set in the Product resource's `width` field) will be used as the base width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Height of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default height (set in the Product resource's `height` field) will be used as the base height.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return double
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param double $depth Depth of the variant, which can be used when calculating shipping costs. If this value is `null`, the product's default depth (set in the Product resource's `depth` field) will be used as the base depth.
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets is_free_shipping
     *
     * @return bool
     */
    public function getIsFreeShipping()
    {
        return $this->container['is_free_shipping'];
    }

    /**
     * Sets is_free_shipping
     *
     * @param bool $is_free_shipping Flag used to indicate whether the variant has free shipping. If `true`, the shipping cost for the variant will be zero.
     *
     * @return $this
     */
    public function setIsFreeShipping($is_free_shipping)
    {
        $this->container['is_free_shipping'] = $is_free_shipping;

        return $this;
    }

    /**
     * Gets fixed_cost_shipping_price
     *
     * @return double
     */
    public function getFixedCostShippingPrice()
    {
        return $this->container['fixed_cost_shipping_price'];
    }

    /**
     * Sets fixed_cost_shipping_price
     *
     * @param double $fixed_cost_shipping_price A fixed shipping cost for the variant. If defined, this value will be used during checkout instead of normal shipping-cost calculation.
     *
     * @return $this
     */
    public function setFixedCostShippingPrice($fixed_cost_shipping_price)
    {
        $this->container['fixed_cost_shipping_price'] = $fixed_cost_shipping_price;

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
     * @param bool $purchasing_disabled If `true`, this variant will not be purchasable on the storefront.
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
     * @param string $purchasing_disabled_message If `purchasing_disabled` is `true`, this message should show on the storefront when the variant is selected.
     *
     * @return $this
     */
    public function setPurchasingDisabledMessage($purchasing_disabled_message)
    {
        $this->container['purchasing_disabled_message'] = $purchasing_disabled_message;

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
     * @param string $upc The UPC code used in feeds for shopping comparison sites and external channel integrations.
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets inventory_level
     *
     * @return int
     */
    public function getInventoryLevel()
    {
        return $this->container['inventory_level'];
    }

    /**
     * Sets inventory_level
     *
     * @param int $inventory_level Inventory level for the variant, which is used when the product's inventory_tracking is set to `variant`.
     *
     * @return $this
     */
    public function setInventoryLevel($inventory_level)
    {
        $this->container['inventory_level'] = $inventory_level;

        return $this;
    }

    /**
     * Gets inventory_warning_level
     *
     * @return int
     */
    public function getInventoryWarningLevel()
    {
        return $this->container['inventory_warning_level'];
    }

    /**
     * Sets inventory_warning_level
     *
     * @param int $inventory_warning_level When the variant hits this inventory level, it is considered low stock.
     *
     * @return $this
     */
    public function setInventoryWarningLevel($inventory_warning_level)
    {
        $this->container['inventory_warning_level'] = $inventory_warning_level;

        return $this;
    }

    /**
     * Gets bin_picking_number
     *
     * @return string
     */
    public function getBinPickingNumber()
    {
        return $this->container['bin_picking_number'];
    }

    /**
     * Sets bin_picking_number
     *
     * @param string $bin_picking_number Identifies where in a warehouse the variant is located.
     *
     * @return $this
     */
    public function setBinPickingNumber($bin_picking_number)
    {
        $this->container['bin_picking_number'] = $bin_picking_number;

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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

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
