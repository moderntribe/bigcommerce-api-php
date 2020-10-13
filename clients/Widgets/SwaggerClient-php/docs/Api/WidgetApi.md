# BigCommerce\Widgets\WidgetApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWidget**](WidgetApi.md#createwidget) | **POST** /content/widgets | Create a Widget
[**deleteWidget**](WidgetApi.md#deletewidget) | **DELETE** /content/widgets/{uuid} | Delete a Widget
[**getWidget**](WidgetApi.md#getwidget) | **GET** /content/widgets/{uuid} | Get a Widget
[**getWidgets**](WidgetApi.md#getwidgets) | **GET** /content/widgets | Get All Widgets
[**updateWidget**](WidgetApi.md#updatewidget) | **PUT** /content/widgets/{uuid} | Update a Widget

# **createWidget**
> \BigCommerce\Widgets\Model\InlineResponse2002 createWidget($body, $accept, $content_type)

Create a Widget

Creates a **Widget**.  ***Note:*** *There is a limit of 1000 widgets per store.*  **Required Fields** * name * widget_template_uuid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Widgets\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Widgets\Model\WidgetPost1(); // \BigCommerce\Widgets\Model\WidgetPost1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createWidget($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->createWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Widgets\Model\WidgetPost1**](../Model/WidgetPost1.md)|  |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWidget**
> deleteWidget($uuid, $accept, $content_type)

Delete a Widget

Deletes a **Widget**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Widgets\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteWidget($uuid, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->deleteWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| The identifier for a specific widget. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidget**
> \BigCommerce\Widgets\Model\InlineResponse2002 getWidget($uuid, $accept, $content_type)

Get a Widget

Returns a single **Widget**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Widgets\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getWidget($uuid, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->getWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| The identifier for a specific widget. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgets**
> \BigCommerce\Widgets\Model\InlineResponse2001 getWidgets($page, $limit, $widget_template_kind, $widget_template_uuid, $accept, $content_type, $name)

Get All Widgets

Returns a list of **Widgets**. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Widgets\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$widget_template_kind = "widget_template_kind_example"; // string | The kind of widget template.
$widget_template_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget template.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$name = "name_example"; // string | The URL encoded name of the widget. Use `name:in` to pass in comma-separated list of widget names. **Ex**: `/widgets?name:in=test-widget-name,header%20images`

try {
    $result = $apiInstance->getWidgets($page, $limit, $widget_template_kind, $widget_template_uuid, $accept, $content_type, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->getWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **widget_template_kind** | **string**| The kind of widget template. | [optional]
 **widget_template_uuid** | [**string**](../Model/.md)| The identifier for a specific widget template. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]
 **name** | **string**| The URL encoded name of the widget. Use &#x60;name:in&#x60; to pass in comma-separated list of widget names. **Ex**: &#x60;/widgets?name:in&#x3D;test-widget-name,header%20images&#x60; | [optional]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidget**
> \BigCommerce\Widgets\Model\InlineResponse2002 updateWidget($body, $uuid, $accept, $content_type)

Update a Widget

Updates a **Widget**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Widgets\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Widgets\Api\WidgetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Widgets\Model\WidgetPut1(); // \BigCommerce\Widgets\Model\WidgetPut1 | 
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updateWidget($body, $uuid, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->updateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Widgets\Model\WidgetPut1**](../Model/WidgetPut1.md)|  |
 **uuid** | [**string**](../Model/.md)| The identifier for a specific widget. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

