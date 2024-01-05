<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class ForgotController
{

    public function __construct(private TemplateEngine $view, private ValidatorService $validate)
    {
    }

    public function  index()
    {
        echo $this->view->render("/forgot.php");
    }

    public function frogetPass()
    {
        $email = $this->validate->getUserByEmail($_POST["email"], $_POST["Role"]);
        if ($email) {
            $_SESSION["user"] = $email["idAr"];
            $_SESSION["Role"] = $_POST["Role"];
            $this->validate->OTP($_POST);


            header("Location: opt");
        }
    }
}
