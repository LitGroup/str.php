<?php
declare(strict_types=1);

namespace LitGroup\Str;

use function mb_strlen;

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
}