# SwaggerClient-php
Create and manage [sites](#sites) and [routes](#routes) for [headless storefront](https://support.bigcommerce.com/s/article/The-Headless-Approach#what-mean) sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api).  - [Authentication](#authentication) - [Sites](#sites) - [Site routes](#site-routes) - [Route types](#route-types) - [Route variables](#route-variables) - [Additional Information](#additional-information)  ## Authentication  Authenticate requests by sending an [OAuth](https://developer.bigcommerce.com/api-docs/getting-started/authentication) `access_token` via `X-Auth-Token` HTTP header.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites Content-Type: application/json X-Auth-Token: {{ACCESS_TOKEN}} ```  ### [OAuth Scopes](https://developer.bigcommerce.com/api-docs/getting-started/authentication/rest-api-authentication#oauth-scopes)  | UI Name        | Permission | Parameter               | |----------------|------------|-------------------------| | Sites & Routes | modify     | `store_sites`           | | Sites & Routes | read-only  | `store_sites_read_only` |  For more information on authenticating BigCommerce APIs, see [Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication).  ## [Sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites)  Sites link [headless storefronts](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless) to sales [channels](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api). To [create a site](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"url\": \"http://store.example.com/\",   \"channel_id\": 5 } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#requestrunner)  **[Response:](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site#responses)**  ```json {   \"id\": 1,   \"url\": \"http://store.example.com/\",   \"channel_id\": 5,   \"created_at\": \"2018-01-04T04:15:50.000Z\",   \"updated_at\": \"2018-01-04T04:15:50.000Z\" } ```  To [get a list of sites](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites), send a `GET` request to `/stores/{{STORE_HASH}}/v3/sites`.  ```http GET https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Accept: application/json ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/getsites#requestrunner)  ## [Site routes](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes)  Site routes tell BigCommerce how to link to pages on a [headless storefront](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless). To [create a route](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route) for a [site](#sites), send a `POST` request to `/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes`.  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"12\",   \"route\": \"/en/product?id=12\" } ```  [![Open in Request Runner](https://storage.googleapis.com/bigcommerce-production-dev-center/images/Open-Request-Runner.svg)](https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route#requestrunner)  ## Route types  The following route types are supported.  | Type | Description | |-|-| |`account_new_return`|Route for shopper account page| |`account_order_status`|Route for shopper order status account page| |`cart`|Route to shopper's cart| |`checkout`|Route to checkout| |`create_account`|Route to the create a shopper account page| |`forgot_password`|Route to shopper forgot password page| |`home`|Route to headless storefront homepage| |`order_confirmation`|Route to the order confirmation page| |`product`|Route for product details pages | |`recover_abandoned_cart`|Route for URL in emails for a shopper to recover their abandoned cart| |`unsubscribe`|Route for unsubscribe URL in emails|  ## Route variables  The following route variables are supported  |Variable|Description| |-|-|-| |`{id}`|The **ID** of the requested item| |`{slug}`|The **slug** for the requested item (if available). Note: the `slug` value may contain `/` slash| |`{lang}`|The **language** string that the client is using|  **Example:**  ```http POST https://api.bigcommerce.com/stores/{{STORE_HASH}}/v3/sites/{site_id}/routes X-Auth-Token: {{ACCESS_TOKEN}} X-Auth-Client: {{CLIENT_ID}} Content-Type: application/json Accept: application/json  {   \"type\": \"product\",   \"matching\": \"*\",   \"route\": \"/{lang}/{slug}?id={id}\" } ```  ## Additional Information  ### Related resources * [Channels and Listings Reference](https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api) * [Channels Overview](https://developer.bigcommerce.com/api-docs/channels/overview) * [Building Headless Storefronts Guide](https://developer.bigcommerce.com/api-docs/storefronts/developers-guide-headless)

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
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

// Configure API key authorization: X-Auth-Client
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Client', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Client', 'Bearer');
// Configure API key authorization: X-Auth-Token
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

## Documentation for API Endpoints

All URIs are relative to *https://api.bigcommerce.com/stores/{$$.env.store_hash}/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SiteRoutesApi* | [**deleteRoute**](docs/Api/SiteRoutesApi.md#deleteroute) | **DELETE** /sites/{site_id}/routes/{route_id} | Delete a Site Route
*SiteRoutesApi* | [**getSiteRoute**](docs/Api/SiteRoutesApi.md#getsiteroute) | **GET** /sites/{site_id}/routes/{route_id} | Get a Site Route
*SiteRoutesApi* | [**indexSiteRoutes**](docs/Api/SiteRoutesApi.md#indexsiteroutes) | **GET** /sites/{site_id}/routes | Get a Site&#x27;s Routes
*SiteRoutesApi* | [**postSiteRoute**](docs/Api/SiteRoutesApi.md#postsiteroute) | **POST** /sites/{site_id}/routes | Create a Site Route
*SiteRoutesApi* | [**putSiteRoute**](docs/Api/SiteRoutesApi.md#putsiteroute) | **PUT** /sites/{site_id}/routes/{route_id} | Update a Site Route
*SiteRoutesApi* | [**sitesSiteIdRoutesPut**](docs/Api/SiteRoutesApi.md#sitessiteidroutesput) | **PUT** /sites/{site_id}/routes | Update Site&#x27;s Routes
*SitesApi* | [**deleteSite**](docs/Api/SitesApi.md#deletesite) | **DELETE** /sites/{site_id} | Delete a Site
*SitesApi* | [**getSite**](docs/Api/SitesApi.md#getsite) | **GET** /sites/{site_id} | Get a Site
*SitesApi* | [**postSite**](docs/Api/SitesApi.md#postsite) | **POST** /sites | Create a Site
*SitesApi* | [**putSite**](docs/Api/SitesApi.md#putsite) | **PUT** /sites/{site_id} | Update a Site
*SitesApi* | [**sitesGet**](docs/Api/SitesApi.md#sitesget) | **GET** /sites | Get Sites

## Documentation For Models

 - [AllOfSite1RoutesItems](docs/Model/AllOfSite1RoutesItems.md)
 - [AllOfSiteRoutesItems](docs/Model/AllOfSiteRoutesItems.md)
 - [AllOfinlineResponse2001DataItems](docs/Model/AllOfinlineResponse2001DataItems.md)
 - [AllOfinlineResponse2011Data](docs/Model/AllOfinlineResponse2011Data.md)
 - [ErrorDetailedFull](docs/Model/ErrorDetailedFull.md)
 - [ErrorFull](docs/Model/ErrorFull.md)
 - [ErrorFull1](docs/Model/ErrorFull1.md)
 - [Errors](docs/Model/Errors.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse422](docs/Model/InlineResponse422.md)
 - [InlineResponse4221](docs/Model/InlineResponse4221.md)
 - [LinksFull](docs/Model/LinksFull.md)
 - [MetaCollection](docs/Model/MetaCollection.md)
 - [MetaCollectionFull](docs/Model/MetaCollectionFull.md)
 - [MetaEmpty](docs/Model/MetaEmpty.md)
 - [Pagination](docs/Model/Pagination.md)
 - [PaginationFull](docs/Model/PaginationFull.md)
 - [PaginationLinks](docs/Model/PaginationLinks.md)
 - [PostSite](docs/Model/PostSite.md)
 - [PostSite1](docs/Model/PostSite1.md)
 - [PutSite](docs/Model/PutSite.md)
 - [PutSite1](docs/Model/PutSite1.md)
 - [Site](docs/Model/Site.md)
 - [Site1](docs/Model/Site1.md)
 - [SiteRouteBase](docs/Model/SiteRouteBase.md)
 - [SiteRouteBase1](docs/Model/SiteRouteBase1.md)
 - [SiteRouteFull](docs/Model/SiteRouteFull.md)
 - [SiteRouteFull1](docs/Model/SiteRouteFull1.md)

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



