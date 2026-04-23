<?php

use Core\Autoloader;
use Src\DashboardHandler;
use Src\DeleteHandler;
use Src\EditHandler;
use Src\FormHandler;

require_once __DIR__ . "/../core/Autoloader.php";

Autoloader::init();

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM SYSTEM</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <?php
    require_once __DIR__ . "/../views/header.php";

    $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    if ($uri === "/") {
        $dashboard = new DashboardHandler();
        $dashboard->render();
    }

    if ($uri === "/form") {
        $form = new FormHandler();
        $form->render();
    }

    if ($uri === "/edit") {
        $edit = new EditHandler();
        $edit->render();
    }

    if ($uri === "/delete") {
        $delete = new DeleteHandler();
        $delete->exec();
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>