# BigCommerce\PriceLists\PriceListsAssignmentsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPriceListAssignments**](PriceListsAssignmentsApi.md#createpricelistassignments) | **POST** /pricelists/assignments | Create Price List Assignments
[**deletePriceListAssignmentsByFilter**](PriceListsAssignmentsApi.md#deletepricelistassignmentsbyfilter) | **DELETE** /pricelists/assignments | Delete Price List Assignments
[**getListOfPriceListAssignments**](PriceListsAssignmentsApi.md#getlistofpricelistassignments) | **GET** /pricelists/assignments | Get Price List Assignments

# **createPriceListAssignments**
> object createPriceListAssignments($body)

Create Price List Assignments

Creates a batch of `Price List Assignments`.

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

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \BigCommerce\PriceLists\Model\Body()); // \BigCommerce\PriceLists\Model\Body[] | A BigCommerce `Price List Assignments` request.

try {
    $result = $apiInstance->createPriceListAssignments($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsAssignmentsApi->createPriceListAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\PriceLists\Model\Body[]**](../Model/Body.md)| A BigCommerce &#x60;Price List Assignments&#x60; request. |

### Return type

**object**

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePriceListAssignmentsByFilter**
> \BigCommerce\PriceLists\Model\InlineResponse204 deletePriceListAssignmentsByFilter($id, $price_list_id, $customer_group_id, $channel_id)

Delete Price List Assignments

Deletes one or more `Price List Assignments` objects from BigCommerce using a filter.

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

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the `Price List Assignment`.
$price_list_id = 56; // int | The ID of the `Price List`.
$customer_group_id = 56; // int | The ID of the `Customer Group`.
$channel_id = 56; // int | The ID of the `Channel`.

try {
    $result = $apiInstance->deletePriceListAssignmentsByFilter($id, $price_list_id, $customer_group_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsAssignmentsApi->deletePriceListAssignmentsByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the &#x60;Price List Assignment&#x60;. | [optional]
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60;. | [optional]
 **customer_group_id** | **int**| The ID of the &#x60;Customer Group&#x60;. | [optional]
 **channel_id** | **int**| The ID of the &#x60;Channel&#x60;. | [optional]

### Return type

[**\BigCommerce\PriceLists\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListOfPriceListAssignments**
> \BigCommerce\PriceLists\Model\InlineResponse200 getListOfPriceListAssignments($id, $price_list_id, $customer_group_id, $channel_id)

Get Price List Assignments

Fetches an array of `Price List Assignments` matching a particular Customer Group and Price List and Channel.

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

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsAssignmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The ID of the `Price List Assignment`.
$price_list_id = 56; // int | The ID of the `Price List`.
$customer_group_id = 56; // int | The ID of the `Customer Group`.
$channel_id = 56; // int | The ID of the `Channel`.

try {
    $result = $apiInstance->getListOfPriceListAssignments($id, $price_list_id, $customer_group_id, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsAssignmentsApi->getListOfPriceListAssignments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the &#x60;Price List Assignment&#x60;. | [optional]
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60;. | [optional]
 **customer_group_id** | **int**| The ID of the &#x60;Customer Group&#x60;. | [optional]
 **channel_id** | **int**| The ID of the &#x60;Channel&#x60;. | [optional]

### Return type

[**\BigCommerce\PriceLists\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

