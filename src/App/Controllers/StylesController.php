<?php

declare(strict_types=1);

namespace App\Controllers;


use Framework\TemplateEngine;


class StylesController
{



    public function __construct(private TemplateEngine $view)
    {
    }
    public function index()
    {
        echo $this->view->render("/admin-s.php");
    }
    public function view(array $l)
    {
        dd($l["transaction"]);
    }
}
