<?php

namespace App\Structural\Adapter\Service;

class AdditionAdapter extends CalculatorService
{
    /**
     * @inheritDoc
     */
    public function calculate(): int|float
    {
        $numberSchema = $this->getNumberSchema();

        return $numberSchema->getFirstNumber() + $numberSchema->getSecondNumber();
    }
}