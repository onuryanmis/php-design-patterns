<?php

namespace App\Structural\Decorator;

trait NumberTrait
{
    /** @var int $number */
    protected int $number;

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return $this
     */
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}