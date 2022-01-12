<?php

namespace App\Tests\Unit\Behavioral\Strategy;

use App\Behavioral\Strategy\Addition;
use App\Behavioral\Strategy\Context;
use App\Behavioral\Strategy\Subtraction;
use PHPUnit\Framework\TestCase;

class MathStrategyTest extends TestCase
{
    public function testAddition(): void
    {
        $context = (new Context(new Addition()))
            ->setFirstNumber(20)
            ->setSecondNumber(10);

        $this->assertEquals(30, $context->calculate());
        $this->assertIsInt($context->calculate());
    }

    public function testSubtraction(): void
    {
        $context = (new Context(new Subtraction()))
            ->setFirstNumber(20)
            ->setSecondNumber(10);

        $this->assertEquals(10, $context->calculate());
        $this->assertIsInt($context->calculate());
    }
}