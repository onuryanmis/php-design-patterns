<?php

namespace App\Creational\SimpleFactory\Factory;

use App\Creational\SimpleFactory\Definition\CalculatorDefinition;
use App\Creational\SimpleFactory\Interfaces\CalculatorInterface;
use App\Creational\SimpleFactory\Schema\CalculatorSchema;
use Exception;

class CalculatorFactory
{
    /**
     * @param CalculatorSchema $calculatorSchema
     *
     * @return int
     *
     * @throws Exception
     */
    public function calculate(CalculatorSchema $calculatorSchema): int
    {
        if (!in_array($calculatorSchema->getType(), array_keys(CalculatorDefinition::TYPES))) {
            throw new Exception('Type not found');
        }

        /** @var CalculatorInterface $calculator */
        $calculator = new (CalculatorDefinition::TYPES[$calculatorSchema->getType()]);

        return $calculator->calculate(
            $calculatorSchema->getFirstNumber(),
            $calculatorSchema->getSecondNumber()
        );
    }
}