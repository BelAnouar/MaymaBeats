<?php


declare(strict_types=1);


namespace App\Services;

use Framework\Database;

class StylesService
{



    public function __construct(private Database $db)
    {
    }

    public  function getStyles()
    {

        $result =  $this->db->query("SELECT * FROM `styles`")->findAll();
        return $result;
    }
    public  function create(array $formData)
    {
        $styleName = $formData["styleName"];
        $this->db->query(
            "INSERT INTO styles(nomStyle)
            VALUES(:nomStyle)",
            [
                'nomStyle' => $styleName
            ]
        );
    }
}
