<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use BigCommerce\Themes\Configuration;
use BigCommerce\Themes\Api\ThemesApi;

$secrets = json_decode(file_get_contents(__DIR__ . '/../gulpfile.config.json'), true);

$config = Configuration::getDefaultConfiguration();
$config->setApiKey('X-Auth-Client', $secrets['clientId']);
$config->setApiKey('X-Auth-Token', $secrets['accessToken']);
$config->setHost(str_replace('{$$.env.store_hash}', $secrets['storeId'], $config->getHost()));

$apiInstance = new ThemesApi(
    new GuzzleHttp\Client(),
    $config
);
$accept = 'application/json';
$content_type = 'application/json';

try {
    $result = $apiInstance->getStoreThemes($accept, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ThemesApi->getStoreThemes: ', $e->getMessage(), PHP_EOL;
}

