<?php
require __DIR__ . '/vendor/autoload.php';

use App\XHandler\Http\Http;
use App\XHandler\Router\Router\Router;

$RETURN = Router::router();

var_dump($RETURN);