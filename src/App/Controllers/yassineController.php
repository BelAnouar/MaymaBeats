<?php 

declare(strict_types = 1);

namespace App\Controllers;

use Framework\TemplateEngine;

class YassineController{

    public function __construct(private TemplateEngine $views){

    }

    public function index (){
        echo $this->views->render("/YASSINE.php");
    }




}



?>