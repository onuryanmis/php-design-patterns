<?php

namespace App\Creational\Builder\Service\Vehicle;

use App\Creational\Builder\Definition\VehicleTypeDefinition;
use App\Creational\Builder\Service\VehicleBuilder;

class MotorCycleBuilder extends VehicleBuilder
{
    public function setType(): void
    {
        $this->vehicleSchema->setType(VehicleTypeDefinition::MOTORCYCLE_TYPE);
    }

    public function setWheel(): void
    {
        $this->vehicleSchema->setWheels(2);
    }

    public function setEngine(): void
    {
        $this->vehicleSchema->setEngine('200 cc');
    }

    public function setDoors(): void
    {
        $this->vehicleSchema->setDoors(0);
    }
}