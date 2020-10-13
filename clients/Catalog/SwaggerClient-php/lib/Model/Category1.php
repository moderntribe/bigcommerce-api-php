<?php
/**
 * Category1
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
 * Category1 Class Doc Comment
 *
 * @category Class
 * @description Common Category object properties.
 * @package  BigCommerce\Catalog
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Category1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Category_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'parent_id' => 'int',
'name' => 'string',
'description' => 'string',
'views' => 'int',
'sort_order' => 'int',
'page_title' => 'string',
'search_keywords' => 'string',
'meta_keywords' => 'string[]',
'meta_description' => 'string',
'layout_file' => 'string',
'is_visible' => 'bool',
'default_product_sort' => 'string',
'image_url' => 'string',
'custom_url' => '\BigCommerce\Catalog\Model\CustomUrlFull1'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'parent_id' => null,
'name' => null,
'description' => null,
'views' => null,
'sort_order' => null,
'page_title' => null,
'search_keywords' => null,
'meta_keywords' => null,
'meta_description' => null,
'layout_file' => null,
'is_visible' => null,
'default_product_sort' => null,
'image_url' => null,
'custom_url' => null    ];

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
'parent_id' => 'parent_id',
'name' => 'name',
'description' => 'description',
'views' => 'views',
'sort_order' => 'sort_order',
'page_title' => 'page_title',
'search_keywords' => 'search_keywords',
'meta_keywords' => 'meta_keywords',
'meta_description' => 'meta_description',
'layout_file' => 'layout_file',
'is_visible' => 'is_visible',
'default_product_sort' => 'default_product_sort',
'image_url' => 'image_url',
'custom_url' => 'custom_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'parent_id' => 'setParentId',
'name' => 'setName',
'description' => 'setDescription',
'views' => 'setViews',
'sort_order' => 'setSortOrder',
'page_title' => 'setPageTitle',
'search_keywords' => 'setSearchKeywords',
'meta_keywords' => 'setMetaKeywords',
'meta_description' => 'setMetaDescription',
'layout_file' => 'setLayoutFile',
'is_visible' => 'setIsVisible',
'default_product_sort' => 'setDefaultProductSort',
'image_url' => 'setImageUrl',
'custom_url' => 'setCustomUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'parent_id' => 'getParentId',
'name' => 'getName',
'description' => 'getDescription',
'views' => 'getViews',
'sort_order' => 'getSortOrder',
'page_title' => 'getPageTitle',
'search_keywords' => 'getSearchKeywords',
'meta_keywords' => 'getMetaKeywords',
'meta_description' => 'getMetaDescription',
'layout_file' => 'getLayoutFile',
'is_visible' => 'getIsVisible',
'default_product_sort' => 'getDefaultProductSort',
'image_url' => 'getImageUrl',
'custom_url' => 'getCustomUrl'    ];

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

    const DEFAULT_PRODUCT_SORT_USE_STORE_SETTINGS = 'use_store_settings';
const DEFAULT_PRODUCT_SORT_FEATURED = 'featured';
const DEFAULT_PRODUCT_SORT_NEWEST = 'newest';
const DEFAULT_PRODUCT_SORT_BEST_SELLING = 'best_selling';
const DEFAULT_PRODUCT_SORT_ALPHA_ASC = 'alpha_asc';
const DEFAULT_PRODUCT_SORT_ALPHA_DESC = 'alpha_desc';
const DEFAULT_PRODUCT_SORT_AVG_CUSTOMER_REVIEW = 'avg_customer_review';
const DEFAULT_PRODUCT_SORT_PRICE_ASC = 'price_asc';
const DEFAULT_PRODUCT_SORT_PRICE_DESC = 'price_desc';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDefaultProductSortAllowableValues()
    {
        return [
            self::DEFAULT_PRODUCT_SORT_USE_STORE_SETTINGS,
self::DEFAULT_PRODUCT_SORT_FEATURED,
self::DEFAULT_PRODUCT_SORT_NEWEST,
self::DEFAULT_PRODUCT_SORT_BEST_SELLING,
self::DEFAULT_PRODUCT_SORT_ALPHA_ASC,
self::DEFAULT_PRODUCT_SORT_ALPHA_DESC,
self::DEFAULT_PRODUCT_SORT_AVG_CUSTOMER_REVIEW,
self::DEFAULT_PRODUCT_SORT_PRICE_ASC,
self::DEFAULT_PRODUCT_SORT_PRICE_DESC,        ];
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
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['sort_order'] = isset($data['sort_order']) ? $data['sort_order'] : null;
        $this->container['page_title'] = isset($data['page_title']) ? $data['page_title'] : null;
        $this->container['search_keywords'] = isset($data['search_keywords']) ? $data['search_keywords'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['layout_file'] = isset($data['layout_file']) ? $data['layout_file'] : null;
        $this->container['is_visible'] = isset($data['is_visible']) ? $data['is_visible'] : null;
        $this->container['default_product_sort'] = isset($data['default_product_sort']) ? $data['default_product_sort'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['custom_url'] = isset($data['custom_url']) ? $data['custom_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getDefaultProductSortAllowableValues();
        if (!is_null($this->container['default_product_sort']) && !in_array($this->container['default_product_sort'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'default_product_sort', must be one of '%s'",
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
     * @param int $id Unique ID of the *Category*. Increments sequentially. Read-Only.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param int $parent_id The unique numeric ID of the category's parent. This field controls where the category sits in the tree of categories that organize the catalog. Required in a POST if creating a child category.
     *
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

        return $this;
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
     * @param string $name The name displayed for the category. Name is unique with respect to the category's siblings. Required in a POST.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets views
     *
     * @return int
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     *
     * @param int $views Number of views the category has on the storefront.
     *
     * @return $this
     */
    public function setViews($views)
    {
        $this->container['views'] = $views;

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
     * @param int $sort_order Priority this category will be given when included in the menu and category pages. The lower the number, the closer to the top of the results the category will be.
     *
     * @return $this
     */
    public function setSortOrder($sort_order)
    {
        $this->container['sort_order'] = $sort_order;

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
     * @param string $page_title Custom title for the category page. If not defined, the category name will be used as the meta title.
     *
     * @return $this
     */
    public function setPageTitle($page_title)
    {
        $this->container['page_title'] = $page_title;

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
     * @param string $search_keywords A comma-separated list of keywords that can be used to locate the category when searching the store.
     *
     * @return $this
     */
    public function setSearchKeywords($search_keywords)
    {
        $this->container['search_keywords'] = $search_keywords;

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
     * @param string[] $meta_keywords Custom meta keywords for the category page. If not defined, the store's default keywords will be used. Must post as an array like: [\"awesome\",\"sauce\"].
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
     * @param string $meta_description Custom meta description for the category page. If not defined, the store's default meta description will be used.
     *
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

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
     * @param string $layout_file A valid layout file. (Please refer to [this article](https://support.bigcommerce.com/articles/Public/Creating-Custom-Template-Files/) on creating category files.) This field is writable only for stores with a Blueprint theme applied.
     *
     * @return $this
     */
    public function setLayoutFile($layout_file)
    {
        $this->container['layout_file'] = $layout_file;

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
     * @param bool $is_visible Flag to determine whether the product should be displayed to customers browsing the store. If `true`, the category will be displayed. If `false`, the category will be hidden from view.
     *
     * @return $this
     */
    public function setIsVisible($is_visible)
    {
        $this->container['is_visible'] = $is_visible;

        return $this;
    }

    /**
     * Gets default_product_sort
     *
     * @return string
     */
    public function getDefaultProductSort()
    {
        return $this->container['default_product_sort'];
    }

    /**
     * Sets default_product_sort
     *
     * @param string $default_product_sort Determines how the products are sorted on category page load.
     *
     * @return $this
     */
    public function setDefaultProductSort($default_product_sort)
    {
        $allowedValues = $this->getDefaultProductSortAllowableValues();
        if (!is_null($default_product_sort) && !in_array($default_product_sort, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'default_product_sort', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['default_product_sort'] = $default_product_sort;

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
     * @param string $image_url Image URL used for this category on the storefront. Images can be uploaded via form file post to `/categories/{categoryId}/image`, or by providing a publicly accessible URL in this field.
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        $this->container['image_url'] = $image_url;

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
