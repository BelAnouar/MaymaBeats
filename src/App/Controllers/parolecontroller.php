<?php 

declare(strict_types=1);

namespace App\Controllers;

use app\Services\parole;
use Framework\TemplateEngine;

class parolecontroller{
    public function __construct(private TemplateEngine $view,private parole $idP ){

    }

    public function addlyrics($parole){
      $this->addlyrics($parole);
   
      }


      public function deletelyrics($idP){
        $this->addlyrics($idP);
        }
}