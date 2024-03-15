<?php use src\Controllers\ContactController; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<div class="login">

    <?php

    $contactController = new ContactController(isset($_POST) ? $_POST : []);
    $errors = $contactController->validateForm();
    ?>
    
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>"><br>
        <div class="errors">
            <?php echo $errors['name'] ?? '' ?>
        </div>
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>"><br>
        <div class="errors">
            <?php echo $errors['email'] ?? '' ?>
        </div>

        <label for="messages">Message:</label>
        <textarea name="messages" rows="4" value="<?php echo !empty($_POST['messages']) ? htmlspecialchars($_POST['messages']) : '' ?>"></textarea><br>
        <div class="errors">
            <?php echo $errors['messages'] ?? '' ?>
        </div>
        
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    $contactResult = $contactController->handleContact();
    ?>

</div> 
</body>
</html>
