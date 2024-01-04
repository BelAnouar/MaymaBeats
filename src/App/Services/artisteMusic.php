<?php

declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class artisteMusic {
   
    public function __construct( private Database $db ) {

    }

    public function afficherMusic($idAlbum){
        $sql = "SELECT * FROM `song` inner join styles on song.style_id = styles.idStyle  WHERE `album_id` = :idAb ";
        $result= $this->db->query($sql,[
            ':idAb'=> $idAlbum,
            
        ])->findAll();
        return $result;
      }  

    public function addMusic($imageS,$nomS,$album_id,$style_id){
        $sql = "INSERT INTO song (nomS,imageS,album_id,style_id) values (:nomS,:imageS,:album_id,:style_id)";
        $this->db->query($sql,[
            ':imageS'=> $imageS,
            ':nomS'=> $nomS,
            ':album_id'=> $album_id,
            ':style_id'=> $style_id

        ]);
    }    
}   