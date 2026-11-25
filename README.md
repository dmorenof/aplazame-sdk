# Aplazame SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/aplazame-sdk.svg)](https://packagist.org/packages/dmorenof/aplazame-sdk)

**Aplazame buy-now-pay-later checkouts, orders, refunds and campaigns for PHP shops.**

Create installment, pay-in-4 and pay-in-15-days checkouts, and manage orders end to end: capture, void, refund, cancel, history and financing campaigns, with typed requests.

> Unofficial. Not affiliated with, endorsed by or supported by Aplazame. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 23 operations from the public documentation: checkout, POS checkout, orders, campaigns.
- The API version travels in the `Accept` media type, as Aplazame asks.
- Amounts are integers in cents, as in the API.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/aplazame.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 23 operations and 41 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/aplazame-sdk
```

## Quick start

```php
<?php
use AplazameSDK\Configuration;
use AplazameSDK\AplazameAPISDK;
use AplazameSDK\Orders;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials(['privateKey' => getenv('APLAZAME_PRIVATE_KEY') ?: '']);
AplazameAPISDK::configure($configuration);

$orders = Orders::get();

echo json_encode($orders), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

23 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `orders` | 14 |
| `me` | 6 |
| `checkout` | 3 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Aplazame publishes no machine-readable contract: this one was written from its documentation, which leaves the answer of `POST /checkout` open (see NOTICE.md).
- The notification Aplazame sends to your server is modelled (`Notification`) but answered by your own endpoint.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://aplazame.com/en/docs/api/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
