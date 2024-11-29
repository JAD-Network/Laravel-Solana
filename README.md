# SolanaRPC Laravel Package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jad-network/laravel-solana.svg?style=flat-square)](https://packagist.org/packages/jad-network/laravel-solana)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jad-network/laravel-solana/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jad-network/laravel-solana/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jad-network/laravel-solana/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jad-network/laravel-solana/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jad-network/laravel-solana.svg?style=flat-square)](https://packagist.org/packages/jad-network/laravel-solana)

> [!CAUTION]
> This package is a WIP and still needs work before it's ready for use.

Interact with the Solana blockchain using the SolanaRPC in your Laravel App.

## Installation

You can install the package via composer:

```bash
composer require jad-network/laravel-solana
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-solana-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-solana-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
//Soon
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Dylan Marriott](https://github.com/JAD-Network)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
