# BigCommerce\OrdersV2\OrdersApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAnOrder**](OrdersApi.md#createanorder) | **POST** /orders | Create an Order
[**deleteAllOrders**](OrdersApi.md#deleteallorders) | **DELETE** /orders | Delete All Orders
[**deleteAnOrder**](OrdersApi.md#deleteanorder) | **DELETE** /orders/{order_id} | Archive an Order
[**getAllOrders**](OrdersApi.md#getallorders) | **GET** /orders | Get All Orders
[**getAnOrder**](OrdersApi.md#getanorder) | **GET** /orders/{order_id} | Get an Order
[**getCountOrder**](OrdersApi.md#getcountorder) | **GET** /orders/count | Get a Count of Orders
[**updateAnOrder**](OrdersApi.md#updateanorder) | **PUT** /orders/{order_id} | Update an Order

# **createAnOrder**
> \BigCommerce\OrdersV2\Model\OrderResp1 createAnOrder($body, $accept, $content_type)

Create an Order

Creates an *Order*. To learn more about creating or updating orders, see [Orders Overview](/api-docs/orders/orders-api-overview).  An order can be created with an existing catalog product or a custom product.  **Required Fields**  *   products *   billing_address

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\OrdersV2\Model\OrderReq2(); // \BigCommerce\OrdersV2\Model\OrderReq2 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createAnOrder($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createAnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\OrdersV2\Model\OrderReq2**](../Model/OrderReq2.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderResp1**](../Model/OrderResp1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, Multiple Items

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllOrders**
> deleteAllOrders($accept, $content_type)

Delete All Orders

Archives all orders.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteAllOrders($accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteAllOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
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

# **deleteAnOrder**
> deleteAnOrder($accept, $content_type, $order_id, $body)

Archive an Order

Archives an order.  Any attempt to archive an order on a store with automatic tax enabled will fail, and will return `405 Method not allowed.`

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = 56; // int | ID of the order
$body = new \stdClass; // object | 

try {
    $apiInstance->deleteAnOrder($accept, $content_type, $order_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->deleteAnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **int**| ID of the order |
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllOrders**
> object[] getAllOrders($accept, $content_type, $min_id, $max_id, $min_total, $max_total, $customer_id, $email, $status_id, $cart_id, $payment_method, $min_date_created, $max_date_created, $min_date_modified, $max_date_modified, $page, $limit, $sort, $is_deleted, $channel_id)

Get All Orders

Gets a list of orders using the filter query.  **Notes**  The default sort is by order id, from lowest to highest.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$min_id = 56; // int | The minimum order ID.
$max_id = 56; // int | The maximum order ID.
$min_total = 3.4; // float | The minimum order total in float format. eg. 12.50
$max_total = 1.2; // float | The maximum order total in float format. eg. 12.50
$customer_id = 56; // int | Customer ID
$email = "email_example"; // string | The email of the customer.
$status_id = 56; // int | The staus ID of the order. You can get the status id from the `/orders` endpoints.
$cart_id = "cart_id_example"; // string | The cart ID of the order.
$payment_method = "payment_method_example"; // string | The payment method used on the order.
$min_date_created = "min_date_created_example"; // string | Minimum date the order was created in RFC-2822 or ISO-8601.  RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`  ISO-8601: `2017-04-20T11:32:00.000-04:00`
$max_date_created = "max_date_created_example"; // string | Maximum date the order was created in RFC-2822 or ISO-8601.  RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`  ISO-8601: `2017-04-20T11:32:00.000-04:00`
$min_date_modified = "min_date_modified_example"; // string | Minimum date the order was modified in RFC-2822 or ISO-8601.  RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`  ISO-8601: `2017-04-20T11:32:00.000-04:00`
$max_date_modified = "max_date_modified_example"; // string | Maximum date the order was modified in RFC-2822 or ISO-8601.  RFC-2822: `Thu, 20 Apr 2017 11:32:00 -0400`  ISO-8601: `2017-04-20T11:32:00.000-04:00`
$page = 1.2; // float | The page to return in the response.
$limit = 1.2; // float | Number of results to return.
$sort = "sort_example"; // string | Field and direction to sort orders. To specify the direction, add `:asc` or `:desc` to the end of the query parameter. E.g. `sort=date_created:desc`.
$is_deleted = true; // bool | If the order was deleted or archived.
$channel_id = 56; // int | The Channel ID of the Order.

try {
    $result = $apiInstance->getAllOrders($accept, $content_type, $min_id, $max_id, $min_total, $max_total, $customer_id, $email, $status_id, $cart_id, $payment_method, $min_date_created, $max_date_created, $min_date_modified, $max_date_modified, $page, $limit, $sort, $is_deleted, $channel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAllOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **min_id** | **int**| The minimum order ID. | [optional]
 **max_id** | **int**| The maximum order ID. | [optional]
 **min_total** | **float**| The minimum order total in float format. eg. 12.50 | [optional]
 **max_total** | **float**| The maximum order total in float format. eg. 12.50 | [optional]
 **customer_id** | **int**| Customer ID | [optional]
 **email** | **string**| The email of the customer. | [optional]
 **status_id** | **int**| The staus ID of the order. You can get the status id from the &#x60;/orders&#x60; endpoints. | [optional]
 **cart_id** | **string**| The cart ID of the order. | [optional]
 **payment_method** | **string**| The payment method used on the order. | [optional]
 **min_date_created** | **string**| Minimum date the order was created in RFC-2822 or ISO-8601.  RFC-2822: &#x60;Thu, 20 Apr 2017 11:32:00 -0400&#x60;  ISO-8601: &#x60;2017-04-20T11:32:00.000-04:00&#x60; | [optional]
 **max_date_created** | **string**| Maximum date the order was created in RFC-2822 or ISO-8601.  RFC-2822: &#x60;Thu, 20 Apr 2017 11:32:00 -0400&#x60;  ISO-8601: &#x60;2017-04-20T11:32:00.000-04:00&#x60; | [optional]
 **min_date_modified** | **string**| Minimum date the order was modified in RFC-2822 or ISO-8601.  RFC-2822: &#x60;Thu, 20 Apr 2017 11:32:00 -0400&#x60;  ISO-8601: &#x60;2017-04-20T11:32:00.000-04:00&#x60; | [optional]
 **max_date_modified** | **string**| Maximum date the order was modified in RFC-2822 or ISO-8601.  RFC-2822: &#x60;Thu, 20 Apr 2017 11:32:00 -0400&#x60;  ISO-8601: &#x60;2017-04-20T11:32:00.000-04:00&#x60; | [optional]
 **page** | **float**| The page to return in the response. | [optional]
 **limit** | **float**| Number of results to return. | [optional]
 **sort** | **string**| Field and direction to sort orders. To specify the direction, add &#x60;:asc&#x60; or &#x60;:desc&#x60; to the end of the query parameter. E.g. &#x60;sort&#x3D;date_created:desc&#x60;. | [optional]
 **is_deleted** | **bool**| If the order was deleted or archived. | [optional]
 **channel_id** | **int**| The Channel ID of the Order. | [optional]

### Return type

**object[]**

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnOrder**
> \BigCommerce\OrdersV2\Model\OrderResp1 getAnOrder($accept, $content_type, $order_id, $body)

Get an Order

Gets an *Order*. To learn more about creating or updating orders, see [Orders Overview](/api-docs/orders/orders-api-overview).

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = 56; // int | ID of the order
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->getAnOrder($accept, $content_type, $order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **int**| ID of the order |
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderResp1**](../Model/OrderResp1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, Multiple Items

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountOrder**
> \BigCommerce\OrdersV2\Model\OrdersCountFull1[] getCountOrder($accept, $content_type)

Get a Count of Orders

Gets an array of orders in the store organized by order status.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getCountOrder($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getCountOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrdersCountFull1[]**](../Model/OrdersCountFull1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAnOrder**
> \BigCommerce\OrdersV2\Model\OrderResp1 updateAnOrder($body, $accept, $content_type, $order_id)

Update an Order

Updates an *Order*. To learn more about creating or updating orders, see [Orders Overview](/api-docs/orders/orders-api-overview).

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\OrdersV2\Model\OrderReq1(); // \BigCommerce\OrdersV2\Model\OrderReq1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = 56; // int | ID of the order

try {
    $result = $apiInstance->updateAnOrder($body, $accept, $content_type, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->updateAnOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\OrdersV2\Model\OrderReq1**](../Model/OrderReq1.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **int**| ID of the order |

### Return type

[**\BigCommerce\OrdersV2\Model\OrderResp1**](../Model/OrderResp1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, Multiple Items

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

