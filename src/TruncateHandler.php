<?php

namespace Src;

class TruncateHandler
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function exec(): void
    {
        echo $_POST['confirm'];

        if (!isset($_POST['confirm']) || $_POST['confirm'] !== 'yes') {
            die('Unauthorized');
        }

        $this->database->truncate("users");

        header("Location: /");
        exit;
    }
}
