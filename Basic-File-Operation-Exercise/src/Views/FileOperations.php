<?php 

use src\Models\FileOperationsModel;
use src\Controllers\FileOperationsController;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="file">
<h1>File Operations</h1>

<?php

    $fileManager = new FileOperationsModel();
    $fileController = new FileOperationsController($fileManager);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['create']))
        {
            $fileController->createFile($_POST['content']);
        }
        elseif (isset($_POST['read']))
        {
            $content = $fileController->readFile();
            echo "<p>File content: $content</p>";
        }
        elseif (isset($_POST['delete']))
        {
            $fileController->deleteFile();
            echo "<p>File deleted successfully.</p>";
        }
    }
?>

    <form method="post" action="">
        <label for="content">File Content:</label>
        <input type="text" name="content" id="content">
        <button type="submit" name="create">Create File</button>
        <button type="submit" name="read">Read File</button>
        <button type="submit" name="delete">Delete File</button>
    </form>
</div>
</body>
</html>