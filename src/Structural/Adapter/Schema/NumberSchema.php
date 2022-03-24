<?php

namespace App\Structural\Adapter\Schema;

class NumberSchema
{
    /** @var int|float $firstNumber */
    private int|float $firstNumber;

    /** @var int|float $secondNumber */
    private int|float $secondNumber;

    /**
     * @return float|int
     */
    public function getFirstNumber(): float|int
    {
        return $this->firstNumber;
    }

    /**
     * @param float|int $firstNumber
     *
     * @return $this
     */
    public function setFirstNumber(float|int $firstNumber): self
    {
        $this->firstNumber = $firstNumber;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getSecondNumber(): float|int
    {
        return $this->secondNumber;
    }

    /**
     * @param float|int $secondNumber
     *
     * @return $this
     */
    public function setSecondNumber(float|int $secondNumber): self
    {
        $this->secondNumber = $secondNumber;

        return $this;
    }
}