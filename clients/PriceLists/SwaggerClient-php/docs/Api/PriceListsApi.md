# BigCommerce\PriceLists\PriceListsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPriceList**](PriceListsApi.md#createpricelist) | **POST** /pricelists | Create a Price List
[**deletePriceList**](PriceListsApi.md#deletepricelist) | **DELETE** /pricelists/{price_list_id} | Delete a Price List
[**deletePriceListsByFilter**](PriceListsApi.md#deletepricelistsbyfilter) | **DELETE** /pricelists | Delete All Price Lists
[**getPriceList**](PriceListsApi.md#getpricelist) | **GET** /pricelists/{price_list_id} | Get a Price List
[**getPriceListCollection**](PriceListsApi.md#getpricelistcollection) | **GET** /pricelists | Get All Price Lists
[**updatePriceList**](PriceListsApi.md#updatepricelist) | **PUT** /pricelists/{price_list_id} | Update a Price List

# **createPriceList**
> \BigCommerce\PriceLists\Model\PriceListResponse createPriceList($body, $accept, $content_type)

Create a Price List

Creates a *Price List*.  **Required Fields** * name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\PriceLists\Model\PriceListPost(); // \BigCommerce\PriceLists\Model\PriceListPost | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createPriceList($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->createPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\PriceLists\Model\PriceListPost**](../Model/PriceListPost.md)|  |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceListResponse**](../Model/PriceListResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePriceList**
> deletePriceList($price_list_id)

Delete a Price List

Deletes a *Price List*. All associated price records are also removed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.

try {
    $apiInstance->deletePriceList($price_list_id);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePriceListsByFilter**
> deletePriceListsByFilter($id, $name, $accept, $content_type)

Delete All Price Lists

Deletes a *Price List*. All associated price records are also removed. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deletePriceListsByFilter($id, $name, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceListsByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter items by id. | [optional]
 **name** | **string**| Filter items by name. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceList**
> \BigCommerce\PriceLists\Model\PriceListResponse1 getPriceList($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit)

Get a Price List

Returns a single *Price List*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.

try {
    $result = $apiInstance->getPriceList($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **id** | **int**| Filter items by id. | [optional]
 **name** | **string**| Filter items by name. | [optional]
 **date_created** | **\DateTime**| Filter items by date_created. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]

### Return type

[**\BigCommerce\PriceLists\Model\PriceListResponse1**](../Model/PriceListResponse1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListCollection**
> \BigCommerce\PriceLists\Model\PriceListCollectionResponse getPriceListCollection($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept)

Get All Price Lists

Returns a list of *Price Lists*. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $result = $apiInstance->getPriceListCollection($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Filter items by id. | [optional]
 **name** | **string**| Filter items by name. | [optional]
 **date_created** | **\DateTime**| Filter items by date_created. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **content_type** | **string**|  | [optional] [default to application/json]
 **accept** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceListCollectionResponse**](../Model/PriceListCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePriceList**
> \BigCommerce\PriceLists\Model\PriceListResponse updatePriceList($body, $price_list_id)

Update a Price List

Updates a *Price List*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\PriceLists\Model\PriceListPut(); // \BigCommerce\PriceLists\Model\PriceListPut | 
$price_list_id = 56; // int | The ID of the `Price List` requested.

try {
    $result = $apiInstance->updatePriceList($body, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->updatePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\PriceLists\Model\PriceListPut**](../Model/PriceListPut.md)|  |
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |

### Return type

[**\BigCommerce\PriceLists\Model\PriceListResponse**](../Model/PriceListResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

