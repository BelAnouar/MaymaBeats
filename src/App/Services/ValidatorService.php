<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class ValidatorService
{



    public function __construct(private Database $db)
    {
    }

    public  function create(array $formData)
    {
        $val = $formData["rr"];
        $this->db->query(
            "INSERT INTO styles(nomStyle)
            VALUES(:val)",
            [
                'val' => $val

            ]
        );
    }
}
