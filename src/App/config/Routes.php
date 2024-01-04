<?php


declare(strict_types=1);


namespace App\Config;

use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);

    $app->get('/signup', [AuthController::class, 'index']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->post('/signup', [AuthController::class, 'register']);
}
