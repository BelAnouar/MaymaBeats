<?php

declare(strict_types=1);

namespace App\Controllers;


use Framework\TemplateEngine;
use App\Config\Paths;

class AdminNot
{



    public function __construct(private TemplateEngine $view)
    {
    }
    public function index()
    {
        echo $this->view->render("/adminNot.php");
    }
}
