# BigCommerce API PHP Client Library

## Request products from the catalog

```php

$api     = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
$catalog = $api->catalog();

$product_ids = [ 100, 101, 102 ];

try {
	/*
	 * List of request parameters and response properties available at
	 * https://developer.bigcommerce.com/api-reference/catalog/catalog-api/products/getproducts
	 */
	$products_response = $catalog->getProducts( [
		'id:in'   => $product_ids,
		'include' => [ 'variants', 'custom_fields', 'images', 'bulk_pricing_rules', 'options', 'modifiers' ],
	] );
} catch ( \BigCommerce\Api\ApiException $e ) {
	$error_message = $e->getMessage();
	$error_body    = $e->getResponseBody();
	$error_headers = $e->getResponseHeaders();
	// do something with the error
	return;
}

$found_product_ids = array_map( function( \BigCommerce\Api\Model\Product $product ) {
	return $product->getId();
}, $products_response->getData() );
```
