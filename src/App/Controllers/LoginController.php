<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class LoginController
{


    function __construct(private TemplateEngine $view, private ValidatorService $validate)
    {
    }

    function index()
    {
        echo  $this->view->render("/login.php");
    }
    function loginuser()
    {
        if ($_POST["Role"] === "artist") {
            $this->validate->login($_POST);
        } else if ($_POST["Role"] === "client") {
            $this->validate->login($_POST);
        } else {
            $this->validate->login($_POST);
        }
    }
}
