FinStat.sk API client
=====================

This is an API client for [finstat.sk](https://finstat.sk/), Slovakian company register.

How to install
--------------

Install package [`hubipe/finstat`](https://packagist.org/packages/hubipe/finstat) with [Composer](https://getcomposer.org/):

```bash
composer require hubipe/finstat
```

So far, in the library, there is only one implemented RequestClient - `GuzzleRequestClient`. If you don't want to implement
your own, you'll also need to require

```bash
composer require guzzlehttp/guzzle
```

How to use
----------

Using client is easy - all you have to do is initiate `FinStat` class by passing it request client, API key and private
API key:

```php
<?php
use Hubipe\FinStat\FinStat;
use Hubipe\FinStat\Request\GuzzleRequestClient;

$requestClient = new GuzzleRequestClient();
$client = new FinStat(
	$requestClient,
	$apiKey,
	$privateKey
);
```

When client is instantiated, you can start querying API:

```php
$detailResult = $client->detail('36631124');
$autocompleteResult = $client->autocomplete('Slovenská pošta');
$czAutocompleteResult = $client->czAutocomplete('Česká pošta');
```

Implemented API methods
-----------
 
This client has implemented so far these API methods:
 * autocomplete
 * detail
 * CZ autocomplete
   
If you wish to implement other methods, please send a pull request.
