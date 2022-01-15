<?php

namespace App\Creational\Builder\Service;

use App\Creational\Builder\Schema\VehicleSchema;

abstract class VehicleBuilder
{
    /**
     * @var VehicleSchema $vehicleSchema
     */
    protected VehicleSchema $vehicleSchema;

    public function createVehicle(): void
    {
        $this->vehicleSchema = new VehicleSchema();
    }

    public abstract function setType(): void;

    public abstract function setWheel(): void;

    public abstract function setEngine(): void;

    public abstract function setDoors(): void;

    /**
     * @return VehicleSchema
     */
    public function getVehicle(): VehicleSchema
    {
        return $this->vehicleSchema;
    }
}