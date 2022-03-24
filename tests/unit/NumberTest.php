<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Number;
use Codeception\Test\Unit;

class NumberTest extends Unit
{
    public function testIsEven(): void
    {
        self::assertTrue(Number::isEven(2));
    }
}
