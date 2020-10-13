# BigCommerce\Widgets\RegionsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContentRegions**](RegionsApi.md#getcontentregions) | **GET** /content/regions | Get Theme Regions

# **getContentRegions**
> \BigCommerce\Widgets\Model\InlineResponse2005 getContentRegions($template_file, $accept, $content_type)

Get Theme Regions

Returns a list of unique **Theme Regions** in a file.  **Required Query** * `template_file`

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

$apiInstance = new BigCommerce\Widgets\Api\RegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_file = "template_file_example"; // string | The template file, for example: `templateFile=pages/home`.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getContentRegions($template_file, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionsApi->getContentRegions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_file** | **string**| The template file, for example: &#x60;templateFile&#x3D;pages/home&#x60;. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\Widgets\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

