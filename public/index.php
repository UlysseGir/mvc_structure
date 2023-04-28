<?php

use name\Models\Exemple;

session_start();

require '../src/config/config.php';
require '../vendor/autoload.php';
require SRC . 'helper.php';

$router = new name\Router($_SERVER["REQUEST_URI"]);
//Index of the webPage
$router -> get('/', "ExempleController@index");

$router->run();
