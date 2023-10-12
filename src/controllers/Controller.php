<?php

namespace src\controllers;

require_once 'vendor/autoload.php';

class Controller
{
    public function view(string $template, array $context = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader('src/templates');
        $twig = new \Twig\Environment($loader);
        return $twig->render($template, $context);
    }
}
