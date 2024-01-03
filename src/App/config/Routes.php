<?php


declare(strict_types=1);


namespace App\Config;

use Framework\App;
use App\Controllers\ArtistsConrtoller;
use App\Controllers\YassineController;
use App\Controllers\AdminAr;
use App\Controllers\AdminCl;
use App\Controllers\AdminController;
use App\Controllers\AdminNot;

use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Controllers\profilecontroller;
=======
use App\Controllers\SalahController;
>>>>>>> 2e04b579211e3523d990f624e15c597b88f0c967
=======
use App\Controllers\SalahController;
use App\Controllers\profilecontroller;
use App\Controllers\StylesController;
use App\Controllers\TestController;
>>>>>>> de362ca00ce010dda243ad8cd291bd2772a58c23

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
<<<<<<< HEAD
<<<<<<< HEAD
    $app->get('/profile', [profilecontroller::class, 'index']);
=======
=======
>>>>>>> de362ca00ce010dda243ad8cd291bd2772a58c23
    $app->post('/signup', [AuthController::class, 'post']);
    $app->get('/artis', [ArtistsConrtoller::class, 'index']);
    $app->get('/yassine', [YassineController::class, 'index']);
    $app->get('/salah', [SalahController::class, 'index']);
<<<<<<< HEAD
>>>>>>> 2e04b579211e3523d990f624e15c597b88f0c967
=======
    $app->get('/profile', [profilecontroller::class, 'index']);
    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/admin', [AdminController::class, 'index']);
    $app->get('/admin-c', [AdminCl::class, 'index']);
    $app->get('/admin-a', [AdminAr::class, 'index']);
    $app->get('/adminNot', [AdminNot::class, 'index']);
    $app->get('/admin-s', [StylesController::class, 'index']);
    $app->get('/admin-s/{transaction}', [StylesController::class, 'view']);




    $app->get("/test", [TestController::class, "index"]);
    $app->get('/test/{anouar}', [TestController::class, "aff"]);
    $app->post("/test", [TestController::class, "post"]);
>>>>>>> de362ca00ce010dda243ad8cd291bd2772a58c23
}
