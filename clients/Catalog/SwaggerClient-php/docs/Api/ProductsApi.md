# BigCommerce\Catalog\ProductsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProduct**](ProductsApi.md#createproduct) | **POST** /catalog/products | Create a Product
[**deleteProductById**](ProductsApi.md#deleteproductbyid) | **DELETE** /catalog/products/{product_id} | Delete a Product
[**deleteProducts**](ProductsApi.md#deleteproducts) | **DELETE** /catalog/products | Delete Products
[**getProductById**](ProductsApi.md#getproductbyid) | **GET** /catalog/products/{product_id} | Get a Product
[**getProducts**](ProductsApi.md#getproducts) | **GET** /catalog/products | Get All Products
[**updateProduct**](ProductsApi.md#updateproduct) | **PUT** /catalog/products/{product_id} | Update a Product
[**updateProducts**](ProductsApi.md#updateproducts) | **PUT** /catalog/products | Update Products (Batch)

# **createProduct**
> \BigCommerce\Catalog\Model\ProductResponse createProduct($body, $content_type, $accept, $include_fields)

Create a Product

Creates a *Product*. Only one product can be created at a time.  **Required Fields:** - `name` - `type` - `weight` - `price`  **Read-Only Fields** - `id` - `date_created` - `date_modified` - `calculated_price` - `base_variant_id`  **Usage Notes** * `POST` requests to `/products` accepts a single `video` object; to send an array of video objects, see: `/products/{product_id}/videos`

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\ProductBase1(); // \BigCommerce\Catalog\Model\ProductBase1 | 
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.

try {
    $result = $apiInstance->createProduct($body, $content_type, $accept, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->createProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\ProductBase1**](../Model/ProductBase1.md)|  |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProductById**
> deleteProductById($product_id, $accept, $content_type)

Delete a Product

Deletes a *Product*.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteProductById($product_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->deleteProductById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
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
    echo 'Exception when calling ProductsApi->deleteProducts: ', $e->getMessage(), PHP_EOL;
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

# **getProductById**
> \BigCommerce\Catalog\Model\ProductResponse getProductById($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id)

Get a Product

Returns a single *Product*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include = "include_example"; // string | Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
$price_list_id = 56; // int | This filter returns the product pricing with the *Price List* pricing instead. To use:  `?price_list_id=1`. If there are variants use: `?price_list_id=1&include=variants`

try {
    $result = $apiInstance->getProductById($product_id, $accept, $content_type, $include, $include_fields, $exclude_fields, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProductById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include** | **string**| Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]
 **price_list_id** | **int**| This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; | [optional]

### Return type

[**\BigCommerce\Catalog\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProducts**
> \BigCommerce\Catalog\Model\InlineResponse200 getProducts($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort)

Get All Products

Returns a list of **Products**. Optional filter parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter items by id.
$idin = array(56); // int[] | 
$idnot_in = array(56); // int[] | 
$idmin = array(56); // int[] | 
$idmax = array(56); // int[] | 
$idgreater = array(56); // int[] | 
$idless = array(56); // int[] | 
$name = "name_example"; // string | Filter items by name.
$sku = "sku_example"; // string | Filter items by sku.
$upc = "upc_example"; // string | Filter items by upc.
$price = 1.2; // float | Filter items by price.
$weight = 1.2; // float | Filter items by weight.
$condition = "condition_example"; // string | Filter items by condition.
$brand_id = 56; // int | Filter items by brand_id.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_modified:min=2018-06-15`
$date_last_imported = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_last_imported. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$is_visible = true; // bool | Filter items by if visible on the storefront.
$is_featured = 56; // int | Filter items by is_featured. `0` for true, `1` for false.
$is_free_shipping = 56; // int | Filter items by is_free_shipping.
$inventory_level = 56; // int | Filter items by inventory_level.
$inventory_low = 56; // int | Filter items by inventory_low. Values: 1, 0.
$out_of_stock = 56; // int | Filter items by out_of_stock. To enable the filter, pass `out_of_stock`=`1`.
$total_sold = 56; // int | Filter items by total_sold.
$type = "type_example"; // string | Filter items by type: `physical` or `digital`.
$categories = 56; // int | Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use `categories:in=12`.
$keyword = "keyword_example"; // string | Filter items by keywords found in the `name`, `description`, or `sku` fields, or in the brand name.
$keyword_context = "keyword_context_example"; // string | Set context for a product search.
$status = 56; // int | Filter items by status.
$include = "include_example"; // string | Sub-resources to include on a product, in a comma-separated list. If `options` or `modifiers` is used, results are limited to 10 per page.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
$availability = "availability_example"; // string | Filter items by availability. Values are: available, disabled, preorder.
$price_list_id = 56; // int | This filter returns the product pricing with the *Price List* pricing instead. To use:  `?price_list_id=1`. If there are variants use: `?price_list_id=1&include=variants`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$direction = "direction_example"; // string | Sort direction. Acceptable values are: `asc`, `desc`.
$sort = "sort_example"; // string | Field name to sort by.

try {
    $result = $apiInstance->getProducts($id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $name, $sku, $upc, $price, $weight, $condition, $brand_id, $date_modified, $date_last_imported, $is_visible, $is_featured, $is_free_shipping, $inventory_level, $inventory_low, $out_of_stock, $total_sold, $type, $categories, $keyword, $keyword_context, $status, $include, $include_fields, $exclude_fields, $availability, $price_list_id, $page, $limit, $direction, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->getProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter items by id. | [optional]
 **idin** | [**int[]**](../Model/int.md)|  | [optional]
 **idnot_in** | [**int[]**](../Model/int.md)|  | [optional]
 **idmin** | [**int[]**](../Model/int.md)|  | [optional]
 **idmax** | [**int[]**](../Model/int.md)|  | [optional]
 **idgreater** | [**int[]**](../Model/int.md)|  | [optional]
 **idless** | [**int[]**](../Model/int.md)|  | [optional]
 **name** | **string**| Filter items by name. | [optional]
 **sku** | **string**| Filter items by sku. | [optional]
 **upc** | **string**| Filter items by upc. | [optional]
 **price** | **float**| Filter items by price. | [optional]
 **weight** | **float**| Filter items by weight. | [optional]
 **condition** | **string**| Filter items by condition. | [optional]
 **brand_id** | **int**| Filter items by brand_id. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_modified:min&#x3D;2018-06-15&#x60; | [optional]
 **date_last_imported** | **\DateTime**| Filter items by date_last_imported. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **is_visible** | **bool**| Filter items by if visible on the storefront. | [optional]
 **is_featured** | **int**| Filter items by is_featured. &#x60;0&#x60; for true, &#x60;1&#x60; for false. | [optional]
 **is_free_shipping** | **int**| Filter items by is_free_shipping. | [optional]
 **inventory_level** | **int**| Filter items by inventory_level. | [optional]
 **inventory_low** | **int**| Filter items by inventory_low. Values: 1, 0. | [optional]
 **out_of_stock** | **int**| Filter items by out_of_stock. To enable the filter, pass &#x60;out_of_stock&#x60;&#x3D;&#x60;1&#x60;. | [optional]
 **total_sold** | **int**| Filter items by total_sold. | [optional]
 **type** | **string**| Filter items by type: &#x60;physical&#x60; or &#x60;digital&#x60;. | [optional]
 **categories** | **int**| Filter items by categories.  If a product is in more than one category, using this query will not return the product. Instead use &#x60;categories:in&#x3D;12&#x60;. | [optional]
 **keyword** | **string**| Filter items by keywords found in the &#x60;name&#x60;, &#x60;description&#x60;, or &#x60;sku&#x60; fields, or in the brand name. | [optional]
 **keyword_context** | **string**| Set context for a product search. | [optional]
 **status** | **int**| Filter items by status. | [optional]
 **include** | **string**| Sub-resources to include on a product, in a comma-separated list. If &#x60;options&#x60; or &#x60;modifiers&#x60; is used, results are limited to 10 per page. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]
 **availability** | **string**| Filter items by availability. Values are: available, disabled, preorder. | [optional]
 **price_list_id** | **int**| This filter returns the product pricing with the *Price List* pricing instead. To use:  &#x60;?price_list_id&#x3D;1&#x60;. If there are variants use: &#x60;?price_list_id&#x3D;1&amp;include&#x3D;variants&#x60; | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **direction** | **string**| Sort direction. Acceptable values are: &#x60;asc&#x60;, &#x60;desc&#x60;. | [optional]
 **sort** | **string**| Field name to sort by. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProduct**
> \BigCommerce\Catalog\Model\ProductResponse updateProduct($body, $accept, $content_type, $product_id, $include_fields)

Update a Product

Updates a *Product*.  **Read-Only Fields** - id - date_created - date_modified - calculated_price - base_variant_id

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\ProductPut1(); // \BigCommerce\Catalog\Model\ProductPut1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.

try {
    $result = $apiInstance->updateProduct($body, $accept, $content_type, $product_id, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\ProductPut1**](../Model/ProductPut1.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\ProductResponse**](../Model/ProductResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProducts**
> \BigCommerce\Catalog\Model\InlineResponse200 updateProducts($accept, $content_type, $body, $include_fields)

Update Products (Batch)

Updates products in batches. At the time of writing, batches are limited to 10 products.  **Required Fields** * `id` - product `id` is required for batch updates to products.  **Read-Only Fields** - `id` - `date_created` - `date_modified` - `calculated_price` - `base_variant_id`

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

$apiInstance = new BigCommerce\Catalog\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$body = array(new \BigCommerce\Catalog\Model\array()); // object[][] | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.

try {
    $result = $apiInstance->updateProducts($accept, $content_type, $body, $include_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->updateProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **body** | [**object[][]**](../Model/array.md)|  | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

