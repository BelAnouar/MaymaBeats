<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\TestService;
use Framework\TemplateEngine;


class TestController
{



    public function __construct(private TemplateEngine $view, private TestService $test)
    {
    }
    public function index()
    {
        $reslt = $this->test->affiche();
        dd($reslt);
        echo $this->view->render("/test.php");
    }
    public function post()
    {
        // dd($_POST["tt"]);
    }
    public function aff(array $t)
    {
        // dd($t["anouar"]);
    }
}
