<?php

namespace App\Structural\Decorator;

interface CalculatorInterface
{
    /**
     * @return int|float
     */
    public function result(): int|float;
}