<?php
declare(strict_types=1);

namespace Test\LitGroup\Str;

use LitGroup\Str\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    function testLength(): void
    {
        self::assertEquals(0, Str::length(''));
        self::assertEquals(6, Str::length('Hello!'));
        self::assertEquals(7, Str::length('Привет!'));
    }
}
