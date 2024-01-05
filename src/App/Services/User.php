<?php
namespace App\Services;

require_once './src/Framework/Database.php';
require_once './src/App/container-definitions.php';





use Framework\Database;

class User{
    private function __construct()
    {
        $this->db = new Database;
    }
}