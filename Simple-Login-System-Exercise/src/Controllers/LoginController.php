<?php

namespace src\Controllers;

use src\Models\LoginModel;

class LoginController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new LoginModel();
    }

    public function handleLogin()
    {
        $result = ['success' => false, 'message' => ''];

        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->userModel->validateCredentials($username, $password))
            {
                $result['success'] = true;
                return $result;
            }
            
            $result['message'] = 'Invalid credentials. Please try again.';
            return $result;
        }
        return $result;
    }
}