<?php

namespace App\Creational\Builder\Schema;

class VehicleSchema
{
    /**
     * @var string $type
     */
    private string $type;

    /**
     * @var string $engine
     */
    private string $engine;

    /**
     * @var int $wheels
     */
    private int $wheels;

    /**
     * @var int $doors
     */
    private int $doors;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getEngine(): string
    {
        return $this->engine;
    }

    /**
     * @param string $engine
     *
     * @return $this
     */
    public function setEngine(string $engine): self
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * @return int
     */
    public function getWheels(): int
    {
        return $this->wheels;
    }

    /**
     * @param int $wheels
     *
     * @return $this
     */
    public function setWheels(int $wheels): self
    {
        $this->wheels = $wheels;

        return $this;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     *
     * @return $this
     */
    public function setDoors(int $doors): self
    {
        $this->doors = $doors;

        return $this;
    }
}