<?php
/**
 * ProductPut
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
 * ProductPut Class Doc Comment
 *
 * @category Class
 * @description The model for a PUT to update a product.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductPut implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'product_Put';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
'type' => 'string',
'sku' => 'string',
'description' => 'string',
'weight' => 'float',
'width' => 'float',
'depth' => 'float',
'height' => 'float',
'price' => 'float',
'cost_price' => 'float',
'retail_price' => 'float',
'sale_price' => 'float',
'tax_class_id' => 'int',
'product_tax_code' => 'string',
'categories' => 'int[]',
'brand_id' => 'int',
'inventory_level' => 'int',
'inventory_warning_level' => 'int',
'inventory_tracking' => 'string',
'fixed_cost_shipping_price' => 'float',
'is_free_shipping' => 'bool',
'is_visible' => 'bool',
'is_featured' => 'bool',
'related_products' => 'int[]',
'warranty' => 'string',
'bin_picking_number' => 'string',
'layout_file' => 'string',
'upc' => 'string',
'search_keywords' => 'string',
'availability' => 'string',
'availability_description' => 'string',
'gift_wrapping_options_type' => 'string',
'gift_wrapping_options_list' => 'int[]',
'sort_order' => 'int',
'condition' => 'string',
'is_condition_shown' => 'bool',
'order_quantity_minimum' => 'int',
'order_quantity_maximum' => 'int',
'page_title' => 'string',
'meta_keywords' => 'string[]',
'meta_description' => 'string',
'view_count' => 'int',
'preorder_release_date' => '\DateTime',
'preorder_message' => 'string',
'is_preorder_only' => 'bool',
'is_price_hidden' => 'bool',
'price_hidden_label' => 'string',
'custom_url' => '\BigCommerce\Catalog\Model\CustomUrlFull1',
'open_graph_type' => 'string',
'open_graph_title' => 'string',
'open_graph_description' => 'string',
'open_graph_use_meta_description' => 'bool',
'open_graph_use_product_name' => 'bool',
'open_graph_use_image' => 'bool',
'brand_name_or_brand_id' => 'string',
'gtin' => 'string',
'mpn' => 'string',
'reviews_rating_sum' => 'int',
'reviews_count' => 'int',
'total_sold' => 'int',
'custom_fields' => 'object[]',
'bulk_pricing_rules' => '\BigCommerce\Catalog\Model\BulkPricingRuleFull1[]',
'images' => 'object[]',
'primary_image' => 'object',
'videos' => 'object[]',
'variants' => '\BigCommerce\Catalog\Model\ProductVariantPutProduct1'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
'type' => null,
'sku' => null,
'description' => null,
'weight' => 'float',
'width' => 'float',
'depth' => 'float',
'height' => 'float',
'price' => 'float',
'cost_price' => 'float',
'retail_price' => 'float',
'sale_price' => 'float',
'tax_class_id' => null,
'product_tax_code' => null,
'categories' => null,
'brand_id' => null,
'inventory_level' => null,
'inventory_warning_level' => null,
'inventory_tracking' => null,
'fixed_cost_shipping_price' => 'float',
'is_free_shipping' => null,
'is_visible' => null,
'is_featured' => null,
'related_products' => null,
'warranty' => null,
'bin_picking_number' => null,
'layout_file' => null,
'upc' => null,
'search_keywords' => null,
'availability' => null,
'availability_description' => null,
'gift_wrapping_options_type' => null,
'gift_wrapping_options_list' => null,
'sort_order' => null,
'condition' => null,
'is_condition_shown' => null,
'order_quantity_minimum' => null,
'order_quantity_maximum' => null,
'page_title' => null,
'meta_keywords' => null,
'meta_description' => null,
'view_count' => null,
'preorder_release_date' => 'date-time',
'preorder_message' => null,
'is_preorder_only' => null,
'is_price_hidden' => null,
'price_hidden_label' => null,
'custom_url' => null,
'open_graph_type' => null,
'open_graph_title' => null,
'open_graph_description' => null,
'open_graph_use_meta_description' => null,
'open_graph_use_product_name' => null,
'open_graph_use_image' => null,
'brand_name_or_brand_id' => null,
'gtin' => null,
'mpn' => null,
'reviews_rating_sum' => null,
'reviews_count' => null,
'total_sold' => null,
'custom_fields' => null,
'bulk_pricing_rules' => null,
'images' => null,
'primary_image' => null,
'videos' => null,
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
        'name' => 'name',
'type' => 'type',
'sku' => 'sku',
'description' => 'description',
'weight' => 'weight',
'width' => 'width',
'depth' => 'depth',
'height' => 'height',
'price' => 'price',
'cost_price' => 'cost_price',
'retail_price' => 'retail_price',
'sale_price' => 'sale_price',
'tax_class_id' => 'tax_class_id',
'product_tax_code' => 'product_tax_code',
'categories' => 'categories',
'brand_id' => 'brand_id',
'inventory_level' => 'inventory_level',
'inventory_warning_level' => 'inventory_warning_level',
'inventory_tracking' => 'inventory_tracking',
'fixed_cost_shipping_price' => 'fixed_cost_shipping_price',
'is_free_shipping' => 'is_free_shipping',
'is_visible' => 'is_visible',
'is_featured' => 'is_featured',
'related_products' => 'related_products',
'warranty' => 'warranty',
'bin_picking_number' => 'bin_picking_number',
'layout_file' => 'layout_file',
'upc' => 'upc',
'search_keywords' => 'search_keywords',
'availability' => 'availability',
'availability_description' => 'availability_description',
'gift_wrapping_options_type' => 'gift_wrapping_options_type',
'gift_wrapping_options_list' => 'gift_wrapping_options_list',
'sort_order' => 'sort_order',
'condition' => 'condition',
'is_condition_shown' => 'is_condition_shown',
'order_quantity_minimum' => 'order_quantity_minimum',
'order_quantity_maximum' => 'order_quantity_maximum',
'page_title' => 'page_title',
'meta_keywords' => 'meta_keywords',
'meta_description' => 'meta_description',
'view_count' => 'view_count',
'preorder_release_date' => 'preorder_release_date',
'preorder_message' => 'preorder_message',
'is_preorder_only' => 'is_preorder_only',
'is_price_hidden' => 'is_price_hidden',
'price_hidden_label' => 'price_hidden_label',
'custom_url' => 'custom_url',
'open_graph_type' => 'open_graph_type',
'open_graph_title' => 'open_graph_title',
'open_graph_description' => 'open_graph_description',
'open_graph_use_meta_description' => 'open_graph_use_meta_description',
'open_graph_use_product_name' => 'open_graph_use_product_name',
'open_graph_use_image' => 'open_graph_use_image',
'brand_name_or_brand_id' => 'brand_name or brand_id',
'gtin' => 'gtin',
'mpn' => 'mpn',
'reviews_rating_sum' => 'reviews_rating_sum',
'reviews_count' => 'reviews_count',
'total_sold' => 'total_sold',
'custom_fields' => 'custom_fields',
'bulk_pricing_rules' => 'bulk_pricing_rules',
'images' => 'images',
'primary_image' => 'primary_image',
'videos' => 'videos',
'variants' => 'variants'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'type' => 'setType',
'sku' => 'setSku',
'description' => 'setDescription',
'weight' => 'setWeight',
'width' => 'setWidth',
'depth' => 'setDepth',
'height' => 'setHeight',
'price' => 'setPrice',
'cost_price' => 'setCostPrice',
'retail_price' => 'setRetailPrice',
'sale_price' => 'setSalePrice',
'tax_class_id' => 'setTaxClassId',
'product_tax_code' => 'setProductTaxCode',
'categories' => 'setCategories',
'brand_id' => 'setBrandId',
'inventory_level' => 'setInventoryLevel',
'inventory_warning_level' => 'setInventoryWarningLevel',
'inventory_tracking' => 'setInventoryTracking',
'fixed_cost_shipping_price' => 'setFixedCostShippingPrice',
'is_free_shipping' => 'setIsFreeShipping',
'is_visible' => 'setIsVisible',
'is_featured' => 'setIsFeatured',
'related_products' => 'setRelatedProducts',
'warranty' => 'setWarranty',
'bin_picking_number' => 'setBinPickingNumber',
'layout_file' => 'setLayoutFile',
'upc' => 'setUpc',
'search_keywords' => 'setSearchKeywords',
'availability' => 'setAvailability',
'availability_description' => 'setAvailabilityDescription',
'gift_wrapping_options_type' => 'setGiftWrappingOptionsType',
'gift_wrapping_options_list' => 'setGiftWrappingOptionsList',
'sort_order' => 'setSortOrder',
'condition' => 'setCondition',
'is_condition_shown' => 'setIsConditionShown',
'order_quantity_minimum' => 'setOrderQuantityMinimum',
'order_quantity_maximum' => 'setOrderQuantityMaximum',
'page_title' => 'setPageTitle',
'meta_keywords' => 'setMetaKeywords',
'meta_description' => 'setMetaDescription',
'view_count' => 'setViewCount',
'preorder_release_date' => 'setPreorderReleaseDate',
'preorder_message' => 'setPreorderMessage',
'is_preorder_only' => 'setIsPreorderOnly',
'is_price_hidden' => 'setIsPriceHidden',
'price_hidden_label' => 'setPriceHiddenLabel',
'custom_url' => 'setCustomUrl',
'open_graph_type' => 'setOpenGraphType',
'open_graph_title' => 'setOpenGraphTitle',
'open_graph_description' => 'setOpenGraphDescription',
'open_graph_use_meta_description' => 'setOpenGraphUseMetaDescription',
'open_graph_use_product_name' => 'setOpenGraphUseProductName',
'open_graph_use_image' => 'setOpenGraphUseImage',
'brand_name_or_brand_id' => 'setBrandNameOrBrandId',
'gtin' => 'setGtin',
'mpn' => 'setMpn',
'reviews_rating_sum' => 'setReviewsRatingSum',
'reviews_count' => 'setReviewsCount',
'total_sold' => 'setTotalSold',
'custom_fields' => 'setCustomFields',
'bulk_pricing_rules' => 'setBulkPricingRules',
'images' => 'setImages',
'primary_image' => 'setPrimaryImage',
'videos' => 'setVideos',
'variants' => 'setVariants'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'type' => 'getType',
'sku' => 'getSku',
'description' => 'getDescription',
'weight' => 'getWeight',
'width' => 'getWidth',
'depth' => 'getDepth',
'height' => 'getHeight',
'price' => 'getPrice',
'cost_price' => 'getCostPrice',
'retail_price' => 'getRetailPrice',
'sale_price' => 'getSalePrice',
'tax_class_id' => 'getTaxClassId',
'product_tax_code' => 'getProductTaxCode',
'categories' => 'getCategories',
'brand_id' => 'getBrandId',
'inventory_level' => 'getInventoryLevel',
'inventory_warning_level' => 'getInventoryWarningLevel',
'inventory_tracking' => 'getInventoryTracking',
'fixed_cost_shipping_price' => 'getFixedCostShippingPrice',
'is_free_shipping' => 'getIsFreeShipping',
'is_visible' => 'getIsVisible',
'is_featured' => 'getIsFeatured',
'related_products' => 'getRelatedProducts',
'warranty' => 'getWarranty',
'bin_picking_number' => 'getBinPickingNumber',
'layout_file' => 'getLayoutFile',
'upc' => 'getUpc',
'search_keywords' => 'getSearchKeywords',
'availability' => 'getAvailability',
'availability_description' => 'getAvailabilityDescription',
'gift_wrapping_options_type' => 'getGiftWrappingOptionsType',
'gift_wrapping_options_list' => 'getGiftWrappingOptionsList',
'sort_order' => 'getSortOrder',
'condition' => 'getCondition',
'is_condition_shown' => 'getIsConditionShown',
'order_quantity_minimum' => 'getOrderQuantityMinimum',
'order_quantity_maximum' => 'getOrderQuantityMaximum',
'page_title' => 'getPageTitle',
'meta_keywords' => 'getMetaKeywords',
'meta_description' => 'getMetaDescription',
'view_count' => 'getViewCount',
'preorder_release_date' => 'getPreorderReleaseDate',
'preorder_message' => 'getPreorderMessage',
'is_preorder_only' => 'getIsPreorderOnly',
'is_price_hidden' => 'getIsPriceHidden',
'price_hidden_label' => 'getPriceHiddenLabel',
'custom_url' => 'getCustomUrl',
'open_graph_type' => 'getOpenGraphType',
'open_graph_title' => 'getOpenGraphTitle',
'open_graph_description' => 'getOpenGraphDescription',
'open_graph_use_meta_description' => 'getOpenGraphUseMetaDescription',
'open_graph_use_product_name' => 'getOpenGraphUseProductName',
'open_graph_use_image' => 'getOpenGraphUseImage',
'brand_name_or_brand_id' => 'getBrandNameOrBrandId',
'gtin' => 'getGtin',
'mpn' => 'getMpn',
'reviews_rating_sum' => 'getReviewsRatingSum',
'reviews_count' => 'getReviewsCount',
'total_sold' => 'getTotalSold',
'custom_fields' => 'getCustomFields',
'bulk_pricing_rules' => 'getBulkPricingRules',
'images' => 'getImages',
'primary_image' => 'getPrimaryImage',
'videos' => 'getVideos',
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

    const TYPE_PHYSICAL = 'physical';
const TYPE_DIGITAL = 'digital';
const INVENTORY_TRACKING_NONE = 'none';
const INVENTORY_TRACKING_PRODUCT = 'product';
const INVENTORY_TRACKING_VARIANT = 'variant';
const AVAILABILITY_AVAILABLE = 'available';
const AVAILABILITY_DISABLED = 'disabled';
const AVAILABILITY_PREORDER = 'preorder';
const GIFT_WRAPPING_OPTIONS_TYPE_ANY = 'any';
const GIFT_WRAPPING_OPTIONS_TYPE_NONE = 'none';
const GIFT_WRAPPING_OPTIONS_TYPE__LIST = 'list';
const CONDITION__NEW = 'New';
const CONDITION_USED = 'Used';
const CONDITION_REFURBISHED = 'Refurbished';
const OPEN_GRAPH_TYPE_PRODUCT = 'product';
const OPEN_GRAPH_TYPE_ALBUM = 'album';
const OPEN_GRAPH_TYPE_BOOK = 'book';
const OPEN_GRAPH_TYPE_DRINK = 'drink';
const OPEN_GRAPH_TYPE_FOOD = 'food';
const OPEN_GRAPH_TYPE_GAME = 'game';
const OPEN_GRAPH_TYPE_MOVIE = 'movie';
const OPEN_GRAPH_TYPE_SONG = 'song';
const OPEN_GRAPH_TYPE_TV_SHOW = 'tv_show';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PHYSICAL,
self::TYPE_DIGITAL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInventoryTrackingAllowableValues()
    {
        return [
            self::INVENTORY_TRACKING_NONE,
self::INVENTORY_TRACKING_PRODUCT,
self::INVENTORY_TRACKING_VARIANT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAvailabilityAllowableValues()
    {
        return [
            self::AVAILABILITY_AVAILABLE,
self::AVAILABILITY_DISABLED,
self::AVAILABILITY_PREORDER,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGiftWrappingOptionsTypeAllowableValues()
    {
        return [
            self::GIFT_WRAPPING_OPTIONS_TYPE_ANY,
self::GIFT_WRAPPING_OPTIONS_TYPE_NONE,
self::GIFT_WRAPPING_OPTIONS_TYPE__LIST,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
self::CONDITION_USED,
self::CONDITION_REFURBISHED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOpenGraphTypeAllowableValues()
    {
        return [
            self::OPEN_GRAPH_TYPE_PRODUCT,
self::OPEN_GRAPH_TYPE_ALBUM,
self::OPEN_GRAPH_TYPE_BOOK,
self::OPEN_GRAPH_TYPE_DRINK,
self::OPEN_GRAPH_TYPE_FOOD,
self::OPEN_GRAPH_TYPE_GAME,
self::OPEN_GRAPH_TYPE_MOVIE,
self::OPEN_GRAPH_TYPE_SONG,
self::OPEN_GRAPH_TYPE_TV_SHOW,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null;
        $this->container['sale_price'] = isset($data['sale_price']) ? $data['sale_price'] : null;
        $this->container['tax_class_id'] = isset($data['tax_class_id']) ? $data['tax_class_id'] : null;
        $this->container['product_tax_code'] = isset($data['product_tax_code']) ? $data['product_tax_code'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['inventory_level'] = isset($data['inventory_level']) ? $data['inventory_level'] : null;
        $this->container['inventory_warning_level'] = isset($data['inventory_warning_level']) ? $data['inventory_warning_level'] : null;
        $this->container['inventory_tracking'] = isset($data['inventory_tracking']) ? $data['inventory_tracking'] : null;
        $this->container['fixed_cost_shipping_price'] = isset($data['fixed_cost_shipping_price']) ? $data['fixed_cost_shipping_price'] : null;
        $this->container['is_free_shipping'] = isset($data['is_free_shipping']) ? $data['is_free_shipping'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['is_featured'] = isset($data['is_featured']) ? $data['is_featured'] : null;
        $this->container['related_products'] = isset($data['related_products']) ? $data['related_products'] : null;
        $this->container['warranty'] = isset($data['warranty']) ? $data['warranty'] : null;
        $this->container['bin_picking_number'] = isset($data['bin_picking_number']) ? $data['bin_picking_number'] : null;
        $this->container['layout_file'] = isset($data['layout_file']) ? $data['layout_file'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['search_keywords'] = isset($data['search_keywords']) ? $data['search_keywords'] : null;
        $this->container['availability'] = isset($data['availability']) ? $data['availability'] : null;
        $this->container['availability_description'] = isset($data['availability_description']) ? $data['availability_description'] : null;
        $this->container['gift_wrapping_options_type'] = isset($data['gift_wrapping_options_type']) ? $data['gift_wrapping_options_type'] : null;
        $this->container['gift_wrapping_options_list'] = isset($data['gift_wrapping_options_list']) ? $data['gift_wrapping_options_list'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['is_condition_shown'] = isset($data['is_condition_shown']) ? $data['is_condition_shown'] : null;
        $this->container['order_quantity_minimum'] = isset($data['order_quantity_minimum']) ? $data['order_quantity_minimum'] : null;
        $this->container['order_quantity_maximum'] = isset($data['order_quantity_maximum']) ? $data['order_quantity_maximum'] : null;
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['view_count'] = isset($data['view_count']) ? $data['view_count'] : null;
        $this->container['preorder_release_date'] = isset($data['preorder_release_date']) ? $data['preorder_release_date'] : null;
        $this->container['preorder_message'] = isset($data['preorder_message']) ? $data['preorder_message'] : null;
        $this->container['is_preorder_only'] = isset($data['is_preorder_only']) ? $data['is_preorder_only'] : null;
        $this->container['is_price_hidden'] = isset($data['is_price_hidden']) ? $data['is_price_hidden'] : null;
        $this->container['price_hidden_label'] = isset($data['price_hidden_label']) ? $data['price_hidden_label'] : null;
        $this->container['custom_url'] = isset($data['custom_url']) ? $data['custom_url'] : null;
        $this->container['open_graph_type'] = isset($data['open_graph_type']) ? $data['open_graph_type'] : null;
        $this->container['open_graph_title'] = isset($data['open_graph_title']) ? $data['open_graph_title'] : null;
        $this->container['open_graph_description'] = isset($data['open_graph_description']) ? $data['open_graph_description'] : null;
        $this->container['open_graph_use_meta_description'] = isset($data['open_graph_use_meta_description']) ? $data['open_graph_use_meta_description'] : null;
        $this->container['open_graph_use_product_name'] = isset($data['open_graph_use_product_name']) ? $data['open_graph_use_product_name'] : null;
        $this->container['open_graph_use_image'] = isset($data['open_graph_use_image']) ? $data['open_graph_use_image'] : null;
        $this->container['brand_name_or_brand_id'] = isset($data['brand_name_or_brand_id']) ? $data['brand_name_or_brand_id'] : null;
        $this->container['gtin'] = isset($data['gtin']) ? $data['gtin'] : null;
        $this->container['mpn'] = isset($data['mpn']) ? $data['mpn'] : null;
        $this->container['reviews_rating_sum'] = isset($data['reviews_rating_sum']) ? $data['reviews_rating_sum'] : null;
        $this->container['reviews_count'] = isset($data['reviews_count']) ? $data['reviews_count'] : null;
        $this->container['total_sold'] = isset($data['total_sold']) ? $data['total_sold'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['bulk_pricing_rules'] = isset($data['bulk_pricing_rules']) ? $data['bulk_pricing_rules'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['primary_image'] = isset($data['primary_image']) ? $data['primary_image'] : null;
        $this->container['videos'] = isset($data['videos']) ? $data['videos'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        $allowedValues = $this->getInventoryTrackingAllowableValues();
        if (!is_null($this->container['inventory_tracking']) && !in_array($this->container['inventory_tracking'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'inventory_tracking', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($this->container['availability']) && !in_array($this->container['availability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'availability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGiftWrappingOptionsTypeAllowableValues();
        if (!is_null($this->container['gift_wrapping_options_type']) && !in_array($this->container['gift_wrapping_options_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gift_wrapping_options_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'condition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOpenGraphTypeAllowableValues();
        if (!is_null($this->container['open_graph_type']) && !in_array($this->container['open_graph_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'open_graph_type', must be one of '%s'",
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The product name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The product type. One of: `physical` - a physical stock unit, `digital` - a digital download.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param string $sku User defined product code/stock keeping unit (SKU).
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description The product description, which can include HTML formatting.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param float $weight Weight of the product, which can be used when calculating shipping costs. This is based on the unit set on the store
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
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width Width of the product, which can be used when calculating shipping costs.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets depth
     *
     * @return float
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
     * Sets depth
     *
     * @param float $depth Depth of the product, which can be used when calculating shipping costs.
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height Height of the product, which can be used when calculating shipping costs.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price The price of the product. The price should include or exclude tax, based on the store settings.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return float
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param float $cost_price The cost price of the product. Stored for reference only; it is not used or displayed anywhere on the store.
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return float
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param float $retail_price The retail cost of the product. If entered, the retail cost price will be shown on the product page.
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float $sale_price If entered, the sale price will be used instead of value in the price field when calculating the product's cost.
     *
     * @return $this
     */
    public function setSalePrice($sale_price)
    {
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets tax_class_id
     *
     * @return int
     */
    public function getTaxClassId()
    {
        return $this->container['tax_class_id'];
    }

    /**
     * Sets tax_class_id
     *
     * @param int $tax_class_id The ID of the tax class applied to the product. (NOTE: Value ignored if automatic tax is enabled.)
     *
     * @return $this
     */
    public function setTaxClassId($tax_class_id)
    {
        $this->container['tax_class_id'] = $tax_class_id;

        return $this;
    }

    /**
     * Gets product_tax_code
     *
     * @return string
     */
    public function getProductTaxCode()
    {
        return $this->container['product_tax_code'];
    }

    /**
     * Sets product_tax_code
     *
     * @param string $product_tax_code Accepts AvaTax System Tax Codes, which identify products and services that fall into special sales-tax categories. By using these codes, merchants who subscribe to BigCommerce's Avalara Premium integration can calculate sales taxes more accurately. Stores without Avalara Premium will ignore the code when calculating sales tax. Do not pass more than one code. The codes are case-sensitive. For details, please see Avalara's documentation.
     *
     * @return $this
     */
    public function setProductTaxCode($product_tax_code)
    {
        $this->container['product_tax_code'] = $product_tax_code;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return int[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param int[] $categories An array of IDs for the categories to which this product belongs. When updating a product, if an array of categories is supplied, all product categories will be overwritten. Does not accept more than 1,000 ID values.
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets brand_id
     *
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     *
     * @param int $brand_id A product can be added to an existing brand during a product /PUT or /POST.
     *
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

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
     * @param int $inventory_level Current inventory level of the product. Simple inventory tracking must be enabled (See the `inventory_tracking` field) for this to take any effect.
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
     * @param int $inventory_warning_level Inventory warning level for the product. When the product's inventory level drops below the warning level, the store owner will be informed. Simple inventory tracking must be enabled (see the `inventory_tracking` field) for this to take any effect.
     *
     * @return $this
     */
    public function setInventoryWarningLevel($inventory_warning_level)
    {
        $this->container['inventory_warning_level'] = $inventory_warning_level;

        return $this;
    }

    /**
     * Gets inventory_tracking
     *
     * @return string
     */
    public function getInventoryTracking()
    {
        return $this->container['inventory_tracking'];
    }

    /**
     * Sets inventory_tracking
     *
     * @param string $inventory_tracking The type of inventory tracking for the product. Values are: `none` - inventory levels will not be tracked; `product` - inventory levels will be tracked using the `inventory_level` and `inventory_warning_level` fields; `variant` - inventory levels will be tracked based on variants, which maintain their own warning levels and inventory levels.
     *
     * @return $this
     */
    public function setInventoryTracking($inventory_tracking)
    {
        $allowedValues = $this->getInventoryTrackingAllowableValues();
        if (!is_null($inventory_tracking) && !in_array($inventory_tracking, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'inventory_tracking', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['inventory_tracking'] = $inventory_tracking;

        return $this;
    }

    /**
     * Gets fixed_cost_shipping_price
     *
     * @return float
     */
    public function getFixedCostShippingPrice()
    {
        return $this->container['fixed_cost_shipping_price'];
    }

    /**
     * Sets fixed_cost_shipping_price
     *
     * @param float $fixed_cost_shipping_price A fixed shipping cost for the product. If defined, this value will be used during checkout instead of normal shipping-cost calculation.
     *
     * @return $this
     */
    public function setFixedCostShippingPrice($fixed_cost_shipping_price)
    {
        $this->container['fixed_cost_shipping_price'] = $fixed_cost_shipping_price;

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
     * @param bool $is_free_shipping Flag used to indicate whether the product has free shipping. If `true`, the shipping cost for the product will be zero.
     *
     * @return $this
     */
    public function setIsFreeShipping($is_free_shipping)
    {
        $this->container['is_free_shipping'] = $is_free_shipping;

        return $this;
    }

    /**
     * Gets is_visible
     *
     * @return bool
     */
    public function getIsVisible()
    {
        return $this->container['is_visible'];
    }

    /**
     * Sets is_visible
     *
     * @param bool $is_visible Flag to determine whether the product should be displayed to customers browsing the store. If `true`, the product will be displayed. If `false`, the product will be hidden from view.
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets is_featured
     *
     * @return bool
     */
    public function getIsFeatured()
    {
        return $this->container['is_featured'];
    }

    /**
     * Sets is_featured
     *
     * @param bool $is_featured Flag to determine whether the product should be included in the `featured products` panel when viewing the store.
     *
     * @return $this
     */
    public function setIsFeatured($is_featured)
    {
        $this->container['is_featured'] = $is_featured;

        return $this;
    }

    /**
     * Gets related_products
     *
     * @return int[]
     */
    public function getRelatedProducts()
    {
        return $this->container['related_products'];
    }

    /**
     * Sets related_products
     *
     * @param int[] $related_products An array of IDs for the related products.
     *
     * @return $this
     */
    public function setRelatedProducts($related_products)
    {
        $this->container['related_products'] = $related_products;

        return $this;
    }

    /**
     * Gets warranty
     *
     * @return string
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty
     *
     * @param string $warranty Warranty information displayed on the product page. Can include HTML formatting.
     *
     * @return $this
     */
    public function setWarranty($warranty)
    {
        $this->container['warranty'] = $warranty;

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
     * @param string $bin_picking_number The BIN picking number for the product.
     *
     * @return $this
     */
    public function setBinPickingNumber($bin_picking_number)
    {
        $this->container['bin_picking_number'] = $bin_picking_number;

        return $this;
    }

    /**
     * Gets layout_file
     *
     * @return string
     */
    public function getLayoutFile()
    {
        return $this->container['layout_file'];
    }

    /**
     * Sets layout_file
     *
     * @param string $layout_file The layout template file used to render this product category. This field is writable only for stores with a Blueprint theme applied.
     *
     * @return $this
     */
    public function setLayoutFile($layout_file)
    {
        $this->container['layout_file'] = $layout_file;

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
     * @param string $upc The product UPC code, which is used in feeds for shopping comparison sites and external channel integrations.
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets search_keywords
     *
     * @return string
     */
    public function getSearchKeywords()
    {
        return $this->container['search_keywords'];
    }

    /**
     * Sets search_keywords
     *
     * @param string $search_keywords A comma-separated list of keywords that can be used to locate the product when searching the store.
     *
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

        return $this;
    }

    /**
     * Gets availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param string $availability Availability of the product. Availability options are: `available` - the product can be purchased on the storefront; `disabled` - the product is listed in the storefront, but cannot be purchased; `preorder` - the product is listed for pre-orders.
     *
     * @return $this
     */
    public function setAvailability($availability)
    {
        $allowedValues = $this->getAvailabilityAllowableValues();
        if (!is_null($availability) && !in_array($availability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'availability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets availability_description
     *
     * @return string
     */
    public function getAvailabilityDescription()
    {
        return $this->container['availability_description'];
    }

    /**
     * Sets availability_description
     *
     * @param string $availability_description Availability text displayed on the checkout page, under the product title. Tells the customer how long it will normally take to ship this product, such as: 'Usually ships in 24 hours.'
     *
     * @return $this
     */
    public function setAvailabilityDescription($availability_description)
    {
        $this->container['availability_description'] = $availability_description;

        return $this;
    }

    /**
     * Gets gift_wrapping_options_type
     *
     * @return string
     */
    public function getGiftWrappingOptionsType()
    {
        return $this->container['gift_wrapping_options_type'];
    }

    /**
     * Sets gift_wrapping_options_type
     *
     * @param string $gift_wrapping_options_type Type of gift-wrapping options. Values: `any` - allow any gift-wrapping options in the store; `none` - disallow gift-wrapping on the product; `list` – provide a list of IDs in the `gift_wrapping_options_list` field.
     *
     * @return $this
     */
    public function setGiftWrappingOptionsType($gift_wrapping_options_type)
    {
        $allowedValues = $this->getGiftWrappingOptionsTypeAllowableValues();
        if (!is_null($gift_wrapping_options_type) && !in_array($gift_wrapping_options_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gift_wrapping_options_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gift_wrapping_options_type'] = $gift_wrapping_options_type;

        return $this;
    }

    /**
     * Gets gift_wrapping_options_list
     *
     * @return int[]
     */
    public function getGiftWrappingOptionsList()
    {
        return $this->container['gift_wrapping_options_list'];
    }

    /**
     * Sets gift_wrapping_options_list
     *
     * @param int[] $gift_wrapping_options_list A list of gift-wrapping option IDs.
     *
     * @return $this
     */
    public function setGiftWrappingOptionsList($gift_wrapping_options_list)
    {
        $this->container['gift_wrapping_options_list'] = $gift_wrapping_options_list;

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
     * @param int $sort_order Priority to give this product when included in product lists on category pages and in search results. Lower integers will place the product closer to the top of the results.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition The product condition. Will be shown on the product page if the `is_condition_shown` field's value is `true`. Possible values: `New`, `Used`, `Refurbished`.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($condition) && !in_array($condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'condition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets is_condition_shown
     *
     * @return bool
     */
    public function getIsConditionShown()
    {
        return $this->container['is_condition_shown'];
    }

    /**
     * Sets is_condition_shown
     *
     * @param bool $is_condition_shown Flag used to determine whether the product condition is shown to the customer on the product page.
     *
     * @return $this
     */
    public function setIsConditionShown($is_condition_shown)
    {
        $this->container['is_condition_shown'] = $is_condition_shown;

        return $this;
    }

    /**
     * Gets order_quantity_minimum
     *
     * @return int
     */
    public function getOrderQuantityMinimum()
    {
        return $this->container['order_quantity_minimum'];
    }

    /**
     * Sets order_quantity_minimum
     *
     * @param int $order_quantity_minimum The minimum quantity an order must contain, to be eligible to purchase this product.
     *
     * @return $this
     */
    public function setOrderQuantityMinimum($order_quantity_minimum)
    {
        $this->container['order_quantity_minimum'] = $order_quantity_minimum;

        return $this;
    }

    /**
     * Gets order_quantity_maximum
     *
     * @return int
     */
    public function getOrderQuantityMaximum()
    {
        return $this->container['order_quantity_maximum'];
    }

    /**
     * Sets order_quantity_maximum
     *
     * @param int $order_quantity_maximum The maximum quantity an order can contain when purchasing the product.
     *
     * @return $this
     */
    public function setOrderQuantityMaximum($order_quantity_maximum)
    {
        $this->container['order_quantity_maximum'] = $order_quantity_maximum;

        return $this;
    }

    /**
     * Gets page_title
     *
     * @return string
     */
    public function getPageTitle()
    {
        return $this->container['page_title'];
    }

    /**
     * Sets page_title
     *
     * @param string $page_title Custom title for the product page. If not defined, the product name will be used as the meta title.
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        $this->container['page_title'] = $page_title;

        return $this;
    }

    /**
     * Gets meta_keywords
     *
     * @return string[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     *
     * @param string[] $meta_keywords Custom meta keywords for the product page. If not defined, the store's default keywords will be used.
     *
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_description
     *
     * @return string
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     *
     * @param string $meta_description Custom meta description for the product page. If not defined, the store's default meta description will be used.
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets view_count
     *
     * @return int
     */
    public function getViewCount()
    {
        return $this->container['view_count'];
    }

    /**
     * Sets view_count
     *
     * @param int $view_count The number of times the product has been viewed.
     *
     * @return $this
     */
    public function setViewCount($view_count)
    {
        $this->container['view_count'] = $view_count;

        return $this;
    }

    /**
     * Gets preorder_release_date
     *
     * @return \DateTime
     */
    public function getPreorderReleaseDate()
    {
        return $this->container['preorder_release_date'];
    }

    /**
     * Sets preorder_release_date
     *
     * @param \DateTime $preorder_release_date Pre-order release date. See the `availability` field for details on setting a product's availability to accept pre-orders.
     *
     * @return $this
     */
    public function setPreorderReleaseDate($preorder_release_date)
    {
        $this->container['preorder_release_date'] = $preorder_release_date;

        return $this;
    }

    /**
     * Gets preorder_message
     *
     * @return string
     */
    public function getPreorderMessage()
    {
        return $this->container['preorder_message'];
    }

    /**
     * Sets preorder_message
     *
     * @param string $preorder_message Custom expected-date message to display on the product page. If undefined, the message defaults to the storewide setting. Can contain the `%%DATE%%` placeholder, which will be substituted for the release date.
     *
     * @return $this
     */
    public function setPreorderMessage($preorder_message)
    {
        $this->container['preorder_message'] = $preorder_message;

        return $this;
    }

    /**
     * Gets is_preorder_only
     *
     * @return bool
     */
    public function getIsPreorderOnly()
    {
        return $this->container['is_preorder_only'];
    }

    /**
     * Sets is_preorder_only
     *
     * @param bool $is_preorder_only If set to true then on the preorder release date the preorder status will automatically be removed.   If set to false, then on the release date the preorder status **will not** be removed. It will need to be changed manually either in the control panel or using the API. Using the API set `availability` to `available`.
     *
     * @return $this
     */
    public function setIsPreorderOnly($is_preorder_only)
    {
        $this->container['is_preorder_only'] = $is_preorder_only;

        return $this;
    }

    /**
     * Gets is_price_hidden
     *
     * @return bool
     */
    public function getIsPriceHidden()
    {
        return $this->container['is_price_hidden'];
    }

    /**
     * Sets is_price_hidden
     *
     * @param bool $is_price_hidden False by default, indicating that this product's price should be shown on the product page. If set to `true`, the price is hidden. (NOTE: To successfully set `is_price_hidden` to `true`, the `availability` value must be `disabled`.)
     *
     * @return $this
     */
    public function setIsPriceHidden($is_price_hidden)
    {
        $this->container['is_price_hidden'] = $is_price_hidden;

        return $this;
    }

    /**
     * Gets price_hidden_label
     *
     * @return string
     */
    public function getPriceHiddenLabel()
    {
        return $this->container['price_hidden_label'];
    }

    /**
     * Sets price_hidden_label
     *
     * @param string $price_hidden_label By default, an empty string. If `is_price_hidden` is `true`, the value of `price_hidden_label` is displayed instead of the price. (NOTE: To successfully set a non-empty string value with `is_price_hidden` set to `true`, the `availability` value must be `disabled`.)
     *
     * @return $this
     */
    public function setPriceHiddenLabel($price_hidden_label)
    {
        $this->container['price_hidden_label'] = $price_hidden_label;

        return $this;
    }

    /**
     * Gets custom_url
     *
     * @return \BigCommerce\Catalog\Model\CustomUrlFull1
     */
    public function getCustomUrl()
    {
        return $this->container['custom_url'];
    }

    /**
     * Sets custom_url
     *
     * @param \BigCommerce\Catalog\Model\CustomUrlFull1 $custom_url custom_url
     *
     * @return $this
     */
    public function setCustomUrl($custom_url)
    {
        $this->container['custom_url'] = $custom_url;

        return $this;
    }

    /**
     * Gets open_graph_type
     *
     * @return string
     */
    public function getOpenGraphType()
    {
        return $this->container['open_graph_type'];
    }

    /**
     * Sets open_graph_type
     *
     * @param string $open_graph_type Type of product, defaults to `product`.
     *
     * @return $this
     */
    public function setOpenGraphType($open_graph_type)
    {
        $allowedValues = $this->getOpenGraphTypeAllowableValues();
        if (!is_null($open_graph_type) && !in_array($open_graph_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'open_graph_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['open_graph_type'] = $open_graph_type;

        return $this;
    }

    /**
     * Gets open_graph_title
     *
     * @return string
     */
    public function getOpenGraphTitle()
    {
        return $this->container['open_graph_title'];
    }

    /**
     * Sets open_graph_title
     *
     * @param string $open_graph_title Title of the product, if not specified the product name will be used instead.
     *
     * @return $this
     */
    public function setOpenGraphTitle($open_graph_title)
    {
        $this->container['open_graph_title'] = $open_graph_title;

        return $this;
    }

    /**
     * Gets open_graph_description
     *
     * @return string
     */
    public function getOpenGraphDescription()
    {
        return $this->container['open_graph_description'];
    }

    /**
     * Sets open_graph_description
     *
     * @param string $open_graph_description Description to use for the product, if not specified then the meta_description will be used instead.
     *
     * @return $this
     */
    public function setOpenGraphDescription($open_graph_description)
    {
        $this->container['open_graph_description'] = $open_graph_description;

        return $this;
    }

    /**
     * Gets open_graph_use_meta_description
     *
     * @return bool
     */
    public function getOpenGraphUseMetaDescription()
    {
        return $this->container['open_graph_use_meta_description'];
    }

    /**
     * Sets open_graph_use_meta_description
     *
     * @param bool $open_graph_use_meta_description Flag to determine if product description or open graph description is used.
     *
     * @return $this
     */
    public function setOpenGraphUseMetaDescription($open_graph_use_meta_description)
    {
        $this->container['open_graph_use_meta_description'] = $open_graph_use_meta_description;

        return $this;
    }

    /**
     * Gets open_graph_use_product_name
     *
     * @return bool
     */
    public function getOpenGraphUseProductName()
    {
        return $this->container['open_graph_use_product_name'];
    }

    /**
     * Sets open_graph_use_product_name
     *
     * @param bool $open_graph_use_product_name Flag to determine if product name or open graph name is used.
     *
     * @return $this
     */
    public function setOpenGraphUseProductName($open_graph_use_product_name)
    {
        $this->container['open_graph_use_product_name'] = $open_graph_use_product_name;

        return $this;
    }

    /**
     * Gets open_graph_use_image
     *
     * @return bool
     */
    public function getOpenGraphUseImage()
    {
        return $this->container['open_graph_use_image'];
    }

    /**
     * Sets open_graph_use_image
     *
     * @param bool $open_graph_use_image Flag to determine if product image or open graph image is used.
     *
     * @return $this
     */
    public function setOpenGraphUseImage($open_graph_use_image)
    {
        $this->container['open_graph_use_image'] = $open_graph_use_image;

        return $this;
    }

    /**
     * Gets brand_name_or_brand_id
     *
     * @return string
     */
    public function getBrandNameOrBrandId()
    {
        return $this->container['brand_name_or_brand_id'];
    }

    /**
     * Sets brand_name_or_brand_id
     *
     * @param string $brand_name_or_brand_id The brand can be created during a product PUT or POST request. If the brand already exists then the product will be added. If not the brand will be created and the product added. If using `brand_name` it performs a fuzzy match and adds the brand. eg. \"Common Good\" and \"Common good\" are the same. Brand name does not return as part of a product response. Only the `brand_id`.
     *
     * @return $this
     */
    public function setBrandNameOrBrandId($brand_name_or_brand_id)
    {
        $this->container['brand_name_or_brand_id'] = $brand_name_or_brand_id;

        return $this;
    }

    /**
     * Gets gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string $gtin Global Trade Item Number
     *
     * @return $this
     */
    public function setGtin($gtin)
    {
        $this->container['gtin'] = $gtin;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string $mpn Manufacturer Part Number
     *
     * @return $this
     */
    public function setMpn($mpn)
    {
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets reviews_rating_sum
     *
     * @return int
     */
    public function getReviewsRatingSum()
    {
        return $this->container['reviews_rating_sum'];
    }

    /**
     * Sets reviews_rating_sum
     *
     * @param int $reviews_rating_sum The total rating for the product.
     *
     * @return $this
     */
    public function setReviewsRatingSum($reviews_rating_sum)
    {
        $this->container['reviews_rating_sum'] = $reviews_rating_sum;

        return $this;
    }

    /**
     * Gets reviews_count
     *
     * @return int
     */
    public function getReviewsCount()
    {
        return $this->container['reviews_count'];
    }

    /**
     * Sets reviews_count
     *
     * @param int $reviews_count The number of times the product has been rated.
     *
     * @return $this
     */
    public function setReviewsCount($reviews_count)
    {
        $this->container['reviews_count'] = $reviews_count;

        return $this;
    }

    /**
     * Gets total_sold
     *
     * @return int
     */
    public function getTotalSold()
    {
        return $this->container['total_sold'];
    }

    /**
     * Sets total_sold
     *
     * @param int $total_sold The total quantity of this product sold.
     *
     * @return $this
     */
    public function setTotalSold($total_sold)
    {
        $this->container['total_sold'] = $total_sold;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object[] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets bulk_pricing_rules
     *
     * @return \BigCommerce\Catalog\Model\BulkPricingRuleFull1[]
     */
    public function getBulkPricingRules()
    {
        return $this->container['bulk_pricing_rules'];
    }

    /**
     * Sets bulk_pricing_rules
     *
     * @param \BigCommerce\Catalog\Model\BulkPricingRuleFull1[] $bulk_pricing_rules bulk_pricing_rules
     *
     * @return $this
     */
    public function setBulkPricingRules($bulk_pricing_rules)
    {
        $this->container['bulk_pricing_rules'] = $bulk_pricing_rules;

        return $this;
    }

    /**
     * Gets images
     *
     * @return object[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param object[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets primary_image
     *
     * @return object
     */
    public function getPrimaryImage()
    {
        return $this->container['primary_image'];
    }

    /**
     * Sets primary_image
     *
     * @param object $primary_image Common ProductImage properties.
     *
     * @return $this
     */
    public function setPrimaryImage($primary_image)
    {
        $this->container['primary_image'] = $primary_image;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return object[]
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param object[] $videos videos
     *
     * @return $this
     */
    public function setVideos($videos)
    {
        $this->container['videos'] = $videos;

        return $this;
    }

    /**
     * Gets variants
     *
     * @return \BigCommerce\Catalog\Model\ProductVariantPutProduct1
     */
    public function getVariants()
    {
        return $this->container['variants'];
    }

    /**
     * Sets variants
     *
     * @param \BigCommerce\Catalog\Model\ProductVariantPutProduct1 $variants variants
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
