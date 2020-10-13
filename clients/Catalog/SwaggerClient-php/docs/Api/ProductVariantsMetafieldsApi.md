# BigCommerce\Catalog\ProductVariantsMetafieldsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createVariantMetafield**](ProductVariantsMetafieldsApi.md#createvariantmetafield) | **POST** /catalog/products/{product_id}/variants/{variant_id}/metafields | Create a Product Variant Metafield
[**deleteVariantMetafieldById**](ProductVariantsMetafieldsApi.md#deletevariantmetafieldbyid) | **DELETE** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Delete a Variant Metafield
[**getVariantMetafieldByProductIdAndVariantId**](ProductVariantsMetafieldsApi.md#getvariantmetafieldbyproductidandvariantid) | **GET** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Get Product Variant Metafields
[**getVariantMetafieldsByProductIdAndVariantId**](ProductVariantsMetafieldsApi.md#getvariantmetafieldsbyproductidandvariantid) | **GET** /catalog/products/{product_id}/variants/{variant_id}/metafields | Get Product Variant Metafields
[**updateVariantMetafield**](ProductVariantsMetafieldsApi.md#updatevariantmetafield) | **PUT** /catalog/products/{product_id}/variants/{variant_id}/metafields/{metafield_id} | Update Product Variant Metafields

# **createVariantMetafield**
> \BigCommerce\Catalog\Model\MetafieldResponse createVariantMetafield($body, $accept, $content_type, $product_id, $variant_id)

Create a Product Variant Metafield

Creates a product variant *Metafield*.  **Required Fields:** * permission_set * namespace * key * value  **Read-Only Fields** * id  **Note:** The max number of metafields allowed on each product, category, variant, or brand is fifty. For more information, see [Platform Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductVariantsMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\MetafieldPost(); // \BigCommerce\Catalog\Model\MetafieldPost | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.

try {
    $result = $apiInstance->createVariantMetafield($body, $accept, $content_type, $product_id, $variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsMetafieldsApi->createVariantMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\MetafieldPost**](../Model/MetafieldPost.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse**](../Model/MetafieldResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVariantMetafieldById**
> deleteVariantMetafieldById($metafield_id, $product_id, $variant_id, $accept, $content_type)

Delete a Variant Metafield

Deletes a product variant *Metafield*.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductVariantsMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteVariantMetafieldById($metafield_id, $product_id, $variant_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsMetafieldsApi->deleteVariantMetafieldById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
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

# **getVariantMetafieldByProductIdAndVariantId**
> \BigCommerce\Catalog\Model\MetafieldResponse1 getVariantMetafieldByProductIdAndVariantId($metafield_id, $product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields)

Get Product Variant Metafields

Returns a single product variant *Metafield*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductVariantsMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getVariantMetafieldByProductIdAndVariantId($metafield_id, $product_id, $variant_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsMetafieldsApi->getVariantMetafieldByProductIdAndVariantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse1**](../Model/MetafieldResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariantMetafieldsByProductIdAndVariantId**
> \BigCommerce\Catalog\Model\MetaFieldCollectionResponse getVariantMetafieldsByProductIdAndVariantId($product_id, $variant_id, $accept, $content_type, $page, $limit, $key, $namespace, $include_fields, $exclude_fields)

Get Product Variant Metafields

Returns a list of product variant *Metafields*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductVariantsMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$key = "key_example"; // string | Filter based on a metafield's key.
$namespace = "namespace_example"; // string | Filter based on a metafield's namespace.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getVariantMetafieldsByProductIdAndVariantId($product_id, $variant_id, $accept, $content_type, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsMetafieldsApi->getVariantMetafieldsByProductIdAndVariantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **key** | **string**| Filter based on a metafield&#x27;s key. | [optional]
 **namespace** | **string**| Filter based on a metafield&#x27;s namespace. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\MetaFieldCollectionResponse**](../Model/MetaFieldCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariantMetafield**
> \BigCommerce\Catalog\Model\MetafieldResponse1 updateVariantMetafield($body, $accept, $content_type, $metafield_id, $product_id, $variant_id)

Update Product Variant Metafields

Updates a product variant *Metafield*.  **Required Fields:** * none  **Read-Only Fields** * id * These fields can only be modified by the app (API credentials) that created the metafield:  * namespace  * key  * permission_set  **Usage Notes** * Attempting to modify `namespace`, `key`, and `permission_set` fields using a client ID different from the one used to create those metafields will result in a 403 error message.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductVariantsMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\MetafieldPut1(); // \BigCommerce\Catalog\Model\MetafieldPut1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$metafield_id = 56; // int | The ID of the `Metafield`.
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.

try {
    $result = $apiInstance->updateVariantMetafield($body, $accept, $content_type, $metafield_id, $product_id, $variant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductVariantsMetafieldsApi->updateVariantMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\MetafieldPut1**](../Model/MetafieldPut1.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse1**](../Model/MetafieldResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

