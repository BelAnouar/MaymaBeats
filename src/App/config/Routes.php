<?php


declare(strict_types=1);


namespace App\Config;


use App\Controllers\ArtisteConrtoller;
use Framework\App;

use App\Controllers\AdminAr;
use App\Controllers\AdminCl;
use App\Controllers\AdminController;
use App\Controllers\AdminNot;

use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\ForgotController;
use App\Controllers\LoginController;
use App\Controllers\parolecontroller;
use App\Controllers\SalahController;

use App\Controllers\SearchController;

use App\Controllers\profilecontroller;
use App\Controllers\Reactioncontroller;
use App\Controllers\StylesController;
use App\Controllers\TestController;
use app\Services\Reactionmodel;
use App\Controllers\IndexController;
use App\Controllers\LyricsController;
use App\Controllers\MusicControllers;
use App\Controllers\OPTController;
use App\Controllers\RestController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
    $app->post('/signup', [AuthController::class, 'registerUser']);

    $app->get('/profile', [profilecontroller::class, 'index']);
    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/admin', [AdminController::class, 'index']);
    $app->get('/admin-c', [AdminCl::class, 'index']);
    $app->get('/admin-a', [AdminAr::class, 'index']);
    // $app->get('/adminNot', [AdminNot::class, 'index']);

    //Style Controllers
    $app->get('/admin-s', [StylesController::class, 'index']);

    $app->post('/admin-s', [StylesController::class, 'insertStyle']);




    $app->get('/admin-s/{transaction}', [StylesController::class, 'view']);



    $app->post('/artiste', [ArtisteConrtoller::class, "addAlbum"]);
    $app->get('/artiste', [ArtisteConrtoller::class, "index"]);

    $app->get('/parole', [LyricsController::class, "index"]);

    // yassine Route for index page (client)
    // $app->get('/index', [IndexController::class, 'index']);




    $app->post("/client", [Reactionmodel::class, "addlike"]);
    $app->post("/client", [Reactionmodel::class, "adddislike"]);
    $app->get("/client", [parolecontroller::class, "addlyrics"]);
    $app->post("/client", [parolecontroller::class, "deletelyrics"]);

    $app->get('/signup', [AuthController::class, 'index']);

    $app->post('/signup', [AuthController::class, 'registerUser']);
    $app->get('/artis', [ArtisteConrtoller::class, 'index']);

    $app->get('/', [SearchController::class, 'index']);

    $app->get('/login', [LoginController::class, 'index']);
    $app->post('/login', [LoginController::class, 'loginuser']);
    $app->post('/signup', [AuthController::class, 'register']);
    $app->get('/forgotPwd', [ForgotController::class, 'index']);
    $app->post('/forgotPwd', [ForgotController::class, 'frogetPass']);
    $app->get('/opt', [OPTController::class, 'index']);
    $app->post('/opt', [OPTController::class, 'sentPass']);
    $app->get('/Restpassword', [RestController::class, 'index']);
    $app->post('/Restpassword', [RestController::class, 'changePass']);

    $app->post('/artiste', [ArtisteConrtoller::class, "addAlbum"]);
    $app->get('/artiste', [ArtisteConrtoller::class, "index"]);
    $app->post('/musicArtiste/{idm}', [MusicControllers::class, "addMusic"]);
    $app->get('/musicArtiste/{idm}', [MusicControllers::class, "afficherMusic"]);
    $app->get('/artisteProfile/{idArtiste}', [ArtisteConrtoller::class, "indexProfile"]);
}
