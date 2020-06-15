<?php
/**
 * Example usage of the BigCommerce PHP API, to fetch some products of known id.
 * Login to your store to fill in the configuration parameters below.
 * https://login.bigcommerce.com/login
 *
 * `php getProducts.php`
 */

// load the library
require __DIR__ . '/../vendor/autoload.php';

// load store information
require 'config.php';

// initialize the api
$api     = new \BigCommerce\Api\ApiFactory($api_url, $client_id, $access_token, $client_secret);

// get the product catalog api
$catalog = $api->catalog();

// *** CHANGE THESE IDS ***
// find some existing product ids on your storefront
// create the products first if needed
$product_ids = [ 3394, 3395, 3396 ];

try {
    /*
    * For details, see:
    * https://developer.bigcommerce.com/api-reference/catalog/catalog-api/products/getproducts
    */
    $products_response = $catalog->getProducts(
        [
        'id:in'   => $product_ids,
        'include' => [ 'variants', 'custom_fields', 'images', 'bulk_pricing_rules', 'options', 'modifiers' ],
        ]
    );
} catch (\BigCommerce\Api\ApiException $e) {
    $error_message = $e->getMessage();
    $error_body    = $e->getResponseBody();
    $error_headers = $e->getResponseHeaders();
    // do something with the error
    return;
}

// extract some interesting fields from the response
$found_products = array_map(
    function (\BigCommerce\Api\Model\Product $product) {
        return array(
        'id' => $product->getId(),
        'name' => $product->getName(),
        'sku' => $product->getSku(),
        'price' => $product->getPrice(),
        );
    },
    $products_response->getData(),
);

// view results
var_dump($found_products);
