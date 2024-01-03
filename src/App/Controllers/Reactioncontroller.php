<?php 

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class Reactioncontroller{
    public function __construct(private TemplateEngine $view){

    }

    public function addreaction(){
        echo $this->view->render("/.php");
    }
}