<?php

namespace App\Tests\Unit\Structural\Decorator;

use App\Structural\Decorator\Addition;
use App\Structural\Decorator\CalculatorInterface;
use App\Structural\Decorator\CalculatorStart;
use App\Structural\Decorator\Division;
use App\Structural\Decorator\MathDecorator;
use App\Structural\Decorator\Multiplication;
use App\Structural\Decorator\Subtraction;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCalculatorStart(): void
    {
        $calculator = new CalculatorStart();

        $this->assertEquals(0, $calculator->result());
        $this->assertInstanceOf(CalculatorInterface::class, $calculator);
    }

    public function testAddition(): void
    {
        $calculator = new CalculatorStart();
        $calculator = (new Addition($calculator))->setNumber(20);

        $this->assertEquals(20, $calculator->result());
        $this->assertInstanceOf(MathDecorator::class, $calculator);
    }

    public function testSubtraction(): void
    {
        $calculator = new CalculatorStart();
        $calculator = (new Addition($calculator))->setNumber(20);
        $calculator = (new Subtraction($calculator))->setNumber(10);

        $this->assertEquals(10, $calculator->result());
        $this->assertInstanceOf(MathDecorator::class, $calculator);
    }

    public function testDivision(): void
    {
        $calculator = new CalculatorStart();
        $calculator = (new Addition($calculator))->setNumber(20);
        $calculator = (new Division($calculator))->setNumber(10);

        $this->assertEquals(2, $calculator->result());
        $this->assertInstanceOf(MathDecorator::class, $calculator);
    }

    public function testMultiplication(): void
    {
        $calculator = new CalculatorStart();
        $calculator = (new Addition($calculator))->setNumber(20);
        $calculator = (new Multiplication($calculator))->setNumber(10);

        $this->assertEquals(200, $calculator->result());
        $this->assertInstanceOf(MathDecorator::class, $calculator);

        $calculator = (new Multiplication($calculator))->setNumber(0);
        $this->assertEquals(0, $calculator->result());
    }
}