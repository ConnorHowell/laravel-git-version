# Laravel Git Version

[![Latest Version on Packagist](https://img.shields.io/packagist/v/connorhowell/laravel-git-version.svg?style=flat-square)](https://packagist.org/packages/connorhowell/laravel-git-version)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/connorhowell/laravel-git-version/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/connorhowell/laravel-git-version/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/connorhowell/laravel-git-version.svg?style=flat-square)](https://packagist.org/packages/connorhowell/laravel-git-version)

A Laravel package that provides easy access to Git version information for your application. This package allows you to retrieve the current Git commit hash, repository URL, and a direct link to the current commit, which can be useful for deployment tracking, debugging, and displaying version information in your application.

## Installation

You can install the package via composer:

```bash
composer require connorhowell/laravel-git-version
```

The package will automatically register its service provider.

## Usage

You can use this package in two ways: via the Facade or by directly using the class.

### Using the Facade

```php
use ConnorHowell\LaravelGitVersion\Facades\LaravelGitVersion;

// Get all version information
$versionInfo = LaravelGitVersion::getVersionInfo();
// Returns: ['version' => 'abc123...', 'repo' => 'https://github.com/user/repo', 'commit_url' => 'https://github.com/user/repo/commit/abc123...']

// Get just the current commit hash
$commitHash = LaravelGitVersion::getCurrentGitCommitHash();

// Get the repository URL
$repoUrl = LaravelGitVersion::getGitUrl();

// Get the URL to the current commit
$commitUrl = LaravelGitVersion::getCurrentCommitUrl();
```

### Direct Usage

```php
use ConnorHowell\LaravelGitVersion\LaravelGitVersion;

// Get all version information
$versionInfo = LaravelGitVersion::getVersionInfo();

// Get the URL to the current commit
$commitUrl = LaravelGitVersion::getCurrentCommitUrl();
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Connor Howell](https://github.com/ConnorHowell)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
