<?php

declare(strict_types=1);  // ka t returni lina dima type string

namespace App\Controllers;


use Framework\TemplateEngine;


class LyricsController
{

    public function __construct(private TemplateEngine $view) // templeEngine est un moteur li kayjib lina l contenu dyal l fiole li 3ndna f render li kyn f view
    {
    }
    public function index()
    {
        echo $this->view->render("/lyrics.php",);
    }
}
