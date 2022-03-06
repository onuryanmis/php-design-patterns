<?php

namespace App\Behavioral\ChainOfResponsibilities\Trait;

trait RoleTrait
{
    /**
     * @var string $role
     */
    private string $role;

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     *
     * @return $this
     */
    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }
}