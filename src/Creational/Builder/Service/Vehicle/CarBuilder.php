<?php

namespace App\Creational\Builder\Service\Vehicle;

use App\Creational\Builder\Definition\VehicleTypeDefinition;
use App\Creational\Builder\Service\VehicleBuilder;

class CarBuilder extends VehicleBuilder
{
    public function setType(): void
    {
        $this->vehicleSchema->setType(VehicleTypeDefinition::CAR_TYPE);
    }

    public function setWheel(): void
    {
        $this->vehicleSchema->setWheels(4);
    }

    public function setEngine(): void
    {
        $this->vehicleSchema->setEngine('1500 cc');
    }

    public function setDoors(): void
    {
        $this->vehicleSchema->setDoors(4);
    }
}