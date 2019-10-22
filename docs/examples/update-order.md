# BigCommerce API PHP Client Library

## Update an order's status 

```php
<?php

use BigCommerce\Api\ApiFactory;
use BigCommerce\Api\Model\OrderRequest;

$api = new ApiFactory( BIGCOMMERCE_API_URL, BIGCOMMERCE_CLIENT_ID, BIGCOMMERCE_ACCESS_TOKEN, BIGCOMMERCE_CLIENT_SECRET );

try {
	$order_id   = 279;
	$new_status = 'Shipped';

	// Status list from https://developer.bigcommerce.com/api-reference/orders/orders-api/order-status/getorderstatus
	$statuses = [
		'Incomplete'                   => 0,
		'Pending'                      => 1,
		'Shipped'                      => 2,
		'Partially Shipped'            => 3,
		'Refunded'                     => 4,
		'Cancelled'                    => 5,
		'Declined'                     => 6,
		'Awaiting Payment'             => 7,
		'Awaiting Pickup'              => 8,
		'Awaiting Shipment'            => 9,
		'Completed'                    => 10,
		'Awaiting Fulfillment'         => 11,
		'Manual Verification Required' => 12,
		'Disputed'                     => 13,
		'Partially Refunded'           => 14,
	];

	$order = $api->orders()->getOrder( $order_id );

	// Create a new request from the existing order. Properties that do
	// not belong in the request (other than products) will be stripped.
	$update_order_request = new OrderRequest( $order->get() );
	$update_order_request->setStatusId( $statuses[ $new_status ] );
	$update_order_request->setProducts( null ); // set to null to avoid changing products

	$api->orders()->updateOrder( $order_id, $update_order_request );

	$updated = $api->orders()->getOrder( $order_id );
} catch ( \BigCommerce\Api\ApiException $e ) {
	$error_message = $e->getMessage();
	$error_body    = $e->getResponseBody();
	$error_headers = $e->getResponseHeaders();

	// do something with the error
	return;
}
```
