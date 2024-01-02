<?php


declare(strict_types=1);


namespace App\Config;

<<<<<<< HEAD
use App\Controllers\AdminAr;
use App\Controllers\AdminCl;
use App\Controllers\AdminController;
use App\Controllers\AdminNot;
=======
use App\Controllers\ArtistsConrtoller;
use App\Controllers\YassineController;
>>>>>>> 2e04b579211e3523d990f624e15c597b88f0c967
use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;
use App\Controllers\SalahController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/admin', [AdminController::class, 'index']);
    $app->get('/admin-c', [AdminCl::class, 'index']);
    $app->get('/admin-a', [AdminAr::class, 'index']);
    $app->get('/adminNot', [AdminNot::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
    $app->post('/signup', [AuthController::class, 'post']);
    $app->get('/artis', [ArtistsConrtoller::class, 'index']);
    $app->get('/yassine', [YassineController::class, 'index']);
    $app->get('/salah', [SalahController::class, 'index']);
}
