<?php

use controllers\AnimalController;

require_once __DIR__ . '/controllers/AnimalController.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$animalController = new AnimalController();

if ('/' === $urlPath){
    $animalController->browse();
} else {
    header('HTTP/1.1 404 Not Found');
}