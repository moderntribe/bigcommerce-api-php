# BigCommerce API PHP Client Library

## Instantiating the API Client

The first step to instantiating the API client is to create a configuration
object:

```php
$config = new \BigCommerce\Api\Configuration();
$config->setHost( $api_url );
$config->setClientId( $client_id );
$config->setAccessToken( $access_token );
$config->setClientSecret( $client_secret ); // not required for most requests
```

You can find the required values in the BigCommerce admin when you create
a new access token, or create an application that [uses OAuth to request
an access token](/docs/examples/oauth-token.md).

With the configuration in hand, create an instance of the ApiClient object.

```php
$client = new \BigCommerce\Api\ApiClient( $config );
```

There are then a number of APIs that you can instantiate using the client object:

```php
$catalog  = new \BigCommerce\Api\Api\CatalogApi( $client );
$cart     = new \BigCommerce\Api\Api\CartApi( $client );
$channels = new \BigCommerce\Api\Api\ChannelsApi( $client );
$sites    = new \BigCommerce\Api\Api\SitesApi( $client );
```
