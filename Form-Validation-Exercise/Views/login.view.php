<?php require 'Controllers/login.controller.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Field Validation</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    
<div class="login">

    <?php
    
    $loginController = new MyApp\Controllers\LoginController(isset($_POST) ? $_POST : []);
    $loginResult = $loginController->handleLogin();
    $errors = $loginController->validateForm();

    if ($loginResult['success']) {
        echo "<p>Login successful!</p>";
    } else {
        echo "<p style='color: red;'>{$loginResult['message']}</p>";
    }

    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo !empty($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>"><br>
        <div class="errors">
            <?php echo $errors['username'] ?? '' ?>
        </div>
        
        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo !empty($_POST['password']) ? htmlspecialchars($_POST['password']) : '' ?>"><br>
        <div class="errors">
            <?php echo $errors['password'] ?? '' ?>
        </div>
        
        <input type="submit" value="Submit" name="submit">
    </form>
</div> 
</body>
</html>
