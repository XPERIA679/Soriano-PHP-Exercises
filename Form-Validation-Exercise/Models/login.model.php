<?php

namespace MyApp\Models;

class User
{
    private $username = 'admin';
    private $password = 'admin123';

    public function validateCredentials($inputUsername, $inputPassword): int
    {
        return ($inputUsername == $this->username && $inputPassword == $this->password);
    }
}
