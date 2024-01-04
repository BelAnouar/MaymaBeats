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
}
