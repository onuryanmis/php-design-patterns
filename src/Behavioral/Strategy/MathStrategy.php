<?php

namespace App\Behavioral\Strategy;

interface MathStrategy
{
    /**
     * @param int $firstNumber
     * @param int $secondNumber
     *
     * @return int
     */
    public function calculate(int $firstNumber, int $secondNumber): int;
}