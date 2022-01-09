<?php

namespace App\Behavioral\Iterator;

use Countable;
use IteratorAggregate;

class CategoryCollection implements Countable, IteratorAggregate
{
    /** @var array $categories */
    private array $categories;

    /**
     * @return array
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * @param Category $category
     *
     * @return CategoryCollection
     */
    public function setCategory(Category $category): self
    {
        $this->categories[] = $category;

        return $this;
    }

    public function removeCategory(Category $category)
    {
        /** @var Category $categoryItem */
        foreach ($this->categories as $key => $categoryItem) {
            if ($categoryItem->getName() === $category->getName()) {
                unset($this->categories[$key]);

                break;
            }
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->categories);
    }

    /**
     * @return CategoryIterator
     */
    public function getIterator(): CategoryIterator
    {
        return new CategoryIterator($this);
    }
}