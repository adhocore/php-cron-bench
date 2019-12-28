## adhocore/cron-bench

[![Travis Build](https://img.shields.io/travis/com/adhocore/php-cron-bench.svg?branch=master&style=flat-square)](https://travis-ci.com/adhocore/php-cron-bench?branch=master)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](./LICENSE)

Benchmarking candidates are `adhocore/cron-expr` and `dragonmantank/cron-expression`.

## Installation
```sh
git clone git@github.com:adhocore/php-cron-bench.git

cd php-cron-bench
composer install -o
```

## Usage

```sh
composer bench
```

## Preview

#### Local Machine

![Local machine](https://imgur.com/kMUOBI0.png "Local machine")

[adhocore/php-cron-expr](https://github.com/adhocore/php-cron-expr) is 12.92x faster in local machine (XPS9360/i7/16/512/Win10/WSL).

#### Travis

![Travis](https://imgur.com/rSxEUnA.png "Travis")

[adhocore/php-cron-expr](https://github.com/adhocore/php-cron-expr) is 7.54x [faster](https://travis-ci.com/adhocore/php-cron-bench/builds/142502073) in Travis.
