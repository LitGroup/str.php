<?php
/**
 * Copyright 2017 LitGroup LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is furnished
 * to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

declare(strict_types=1);

namespace LitGroup\Str;

use function mb_strlen;
use function mb_strtoupper;
use function mb_strtolower;
use function trim;
use function ltrim;
use function rtrim;

/**
 * Collection of static methods for manipulation with UTF-8 strings.
 */
final class Str
{
    private const ENCODING = 'UTF-8';

    public static function length(string $str): int
    {
        return mb_strlen($str, self::ENCODING);
    }

    public static function trim(string $str): string
    {
        return trim($str);
    }

    public static function ltrim(string $str): string
    {
        return ltrim($str);
    }

    public static function rtrim(string $str): string
    {
        return rtrim($str);
    }

    public static function isEmpty(string $str): bool
    {
        return self::length($str) === 0;
    }

    public static function isNotEmpty(string $str): bool
    {
        return !self::isEmpty($str);
    }

    public static function toUpperCase(string $str): string
    {
        return mb_strtoupper($str, self::ENCODING);
    }
}