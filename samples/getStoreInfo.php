<?php
/**
 * Example usage of the BigCommerce PHP API, to fetch some products of known id.
 * Login to your store to fill in the configuration parameters below.
 * https://login.bigcommerce.com/login
 *
 * `php getStoreInfo.php`
 */

use \BigCommerce\Api\ApiFactory;
use \BigCommerce\Api\ApiException;

// load the library
require __DIR__ . '/../vendor/autoload.php';

// load store information
require 'config.php';

// initialize the api
$api     = new ApiFactory($api_url, $client_id, $access_token, $client_secret);

// get the store api
$store = $api->store();

// send a request
try {
    $response = $store->getStore();
} catch (ApiException $e) {
    $error_message = $e->getMessage();
    $error_body    = $e->getResponseBody();
    $error_headers = $e->getResponseHeaders();
    // do something with the error
    return;
}

// view results
var_dump($response);
