<?php
declare (strict_types=1);

namespace app\Services;
use Framework\App;
use Framework\Database;

class Reactionmodel {
      

        public function __construct(private Database $db)
        {
                
        }
        public function addlike($like,$dislike,$client_id,$song_id) {
                $this->db->query(
                  "INSERT INTO reaction (like,dislike,client_id,song_id) VALUES (:like, :dislike, :client_id,song_id)",
                  [
                       ' like'=>$like,
                       ' dislike'=>$dislike,
                       ' client_id'=>$client_id,
                       ' song_id'=>$song_id,
                      

                  ]
                  );
               
}
public function adddislike($like,$dislike,$client_id,$song_id) {
        $this->db->query(
          "INSERT INTO reaction (like,dislike,client_id,song_id) VALUES (:like, :dislike, :client_id,song_id)",
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