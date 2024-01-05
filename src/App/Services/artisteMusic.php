<?php

declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class artisteMusic
{

    public function __construct(private Database $db)
    {
    }

    public function afficherMusic($idAlbum)
    {
        $sql = "SELECT * FROM `song` inner join styles on song.style_id = styles.idStyle  WHERE `album_id` = :idAb ";
        $result = $this->db->query($sql, [
            ':idAb' => $idAlbum,

        ])->findAll();
        return $result;
    }

    public function addMusic($imageS, $nomS, $album_id, $style_id)
    {
        $sql = "INSERT INTO song (nomS,imageS,album_id,style_id) values (:nomS,:imageS,:album_id,:style_id)";
        $this->db->query($sql, [
            ':imageS' => $imageS,
            ':nomS' => $nomS,
            ':album_id' => $album_id,
            ':style_id' => $style_id

        ]);
    }

    public function getArtiste($artist_id)
    {
        $sql = "SELECT artists.*, COUNT(album.idAb) as album_count , COUNT(song.idS) as songs_count
                FROM artists
                JOIN album ON artists.idAr = album.artist_id
                JOIN song ON album.idAb = song.album_id
                WHERE artists.idAr = :artist_id
                GROUP BY artists.idAr";

        $result = $this->db->query($sql, [':artist_id' => $artist_id])->findAll();
        return $result;
    }
}
