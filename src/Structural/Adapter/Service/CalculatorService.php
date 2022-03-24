<?php

namespace App\Structural\Adapter\Service;

use App\Structural\Adapter\Schema\NumberSchema;

abstract class CalculatorService
{
    /** @var NumberSchema $numberSchema */
    private NumberSchema $numberSchema;

    /**
     * @return NumberSchema
     */
    public function getNumberSchema(): NumberSchema
    {
        return $this->numberSchema;
    }

    /**
     * @param NumberSchema $numberSchema
     *
     * @return $this
     */
    public function setNumberSchema(NumberSchema $numberSchema): self
    {
        $this->numberSchema = $numberSchema;

        return $this;
    }

    /**
     * @return int|float
     */
    public abstract function calculate(): int|float;
}