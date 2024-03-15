<?php

namespace src\Models;

class FileOperationsModel
{
    private $filename = 'FileGenerated.txt';

    public function createFile($content)
    {
        file_put_contents($this->filename, $content);
    }

    public function readFile()
    {
        return file_get_contents($this->filename);
    }

    public function deleteFile()
    {
        unlink($this->filename);
    }
}
