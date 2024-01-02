<?php


declare(strict_types=1);

namespace App\Controllers;


use Framework\TemplateEngine;

class LoginController
{


    function __construct(private TemplateEngine $view)
    {
    }

    function index()
    {
        echo  $this->view->render("/login.php");
    }
}
