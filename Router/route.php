<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/IconController.php";
require_once "Controllers/TableController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// Icons
$route->get("/icons", [IconController::class, 'icon']);

// Table
$route->get("/tables", [TableController::class, 'table']);



$route->route();