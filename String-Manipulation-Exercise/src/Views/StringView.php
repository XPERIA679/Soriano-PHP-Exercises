<?php

namespace src\Views;

class StringView
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        include 'StringManipulation.php';
    }
}