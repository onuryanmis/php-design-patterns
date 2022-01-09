<?php

namespace App\Tests\Unit\Behavioral\Iterator;

use App\Behavioral\Iterator\Category;

class CategoryIteratorTest extends CategoryCollectionTestCase
{
    public function testCurrentCategory(): void
    {
        $this->addCategory('PHP');
        $this->addCategory('CSS');

        $this->assertEquals('PHP', $this->categoryCollection->getIterator()->current()->getName());
    }

    public function testCheckIsTheCategoryValid(): void
    {
        $this->addCategory('PHP');

        $this->assertIsBool($this->categoryCollection->getIterator()->valid());
        $this->assertEquals(true, $this->categoryCollection->getIterator()->valid());

        $this->categoryCollection->removeCategory((new Category())->setName('PHP'));

        $this->assertEquals(false, $this->categoryCollection->getIterator()->valid());
    }
}