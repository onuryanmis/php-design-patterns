<?php

namespace App\Structural\Decorator;

class MathDecorator implements CalculatorInterface
{
    use NumberTrait;

    /**
     * MathDecorator constructor.
     *
     * @param CalculatorInterface $calculator
     */
    public function __construct(protected CalculatorInterface $calculator)
    {
    }

    /**
     * @return int|float
     */
    public function result(): int|float
    {
        return $this->calculator->result();
    }
}