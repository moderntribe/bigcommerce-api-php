# BigCommerce API PHP Client Library

## Instantiating the API Client

The first step to instantiating the API client is to create a factory
object:

```php
$api_url       = 'https://api.bigcommerce.com/stores/your-store-hash';
$client_id     = 'your-client-id';
$access_token  = 'your-access-token';
$client_secret = 'your-client-secret';

$api = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
```

You can find the required values in the BigCommerce admin when you create
a new access token, or create an application that [uses OAuth to request
an access token](/docs/examples/oauth-token.md).

There are then a number of APIs that you can instantiate using the factory object:

```php
$api->abandoned_cart()
$api->cart();
$api->catalog();
$api->channels();
$api->orders();
$api->price_lists();
$api->pricing();
$api->scripts();
$api->sites();
$api->store();
$api->subscribers();
$api->themes();
$api->transactions();
$api->widgets();
$api->wishlists();
```

## Usage Examples

* [Request products from the catalog](/docs/examples/catalog-get-products.md)
* [Add a route to a site](/docs/examples/add-site-route.md)
* [Create a product with variants and a modifier](/docs/examples/create-product.md)
* [Update variants for a product](/docs/examples/udate-variants.md)
* [Add a product to a cart](/docs/examples/add-to-cart.md)
* [Create a widget](/docs/examples/create-widget.md)
