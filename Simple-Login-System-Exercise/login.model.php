<?php

class User {
    private $username = 'admin';
    private $password = 'admin123';

    public function validateCredentials($inputUsername, $inputPassword) {
        return ($inputUsername == $this->username && $inputPassword == $this->password);
    }
}
