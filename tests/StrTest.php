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

namespace Test\LitGroup\Str;

use function mb_internal_encoding;
use LitGroup\Str\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    private static $systemEncoding;

    public static function setUpBeforeClass()
    {
        self::$systemEncoding = mb_internal_encoding();
        mb_internal_encoding('7bit');
    }

    public static function tearDownAfterClass()
    {
        mb_internal_encoding(self::$systemEncoding);
    }

    function testLength(): void
    {
        self::assertEquals(0, Str::length(''));
        self::assertEquals(6, Str::length('Hello!'));
        self::assertEquals(7, Str::length('Привет!'));
    }

    function testTrim(): void
    {
        self::assertEquals('hello', Str::trim(' hello '));
    }

    function testLtrim(): void
    {
        self::assertEquals('hello ', Str::ltrim(' hello '));
    }

    function testRtrim(): void
    {
        self::assertEquals(' hello', Str::rtrim(' hello '));
    }

    function testEmptyPredicate(): void
    {
        self::assertTrue(Str::isEmpty(''));
        self::assertFalse(Str::isEmpty(' '));
        self::assertFalse(Str::isEmpty('hello'));
    }

    function testNotEmptyPredicate(): void
    {
        self::assertTrue(Str::isNotEmpty('hello'));
        self::assertTrue(Str::isNotEmpty(' '));
        self::assertFalse(Str::isNotEmpty(''));
    }

    function testToUpperCase(): void
    {
        self::assertEquals('HELLO', Str::toUpperCase('hello'));
        self::assertEquals('ПРИВЕТ', Str::toUpperCase('привет'));
    }
}
