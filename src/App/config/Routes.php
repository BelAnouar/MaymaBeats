<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\ArtistsConrtoller;
use App\Controllers\YassineController;
use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;
<<<<<<< HEAD
use App\Controllers\SalahController;
=======
use App\Controllers\profilecontroller;
>>>>>>> malek

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
<<<<<<< HEAD
    $app->post('/signup', [AuthController::class, 'post']);
    $app->get('/artis', [ArtistsConrtoller::class, 'index']);
    $app->get('/yassine', [YassineController::class, 'index']);
    $app->get('/salah', [SalahController::class, 'index']);
=======
    $app->get('/profile', [profilecontroller::class, 'index']);
>>>>>>> malek
}
