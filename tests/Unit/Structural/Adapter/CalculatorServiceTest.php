<?php

namespace App\Tests\Unit\Structural\Adapter;

use App\Structural\Adapter\Schema\NumberSchema;
use App\Structural\Adapter\Service\AdditionAdapter;
use App\Structural\Adapter\Service\CalculatorService;
use App\Structural\Adapter\Service\SubtractionAdapter;
use PHPUnit\Framework\TestCase;

class CalculatorServiceTest extends TestCase
{
    /** @var NumberSchema $numberSchema */
    private NumberSchema $numberSchema;

    protected function setUp(): void
    {
        $this->numberSchema = (new NumberSchema())->setFirstNumber(50)->setSecondNumber(40);
    }

    public function testAdditionAdapter(): void
    {
        $additionAdapter = (new AdditionAdapter());

        $additionValue = $additionAdapter
            ->setNumberSchema($this->numberSchema)
            ->calculate();

        $this->assertInstanceOf(CalculatorService::class, $additionAdapter);
        $this->assertIsNumeric($additionValue);
        $this->assertEquals(90, $additionValue);
    }

    public function testSubtractionAdapter(): void
    {
        $subtractionAdapter = (new SubtractionAdapter());

        $subtractionValue = $subtractionAdapter
            ->setNumberSchema($this->numberSchema)
            ->calculate();

        $this->assertInstanceOf(CalculatorService::class, $subtractionAdapter);
        $this->assertIsNumeric($subtractionValue);
        $this->assertEquals(10, $subtractionValue);
    }
}