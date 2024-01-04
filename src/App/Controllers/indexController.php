<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\indexServices;
use Framework\TemplateEngine;

class IndexController
{
    public function __construct(private TemplateEngine $view, private indexServices $index)
    {
    }

    public function index()
    {
        $songs = $this->index->afficheSong();
        echo $this->view->render("/index.php", ["songs" => 'fj']);
    }
}
