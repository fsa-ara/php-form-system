<?php

namespace Src;

class FormValidator
{
    private FormSanitizer $formSanitizer;
    private array $data;

    public function __construct()
    {
        $this->formSanitizer = new FormSanitizer();
        $this->data = [];
    }

    private array $fields = ["firstname", "lastname", "email"];

    public function checking(array $entries): array
    {
        foreach ($this->fields as $field) {
            $entry = $entries[$field] ?? "";

            $this->data["sanitized"][$field] = $this->formSanitizer->$field($entry);
        }

        $this->setErrors($this->data["sanitized"]);

        return $this->data;
    }

    private function isEmail(string $entry): bool
    {
        return filter_var($entry, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function setErrors(array $entries): void
    {
        foreach ($this->fields as $field) {
            if (trim($entries[$field]) === "") {
                $this->data["errors"][$field] = "This field cannot be empty";

                continue;
            }

            if ($field === "email" && !$this->isEmail($entries[$field])) {
                $this->data["errors"][$field] = "Invalid email format";
            }
        }
    }
}
