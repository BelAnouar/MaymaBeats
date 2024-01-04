<?php 

declare(strict_types=1);

namespace App\Controllers;

use app\Services\parole;
use Framework\TemplateEngine;

class parolecontroller{
    public function __construct(private TemplateEngine $view,private parole $parole ){

    }

    public function getlyrics($parole){  
        $this->parole->getlyrics($parole);
     
        }


    public function addlyrics($parole){
      $this->parole->addlyrics($parole);
   
      }


      public function deletelyrics($idP){
        $this->parole->deletelyrics($idP);
        }
}