<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Http\Router;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost/desafio');

echo Home::getHome();
