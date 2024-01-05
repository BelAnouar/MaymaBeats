<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class lyricServices
{



    public function __construct(private Database $db)
    {
    }

    public function insertLyrics($lyrics)
    {
        $this->db->query("INSERT INTO `parole`(`parole`, `isaprove`, `client_id`, `song_id`) VALUES (:parole , 0, 1,1)", [':parole' => $lyrics]);

        header('location:parole');
    }

    public function afficherLyrics()
    {
      return  $this->db->query("SELECT parole FROM parole")->findAll();
    }
}
