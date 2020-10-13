# BigCommerce\OrdersV2\OrderTaxesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrderTaxes**](OrderTaxesApi.md#getordertaxes) | **GET** /orders/{order_id}/taxes | Get All Order Taxes

# **getOrderTaxes**
> \BigCommerce\OrdersV2\Model\OrderTaxesBase1[] getOrderTaxes($order_id, $accept, $content_type, $page, $limit, $details)

Get All Order Taxes

Gets all order taxes using `order_id`. Each tax applied to an order. This information can be useful for reporting purposes. Pass in the query parameter `?details=true` to return extra details about order taxes. `order_product_id` and `line_item_type` are also returned.  All values are read-only.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderTaxesApi(
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
$details = "true"; // string | To return detailed tax information, pass in the details query.

try {
    $result = $apiInstance->getOrderTaxes($order_id, $accept, $content_type, $page, $limit, $details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTaxesApi->getOrderTaxes: ', $e->getMessage(), PHP_EOL;
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
 **details** | **string**| To return detailed tax information, pass in the details query. | [optional] [default to true]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderTaxesBase1[]**](../Model/OrderTaxesBase1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

