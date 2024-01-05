<?php

declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class artisteModal {

    public function __construct( private Database $db ) {

    }

    public function afficherAlbum(){
            
            $sql = $this->db->query("SELECT * FROM `album`")->findAll();
        
            return $sql;
     }

    public function addAlbum($imageAlbum, $dateC, $artist_id, $title, $description)
    {
        $sql = "INSERT INTO album (imageAb, date_c, artist_id, title, description) VALUES (:imageAlbum, :dateC, :artist_id, :title, :description)";
        $this->db->query($sql,[
            ':imageAlbum'=> $imageAlbum,
            ':dateC'=> $dateC,
            ':artist_id'=> $artist_id,
            ':title'=> $title,
            ':description'=> $description
        ]);
        
        }
    public function getAlbumById($id)
    {
<<<<<<< HEAD
        $sql = "SELECT * FROM `album` WHERE `idAb` = :idAb ";
=======
        $sql = "SELECT * FROM album join artists on album.artist_id = artists.idAr WHERE `idAb` = :idAb ";
>>>>>>> salah
        $result= $this->db->query($sql,[
            ':idAb'=> $id,
            
        ])->find();
        return $result;
        
        }

  
}


?>