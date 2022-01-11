<?php

use App\Structural\Decorator\Addition;
use App\Structural\Decorator\CalculatorStart;
use App\Structural\Decorator\Division;
use App\Structural\Decorator\Multiplication;
use App\Structural\Decorator\Subtraction;

require_once "../../../vendor/autoload.php";

$calculator = new CalculatorStart();
echo "Calculator : ".$calculator->result()."\n";

$calculator = (new Addition($calculator))->setNumber(20);
echo "Calculator : ".$calculator->result()."\n";

$calculator = (new Subtraction($calculator))->setNumber(10);
echo "Calculator : ".$calculator->result()."\n";

$calculator = (new Division($calculator))->setNumber(2);
echo "Calculator : ".$calculator->result()."\n";

$calculator = (new Multiplication($calculator))->setNumber(3);
echo "Calculator : ".$calculator->result()."\n";