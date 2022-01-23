<?php

namespace App\Creational\SimpleFactory\Definition;

use App\Creational\SimpleFactory\Service\Addition;
use App\Creational\SimpleFactory\Service\Subtraction;

final class CalculatorDefinition
{
    const ADDITION_TYPE    = 'addition';
    const SUBTRACTION_TYPE = 'subtraction';

    const TYPES = [
        self::ADDITION_TYPE    => Addition::class,
        self::SUBTRACTION_TYPE => Subtraction::class
    ];
}