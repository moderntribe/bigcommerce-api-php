### BigCommerce Php API

This is a collection of clients, designed to connect to the Big Commerce APIs. There is one
client per API.

https://developer.bigcommerce.com/api-reference/

## Getting started

The clients are already built and tested, though this project is designed to easily rebuild and update
clients as changes are made to the published BC apis. To get started though, that is not required.

* Clone this repo
* Set your store up as described under Authentication
* Use yarn/npm to install dependencies
* Run the test suites

To run the full suite of tests: 

```
composer install
./vendor/bin/phpunit
```

To run a single test file:

```
./vendor/bin/phpunit clients/Catalog/SwaggerClient-php/test/Api/ProductsApiTest.php 
```

To run the samples:

```
php samples/widgets.php
php samples/themes.php
```

## Authentication

* Create your BigCommerce Store and App if you haven't already
* Obtain your store hash, client id and access token
  * [BigCommerce Authentication](https://developer.bigcommerce.com/api-docs/getting-started/authentication/rest-api-authentication#obtaining-store-api-credentials#obtaining-store-api-credentials)
* Rename gulpfile.config.sample.json to gulpfile.config.json and fill in the values

## Building the libraries

```
npm install
gulp buildAll
```

or

```
gulp buildOne --name Sites
```

## Including a client in your project

todo: need packagist

```
composer require tribe/bigcommerce-api
```

As per samples.