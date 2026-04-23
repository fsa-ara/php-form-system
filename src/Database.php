<?php

namespace Src;

use PDO;

class Database
{
    private PDO $pdo;
    private array $config;
    private array $database;

    public function __construct()
    {
        $this->config = require_once __DIR__ . "/../config/config.php";
        $this->database = $this->config["database"];

        $this->pdo = new PDO(
            "mysql:host={$this->database['host']};dbname={$this->database['dbname']}",
            $this->database["user"],
            $this->database["pwd"]
        );

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function insert(string $table, array $data): bool
    {
        $columns = array_keys($data);
        $fields = implode(", ", $columns);
        $placeholders = implode(", ", array_map(fn($field) => ":" . $field, $columns));

        $req = "INSERT INTO $table ($fields) VALUES ($placeholders)";

        $stmt = $this->pdo->prepare($req);

        return $stmt->execute($data);
    }

    public function getAll(string $table): array
    {
        $req = "SELECT * FROM $table ORDER BY id DESC";

        $stmt = $this->pdo->query($req);

        return $stmt->fetchAll();
    }
}
