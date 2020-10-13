# BigCommerce\StoreInfo\TimeZoneApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeGet**](TimeZoneApi.md#timeget) | **GET** /time | Get System Timestamp

# **timeGet**
> \BigCommerce\StoreInfo\Model\TimeStampFull1 timeGet($accept, $content_type)

Get System Timestamp

Returns the system timestamp at the time of the request. The time resource is useful for validating API authentication details and testing client connections.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\StoreInfo\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\StoreInfo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\StoreInfo\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\StoreInfo\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\StoreInfo\Api\TimeZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "accept_example"; // string | 
$content_type = "content_type_example"; // string | 

try {
    $result = $apiInstance->timeGet($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeZoneApi->timeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  |
 **content_type** | **string**|  |

### Return type

[**\BigCommerce\StoreInfo\Model\TimeStampFull1**](../Model/TimeStampFull1.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

