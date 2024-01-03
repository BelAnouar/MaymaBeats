<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class TestService
{



    public function __construct(private Database $db)
    {
    }

    public  function affiche()
    {
        $sql = "SELECT * FROM `styles`";
        $rest = $this->db->query($sql)->findAll();

        return $rest;
    }
}
