<?php

namespace App\Creational\SimpleFactory\Interfaces;

interface CalculatorInterface
{
    /**
     * @param int $firstNumber
     * @param int $secondNumber
     *
     * @return int
     */
    public function calculate(int $firstNumber, int $secondNumber): int;
}