<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use BigCommerce\Widgets\Configuration;
use BigCommerce\Widgets\Api\WidgetApi;

$secrets = json_decode(file_get_contents(__DIR__ . '/../gulpfile.config.json'), true);

$config = Configuration::getDefaultConfiguration();
$config->setApiKey('X-Auth-Client', $secrets['clientId']);
$config->setApiKey('X-Auth-Token', $secrets['accessToken']);
$config->setHost(str_replace('{$$.env.store_hash}', $secrets['storeId'], $config->getHost()));

$apiInstance = new WidgetApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWidgets();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetApi->getWidgets: ', $e->getMessage(), PHP_EOL;
}

