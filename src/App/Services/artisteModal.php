<?php

declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class artisteModal {
    private $idArtiste ;
    private $imageAlbum ;
    private $title;
    private $description;
    private $dateC ;


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
    
    





}


?>