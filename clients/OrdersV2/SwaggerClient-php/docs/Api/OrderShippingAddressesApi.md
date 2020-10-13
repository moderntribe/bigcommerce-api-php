# BigCommerce\OrdersV2\OrderShippingAddressesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAShippingAddress**](OrderShippingAddressesApi.md#getashippingaddress) | **GET** /orders/{order_id}/shipping_addresses/{id} | Get a Shipping Address
[**getAllShippingAddresses**](OrderShippingAddressesApi.md#getallshippingaddresses) | **GET** /orders/{order_id}/shipping_addresses | Get Order Shipping Addresses
[**updateAShippingAddress**](OrderShippingAddressesApi.md#updateashippingaddress) | **PUT** /orders/{order_id}/shipping_addresses/{id} | Update a Shipping Address

# **getAShippingAddress**
> \BigCommerce\OrdersV2\Model\OrderShippingAddress1 getAShippingAddress($order_id, $id, $accept, $content_type)

Get a Shipping Address

Gets a shipping address associated with an order.  Returned in the response is shipping_quotes object. Please use the Get Shipping Quotes Endpoint. Using the response will return a 204 for the shipping quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = "order_id_example"; // string | 
$id = "id_example"; // string | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getAShippingAddress($order_id, $id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShippingAddressesApi->getAShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**|  |
 **id** | **string**|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderShippingAddress1**](../Model/OrderShippingAddress1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllShippingAddresses**
> object[] getAllShippingAddresses($order_id, $accept, $content_type, $page, $limit)

Get Order Shipping Addresses

Get all shipping addresses on an order using the `order_id`.  Returned in the response is shipping_quotes object. Please use the Get Shipping Quotes Endpoint. Using the response will return a 204 for the shipping quote.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$page = 1.2; // float | The page to return in the response.
$limit = 1.2; // float | Number of results to return.

try {
    $result = $apiInstance->getAllShippingAddresses($order_id, $accept, $content_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShippingAddressesApi->getAllShippingAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **page** | **float**| The page to return in the response. | [optional]
 **limit** | **float**| Number of results to return. | [optional]

### Return type

**object[]**

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAShippingAddress**
> \BigCommerce\OrdersV2\Model\OrderShippingAddress1 updateAShippingAddress($accept, $content_type, $order_id, $id, $body)

Update a Shipping Address

Update a shipping address associated with an order.  Only these fields are updatable: - `first_name` - `last_name` - `company` - `street_1` - `street_2` - `city` - `zip` - `country` - `country_iso2` - `state` - `email` - `phone`  **Note**: Updating will NOT trigger the recalculation of shipping cost and tax

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\OrdersV2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShippingAddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = "order_id_example"; // string | 
$id = "id_example"; // string | 
$body = new \BigCommerce\OrdersV2\Model\ShippingAddressBase2(); // \BigCommerce\OrdersV2\Model\ShippingAddressBase2 | 

try {
    $result = $apiInstance->updateAShippingAddress($accept, $content_type, $order_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShippingAddressesApi->updateAShippingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **string**|  |
 **id** | **string**|  |
 **body** | [**\BigCommerce\OrdersV2\Model\ShippingAddressBase2**](../Model/ShippingAddressBase2.md)|  | [optional]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderShippingAddress1**](../Model/OrderShippingAddress1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

