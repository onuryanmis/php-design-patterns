<?php

namespace App\Structural\Decorator;

class CalculatorStart implements CalculatorInterface
{
    /**
     * @return int|float
     */
    public function result(): int|float
    {
        return 0;
    }
}