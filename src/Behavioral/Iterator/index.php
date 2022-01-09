<?php

require_once "../../../vendor/autoload.php";

use App\Behavioral\Iterator\Category;
use App\Behavioral\Iterator\CategoryCollection;

$categories = ['PHP', 'CSS', 'JAVASCRIPT', 'C#'];

$categoryCollection = new CategoryCollection();

foreach ($categories as $category)
{
    $categoryCollection->setCategory(
        (new Category())->setName($category)->setStatus(true)
    );
}

$firstCategory = (new Category())->setName($categories[0]);

$categoryCollection->removeCategory($firstCategory);


echo "Count : ".$categoryCollection->count();
echo "<hr>";
echo "<pre>";
    print_r($categoryCollection);
echo "</pre>";

