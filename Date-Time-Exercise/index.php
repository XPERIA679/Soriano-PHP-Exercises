<?php 

spl_autoload_register(function ($class) 
{
    $path =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\Controllers\DateTimeController;

$dateTimeController = new DateTimeController();
$dateTimeController->displayDateTime();
