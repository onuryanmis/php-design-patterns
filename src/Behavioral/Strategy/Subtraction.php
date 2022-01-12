<?php

namespace App\Behavioral\Strategy;

class Subtraction implements MathStrategy
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