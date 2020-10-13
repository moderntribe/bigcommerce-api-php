# BigCommerce\Catalog\CategoryImagesApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCategoryImage**](CategoryImagesApi.md#createcategoryimage) | **POST** /catalog/categories/{category_id}/image | Create a Category Image
[**deleteCategoryImage**](CategoryImagesApi.md#deletecategoryimage) | **DELETE** /catalog/categories/{category_id}/image | Delete a Category Image

# **createCategoryImage**
> \BigCommerce\Catalog\Model\InlineResponse2008 createCategoryImage($accept, $content_type, $category_id, $image_file)

Create a Category Image

Create a *Category Image*.   **Required Fields** - image_file: Form posts are the only accepted upload option.  Only one image at a time can be created.  Limit image size to 1MB.   To update a *Category Image*, use the [PUT Categories](/api-reference/catalog/catalog-api/category/updatecategory) and an `image_url`.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.
$image_file = "image_file_example"; // string | 

try {
    $result = $apiInstance->createCategoryImage($accept, $content_type, $category_id, $image_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryImagesApi->createCategoryImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept** | **string**|  | [default to application/json]
 **content_type** | **string**|  | [default to application/json]
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |
 **image_file** | **string****string**|  | [optional]

### Return type

[**\BigCommerce\Catalog\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCategoryImage**
> deleteCategoryImage($category_id, $accept, $content_type)

Delete a Category Image

Deletes a *Cateogory Image*.

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

$apiInstance = new BigCommerce\Catalog\Api\CategoryImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 56; // int | The ID of the `Category` to which the resource belongs.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deleteCategoryImage($category_id, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling CategoryImagesApi->deleteCategoryImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **int**| The ID of the &#x60;Category&#x60; to which the resource belongs. |
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

