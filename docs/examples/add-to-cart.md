# BigCommerce API PHP Client Library

## Add a product to a cart 

```php
use BigCommerce\Api\Model\CartRequestData;
use BigCommerce\Api\Model\Currency;
use BigCommerce\Api\Model\LineItemRequestData;
use BigCommerce\Api\Model\ProductOptionSelection;

$api  = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
$cart = $api->cart();

try {
	$request_data      = new CartRequestData();
	$option_selections = [];

	// Both Options and Modifiers are submitted the same way
	foreach ( $options as $option_key => $option_value ) {
		$option_selections[] = new ProductOptionSelection( [
			'option_id'    => $option_key,
			'option_value' => $option_value,
		] );
	}
	

	$request_data->setLineItems( [
		new LineItemRequestData( [
			'quantity'          => $quantity,
			'product_id'        => $product_id,
			'option_selections' => $option_selections,
		] ),
	] );

	// gift certificates must be present, even if an empty array
	$request_data->setGiftCertificates( [] );
	
	if ( $cart_id ) {
		// add the items to an existing cart
		$response = $cart->addItem( $cart_id, $request_data );
	} else {
		// create a new cart with the items
		
		// Set optional parameters that would already be in place on an existing cart
		
		if ( $customer_id ) { // optional parameter, if we have a customer ID
			$request_data->setCustomerId( $customer_id );
		}
		if ( $channel_id ) { // optional parameter, if we have a channel ID
			$request_data->setChannelId( $channel_id );
		}
		if ( $currency ) { // optional parameter, if using a non-default currency
			$request_data->setCurrency( new Currency( [ 'code' => $currency ] ) );
		}

		$response = $cart->createCart( $request_data );
		$cart_id = $response->getData()->getId();
	}

} catch ( \BigCommerce\Api\ApiException $e ) {
	$error_message = $e->getMessage();
	$error_body    = $e->getResponseBody();
	$error_headers = $e->getResponseHeaders();
	// do something with the error
	return;
}
```
