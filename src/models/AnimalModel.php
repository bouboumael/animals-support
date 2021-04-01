<?php

namespace models;

use PDO;

class AnimalModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO(DSN, USER, PASS);      
    }

    public function getAll(): array
    {
        $statement = $this->connection->query('SELECT * FROM animal ORDER BY name ASC');
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

}