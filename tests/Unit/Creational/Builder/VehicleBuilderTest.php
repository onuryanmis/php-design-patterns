<?php

namespace App\Tests\Unit\Creational\Builder;

use App\Creational\Builder\Schema\VehicleSchema;
use App\Creational\Builder\Service\Vehicle\CarBuilder;
use App\Creational\Builder\Service\VehicleBuilder;
use PHPUnit\Framework\TestCase;

class VehicleBuilderTest extends TestCase
{
    public function testCreateVehicleBuilder(): void
    {
        $vehicle = new CarBuilder();
        $vehicle->createVehicle();

        $this->assertInstanceOf(VehicleBuilder::class, $vehicle);
        $this->assertInstanceOf(VehicleSchema::class, $vehicle->getVehicle());
    }
}