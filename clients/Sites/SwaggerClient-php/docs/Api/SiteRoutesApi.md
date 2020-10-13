# Swagger\Client\SiteRoutesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRoute**](SiteRoutesApi.md#deleteroute) | **DELETE** /sites/{site_id}/routes/{route_id} | Delete a Site Route
[**getSiteRoute**](SiteRoutesApi.md#getsiteroute) | **GET** /sites/{site_id}/routes/{route_id} | Get a Site Route
[**indexSiteRoutes**](SiteRoutesApi.md#indexsiteroutes) | **GET** /sites/{site_id}/routes | Get a Site&#x27;s Routes
[**postSiteRoute**](SiteRoutesApi.md#postsiteroute) | **POST** /sites/{site_id}/routes | Create a Site Route
[**putSiteRoute**](SiteRoutesApi.md#putsiteroute) | **PUT** /sites/{site_id}/routes/{route_id} | Update a Site Route
[**sitesSiteIdRoutesPut**](SiteRoutesApi.md#sitessiteidroutesput) | **PUT** /sites/{site_id}/routes | Update Site&#x27;s Routes

# **deleteRoute**
> deleteRoute($site_id, $route_id)

Delete a Site Route

Delete a site's route.   - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$route_id = "route_id_example"; // string | 

try {
    $apiInstance->deleteRoute($site_id, $route_id);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->deleteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **route_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteRoute**
> \Swagger\Client\Model\InlineResponse2011 getSiteRoute($site_id, $route_id)

Get a Site Route

Get a site's route.  - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$route_id = "route_id_example"; // string | 

try {
    $result = $apiInstance->getSiteRoute($site_id, $route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->getSiteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **route_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **indexSiteRoutes**
> \Swagger\Client\Model\InlineResponse2001 indexSiteRoutes($site_id, $type)

Get a Site's Routes

Get a site's routes.  - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Request Body](#request-body) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = "site_id_example"; // string | 
$type = "type_example"; // string | Filter routes by a given resource type

try {
    $result = $apiInstance->indexSiteRoutes($site_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->indexSiteRoutes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **string**|  |
 **type** | **string**| Filter routes by a given resource type | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSiteRoute**
> \Swagger\Client\Model\InlineResponse2011 postSiteRoute($body, $site_id)

Create a Site Route

Create routes that tell BigCommerce how to link to pages on a [headless storefront](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless).  - [Usage notes](#usage-notes) - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Request Body](#request-body) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)  ## Usage Notes * For a list of [supported route types](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api#route-types), see [Sites and Routes API Description](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SiteRouteBase1(); // \Swagger\Client\Model\SiteRouteBase1 | 
$site_id = "site_id_example"; // string | 

try {
    $result = $apiInstance->postSiteRoute($body, $site_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->postSiteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SiteRouteBase1**](../Model/SiteRouteBase1.md)|  |
 **site_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSiteRoute**
> \Swagger\Client\Model\InlineResponse2011 putSiteRoute($body, $site_id, $route_id)

Update a Site Route

Update a site's route.  - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Request Body](#request-body) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SiteRouteFull1(); // \Swagger\Client\Model\SiteRouteFull1 | 
$site_id = "site_id_example"; // string | 
$route_id = "route_id_example"; // string | 

try {
    $result = $apiInstance->putSiteRoute($body, $site_id, $route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->putSiteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SiteRouteFull1**](../Model/SiteRouteFull1.md)|  |
 **site_id** | **string**|  |
 **route_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sitesSiteIdRoutesPut**
> \Swagger\Client\Model\InlineResponse2001 sitesSiteIdRoutesPut($site_id, $body)

Update Site's Routes

Upsert routes for site with ID `{site_id}`.  - [Usage notes](#usage-notes) - [Authorization](#authorization) - [Request Parameters](#request-parameters) - [Request Body](#request-body) - [Responses](#responses) - [Send a Test Request](#send-a-test-request)  ## Usage Notes * `id` is required when updating existing route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new Swagger\Client\Api\SiteRoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$site_id = 56; // int | 
$body = array(new \stdClass); // object[] | 

try {
    $result = $apiInstance->sitesSiteIdRoutesPut($site_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteRoutesApi->sitesSiteIdRoutesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **site_id** | **int**|  |
 **body** | [**object[]**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

