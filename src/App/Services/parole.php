<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class Parole
{






    public function __construct(private Database $db)
    {
    }


    public function getlyrics()
    {
        $result = $this->db->query(
            "SELECT * FROM `parole` "
        )->findAll();
        return $result;
    }

    public function addlyrics($parole)
    {
        $this->db->query(
            "INSERT INTO parole (parole) VALUES (:parole)",
            [
                'parole' => $parole,

            ]
        );
    }

    public function deletelyrics($idP)
    {
        $this->db->query(
            "DELETE FROM parole WHERE id = :idP",

            [
                'id' => $idP,

            ]
        );
    }
}
