<?php

namespace App\Creational\SimpleFactory\Schema;

class CalculatorSchema
{
    /** @var string $type */
    public string $type;

    /** @var int $firstNumber */
    public int $firstNumber;

    /** @var int $secondNumber */
    public int $secondNumber;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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
}