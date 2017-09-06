# String utils for PHP 7

[![Build Status](https://travis-ci.org/LitGroup/str.php.svg?branch=master)](https://travis-ci.org/LitGroup/str.php)

## Installation

```bash
composer require litgroup/str:^0.1
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