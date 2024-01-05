<?php

declare(strict_types=1);  // ka t returni lina dima type string

namespace App\Controllers;

use App\Services\lyricServices;
use Framework\TemplateEngine;


class LyricsController
{

    public function __construct(private TemplateEngine $view, private  lyricServices $lyricServices) // templeEngine est un moteur li kayjib lina l contenu dyal l fiole li 3ndna f render li kyn f view
    {
    }
    public function index()
    {
        
        $lyrics = $this->lyricServices->afficherLyrics();
        echo $this->view->render("/lyrics.php", ['lyrics' => $lyrics]);
    }

    public function addLyrics()
    {
        $lyrics = $_POST['parole'];
        $this->lyricServices->insertLyrics($lyrics);
    }
}
