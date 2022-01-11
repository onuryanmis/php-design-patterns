<?php

namespace App\Structural\Decorator;

class Division extends MathDecorator
{
    /**
     * @return int|float
     */
    public function result(): int|float
    {
        return $this->calculator->result() / $this->getNumber();
    }
}