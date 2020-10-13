# BigCommerce\OrdersV2\OrderStatusApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAOrderStatus**](OrderStatusApi.md#getaorderstatus) | **GET** /order_statuses/{status_id} | Get a Single Order Status by Id
[**getOrderStatus**](OrderStatusApi.md#getorderstatus) | **GET** /order_statuses | Get All Order Statuses

# **getAOrderStatus**
> \BigCommerce\OrdersV2\Model\OrderStatusBase1 getAOrderStatus($status_id, $accept, $content_type)

Get a Single Order Status by Id

Returns a single order status.  **Order Status Descriptions:** |Status ID | Name  | Description | |--|--|--| | 0 | Incomplete  | An incomplete order happens when a shopper reached the payment page, but did not complete the transaction. | | 1 | Pending |Customer started the checkout process, but did not complete it. | | 2 | Shipped | Order has been shipped, but receipt has not been confirmed; seller has used the Ship Items action. | | 3 | Partially Shipped | Only some items in the order have been shipped, due to some products being pre-order only or other reasons. | | 4 | Refunded | Seller has used the Refund action. | | 5 | Cancelled | Seller has cancelled an order, due to a stock inconsistency or other reasons. | | 6 |Declined | Seller has marked the order as declined for lack of manual payment, or other reasons. | | 7 | Awaiting Payment | Customer has completed checkout process, but payment has yet to be confirmed. | | 8 | Awaiting Pickup | Order has been pulled, and is awaiting customer pickup from a seller-specified location. | | 9 | Awaiting Shipment | Order has been pulled and packaged, and is awaiting collection from a shipping provider. | | 10 | Completed | Client has paid for their digital product and their file(s) are available for download. | | 11 | Awaiting Fulfillment | Customer has completed the checkout process and payment has been confirmed. | | 12 | Manual Verification Required | Order on hold while some aspect needs to be manually confirmed. | | 13 | Disputed | Customer has initiated a dispute resolution process for the PayPal transaction that paid for the order. | | 14 | Partially Refunded | Seller has partially refunded the order. |

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status_id = 56; // int | The staus ID of the order. You can get the status id from the `/orders` endpoints.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getAOrderStatus($status_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->getAOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_id** | **int**| The staus ID of the order. You can get the status id from the &#x60;/orders&#x60; endpoints. |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderStatusBase1**](../Model/OrderStatusBase1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderStatus**
> \BigCommerce\OrdersV2\Model\OrderStatusBase1[] getOrderStatus($accept, $content_type)

Get All Order Statuses

Returns a Collection of All Order Statuses.  **Order Status Descriptions:** |Status ID | Name  | Description | |--|--|--| | 0 | Incomplete  | An incomplete order happens when a shopper reached the payment page, but did not complete the transaction. | | 1 | Pending |Customer started the checkout process, but did not complete it. | | 2 | Shipped | Order has been shipped, but receipt has not been confirmed; seller has used the Ship Items action. | | 3 | Partially Shipped | Only some items in the order have been shipped, due to some products being pre-order only or other reasons. | | 4 | Refunded | Seller has used the Refund action. | | 5 | Cancelled | Seller has cancelled an order, due to a stock inconsistency or other reasons. | | 6 |Declined | Seller has marked the order as declined for lack of manual payment, or other reasons. | | 7 | Awaiting Payment | Customer has completed checkout process, but payment has yet to be confirmed. | | 8 | Awaiting Pickup | Order has been pulled, and is awaiting customer pickup from a seller-specified location. | | 9 | Awaiting Shipment | Order has been pulled and packaged, and is awaiting collection from a shipping provider. | | 10 | Completed | Client has paid for their digital product and their file(s) are available for download. | | 11 | Awaiting Fulfillment | Customer has completed the checkout process and payment has been confirmed. | | 12 | Manual Verification Required | Order on hold while some aspect needs to be manually confirmed. | | 13 | Disputed | Customer has initiated a dispute resolution process for the PayPal transaction that paid for the order. | | 14 | Partially Refunded | Seller has partially refunded the order. |

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getOrderStatus($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderStatusApi->getOrderStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderStatusBase1[]**](../Model/OrderStatusBase1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

