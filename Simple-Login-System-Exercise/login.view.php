<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<div class="login">

    <?php
    require_once 'login.controller.php';
    
    $loginController = new LoginController();
    $loginResult = $loginController->handleLogin();

    if ($loginResult['success']) {
        echo "<p>Login successful!</p>";
    } else {
        echo "<p style='color: red;'>{$loginResult['message']}</p>";
    }
    ?>
    
    <form action="login.view.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username"><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password"><br>
        
        <input type="submit" value="Submit" name="submit">
    </form>
</div> 
</body>
</html>
