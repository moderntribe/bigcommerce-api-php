# BigCommerce API PHP Client Library

PHP client for connecting to the Bigcommerce REST APIs.

## System Requirements

PHP 5.6.0 and later

## Documentation

* [Usage](/docs/client.md)
* [Contributing](/docs/development.md)

## QuickStart

* Create your BigCommerce Store and App if you haven't already
* Obtain your store hash, client id, client secret and access token
  * [BigCommerce Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication/rest-api-authentication#obtaining-store-api-credentials#obtaining-store-api-credentials)
* Clone this repo
* Create examples/config.php using the sample config as a template
* Run composer to install dependencies
* Run samples/getStoreInfo

```
composer install
cd samples && php getStoreInfo.php
```
