<?php

namespace App\Behavioral\Iterator;

class Category
{
    /** @var string $name */
    private string $name;

    /** @var string $description */
    private string $description;

    /** @var bool $status */
    private bool $status = true;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Category
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Category
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->status;
    }

    /**
     * @param bool $status
     *
     * @return Category
     */
    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}