<?php
/**
 * ProductPut1Test
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
 * Please update the test case below to test the model.
 */

namespace BigCommerce\Catalog;

/**
 * ProductPut1Test Class Doc Comment
 *
 * @category    Class
 * @description The model for a PUT to update a product.
 * @package     BigCommerce\Catalog
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductPut1Test extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "ProductPut1"
     */
    public function testProductPut1()
    {
    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {
    }

    /**
     * Test attribute "type"
     */
    public function testPropertyType()
    {
    }

    /**
     * Test attribute "sku"
     */
    public function testPropertySku()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "weight"
     */
    public function testPropertyWeight()
    {
    }

    /**
     * Test attribute "width"
     */
    public function testPropertyWidth()
    {
    }

    /**
     * Test attribute "depth"
     */
    public function testPropertyDepth()
    {
    }

    /**
     * Test attribute "height"
     */
    public function testPropertyHeight()
    {
    }

    /**
     * Test attribute "price"
     */
    public function testPropertyPrice()
    {
    }

    /**
     * Test attribute "cost_price"
     */
    public function testPropertyCostPrice()
    {
    }

    /**
     * Test attribute "retail_price"
     */
    public function testPropertyRetailPrice()
    {
    }

    /**
     * Test attribute "sale_price"
     */
    public function testPropertySalePrice()
    {
    }

    /**
     * Test attribute "tax_class_id"
     */
    public function testPropertyTaxClassId()
    {
    }

    /**
     * Test attribute "product_tax_code"
     */
    public function testPropertyProductTaxCode()
    {
    }

    /**
     * Test attribute "categories"
     */
    public function testPropertyCategories()
    {
    }

    /**
     * Test attribute "brand_id"
     */
    public function testPropertyBrandId()
    {
    }

    /**
     * Test attribute "inventory_level"
     */
    public function testPropertyInventoryLevel()
    {
    }

    /**
     * Test attribute "inventory_warning_level"
     */
    public function testPropertyInventoryWarningLevel()
    {
    }

    /**
     * Test attribute "inventory_tracking"
     */
    public function testPropertyInventoryTracking()
    {
    }

    /**
     * Test attribute "fixed_cost_shipping_price"
     */
    public function testPropertyFixedCostShippingPrice()
    {
    }

    /**
     * Test attribute "is_free_shipping"
     */
    public function testPropertyIsFreeShipping()
    {
    }

    /**
     * Test attribute "is_visible"
     */
    public function testPropertyIsVisible()
    {
    }

    /**
     * Test attribute "is_featured"
     */
    public function testPropertyIsFeatured()
    {
    }

    /**
     * Test attribute "related_products"
     */
    public function testPropertyRelatedProducts()
    {
    }

    /**
     * Test attribute "warranty"
     */
    public function testPropertyWarranty()
    {
    }

    /**
     * Test attribute "bin_picking_number"
     */
    public function testPropertyBinPickingNumber()
    {
    }

    /**
     * Test attribute "layout_file"
     */
    public function testPropertyLayoutFile()
    {
    }

    /**
     * Test attribute "upc"
     */
    public function testPropertyUpc()
    {
    }

    /**
     * Test attribute "search_keywords"
     */
    public function testPropertySearchKeywords()
    {
    }

    /**
     * Test attribute "availability"
     */
    public function testPropertyAvailability()
    {
    }

    /**
     * Test attribute "availability_description"
     */
    public function testPropertyAvailabilityDescription()
    {
    }

    /**
     * Test attribute "gift_wrapping_options_type"
     */
    public function testPropertyGiftWrappingOptionsType()
    {
    }

    /**
     * Test attribute "gift_wrapping_options_list"
     */
    public function testPropertyGiftWrappingOptionsList()
    {
    }

    /**
     * Test attribute "sort_order"
     */
    public function testPropertySortOrder()
    {
    }

    /**
     * Test attribute "condition"
     */
    public function testPropertyCondition()
    {
    }

    /**
     * Test attribute "is_condition_shown"
     */
    public function testPropertyIsConditionShown()
    {
    }

    /**
     * Test attribute "order_quantity_minimum"
     */
    public function testPropertyOrderQuantityMinimum()
    {
    }

    /**
     * Test attribute "order_quantity_maximum"
     */
    public function testPropertyOrderQuantityMaximum()
    {
    }

    /**
     * Test attribute "page_title"
     */
    public function testPropertyPageTitle()
    {
    }

    /**
     * Test attribute "meta_keywords"
     */
    public function testPropertyMetaKeywords()
    {
    }

    /**
     * Test attribute "meta_description"
     */
    public function testPropertyMetaDescription()
    {
    }

    /**
     * Test attribute "view_count"
     */
    public function testPropertyViewCount()
    {
    }

    /**
     * Test attribute "preorder_release_date"
     */
    public function testPropertyPreorderReleaseDate()
    {
    }

    /**
     * Test attribute "preorder_message"
     */
    public function testPropertyPreorderMessage()
    {
    }

    /**
     * Test attribute "is_preorder_only"
     */
    public function testPropertyIsPreorderOnly()
    {
    }

    /**
     * Test attribute "is_price_hidden"
     */
    public function testPropertyIsPriceHidden()
    {
    }

    /**
     * Test attribute "price_hidden_label"
     */
    public function testPropertyPriceHiddenLabel()
    {
    }

    /**
     * Test attribute "custom_url"
     */
    public function testPropertyCustomUrl()
    {
    }

    /**
     * Test attribute "open_graph_type"
     */
    public function testPropertyOpenGraphType()
    {
    }

    /**
     * Test attribute "open_graph_title"
     */
    public function testPropertyOpenGraphTitle()
    {
    }

    /**
     * Test attribute "open_graph_description"
     */
    public function testPropertyOpenGraphDescription()
    {
    }

    /**
     * Test attribute "open_graph_use_meta_description"
     */
    public function testPropertyOpenGraphUseMetaDescription()
    {
    }

    /**
     * Test attribute "open_graph_use_product_name"
     */
    public function testPropertyOpenGraphUseProductName()
    {
    }

    /**
     * Test attribute "open_graph_use_image"
     */
    public function testPropertyOpenGraphUseImage()
    {
    }

    /**
     * Test attribute "brand_name_or_brand_id"
     */
    public function testPropertyBrandNameOrBrandId()
    {
    }

    /**
     * Test attribute "gtin"
     */
    public function testPropertyGtin()
    {
    }

    /**
     * Test attribute "mpn"
     */
    public function testPropertyMpn()
    {
    }

    /**
     * Test attribute "reviews_rating_sum"
     */
    public function testPropertyReviewsRatingSum()
    {
    }

    /**
     * Test attribute "reviews_count"
     */
    public function testPropertyReviewsCount()
    {
    }

    /**
     * Test attribute "total_sold"
     */
    public function testPropertyTotalSold()
    {
    }

    /**
     * Test attribute "custom_fields"
     */
    public function testPropertyCustomFields()
    {
    }

    /**
     * Test attribute "bulk_pricing_rules"
     */
    public function testPropertyBulkPricingRules()
    {
    }

    /**
     * Test attribute "images"
     */
    public function testPropertyImages()
    {
    }

    /**
     * Test attribute "primary_image"
     */
    public function testPropertyPrimaryImage()
    {
    }

    /**
     * Test attribute "videos"
     */
    public function testPropertyVideos()
    {
    }

    /**
     * Test attribute "variants"
     */
    public function testPropertyVariants()
    {
    }
}
