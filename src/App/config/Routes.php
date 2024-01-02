<?php


declare(strict_types=1);


namespace App\Config;

use App\Controllers\ArtisteConrtoller;
use App\Controllers\ArtistsConrtoller;
use App\Controllers\YassineController;
use Framework\App;
use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;
use App\Controllers\SalahController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
    $app->get('/artiste', [ArtisteConrtoller::class,'index']);
    $app->get('/yassine',[YassineController::class,'index']);
    $app->get('/salah',[SalahController::class,'index']);
}
