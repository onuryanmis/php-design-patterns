<?php

namespace App\Creational\Builder\Service;

use App\Creational\Builder\Schema\VehicleSchema;

class VehicleDirector
{
    /**
     * @param VehicleBuilder $builder
     *
     * @return VehicleSchema
     */
    public function build(VehicleBuilder $builder): VehicleSchema
    {
        $builder->createVehicle();
        $builder->setType();
        $builder->setEngine();
        $builder->setDoors();
        $builder->setWheel();

        return $builder->getVehicle();
    }
}