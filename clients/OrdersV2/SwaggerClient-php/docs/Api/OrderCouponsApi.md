# BigCommerce\OrdersV2\OrderCouponsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOrderCoupons**](OrderCouponsApi.md#getallordercoupons) | **GET** /orders/{order_id}/coupons | List Order Coupons

# **getAllOrderCoupons**
> \BigCommerce\OrdersV2\Model\OrderCouponsBase1[] getAllOrderCoupons($order_id, $accept, $content_type, $page, $limit)

List Order Coupons

Lists all order coupons. Optional parameters can be passed in.  |Type `int`|Type Name| |-|-| |`0`|`per_item_discount`| |`1`|`percentage_discount`| |`2`|`per_total_discount`| |`3`|`shipping_discount`| |`4`|`free_shipping`| |`5`|`promotion`|

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderCouponsApi(
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
    $result = $apiInstance->getAllOrderCoupons($order_id, $accept, $content_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderCouponsApi->getAllOrderCoupons: ', $e->getMessage(), PHP_EOL;
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

[**\BigCommerce\OrdersV2\Model\OrderCouponsBase1[]**](../Model/OrderCouponsBase1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

