<?php

declare(strict_types=1);

namespace App;

class Number
{
    public static function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }
}
