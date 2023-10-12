<?php
    require_once('vendor/autoload.php');
    require_once('src/controllers/HomeController.php');

    use Klein\Klein;

    $app = new Klein();

    $homeController = new HomeController;

    $app->respond('GET', '/', function() use($homeController) {
        return $homeController->index();
    });

    $app->dispatch();