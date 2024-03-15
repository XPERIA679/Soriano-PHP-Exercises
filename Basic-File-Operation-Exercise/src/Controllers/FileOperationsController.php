<?php

namespace src\Controllers;

class FileOperationsController
{
    private $fileManager;

    public function __construct($fileManager)
    {
        $this->fileManager = $fileManager;
    }

    public function createFile($content)
    {
        $this->fileManager->createFile($content);
    }

    public function readFile()
    {
        return $this->fileManager->readFile();
    }

    public function deleteFile()
    {
        $this->fileManager->deleteFile();
    }
}
