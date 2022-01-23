<?php

namespace App\Tests\Unit\Creational\SimpleFactory;

use App\Creational\SimpleFactory\Definition\CalculatorDefinition;
use App\Creational\SimpleFactory\Factory\CalculatorFactory;
use App\Creational\SimpleFactory\Schema\CalculatorSchema;
use Exception;
use PHPUnit\Framework\TestCase;

class CalculatorFactoryTest extends TestCase
{
    /** @var CalculatorFactory $calculatorFactory */
    private CalculatorFactory $calculatorFactory;

    /** @var CalculatorSchema $calculatorSchema */
    private CalculatorSchema $calculatorSchema;

    protected function setUp(): void
    {
        $this->calculatorFactory = new CalculatorFactory();
        $this->calculatorSchema  = (new CalculatorSchema())
            ->setFirstNumber(20)
            ->setSecondNumber(10)
            ->setType(CalculatorDefinition::ADDITION_TYPE);
    }

    public function testCalculateException(): void
    {
        $this->expectException(Exception::class);
        $this->calculatorSchema->setType('test');
        $this->calculatorFactory->calculate($this->calculatorSchema);
    }

    public function testAddition(): void
    {
        $this->assertEquals(30, $this->calculatorFactory->calculate($this->calculatorSchema));
    }

    public function testSubtraction(): void
    {
        $this->calculatorSchema->setType(CalculatorDefinition::SUBTRACTION_TYPE);

        $this->assertEquals(10, $this->calculatorFactory->calculate($this->calculatorSchema));
    }
}