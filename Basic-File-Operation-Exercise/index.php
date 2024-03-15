<?php 

spl_autoload_register(function($class)
{
    $path = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
});

use src\Views\FileOperationsView;

$fileView = new FileOperationsView();
$fileView->render();
