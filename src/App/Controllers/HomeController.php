<?php

declare(strict_types=1);

namespace App\Controllers;


use Framework\TemplateEngine;
use App\Config\Paths;
use App\Services\indexServices;
use App\Services\TestService;

class HomeController
{



  public function __construct(private TemplateEngine $view, private indexServices $indexServices)
  {
  }
  public function home()
  {
    $songs = $this->indexServices->afficheSong();

    echo $this->view->render("/index.php", ["songs" => $songs]);
  }
}
