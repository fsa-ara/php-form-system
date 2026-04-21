<?php

namespace Src;

class FormSanitizer
{
    public function firstname(string $entry): string
    {
        return filter_var($entry, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function lastname(string $entry): string
    {
        return filter_var($entry, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    public function email(string $entry): string
    {
        return filter_var($entry, FILTER_SANITIZE_EMAIL);
    }
}
