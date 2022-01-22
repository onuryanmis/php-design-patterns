<?php

use App\Creational\Singleton\Library\Database;

require_once "../../../vendor/autoload.php";

$pdo = Database::getInstance([
    'host'     => 'localhost',
    'user'     => 'root',
    'dbname'   => 'laravel',
    'password' => ''
]);

$query = $pdo->query('SELECT * FROM categories');

dd($query->fetchAll($pdo::FETCH_OBJ));