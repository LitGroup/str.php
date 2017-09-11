# String utils for PHP 7

> String utils for PHP.

[![Version](https://img.shields.io/packagist/v/litgroup/str.svg)](https://packagist.org/packages/litgroup/str)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)][license]
[![Downloads](https://img.shields.io/packagist/dt/litgroup/str.svg)](https://packagist.org/packages/litgroup/str)
[![Build Status](https://travis-ci.org/LitGroup/str.php.svg?branch=master)](https://travis-ci.org/LitGroup/str.php)

## Installation

```bash
composer require litgroup/str:^0.2.1
```

## Example of usage

### UTF-8 String Manipulation

There is the class `Str`, which contains collection of methods for string
manipulation. This methods use `mb_string` internally, but you should'n
be worried of encoding. `Str` methods always work with the _UTF-8_ encoding.

```php
<?php

use LitGroup\Str\Str;

Str::length('hello'); // => 5
Str::isEmpty('hello'); // => false
Str::isNotEmpty('hello'); // => true
Str::trim(' hello '); // => 'hello'
// ...
```

_Check the code to see all methods._

## Using Patterns

From time to time you need to check that a string matches to the pattern.
For this purpose, this library provides the `Pattern` interface.
`RegExp` is one implementation of `Pattern`, which represents Perl-Compatible
Regular Expressions (PCRE).

```php
<?php

use LitGroup\Str\RegExp;

$emailPattern = new RegExp('/^\w+(?:[-+.\']\w+)*@\w+(?:[-.]\w+)*\.\w+(?:[-.]\w+)*$/Dsu');

if ($emailPattern->isSatisfiedBy('john@example.com')) {
    echo 'This is a valid email address!';
}
```

[license]: https://raw.githubusercontent.com/LitGroup/str.php/master/LICENSE