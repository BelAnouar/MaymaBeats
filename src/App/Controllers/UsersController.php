<?php

use App\Services\User;

require_once '../Services/User.php';
class Users
{
  

    public function __construct()
    {
        
    }
    public function register()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    }
}
