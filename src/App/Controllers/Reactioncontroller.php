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
    $this->like->addlike( $client_id, $song_id);
  }


  public function adddislike($client_id, $song_id)
  {

    $this->like->adddislike( $client_id, $song_id);
  }
}
