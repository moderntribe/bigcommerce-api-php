# BigCommerce\Catalog\CatalogApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBrands**](CatalogApi.md#deletebrands) | **DELETE** /catalog/brands | Delete Brands
[**deleteProducts**](CatalogApi.md#deleteproducts) | **DELETE** /catalog/products | Delete Products
[**updateVariantsBatch**](CatalogApi.md#updatevariantsbatch) | **PUT** /catalog/variants | Update Variants (Batch)

# **deleteBrands**
> deleteBrands($accept, $content_type, $name, $page_title)

Delete Brands

By default, it deletes all *Brand* objects. A filter should be added to avoid deleting all *Brand* objects in a store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$name = "name_example"; // string | Filter items by name.
$page_title = "page_title_example"; // string | Filter items by page_title.

try {
    $apiInstance->deleteBrands($accept, $content_type, $name, $page_title);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->deleteBrands: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **name** | **string**| Filter items by name. | [optional]
 **page_title** | **string**| Filter items by page_title. | [optional]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProducts**
> deleteProducts($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword)

Delete Products

To delete *Product* objects, you must include a filter. This prevents inadvertently deleting all *Product* objects in a store.  **Example**: To delete products with the id's of 1,2 and 3, use `DELETE /v3/catalog/products?id:in=1,2,3`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$name = "name_example"; // string | Filter items by name.
$sku = "sku_example"; // string | Filter items by sku.
$price = 1.2; // float | Filter items by price.
$weight = 1.2; // float | Filter items by weight.
$condition = "condition_example"; // string | Filter items by condition.
$brand_id = 56; // int | Filter items by brand_id.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_modified:min=2018-06-15`
$date_last_imported = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_last_imported. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$is_visible = true; // bool | Filter items by if visible on the storefront.
$is_featured = 56; // int | Filter items by is_featured.
$inventory_level = 56; // int | Filter items by inventory_level.
$total_sold = 56; // int | Filter items by total_sold.
$type = "type_example"; // string | Filter items by type: `physical` or `digital`.
$categories = 56; // int | Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
$keyword = "keyword_example"; // string | Filter items by keywords found in the `name`, `description`, or `sku` fields, or in the brand name.

try {
    $apiInstance->deleteProducts($accept, $content_type, $name, $sku, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $inventory_level, $total_sold, $type, $categories, $keyword);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->deleteProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **name** | **string**| Filter items by name. | [optional]
 **sku** | **string**| Filter items by sku. | [optional]
 **price** | **float**| Filter items by price. | [optional]
 **weight** | **float**| Filter items by weight. | [optional]
 **condition** | **string**| Filter items by condition. | [optional]
 **brand_id** | **int**| Filter items by brand_id. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; | [optional]
 **date_last_imported** | **\DateTime**| Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **is_visible** | **bool**| Filter items by if visible on the storefront. | [optional]
 **is_featured** | **int**| Filter items by is_featured. | [optional]
 **inventory_level** | **int**| Filter items by inventory_level. | [optional]
 **total_sold** | **int**| Filter items by total_sold. | [optional]
 **type** | **string**| Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. | [optional]
 **categories** | **int**| Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. | [optional]
 **keyword** | **string**| Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. | [optional]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariantsBatch**
> \BigCommerce\Catalog\Model\VariantCollectionResponse2 updateVariantsBatch($body, $accept, $content_type)

Update Variants (Batch)

Creates or updates a batch of `Variant` objects. At the time of writing, the current limit is `50` variants. This limit is subject to change.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateVariantsBatch($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->updateVariantsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\Catalog\Model\VariantCollectionResponse2**](../Model/VariantCollectionResponse2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

