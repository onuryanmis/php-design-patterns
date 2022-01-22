<?php

namespace App\Tests\Unit\Creational\Singleton;

use App\Creational\Singleton\Library\Database;
use PDO;
use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    /** @var string[]  */
    private const DB_CONFIG = [
        'host'     => 'localhost',
        'user'     => 'root',
        'dbname'   => 'laravel',
        'password' => ''
    ];

    public function testGetInstance(): void
    {
        $pdo = Database::getInstance(self::DB_CONFIG);

        $this->assertInstanceOf(PDO::class, $pdo);
        $this->assertSame($pdo, Database::getInstance(self::DB_CONFIG));
    }
}