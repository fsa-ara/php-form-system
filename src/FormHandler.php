<?php

namespace Src;

class FormHandler
{
    private FormValidator $formValidator;

    public function __construct()
    {
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
        $req = $this->getPost();
        $data = $this->formValidator->checking($req);

        if (isset($data["errors"])) {
            // echo "erreur défini";
        }

        echo $this->view($data);
    }
}
