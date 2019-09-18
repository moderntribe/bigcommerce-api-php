# BigCommerce API PHP Client Library

## Requesting an OAuth Token

If you create an application for the [BigCommerce Marketplace](https://www.bigcommerce.com/apps/),
you will need to build an application for requesting new OAuth tokens to
enable connections to the BigCommerce API.

When you create your app in the [Developer Portal](https://devtools.bigcommerce.com/my/apps),
it will give you a Client ID and Client Secret. Take note of these; you'll
need them later.

When you create your app, it will ask you for three callback URLs. You'll want
to create a handler for all three of those, but of concern here is the
"Auth Callback URL". When a merchant installs your application through
the Marketplace, this URL will load in a frame for that user in the BigCommerce
administration interface.

When your application receives a GET request at the auth callback URL,
the request will include the query parameters `code`, `scope`, and `context`.
Using these parameters, along with your app's Client ID and Client Secret,
send a request back to BigCommerce to get a permanent Access Token.

```php
$auth          = new \BigCommerce\Api\OAuth( $client_id, $client_secret );
$authorization = $auth->authorizeWithBigcommerce( 
  filter_input( INPUT_GET, 'code' ),
  filter_input( INPUT_GET, 'scope' ),
  filter_input( INPUT_GET, 'context' )
);

$access_token = $authorization['access_token'];
$api_url      = $authorization['api_url'];

```

Store your Access Token and API URL in a safe place, and use it along with the Client ID
when instantiating the API client.

```php
$api = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
```

## Further Reading

For more information about building apps and requesting OAuth tokens, see:

https://developer.bigcommerce.com/api-docs/getting-started/building-apps-bigcommerce/building-apps

https://developer.bigcommerce.com/api-docs/getting-started/authentication#authentication_client-id-secret

