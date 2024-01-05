<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\StylesService;
use Framework\TemplateEngine;


class StylesController
{

    public function __construct(private TemplateEngine $view, private StylesService $style)
    {
    }
    public function index()
    {
        $rest = $this->style->getStyles();
        echo $this->view->render("/admin-s.php", ["styles" => $rest]);
     

    }
    public function insertStyle()
    {

        $this->style->create($_POST);
        header("Location:admin-s");
    }
}
