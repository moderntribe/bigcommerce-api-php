# BigCommerce\Subscribers\SubscribersApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSubscriber**](SubscribersApi.md#createsubscriber) | **POST** /customers/subscribers | Create a Subscriber
[**deleteSubscriberById**](SubscribersApi.md#deletesubscriberbyid) | **DELETE** /customers/subscribers/{subscriber_id} | Delete a Subscriber
[**deleteSubscribers**](SubscribersApi.md#deletesubscribers) | **DELETE** /customers/subscribers | Delete Subscribers
[**getSubscriberById**](SubscribersApi.md#getsubscriberbyid) | **GET** /customers/subscribers/{subscriber_id} | Get a Subscriber
[**getSubscribers**](SubscribersApi.md#getsubscribers) | **GET** /customers/subscribers | Get Subscribers
[**updateSubscriber**](SubscribersApi.md#updatesubscriber) | **PUT** /customers/subscribers/{subscriber_id} | Update a Subscriber

# **createSubscriber**
> \BigCommerce\Subscribers\Model\SubscriberResponse createSubscriber($body, $accept, $content_type)

Create a Subscriber

Creates a *Subscriber*.  **Required Fields** * email  **Read Only Fields** * id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Subscribers\Model\SubscriberPost1(); // \BigCommerce\Subscribers\Model\SubscriberPost1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createSubscriber($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->createSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Subscribers\Model\SubscriberPost1**](../Model/SubscriberPost1.md)|  |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Subscribers\Model\SubscriberResponse**](../Model/SubscriberResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriberById**
> deleteSubscriberById($subscriber_id, $content_type, $accept)

Delete a Subscriber

Deletes a *Subscriber*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 56; // int | The ID of the `Subscriber` requested.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $apiInstance->deleteSubscriberById($subscriber_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->deleteSubscriberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriber_id** | **int**| The ID of the &#x60;Subscriber&#x60; requested. |
 **content_type** | **string**|  | [optional] [default to application/json]
 **accept** | **string**|  | [optional] [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscribers**
> deleteSubscribers($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified, $accept, $content_type)

Delete Subscribers

By default, it deletes all *Subscribers*. A filter should be added to avoid deleting all subscribers in a store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Filter items by email.
$first_name = "first_name_example"; // string | Filter items by first_name.
$last_name = "last_name_example"; // string | Filter items by last_name.
$source = "source_example"; // string | Filter items by source.
$order_id = 56; // int | Filter items by order_id.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteSubscribers($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->deleteSubscribers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Filter items by email. | [optional]
 **first_name** | **string**| Filter items by first_name. | [optional]
 **last_name** | **string**| Filter items by last_name. | [optional]
 **source** | **string**| Filter items by source. | [optional]
 **order_id** | **int**| Filter items by order_id. | [optional]
 **date_created** | **\DateTime**| Filter items by date_created. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
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

# **getSubscriberById**
> \BigCommerce\Subscribers\Model\SubscriberResponse getSubscriberById($subscriber_id, $accept, $content_type)

Get a Subscriber

Returns a *Subscriber*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriber_id = 56; // int | The ID of the `Subscriber` requested.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getSubscriberById($subscriber_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getSubscriberById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriber_id** | **int**| The ID of the &#x60;Subscriber&#x60; requested. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Subscribers\Model\SubscriberResponse**](../Model/SubscriberResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscribers**
> \BigCommerce\Subscribers\Model\SubscriberCollectionResponse getSubscribers($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified, $page, $limit, $accept, $content_type)

Get Subscribers

Returns a list of *Subscribers*. Optional filter parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = "email_example"; // string | Filter items by email.
$first_name = "first_name_example"; // string | Filter items by first_name.
$last_name = "last_name_example"; // string | Filter items by last_name.
$source = "source_example"; // string | Filter items by source.
$order_id = 56; // int | Filter items by order_id.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getSubscribers($email, $first_name, $last_name, $source, $order_id, $date_created, $date_modified, $page, $limit, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->getSubscribers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Filter items by email. | [optional]
 **first_name** | **string**| Filter items by first_name. | [optional]
 **last_name** | **string**| Filter items by last_name. | [optional]
 **source** | **string**| Filter items by source. | [optional]
 **order_id** | **int**| Filter items by order_id. | [optional]
 **date_created** | **\DateTime**| Filter items by date_created. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Subscribers\Model\SubscriberCollectionResponse**](../Model/SubscriberCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSubscriber**
> \BigCommerce\Subscribers\Model\SubscriberResponse updateSubscriber($body, $subscriber_id, $accept, $content_type)

Update a Subscriber

Updates a *Subscriber*.  **Read Only Fields** * id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Subscribers\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Subscribers\Api\SubscribersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Subscribers\Model\SubscriberPut1(); // \BigCommerce\Subscribers\Model\SubscriberPut1 | 
$subscriber_id = 56; // int | The ID of the `Subscriber` requested.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateSubscriber($body, $subscriber_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscribersApi->updateSubscriber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Subscribers\Model\SubscriberPut1**](../Model/SubscriberPut1.md)|  |
 **subscriber_id** | **int**| The ID of the &#x60;Subscriber&#x60; requested. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Subscribers\Model\SubscriberResponse**](../Model/SubscriberResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

