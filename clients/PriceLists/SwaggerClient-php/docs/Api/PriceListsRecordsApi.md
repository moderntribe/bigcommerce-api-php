# BigCommerce\PriceLists\PriceListsRecordsApi

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deletePriceListRecord**](PriceListsRecordsApi.md#deletepricelistrecord) | **DELETE** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Delete a Price Record by Currency Code
[**deletePriceListRecordsByFilter**](PriceListsRecordsApi.md#deletepricelistrecordsbyfilter) | **DELETE** /pricelists/{price_list_id}/records | Delete a Price List Record
[**getPriceListRecord**](PriceListsRecordsApi.md#getpricelistrecord) | **GET** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Get a Price Record by Currency Code
[**getPriceListRecordCollection**](PriceListsRecordsApi.md#getpricelistrecordcollection) | **GET** /pricelists/{price_list_id}/records | Get All Price List Records
[**getPriceListRecordsByVariantId**](PriceListsRecordsApi.md#getpricelistrecordsbyvariantid) | **GET** /pricelists/{price_list_id}/records/{variant_id} | Get Price Records by Variant
[**setPriceListRecord**](PriceListsRecordsApi.md#setpricelistrecord) | **PUT** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Set Price List Record by Currency Code
[**setPriceListRecordCollection**](PriceListsRecordsApi.md#setpricelistrecordcollection) | **PUT** /pricelists/{price_list_id}/records | Upsert Price List Records

# **deletePriceListRecord**
> deletePriceListRecord($price_list_id, $variant_id, $currency_code, $content_type, $accept)

Delete a Price Record by Currency Code

Deletes a *Price List Record* using the currency code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$currency_code = "currency_code_example"; // string | The currency code associated with the price record being acted upon.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $apiInstance->deletePriceListRecord($price_list_id, $variant_id, $currency_code, $content_type, $accept);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->deletePriceListRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **currency_code** | **string**| The currency code associated with the price record being acted upon. |
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

# **deletePriceListRecordsByFilter**
> \BigCommerce\PriceLists\Model\NoContent deletePriceListRecordsByFilter($price_list_id, $variant_idin, $accept, $content_type)

Delete a Price List Record

Deletes a *Price List Record*. Deleting the records does not delete the Price List. Optional parameters can be passed in.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_idin = 56; // int | The ID of the `Variant` whose prices were requested.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->deletePriceListRecordsByFilter($price_list_id, $variant_idin, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->deletePriceListRecordsByFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_idin** | **int**| The ID of the &#x60;Variant&#x60; whose prices were requested. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\NoContent**](../Model/NoContent.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListRecord**
> \BigCommerce\PriceLists\Model\PriceRecordResponse getPriceListRecord($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type)

Get a Price Record by Currency Code

Returns a *Price List Record* using the currency code. Optional parameters can be used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$currency_code = "currency_code_example"; // string | The currency code associated with the price record being acted upon.
$include = "include_example"; // string | Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`.  Other valies will be ignored.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getPriceListRecord($price_list_id, $variant_id, $currency_code, $include, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->getPriceListRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **currency_code** | **string**| The currency code associated with the price record being acted upon. |
 **include** | **string**| Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. | [optional]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceRecordResponse**](../Model/PriceRecordResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListRecordCollection**
> \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse getPriceListRecordCollection($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept)

Get All Price List Records

Returns a list of *Price List Records* associated with a *Price List*.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_idin = 56; // int | The ID of the `Variant` whose prices were requested.
$product_idin = "product_idin_example"; // string | A comma-separated list of ids of `Product`s whose prices were requested.
$currency = "currency_example"; // string | Filter items by currency.
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$include = "include_example"; // string | Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include `bulk_pricing_tiers` and `sku`.  Other valies will be ignored.
$price = 1.2; // float | Filter items by price.
$sale_price = 1.2; // float | Filter items by sale_price.
$retail_price = 1.2; // float | Filter items by retail_price.
$map_price = 1.2; // float | Filter items by map_price.
$calculated_price = 1.2; // float | Filter items by calculated_price.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$sku = "sku_example"; // string | Filter items by sku.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $result = $apiInstance->getPriceListRecordCollection($price_list_id, $variant_idin, $product_idin, $currency, $page, $limit, $include, $price, $sale_price, $retail_price, $map_price, $calculated_price, $date_created, $date_modified, $sku, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->getPriceListRecordCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_idin** | **int**| The ID of the &#x60;Variant&#x60; whose prices were requested. | [optional]
 **product_idin** | **string**| A comma-separated list of ids of &#x60;Product&#x60;s whose prices were requested. | [optional]
 **currency** | **string**| Filter items by currency. | [optional]
 **page** | **int**| Specifies the page number in a limited (paginated) list of products. | [optional]
 **limit** | **int**| Controls the number of items per page in a limited (paginated) list of products. | [optional]
 **include** | **string**| Sub-resources to include on a price record, in a comma-separated list. Valid expansions currently include &#x60;bulk_pricing_tiers&#x60; and &#x60;sku&#x60;.  Other valies will be ignored. | [optional]
 **price** | **float**| Filter items by price. | [optional]
 **sale_price** | **float**| Filter items by sale_price. | [optional]
 **retail_price** | **float**| Filter items by retail_price. | [optional]
 **map_price** | **float**| Filter items by map_price. | [optional]
 **calculated_price** | **float**| Filter items by calculated_price. | [optional]
 **date_created** | **\DateTime**| Filter items by date_created. | [optional]
 **date_modified** | **\DateTime**| Filter items by date_modified. For example &#x60;v3/catalog/products?date_last_imported:min&#x3D;2018-06-15&#x60; | [optional]
 **sku** | **string**| Filter items by sku. | [optional]
 **content_type** | **string**|  | [optional] [default to application/json]
 **accept** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse**](../Model/PriceRecordCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPriceListRecordsByVariantId**
> \BigCommerce\PriceLists\Model\PriceRecordCollectionResponse getPriceListRecordsByVariantId($price_list_id, $variant_id, $accept, $content_type)

Get Price Records by Variant

Returns *Price List Records* using the variant ID. Will also contain currency records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->getPriceListRecordsByVariantId($price_list_id, $variant_id, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->getPriceListRecordsByVariantId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceRecordCollectionResponse**](../Model/PriceRecordCollectionResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPriceListRecord**
> \BigCommerce\PriceLists\Model\PriceRecordResponse setPriceListRecord($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type)

Set Price List Record by Currency Code

Creates or updates a*Price List Record* using the currency code.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\PriceLists\Model\PriceRecordPut(); // \BigCommerce\PriceLists\Model\PriceRecordPut | 
$price_list_id = 56; // int | The ID of the `Price List` requested.
$variant_id = 56; // int | ID of the variant on a product, or on an associated Price List Record.
$currency_code = "currency_code_example"; // string | The currency code associated with the price record being acted upon.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->setPriceListRecord($body, $price_list_id, $variant_id, $currency_code, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->setPriceListRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BigCommerce\PriceLists\Model\PriceRecordPut**](../Model/PriceRecordPut.md)|  |
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **variant_id** | **int**| ID of the variant on a product, or on an associated Price List Record. |
 **currency_code** | **string**| The currency code associated with the price record being acted upon. |
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

[**\BigCommerce\PriceLists\Model\PriceRecordResponse**](../Model/PriceRecordResponse.md)

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPriceListRecordCollection**
> object setPriceListRecordCollection($body, $price_list_id, $x_strict_mode, $accept, $content_type)

Upsert Price List Records

Creates or updates *Price List Records*.   **Required Fields** * currency  **Notes**  * Bulk Updates is supported by this endpoint.  * Bulk requests are limited to 100 items per request. * Only one bulk upsert can done at a time. Running more than one in parallel on the **same store** will cause a 429 error and the request will fail.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsRecordsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | 
$price_list_id = 56; // int | The ID of the `Price List` requested.
$x_strict_mode = 0; // int | Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->setPriceListRecordCollection($body, $price_list_id, $x_strict_mode, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsRecordsApi->setPriceListRecordCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)|  |
 **price_list_id** | **int**| The ID of the &#x60;Price List&#x60; requested. |
 **x_strict_mode** | **int**| Header that determines whether the Batch API operates in strict mode or not.  Strict mode will reject the entire request if any item in the batch has an error. | [optional] [default to 0]
 **accept** | **string**|  | [optional] [default to application/json]
 **content_type** | **string**|  | [optional] [default to application/json]

### Return type

**object**

### Authorization

[X-Auth-Client](../../README.md#X-Auth-Client), [X-Auth-Token](../../README.md#X-Auth-Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

