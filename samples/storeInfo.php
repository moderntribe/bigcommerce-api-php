<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use BigCommerce\StoreInfo\Configuration;
use BigCommerce\StoreInfo\Api\StoreInformationApi;

$secrets = json_decode(file_get_contents(__DIR__ . '/../gulpfile.config.json'), true);

$config = Configuration::getDefaultConfiguration();
$config->setApiKey('X-Auth-Client', $secrets['clientId']);
$config->setApiKey('X-Auth-Token', $secrets['accessToken']);
$config->setHost(str_replace('{$$.env.store_hash}', $secrets['storeId'], $config->getHost()));

$apiInstance = new StoreInformationApi(
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json';
$content_type = 'application/json';

try {
    $result = $apiInstance->storeGet($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreInformationApi->storeGet: ', $e->getMessage(), PHP_EOL;
}

