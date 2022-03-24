<?php

use App\Structural\Adapter\Schema\NumberSchema;
use App\Structural\Adapter\Service\AdditionAdapter;
use App\Structural\Adapter\Service\SubtractionAdapter;

require_once "../../../vendor/autoload.php";

$numberSchema = (new NumberSchema())
    ->setFirstNumber(50)
    ->setSecondNumber(40);

$additionAdapter = (new AdditionAdapter())
    ->setNumberSchema($numberSchema)
    ->calculate();

echo $additionAdapter . "\n";

$subtractionAdapter = (new SubtractionAdapter())
    ->setNumberSchema($numberSchema)
    ->calculate();

echo $subtractionAdapter;