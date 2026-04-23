<?php

namespace Src;

class DashboardHandler
{
    private Database $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function view(array $data): string
    {
        extract($data);

        ob_start();
        require_once __DIR__ . "/../views/dashboard.php";
        return ob_get_clean();
    }

    public function render(): void
    {
        $data = $this->database->getAll("users");

        echo $this->view($data);
    }
}
