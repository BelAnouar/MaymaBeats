<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class indexServices
{



    public function __construct(private Database $db)
    {
    }

    public  function afficheSong()
    {
        $sql = "SELECT * FROM `song`";
        $rest = $this->db->query($sql)->findAll();

        return $rest;
    }
}
