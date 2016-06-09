# MSG Online SDK
This SDK provides an API in which you can query the Marine Stores Guide API.

### Requirements
- A valid developer licence and api key

## Installing

### Composer

You can install the bindings via [Composer](http://composer.org)
```bash
composer require momentum/msg-online
```
To use the bindings, use Composer's autoload:
```php
require_once('vendor/autoload.php');
```

## Get account details

This will return account details for the authenticated user

```php
require('vendor/autoload.php');

// Initialise the MSGOnline client with your API key
\Momentum\MsgOnline\Client::setApiKey('%APIKEY%');

$user = new \Momentum\MSGOnline\User();

$user->getCurrentUser();

```

## Get API version details

```php
require('vendor/autoload.php');

// Initialise the MSGOnline client with your API key
\Momentum\MsgOnline\Client::setApiKey('%APIKEY%');

$api = new \Momentum\MSGOnline\API();

$api->currentVersion();

```

---

## Get all products

This will return all products within the API

```php

require('vendor/autoload.php');

// Initialise the MSGOnline client with your API key
$client = new \Momentum\MsgOnline\Client('%APIKEY%');

$products = new \Momentum\MsgOnline\Products();

// List all products
$products->all();

// Search the products API
$products->search($keywords, $parameters = array());

// Get a product by its IMPA Code
$products->getProductByCode($code);

```

Available parameters for search:

- `category_id` Limit products to a single category
- `page` The page number

---

