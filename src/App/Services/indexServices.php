<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class indexServices
{
    private $idS;
    private $nomS;
    private $imageS;
    private $album_id;
    private $dateC;
    private $style_id;


    private function __construct(private Database $db)
    {
    }

    public function afficheSong()
    {
        $sql = "SELECT * FROM `song`";
        $sql = $this->db->query($sql)->findAll();
        return $sql;
    }
}
