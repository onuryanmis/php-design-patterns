<?php

namespace App\Behavioral\Iterator;

use Iterator;

class CategoryIterator implements Iterator
{
    /** @var int $currentIndex */
    private int $currentIndex = 0;

    /** @var CategoryCollection $categoryCollection */
    private CategoryCollection $categoryCollection;

    /**
     * CategoryIterator constructor.
     *
     * @param CategoryCollection $categoryCollection
     */
    public function __construct(CategoryCollection $categoryCollection)
    {
        $this->categoryCollection = $categoryCollection;
    }

    /**
     * @return Category|null
     */
    public function current(): ?Category
    {
        return $this->categoryCollection->getCategories()
            ? $this->categoryCollection->getCategories()[$this->currentIndex]
            : null;
    }

    /**
     * @return int
     */
    public function next(): int
    {
        return $this->currentIndex++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->categoryCollection->getCategories()[$this->currentIndex]);
    }

    public function rewind(): void
    {
        $this->currentIndex = 0;
    }
}