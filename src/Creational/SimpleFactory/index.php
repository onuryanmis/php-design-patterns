<?php

use App\Creational\SimpleFactory\Definition\CalculatorDefinition;
use App\Creational\SimpleFactory\Factory\CalculatorFactory;
use App\Creational\SimpleFactory\Schema\CalculatorSchema;

require_once "../../../vendor/autoload.php";

$firstNumber  = 20;
$secondNumber = 10;

$calculatorSchema = (new CalculatorSchema())
    ->setFirstNumber(20)
    ->setSecondNumber(10)
    ->setType(CalculatorDefinition::SUBTRACTION_TYPE);

$calculate = (new CalculatorFactory())->calculate($calculatorSchema);

dd($calculate);