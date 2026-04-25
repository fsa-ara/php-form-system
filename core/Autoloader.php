<?php

namespace Core;

class Autoloader
{
    public static function init(): void
    {
        spl_autoload_register([self::class, "load"]);
    }

    private static function load(string $input): void
    {
        $parts = explode("\\", $input);
        $parts[0] = strtolower($parts[0]);
        $filename = implode("/", $parts);
        $class = __DIR__ . "/../" . $filename . ".php";

        if (file_exists($class)) {
            require_once $class;
        }
    }
}
