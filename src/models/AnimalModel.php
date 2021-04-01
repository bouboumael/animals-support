<?php

namespace models;

use PDO;

class AnimalModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO(DSN, USER, PASS);  
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }

    public function getAll(): array
    {
        $order = $_GET['sort'] ?? 'name';

        $inputs = ['name', 'weight'];
        
        if (!in_array($order, $inputs)){
            $order = 'name';
        }
        $query = "SELECT * FROM animal ORDER BY $order ASC";
        $statement = $this->connection->query($query);
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    

}