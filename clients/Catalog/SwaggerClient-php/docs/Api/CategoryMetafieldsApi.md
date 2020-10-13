# BigCommerce\Catalog\CategoryMetafieldsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategoryMetafield**](CategoryMetafieldsApi.md#createcategorymetafield) | **POST** /catalog/categories/{category_id}/metafields | Create a Category Metafield
[**deleteCategoryMetafieldById**](CategoryMetafieldsApi.md#deletecategorymetafieldbyid) | **DELETE** /catalog/categories/{category_id}/metafields/{metafield_id} | Delete a Category Metafield
[**getCategoryMetafieldByCategoryId**](CategoryMetafieldsApi.md#getcategorymetafieldbycategoryid) | **GET** /catalog/categories/{category_id}/metafields/{metafield_id} | Get a Category Metafield
[**getCategoryMetafieldsByCategoryId**](CategoryMetafieldsApi.md#getcategorymetafieldsbycategoryid) | **GET** /catalog/categories/{category_id}/metafields | Get All Category Metafields
[**updateCategoryMetafield**](CategoryMetafieldsApi.md#updatecategorymetafield) | **PUT** /catalog/categories/{category_id}/metafields/{metafield_id} | Update a Category Metafield

# **createCategoryMetafield**
> \BigCommerce\Catalog\Model\MetafieldResponse createCategoryMetafield($body, $accept, $content_type, $category_id)

Create a Category Metafield

Creates a *Cateory Metafield*.  **Required Fields:** - permission_set - namespace - key - value  **Read-Only Fields** - id  **Note:** The max number of metafields allowed on each product, category, variant, or brand is fifty. For more information, see [Platform Limits](https://support.bigcommerce.com/s/article/Platform-Limits) in the Help Center.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\MetafieldPost2(); // \BigCommerce\Catalog\Model\MetafieldPost2 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.

try {
    $result = $apiInstance->createCategoryMetafield($body, $accept, $content_type, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryMetafieldsApi->createCategoryMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\MetafieldPost2**](../Model/MetafieldPost2.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse**](../Model/MetafieldResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategoryMetafieldById**
> deleteCategoryMetafieldById($metafield_id, $category_id, $accept, $content_type)

Delete a Category Metafield

Deletes a *Category Metafield*.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteCategoryMetafieldById($metafield_id, $category_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling CategoryMetafieldsApi->deleteCategoryMetafieldById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |
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

# **getCategoryMetafieldByCategoryId**
> \BigCommerce\Catalog\Model\MetafieldResponse2 getCategoryMetafieldByCategoryId($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields)

Get a Category Metafield

Returns a single *Category Metafield*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$metafield_id = 56; // int | The ID of the `Metafield`.
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getCategoryMetafieldByCategoryId($metafield_id, $category_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryMetafieldsApi->getCategoryMetafieldByCategoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse2**](../Model/MetafieldResponse2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategoryMetafieldsByCategoryId**
> \BigCommerce\Catalog\Model\MetaFieldCollectionResponse1 getCategoryMetafieldsByCategoryId($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields)

Get All Category Metafields

Returns a list of *Metafields* on a *Category*. Optional filter parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$id = 56; // int | Filter items by id.
$idin = array(56); // int[] | 
$idnot_in = array(56); // int[] | 
$idmin = array(56); // int[] | 
$idmax = array(56); // int[] | 
$idgreater = array(56); // int[] | 
$idless = array(56); // int[] | 
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$key = "key_example"; // string | Filter based on a metafield's key.
$namespace = "namespace_example"; // string | Filter based on a metafield's namespace.
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getCategoryMetafieldsByCategoryId($category_id, $accept, $content_type, $id, $idin, $idnot_in, $idmin, $idmax, $idgreater, $idless, $page, $limit, $key, $namespace, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryMetafieldsApi->getCategoryMetafieldsByCategoryId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **id** | **int**| Filter items by id. | [optional]
 **idin** | [**int[]**](../Model/int.md)|  | [optional]
 **idnot_in** | [**int[]**](../Model/int.md)|  | [optional]
 **idmin** | [**int[]**](../Model/int.md)|  | [optional]
 **idmax** | [**int[]**](../Model/int.md)|  | [optional]
 **idgreater** | [**int[]**](../Model/int.md)|  | [optional]
 **idless** | [**int[]**](../Model/int.md)|  | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **key** | **string**| Filter based on a metafield&#x27;s key. | [optional]
 **namespace** | **string**| Filter based on a metafield&#x27;s namespace. | [optional]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\MetaFieldCollectionResponse1**](../Model/MetaFieldCollectionResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategoryMetafield**
> \BigCommerce\Catalog\Model\MetafieldResponse1 updateCategoryMetafield($body, $accept, $content_type, $metafield_id, $category_id)

Update a Category Metafield

Updates a *Category Metafield*.  **Required Fields** * none  **Read-Only Fields** * id * These fields can only be modified by the app (API credentials) that created the metafield:  * namespace  * key  * permission_set  **Usage Notes** * Attempting to modify `namespace`, `key`, and `permission_set` fields using a client ID different from the one used to create those metafields will result in a 403 error message.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryMetafieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\MetafieldPut3(); // \BigCommerce\Catalog\Model\MetafieldPut3 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$metafield_id = 56; // int | The ID of the `Metafield`.
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.

try {
    $result = $apiInstance->updateCategoryMetafield($body, $accept, $content_type, $metafield_id, $category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryMetafieldsApi->updateCategoryMetafield: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\MetafieldPut3**](../Model/MetafieldPut3.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **metafield_id** | **int**| The ID of the &#x60;Metafield&#x60;. |
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |

### Return type

[**\BigCommerce\Catalog\Model\MetafieldResponse1**](../Model/MetafieldResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

