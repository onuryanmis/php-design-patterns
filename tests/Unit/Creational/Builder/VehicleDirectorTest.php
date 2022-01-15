<?php

namespace App\Tests\Unit\Creational\Builder;

use App\Creational\Builder\Definition\VehicleTypeDefinition;
use App\Creational\Builder\Schema\VehicleSchema;
use App\Creational\Builder\Service\Vehicle\CarBuilder;
use App\Creational\Builder\Service\VehicleBuilder;
use App\Creational\Builder\Service\VehicleDirector;
use PHPUnit\Framework\TestCase;

class VehicleDirectorTest extends TestCase
{
    public function testBuild(): void
    {
        $builder = new CarBuilder();
        $car = (new VehicleDirector())->build($builder);

        $this->assertInstanceOf(VehicleBuilder::class, $builder);
        $this->assertInstanceOf(VehicleSchema::class, $car);
        $this->assertEquals(VehicleTypeDefinition::CAR_TYPE, $car->getType());
        $this->assertIsInt($car->getDoors());
        $this->assertIsString($car->getEngine());
        $this->assertIsInt($car->getWheels());
    }
}