<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * FooTest
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class FooTest extends TestCase
{

    public function testIsTrue()
    {
        $foo = new Foo();
        self::assertTrue($foo->isTrue());
    }
}
