<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{

    public function __construct(private TemplateEngine $view)
    {
    }

    public function  index()
    {
        echo $this->view->render("/signup.php");
    }
<<<<<<< HEAD

    public function registerUser()
    {
        if ($_POST["Role"] === "artist") {
            $this->validate->artistRegister($_POST);
        } else {
            $this->validate->clientRegister($_POST);
        }

        header("Location: signup");
    }
=======
>>>>>>> main
}
