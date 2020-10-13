# BigCommerce\OrdersV2\OrderShipmentsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOrderShipments**](OrderShipmentsApi.md#createordershipments) | **POST** /orders/{order_id}/shipments | Create Order Shipment
[**deleteAllOrderShipments**](OrderShipmentsApi.md#deleteallordershipments) | **DELETE** /orders/{order_id}/shipments | Delete Order Shipments
[**deleteOrderShipment**](OrderShipmentsApi.md#deleteordershipment) | **DELETE** /orders/{order_id}/shipments/{shipment_id} | Delete an Order Shipment
[**getAllOrderShipments**](OrderShipmentsApi.md#getallordershipments) | **GET** /orders/{order_id}/shipments | Get Order Shipments
[**getCountShipments**](OrderShipmentsApi.md#getcountshipments) | **GET** /orders/{order_id}/shipments/count | Get Count of Order Shipments
[**getOrderShipment**](OrderShipmentsApi.md#getordershipment) | **GET** /orders/{order_id}/shipments/{shipment_id} | Get a Shipment
[**updateOrderShipment**](OrderShipmentsApi.md#updateordershipment) | **PUT** /orders/{order_id}/shipments/{shipment_id} | Update a Shipment

# **createOrderShipments**
> \BigCommerce\OrdersV2\Model\OrderShipment2 createOrderShipments($body, $accept, $content_type, $order_id)

Create Order Shipment

Creates an *Order Shipment*. For more details, see [Shipping an Order](/api-docs/orders/orders-api-overview#shipping-an-order).  **Required Fields** *   order_address_id *   items  **Usage Notes**  Presuming that a valid carrier code is used, a tracking link is generated if either `shipping_provider` or `tracking_carrier` is supplied alongside a tracking number. Providing only the tracking number will result in an unclickable text in the customer facing email.  Acceptable values for `shipping_provider` include an empty string (`\"\"`), auspost, canadapost, endicia, usps, fedex, ups, upsready, upsonline, or shipperhq.  Acceptable values for `tracking_carrier` include an empty string (`\"\"`) or one of the valid tracking-carrier values viewable [here](https://github.com/bigcommerce/dev-docs/blob/development/assets/csv/tracking_carrier_values.csv) and downloadable as a .CSV file [here](https://raw.githubusercontent.com/bigcommerce/dev-docs/development/assets/csv/tracking_carrier_values.csv).

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\OrdersV2\Model\OrderShipmentPost1(); // \BigCommerce\OrdersV2\Model\OrderShipmentPost1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = 56; // int | ID of the order

try {
    $result = $apiInstance->createOrderShipments($body, $accept, $content_type, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->createOrderShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\OrdersV2\Model\OrderShipmentPost1**](../Model/OrderShipmentPost1.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **int**| ID of the order |

### Return type

[**\BigCommerce\OrdersV2\Model\OrderShipment2**](../Model/OrderShipment2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAllOrderShipments**
> deleteAllOrderShipments($order_id, $accept, $content_type)

Delete Order Shipments

Deletes all shipments associated with an order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteAllOrderShipments($order_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->deleteAllOrderShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
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

# **deleteOrderShipment**
> deleteOrderShipment($order_id, $shipment_id, $accept, $content_type)

Delete an Order Shipment

Deletes a shipment associated with an order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$shipment_id = 56; // int | Shipment ID
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteOrderShipment($order_id, $shipment_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->deleteOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **shipment_id** | **int**| Shipment ID |
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

# **getAllOrderShipments**
> \BigCommerce\OrdersV2\Model\OrderShipment1[] getAllOrderShipments($order_id, $accept, $content_type, $page, $limit)

Get Order Shipments

Gets a list of all shipments on an order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
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
    $result = $apiInstance->getAllOrderShipments($order_id, $accept, $content_type, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getAllOrderShipments: ', $e->getMessage(), PHP_EOL;
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

[**\BigCommerce\OrdersV2\Model\OrderShipment1[]**](../Model/OrderShipment1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountShipments**
> \BigCommerce\OrdersV2\Model\OrderCount1 getCountShipments($order_id, $accept, $content_type)

Get Count of Order Shipments

Gets a count of the number of shipments that have been made for a single order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getCountShipments($order_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getCountShipments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderCount1**](../Model/OrderCount1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderShipment**
> \BigCommerce\OrdersV2\Model\OrderShipment2 getOrderShipment($order_id, $shipment_id, $accept, $content_type)

Get a Shipment

Gets an order shipment.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 56; // int | ID of the order
$shipment_id = 56; // int | Shipment ID
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getOrderShipment($order_id, $shipment_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->getOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**| ID of the order |
 **shipment_id** | **int**| Shipment ID |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]

### Return type

[**\BigCommerce\OrdersV2\Model\OrderShipment2**](../Model/OrderShipment2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderShipment**
> \BigCommerce\OrdersV2\Model\OrderShipment2 updateOrderShipment($body, $accept, $content_type, $order_id, $shipment_id)

Update a Shipment

Updates an existing shipment associated with an order.

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

$apiInstance = new BigCommerce\OrdersV2\Api\OrderShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\OrdersV2\Model\OrderShipmentPost2(); // \BigCommerce\OrdersV2\Model\OrderShipmentPost2 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$order_id = 56; // int | ID of the order
$shipment_id = 56; // int | Shipment ID

try {
    $result = $apiInstance->updateOrderShipment($body, $accept, $content_type, $order_id, $shipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderShipmentsApi->updateOrderShipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\OrdersV2\Model\OrderShipmentPost2**](../Model/OrderShipmentPost2.md)|  |
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **order_id** | **int**| ID of the order |
 **shipment_id** | **int**| Shipment ID |

### Return type

[**\BigCommerce\OrdersV2\Model\OrderShipment2**](../Model/OrderShipment2.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

