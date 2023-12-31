<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{

    public function __construct(private TemplateEngine $view, private ValidatorService $validate)
    {
    }

    public function  index()
    {
        echo $this->view->render("/register.php");
    }
    public function  register()
    {
        $this->validate->validateRegister($_POST);
    }
}
