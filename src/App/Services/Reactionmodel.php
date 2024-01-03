<?php
declare (strict_types=1);

namespace app\Services;
use Framework\App;
use Framework\Database;

class Reactionmodel {
        private $idR;
        private $like;
        private $dislike;
        private $client_id;
        private $song_id;

        public function __construct(private Database $db)
        {
                
        }
        public function addreaction($like,$dislike,$client_id,$song_id) {
                $this->db->query(
                  "INSERT INTO reaction (like,dislike,client_id,song_id) VALUES ( :like, :dislike, :client_id,song_id)",
                  [
                       ' like'=>$like,
                       ' dislike'=>$dislike,
                       ' client_id'=>$client_id,
                       ' song_id'=>$song_id,
                      

                  ]
                  );
               
}







}


?>