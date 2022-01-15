<?php

use App\Creational\Builder\Service\Vehicle\CarBuilder;
use App\Creational\Builder\Service\Vehicle\MotorCycleBuilder;
use App\Creational\Builder\Service\VehicleDirector;

require_once "../../../vendor/autoload.php";

$car = (new VehicleDirector())->build(
    new CarBuilder()
);

var_dump($car);

echo "\n\n";
$motorCycle = (new VehicleDirector())->build(
    new MotorCycleBuilder()
);

var_dump($motorCycle);