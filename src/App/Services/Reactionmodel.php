<?php

declare(strict_types=1);

namespace App\Services;

use Framework\App;
use Framework\Database;

class Reactionmodel
{


     public function __construct(private Database $db)
     {
     }
     public function addlike($client_id, $song_id)
     {
          $this->db->query(
               "INSERT INTO `reaction`( `like`, `dislike`, `client_id`, `song_id`) VALUES  (1, 0, :client_id, :song_id)",
               [
                    ':client_id' => $client_id,
                    ':song_id' => $song_id,
               ]
          );
     }

     public function adddislike($client_id, $song_id)
     {
          $this->db->query(
               "INSERT INTO reaction (like, dislike, client_id, song_id) VALUES (0, 1, :client_id, :song_id)",
               [
                    ':client_id' => $client_id,
                    ':song_id' => $song_id,
               ]
          );
     }
}
