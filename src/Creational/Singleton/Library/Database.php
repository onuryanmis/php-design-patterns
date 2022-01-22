<?php

namespace App\Creational\Singleton\Library;

use Exception;
use PDO;

class Database
{
    /** @var PDO|null $pdo */
    protected static ?PDO $pdo = null;

    /**
     * PDO Database connection.
     *
     * @return PDO|null
     */
    public static function getInstance(array $config): ?PDO
    {
        if (is_null(static::$pdo)) {
            static::$pdo = new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=utf8',
                $config['user'],
                $config['password']
            );
        }

        return static::$pdo;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /**
     * @throws Exception
     */
    public function __wakeup()
    {
        throw new Exception('Cannot unserialize singleton');
    }
}