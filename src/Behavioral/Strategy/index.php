<?php

use App\Behavioral\Strategy\Context;
use App\Behavioral\Strategy\Addition;
use App\Behavioral\Strategy\Subtraction;

require_once "../../../vendor/autoload.php";

$context = (new Context(new Addition()))
    ->setFirstNumber(20)
    ->setSecondNumber(10);

echo "Calculator : " . $context->calculate();
echo "\n";

$context = (new Context(new Subtraction()))
    ->setFirstNumber(20)
    ->setSecondNumber(10);

echo "Calculator : " . $context->calculate();
echo "\n";