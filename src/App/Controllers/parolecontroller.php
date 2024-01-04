<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Parole;
use Framework\TemplateEngine;


class parolecontroller
{
    public function __construct(private TemplateEngine $view, private Parole $parole)
    {
    }
    public function getlyrics()
    {
        $stm = $this->parole->getlyrics();

        echo $this->view->render("/SALAH.php", ["parole" => $stm]);
    }



    public function addlyrics()
    {
        $parole = $_POST["parole"];
        $this->parole->addlyrics($parole);
    }


    public function deletelyrics($idP)
    {
        $this->parole->deletelyrics($idP);
    }
}
