# BigCommerce\Widgets\PlacementApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPlacement**](PlacementApi.md#createplacement) | **POST** /content/placements | Create a Placement
[**deletePlacement**](PlacementApi.md#deleteplacement) | **DELETE** /content/placements/{uuid} | Delete a Placement
[**getPlacement**](PlacementApi.md#getplacement) | **GET** /content/placements/{uuid} | Get a Placement
[**getPlacements**](PlacementApi.md#getplacements) | **GET** /content/placements | Get All Placements
[**updatePlacement**](PlacementApi.md#updateplacement) | **PUT** /content/placements/{uuid} | Update a Placement

# **createPlacement**
> \BigCommerce\Widgets\Model\InlineResponse2004 createPlacement($body, $accept, $content_type)

Create a Placement

Creates a **Placement**.  ## Template files  The `template_file` property accepts the following values.  |Template File|Description| |-|-| |`pages/blog-post`|Blog posts template| |`pages/blog`|Blog posts template| |`pages/brand`|Brand page template| |`pages/category`|Category page template| |`pages/home`|Home page template| |`pages/page`|Content page template| |`pages/product`|Product page template| |`pages/search`|Search page template|

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

$apiInstance = new BigCommerce\Widgets\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Widgets\Model\PlacementPost1(); // \BigCommerce\Widgets\Model\PlacementPost1 | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createPlacement($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->createPlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Widgets\Model\PlacementPost1**](../Model/PlacementPost1.md)|  |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePlacement**
> deletePlacement($uuid, $accept, $content_type)

Delete a Placement

Deletes a **Placement**.

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

$apiInstance = new BigCommerce\Widgets\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific placement.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deletePlacement($uuid, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->deletePlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| The identifier for a specific placement. |
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

# **getPlacement**
> \BigCommerce\Widgets\Model\InlineResponse2004 getPlacement($uuid, $accept, $content_type)

Get a Placement

Returns a single **Placement**.

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

$apiInstance = new BigCommerce\Widgets\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific placement.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getPlacement($uuid, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->getPlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| The identifier for a specific placement. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlacements**
> \BigCommerce\Widgets\Model\InlineResponse2003 getPlacements($page, $limit, $widget_template_kind, $template_file, $widget_uuid, $widget_template_uuid, $accept, $content_type)

Get All Placements

Returns a list of **Placements**. Optional parameters can be passed in.

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

$apiInstance = new BigCommerce\Widgets\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$widget_template_kind = "widget_template_kind_example"; // string | The kind of widget template.
$template_file = "template_file_example"; // string | The template file, for example: `pages/home`.
$widget_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget.
$widget_template_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific widget template.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getPlacements($page, $limit, $widget_template_kind, $template_file, $widget_uuid, $widget_template_uuid, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->getPlacements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **widget_template_kind** | **string**| The kind of widget template. | [optional]
 **template_file** | **string**| The template file, for example: &#x60;pages/home&#x60;. | [optional]
 **widget_uuid** | [**string**](../Model/.md)| The identifier for a specific widget. | [optional]
 **widget_template_uuid** | [**string**](../Model/.md)| The identifier for a specific widget template. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePlacement**
> \BigCommerce\Widgets\Model\InlineResponse2004 updatePlacement($body, $uuid, $accept, $content_type)

Update a Placement

Updates a **Placement**.

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

$apiInstance = new BigCommerce\Widgets\Api\PlacementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\Widgets\Model\PlacementPut1(); // \BigCommerce\Widgets\Model\PlacementPut1 | 
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | The identifier for a specific placement.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->updatePlacement($body, $uuid, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlacementApi->updatePlacement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\Widgets\Model\PlacementPut1**](../Model/PlacementPut1.md)|  |
 **uuid** | [**string**](../Model/.md)| The identifier for a specific placement. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

