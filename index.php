<?php
require './Controllers/BaseController.php';
$controllerName = ucfirst(strtolower($_REQUEST['controller'] ?? 'Welcome') .'Controller');
$actionName = $_REQUEST['action'] ?? 'index';
require "./Controllers/${controllerName}.php";

$controllerObject = new $controllerName;

$controllerObject ->$actionName();