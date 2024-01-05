<?php

declare(strict_types=1);

namespace App\Controllers;

use app\Services\Reactionmodel;
use Framework\TemplateEngine;

class Reactioncontroller
{
  public function __construct(private TemplateEngine $view, private Reactionmodel $like)
  {
  }

  public function addlike($client_id, $song_id)
  {
    $this->like->addlike(1, 0, $client_id, $song_id);
  }


  public function adddislike($client_id, $song_id)
  {

    $this->like->adddislike(0, 1, $client_id, $song_id);
  }
}
