# BigCommerce\OrdersV2\OrderProductsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllOrderProducts**](OrderProductsApi.md#getallorderproducts) | **GET** /orders/{order_id}/products | List Order Products
[**getAnOrderProduct**](OrderProductsApi.md#getanorderproduct) | **GET** /orders/{order_id}/products/{id} | Get an Order Product

# **getAllOrderProducts**
> \BigCommerce\OrdersV2\Model\OrderProducts1[] getAllOrderProducts($order_id, $accept, $content_type, $page, $limit)

List Order Products

Lists all order products on an order using `order_id`. By default, items sort from lowest to highest according to a newly created ID, separate from the `order_id` and the `product_id`.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderProductsApi(
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
    $result = $apiInstance->getAllOrderProducts($order_id, $accept, $content_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductsApi->getAllOrderProducts: ', $e->getMessage(), PHP_EOL;
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

[**\BigCommerce\OrdersV2\Model\OrderProducts1[]**](../Model/OrderProducts1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Multiple Products

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnOrderProduct**
> \BigCommerce\OrdersV2\Model\OrderProducts2 getAnOrderProduct($order_id, $product_id, $id, $accept, $content_type)

Get an Order Product

Gets a product line item associated with the order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$product_id = 56; // int | ID of the product
$id = "id_example"; // string | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getAnOrderProduct($order_id, $product_id, $id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderProductsApi->getAnOrderProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **product_id** | **int**| ID of the product |
 **id** | **string**|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderProducts2**](../Model/OrderProducts2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Custom Product, Product with Variants

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

