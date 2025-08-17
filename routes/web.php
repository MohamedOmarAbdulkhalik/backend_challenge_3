<?php

use App\Controllers\BookController;
use App\Controllers\UserController;
use App\Core\Router;

$router=new Router();

$router->get('/4-%20Backend-Phase/D-4/HW/library/public/users',[UserController::class,'index']);
$router->get('/4-%20Backend-Phase/D-4/HW/library/public/Books',[BookController::class,'index']);

