<?php

namespace src\Models;

class LoginModel
{
    private $username = 'admin';
    private $password = 'admin123';

    public function validateCredentials($inputUsername, $inputPassword): int
    {
        return ($inputUsername == $this->username && $inputPassword == $this->password);
    }
}
