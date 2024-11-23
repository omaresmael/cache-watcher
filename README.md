# Automatically refresh the Cacheable files when changes are applied to them

[![Latest Version on Packagist](https://img.shields.io/packagist/v/omaresmael/cache-watcher.svg?style=flat-square)](https://packagist.org/packages/omaresmael/cache-watcher)
[![Total Downloads](https://img.shields.io/packagist/dt/omaresmael/cache-watcher.svg?style=flat-square)](https://packagist.org/packages/omaresmael/cache-watcher)

This package saves you some time wondering why your code is not working

It monitors the cacheable files (config, routes, events), and runs `optimize` command on every change applied on the them

## Installation

You can install the package via composer:

```bash
composer require omaresmael/cache-watcher --dev
```

In your project, you should have the JavaScript package [`chokidar`](https://github.com/paulmillr/chokidar) installed. You can install it via npm

```bash
npm install chokidar --save-dev
```

## Usage

Run `php artisan cache:watch`

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

