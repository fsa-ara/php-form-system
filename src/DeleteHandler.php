<?php

namespace Src;

class DeleteHandler
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function exec(): void
    {
        $id = $_POST["id"] ?? null;

        $this->database->delete("users", $id);

        header("Location: /");
        exit;
    }
}
