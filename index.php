<?php
require 'Model.php';
require 'AbstractController.php';
require 'MainController.php';
require 'AuthController.php';

$page = filter_input(INPUT_GET, 'page');  $_GET['page'];
switch ($page) {
    case null:
    case 'index':
        $controllerName = MainController::class;
        $method = 'index';
        break;
//blog
    case 'auth':
        $controllerName = AuthController::class;
        $method = 'auth';
        break;
        default:
        $controllerName = MainController::class;
        $method = 'pageNotFound';
        break;
}

$controller = new $controllerName();
$controller->$method();