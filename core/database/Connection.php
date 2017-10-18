<?php

namespace App\Core\Database;

class Connection
{
    public static function make($databaseConfig)
    {
        try {
//            return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');

            return new \PDO(
                $databaseConfig['connection'].';dbname='.$databaseConfig['name'],
                $databaseConfig['username'],
                $databaseConfig['password'],
                $databaseConfig['options']
            );
        } catch (\PDOException $e) {
            die ($e->getMessage());
        }
    }
}
