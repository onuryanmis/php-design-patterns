<?php

namespace App\Tests\Unit\Behavioral\Iterator;

use App\Behavioral\Iterator\Category;
use App\Behavioral\Iterator\CategoryCollection;
use PHPUnit\Framework\TestCase;

class CategoryCollectionTestCase extends TestCase
{
    /** @var CategoryCollection $categoryCollection */
    protected CategoryCollection $categoryCollection;

    public function setUp(): void
    {
        $this->categoryCollection = new CategoryCollection();
    }

    /**
     * @param string $categoryName
     * @param bool $status
     */
    protected function addCategory(string $categoryName, bool $status = true): void
    {
        $this->categoryCollection->setCategory(
            (new Category())->setName($categoryName)->setStatus($status)
        );
    }
}