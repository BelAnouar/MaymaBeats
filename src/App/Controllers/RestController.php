<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class RestController
{

    public function __construct(private TemplateEngine $view, private ValidatorService $validator)
    {
    }

    public function  index()
    {
        echo $this->view->render("/Restpass.php");
    }
    public function changePass()
    {
        if ($_POST['password'] === $_POST['confirm-password']) {
            $iduser = $_SESSION["user"];
            $role = $_SESSION["role"];
            $this->validator->getchengePass($iduser, $_POST['password'], $role);
            header("Location: login");
        } else {
            echo "Passwords do not match!";
        }
    }
}
