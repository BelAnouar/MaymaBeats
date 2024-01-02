<?php 

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class SalahController{
    public function __construct(private TemplateEngine $view){

    }

    public function index(){
        echo $this->view->render("/SALAH.php");
    }
}