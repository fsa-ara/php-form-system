<?php

namespace Src;

class FormHandler
{
    private Database $database;
    private FormValidator $formValidator;

    public function __construct()
    {
        $this->database = new Database();
        $this->formValidator = new FormValidator();
    }

    public function getPost(): array
    {
        return $_POST;
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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $req = $this->getPost();
            $data = $this->formValidator->checking($req);

            if (isset($data["errors"])) {
                echo $this->view($data);

                return;
            }

            $this->database->insert("users", $data["sanitized"]);

            $_SESSION["success"] = true;
        }

        echo $this->view([]);
    }
}
