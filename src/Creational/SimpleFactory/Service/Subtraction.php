<?php

namespace App\Creational\SimpleFactory\Service;

use App\Creational\SimpleFactory\Interfaces\CalculatorInterface;

class Subtraction implements CalculatorInterface
{
    /**
     * @param int $firstNumber
     * @param int $secondNumber
     *
     * @return int
     */
    public function calculate(int $firstNumber, int $secondNumber): int
    {
        return $firstNumber - $secondNumber;
    }
}