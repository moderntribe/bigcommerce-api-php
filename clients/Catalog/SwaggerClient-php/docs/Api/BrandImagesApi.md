# BigCommerce\Catalog\BrandImagesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrandImage**](BrandImagesApi.md#createbrandimage) | **POST** /catalog/brands/{brand_id}/image | Create a Brand Image
[**deleteBrandImage**](BrandImagesApi.md#deletebrandimage) | **DELETE** /catalog/brands/{brand_id}/image | Delete a Brand Image

# **createBrandImage**
> \BigCommerce\Catalog\Model\InlineResponse2008 createBrandImage($accept, $content_type, $brand_id, $image_file)

Create a Brand Image

Creates a *Brand Image*.   **Required Fields** - image_file: Form posts are the only accepted upload option.  **Read-Only Fields** - id  Only one image at a time can be created. To update a *Brand Image*, use the [PUT Brands](/api-reference/catalog/catalog-api/brands/updatebrand) and an `image_url`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\BrandImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$image_file = "image_file_example"; // string | 

try {
    $result = $apiInstance->createBrandImage($accept, $content_type, $brand_id, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandImagesApi->createBrandImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **image_file** | **string****string**|  | [optional]

### Return type

[**\BigCommerce\Catalog\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBrandImage**
> deleteBrandImage($brand_id, $content_type, $accept)

Delete a Brand Image

Deletes a *Brand Image*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\Catalog\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\Catalog\Api\BrandImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_id = 56; // int | The ID of the `Brand` to which the resource belongs.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $apiInstance->deleteBrandImage($brand_id, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling BrandImagesApi->deleteBrandImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_id** | **int**| The ID of the &#x60;Brand&#x60; to which the resource belongs. |
 **content_type** | **string**|  | [default to application/json]
 **accept** | **string**|  | [default to application/json]

### Return type

void (empty response body)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

