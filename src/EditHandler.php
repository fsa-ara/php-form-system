<?php

namespace Src;

class EditHandler
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
        require_once __DIR__ . "/../views/form.php";
        return ob_get_clean();
    }

    public function render(): void
    {
        $id = $_GET["id"] ?? null;

        if (!$id) {
            echo "User not found";
            return;
        }

        $data["sanitized"] = $this->database->get("users", $id);

        echo $this->view($data);
    }
}
