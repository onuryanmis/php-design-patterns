<?php

namespace App\Behavioral\Strategy;

class Context
{
    /** @var int $firstNumber */
    protected int $firstNumber;

    /** @var int $secondNumber */
    protected int $secondNumber;

    /**
     * Context constructor.
     *
     * @param MathStrategy $mathStrategy
     */
    public function __construct(protected MathStrategy $mathStrategy)
    {

    }

    /**
     * @return int
     */
    public function getFirstNumber(): int
    {
        return $this->firstNumber;
    }

    /**
     * @param int $firstNumber
     *
     * @return $this
     */
    public function setFirstNumber(int $firstNumber): self
    {
        $this->firstNumber = $firstNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getSecondNumber(): int
    {
        return $this->secondNumber;
    }

    /**
     * @param int $secondNumber
     *
     * @return $this
     */
    public function setSecondNumber(int $secondNumber): self
    {
        $this->secondNumber = $secondNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        return $this->mathStrategy->calculate(
            $this->getFirstNumber(),
            $this->getSecondNumber()
        );
    }
}