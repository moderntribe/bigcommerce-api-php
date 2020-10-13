# BigCommerce\OrdersV2\OrderShippingAddressesQuotesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getShippingQuotes**](OrderShippingAddressesQuotesApi.md#getshippingquotes) | **GET** /orders/{order_id}/shipping_addresses/{shipping_address_id}/shipping_quotes | Get Order Shipping Quotes

# **getShippingQuotes**
> \BigCommerce\OrdersV2\Model\ShippingQuotesBase1 getShippingQuotes($order_id, $shipping_address_id, $accept, $content_type)

Get Order Shipping Quotes

Gets all shipping quotes associated to an order.  This is a read only endpoint and the output can vary based on the shipping quote. A shipping quote can only be generated using the storefront at this time. Orders that are created in the control panel or via the API return a 204 for this endpoint since a shipping quote is not generated during that process.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShippingAddressesQuotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$shipping_address_id = 56; // int | Shipping address ID
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getShippingQuotes($order_id, $shipping_address_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShippingAddressesQuotesApi->getShippingQuotes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **shipping_address_id** | **int**| Shipping address ID |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\ShippingQuotesBase1**](../Model/ShippingQuotesBase1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Fixed Shipping, UPS Example

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

