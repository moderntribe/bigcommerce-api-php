# SwaggerClient-php
Manage products, brands and categories. To learn more about catalog resources see [Catalog Overview](https://developer.bigcommerce.com/api-docs/catalog/products-overview).  - [Authentication](#authentication) - [Differentiating Variants & Modifiers](#variants-and-modifiers) - [Available Endpoints](#available-endpoints) - [Resources](#resources)  ## Authentication Requests can be authenticated by sending a `client_id` and `access_token` via `X-Auth-Client` and `X-Auth-Token` HTTP headers:  ```http GET /stores/{$$.env.store_hash}/v3/catalog/summary host: api.bigcommerce.com Accept: application/json X-Auth-Client: {client_id} X-Auth-Token: {access_token} ```  |Header|Parameter|Description| |-|-|-| |`X-Auth-Client`|`client_id`|Obtained by creating an API account or installing an app in a BigCommerce control panel.| |`X-Auth-Token`|`access_token `|Obtained by creating an API account or installing an app in a BigCommerce control panel.|  ### OAuth Scopes | UI Name  | Permission | Parameter                     | |----------|------------|-------------------------------| | Products | modify     | `store_v2_products`           | | Products | read-only  | `store_v2_products_read_only` |  For more information on OAuth Scopes, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  For more information on Authenticating BigCommerce APIs, see: [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## Differentiating Variants and Modifiers [Variants](https://support.bigcommerce.com/s/article/Product-Options-v3#variations) represent a physical product made up of [Product Option](https://support.bigcommerce.com/s/article/Product-Options-v3) choices, i.e. a large blue t-shirt. Each variant can have a unique SKU.  Modifiers represent a choice a customer makes about a product that doesn't represent a physical item, i.e. text to be printed on a t-shirt. Assigning a SKU to a modifier will turn it into a variant.  See [Variant Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#variant-options) and [Modifier Options](https://developer.bigcommerce.com/api-docs/catalog/products-overview#modifier-options) for more information.  ## Available Endpoints | Resource / Endpoint                     | Description                                                             | |-----------------------------------------|-------------------------------------------------------------------------| | Brand Images                            | Create and manage brand images                                          | | Brand Metafields                        | Create and manage brand metafields                                      | | Brands                                  | Create and manage brands                                                | | Catalog                                 | Create and manage store categories, products, and brands                | | Categories                              | Create and manage categorties                                           | | Category Images                         | Create and manage category images                                       | | Category Metafields                     | Create and manage category metafields                                   | | Product Bulk Pricing Rules              | Create and manage product bulk pricing rules                            | | Product Complex Rules                   | Create and manage product complex rules                                 | | Product Custom Fields                   | Create and manage product custom fields                                 | | Product Images                          | Create and manage product images                                        | | Product Metafields                      | Create and manage product meta fields                                   | | Product Modifier Images                 | Create and manage product modifer images                                | | Product Modifier Values                 | Create and manage product modifier values                               | | Product Modifiers                       | Create and manage product midifiers                                     | | Product Reviews                         | Create and manage product reviews                                       | | Product Variant Option Values           | Create and manage product variant option values                         | | Product Variant Options                 | Create and manage product variant options                               | | Product Variants                        | Create and manage product variants                                      | | Product Videos                          | Create and manage product videos                                        | | Products                                | Create and manage products                                              | | ProductVariant Metafields               | Create and manage product meta flields                                  | | Variants                                | Get and update all variants                                             |  ## Resources  ### Webhooks * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [Categories](/api-docs/getting-started/webhooks/webhook-events#webhook-events_category) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related Endpoints * [Catalog API](/api-reference/catalog/catalog-api)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\BrandImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$image_file = "image_file_example"; // string | 

try {
    $result = $apiInstance->createBrandImage($accept, $content_type, $brand_id, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandImagesApi->createBrandImage: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\BrandImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $apiInstance->deleteBrandImage($brand_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling BrandImagesApi->deleteBrandImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandImagesApi* | [**createBrandImage**](docs/Api/BrandImagesApi.md#createbrandimage) | **POST** /catalog/brands/{brand_id}/image | Create a Brand Image
*BrandImagesApi* | [**deleteBrandImage**](docs/Api/BrandImagesApi.md#deletebrandimage) | **DELETE** /catalog/brands/{brand_id}/image | Delete a Brand Image
*BrandMetafieldsApi* | [**createBrandMetafield**](docs/Api/BrandMetafieldsApi.md#createbrandmetafield) | **POST** /catalog/brands/{brand_id}/metafields | Create a Brand Metafield
*BrandMetafieldsApi* | [**deleteBrandMetafieldById**](docs/Api/BrandMetafieldsApi.md#deletebrandmetafieldbyid) | **DELETE** /catalog/brands/{brand_id}/metafields/{metafield_id} | Delete a Brand Metafield
*BrandMetafieldsApi* | [**getBrandMetafieldByBrandId**](docs/Api/BrandMetafieldsApi.md#getbrandmetafieldbybrandid) | **GET** /catalog/brands/{brand_id}/metafields/{metafield_id} | Get a Brand Metafields
*BrandMetafieldsApi* | [**getBrandMetafieldsByBrandId**](docs/Api/BrandMetafieldsApi.md#getbrandmetafieldsbybrandid) | **GET** /catalog/brands/{brand_id}/metafields | Get All Brand Metafields
*BrandMetafieldsApi* | [**updateBrandMetafield**](docs/Api/BrandMetafieldsApi.md#updatebrandmetafield) | **PUT** /catalog/brands/{brand_id}/metafields/{metafield_id} | Update a Brand Metafield
*BrandsApi* | [**createBrand**](docs/Api/BrandsApi.md#createbrand) | **POST** /catalog/brands | Create a Brand
*BrandsApi* | [**deleteBrandById**](docs/Api/BrandsApi.md#deletebrandbyid) | **DELETE** /catalog/brands/{brand_id} | Delete a Brand
*BrandsApi* | [**deleteBrands**](docs/Api/BrandsApi.md#deletebrands) | **DELETE** /catalog/brands | Delete Brands
*BrandsApi* | [**getBrandById**](docs/Api/BrandsApi.md#getbrandbyid) | **GET** /catalog/brands/{brand_id} | Get a Brand
*BrandsApi* | [**getBrands**](docs/Api/BrandsApi.md#getbrands) | **GET** /catalog/brands | Get All Brands
*BrandsApi* | [**updateBrand**](docs/Api/BrandsApi.md#updatebrand) | **PUT** /catalog/brands/{brand_id} | Update a Brand
*CatalogApi* | [**deleteBrands**](docs/Api/CatalogApi.md#deletebrands) | **DELETE** /catalog/brands | Delete Brands
*CatalogApi* | [**deleteProducts**](docs/Api/CatalogApi.md#deleteproducts) | **DELETE** /catalog/products | Delete Products
*CatalogApi* | [**updateVariantsBatch**](docs/Api/CatalogApi.md#updatevariantsbatch) | **PUT** /catalog/variants | Update Variants (Batch)
*CategoryApi* | [**createCategory**](docs/Api/CategoryApi.md#createcategory) | **POST** /catalog/categories | Create a Category
*CategoryApi* | [**deleteCategories**](docs/Api/CategoryApi.md#deletecategories) | **DELETE** /catalog/categories | Delete Categories
*CategoryApi* | [**deleteCategoryById**](docs/Api/CategoryApi.md#deletecategorybyid) | **DELETE** /catalog/categories/{category_id} | Delete a Category
*CategoryApi* | [**getCategories**](docs/Api/CategoryApi.md#getcategories) | **GET** /catalog/categories | Get All Categories
*CategoryApi* | [**getCategoryById**](docs/Api/CategoryApi.md#getcategorybyid) | **GET** /catalog/categories/{category_id} | Get a Category
*CategoryApi* | [**getCategoryTree**](docs/Api/CategoryApi.md#getcategorytree) | **GET** /catalog/categories/tree | Get Category Tree
*CategoryApi* | [**updateCategory**](docs/Api/CategoryApi.md#updatecategory) | **PUT** /catalog/categories/{category_id} | Update a Category
*CategoryImagesApi* | [**createCategoryImage**](docs/Api/CategoryImagesApi.md#createcategoryimage) | **POST** /catalog/categories/{category_id}/image | Create a Category Image
*CategoryImagesApi* | [**deleteCategoryImage**](docs/Api/CategoryImagesApi.md#deletecategoryimage) | **DELETE** /catalog/categories/{category_id}/image | Delete a Category Image
*CategoryMetafieldsApi* | [**createCategoryMetafield**](docs/Api/CategoryMetafieldsApi.md#createcategorymetafield) | **POST** /catalog/categories/{category_id}/metafields | Create a Category Metafield
*CategoryMetafieldsApi* | [**deleteCategoryMetafieldById**](docs/Api/CategoryMetafieldsApi.md#deletecategorymetafieldbyid) | **DELETE** /catalog/categories/{category_id}/metafields/{metafield_id} | Delete a Category Metafield
*CategoryMetafieldsApi* | [**getCategoryMetafieldByCategoryId**](docs/Api/CategoryMetafieldsApi.md#getcategorymetafieldbycategoryid) | **GET** /catalog/categories/{category_id}/metafields/{metafield_id} | Get a Category Metafield
*CategoryMetafieldsApi* | [**getCategoryMetafieldsByCategoryId**](docs/Api/CategoryMetafieldsApi.md#getcategorymetafieldsbycategoryid) | **GET** /catalog/categories/{category_id}/metafields | Get All Category Metafields
*CategoryMetafieldsApi* | [**updateCategoryMetafield**](docs/Api/CategoryMetafieldsApi.md#updatecategorymetafield) | **PUT** /catalog/categories/{category_id}/metafields/{metafield_id} | Update a Category Metafield
*ProductBulkPricingRulesApi* | [**createBulkPricingRule**](docs/Api/ProductBulkPricingRulesApi.md#createbulkpricingrule) | **POST** /catalog/products/{product_id}/bulk-pricing-rules | Creates a Bulk Pricing Rule
*ProductBulkPricingRulesApi* | [**deleteBulkPricingRuleById**](docs/Api/ProductBulkPricingRulesApi.md#deletebulkpricingrulebyid) | **DELETE** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Delete a Bulk Pricing Rule
*ProductBulkPricingRulesApi* | [**getBulkPricingRuleById**](docs/Api/ProductBulkPricingRulesApi.md#getbulkpricingrulebyid) | **GET** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Get a Bulk Pricing Rule
*ProductBulkPricingRulesApi* | [**getBulkPricingRules**](docs/Api/ProductBulkPricingRulesApi.md#getbulkpricingrules) | **GET** /catalog/products/{product_id}/bulk-pricing-rules | Get All Bulk Pricing Rules
*ProductBulkPricingRulesApi* | [**updateBulkPricingRule**](docs/Api/ProductBulkPricingRulesApi.md#updatebulkpricingrule) | **PUT** /catalog/products/{product_id}/bulk-pricing-rules/{bulk_pricing_rule_id} | Update a Bulk Pricing Rule
*ProductComplexRulesApi* | [**createComplexRule**](docs/Api/ProductComplexRulesApi.md#createcomplexrule) | **POST** /catalog/products/{product_id}/complex-rules | Create a Complex Rule
*ProductComplexRulesApi* | [**deleteComplexRuleById**](docs/Api/ProductComplexRulesApi.md#deletecomplexrulebyid) | **DELETE** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Delete a Complex Rule
*ProductComplexRulesApi* | [**getComplexRuleById**](docs/Api/ProductComplexRulesApi.md#getcomplexrulebyid) | **GET** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Get a Complex Rule
*ProductComplexRulesApi* | [**getComplexRules**](docs/Api/ProductComplexRulesApi.md#getcomplexrules) | **GET** /catalog/products/{product_id}/complex-rules | Get Complex Rules
*ProductComplexRulesApi* | [**updateComplexRule**](docs/Api/ProductComplexRulesApi.md#updatecomplexrule) | **PUT** /catalog/products/{product_id}/complex-rules/{complex_rule_id} | Update a Complex Rule
*ProductCustomFieldsApi* | [**createCustomField**](docs/Api/ProductCustomFieldsApi.md#createcustomfield) | **POST** /catalog/products/{product_id}/custom-fields | Create a Custom Fields
*ProductCustomFieldsApi* | [**deleteCustomFieldById**](docs/Api/ProductCustomFieldsApi.md#deletecustomfieldbyid) | **DELETE** /catalog/products/{product_id}/custom-fields/{custom_field_id} | Delete a Custom Field
*ProductCustomFieldsApi* | [**getCustomFieldById**](docs/Api/ProductCustomFieldsApi.md#getcustomfieldbyid) | **GET** /catalog/products/{product_id}/custom-fields/{custom_field_id} | Get a Custom Field
*ProductCustomFieldsApi* | [**getCustomFields**](docs/Api/ProductCustomFieldsApi.md#getcustomfields) | **GET** /catalog/products/{product_id}/custom-fields | Get Custom Fields
*ProductCustomFieldsApi* | [**updateCustomField**](docs/Api/ProductCustomFieldsApi.md#updatecustomfield) | **PUT** /catalog/products/{product_id}/custom-fields/{custom_field_id} | Update a Custom Field
*ProductImagesApi* | [**createProductImage**](docs/Api/ProductImagesApi.md#createproductimage) | **POST** /catalog/products/{product_id}/images | Create a Product Image
*ProductImagesApi* | [**deleteProductImage**](docs/Api/ProductImagesApi.md#deleteproductimage) | **DELETE** /catalog/products/{product_id}/images/{image_id} | Delete a Product Image
*ProductImagesApi* | [**getProductImageById**](docs/Api/ProductImagesApi.md#getproductimagebyid) | **GET** /catalog/products/{product_id}/images/{image_id} | Get a Product Image
*ProductImagesApi* | [**getProductImages**](docs/Api/ProductImagesApi.md#getproductimages) | **GET** /catalog/products/{product_id}/images | Get All Product Images
*ProductImagesApi* | [**updateProductImage**](docs/Api/ProductImagesApi.md#updateproductimage) | **PUT** /catalog/products/{product_id}/images/{image_id} | Update a Product Image
*ProductMetafieldsApi* | [**createProductMetafield**](docs/Api/ProductMetafieldsApi.md#createproductmetafield) | **POST** /catalog/products/{product_id}/metafields | Create a Product Metafield
*ProductMetafieldsApi* | [**deleteProductMetafieldById**](docs/Api/ProductMetafieldsApi.md#deleteproductmetafieldbyid) | **DELETE** /catalog/products/{product_id}/metafields/{metafield_id} | Delete a Product Metafield
*ProductMetafieldsApi* | [**getProductMetafieldByProductId**](docs/Api/ProductMetafieldsApi.md#getproductmetafieldbyproductid) | **GET** /catalog/products/{product_id}/metafields/{metafield_id} | Get a Product Metafield
*ProductMetafieldsApi* | [**getProductMetafieldsByProductId**](docs/Api/ProductMetafieldsApi.md#getproductmetafieldsbyproductid) | **GET** /catalog/products/{product_id}/metafields | Get All Product Metafields
*ProductMetafieldsApi* | [**updateProductMetafield**](docs/Api/ProductMetafieldsApi.md#updateproductmetafield) | **PUT** /catalog/products/{product_id}/metafields/{metafield_id} | Update a Product Metafield
*ProductModifierImagesApi* | [**createModifierImage**](docs/Api/ProductModifierImagesApi.md#createmodifierimage) | **POST** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image | Create Modifier Image
*ProductModifierImagesApi* | [**deleteModifierImage**](docs/Api/ProductModifierImagesApi.md#deletemodifierimage) | **DELETE** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id}/image | Delete Modifier Image
*ProductModifierValuesApi* | [**createModifierValue**](docs/Api/ProductModifierValuesApi.md#createmodifiervalue) | **POST** /catalog/products/{product_id}/modifiers/{modifier_id}/values | Create Modifier Value
*ProductModifierValuesApi* | [**deleteModifierValueById**](docs/Api/ProductModifierValuesApi.md#deletemodifiervaluebyid) | **DELETE** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Delete Modifier Value
*ProductModifierValuesApi* | [**getModifierValueById**](docs/Api/ProductModifierValuesApi.md#getmodifiervaluebyid) | **GET** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Get a Modifier Value
*ProductModifierValuesApi* | [**getModifierValues**](docs/Api/ProductModifierValuesApi.md#getmodifiervalues) | **GET** /catalog/products/{product_id}/modifiers/{modifier_id}/values | Get All Modifier Values
*ProductModifierValuesApi* | [**updateModifierValue**](docs/Api/ProductModifierValuesApi.md#updatemodifiervalue) | **PUT** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Update a Modifier Value
*ProductModifiersApi* | [**createModifier**](docs/Api/ProductModifiersApi.md#createmodifier) | **POST** /catalog/products/{product_id}/modifiers | Create a Product Modifier
*ProductModifiersApi* | [**deleteModifierById**](docs/Api/ProductModifiersApi.md#deletemodifierbyid) | **DELETE** /catalog/products/{product_id}/modifiers/{modifier_id} | Delete a Modifier
*ProductModifiersApi* | [**getModifierById**](docs/Api/ProductModifiersApi.md#getmodifierbyid) | **GET** /catalog/products/{product_id}/modifiers/{modifier_id} | Get a Modifier
*ProductModifiersApi* | [**getModifiers**](docs/Api/ProductModifiersApi.md#getmodifiers) | **GET** /catalog/products/{product_id}/modifiers | Get All Product Modifiers
*ProductModifiersApi* | [**updateModifier**](docs/Api/ProductModifiersApi.md#updatemodifier) | **PUT** /catalog/products/{product_id}/modifiers/{modifier_id} | Update a Modifier
*ProductOptionValuesApi* | [**createOptionValue**](docs/Api/ProductOptionValuesApi.md#createoptionvalue) | **POST** /catalog/products/{product_id}/options/{option_id}/values | Create Product Option Values
*ProductOptionValuesApi* | [**deleteOptionValueById**](docs/Api/ProductOptionValuesApi.md#deleteoptionvaluebyid) | **DELETE** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Delete a Product Option Value
*ProductOptionValuesApi* | [**getOptionValueById**](docs/Api/ProductOptionValuesApi.md#getoptionvaluebyid) | **GET** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Get a Product Option Value
*ProductOptionValuesApi* | [**getOptionValues**](docs/Api/ProductOptionValuesApi.md#getoptionvalues) | **GET** /catalog/products/{product_id}/options/{option_id}/values | Get all Product Option Values
*ProductOptionValuesApi* | [**updateOptionValue**](docs/Api/ProductOptionValuesApi.md#updateoptionvalue) | **PUT** /catalog/products/{product_id}/options/{option_id}/values/{value_id} | Update a Product Option Value
*ProductOptionsApi* | [**createOption**](docs/Api/ProductOptionsApi.md#createoption) | **POST** /catalog/products/{product_id}/options | Create a Product Option
*ProductOptionsApi* | [**deleteOptionById**](docs/Api/ProductOptionsApi.md#deleteoptionbyid) | **DELETE** /catalog/products/{product_id}/options/{option_id} | Delete a Product Option
*ProductOptionsApi* | [**getOptionById**](docs/Api/ProductOptionsApi.md#getoptionbyid) | **GET** /catalog/products/{product_id}/options/{option_id} | Get a Product Option
*ProductOptionsApi* | [**getOptions**](docs/Api/ProductOptionsApi.md#getoptions) | **GET** /catalog/products/{product_id}/options | Get all Product Options
*ProductOptionsApi* | [**updateOption**](docs/Api/ProductOptionsApi.md#updateoption) | **PUT** /catalog/products/{product_id}/options/{option_id} | Update a Product Option
*ProductReviewsApi* | [**createProductReview**](docs/Api/ProductReviewsApi.md#createproductreview) | **POST** /catalog/products/{product_id}/reviews | Create a Product Review
*ProductReviewsApi* | [**deleteProductReview**](docs/Api/ProductReviewsApi.md#deleteproductreview) | **DELETE** /catalog/products/{product_id}/reviews/{review_id} | Delete a Product Review
*ProductReviewsApi* | [**getProductReviewById**](docs/Api/ProductReviewsApi.md#getproductreviewbyid) | **GET** /catalog/products/{product_id}/reviews/{review_id} | Get a Product Review
*ProductReviewsApi* | [**getProductReviews**](docs/Api/ProductReviewsApi.md#getproductreviews) | **GET** /catalog/products/{product_id}/reviews | Get Product Reviews
*ProductReviewsApi* | [**updateProductReview**](docs/Api/ProductReviewsApi.md#updateproductreview) | **PUT** /catalog/products/{product_id}/reviews/{review_id} | Update a Product Review
*ProductVariantsApi* | [**createVariant**](docs/Api/ProductVariantsApi.md#createvariant) | **POST** /catalog/products/{product_id}/variants | Create a Product Variant
*ProductVariantsApi* | [**createVariantImage**](docs/Api/ProductVariantsApi.md#createvariantimage) | **POST** /catalog/products/{product_id}/variants/{variant_id}/image | Create a Variant Image
*ProductVariantsApi* | [**deleteVariantById**](docs/Api/ProductVariantsApi.md#deletevariantbyid) | **DELETE** /catalog/products/{product_id}/variants/{variant_id} | Delete a Product Variant
*ProductVariantsApi* | [**getVariantById**](docs/Api/ProductVariantsApi.md#getvariantbyid) | **GET** /catalog/products/{product_id}/variants/{variant_id} | Get a Product Variant
*ProductVariantsApi* | [**getVariantsByProductId**](docs/Api/ProductVariantsApi.md#getvariantsbyproductid) | **GET** /catalog/products/{product_id}/variants | Get All Product Variants
*ProductVariantsApi* | [**updateVariant**](docs/Api/ProductVariantsApi.md#updatevariant) | **PUT** /catalog/products/{product_id}/variants/{variant_id} | Update a Product Variant
*ProductVariantsMetafieldsApi* | [**createVariantMetafield**](docs/Api/ProductVariantsMetafieldsApi.md#createvariantmetafield) | **POST** /catalog/products/{product_id}/variants/{variant_id}/metafields | Create a Product Variant Metafield
*ProductVariantsMetafieldsApi* | [**deleteVariantMetafieldById**](docs/Api/ProductVariantsMetafieldsApi.md#deletevariantmetafieldbyid) | **DELETE** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Delete a Variant Metafield
*ProductVariantsMetafieldsApi* | [**getVariantMetafieldByProductIdAndVariantId**](docs/Api/ProductVariantsMetafieldsApi.md#getvariantmetafieldbyproductidandvariantid) | **GET** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Get Product Variant Metafields
*ProductVariantsMetafieldsApi* | [**getVariantMetafieldsByProductIdAndVariantId**](docs/Api/ProductVariantsMetafieldsApi.md#getvariantmetafieldsbyproductidandvariantid) | **GET** /catalog/products/{product_id}/variants/{variant_id}/metafields | Get Product Variant Metafields
*ProductVariantsMetafieldsApi* | [**updateVariantMetafield**](docs/Api/ProductVariantsMetafieldsApi.md#updatevariantmetafield) | **PUT** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Update Product Variant Metafields
*ProductVideosApi* | [**createProductVideo**](docs/Api/ProductVideosApi.md#createproductvideo) | **POST** /catalog/products/{product_id}/videos | Create a Product Video
*ProductVideosApi* | [**deleteProductVideo**](docs/Api/ProductVideosApi.md#deleteproductvideo) | **DELETE** /catalog/products/{product_id}/videos/{id} | Delete a Product Video
*ProductVideosApi* | [**getProductVideoById**](docs/Api/ProductVideosApi.md#getproductvideobyid) | **GET** /catalog/products/{product_id}/videos/{id} | Get a Product Video
*ProductVideosApi* | [**getProductVideos**](docs/Api/ProductVideosApi.md#getproductvideos) | **GET** /catalog/products/{product_id}/videos | Get All Product Videos
*ProductVideosApi* | [**updateProductVideo**](docs/Api/ProductVideosApi.md#updateproductvideo) | **PUT** /catalog/products/{product_id}/videos/{id} | Update a Product Video
*ProductsApi* | [**createProduct**](docs/Api/ProductsApi.md#createproduct) | **POST** /catalog/products | Create a Product
*ProductsApi* | [**deleteProductById**](docs/Api/ProductsApi.md#deleteproductbyid) | **DELETE** /catalog/products/{product_id} | Delete a Product
*ProductsApi* | [**deleteProducts**](docs/Api/ProductsApi.md#deleteproducts) | **DELETE** /catalog/products | Delete Products
*ProductsApi* | [**getProductById**](docs/Api/ProductsApi.md#getproductbyid) | **GET** /catalog/products/{product_id} | Get a Product
*ProductsApi* | [**getProducts**](docs/Api/ProductsApi.md#getproducts) | **GET** /catalog/products | Get All Products
*ProductsApi* | [**updateProduct**](docs/Api/ProductsApi.md#updateproduct) | **PUT** /catalog/products/{product_id} | Update a Product
*ProductsApi* | [**updateProducts**](docs/Api/ProductsApi.md#updateproducts) | **PUT** /catalog/products | Update Products (Batch)
*SummaryApi* | [**getCatalogSummary**](docs/Api/SummaryApi.md#getcatalogsummary) | **GET** /catalog/summary | Get a Catalog Summary
*VariantsApi* | [**getVariants**](docs/Api/VariantsApi.md#getvariants) | **GET** /catalog/variants | Get All Variants
*VariantsApi* | [**updateVariantsBatch**](docs/Api/VariantsApi.md#updatevariantsbatch) | **PUT** /catalog/variants | Update Variants (Batch)

## Documentation For Models

 - [Adjuster](docs/Model/Adjuster.md)
 - [AdjusterFull](docs/Model/AdjusterFull.md)
 - [AdjustersFull](docs/Model/AdjustersFull.md)
 - [AdjustersFull1](docs/Model/AdjustersFull1.md)
 - [AdjustersFull1PurchasingDisabled](docs/Model/AdjustersFull1PurchasingDisabled.md)
 - [AllOfMetaFieldCollectionResponse1DataItems](docs/Model/AllOfMetaFieldCollectionResponse1DataItems.md)
 - [AllOfMetafieldResponse1Data](docs/Model/AllOfMetafieldResponse1Data.md)
 - [AllOfModifierCollectionResponseDataItems](docs/Model/AllOfModifierCollectionResponseDataItems.md)
 - [AllOfModifierResponse1Data](docs/Model/AllOfModifierResponse1Data.md)
 - [AllOfModifierResponseData](docs/Model/AllOfModifierResponseData.md)
 - [AllOfModifierValueCollectionResponseDataItems](docs/Model/AllOfModifierValueCollectionResponseDataItems.md)
 - [AllOfModifierValueResponse1Data](docs/Model/AllOfModifierValueResponse1Data.md)
 - [AllOfModifierValueResponseData](docs/Model/AllOfModifierValueResponseData.md)
 - [AllOfOptionCollectionResponseDataItems](docs/Model/AllOfOptionCollectionResponseDataItems.md)
 - [AllOfOptionResponse1Data](docs/Model/AllOfOptionResponse1Data.md)
 - [AllOfOptionResponse2Data](docs/Model/AllOfOptionResponse2Data.md)
 - [AllOfOptionResponseData](docs/Model/AllOfOptionResponseData.md)
 - [AllOfOptionValueCollectionResponseDataItems](docs/Model/AllOfOptionValueCollectionResponseDataItems.md)
 - [AllOfOptionValueResponseData](docs/Model/AllOfOptionValueResponseData.md)
 - [AllOfProductImageCollectionResponseDataItems](docs/Model/AllOfProductImageCollectionResponseDataItems.md)
 - [AllOfProductImageResponse1Data](docs/Model/AllOfProductImageResponse1Data.md)
 - [AllOfProductImageResponseData](docs/Model/AllOfProductImageResponseData.md)
 - [AllOfProductResponseData](docs/Model/AllOfProductResponseData.md)
 - [AllOfProductReviewCollectionResponseDataItems](docs/Model/AllOfProductReviewCollectionResponseDataItems.md)
 - [AllOfProductReviewResponseData](docs/Model/AllOfProductReviewResponseData.md)
 - [AllOfProductVideoCollectionResponseDataItems](docs/Model/AllOfProductVideoCollectionResponseDataItems.md)
 - [AllOfProductVideoResponse1Data](docs/Model/AllOfProductVideoResponse1Data.md)
 - [AllOfProductVideoResponseData](docs/Model/AllOfProductVideoResponseData.md)
 - [AllOfVariantCollectionResponse1DataItems](docs/Model/AllOfVariantCollectionResponse1DataItems.md)
 - [AllOfVariantCollectionResponse2DataItems](docs/Model/AllOfVariantCollectionResponse2DataItems.md)
 - [AllOfVariantCollectionResponseDataItems](docs/Model/AllOfVariantCollectionResponseDataItems.md)
 - [AllOfVariantResponse1Data](docs/Model/AllOfVariantResponse1Data.md)
 - [AllOfVariantResponseData](docs/Model/AllOfVariantResponseData.md)
 - [AllOfVariantsBatchErrorResponseBatchErrorsItems](docs/Model/AllOfVariantsBatchErrorResponseBatchErrorsItems.md)
 - [AllOfinlineResponse200DataItems](docs/Model/AllOfinlineResponse200DataItems.md)
 - [AllOfproductBase1CustomFieldsItems](docs/Model/AllOfproductBase1CustomFieldsItems.md)
 - [AllOfproductBase1ImagesItems](docs/Model/AllOfproductBase1ImagesItems.md)
 - [AllOfproductBase1PrimaryImage](docs/Model/AllOfproductBase1PrimaryImage.md)
 - [AllOfproductBase1VideosItems](docs/Model/AllOfproductBase1VideosItems.md)
 - [AllOfproductBaseCustomFieldsItems](docs/Model/AllOfproductBaseCustomFieldsItems.md)
 - [AllOfproductBaseImagesItems](docs/Model/AllOfproductBaseImagesItems.md)
 - [AllOfproductBasePrimaryImage](docs/Model/AllOfproductBasePrimaryImage.md)
 - [AllOfproductBaseVideosItems](docs/Model/AllOfproductBaseVideosItems.md)
 - [AllOfproductOptionBase1OptionValues](docs/Model/AllOfproductOptionBase1OptionValues.md)
 - [AllOfproductOptionBaseOptionValues](docs/Model/AllOfproductOptionBaseOptionValues.md)
 - [AllOfproductPostCustomFieldsItems](docs/Model/AllOfproductPostCustomFieldsItems.md)
 - [AllOfproductPostImagesItems](docs/Model/AllOfproductPostImagesItems.md)
 - [AllOfproductPostPrimaryImage](docs/Model/AllOfproductPostPrimaryImage.md)
 - [AllOfproductPostVideosItems](docs/Model/AllOfproductPostVideosItems.md)
 - [AllOfrespProductImageData](docs/Model/AllOfrespProductImageData.md)
 - [AllOfrespProductOptionValueData](docs/Model/AllOfrespProductOptionValueData.md)
 - [AllOfrespProductionOptionData](docs/Model/AllOfrespProductionOptionData.md)
 - [AllOfrespVariantBatchErrorBatchErrorsItems](docs/Model/AllOfrespVariantBatchErrorBatchErrorsItems.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body2](docs/Model/Body2.md)
 - [Brand](docs/Model/Brand.md)
 - [Brand1](docs/Model/Brand1.md)
 - [Brand2](docs/Model/Brand2.md)
 - [BrandCollectionResponse](docs/Model/BrandCollectionResponse.md)
 - [BrandFull](docs/Model/BrandFull.md)
 - [BrandFull1](docs/Model/BrandFull1.md)
 - [BrandResponse](docs/Model/BrandResponse.md)
 - [BrandResponse1](docs/Model/BrandResponse1.md)
 - [BulkPricingRule](docs/Model/BulkPricingRule.md)
 - [BulkPricingRuleFull](docs/Model/BulkPricingRuleFull.md)
 - [BulkPricingRuleFull1](docs/Model/BulkPricingRuleFull1.md)
 - [BulkPricingRuleFull2](docs/Model/BulkPricingRuleFull2.md)
 - [BulkPricingRuleFull3](docs/Model/BulkPricingRuleFull3.md)
 - [CatalogSummary](docs/Model/CatalogSummary.md)
 - [CatalogSummaryFull](docs/Model/CatalogSummaryFull.md)
 - [CatalogSummaryResponse](docs/Model/CatalogSummaryResponse.md)
 - [CategoriesTreeNodeFull](docs/Model/CategoriesTreeNodeFull.md)
 - [CategoriesTreeNodeFull1](docs/Model/CategoriesTreeNodeFull1.md)
 - [CategoriesTreeNodeFull2](docs/Model/CategoriesTreeNodeFull2.md)
 - [CategoriesTreeNodeFull3](docs/Model/CategoriesTreeNodeFull3.md)
 - [CategoriesTreeResp](docs/Model/CategoriesTreeResp.md)
 - [CategoriesTreeResp1](docs/Model/CategoriesTreeResp1.md)
 - [CategoriesTreeResp2](docs/Model/CategoriesTreeResp2.md)
 - [Category](docs/Model/Category.md)
 - [Category1](docs/Model/Category1.md)
 - [CategoryBase](docs/Model/CategoryBase.md)
 - [CategoryFull](docs/Model/CategoryFull.md)
 - [CategoryFull1](docs/Model/CategoryFull1.md)
 - [CategoryResponse](docs/Model/CategoryResponse.md)
 - [CategoryResponse1](docs/Model/CategoryResponse1.md)
 - [ComplexRule](docs/Model/ComplexRule.md)
 - [ComplexRule1](docs/Model/ComplexRule1.md)
 - [ComplexRuleBase](docs/Model/ComplexRuleBase.md)
 - [ComplexRuleBase1](docs/Model/ComplexRuleBase1.md)
 - [ComplexRuleCollectionResponse](docs/Model/ComplexRuleCollectionResponse.md)
 - [ComplexRuleCondition](docs/Model/ComplexRuleCondition.md)
 - [ComplexRuleConditionBase](docs/Model/ComplexRuleConditionBase.md)
 - [ConfigFull](docs/Model/ConfigFull.md)
 - [CustomField](docs/Model/CustomField.md)
 - [CustomField1](docs/Model/CustomField1.md)
 - [CustomField2](docs/Model/CustomField2.md)
 - [CustomUrlBrand](docs/Model/CustomUrlBrand.md)
 - [CustomUrlFull](docs/Model/CustomUrlFull.md)
 - [CustomUrlFull1](docs/Model/CustomUrlFull1.md)
 - [DetailedErrors](docs/Model/DetailedErrors.md)
 - [DetailedErrors1](docs/Model/DetailedErrors1.md)
 - [ErrorBase](docs/Model/ErrorBase.md)
 - [ErrorNoContent](docs/Model/ErrorNoContent.md)
 - [ErrorNotFound](docs/Model/ErrorNotFound.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [ErrorResponseFull](docs/Model/ErrorResponseFull.md)
 - [FormDataImageFileParam](docs/Model/FormDataImageFileParam.md)
 - [GiftCertificateFull](docs/Model/GiftCertificateFull.md)
 - [ImageResponse](docs/Model/ImageResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Data](docs/Model/InlineResponse2008Data.md)
 - [Meta](docs/Model/Meta.md)
 - [MetaCollectionFull](docs/Model/MetaCollectionFull.md)
 - [MetaCollectionFull1](docs/Model/MetaCollectionFull1.md)
 - [MetaEmptyFull](docs/Model/MetaEmptyFull.md)
 - [MetaFieldCollectionResponse](docs/Model/MetaFieldCollectionResponse.md)
 - [MetaFieldCollectionResponse1](docs/Model/MetaFieldCollectionResponse1.md)
 - [Metafield](docs/Model/Metafield.md)
 - [MetafieldBase](docs/Model/MetafieldBase.md)
 - [MetafieldBase1](docs/Model/MetafieldBase1.md)
 - [MetafieldFull](docs/Model/MetafieldFull.md)
 - [MetafieldPost](docs/Model/MetafieldPost.md)
 - [MetafieldPost1](docs/Model/MetafieldPost1.md)
 - [MetafieldPost2](docs/Model/MetafieldPost2.md)
 - [MetafieldPost3](docs/Model/MetafieldPost3.md)
 - [MetafieldPut](docs/Model/MetafieldPut.md)
 - [MetafieldPut1](docs/Model/MetafieldPut1.md)
 - [MetafieldPut2](docs/Model/MetafieldPut2.md)
 - [MetafieldPut3](docs/Model/MetafieldPut3.md)
 - [MetafieldPut4](docs/Model/MetafieldPut4.md)
 - [MetafieldResponse](docs/Model/MetafieldResponse.md)
 - [MetafieldResponse1](docs/Model/MetafieldResponse1.md)
 - [MetafieldResponse2](docs/Model/MetafieldResponse2.md)
 - [MetafieldResponse3](docs/Model/MetafieldResponse3.md)
 - [ModifierCollectionResponse](docs/Model/ModifierCollectionResponse.md)
 - [ModifierPost](docs/Model/ModifierPost.md)
 - [ModifierPut](docs/Model/ModifierPut.md)
 - [ModifierResponse](docs/Model/ModifierResponse.md)
 - [ModifierResponse1](docs/Model/ModifierResponse1.md)
 - [ModifierValueCollectionResponse](docs/Model/ModifierValueCollectionResponse.md)
 - [ModifierValuePost](docs/Model/ModifierValuePost.md)
 - [ModifierValuePut](docs/Model/ModifierValuePut.md)
 - [ModifierValueResponse](docs/Model/ModifierValueResponse.md)
 - [ModifierValueResponse1](docs/Model/ModifierValueResponse1.md)
 - [NotFound](docs/Model/NotFound.md)
 - [OptionCollectionResponse](docs/Model/OptionCollectionResponse.md)
 - [OptionConfig](docs/Model/OptionConfig.md)
 - [OptionPost](docs/Model/OptionPost.md)
 - [OptionPut](docs/Model/OptionPut.md)
 - [OptionResponse](docs/Model/OptionResponse.md)
 - [OptionResponse1](docs/Model/OptionResponse1.md)
 - [OptionResponse2](docs/Model/OptionResponse2.md)
 - [OptionValueCollectionResponse](docs/Model/OptionValueCollectionResponse.md)
 - [OptionValuePost](docs/Model/OptionValuePost.md)
 - [OptionValuePut](docs/Model/OptionValuePut.md)
 - [OptionValueResponse](docs/Model/OptionValueResponse.md)
 - [PaginationFull](docs/Model/PaginationFull.md)
 - [PaginationFull1](docs/Model/PaginationFull1.md)
 - [PaginationFull1Links](docs/Model/PaginationFull1Links.md)
 - [ProductBase](docs/Model/ProductBase.md)
 - [ProductBase1](docs/Model/ProductBase1.md)
 - [ProductCustomFieldBase](docs/Model/ProductCustomFieldBase.md)
 - [ProductCustomFieldPost](docs/Model/ProductCustomFieldPost.md)
 - [ProductCustomFieldPut](docs/Model/ProductCustomFieldPut.md)
 - [ProductFull](docs/Model/ProductFull.md)
 - [ProductImageBase](docs/Model/ProductImageBase.md)
 - [ProductImageCollectionResponse](docs/Model/ProductImageCollectionResponse.md)
 - [ProductImageFull](docs/Model/ProductImageFull.md)
 - [ProductImagePost](docs/Model/ProductImagePost.md)
 - [ProductImagePost1](docs/Model/ProductImagePost1.md)
 - [ProductImagePut](docs/Model/ProductImagePut.md)
 - [ProductImageResponse](docs/Model/ProductImageResponse.md)
 - [ProductImageResponse1](docs/Model/ProductImageResponse1.md)
 - [ProductModifierBase](docs/Model/ProductModifierBase.md)
 - [ProductModifierFull](docs/Model/ProductModifierFull.md)
 - [ProductModifierOptionValueBase](docs/Model/ProductModifierOptionValueBase.md)
 - [ProductModifierOptionValueFull](docs/Model/ProductModifierOptionValueFull.md)
 - [ProductModifierOptionValuePost](docs/Model/ProductModifierOptionValuePost.md)
 - [ProductModifierOptionValuePut](docs/Model/ProductModifierOptionValuePut.md)
 - [ProductModifierPost](docs/Model/ProductModifierPost.md)
 - [ProductModifierPut](docs/Model/ProductModifierPut.md)
 - [ProductOptionBase](docs/Model/ProductOptionBase.md)
 - [ProductOptionBase1](docs/Model/ProductOptionBase1.md)
 - [ProductOptionConfigFull](docs/Model/ProductOptionConfigFull.md)
 - [ProductOptionFull](docs/Model/ProductOptionFull.md)
 - [ProductOptionOptionValueBase](docs/Model/ProductOptionOptionValueBase.md)
 - [ProductOptionOptionValueFull](docs/Model/ProductOptionOptionValueFull.md)
 - [ProductOptionPost](docs/Model/ProductOptionPost.md)
 - [ProductOptionPut](docs/Model/ProductOptionPut.md)
 - [ProductOptionValuePost](docs/Model/ProductOptionValuePost.md)
 - [ProductOptionValuePostProduct](docs/Model/ProductOptionValuePostProduct.md)
 - [ProductOptionValuePut](docs/Model/ProductOptionValuePut.md)
 - [ProductPost](docs/Model/ProductPost.md)
 - [ProductPut](docs/Model/ProductPut.md)
 - [ProductPut1](docs/Model/ProductPut1.md)
 - [ProductPutCollection](docs/Model/ProductPutCollection.md)
 - [ProductResponse](docs/Model/ProductResponse.md)
 - [ProductReviewBase](docs/Model/ProductReviewBase.md)
 - [ProductReviewCollectionResponse](docs/Model/ProductReviewCollectionResponse.md)
 - [ProductReviewFull](docs/Model/ProductReviewFull.md)
 - [ProductReviewPost](docs/Model/ProductReviewPost.md)
 - [ProductReviewPut](docs/Model/ProductReviewPut.md)
 - [ProductReviewResponse](docs/Model/ProductReviewResponse.md)
 - [ProductVariantBase](docs/Model/ProductVariantBase.md)
 - [ProductVariantFull](docs/Model/ProductVariantFull.md)
 - [ProductVariantOptionValueBase](docs/Model/ProductVariantOptionValueBase.md)
 - [ProductVariantOptionValueFull](docs/Model/ProductVariantOptionValueFull.md)
 - [ProductVariantOptionValuePost](docs/Model/ProductVariantOptionValuePost.md)
 - [ProductVariantPost](docs/Model/ProductVariantPost.md)
 - [ProductVariantPostProduct](docs/Model/ProductVariantPostProduct.md)
 - [ProductVariantPut](docs/Model/ProductVariantPut.md)
 - [ProductVariantPut1](docs/Model/ProductVariantPut1.md)
 - [ProductVariantPutProduct](docs/Model/ProductVariantPutProduct.md)
 - [ProductVariantPutProduct1](docs/Model/ProductVariantPutProduct1.md)
 - [ProductVideoBase](docs/Model/ProductVideoBase.md)
 - [ProductVideoCollectionResponse](docs/Model/ProductVideoCollectionResponse.md)
 - [ProductVideoFull](docs/Model/ProductVideoFull.md)
 - [ProductVideoPost](docs/Model/ProductVideoPost.md)
 - [ProductVideoPut](docs/Model/ProductVideoPut.md)
 - [ProductVideoResponse](docs/Model/ProductVideoResponse.md)
 - [ProductVideoResponse1](docs/Model/ProductVideoResponse1.md)
 - [ResourceImage](docs/Model/ResourceImage.md)
 - [ResourceImage1](docs/Model/ResourceImage1.md)
 - [ResourceImage2](docs/Model/ResourceImage2.md)
 - [ResourceImageFull](docs/Model/ResourceImageFull.md)
 - [RespProductImage](docs/Model/RespProductImage.md)
 - [RespProductOptionValue](docs/Model/RespProductOptionValue.md)
 - [RespProductionOption](docs/Model/RespProductionOption.md)
 - [RespVariantBatchError](docs/Model/RespVariantBatchError.md)
 - [VariantBase](docs/Model/VariantBase.md)
 - [VariantCollectionPut](docs/Model/VariantCollectionPut.md)
 - [VariantCollectionResponse](docs/Model/VariantCollectionResponse.md)
 - [VariantCollectionResponse1](docs/Model/VariantCollectionResponse1.md)
 - [VariantCollectionResponse2](docs/Model/VariantCollectionResponse2.md)
 - [VariantPost](docs/Model/VariantPost.md)
 - [VariantPut](docs/Model/VariantPut.md)
 - [VariantResponse](docs/Model/VariantResponse.md)
 - [VariantResponse1](docs/Model/VariantResponse1.md)
 - [VariantsBatchErrorResponse](docs/Model/VariantsBatchErrorResponse.md)

## Documentation For Authorization


## X-Auth-Client

- **Type**: API key
- **API key parameter name**: X-Auth-Client
- **Location**: HTTP header

## X-Auth-Token

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Author



