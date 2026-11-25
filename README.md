# Spaceflight News SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/spaceflight-news-sdk.svg)](https://packagist.org/packages/dmorenof/spaceflight-news-sdk)

**Spaceflight news, blogs and reports as typed PHP, no API key.**

Search and filter articles, blogs and reports about spaceflight from dozens of news sites, read one by id and get the list of sites, with typed answers and no key to manage.

> Unofficial. Not affiliated with, endorsed by or supported by The Space Devs. See [NOTICE.md](NOTICE.md).

## Why this SDK

- Free API without a key: install and call.
- Run against the live service: 900 items read through the SDK without a mismatch.
- Articles, blogs and reports are typed models; a page is a typed list you can iterate.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/spaceflight-news.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 7 operations and 24 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/spaceflight-news-sdk
```

## Quick start

```php
<?php
use SpaceflightNewsSDK\Configuration;
use SpaceflightNewsSDK\GetParams\V4\Articles as ArticleFilters;
use SpaceflightNewsSDK\SpaceflightNewsAPISDK;
use SpaceflightNewsSDK\V4\Articles;

$configuration = new Configuration();
SpaceflightNewsAPISDK::configure($configuration);

$filters = new ArticleFilters();
$filters->search = 'starship';
$filters->limit = 5;

foreach (Articles::get($filters)->results as $article) {
    echo $article->published_at, ' ', $article->news_site, ': ', $article->title, "\n";
}
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

7 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `articles` | 2 |
| `blogs` | 2 |
| `reports` | 2 |
| `info` | 1 |

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

- The contract the service publishes differs from what it answers in three places; the SDK follows the corrected contract (see NOTICE.md).
- The API is free to use; consider supporting The Space Devs.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://api.spaceflightnewsapi.net/v4/docs/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
