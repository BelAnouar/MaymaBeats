<?php

declare(strict_types=1);

namespace App\Controllers;



use Framework\TemplateEngine;
use App\Services\Reactionmodel;

class Reactioncontroller
{
  public function __construct(private TemplateEngine $view, private Reactionmodel $reactionmodel)
  {
  }

  public function addlike()
  {
    header('Content-Type: application/json');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $json_data = file_get_contents('php://input');


      $data = json_decode($json_data, true);

      if ($data === null) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data.']);
      } else {

        

        $this->reactionmodel->addlike($data['id_client'], $data['id_song']);
      }
    } else {

      http_response_code(400);
      echo json_encode(['error' => 'This endpoint only accepts POST requests.']);
    }
  }


  public function adddislike(){

  
  header('Content-Type: application/json');


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $json_data = file_get_contents('php://input');


      $data = json_decode($json_data, true);

      if ($data === null) {
        http_response_code(400);
        echo json_encode(['error' => 'Invalid JSON data.']);
      } else {

        

        $this->reactionmodel->adddislike($data['id_client'], $data['id_song']);
      }
    }
    // } else {

    //   http_response_code(400);
    //   echo json_encode(['error' => 'This endpoint only accepts POST requests.']);
    // }
}
}