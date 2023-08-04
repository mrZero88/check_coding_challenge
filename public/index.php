<?php

require_once('../vendor/autoload.php');

use app\routes\Router;

$pathInfo = $_SERVER["REQUEST_URI"];
$routingMapper = new Router();
$routingMapper->executeRoute($pathInfo);