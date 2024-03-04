<?php 

namespace MyApp\Controllers;

require '../Models/login.model.php';

use MyApp\Models;

class LoginController
{
    private $userModel;
    private $data;
    private $errors = [];
    private static $fields = ['username', 'password'];

    public function __construct($post_data)
    {
        $this->data = $post_data;
        $this->userModel = new Models\User();
    }

    public function handleLogin()
    {
        $result = ['success' => false, 'message' => ''];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->userModel->validateCredentials($username, $password))
            {
                $result['success'] = true;
            } else {
                $result['message'] = 'Invalid credentials. Please try again.';
            }
            
        }

        return $result;
    }

    public function validateForm()
    {
        foreach (self::$fields as $field)
        {
            if (!isset($this->data[$field]))
            {
                return;
            }
        }
    
        $this->validateUsername();
        $this->validatePassword();
        return $this->errors;
    }

    private function validateUsername()
    {

        $val = trim($this->data['username']);

        if(empty($val))
        {
            $this->addError('username', 'username cannot be empty'); 
        }

    }

    private function validatePassword()
    {

        $val = trim($this->data['password']);

        if(empty($val)) {
            $this->addError('password', 'password cannot be empty'); 
        }

    }

    private function addError($key, $val)
    {
        $this->errors[$key] = $val;
    }
}
