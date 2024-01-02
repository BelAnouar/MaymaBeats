<?php


declare(strict_types=1);

namespace App\Controllers;

use App\Services\ValidatorService;
use Framework\TemplateEngine;

class AuthController
{

    public function __construct(private TemplateEngine $view, private ValidatorService $validate)
    {
    }

    public function  index()
    {
        echo $this->view->render("/signup.php");
    }
    public function  register()
    {
        $this->validate->validateRegister($_POST);
    }
    public function post()
    {
        header('Content-Type: application/json');

        // Assuming you want to handle the data received via POST request
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Example: Retrieving POST data
            $username = $_POST['username'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // Process the received data (You can perform validations, save to a database, etc.)
            // For demonstration purposes, just preparing a response array
            $response = [
                'message' => 'Received data successfully',
                'username' => $username,
                'email' => $email,
                'password' => $password
            ];

            echo json_encode($response); // Return the response as JSON
        } else {
            // Handle if it's not a POST request
            http_response_code(400); // Bad request status
            echo json_encode(['error' => 'This endpoint only accepts POST requests.']);
        }
    }
}
