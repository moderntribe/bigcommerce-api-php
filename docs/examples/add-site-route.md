# BigCommerce API PHP Client Library

## Add a route to the site

```php
$api   = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
$sites = $api->sites();

$channel_id = 7;

try {
	$site_id = $sites->getChannelSite( $channel_id )->getData()->getId();
	$route = new \BigCommerce\Api\Model\Route( [
		'type'     => 'login',
		'matching' => '',
		'route'    => 'https://www.example.com/login/',
	] );
	$sites->postSiteRoute( $site_id, $route );
} catch ( \BigCommerce\Api\ApiException $e ) {
	$error_message = $e->getMessage();
	$error_body    = $e->getResponseBody();
	$error_headers = $e->getResponseHeaders(); // do something with the error
	return;
}
```
