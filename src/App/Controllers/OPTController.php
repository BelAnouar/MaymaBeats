<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class OPTController
{

    public function __construct(private TemplateEngine $view, private ValidatorService $validate)
    {
    }

    public function  index()
    {
        echo $this->view->render("/OPT.php");
    }
    public function  sentPass()
    {

        $join = join('', $_POST);

        if ($join === $_SESSION["otp"]) {

            header("Location: Restpassword");
        }
    }
}
