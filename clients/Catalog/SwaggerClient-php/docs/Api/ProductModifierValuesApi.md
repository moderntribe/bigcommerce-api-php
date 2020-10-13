# BigCommerce\Catalog\ProductModifierValuesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createModifierValue**](ProductModifierValuesApi.md#createmodifiervalue) | **POST** /catalog/products/{product_id}/modifiers/{modifier_id}/values | Create Modifier Value
[**deleteModifierValueById**](ProductModifierValuesApi.md#deletemodifiervaluebyid) | **DELETE** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Delete Modifier Value
[**getModifierValueById**](ProductModifierValuesApi.md#getmodifiervaluebyid) | **GET** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Get a Modifier Value
[**getModifierValues**](ProductModifierValuesApi.md#getmodifiervalues) | **GET** /catalog/products/{product_id}/modifiers/{modifier_id}/values | Get All Modifier Values
[**updateModifierValue**](ProductModifierValuesApi.md#updatemodifiervalue) | **PUT** /catalog/products/{product_id}/modifiers/{modifier_id}/values/{value_id} | Update a Modifier Value

# **createModifierValue**
> \BigCommerce\Catalog\Model\ModifierValueResponse createModifierValue($body, $accept, $content_type, $product_id, $modifier_id)

Create Modifier Value

Creates a *Modifier Value*.  **Required Fields** * label * sort_order  **Read-Only Fields** * id

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

$apiInstance = new BigCommerce\Catalog\Api\ProductModifierValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\ModifierValuePost(); // \BigCommerce\Catalog\Model\ModifierValuePost | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.

try {
    $result = $apiInstance->createModifierValue($body, $accept, $content_type, $product_id, $modifier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierValuesApi->createModifierValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\ModifierValuePost**](../Model/ModifierValuePost.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |

### Return type

[**\BigCommerce\Catalog\Model\ModifierValueResponse**](../Model/ModifierValueResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModifierValueById**
> deleteModifierValueById($product_id, $modifier_id, $value_id, $accept, $content_type)

Delete Modifier Value

Deletes a *Modifier Value*.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductModifierValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteModifierValueById($product_id, $modifier_id, $value_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierValuesApi->deleteModifierValueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |
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

# **getModifierValueById**
> \BigCommerce\Catalog\Model\ModifierValueResponse1 getModifierValueById($product_id, $modifier_id, $value_id, $accept, $content_type, $include_fields, $exclude_fields)

Get a Modifier Value

Returns a single *Modifier Value*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductModifierValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getModifierValueById($product_id, $modifier_id, $value_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierValuesApi->getModifierValueById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\ModifierValueResponse1**](../Model/ModifierValueResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModifierValues**
> \BigCommerce\Catalog\Model\ModifierValueCollectionResponse getModifierValues($product_id, $modifier_id, $accept, $content_type, $include_fields, $exclude_fields)

Get All Modifier Values

Returns a list of all product *Modifier Values*. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Catalog\Api\ProductModifierValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$include_fields = "include_fields_example"; // string | Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
$exclude_fields = "exclude_fields_example"; // string | Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.

try {
    $result = $apiInstance->getModifierValues($product_id, $modifier_id, $accept, $content_type, $include_fields, $exclude_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierValuesApi->getModifierValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **include_fields** | **string**| Fields to include, in a comma-separated list. The ID and the specified fields will be returned. | [optional]
 **exclude_fields** | **string**| Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded. | [optional]

### Return type

[**\BigCommerce\Catalog\Model\ModifierValueCollectionResponse**](../Model/ModifierValueCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModifierValue**
> \BigCommerce\Catalog\Model\ModifierValueResponse updateModifierValue($body, $accept, $content_type, $product_id, $modifier_id, $value_id)

Update a Modifier Value

Updates a *Modifier Value*.  **Required Fields** * none  **Read-Only Fields** * id

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

$apiInstance = new BigCommerce\Catalog\Api\ProductModifierValuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Catalog\Model\ModifierValuePut(); // \BigCommerce\Catalog\Model\ModifierValuePut | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$product_id = 56; // int | The ID of the `Product` to which the resource belongs.
$modifier_id = 56; // int | The ID of the `Modifier`.
$value_id = 56; // int | The ID of the `Modifier/Option Value`.

try {
    $result = $apiInstance->updateModifierValue($body, $accept, $content_type, $product_id, $modifier_id, $value_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductModifierValuesApi->updateModifierValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Catalog\Model\ModifierValuePut**](../Model/ModifierValuePut.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **product_id** | **int**| The ID of the &#x60;Product&#x60; to which the resource belongs. |
 **modifier_id** | **int**| The ID of the &#x60;Modifier&#x60;. |
 **value_id** | **int**| The ID of the &#x60;Modifier/Option Value&#x60;. |

### Return type

[**\BigCommerce\Catalog\Model\ModifierValueResponse**](../Model/ModifierValueResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

