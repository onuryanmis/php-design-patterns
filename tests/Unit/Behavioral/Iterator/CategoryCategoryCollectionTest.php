<?php

namespace App\Tests\Unit\Behavioral\Iterator;

use App\Behavioral\Iterator\Category;

class CategoryCategoryCollectionTest extends CategoryCollectionTestCase
{
    public function testGetCategories(): void
    {
        $this->addCategory('PHP');
        $this->addCategory('CSS');

        $this->assertEquals(2, $this->categoryCollection->count());
    }

    public function testSetCategory(): void
    {
        $this->addCategory('PHP');

        $this->assertEquals(1, $this->categoryCollection->count());
        $this->assertEquals('PHP', $this->categoryCollection->getIterator()->current()->getName());
    }

    public function testRemoveCategory(): void
    {
        $this->addCategory('PHP');
        $this->addCategory('CSS');

        $this->assertEquals(2, $this->categoryCollection->count());

        $this->categoryCollection->removeCategory((new Category())->setName('PHP'));

        $this->assertEquals(1, $this->categoryCollection->count());
    }
}