## adhocore/cron-bench

[![Travis Build](https://travis/com/adhocore/php-cron-bench.svg?branch=master)](https://travis-ci.com/adhocore/php-cron-bench?branch=master)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](./LICENSE)

Benchmarking candidates are `adhocore/cron-expr` and `mtdowling/cron-expression`.

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

![Local machine](https://imgur.com/zGmrBgh.png "Local machine")

[adhcorre/php-cron-expr](https://github.com/adhcorre/php-cron-expr) is 6.48x faster in local machine (XPS9360/i7/16/512/Win10/WSL).

#### Travis

![Travis](https://imgur.com/5RZk8vj.png "Travis")

[adhcorre/php-cron-expr](https://github.com/adhcorre/php-cron-expr) is 9.69x [faster](https://travis-ci.com/adhocore/php-cron-bench/builds/81384785) in Travis.
