<?php

namespace App\Repository;

class Database
{

    public static function getConnection()
    {
        return new \PDO("mysql:host=localhost:8889;dbname=synfony_course", "root", "root");

    }
}