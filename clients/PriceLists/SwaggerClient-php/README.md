# SwaggerClient-php
Populate different versions of catalog pricing and assign them to different [customer groups](/api-reference/customer-subscribers/customers-api) at the variant level.  - [Authentication](#authentication) - [Price Lists](#price-lists) - [Price list assignments](#price-list-assignments) - [Usage notes](#usage-notes) - [Additional information](#additional-information)  ## Authentication  Authenticate requests by including an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` and `client_id` in the request headers.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/{{ENDPOINT}} Content-Type: application/json X-Auth-Client: {{CLIENT_ID}} X-Auth-Token: {{ACCESS_TOKEN}} ```  ### OAuth Scopes  | UI Name                                      | Permission | Parameter                                     | |----------------------------------------------|------------|-----------------------------------------------| | Products                                     | modify     | `store_v2_products`                           | | Products                                     | read-only  | `store_v2_products_read_only`                 |  ## Price Lists  The association of a Price List to a Customer Group can be done either via the Control Panel or using the [Customer Groups API.](/api-reference/customer-subscribers/customers-api)  Additionally, [Price List Assignments](https://developer.bigcommerce.com/api-reference/store-management/price-lists/price-lists-records/) can be created to assign Price Lists to a specific [Channel](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api). Price lists assigned to a channel apply to all shoppers on that channel, unless there is a more specific assignment.  If an active Price List does not contain prices for a variant then the Catalog pricing will be used. The association of a Price List to a Customer Group can be done either via the Control Panel or using the [Customer Groups API.](/api-reference/customer-subscribers/customers-api)  Price Lists will provide overridden price values to the Stencil storefront. Final price display can be further customized within the Stencil template. See the [Price Object](https://stencil.bigcommerce.com/docs/price-object-properties) in Stencil for further documentation.  To learn more about Price Lists, see [here](/api-docs/price-lists/price-list-overview).  ## Price list assignments  ### Order of operations  The `Price List Assignment` Pricing Order of Operations is as follows:  **IF** `Price list` assigned to current `Customer Group` **AND** `Price List` assigned to current `Channel`: * Use this Price List -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF**: `Price List` assigned to current `Channel`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `Price List` assigned to current `Customer Group`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `Customer Group Discounts`: * Use them -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE IF** `channel` has a `default price list`: * Use this price list -- any prices not found fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **ELSE**: * Fall back to the catalog price (or in the case of multi-currency, auto-converted prices)  **Note:** Price Lists cannot be assigned to a customer group that has custom group discounts -- the customer group discounts must be deleted first.  ## Usage notes - Price Lists cannot be assigned to a customer group that has custom group discounts -- the customer group discounts must be deleted first. - Bulk pricing Tiers may additionally be associated with a price record to indicate different pricing as the quantity in cart increases. - If a variant has a `Price Record` any existing product-level bulk pricing will not apply in the cart. For variants without `Price Records`, any existing product bulk pricing will apply. - Price Lists Records accepts bulk upsert. Only one [Bulk upsert](https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/setpricelistrecordcollection) can done at a time. Running more than one in parallel on the **same store** will cause a 429 error and the request will fail. - There are no direct webhooks available for Price Lists. Since Price Lists directly relate to products, webhooks related to products will fire for corresponding changes such as pricing.  ## Additional information  ### Webhooks  * [Products](/api-docs/getting-started/webhooks/webhook-events#webhook-events_products) * [SKU](/api-docs/getting-started/webhooks/webhook-events#webhook-events_sku)  ### Related endpoints * [Get Price List Collection](/api-reference/catalog/pricelists-api/price-lists/getpricelistcollection)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\PriceLists\Model\PriceListPost(); // \BigCommerce\PriceLists\Model\PriceListPost | 
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $result = $apiInstance->createPriceList($body, $accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->createPriceList: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.

try {
    $apiInstance->deletePriceList($price_list_id);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceList: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$accept = "application/json"; // string | 
$content_type = "application/json"; // string | 

try {
    $apiInstance->deletePriceListsByFilter($id, $name, $accept, $content_type);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->deletePriceListsByFilter: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_list_id = 56; // int | The ID of the `Price List` requested.
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.

try {
    $result = $apiInstance->getPriceList($price_list_id, $id, $name, $date_created, $date_modified, $page, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceList: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Filter items by id.
$name = "name_example"; // string | Filter items by name.
$date_created = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_created.
$date_modified = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
$page = 56; // int | Specifies the page number in a limited (paginated) list of products.
$limit = 56; // int | Controls the number of items per page in a limited (paginated) list of products.
$content_type = "application/json"; // string | 
$accept = "application/json"; // string | 

try {
    $result = $apiInstance->getPriceListCollection($id, $name, $date_created, $date_modified, $page, $limit, $content_type, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->getPriceListCollection: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: X-Auth-Client
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
$config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BigCommerce\PriceLists\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$apiInstance = new BigCommerce\PriceLists\Api\PriceListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BigCommerce\PriceLists\Model\PriceListPut(); // \BigCommerce\PriceLists\Model\PriceListPut | 
$price_list_id = 56; // int | The ID of the `Price List` requested.

try {
    $result = $apiInstance->updatePriceList($body, $price_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceListsApi->updatePriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PriceListsApi* | [**createPriceList**](docs/Api/PriceListsApi.md#createpricelist) | **POST** /pricelists | Create a Price List
*PriceListsApi* | [**deletePriceList**](docs/Api/PriceListsApi.md#deletepricelist) | **DELETE** /pricelists/{price_list_id} | Delete a Price List
*PriceListsApi* | [**deletePriceListsByFilter**](docs/Api/PriceListsApi.md#deletepricelistsbyfilter) | **DELETE** /pricelists | Delete All Price Lists
*PriceListsApi* | [**getPriceList**](docs/Api/PriceListsApi.md#getpricelist) | **GET** /pricelists/{price_list_id} | Get a Price List
*PriceListsApi* | [**getPriceListCollection**](docs/Api/PriceListsApi.md#getpricelistcollection) | **GET** /pricelists | Get All Price Lists
*PriceListsApi* | [**updatePriceList**](docs/Api/PriceListsApi.md#updatepricelist) | **PUT** /pricelists/{price_list_id} | Update a Price List
*PriceListsAssignmentsApi* | [**createPriceListAssignments**](docs/Api/PriceListsAssignmentsApi.md#createpricelistassignments) | **POST** /pricelists/assignments | Create Price List Assignments
*PriceListsAssignmentsApi* | [**deletePriceListAssignmentsByFilter**](docs/Api/PriceListsAssignmentsApi.md#deletepricelistassignmentsbyfilter) | **DELETE** /pricelists/assignments | Delete Price List Assignments
*PriceListsAssignmentsApi* | [**getListOfPriceListAssignments**](docs/Api/PriceListsAssignmentsApi.md#getlistofpricelistassignments) | **GET** /pricelists/assignments | Get Price List Assignments
*PriceListsRecordsApi* | [**deletePriceListRecord**](docs/Api/PriceListsRecordsApi.md#deletepricelistrecord) | **DELETE** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Delete a Price Record by Currency Code
*PriceListsRecordsApi* | [**deletePriceListRecordsByFilter**](docs/Api/PriceListsRecordsApi.md#deletepricelistrecordsbyfilter) | **DELETE** /pricelists/{price_list_id}/records | Delete a Price List Record
*PriceListsRecordsApi* | [**getPriceListRecord**](docs/Api/PriceListsRecordsApi.md#getpricelistrecord) | **GET** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Get a Price Record by Currency Code
*PriceListsRecordsApi* | [**getPriceListRecordCollection**](docs/Api/PriceListsRecordsApi.md#getpricelistrecordcollection) | **GET** /pricelists/{price_list_id}/records | Get All Price List Records
*PriceListsRecordsApi* | [**getPriceListRecordsByVariantId**](docs/Api/PriceListsRecordsApi.md#getpricelistrecordsbyvariantid) | **GET** /pricelists/{price_list_id}/records/{variant_id} | Get Price Records by Variant
*PriceListsRecordsApi* | [**setPriceListRecord**](docs/Api/PriceListsRecordsApi.md#setpricelistrecord) | **PUT** /pricelists/{price_list_id}/records/{variant_id}/{currency_code} | Set Price List Record by Currency Code
*PriceListsRecordsApi* | [**setPriceListRecordCollection**](docs/Api/PriceListsRecordsApi.md#setpricelistrecordcollection) | **PUT** /pricelists/{price_list_id}/records | Upsert Price List Records

## Documentation For Models

 - [AllOfPriceListAssignmentsBatchErrorResponseBatchErrorsData](docs/Model/AllOfPriceListAssignmentsBatchErrorResponseBatchErrorsData.md)
 - [AllOfPriceListAssignmentsBatchErrorSetData](docs/Model/AllOfPriceListAssignmentsBatchErrorSetData.md)
 - [AllOfPriceListCollectionResponseDataItems](docs/Model/AllOfPriceListCollectionResponseDataItems.md)
 - [AllOfPriceListResponseData](docs/Model/AllOfPriceListResponseData.md)
 - [AllOfPriceRecordBatchErrorSetData](docs/Model/AllOfPriceRecordBatchErrorSetData.md)
 - [AllOfPriceRecordCollectionResponseDataItems](docs/Model/AllOfPriceRecordCollectionResponseDataItems.md)
 - [AllOfPriceRecordResponseData](docs/Model/AllOfPriceRecordResponseData.md)
 - [AssignmentForGetResponse](docs/Model/AssignmentForGetResponse.md)
 - [AssignmentsForGetResponse](docs/Model/AssignmentsForGetResponse.md)
 - [AssignmentsForGetResponseData](docs/Model/AssignmentsForGetResponseData.md)
 - [AssignmentsForRequest](docs/Model/AssignmentsForRequest.md)
 - [BaseError](docs/Model/BaseError.md)
 - [Body](docs/Model/Body.md)
 - [BulkPricingTier](docs/Model/BulkPricingTier.md)
 - [CollectionMeta](docs/Model/CollectionMeta.md)
 - [CreateBatchPriceListAssignmentsRequest](docs/Model/CreateBatchPriceListAssignmentsRequest.md)
 - [DetailedErrors](docs/Model/DetailedErrors.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse204](docs/Model/InlineResponse204.md)
 - [InlineResponse422](docs/Model/InlineResponse422.md)
 - [Meta](docs/Model/Meta.md)
 - [NoContent](docs/Model/NoContent.md)
 - [NotFound](docs/Model/NotFound.md)
 - [Pagination](docs/Model/Pagination.md)
 - [Pagination1](docs/Model/Pagination1.md)
 - [Pagination1Links](docs/Model/Pagination1Links.md)
 - [PriceList](docs/Model/PriceList.md)
 - [PriceListAssignmentsBatchErrorResponse](docs/Model/PriceListAssignmentsBatchErrorResponse.md)
 - [PriceListAssignmentsBatchErrorResponseBatchErrors](docs/Model/PriceListAssignmentsBatchErrorResponseBatchErrors.md)
 - [PriceListAssignmentsBatchErrorSet](docs/Model/PriceListAssignmentsBatchErrorSet.md)
 - [PriceListAssignmentsIdentifiers](docs/Model/PriceListAssignmentsIdentifiers.md)
 - [PriceListBase](docs/Model/PriceListBase.md)
 - [PriceListCollectionResponse](docs/Model/PriceListCollectionResponse.md)
 - [PriceListPost](docs/Model/PriceListPost.md)
 - [PriceListPut](docs/Model/PriceListPut.md)
 - [PriceListResponse](docs/Model/PriceListResponse.md)
 - [PriceListResponse1](docs/Model/PriceListResponse1.md)
 - [PriceRecord](docs/Model/PriceRecord.md)
 - [PriceRecordBase](docs/Model/PriceRecordBase.md)
 - [PriceRecordBatchErrorResponse](docs/Model/PriceRecordBatchErrorResponse.md)
 - [PriceRecordBatchErrorSet](docs/Model/PriceRecordBatchErrorSet.md)
 - [PriceRecordBatchItem](docs/Model/PriceRecordBatchItem.md)
 - [PriceRecordCollectionPut](docs/Model/PriceRecordCollectionPut.md)
 - [PriceRecordCollectionResponse](docs/Model/PriceRecordCollectionResponse.md)
 - [PriceRecordIdentifiers](docs/Model/PriceRecordIdentifiers.md)
 - [PriceRecordPut](docs/Model/PriceRecordPut.md)
 - [PriceRecordResponse](docs/Model/PriceRecordResponse.md)
 - [SuccessBatchResponse](docs/Model/SuccessBatchResponse.md)

## Documentation For Authorization


## X-Auth-Client

- **Type**: API key
- **API key parameter name**: X-Auth-Client
- **Location**: HTTP header

## X-Auth-Token

- **Type**: API key
- **API key parameter name**: X-Auth-Token
- **Location**: HTTP header


## Author



