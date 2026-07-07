<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class CategoriaModel
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = Database::connect();
    }

    public function all(): array
    {
        $sql = "SELECT * FROM categoria";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
}
